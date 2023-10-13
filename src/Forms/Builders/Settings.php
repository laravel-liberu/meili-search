<?php

namespace LaravelLiberu\MeiliSearch\Forms\Builders;

use LaravelLiberu\MeiliSearch\Models\Settings as Model;
use LaravelLiberu\Forms\Services\Form;

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
