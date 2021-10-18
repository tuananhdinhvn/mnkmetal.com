<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use Cart;
use Carbon\Carbon;

use App\model\OrderModel;
use App\model\OrderDetailModel;

use App\Http\Requests\PaymentRequest;

class PaymentController extends Controller
{
    public function getPayment(){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::subtotal(0,3);

        return view('frontend.payment', $data);
      
    }

    public function saveOrder(PaymentRequest $request){
        

        $total_money = str_replace(',', '', Cart::subtotal(0,3));
        $userId = Auth::user()->id;

        $order_saveID     = OrderModel::insertGetId([
            'od_user_id'    => $userId,
            'od_user_name'  => $request->cust_hoten,
            'od_total'      => (int)$total_money,
            'od_ship'       => 0,
            'od_note'       => 'Khách hàng ghi chú',
            'od_address'    => $request->cust_diachi,
            'od_phone'      => $request->cust_phone,
            'od_status'     => 0,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),

        ]);

        if($order_saveID){
            $product    = Cart::content();

            foreach($product as $productItem){
                OrderDetailModel::insert([
                    'odd_od_id'         =>  $order_saveID,
                    'odd_product_id'    =>  $productItem->id,
                    'odd_product_name'  =>  $productItem->name,
                    'odd_qty'           =>  $productItem->qty,
                    'odd_product_img'   =>  $productItem->options->img,
                    'odd_price'         =>  $productItem->price,
                    'odd_product_price' =>  $productItem->price,
                    'created_at'        =>  Carbon::now(),
                    'updated_at'        =>  Carbon::now(),
                ]);
                
            }
        }

        Cart::destroy();

        return redirect()->intended('/')->with('success_payment', 'Hoàn tất đơn hàng');
    }
}
