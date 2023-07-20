<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CourierServiceInterface;
use App\Services\NovaPoshtaService;

use App\Services\UkrPoshtaService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CourierServiceInterface::class, NovaPoshtaService::class);

        $this->app->bind(UkrPoshtaService::class, UkrPoshtaService::class);
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
