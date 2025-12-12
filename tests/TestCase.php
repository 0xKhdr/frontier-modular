<?php

declare(strict_types=1);

namespace Frontier\Modules\Tests;

use Frontier\Modules\Providers\ServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            ServiceProvider::class,
        ];
    }
}
