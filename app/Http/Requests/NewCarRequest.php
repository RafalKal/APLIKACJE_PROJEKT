<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewCarRequest extends FormRequest
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
            'car_model_id' => 'required',
            'transmission_type_id' => 'required',
            'fuel_type_id' => 'required',
            'course' => 'required',
            'engine' => 'required',
            'year' => 'required',
            'price' => 'required',
            'owners_count' => 'required',
        ];
    }
}
