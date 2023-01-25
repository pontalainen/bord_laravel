<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageFormRequest extends FormRequest
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
        $rules = [
            'name' => 'required|max:30|unique:pages,name,' . $this->id,
            'content' => 'required',
            'image' => ['mimes:png,jpg,jpeg', 'max:5048'],
        ];

        if (in_array($this->method(), ['POST'])) {
            $rules['image'] = ['mimes:jpg,png,jpeg', 'max:5048'];
        }

        return $rules;
    }
}
