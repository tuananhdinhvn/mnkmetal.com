<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

use Cart;
use Carbon\Carbon;
use Mail;

use App\model\UserModel;

use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function getRegister(){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::total();

        return view('frontend/register', $data);
    }

    public function postRegister(RegisterRequest $request){

        $id_user = UserModel::insertGetId([
            'name'         => $request->name,
            'email'        => $request->email,
            'password'     => bcrypt($request->password),
            'phone'        => $request->phone,
            'diachi'       => $request->diachi,
            'phanquyen'    => 4,
            'avatar'       => 'avatar.png',
            'xacnhan'      => false,
            'code_active'  => Str::random(47),
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now(),
        ]);

        $user_info = UserModel::find($id_user);

        $user_name      = $user_info->name;
        $mail_user      = $user_info->email;
        $code_active    = $user_info->code_active;

        $data = [
            'name'  => $user_name,
            'email' => $mail_user,
            'code'  => $code_active,
        ];

        Mail::send('mail.confirm_register', $data, function ($message) use ($mail_user, $user_name) {
            
            $message->from('tuananhdinh.vn@gmail.com', 'TuanAnh Dinh');
            $message->to($mail_user, $user_name);
            $message->subject('Xác nhận kích hoạt tài khoản');
        });

        return redirect()->intended('login')->with('check_mail', 'Mã kích hoạt đã được gửi đến mail của bạn. <br/>Vui lòng check mail để kích hoạt tài khoản.');

    }


    // Xác nhận User
    public function confirmUser($code, Request $request){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::total();

        $email                  = $request->email;
        $checkUser              = UserModel::where('code_active', $code)->where('email', $email)->first();

        if(!$checkUser){
            // dd('không tồn tại code');
            return view('errors.404');
        } else {
            $checkUser->code_active = 'actived';
            $checkUser->xacnhan     = true;
            $checkUser->time_active = Carbon::now();
            $checkUser->save();
            return redirect()->intended('admin/login')->with('confirm_success', 'Xác nhận tài khoản thành công.');
        }
    }


}
