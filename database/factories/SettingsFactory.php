<?php

namespace LaravelLiberu\MeiliSearch\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaravelLiberu\MeiliSearch\Models\Settings as Model;

class SettingsFactory extends Factory
{
    protected $model = Model::class;

    public function definition()
    {
        return [
            'enabled' => false,
        ];
    }
}
