<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

use Cart;
use Auth;
use Mail;

use App\model\UserModel;
use App\model\LayoutHomepageModel;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\ChangePassWordRequest;

class LoginController extends Controller
{
    public function getLogin(){

        $data['login_bg']           = LayoutHomepageModel::find(1);

        return view('frontend/login', $data);
    }

    public function postLogin(LoginRequest $request){
        $arr = ['email' => $request->email, 'password' => $request->password];
        
        if (Auth::attempt($arr)) {
            if(Auth::user()->phanquyen == 3){
                return redirect()->intended('guest');
            } else {
                return redirect()->intended('admin');
            }
        } else {
            return back()->withInput()->with('error', 'Tài khoản hoặc mật khẩu chưa đúng');
        }
    }


    // Gửi link xác nhận thay mật khẩu
    public function forgotPassword(Request $request){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::total();

        $email          = $request->email;

        $check_email    = UserModel::where('email', $email)->first();
        $user_name      = $check_email->name;

        if(!$check_email){
            return back()->with('invalid-email', 'Địa chỉ email không tồn tại trên hệ thống !');
        } else {

            $check_email->code_reset_password   = Str::random(47);
            $check_email->save();

            $data = [
                'name'  => $check_email->name,
                'email' => $check_email->email,
                'code'  => $check_email->code_reset_password,
            ];
    
    
            Mail::send('mail.reset_password', $data, function ($message) use ($email, $user_name) {
                
                $message->from('tuananhdinh.vn@gmail.com', 'TuanAnh Dinh');
                $message->to($email, $user_name);
                $message->subject('Xác nhận thay đổi mật khẩu');
            });

            return back()->with('valid-email', 'Link thay đổi mật khẩu đã gửi đến mail của bạn. </br>Vui lòng check mail.');
        }
    }


    // Lấy lại mật khẩu
    public function rebornPassword($code, ChangePassWordRequest $request){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::total();

        $email                  = $request->email;
        $checkUser              = UserModel::where('code_reset_password', $code)->where('email', $email)->first();

        if(!$checkUser){
            // dd('không tồn tại code');
            return view('errors.404');
        } else {
            $data['code_reset']     = $code;
            $data['email_reset']    = $email;
            return view('frontend.reborn_password', $data);
        }

    }

    public function postrebornPassword($code, ChangePassWordRequest $request){
        $email                  = $request->email;
        $resetUser              = UserModel::where('code_reset_password', $code)->where('email', $email)->first();

        $resetUser->password    = bcrypt($request->password);
        $resetUser->code_reset_password = null;
        $resetUser->save();

        return redirect('login')->with('reset_done', 'Thay đổi mật khẩu thành công.');
    }


    // Guest 
    public function logoutProjectGuest(){
        Auth::logout();
        return redirect()->intended('guest');
    }

}
