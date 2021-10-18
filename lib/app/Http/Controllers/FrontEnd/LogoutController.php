<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class LogoutController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect()->intended('/');
    }
}
