<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\StaticPageModel;

class CvOnlineController extends Controller
{
    public function getCV(){
        $data['lylich_info'] = StaticPageModel::find(1);
        return view('frontend.static_page', $data);
    }
}
