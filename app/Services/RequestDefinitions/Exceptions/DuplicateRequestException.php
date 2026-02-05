<?php

namespace App\Services\RequestDefinitions\Exceptions;

use App\Services\RequestDefinitions\GenericRequestDefinition;

class DuplicateRequestException extends Exception
{
    public function __construct(
        GenericRequestDefinition $definition,
        string $message = 'An identical request was attempted too many times in quick succession. Try again later.',
    ) {
        parent::__construct($definition, $message);
    }
}
