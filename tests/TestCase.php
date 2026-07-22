<?php

declare(strict_types=1);

namespace BasePanels\BasePanels\Tests;

use BasePanels\BasePanels\BasePanelsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            BasePanelsServiceProvider::class,
        ];
    }
}
