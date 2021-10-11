<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

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
            'title'=>'required|max:255',
            'slug'=>'required|max:255',
            'excerpt'=>'max:255',
            'body'=>'required|max:255',
            'batch_id'=>'required|max:255',
            'department_id'=>'required|max:255',
            'start_at'=>'required|date',
            'end_at'=>'required|date',
            'price'=>'required|integer'
        ];
    }
}
