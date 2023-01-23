<?php

namespace App\Providers;

use App\src\domain\CamGirlsRepositoryInterface;
use App\src\infrastructure\CamGirlRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CamGirlsRepositoryInterface::class, CamGirlRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
