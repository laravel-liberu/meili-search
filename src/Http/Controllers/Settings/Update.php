<?php

namespace LaravelEnso\MeiliSearch\Http\Controllers\Settings;

use Illuminate\Routing\Controller;
use LaravelEnso\MeiliSearch\Http\Requests\ValidateSettings;
use LaravelEnso\MeiliSearch\Models\Settings;

class Update extends Controller
{
    public function __invoke(ValidateSettings $request, Settings $settings)
    {
        $settings->update($request->validated());

        return ['message' => 'Settings were stored sucessfully'];
    }
}
