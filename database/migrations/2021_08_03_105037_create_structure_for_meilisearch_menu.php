<?php

use LaravelLiberu\Migrator\Database\Migration;

class CreateStructureForMeilisearchMenu extends Migration
{
    protected array $menu = [
        'name' => 'MeiliSearch', 'icon' => 'search', 'route' => null, 'order_index' => 600, 'has_children' => true,
    ];

    protected ?string $parentMenu = 'Integrations';
}
