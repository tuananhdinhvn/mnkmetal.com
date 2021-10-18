<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\CustomerModel;

class TemplateController extends Controller
{
    //Save customer info
    public function saveCustomerInfo(Request $request){
        $customer = new CustomerModel;

        $customer->cust_ten         = $request->cust_ten;
        $customer->cust_phone       = $request->cust_phone;
        $customer->cust_email       = $request->cust_email;
        $customer->cust_diachi      = $request->cust_diachi;
        $customer->cust_link        = $request->cust_link;
        $customer->cust_ghichu      = $request->cust_ghichu;
        $customer->created_at       = Carbon::now();
        $customer->updated_at       = Carbon::now();
        $customer->save();

        return back();
    }
	
	
    // Iset education
    
    // public function getIset(){
    //     return view('frontend.template.iset.index');
    // }

    // public function getIsetAbout(){
    //     return view('frontend.template.iset.about');
    // }

    public function getIsetBlog(){
        return view('frontend.template.iset.blog');
    }

    public function getIsetPost(){
        return view('frontend.template.iset.post');
    }

    public function getIsetAllCourse(){
        return view('frontend.template.iset.allcourse');
    }

    public function getIsetProduct(){
        return view('frontend.template.iset.product');
    }

    public function getIsetContact(){
        return view('frontend.template.iset.contact');
    }
	
	
}
