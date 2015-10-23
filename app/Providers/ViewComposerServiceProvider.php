<?php

namespace App\Providers;

use App\Article;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeNavigation();
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

    /**
     * Compose the navigation bar.
     */
    private function composeNavigation()
    {
        // Better for more complex tasks
        view()->composer('partials.nav', 'App\Http\Composers\NavigationComposer');

        // This is good for simple tasks
//        view()->composer('partials.nav', function ($view) {
//            $view->with('latest', Article::latest()->first());
//        });
    }
}
