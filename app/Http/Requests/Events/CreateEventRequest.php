<?php

namespace App\Http\Requests\Events;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:events',
            'venue' => 'required',
            'description' => 'required',
            'start' => 'required',
            'end' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:5048'
        ];
    }
}
