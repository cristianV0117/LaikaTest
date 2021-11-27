<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(\App\Http\Controllers\HomeController::class)
            ->needs(\App\Helpers\Response::class)
            ->give(\App\Helpers\JsonResponse::class);

        // COUNTRIES //
        $this->app->when(\App\Http\Controllers\Countries\IndexController::class)
            ->needs(\App\Helpers\Response::class)
            ->give(\App\Helpers\JsonResponse::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
