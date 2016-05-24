<?php

namespace Blog\Providers;

use Blog\Tag;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // share the 'tags' with the tags partial, whenever is needed.
        view()->composer('pages.partials.tags', function($view){
            $view->with('tags', Tag::havingArticles());
        });
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
