<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
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
         $this->matchesComposer();
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

    public function matchesComposer()
    {
        view()->composer('partials.matches', 'App\Http\Composers\MatchesComposer');
        // \View::composer('partials.matches', function($view){
        //     $matches = Match::orderBy(DB::raw('RAND()'))->take(1)->get();
        //     $view->with('matches', $matches);
        // });
    }
}
