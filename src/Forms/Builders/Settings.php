<?php

namespace LaravelEnso\MeiliSearch\Forms\Builders;

use LaravelEnso\MeiliSearch\Models\Settings as Model;
use LaravelEnso\Forms\Services\Form;

class Settings
{
    private const TemplatePath = __DIR__.'/../Templates/settings.json';

    public function edit(Model $settings)
    {
        return (new Form($this->templatePath()))->edit($settings);
    }

    protected function templatePath(): string
    {
        return self::TemplatePath;
    }
}
