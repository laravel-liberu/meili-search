<?php

namespace LaravelEnso\MeiliSearch;

use Illuminate\Support\ServiceProvider;
use LaravelEnso\MeiliSearch\Http\Middleware\MeiliSearch;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    public function register()
    {
        $this->app['router']
            ->aliasMiddleware('meili-search', MeiliSearch::class);
    }
}
