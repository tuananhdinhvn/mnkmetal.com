<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\StaticPageModel;

class StaticPageController extends Controller
{
    public function getStaticPage($slug){
        $data['static_item'] = StaticPageModel::where('static_slug', $slug)->get();
        return view('frontend.static_page', $data);
    }
    
}
