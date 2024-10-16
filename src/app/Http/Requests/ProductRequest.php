<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        'name' => 'required',
        'price' => 'required|integer|min:0|max:10000',
        'description' => 'required|max:120',
        'image' => 'required|image',
        'seasons' => 'required|array|min:1',  
            
        ];
    }

    public function messages()
  {
    return [
        'name.required' => '商品名を入力してください',
        'price.required' => '値段を入力してください',
        'price.integer' => '数値で入力してください',
        'price.min' => '価格は0~10000円以内で入力してください。',
        'price.max' => '価格は0~10000円以内で入力してください。',
        'description.required' => '商品説明を入力してください',
        'description.max' =>'120文字以内で入力してください',
        'image.required' => '商品画像を登録してください',
        'image.image' => '「.png」または「.jpeg」形式でアップロードしてください', 
        'seasons.required' => '季節を選択してください',
    ];
  }
}
