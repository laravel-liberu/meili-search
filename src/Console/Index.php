<?php

namespace LaravelLiberu\MeiliSearch\Console;

use Illuminate\Console\Command;
use LaravelLiberu\MeiliSearch\Services\MeiliSearch;
use Throwable;

class Index extends Command
{
    protected $signature = 'enso:meilisearch:index
        {model : The model for which an index will be created}';

    protected $description = 'Create an index';

    public function handle()
    {
        $model = $this->argument('model');

        $index = MeiliSearch::createIndex($model);

        try {
            $filterable = $model::filterableAttributes();
            $index->updateFilterableAttributes($filterable);
        } catch (Throwable) {
        }

        try {
            $sortable = $model::sortableAttributes();
            $index->updateSortableAttributes($sortable);
        } catch (Throwable) {
        }

        try {
            $searchable = $model::searchableAttributes();
            $index->updateSearchableAttributes($searchable);
        } catch (Throwable) {
        }

        $this->info("Index for [{$model}] created.");
    }
}
