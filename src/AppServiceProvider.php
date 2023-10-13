<?php

namespace LaravelLiberu\MeiliSearch;

use Illuminate\Support\ServiceProvider;
use LaravelLiberu\MeiliSearch\Console\Delete;
use LaravelLiberu\MeiliSearch\Console\Flush;
use LaravelLiberu\MeiliSearch\Console\Import;
use LaravelLiberu\MeiliSearch\Console\Index;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->commands([
            Index::class,
            Delete::class,
            Flush::class,
            Import::class,
        ]);
    }
}
