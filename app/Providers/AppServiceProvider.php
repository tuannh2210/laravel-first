<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
         
        View::composer(
            '_share.client.header', 'App\Http\ViewComposers\MenuComposer'
        );
        View::composer(
            '_share.client.mobile', 'App\Http\ViewComposers\MenuComposer'
        );
         View::composer(
            '_share.client.sidebar', 'App\Http\ViewComposers\SidebarComposer'
        );
        View::composer(
            '_share.admin.navbar', 'App\Http\ViewComposers\AuthComposer'
        );
         View::composer(
            'page.admin.user.profile', 'App\Http\ViewComposers\AuthComposer'
        );

       
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
