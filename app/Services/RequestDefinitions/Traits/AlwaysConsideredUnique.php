<?php

namespace App\Services\RequestDefinitions\Traits;

use Illuminate\Support\Str;

trait AlwaysConsideredUnique
{
    /**
     * Generate a unique identifier for the request.
     * 
     * This is used to track and prevent identical/duplicate
     * calls from being processed in quick succession.
     */
    public function uniqueId(): string
    {
        return (string) Str::uuid();
    }
}
