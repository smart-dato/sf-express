<?php

namespace SmartDato\SfExpress;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use SmartDato\SfExpress\Commands\SfExpressCommand;

class SfExpressServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('sf-express')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_sf_express_table')
            ->hasCommand(SfExpressCommand::class);
    }
}
