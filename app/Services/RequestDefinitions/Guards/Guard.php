<?php

namespace App\Services\RequestDefinitions\Guards;

use App\Services\RequestDefinitions\GenericRequestDefinition;

interface Guard
{
    public function guard(GenericRequestDefinition $definition): void;
}
