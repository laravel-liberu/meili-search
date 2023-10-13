<?php

namespace LaravelLiberu\MeiliSearch\Console;

use Illuminate\Console\Command;

class Flush extends Command
{
    protected $signature = 'liberu:meilisearch:flush {model}';

    protected $description = "Flush all of the model's records from the index";

    public function handle()
    {
        $class = $this->argument('model');

        $model = new $class;

        $model::removeAllFromSearch();

        $this->info("All [{$class}] records have been flushed.");
    }
}
