<?php

namespace LaravelEnso\MeiliSearch\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaravelEnso\MeiliSearch\Models\Settings as Model;

class SettingsFactory extends Factory
{
    protected $model = Model::class;

    public function definition()
    {
        return [
            'public_key' => null,
            'private_key' => null,
            'enabled' => false,
        ];
    }
}
