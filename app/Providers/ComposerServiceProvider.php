<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //die('boot');
        View::composer('pages.profile',
            'App\Http\ViewComposers\ProfileComposer');

        // View::composer('pages.profile', function(View $view){
        //     $view->with('married', random_int(0, 1));
        // });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
