<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Facades\View;

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
        Paginator::useBootstrap();
        //
       /*$menu = [
            [
                'title' => 'Главная',
                'alias' => 'home'
            ],
            [
                'title' => 'Все новости',
                'alias' => 'home::news'
            ],
            [
                'title' => 'Выбрать город',

            ]
        ];*/


       //View::share('menu', $menu);
    }
}
