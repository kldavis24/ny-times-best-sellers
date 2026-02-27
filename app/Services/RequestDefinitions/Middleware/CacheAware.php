<?php

namespace App\Services\RequestDefinitions\Middleware;

use GuzzleHttp\Promise\FulfilledPromise;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Cache;
use Psr\Http\Message\RequestInterface;

class CacheAware extends AbstractMiddleware
{
    public function __invoke(callable $handler)
    {
        return function (
            RequestInterface $request,
            array $options,
        ) use ($handler) {
            if (!$this->definition->isCacheAware()) {
                return $handler($request, $options);
            }

            $cacheKey = $this->definition->uniqueID();

            if (Cache::has($cacheKey)) {
                return new FulfilledPromise(
                    Message::parseResponse(Cache::get($cacheKey)),
                );
            }

            return $handler($request, $options)->then(
                /** @var ResponseInterface */
                function ($response) use ($cacheKey) {
                    if (
                        $response->getStatusCode() >= 200 &&
                        $response->getStatusCode() < 300
                    ) {
                        Cache::put(
                            $cacheKey,
                            Message::toString(
                                (clone $response)->withHeader(
                                    'Request-Definition-Cache-Hit',
                                    'HIT',
                                ),
                            ),
                            ttl: $this->definition->cacheTtl(),
                        );
                    }

                    return $response;
                },
            );
        };
    }
}
