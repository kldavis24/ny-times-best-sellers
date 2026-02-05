<?php

namespace App\Services\RequestDefinitions\Exceptions;

use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Psr7\Request;
use Throwable;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Response as ServiceResponse;

class ServiceUnavailableException extends BadResponseException
{
    public const DEFAULT_MESSAGE = 'The service did not respond within a reasonable time. Try again later.';

    public function __construct(
        string $message = self::DEFAULT_MESSAGE,
        ?RequestInterface $request = null,
        ?ResponseInterface $response = null,
        ?Throwable $previous = null,
        array $handlerContext = [],
    ) {
        parent::__construct(
            $message,
            $request ?? new Request('GET', 'not-available'),
            $response ?? new response(ServiceResponse::HTTP_SERVICE_UNAVAILABLE),
            $previous,
            $handlerContext,
        );
    }
}
