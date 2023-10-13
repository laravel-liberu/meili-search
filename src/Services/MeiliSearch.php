<?php

namespace LaravelLiberu\MeiliSearch\Services;

use Illuminate\Support\Facades\App;
use MeiliSearch\Client;
use MeiliSearch\Endpoints\Indexes;

class MeiliSearch
{
    public static function index(string $model): Indexes
    {
        return App::make(Client::class)->index(self::uid($model));
    }

    public static function createIndex(string $model): Indexes
    {
        return App::make(Client::class)
            ->createIndex(self::uid($model));
    }

    public static function deleteIndex(string $model): array
    {
        return App::make(Client::class)
            ->deleteIndex(self::uid($model));
    }

    private static function uid(string $model): string
    {
        return (new $model)->searchableAs();
    }
}
