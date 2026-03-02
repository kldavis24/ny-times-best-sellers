<?php

namespace Tests\Unit\Services\RequestDefinitions\Guards;

use App\Services\Enums\ExternalService;
use App\Services\RequestDefinitions\Exceptions\DuplicateRequestException;
use App\Services\RequestDefinitions\Guards\DuplicateRequestGuard;
use App\Services\RequestDefinitions\RequestDefinition;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class DuplicateRequestGuardTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Cache::flush();
    }

    private function makeDefinition(string $url = 'https://example.com'): RequestDefinition
    {
        return new class($url) extends RequestDefinition {
            public function __construct(private readonly string $httpUrl) {}
            public function method(): string
            {
                return self::HTTP_GET;
            }
            public function url(): string
            {
                return $this->httpUrl;
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

    public function testGuardPassesOnFirstCall(): void
    {
        $this->expectNotToPerformAssertions();

        $guard = new DuplicateRequestGuard();

        $definition = $this->makeDefinition('https://example.com/guard-first');

        $guard->guard($definition);
    }

    public function testGuardPassesForAllCallsWithinMaxExecutionLimit(): void
    {
        $this->expectNotToPerformAssertions();

        $guard = new DuplicateRequestGuard();

        $definition = $this->makeDefinition('https://example.com/guard-within-limit');

        $maxAttempts = $definition->maxExecutionsWithinDecayWindow();

        for ($i = 0; $i < $maxAttempts; $i++) {
            $guard->guard($definition);
        }
    }

    public function testGuardThrowsDuplicateRequestExceptionWhenRateLimitExceeded(): void
    {
        $this->expectException(DuplicateRequestException::class);

        $guard = new DuplicateRequestGuard();

        $definition = $this->makeDefinition('https://example.com/guard-exceeded');

        $maxAttempts = $definition->maxExecutionsWithinDecayWindow();

        for ($i = 0; $i < $maxAttempts; $i++) {
            $guard->guard($definition);
        }

        // This call exceeds the limit and should throw
        $guard->guard($definition);
    }

    public function testThrownExceptionContainsDefinitionReference(): void
    {
        $guard = new DuplicateRequestGuard();

        $definition = $this->makeDefinition('https://example.com/guard-exception-ref');

        $maxAttempts = $definition->maxExecutionsWithinDecayWindow();

        for ($i = 0; $i < $maxAttempts; $i++) {
            $guard->guard($definition);
        }

        try {
            $guard->guard($definition);
            $this->fail('Expected DuplicateRequestException was not thrown.');
        } catch (DuplicateRequestException $e) {
            $this->assertSame($definition, $e->definition);
        }
    }

    public function testGuardTracksEachDefinitionSeparately(): void
    {
        $this->expectNotToPerformAssertions();

        $guard = new DuplicateRequestGuard();

        $definitionA = $this->makeDefinition('https://example.com/guard-a');

        $definitionB = $this->makeDefinition('https://example.com/guard-b');

        $maxAttempts = $definitionA->maxExecutionsWithinDecayWindow();

        // Exhaust the limit for A
        for ($i = 0; $i < $maxAttempts; $i++) {
            $guard->guard($definitionA);
        }

        // B should still be allowed through (different uniqueID)
        $guard->guard($definitionB);
    }
}
