<?php

namespace Tests\Unit\Services\RequestDefinitions\Exceptions;

use App\Services\Enums\ExternalService;
use App\Services\RequestDefinitions\Exceptions\DuplicateRequestException;
use App\Services\RequestDefinitions\RequestDefinition;
use App\Services\RequestDefinitions\Exceptions\Exception;
use Tests\TestCase;

class DuplicateRequestExceptionTest extends TestCase
{
    private function makeDefinition(): RequestDefinition
    {
        return new class extends RequestDefinition {
            public function method(): string
            {
                return self::HTTP_GET;
            }

            public function url(): string
            {
                return 'https://example.com';
            }

            public function rules(): array
            {
                return [];
            }

            public function externalService(): ?ExternalService
            {
                return null;
            }
        };
    }

    public function testHasDefaultMessage(): void
    {
        $exception = new DuplicateRequestException($this->makeDefinition());

        $this->assertStringContainsString('identical request', $exception->getMessage());
    }

    public function testStoresDefinitionReference(): void
    {
        $definition = $this->makeDefinition();

        $exception = new DuplicateRequestException($definition);

        $this->assertSame($definition, $exception->definition);
    }

    public function testAcceptsCustomMessage(): void
    {
        $exception = new DuplicateRequestException(
            definition: $this->makeDefinition(),
            message: 'Custom duplicate request message.',
        );

        $this->assertSame('Custom duplicate request message.', $exception->getMessage());
    }

    public function testExtendsBaseException(): void
    {
        $exception = new DuplicateRequestException($this->makeDefinition());

        $this->assertInstanceOf(Exception::class, $exception);
    }
}
