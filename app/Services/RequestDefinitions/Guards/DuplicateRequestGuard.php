<?php

namespace App\Services\RequestDefinitions\Guards;

use App\Services\RequestDefinitions\Exceptions\DuplicateRequestException;
use App\Services\RequestDefinitions\GenericRequestDefinition;
use Illuminate\Support\Facades\RateLimiter;

class DuplicateRequestGuard implements Guard
{
    public function guard(GenericRequestDefinition $definition): void
    {
        $key = 'request-rate-limit:' . $definition->uniqueID();

        if (
            RateLimiter::tooManyAttempts(
                $key,
                $definition->maxExecutionsWithinDecayWindow(),
            )
        ) {
            throw new DuplicateRequestException($definition);
        }

        RateLimiter::hit($key, $definition->decayWindowSeconds());
    }
}
