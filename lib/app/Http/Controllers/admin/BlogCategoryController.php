<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use File;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\BlogCategoryModel;
use App\Http\Requests\BlogCatRequest;
use App\Http\Requests\EditBlogCatRequest;

class BlogCategoryController extends Controller
{
    public function getBlogCat(Request $request){
        $blogcat_type               = $request->type;

        $data['blogcat_list']       = BlogCategoryModel::where('blogcat_type', $blogcat_type)->get();
        $data['blogcat_type']       = $request->type;

        return view('admin/blogcat', $data);
    }


    public function addBlogCat(Request $request){
        $blogcat_type           = $request->type;
        $data['blogcat_type']      = $request->type;

        return view('admin/addblogcat', $data);
    }


    public function postaddBlogCat(Request $request){
        $blogcat_type               = $request->type;

        $blogcat                    = new BlogCategoryModel;
        
        $blogcat->blogcat_ten       = $request->blogcat_ten;
        $blogcat->blogcat_ten_en    = isset($request->blogcat_ten_en) ? $request->blogcat_ten_en : '';

        $blogcat->blogcat_slug      = str_slug($request->blogcat_ten);
        

        $blogcat->blogcat_title     = $request->blogcat_title;
        $blogcat->blogcat_mota      = $request->blogcat_mota;
        $blogcat->blogcat_keyword   = $request->blogcat_keyword;

        $blogcat->blogcat_author    = $request->blogcat_author;
        $blogcat->blogcat_editor    = $request->blogcat_author;

        $blogcat->blogcat_type      = $blogcat_type;

        $blogcat->created_at        = Carbon::now();
        $blogcat->updated_at        = Carbon::now();
        $blogcat->save();

        return redirect()->intended('admin/blogcat?type='.$blogcat_type);
    }


    public function editBlogCat(Request $request ,$id){
        $data['blogcat_edit']   = BlogCategoryModel::find($id);
        $data['blogcat_type']   = $request->type;

        return view('admin/editblogcat', $data);
    }


    public function posteditBlogCat(EditBlogCatRequest $request, $id){
        $blogcat_type               = $request->type;

        $blogcat = BlogCategoryModel::find($id);

        $blogcat->blogcat_ten       = $request->blogcat_ten;
        $blogcat->blogcat_ten_en    = isset($request->blogcat_ten_en) ? $request->blogcat_ten_en : '';
        

        $blogcat->blogcat_title     = $request->blogcat_title;
        $blogcat->blogcat_mota      = $request->blogcat_mota;
        $blogcat->blogcat_keyword   = $request->blogcat_keyword;
        
        $blogcat->blogcat_editor    = $request->blogcat_editor;

        $blogcat->updated_at      = Carbon::now();
        $blogcat->save();

        return redirect()->intended('admin/blogcat?type='.$blogcat_type);
    }


    public function deleteBlogCat($id){
        BlogCategoryModel::destroy($id);
        return back();
    }



    
}
