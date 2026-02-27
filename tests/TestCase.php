<?php

namespace Tests;

use Database\Seeders\RolesAndPermissionsSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use RefreshDatabase;

    protected bool $seed = true;
    protected string $seeder = RolesAndPermissionsSeeder::class;

    protected function setUp(): void
    {
        parent::setUp();

        require_once base_path('tests/Support/helpers.php');
    }
}
