<?php

namespace App\Providers;

use App\Brand;
use App\Category;
use Illuminate\Support\ServiceProvider;
use View;

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
       View::composer('forntEnd.master',function($view){
           $view->with('categories',Category::where('publication_status',1)->get());
           $view->with('brands',Brand::where('publication_status',1)->get());
       });
    }
}
