<?php
namespace App\Http\Controllers\admin;

use Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\OrderModel;
use App\model\ProductModel;
use App\model\CustomerModel;

class DashboardController extends Controller
{
    public function getDashboard(){
        $array              = OrderModel::select('created_at', 'od_total')->get();
        $arr_time_list      = [];
        $arr_revenue_total  = [];
        $number             = 0;

        
        foreach($array as $key=>$item){

            if($key == 0){
                // Time list
                $arr_time_list[$number]         = $item->created_at->format('M').'-'.$item->created_at->format('Y');
                // revenue list
                $arr_revenue_total[$number]     = $item->od_total;
            } elseif($arr_time_list[$number] == $item->created_at->format('M').'-'.$item->created_at->format('Y')){
                // revenue list
                $arr_revenue_total[$number]     = $arr_revenue_total[$number] + $item->od_total;
            } elseif($arr_time_list[$number] != $item->created_at->format('M').'-'.$item->created_at->format('Y')) {
                $number++;
                // Time list
                $arr_time_list[$number]         = $item->created_at->format('M').'-'.$item->created_at->format('Y');
                // revenue list
                $arr_revenue_total[$number]     = $item->od_total;
            }
            
        }

        $data['arr_month']                  = $arr_time_list;
        $data['arr_month_revenue']          = $arr_revenue_total;
        $data['count_month_report']         = count($arr_revenue_total);
        $data['all_new_customer_count']     = CustomerModel::where('cust_tinhtrang', 1)->count();
        $data['new_customer_event_count']   = CustomerModel::where('cust_tinhtrang', 1)->where('cust_type', 'event')->count();

        if(Auth::user()->phanquyen == 3){
            return redirect()->intended('/');
        } else {
            return view('admin/dashboard', $data);
        }
        
    }
}
