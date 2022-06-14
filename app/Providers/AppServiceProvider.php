<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Profile;
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
        

        //backEnd
        view()->composer('dashboard.layouts.app', function ($view) {

            $view->with('profileImg', Profile::where('id', auth()->id())->get('img')->pluck('img')->first());
            $view->with('settings', settings());
            // $view->with('lastCategories', Category::orderBy('id','desc')->pluck('name','slug')->take(3));

        });
    }
}
