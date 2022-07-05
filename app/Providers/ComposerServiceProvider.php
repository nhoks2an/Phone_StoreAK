<?php

namespace App\Providers;
use View;
use App\Models\User;
use Hash;
use Session;
use Illuminate\Support\ServiceProvider;
use App\Models\Sologan;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $view->with('datauser', User::where('id','=',Session::get('loginId'))->first());
            $view->with('sologan', Sologan::all()->first());
        });
    }
}