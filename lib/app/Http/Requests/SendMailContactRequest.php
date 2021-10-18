<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendMailContactRequest extends FormRequest
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
            // 'repassword'    => 'same:password',
            // 'phone'         => 'numeric|unique:tb_user,phone',
            // 'email'         => 'email|unique:tb_user,email',
        ];
    }

    public function messages(){
        return [
            // 'repassword.same'   =>  'Mật khẩu không trùng khớp',
            // 'phone.numeric'     =>  'Số điện thoại phải là dạng số',
            // 'phone.unique'      =>  'Số điện thoại đã đăng ký trong hệ thống',
            // 'email.email'       =>  'Không đúng định dạng email',
            // 'email.unique'      =>  'Email đã đăng ký trong hệ thống',
        ];
    }
}
