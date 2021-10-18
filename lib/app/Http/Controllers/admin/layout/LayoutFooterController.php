<?php

namespace App\Http\Controllers\admin\layout;

use File;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\LayoutFooterModel;
use App\Http\Requests\LayoutFooterRequest;

class LayoutFooterController extends Controller
{
    public function getLayoutFooter(){
        $data['footer_item'] = LayoutFooterModel::find(1);
        return view('admin/layout/layout_footer', $data);
    }

    public function postLayoutFooter(LayoutFooterRequest $request){
        $layout = LayoutFooterModel::find(1);
        
        if ($request->hasFile('footer_logo')) {
            File::delete('public/upload/template/'.$layout->footer_logo);

            $file                   = $request->file('footer_logo');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->footer_logo    = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }

        $layout->footer_description = $request->footer_description;
        $layout->footer_address     = $request->footer_address;
        $layout->footer_email       = $request->footer_email;
        $layout->footer_phone       = $request->footer_phone;
        $layout->footer_facebook    = $request->footer_facebook;

        $layout->updated_at        = Carbon::now();
        $layout->save();
        return back();

    }
}
