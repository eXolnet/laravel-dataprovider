<?php

namespace Exolnet\DataProvider\Tests\Integration;

use Exolnet\DataProvider\DataProviderServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            DataProviderServiceProvider::class,
        ];
    }
}
