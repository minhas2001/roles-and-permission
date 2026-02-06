<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'product_type_id' => 'required|exists:product_types,id',
            'original_price' => 'nullable|numeric|min:0',
            'image' => 'nullable|string|mimes:png,jpg,jpeg:',
            'sale_price' => 'nullable|numeric|min:0|lt:original_price',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
