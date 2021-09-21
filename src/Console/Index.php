<?php

namespace LaravelEnso\MeiliSearch\Console;

use Illuminate\Console\Command;
use LaravelEnso\MeiliSearch\Services\MeiliSearch;
use Throwable;

class Index extends Command
{
    protected $signature = 'enso:meilisearch:index
        {model : The model for which an index will be created}';

    protected $description = 'Create an index';

    public function handle()
    {
        $model = $this->argument('model');

        MeiliSearch::createIndex($model);

        try {
            $filterable = $model::filterableAttributes();
            MeiliSearch::index($model)->updateFilterableAttributes($filterable);
        } catch (Throwable) {
        }

        try {
            $sortable = $model::sortableAttributes();
            MeiliSearch::index($model)->updateSortableAttributes($sortable);
        } catch (Throwable) {
        }

        try {
            $searchable = $model::searchableAttributes();
            MeiliSearch::index($model)->updateSearchableAttributes($searchable);
        } catch (Throwable) {
        }

        $this->info("Index for [{$model}] created.");
    }
}
