<?php

namespace LaravelEnso\MeiliSearch\Upgrades;

use Illuminate\Support\Facades\Schema;
use LaravelEnso\Upgrade\Contracts\MigratesTable;
use LaravelEnso\Upgrade\Helpers\Table;

class Settings implements MigratesTable
{
    public function isMigrated(): bool
    {
        return ! Table::hasColumn('meilisearch_settings', 'host');
    }

    public function migrateTable(): void
    {
        Schema::table('meilisearch_settings', function ($table) {
            $table->dropColumn('host');
            $table->dropColumn('master_key');
        });
    }
}
