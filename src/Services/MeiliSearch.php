<?php

namespace LaravelEnso\MeiliSearch\Services;

use Illuminate\Support\Facades\App;
use LaravelEnso\MeiliSearch\Models\Settings;
use MeiliSearch\Client;
use MeiliSearch\Endpoints\Indexes;

class MeiliSearch
{
    public static function index(string $model): Indexes
    {
        self::initialize();

        return App::make(Client::class)->index(self::uid($model));
    }

    public static function createIndex(string $model): Indexes
    {
        self::initialize();

        return App::make(Client::class)
            ->createIndex(self::uid($model));
    }

    public static function deleteIndex(string $model): array
    {
        self::initialize();

        return App::make(Client::class)
            ->deleteIndex(self::uid($model));
    }

    private static function uid(string $model): string
    {
        return (new $model)->searchableAs();
    }

    private static function initialize(): void
    {
        Settings::initialize();
    }
}
