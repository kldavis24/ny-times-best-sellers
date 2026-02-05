<?php

namespace App\Services\RequestDefinitions\Middleware;

use App\Services\RequestDefinitions\Guards\DuplicateRequestGuard;
use Closure;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;

class GuardAgainstDuplicates extends AbstractMiddleware
{
    public function __invoke(callable $handler): Closure
    {
        return function (
            RequestInterface $request,
            array $options,
        ) use ($handler): PromiseInterface {
            (new DuplicateRequestGuard())->guard($this->definition);

            return $handler($request, $options);
        };
    }
}
