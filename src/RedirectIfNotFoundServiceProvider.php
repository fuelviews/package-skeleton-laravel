<?php

namespace Fuelviews\RedirectIfNotFound;

use Fuelviews\RedirectIfNotFound\Middleware\RedirectIfNotFound;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class RedirectIfNotFoundServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('redirect-if-not-found')
            ->hasConfigFile();
    }

    public function packageBooted(): void
    {
        // Apply middleware globally
        $this->app['router']->aliasMiddleware(
            'redirect-if-not-found',
            RedirectIfNotFound::class
        );

        // Register global middleware if needed
        $this->app['router']->pushMiddlewareToGroup(
            'web',
            RedirectIfNotFound::class
        );
    }
}
