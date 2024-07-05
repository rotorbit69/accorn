<?php

namespace App\Providers;

use App\Controls;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
//         $this->app->singleton(Controls::class, function () {
//        return Controls::make(storage_path('app/settings.json'));
//    });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}