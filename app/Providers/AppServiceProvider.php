<?php

namespace App\Providers;

use App\Repositories\InspectionFormRepository;
use App\Repositories\InspectionParameterRepository;
use App\Repositories\Interfaces\InspectionFormRepositoryInterface;
use App\Repositories\Interfaces\InspectionParameterRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(InspectionFormRepositoryInterface::class, InspectionFormRepository::class);
        $this->app->bind(InspectionParameterRepositoryInterface::class, InspectionParameterRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
