<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use function foo\func;
use App\PostCardSendingService;
use App\User;

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
        // View::share('channels',Products::pluck('products'));

        View::composer('composer',function($view){
            $view->with('channels',User::first());
        });

        $this->app->singleton('Postcard',function ($app){
            return new PostCardSendingService('us',4,6);
        });
    }
}
