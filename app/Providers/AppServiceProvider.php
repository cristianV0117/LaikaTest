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
        // HOME //
        $this->app->when(\App\Http\Controllers\HomeController::class)
            ->needs(\App\Helpers\Response::class)
            ->give(\App\Helpers\JsonResponse::class);

        // COUNTRIES RESPONSE //
        $this->app->when(\App\Http\Controllers\Countries\IndexController::class)
            ->needs(\App\Helpers\Response::class)
            ->give(\App\Helpers\JsonResponse::class);
        $this->app->when(\App\Http\Controllers\Countries\ShowController::class)
            ->needs(\App\Helpers\Response::class)
            ->give(\App\Helpers\JsonResponse::class);
        // COUNTRIES REPOSITORY //
        $this->app->when(\App\Http\Controllers\Countries\IndexController::class)
            ->needs(\App\Repositories\Readable::class)
            ->give(\App\Repositories\CountryRepository::class);
        $this->app->when(\App\Http\Controllers\Countries\ShowController::class)
            ->needs(\App\Repositories\Readable::class)
            ->give(\App\Repositories\CountryRepository::class);
        // USERS RESPONSE //
        $this->app->when(\App\Http\Controllers\Users\IndexController::class)
            ->needs(\App\Helpers\Response::class)
            ->give(\App\Helpers\JsonResponse::class);
        $this->app->when(\App\Http\Controllers\Users\ShowController::class)
            ->needs(\App\Helpers\Response::class)
            ->give(\App\Helpers\JsonResponse::class);
        $this->app->when(\App\Http\Controllers\Users\StoreController::class)
            ->needs(\App\Helpers\Response::class)
            ->give(\App\Helpers\JsonResponse::class);
        // USERS REPOSITORY//
        $this->app->when(\App\Http\Controllers\Users\IndexController::class)
                ->needs(\App\Repositories\Readable::class)
                ->give(\App\Repositories\UserRepository::class);
        $this->app->when(\App\Http\Controllers\Users\ShowController::class)
                ->needs(\App\Repositories\Readable::class)
                ->give(\App\Repositories\UserRepository::class);
        $this->app->when(\App\Http\Controllers\Users\StoreController::class)
                ->needs(\App\Repositories\Writetable::class)
                ->give(\App\Repositories\UserRepository::class);
        $this->app->when(\App\Http\Controllers\Users\UpdateController::class)
                ->needs(\App\Repositories\Writetable::class)
                ->give(\App\Repositories\UserRepository::class);
        $this->app->when(\App\Http\Controllers\Users\DestroyController::class)
                ->needs(\App\Repositories\Writetable::class)
                ->give(\App\Repositories\UserRepository::class);
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
