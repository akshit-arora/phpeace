<?php

declare(strict_types=1);

namespace AkshitArora\PHPeace\Tests;

use AkshitArora\PHPeace\Providers\PackageServiceProvider;
use Orchestra\Testbench\TestCase;

/**
 * Class PackageTestCase
 *
 * @package AkshitArora\PHPeace\Tests
 */
class PackageTestCase extends TestCase
{
    /**
     * Get package providers.
     *
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [
            PackageServiceProvider::class,
        ];
    }

}
