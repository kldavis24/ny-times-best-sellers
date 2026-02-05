<?php

namespace App\Services;

use App\Services\Enums\ExternalService;

abstract class AbstractExternalService
{
    abstract public static function externalServiceID(): int;

    abstract public static function externalService(): ExternalService;
}
