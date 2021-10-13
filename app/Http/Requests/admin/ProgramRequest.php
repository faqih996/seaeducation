<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProgramRequest extends FormRequest
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
            'tittle' => 'required|max:255',
            'body' => 'required',
            'excerpt' => 'required',
            'status' => 'required',
            'location_id' => 'required',
            'batch_id' => 'required',
            'department_id' => 'required',
            'price' => 'required|integer',
            'start_at' => 'required|date',
            'end_at' => 'required|date'
        ];
    }
}
