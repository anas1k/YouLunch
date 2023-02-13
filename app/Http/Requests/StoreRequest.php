<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            'name' => 'required',
            'day' => 'required',
            'type' => 'required',
            'description' => 'nullable',
            'image' => 'required|image|mimes:jpg,png|max:5120',
            // 'slug' => Str::slug($this->name, '-'),
            // 'slug' => 'required',
        ];
    }
}
