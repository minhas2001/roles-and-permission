<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeroRequest extends FormRequest
{
    public function rules(): array
    {

        return [

            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|string|mimes:jpeg,png,jpg|max:2048',
            'price' => 'required|string:',
            'image_description' => 'required|string',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
