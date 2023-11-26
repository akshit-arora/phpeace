<?php

declare(strict_types=1);

namespace AkshitArora\PHPeace\Providers;

use AkshitArora\PHPeace\Console\Commands\PHPeaceShowQuoteCommand;
use AkshitArora\PHPeace\Contracts\PHPeaceContract;
use AkshitArora\PHPeace\PHPeace\PHPeace;
use Illuminate\Support\ServiceProvider;

/**
 * Class PackageServiceProvider
 *
 * This service provider is responsible for binding key classes into Laravel's
 * service container and setting up important aspects of your package.
 *
 * @package AkshitArora\PHPeace\Providers
 */
final class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @var array<string, class-string>
     */
    public array $bindings = [
        PHPeaceContract::class => PHPeace::class,
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands(
                commands: [
                    PHPeaceShowQuoteCommand::class,
                ],
            );
        }
    }
}
