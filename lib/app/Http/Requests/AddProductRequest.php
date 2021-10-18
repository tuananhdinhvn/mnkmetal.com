<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            
            'pro_ten_en'    => 'unique:tb_product,pro_ten_en',
        ];
    }

    public function messages(){
        return [
            'pro_ten.unique'    =>  'Tên sản phẩm đã tồn tại',
            'pro_ten_en.unique' =>  'Tên sản phẩm đã tồn tại',
        ];
    }
}
