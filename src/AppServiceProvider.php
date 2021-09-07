<?php

namespace LaravelEnso\MeiliSearch;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use LaravelEnso\MeiliSearch\Models\Settings;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        if (Settings::enabled()) {
            Config::set('scout.driver', 'meilisearch');
            Config::set('scout.meilisearch.host', Settings::host());
            Config::set('scout.meilisearch.key', Settings::masterKey());
        }
    }
}
