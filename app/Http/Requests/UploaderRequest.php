<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploaderRequest extends FormRequest
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
            'title'=>'required',
            'category_id'=>'not_in: 0',
            'place'=>'not_in: 0',
            'price_day'=>'required | integer',
            'thum'=>'required|image',
        ];
    }

    public function messages()
    {
        return [
            "required" => "必須項目です。",
            "image" => "指定されたファイルが画像(jpg、png、bmp、gif、svg)ではありません。",
            "category_id.not_in" => "カテゴリーが選択されていません。",
            "place.not_in" => "場所が選択されていません。",
            "integer" => "価格が整数ではありません。"
        ];
    }
}
