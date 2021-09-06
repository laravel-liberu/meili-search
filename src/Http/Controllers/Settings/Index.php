<?php

namespace LaravelEnso\MeiliSearch\Http\Controllers\Settings;

use Illuminate\Routing\Controller;
use LaravelEnso\MeiliSearch\Forms\Builders\Settings as Form;
use LaravelEnso\MeiliSearch\Models\Settings;

class Index extends Controller
{
    public function __invoke(Form $form)
    {
        return ['form' => $form->edit(Settings::current())];
    }
}
