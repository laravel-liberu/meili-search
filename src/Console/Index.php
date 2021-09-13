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

        if (method_exists($model, 'filterableAttributes')) {
            MeiliSearch::index($model)
                ->updateFilterableAttributes($model::filterableAttributes());
        }

        $this->info("Index for [{$model}] created.");
    }
}
