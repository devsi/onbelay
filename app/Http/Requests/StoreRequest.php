<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
     * @return array
     */
    public function rules()
    {
        return [
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'date' => 'required',
            'time' => 'required',
            'discipline' => 'required|array',
            'request' => 'nullable',
        ];
    }

    /**
     * Get the validation messages for specific fields.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'discipline.required' => 'Please let us know what activity(s) you want to do.'
        ];
    }
}
