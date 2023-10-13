<?php

namespace LaravelLiberu\MeiliSearch\Http\Controllers\Settings;

use Illuminate\Routing\Controller;
use LaravelLiberu\MeiliSearch\Http\Requests\ValidateSettings;
use LaravelLiberu\MeiliSearch\Models\Settings;

class Update extends Controller
{
    public function __invoke(ValidateSettings $request, Settings $settings)
    {
        $settings->update($request->validated());

        return ['message' => 'Settings were stored sucessfully'];
    }
}
