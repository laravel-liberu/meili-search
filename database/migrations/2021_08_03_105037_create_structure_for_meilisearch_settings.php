<?php

use LaravelEnso\Migrator\Database\Migration;

class CreateStructureForMeilisearchSettings extends Migration
{
    protected ?string $parentMenu = 'MeiliSearch';

    protected array $menu = [
        'name' => 'Settings', 'icon' => 'fad user-cog', 'route' => 'integrations.meilisearch.settings.index', 'order_index' => 200, 'has_children' => false,
    ];

    protected array $permissions = [
        ['name' => 'integrations.meilisearch.settings.index', 'description' => 'Show settings for MeiliSearch', 'is_default' => false],
        ['name' => 'integrations.meilisearch.settings.update', 'description' => 'Update MeiliSearch settings', 'is_default' => false],
    ];
}
