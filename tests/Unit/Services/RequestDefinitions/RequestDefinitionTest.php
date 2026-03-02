<?php

namespace Tests\Unit\Services\RequestDefinitions;

use App\Services\Enums\ExternalService;
use App\Services\RequestDefinitions\Exceptions\ValidationException;
use App\Services\RequestDefinitions\GenericRequestDefinition;
use App\Services\RequestDefinitions\RequestDefinition;
use App\Services\RequestDefinitions\Traits\AlwaysConsideredUnique;
use BadMethodCallException;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use RuntimeException;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class RequestDefinitionTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Cache::flush();
    }

    private function makeDefinition(
        string $method = RequestDefinition::HTTP_GET,
        string $url = 'https://example.com',
        array $rules = [],
        ?array $payload = null,
        array $queryParams = [],
    ): RequestDefinition {
        return new class($method, $url, $rules, $payload, $queryParams) extends RequestDefinition {
            public function __construct(
                private readonly string $httpMethod,
                private readonly string $httpUrl,
                private readonly array $httpRules,
                private readonly ?array $httpPayload,
                private readonly array $httpQueryParams,
            ) {}

            public function method(): string
            {
                return $this->httpMethod;
            }

            public function url(): string
            {
                return $this->httpUrl;
            }

            public function rules(): array
            {
                return $this->httpRules;
            }

            public function payload(): ?array
            {
                return $this->httpPayload;
            }

            public function queryParams(): array
            {
                return $this->httpQueryParams;
            }

            public function externalService(): ?ExternalService
            {
                return null;
            }
        };
    }

    public function testValidatePassesWithNoRules(): void
    {
        $definition = $this->makeDefinition();

        $this->assertSame($definition, $definition->validate());
    }

    public function testValidateThrowsValidationExceptionOnFailure(): void
    {
        $this->expectException(ValidationException::class);

        $this->makeDefinition(rules: ['name' => 'required'])->validate();
    }

    public function testIsValidReturnsTrueWhenRulesPass(): void
    {
        $this->assertTrue($this->makeDefinition()->isValid());
    }

    public function testIsInvalidReturnsTrueWhenRulesFail(): void
    {
        $this->assertTrue($this->makeDefinition(rules: ['name' => 'required'])->isInvalid());
    }

    public function testErrorsReturnsMessageBagWithFailedFields(): void
    {
        $errors = $this->makeDefinition(rules: ['name' => 'required'])->errors();

        $this->assertTrue($errors->has('name'));
    }

    public function testPayloadDefaultsToNull(): void
    {
        $this->assertNull($this->makeDefinition()->payload());
    }

    public function testAddOptionsMergesAndReturnsSelf(): void
    {
        $definition = $this->makeDefinition();

        $result = $definition->addOptions(['verify' => false]);

        $this->assertSame($definition, $result);

        $this->assertSame(['verify' => false], $definition->allOptions());
    }

    public function testAllOptionsMergesMultipleAddOptionsCalls(): void
    {
        $definition = $this->makeDefinition();

        $definition->addOptions(['foo' => 'bar']);

        $definition->addOptions(['baz' => 'qux']);

        $this->assertEquals(['foo' => 'bar', 'baz' => 'qux'], $definition->allOptions());
    }

    public function testMaxExecutionsWithinDecayWindowReturnsConstant(): void
    {
        $this->assertSame(
            GenericRequestDefinition::MAX_EXECUTION_WITHIN_DECAY_WINDOW,
            $this->makeDefinition()->maxExecutionsWithinDecayWindow(),
        );
    }

    public function testDecayWindowSecondsReturnsConstant(): void
    {
        $this->assertSame(
            GenericRequestDefinition::DECAY_WINDOW_SECONDS,
            $this->makeDefinition()->decayWindowSeconds(),
        );
    }

    public function testIsExternalReturnsTrue(): void
    {
        $this->assertTrue($this->makeDefinition()->isExternal());
    }

    public function testDescriptionReturnsNull(): void
    {
        $this->assertNull($this->makeDefinition()->description());
    }

    public function testQueryParamsDefaultsToEmptyArray(): void
    {
        $this->assertSame([], $this->makeDefinition()->queryParams());
    }

    public function testHeadersDefaultsToEmptyArray(): void
    {
        $this->assertSame([], $this->makeDefinition()->headers());
    }

    public function testMiddlewareDefaultsToEmptyArray(): void
    {
        $this->assertSame([], $this->makeDefinition()->middleware());
    }

    public function testOptionsDefaultsToEmptyArray(): void
    {
        $this->assertSame([], $this->makeDefinition()->options());
    }

    public function testTimeoutDefaultsTo150(): void
    {
        $this->assertSame(150, $this->makeDefinition()->timeout());
    }

    public function testIsCacheAwareDefaultsFalse(): void
    {
        $this->assertFalse($this->makeDefinition()->isCacheAware());
    }

    public function testCacheAwareSetsFlagAndReturnsSelf(): void
    {
        $definition = $this->makeDefinition(RequestDefinition::HTTP_GET);

        $result = $definition->cacheAware();

        $this->assertSame($definition, $result);

        $this->assertTrue($definition->isCacheAware());
    }

    public function testCacheAwareThrowsForNonGetRequests(): void
    {
        $this->expectException(BadMethodCallException::class);

        $this->expectExceptionMessage('Only GET requests can be cache aware.');

        $this->makeDefinition(RequestDefinition::HTTP_POST)->cacheAware();
    }

    public function testCacheAwareThrowsWhenAlwaysConsideredUniqueTraitIsUsed(): void
    {
        $this->expectException(BadMethodCallException::class);

        $this->expectExceptionMessage('cannot be cache aware');

        $definition = new class extends RequestDefinition {
            use AlwaysConsideredUnique;

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

        $definition->cacheAware();
    }

    public function testCacheTtlReadsFromConfig(): void
    {
        $this->assertSame(
            config('cache.ttl.request_definition'),
            $this->makeDefinition()->cacheTtl(),
        );
    }

    public function testUniqueIdIsDeterministic(): void
    {
        $definition = $this->makeDefinition(url: 'https://example.com/unique-id-test');

        $this->assertSame($definition->uniqueID(), $definition->uniqueID());
    }

    public function testUniqueIdChangesWithDifferentUrls(): void
    {
        $a = $this->makeDefinition(url: 'https://example.com/a');

        $b = $this->makeDefinition(url: 'https://example.com/b');

        $this->assertNotSame($a->uniqueID(), $b->uniqueID());
    }

    public function testUniqueIdChangesWithDifferentMethods(): void
    {
        $get = $this->makeDefinition(RequestDefinition::HTTP_GET, 'https://example.com/method-test');

        $post = $this->makeDefinition(RequestDefinition::HTTP_POST, 'https://example.com/method-test');

        $this->assertNotSame($get->uniqueID(), $post->uniqueID());
    }

    public function testUniqueIdChangesWithDifferentQueryParams(): void
    {
        $a = $this->makeDefinition(queryParams: ['page' => 1]);

        $b = $this->makeDefinition(queryParams: ['page' => 2]);

        $this->assertNotSame($a->uniqueID(), $b->uniqueID());
    }

    public function testSaveToFileAddsSinkOptionAndReturnsSelf(): void
    {
        $definition = $this->makeDefinition();

        $result = $definition->saveToFile('/tmp/output.json');

        $this->assertSame($definition, $result);

        $this->assertSame('/tmp/output.json', $definition->allOptions()['sink']);
    }

    public function testGetRequestResolverDefaultsToJsonPendingRequest(): void
    {
        $resolver = $this->makeDefinition()->getRequestResolver();

        $this->assertInstanceOf(PendingRequest::class, $resolver());
    }

    public function testAsMultipartSetsResolverAndReturnsSelf(): void
    {
        $definition = $this->makeDefinition();

        $result = $definition->asMultipart();

        $this->assertSame($definition, $result);

        $this->assertInstanceOf(PendingRequest::class, ($definition->getRequestResolver())());
    }

    public function testAsFormSetsResolverAndReturnsSelf(): void
    {
        $definition = $this->makeDefinition();

        $result = $definition->asForm();

        $this->assertSame($definition, $result);

        $this->assertInstanceOf(PendingRequest::class, ($definition->getRequestResolver())());
    }

    public function testSetRequestResolverOverridesDefault(): void
    {
        $definition = $this->makeDefinition();

        $customRequest = Http::asForm();

        $definition->setRequestResolver(fn() => $customRequest);

        $this->assertSame($customRequest, ($definition->getRequestResolver())());
    }

    public function testCreateNewRequestReturnsPendingRequest(): void
    {
        $this->assertInstanceOf(PendingRequest::class, $this->makeDefinition()->createNewRequest());
    }

    public function testBuildRequestReturnsPendingRequest(): void
    {
        $this->assertInstanceOf(PendingRequest::class, $this->makeDefinition()->buildRequest());
    }

    public function testValidationDataIncludesQueryParams(): void
    {
        $definition = $this->makeDefinition(
            rules: ['page' => 'required|integer'],
            queryParams: ['page' => 1],
        );

        $this->assertTrue($definition->isValid());
    }

    public function testSendThrowsWhenGetRequestHasPayload(): void
    {
        $this->expectException(RuntimeException::class);

        $this->expectExceptionMessage('queryParams');

        Http::fake();

        $this->makeDefinition(
            method: RequestDefinition::HTTP_GET,
            url: 'https://example.com/send-test',
            payload: ['foo' => 'bar'],
        )->send();
    }

    public function testInvokeCallsSendAndReturnsResponse(): void
    {
        Http::fake([
            'https://example.com/invoke-test' => Http::response([], Response::HTTP_OK),
        ]);

        $definition = $this->makeDefinition(url: 'https://example.com/invoke-test');

        $response = $definition();

        $this->assertNotNull($response);
    }
}
