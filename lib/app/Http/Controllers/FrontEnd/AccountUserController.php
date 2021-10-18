<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Cart;

class AccountUserController extends Controller
{
    public function getAccount(){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::total();

        return view('frontend.account_user', $data);
    }
}
