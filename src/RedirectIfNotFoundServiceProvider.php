<?php

namespace Fuelviews\RedirectIfNotFound;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Fuelviews\RedirectIfNotFound\Commands\RedirectIfNotFoundCommand;

class RedirectIfNotFoundServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('app-redirect-if-not-found')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_app_redirect_if_not_found_table')
            ->hasCommand(RedirectIfNotFoundCommand::class);
    }
}
