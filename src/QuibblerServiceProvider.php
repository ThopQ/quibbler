<?php

namespace TILABS\Quibbler;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use TILABS\Quibbler\Commands\QuibblerCommand;

class QuibblerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('quibbler')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_quibbler_table')
            ->hasCommand(QuibblerCommand::class);
    }
}
