<?php

namespace App\Http\Controllers\admin\layout;

use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\LayoutContactModel;
use App\Http\Requests\LayoutContactRequest;

class LayoutContactController extends Controller
{
    public function getLayoutContact(){
        $data['contact_item'] = LayoutContactModel::find(1);
        return view('admin/layout/layout_contact', $data);
    }
    public function postLayoutContact(LayoutContactRequest $request){
        $layout = LayoutContactModel::find(1);
        
        $layout->contact_map    = $request->contact_map;
        $layout->contact_title  = $request->contact_title;
        $layout->contact_add    = $request->contact_add;
        $layout->contact_email  = $request->contact_email;
        $layout->contact_phone  = $request->contact_phone;

        $layout->updated_at     = Carbon::now();
        $layout->save();
        return back();

    }
}
