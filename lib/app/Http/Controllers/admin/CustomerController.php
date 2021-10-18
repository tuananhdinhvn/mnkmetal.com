<?php

namespace App\Http\Controllers\admin;

use DB;
use File;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\CustomerRequest;

use App\model\UserModel;
use App\model\CustomerModel;
use App\model\EventModel;

class CustomerController extends Controller
{
    public function getCustomer(Request $request){
        // cust_phanloai      1: Khách hàng cần tư vấn,   3: Nhân viên công ty,       4: Cựu sinh viên    5: Khách đăng ký event
        if( isset($request->filter_cust_type) ){
            
            if($request->filter_cust_type == 'email'){
                $data['customer_list']  = CustomerModel::where('cust_type', 'email-register')->get();
            } else {
                $data['customer_list']  = CustomerModel::where('cust_event_id', $request->filter_cust_type)->get();
            }
        } else {
            $data['customer_list']  = CustomerModel::where('cust_phanloai', [1, 2])->get();
        }

        $data['event_list']     = EventModel::all();
        
        return view('admin/customer', $data);
    }
    
    public function getCustomerDetail($id){
        $data['cust_item']      = CustomerModel::find($id);

        return view('admin/customerdetail', $data);
    }

    public function postCustomerDetail(Request $request, $id){
        $cust                   = CustomerModel::find($id);

        $cust->cust_ten         = $request->cust_ten;
        $cust->cust_diachi      = $request->cust_diachi;
        $cust->cust_phone       = $request->cust_phone;
        $cust->cust_email       = $request->cust_email;
        $cust->cust_tinhtrang   = $request->cust_tinhtrang;
        $cust->updated_at       = Carbon::now();
        $cust->save();

        return redirect()->intended('admin/customer');
    }

    public function deleteCustomer($id){
        $cust = CustomerModel::find($id);
        CustomerModel::destroy($id);

        return back();
    }

    public function checkCustomer($id){
        $cust = CustomerModel::find($id);
        $cust->cust_tinhtrang   = $cust->cust_tinhtrang ? 0 : 1;
        $cust->cust_staff       = Auth::user()->name;

        $cust->save();

        return back();
    }



}
