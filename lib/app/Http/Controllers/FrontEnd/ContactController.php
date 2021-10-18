<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Cart;
use Mail;
use Carbon\Carbon;

use App\model\LayoutContactModel;
use App\model\CustomerModel;

use App\Http\Requests\SendMailContactRequest;

class ContactController extends Controller
{
    public function getContact(){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::total();
        
        $data['contact_item']   = LayoutContactModel::find(1);
        
        return view('frontend.contact', $data);
    }

    public function sendMail(SendMailContactRequest $request){

        $data = [
            'name'      => $request->contact_name,
            'email'     => $request->contact_email,
            'phone'     => $request->contact_phone,
            'content'   => $request->contact_content,
        ];

        Mail::send('mail.contact', $data, function ($message) {
            $message->from('tuananhdinhcs@gmail.com', 'Custommer service');
            $message->to('saithanhpool@gmail.com', 'Customer');
            $message->subject('Khách hàng liên hệ từ saithanhpool.com');
        });

        return redirect('lien-he')->with('sent_mail', 'Thông tin đã được gửi, chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất.');
    }




    public function saveData(Request $request){
        $cust                   = new CustomerModel;

        $cust->cust_ten         = isset($request->cust_ten) ? $request->cust_ten : 'Khách hàng đăng ký qua email';
        $cust->cust_email       = $request->cust_email;
        $cust->cust_phone       = isset($request->cust_phone) ? $request->cust_phone : '';
        $cust->cust_noidung     = isset($request->cust_noidung) ? $request->cust_noidung : 'Gửi thông tin du học qua email';
        $cust->cust_phanloai    = 1; // 1: Khách hàng cần tư vấn,   3: Nhân viên công ty,       4: Cựu sinh viên
        $cust->cust_tinhtrang   = 1; // 0: Đã gọi,                  1: Chưa gọi
        $cust->cust_type        = 'email-register';
        $cust->created_at       = Carbon::now();
        $cust->updated_at       = Carbon::now();
        $cust->save();

        return back()->with('save_data_complete', 'Thông tin đã được cập nhật. Chúng tôi sẽ liên hệ bạn trong thời gian sớm nhất');
    }

    

    public function eventSignUp(Request $request){
        $cust                   = new CustomerModel;

        $cust->cust_ten         = isset($request->cust_ten) ? $request->cust_ten : 'Khách hàng đăng ký event';
        $cust->cust_email       = $request->cust_email;
        $cust->cust_phone       = isset($request->cust_phone) ? $request->cust_phone : '';
        $cust->cust_noidung     = isset($request->cust_noidung) ? $request->cust_noidung : '';
        $cust->cust_phanloai    = 1; // 1: Khách hàng cần tư vấn,   3: Nhân viên công ty,       4: Cựu sinh viên    5: Khách đăng ký event
        $cust->cust_tinhtrang   = 1; // 0: Đã gọi,                  1: Chưa gọi
        $cust->cust_event_id    = $request->cust_event_id;
        $cust->cust_type        = 'event';
        $cust->created_at       = Carbon::now();
        $cust->updated_at       = Carbon::now();
        $cust->save();

        return back()->with('sign_up_complete', 'Đăng ký thành công.');
    }


}
