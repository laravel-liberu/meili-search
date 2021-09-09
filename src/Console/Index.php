<?php

namespace LaravelEnso\MeiliSearch\Console;

use Illuminate\Console\Command;
use LaravelEnso\MeiliSearch\Services\MeiliSearch;

class Index extends Command
{
    protected $signature = 'enso:meilisearch:index
        {model : The model for which an index will be created}';

    protected $description = 'Create an index';

    public function handle()
    {
        $model = $this->argument('model');

        MeiliSearch::createIndex($model);

        $this->info("Index for [{$model}] created.");
    }
}
