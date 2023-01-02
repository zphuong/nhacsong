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
        $this->app->singleton(
            \App\Repositories\TuneRepositoryInterface::class,
            \App\Repositories\TuneRepositories::class,
        );
        $this->app->singleton(
            \App\Repositories\SongRepositoryInterface::class,
            \App\Repositories\SongRepositories::class,
        );
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
