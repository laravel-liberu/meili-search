<?php

namespace LaravelEnso\MeiliSearch\Console;

use Illuminate\Console\Command;

class Import extends Command
{
    protected $signature = 'enso:meilisearch:import
            {model : Class name of model to bulk import}
            {--c|chunk= : The number of records to import at a time (Defaults to configuration value: `scout.chunk.searchable`)}';

    protected $description = 'Import the given model into the search index';

    public function handle()
    {
        $this->call('scout:import', [
            'model' => $this->argument('model'),
            '--chunk' => $this->option('chunk') ?? null,
        ]);
    }
}
