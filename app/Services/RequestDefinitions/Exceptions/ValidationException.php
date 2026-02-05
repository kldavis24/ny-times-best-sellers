<?php

namespace App\Services\RequestDefinitions\Exceptions;

use App\Services\RequestDefinitions\GenericRequestDefinition;
use App\Services\RequestDefinitions\RequestDefinition;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ValidationException extends \Illuminate\Validation\ValidationException
{
    /**
     * The request definition which failed validation.
     * 
     * @var RequestDefinition
     */
    public RequestDefinition $definition;

    /**
     * Create a new validation exception instance.
     */
    public function __construct(GenericRequestDefinition $definition, Validator $validator)
    {
        $this->definition = $definition;

        parent::__construct($validator);

        $this->message = join(' ', Arr::flatten($this->errors()));
    }

    /**
     * Render the exception into an HTTP response.
     */
    public function render(Request $request): JsonResponse
    {
        return response()->json(['errors' => $this->errors()], Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}
