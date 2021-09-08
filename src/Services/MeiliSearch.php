<?php

namespace LaravelEnso\MeiliSearch\Services;

use Illuminate\Support\Facades\App;
use MeiliSearch\Client;
use MeiliSearch\Endpoints\Indexes;

class MeiliSearch
{
    public static function index(string $model): Indexes
    {
        $index = (new $model)->searchableAs();

        return App::make(Client::class)->index($index);
    }
}
