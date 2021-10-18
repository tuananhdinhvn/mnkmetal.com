<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SinglePageController extends Controller
{
    public function getSinglePage(){
        // $data['page_list'] = SinglePage::all();
        return view('admin/singlepage');
    }

    public function addSinglePage(){
        return view('admin/addsinglepage');
    }
    public function postaddSinglePage(AddSinglePage $request){
        // $singlepage = new SinglePage;
        // $singlepage->sp_ten         = $request->sp_ten;
        // $singlepage->sp_slug        = str_slug($request->sp_ten);
        // $singlepage->sp_noidung     = $request->sp_noidung;
        // $singlepage->sp_mota        = $request->sp_mota;
        // $singlepage->sp_nguoiviet   = $request->sp_nguoiviet;
        // $singlepage->created_at     = Carbon::now();
        // $singlepage->updated_at     = Carbon::now();
        // $singlepage->save();
        return redirect()->intended('admin/singlepage');

    }

    public function editSinglePage($id){
        // $data['page_item'] = SinglePage::find($id);
        return view('admin/editsinglepage');
    }
    public function posteditSinglePage(EditSinglePage $request, $id){
        // $singlepage = SinglePage::find($id);
        // $singlepage->sp_ten         = $request->sp_ten;
        // // $singlepage->sp_slug        = str_slug($request->sp_ten);
        // $singlepage->sp_noidung     = $request->sp_noidung;
        // $singlepage->sp_mota        = $request->sp_mota;
        // $singlepage->updated_at     = Carbon::now();
        // $singlepage->save();
        return redirect()->intended('admin/singlepage');
    }

    public function deleteSinglePage($id){
        // SinglePage::destroy($id);
        return back();
    }
}
