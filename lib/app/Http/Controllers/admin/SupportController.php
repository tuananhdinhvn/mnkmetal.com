<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Mail;

class SupportController extends Controller
{
    public function getSuport(){
        return view('admin.support');
    }
    public function sendMailSupport(Request $request){

        $cs_name    = $request->cs_name;
        $cs_phone   = $request->cs_phone;
        $cs_message = $request->cs_message;

        $data = [
            'cs_name'       => $cs_name,
            'cs_phone'      => $cs_phone,
            'cs_message'    => $cs_message
        ];

        Mail::send('mail.supportmail', $data, function ($message) {
            $message->from('tuananhdinhcs@gmail.com', 'Sài Thành Pool');
            $message->to('tuananhdinh.vn@gmail.com', 'Me');
            $message->subject('Yêu cầu hỗ trợ từ Sài Thành Pool');
        });

        return back()->with('sent_mail', 'Yêu cầu của bạn đã được gửi. Tôi sẽ liên lạc với bạn trong thời gian sớm nhất.');

    }
}
