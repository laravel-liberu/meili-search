<?php

namespace LaravelLiberu\MeiliSearch\Http\Controllers\Settings;

use Illuminate\Routing\Controller;
use LaravelLiberu\MeiliSearch\Forms\Builders\Settings as Form;
use LaravelLiberu\MeiliSearch\Models\Settings;

class Index extends Controller
{
    public function __invoke(Form $form)
    {
        return ['form' => $form->edit(Settings::current())];
    }
}
