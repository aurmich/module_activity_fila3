<?php

declare(strict_types=1);

namespace Modules\Activity\Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\CreatesApplication;

/**
 * Base test case for Activity module tests.
 */
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Load Activity module specific configurations
        $this->artisan('migrate', ['--database' => 'testing']);
<<<<<<< HEAD

=======
        
>>>>>>> f371b59 (.)
        // Seed any required data for Activity tests
        $this->artisan('module:seed', ['module' => 'Activity']);
    }

    /**
     * Get package providers.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Foundation\Application  $app
=======
     * @param \Illuminate\Foundation\Application $app
>>>>>>> f371b59 (.)
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            \Modules\Activity\Providers\ActivityServiceProvider::class,
        ];
    }
}
