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
            // 'category_id'=>'not_in: 0',
            'url'=>'required',
            'thum'=>'required|mimes:mp4,qt,x-ms-wmv,mpeg,x-msvideo',
        ];
    }

    public function messages()
    {
        return [
            "required" => "必須項目です。",
            // "image" => "指定されたファイルが画像(jpg、png、bmp、gif、svg)ではありません。",TODO:動画バリデーションエラー
            // "category_id.not_in" => "カテゴリーが選択されていません。",
            // "integer" => "価格が整数ではありません。"
        ];
    }
}
