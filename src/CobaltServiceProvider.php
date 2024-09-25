<?php

namespace Infamoustrey\Cobalt;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Infamoustrey\Cobalt\Commands\CobaltCommand;

class CobaltServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('cobalt')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_cobalt_table')
            ->hasCommand(CobaltCommand::class);
    }
}
