<?php

namespace LaravelEnso\MeiliSearch\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateSettings extends FormRequest
{
    public function rules()
    {
        return [
            'public_key' => 'nullable|string|max:255',
            'private_key' => 'nullable|string|max:255',
            'enabled' => 'required|boolean',
            'secret' => 'nullable|string|max:255',
        ];
    }
}
