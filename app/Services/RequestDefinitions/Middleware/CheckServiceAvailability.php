<?php

namespace App\Services\RequestDefinitions\Middleware;

use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Response;
use App\Services\RequestDefinitions\Exceptions\ServiceUnavailableException;

class CheckServiceAvailability extends AbstractMiddleware
{
    public function __invoke(callable $handler)
    {
        return function (
            RequestInterface $request,
            array $options,
        ) use ($handler): PromiseInterface {
            return $handler($request, $options)->then(
                function ($response) use ($request) {
                    $this->throwIfNeeded($response, $request);

                    return $response;
                },
                function ($exception) use ($request) {
                    $response = method_exists($exception, 'getResponse')
                        ? $exception->getResponse()
                        : null;

                    $this->throwIfNeeded($response, $request);

                    throw $exception;
                },
            );
        };
    }

    protected function throwIfNeeded($response, $request)
    {
        if (
            $response instanceof ResponseInterface &&
            in_array($response->getStatusCode(), $this->statusCodes())
        ) {
            throw new ServiceUnavailableException(
                request: $request,
                response: $response,
            );
        }
    }

    protected function statusCodes(): array
    {
        return [
            Response::HTTP_INTERNAL_SERVER_ERROR,
            Response::HTTP_BAD_GATEWAY,
            Response::HTTP_SERVICE_UNAVAILABLE,
            Response::HTTP_GATEWAY_TIMEOUT,
        ];
    }
}
