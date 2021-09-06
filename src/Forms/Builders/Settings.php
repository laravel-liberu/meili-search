<?php

namespace LaravelEnso\MeiliSearch\Forms\Builders;

use LaravelEnso\MeiliSearch\Models\Settings as Model;
use LaravelEnso\Forms\Services\Form;

class Settings
{
    protected const TemplatePath = __DIR__ . '/../Templates/settings.json';

    public function edit(Model $settings)
    {
        return (new Form(static::TemplatePath))->edit($settings);
    }
}
