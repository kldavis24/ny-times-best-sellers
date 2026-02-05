<?php

namespace App\Services\RequestDefinitions\Exceptions;

use App\Services\RequestDefinitions\GenericRequestDefinition;
use GuzzleHttp\Exception\TransferException;
use Throwable;

abstract class Exception extends TransferException
{
    public function __construct(
        public GenericRequestDefinition $definition,
        string $message = '',
        int $code = 0,
        ?Throwable $previous = null,
    ) {
        parent::__construct($message, $code, $previous);
    }
}
