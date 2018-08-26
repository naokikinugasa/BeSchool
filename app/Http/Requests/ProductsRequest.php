<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return  true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'start_date'    =>  'required',
            'end_date'      =>  'required',
        ];
    }

    public function messages()
    {
        return [
            'start_date.required'   =>  'レンタル日を入力してください',
            'end_date.required'     =>  '返却日を入力してください',
        ];
    }
}
