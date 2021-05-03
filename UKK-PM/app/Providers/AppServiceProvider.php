<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Auth;

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
        view()->composer('layouts.partial.navbar',function($view){
            // $view->auth('')
            // $auth = Auth::guard('petugas')->user();
            // $admin = ;

            $view->with('petugas', Auth::guard('petugas')->user()); 

        });
        view()->composer('layouts.partial.sidebar',function($view){
            // $view->auth('')
            $view->with('petugas', Auth::guard('petugas')->user()); 

        });
        //
    }
}
