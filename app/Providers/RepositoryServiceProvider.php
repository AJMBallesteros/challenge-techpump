<?php

namespace App\Providers;

use App\src\domain\Affiliate\AffiliatesRepositoryInterface;
use App\src\domain\CamGirl\CamGirlsRepositoryInterface;
use App\src\infrastructure\Affiliate\AffiliatesRepository;
use App\src\infrastructure\CamGirl\CamGirlRepository;
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
        $this->app->bind(AffiliatesRepositoryInterface::class, AffiliatesRepository::class);
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
