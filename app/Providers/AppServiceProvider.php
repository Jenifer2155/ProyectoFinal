<?php

namespace App\Providers;

//use Illuminate\Support\Facadades\Schema;

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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //linea para avisatr el arror de la llave extensa y se importo al schema
      //  Schema::defaultStringLegth(191);
    }
}
