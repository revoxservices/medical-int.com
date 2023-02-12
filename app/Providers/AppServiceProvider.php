<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{

    public function register(){

        view()->composer("*",function($view){
            $view->with("setting", $this->about());
        });

    }



    public function about()
    {
        return Setting::first();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}