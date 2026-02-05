<?php

namespace App\Services\RequestDefinitions;

use App\Services\Enums\ExternalService;
use App\Services\RequestDefinitions\Exceptions\ValidationException;
use Illuminate\Contracts\Support\MessageBag;
use Illuminate\Validation;
use Illuminate\Support\Facades\Validator;

abstract class GenericRequestDefinition
{
    /**
     * Default value for max execution within decay window.
     *
     * @var int
     */
    public const MAX_EXECUTION_WITHIN_DECAY_WINDOW = 2;

    /**
     * Default value for decay window seconds.
     *
     * @var int
     */
    public const DECAY_WINDOW_SECONDS = 15;

    /**
     * Options set on the request.
     *
     * These are usually applied from the code creating the definition instance,
     * as the definition itself has an options() method for defaults.
     */
    protected array $options = [];

    /**
     * Generate a unique identifier for the request.
     *
     * This is used to track and prevent identical/duplicate
     * calls from being processed in quick succession.
     */
    abstract public function uniqueID(): string;

    /**
     * Is the request aware of of the current cache?
     */
    abstract public function isCacheAware(): bool;

    /**
     * What is the request's cache TTL?
     */
    abstract public function cacheTtl(): int;

    /**
     * What is the external service ID this request definition is associated with?
     */
    abstract public function externalServiceID(): ?int;

    /**
     * What is the external service name this request definition is associated with?
     */
    abstract public function externalService(): ?ExternalService;

    /**
     * Customize options for the request.
     */
    abstract public function options(): array;

    /**
     * Validation rules to apply to the request.
     *
     * @link https://laravel.com/docs/9.x/validation#available-validation-rules
     */
    abstract public function rules(): array;

    /**
     * Send the built request defined by this class.
     */
    abstract public function send();

    /**
     * Headers to apply to the request.
     */
    abstract public function headers(): array;

    /**
     * When invoking a concrete instance of this class, build and
     * send a PendingRequest based on the request definition.
     */
    public function __invoke()
    {
        return $this->send();
    }

    /**
     * Validate the request data, and throw a ValidationException if one or
     * more validation rules fail.
     *
     * @throws ValidationException
     */
    public function validate(): static
    {
        $validator = $this->validator();

        if ($validator->fails()) {
            throw new ValidationException($this, $validator);
        }

        return $this;
    }

    /**
     * JSON data to set within the request body.
     *
     * @link https://docs.guzzlephp.org/en/stable/request-options.html#json
     */
    public function payload(): ?array
    {
        return null;
    }

    public function validator(): Validation\Validator
    {
        return Validator::make(
            $this->validationData(),
            $this->rules(),
            $this->validationMessages(),
            $this->validationAttributes(),
        );
    }

    /**
     * Return the message bag of validation errors. If validation hasn't
     * been performed yet, it will be.
     */
    public function errors(): MessageBag
    {
        return $this->validator()->errors();
    }

    protected function validationMessages(): array
    {
        return [];
    }

    protected function validationAttributes(): array
    {
        return [];
    }

    /**
     * Collect all information needed to pass validation
     * for this definition.
     */
    protected function validationData(): array
    {
        return $this->payload() ?? [];
    }

    /**
     * Has the form_params/json/query data passed all validation rules?
     */
    public function isValid(): bool
    {
        return $this->validator()->passes();
    }

    /**
     * Invert validation passing inquiry.
     */
    public function isInvalid(): bool
    {
        return !$this->isValid();
    }

    /**
     * Add one or more Guzzle options.
     */
    public function addOptions(array $options): static
    {
        $this->options = array_merge($this->options, $options);

        return $this;
    }

    /**
     * Collect all options for the request.
     */
    public function allOptions(): array
    {
        return array_merge($this->options(), $this->options);
    }

    /**
     * Is the request definition hitting a 3rd party API?
     */
    public function isExternal(): bool
    {
        return true;
    }

    /**
     * Description of the request definition. By default, this is the FQN
     * for the class on thebottom of the concrete class.
     */
    public function description(): ?string
    {
        return null;
    }

    /**
     * How many times can the EXACT SAME request be issued
     * to an external serice within the decay window?
     *
     * @see decayWindowSeconds())
     */
    public function maxExecutionsWithinDecayWindow(): int
    {
        return self::MAX_EXECUTION_WITHIN_DECAY_WINDOW;
    }

    /**
     * The decay window (in seconds) within which the max number of
     * executions of this request definition is allowed.
     *
     * i.e.
     *  - decay window: 15
     *  - max executions: 2
     *
     * This means within any 15-second period of time, the EXACT SAME
     * request cannot be issued more than 2 times.
     */
    public function decayWindowSeconds(): int
    {
        return self::DECAY_WINDOW_SECONDS;
    }
}
