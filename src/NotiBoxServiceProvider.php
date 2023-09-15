<?php

namespace NotiBox\NotiBox;

use NotiBox\NotiBox\Commands\NotiBoxCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class NotiBoxServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-noti-box')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-noti-box_table')
            ->hasCommand(NotiBoxCommand::class);
    }
}
