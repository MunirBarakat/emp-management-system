<?php

namespace App\Providers;

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
        $this->app->bind(
            'App\Repository\RankRepositoryInterface',
            'App\Repository\RankRepository');
       
            $this->app->bind(
            'App\Repository\GroupAdministratorRepositoryInterface',
            'App\Repository\GroupAdministratorRepository');
        
            $this->app->bind(
            'App\Repository\‏DegreesRepositoryInterface',
            'App\Repository\‏‏DegreesRepository');
        
            $this->app->bind(
            'App\Repository\ReviewRepositoryInterface',
            'App\Repository\ReviewRepository');
           
            $this->app->bind(
            'App\Repository\‏‏‏‏WorkNaturesRepositoryInterface',
            'App\Repository\‏‏‏‏WorkNaturesRepository');
           
            $this->app->bind(
            'App\Repository\‏‏‏‏‏‏EmployeeStatusRepositoryInterface',
            'App\Repository\EmployeeStatusRepository');
           
           
            $this->app->bind(
            'App\Repository\‏‏‏‏‏‏EmployeesRepositoryInterface',
            'App\Repository\‏‏‏EmployeesRepository');
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
