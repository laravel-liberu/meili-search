<?php

use LaravelEnso\Migrator\Database\Migration;

class CreateStructureForMeilisearchMenu extends Migration
{
    protected array $menu = [
        'name' => 'MeiliSearch', 'icon' => 'fab search', 'route' => null, 'order_index' => 200, 'has_children' => true,
    ];

    protected ?string $parentMenu = 'Integrations';
}
