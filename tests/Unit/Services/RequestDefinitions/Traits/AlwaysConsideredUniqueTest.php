<?php

namespace Tests\Unit\Services\RequestDefinitions\Traits;

use App\Services\RequestDefinitions\Traits\AlwaysConsideredUnique;
use Tests\TestCase;

class AlwaysConsideredUniqueTest extends TestCase
{
    private function makeInstance(): object
    {
        return new class {
            use AlwaysConsideredUnique;
        };
    }

    public function testUniqueIdReturnsAString(): void
    {
        $this->assertIsString($this->makeInstance()->uniqueId());
    }

    public function testUniqueIdReturnsValidUuidFormat(): void
    {
        $id = $this->makeInstance()->uniqueId();

        $this->assertMatchesRegularExpression(
            '/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/i',
            $id,
        );
    }

    public function testUniqueIdReturnsDifferentValueOnEachCall(): void
    {
        $instance = $this->makeInstance();

        $this->assertNotSame($instance->uniqueId(), $instance->uniqueId());
    }

    public function testDifferentInstancesProduceDifferentIds(): void
    {
        $a = $this->makeInstance();

        $b = $this->makeInstance();

        $this->assertNotSame($a->uniqueId(), $b->uniqueId());
    }
}
