<?php

namespace App\Http\Controllers\admin\layout;

use File;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\LayoutProductModel;
use App\Http\Requests\LayoutProductRequest;

class LayoutProductController extends Controller
{
    public function getLayoutProduct(){
        $data['product'] = LayoutProductModel::find(1);
        return view('admin/layout/layout_product', $data);
    }

    
    public function postLayoutProduct(LayoutProductRequest $request){
        $layout = LayoutProductModel::find(1);

        $layout->product_category   = $request->input('product_category');
        $layout->product_fillter    = $request->input('product_fillter');

        if ($request->hasFile('product_advertise')) {
            File::delete('public/upload/template/'.$layout->product_advertise);

            $file                       = $request->file('product_advertise');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $layout->product_advertise  = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }

        if ($request->hasFile('product_banner')) {
            File::delete('public/upload/template/'.$layout->product_banner);

            $file                       = $request->file('product_banner');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $layout->product_banner     = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }        

        $layout->updated_at        = Carbon::now();
        $layout->save();
        return back();
    }
}
