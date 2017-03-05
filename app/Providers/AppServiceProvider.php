<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Blade::directive('age', function($expression){
            $data = json_decode($expression);

            $year = $data[0];
            $month = $data[1];
            $day = $data[2];

            $age = Carbon::createFromDate($year, $month, $day)->age;

            return "<?php echo $age ?>";
        });

        Blade::directive('sayHello', function($expression){
            return "<?php echo 'Hello ' . $expression; ?>";
        });

        // View::composer('*', function($view){
        //     $view->with('auth', Auth::user());
        // });
        // View::composer('pages.profile', function($view){
        //     $view->with('married', random_int(0, 1));
        // });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $age = Carbon::createFromDate(2009,7,15)->age;
        View::share('age',$age);
        View::share('name', 'Name');

        View::composer(['pages.profile','pages.settings'], function($view){
            $view->with('married', random_int(0, 1));
        });
    }
}
