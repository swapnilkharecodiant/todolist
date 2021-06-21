<?php

namespace Codiant\Todolist\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class TodolistServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'todolist');

        Route::middleware(['web'])
            ->namespace('Codiant\Todolist\Http\Controllers')
            ->group(function(){
                $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');
            });
    }

}
