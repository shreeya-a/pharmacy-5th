<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Section;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

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
        //
        Paginator::useBootstrap();

        View::composer('*', function ($view){
            $cats = Section::all();
            $view->with('cats',$cats);
        });
        View::composer('*', function ($count){
               $count->with('count',Cart::where('user_id' , Auth::id())->count());

        });
    }
}
