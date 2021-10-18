<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

use App\model\OrderModel;
use App\model\OrderDetailModel;

class OrderController extends Controller
{
    public function getOrder(Request $request){
        if(isset($request->search_order)) {
            if($request->search_order==-1){
                $data['order_list']     = OrderModel::all();
            } else {
                $data['order_list']     = OrderModel::where('od_status', $request->search_order)->paginate(10);
            }
        } else {
            $data['order_list']     = OrderModel::all();
        }

        return view('admin/order', $data);
    }
    public function getOrderDetail($id){
        // $data['order_detail']   = Order::find($id);
        // $data['order_list']     = Order::find($id)->od_json_array->attributesToArray();
        $data['order_info']     = OrderModel::find($id);
        $data['customer_info']  = DB::table('tb_order')
                                        ->join('tb_user', 'tb_order.od_user_id', '=', 'tb_user.id')
                                        ->where('od_id', $id);
        // $data['order_detail']   = DB::table('tb_order_detail')
        //                                 ->join('tb_product', 'tb_order_detail.odd_product_id', '=', 'tb_product.pro_id')
        //                                 ->where('odd_od_id', $id)
        //                                 ->orderBy('odd_od_id', 'desc');

        $data['order_detail']   = OrderDetailModel::where('odd_od_id', $id)->orderBy('odd_od_id', 'desc')->get();

        return view('admin/orderdetail', $data);
    }

    public function updateOrder(Request $request, $id){
        $order              =   OrderModel::find($id);
        $order->od_status   =   $request->order_detail_status;
        $order->save();
        return redirect()->intended('admin/order');
    }

    public function deleteOrder($id){
        OrderModel::destroy($id);
        OrderDetailModel::where('odd_od_id', $id)->delete();
        return back();
    }
}
