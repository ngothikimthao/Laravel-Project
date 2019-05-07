<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; 


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
       view()->composer('Page.header',function($view){
          $loai_sp = Category::all();
          $view->with('loai_sp',$loai_sp);
        });
       view()->composer('Customer.pageCate',function($view){
          $loai_sp = Category::all();
          $view->with('loai_sp',$loai_sp);
        });
        
    }
}
