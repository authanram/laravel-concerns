<?php

declare(strict_types=1);

namespace Authanram\LaravelConcerns\Tests;

use Illuminate\Foundation\Application;
use Authanram\LaravelConcerns\LaravelConcernsServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * @param Application $app
     *
     * @return array<string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            LaravelConcernsServiceProvider::class,
        ];
    }
}
