<?php

namespace App\Services\RequestDefinitions\Middleware;

use App\Services\RequestDefinitions\GenericRequestDefinition;

abstract class AbstractMiddleware
{
    public function __construct(
        protected GenericRequestDefinition $definition
    ) {
        //
    }

    abstract public function __invoke(callable $handler);
}
