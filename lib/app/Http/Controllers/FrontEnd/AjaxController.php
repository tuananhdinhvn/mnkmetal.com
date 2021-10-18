<?php

namespace App\Http\Controllers\FrontEnd;

use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\CustomerModel;

class AjaxController extends Controller
{
    // $info = $request->phone;
    public function saveInfo($phone){
        $cust               = new CustomerModel;

        $cust->cust_ghichu  = 'Khách liên hệ làm web';
        $cust->cust_info    = $phone;
        
        $cust->updated_at   = Carbon::now();
        $cust->created_at   = Carbon::now();
        $cust->save();
        return 1;
    }
}
