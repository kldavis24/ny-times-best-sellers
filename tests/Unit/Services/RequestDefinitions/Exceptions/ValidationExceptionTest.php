<?php

namespace Tests\Unit\Services\RequestDefinitions\Exceptions;

use App\Services\Enums\ExternalService;
use App\Services\RequestDefinitions\Exceptions\ValidationException;
use Illuminate\Validation\ValidationException as IlluminateValidationException;
use App\Services\RequestDefinitions\RequestDefinition;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class ValidationExceptionTest extends TestCase
{
    private function makeDefinition(array $rules = [], ?array $payload = null): RequestDefinition
    {
        return new class($rules, $payload) extends RequestDefinition {
            public function __construct(
                private readonly array $httpRules,
                private readonly ?array $httpPayload,
            ) {}

            public function method(): string
            {
                return self::HTTP_GET;
            }

            public function url(): string
            {
                return 'https://example.com';
            }

            public function rules(): array
            {
                return $this->httpRules;
            }

            public function payload(): ?array
            {
                return $this->httpPayload;
            }

            public function externalService(): ?ExternalService
            {
                return null;
            }
        };
    }

    private function makeException(array $rules = ['name' => 'required']): ValidationException
    {
        $definition = $this->makeDefinition($rules);

        return new ValidationException($definition, $definition->validator());
    }

    public function testStoresDefinitionReference(): void
    {
        $definition = $this->makeDefinition(['name' => 'required']);

        $exception = new ValidationException($definition, $definition->validator());

        $this->assertSame($definition, $exception->definition);
    }

    public function testMessageContainsValidationErrors(): void
    {
        $exception = $this->makeException(['name' => 'required', 'email' => 'required']);

        $this->assertNotEmpty($exception->getMessage());
    }

    public function testMessageIsFormattedAsFlattendErrors(): void
    {
        $exception = $this->makeException(['name' => 'required']);

        // The message should be a plain string of joined error messages (not an array/JSON)
        $this->assertNotEmpty($exception->getMessage());

        $this->assertStringNotContainsString('"name"', $exception->getMessage());
    }

    public function testRenderReturnsUnprocessableEntityStatusCode(): void
    {
        $exception = $this->makeException();

        $response = $exception->render(Request::create('/'));

        $this->assertSame(Response::HTTP_UNPROCESSABLE_ENTITY, $response->getStatusCode());
    }

    public function testRenderReturnsJsonWithErrorsKey(): void
    {
        $exception = $this->makeException(['name' => 'required']);

        $response = $exception->render(Request::create('/'));

        $content = json_decode($response->getContent(), true);

        $this->assertArrayHasKey('errors', $content);

        $this->assertArrayHasKey('name', $content['errors']);
    }

    public function testExtendsLaravelValidationException(): void
    {
        $exception = $this->makeException();

        $this->assertInstanceOf(IlluminateValidationException::class, $exception);
    }
}
