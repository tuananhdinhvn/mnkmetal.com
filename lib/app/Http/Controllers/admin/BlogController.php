<?php
namespace App\Http\Controllers\admin;

use DB;
use File;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\BlogModel;
use App\Http\Requests\AddBlogRequest;
use App\Http\Requests\EditBlogRequest;

use App\model\BlogCategoryModel;

class BlogController extends Controller
{
    public function getNews(Request $request){
        $blog_type                  = $request->type;

        $data['blogcat_list']       = BlogCategoryModel::where('blogcat_type', $blog_type)->get();
        $blog_type                  = $request->type;
        $data['blog_type']          = $blog_type;

        if(isset($request->search_name)) {
            $query                  = str_replace(' ', '%', $request->search_name);
            $data['blog_list']      = DB::table('tb_blog')
                                        ->join('tb_blogcat', 'tb_blog.blog_blogcatid', '=', 'tb_blogcat.blogcat_id')
                                        ->where('blog_ten', 'like', '%'.$query.'%')
                                        ->where('blog_type', $blog_type)
                                        ->orderBy('blog_id', 'asc')
                                        ->get();
                                        
        } elseif(isset($request->search_category) && !isset($request->search_name)) {
            $data['blog_list']      = DB::table('tb_blog')
                                        ->join('tb_blogcat', 'tb_blog.blog_blogcatid', '=', 'tb_blogcat.blogcat_id')
                                        ->where('blog_blogcatid', '=', $request->search_category)
                                        ->where('blog_type', $blog_type)
                                        ->orderBy('blog_id', 'asc')
                                        ->get();
        } elseif(isset($request->search_name) && isset($request->search_category)) {
            $query                  = str_replace(' ', '%', $request->search_name);
            $data['blog_list']      = DB::table('tb_blog')
                                        ->join('tb_blogcat', 'tb_blog.blog_blogcatid', '=', 'tb_blogcat.blogcat_id')
                                        ->where('blog_ten', 'like', '%'.$query.'%')
                                        ->where('blog_blogcatid', '=', $request->search_category)
                                        ->where('blog_type', $blog_type)
                                        ->orderBy('blog_id', 'asc')
                                        ->get();
        } else {
            $data['blog_list']      = DB::table('tb_blog')
                                        ->join('tb_blogcat', 'tb_blog.blog_blogcatid', '=', 'tb_blogcat.blogcat_id')
                                        ->where('blog_type', $blog_type)
                                        ->orderBy('blog_id', 'asc')
                                        ->get();
        }
        return view('admin/display/news', $data);
    }


    public function addNews(Request $request){
        $blog_type              = $request->type;

        $data['blogcat_list']   = BlogCategoryModel::where('blogcat_type', $blog_type)->get();
        $data['blog_type']      = $request->type;

        return view('admin/add/addnews', $data);
    }


    public function postaddNews(AddBlogRequest $request){
        $blog = new BlogModel;
        $blog_type              = $request->type;
        $blog->blog_ten         = $request->blog_ten;
        $blog->blog_ten_vi      = isset($request->blog_ten_vi) ? $request->blog_ten_vi : '';
        $blog->blog_ten_en      = isset($request->blog_ten_en) ? $request->blog_ten_en : '';
        $blog->blog_ten_zh      = isset($request->blog_ten_zh) ? $request->blog_ten_zh : '';
        $blog->blog_ten_ja      = isset($request->blog_ten_ja) ? $request->blog_ten_ja : '';
        $blog->blog_ten_kr      = isset($request->blog_ten_kr) ? $request->blog_ten_kr : '';

        $blog->blog_place       = isset($request->blog_place) ? $request->blog_place : '';
        $blog->blog_place_en    = isset($request->blog_place_en) ? $request->blog_place_en : '';

        $blog->blog_slug        = str_slug($request->blog_ten_vi);


        if ($request->hasFile('blog_thumb')) {
            $file                   = $request->file('blog_thumb');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $blog->blog_thumb       = $image_save_name;
            $file->move('public/upload/blog/', $image_save_name);
        }

        $blog->blog_noidung     = $request->blog_noidung;
        $blog->blog_noidung_vi  = isset($request->blog_noidung_vi) ? $request->blog_noidung_vi : '';
        $blog->blog_noidung_en  = isset($request->blog_noidung_en) ? $request->blog_noidung_en : '';
        $blog->blog_noidung_zh  = isset($request->blog_noidung_zh) ? $request->blog_noidung_zh : '';
        $blog->blog_noidung_ja  = isset($request->blog_noidung_ja) ? $request->blog_noidung_ja : '';
        $blog->blog_noidung_kr  = isset($request->blog_noidung_kr) ? $request->blog_noidung_kr : '';

        $blog->blog_title       = isset($request->blog_title) ? $request->blog_title : $request->blog_ten;

        $blog->blog_mota        = $request->blog_mota;
        $blog->blog_mota_vi     = $request->blog_mota_vi;
        $blog->blog_mota_en     = $request->blog_mota_en;
        $blog->blog_mota_zh     = $request->blog_mota_zh;
        $blog->blog_mota_ja     = $request->blog_mota_ja;
        $blog->blog_mota_kr     = $request->blog_mota_kr;

        $blog->blog_keyword     = $request->blog_keyword;

        $blog->blog_blogcatid   = isset($request->blog_blogcatid) ? $request->blog_blogcatid : 18;
        $blog->blog_nguoiviet   = $request->blog_nguoiviet;
        $blog->blog_editor      = $request->blog_nguoiviet;
        
        $blog->blog_type        = $request->type;
        $blog->created_at       = Carbon::now();
        $blog->updated_at       = Carbon::now();
        $blog->save();
        
        return redirect()->intended('admin/news/?type=blog');
    }

    public function editNews(Request $request, $id){
        $blog_type              = $request->type;
        
        $data['blogcat_list']   = BlogCategoryModel::where('blogcat_type', $blog_type)->get();
        $data['blog_edit']      = BlogModel::find($id);
        $data['blog_type']      = $request->type;

        return view('admin/edit/editnews', $data);
    }

    public function posteditNews(Request $request, $id){
        $blog_type              = $request->type;
        $data['blog_type']      = $request->type;
        $blog                   = BlogModel::find($id);

        $blog->blog_ten         = $request->blog_ten;
        $blog->blog_ten_vi      = isset($request->blog_ten_vi) ? $request->blog_ten_vi : '';
        $blog->blog_ten_en      = isset($request->blog_ten_en) ? $request->blog_ten_en : '';
        $blog->blog_ten_zh      = isset($request->blog_ten_zh) ? $request->blog_ten_zh : '';
        $blog->blog_ten_ja      = isset($request->blog_ten_ja) ? $request->blog_ten_ja : '';
        $blog->blog_ten_kr      = isset($request->blog_ten_kr) ? $request->blog_ten_kr : '';

        $blog->blog_place       = isset($request->blog_place) ? $request->blog_place : '';
        $blog->blog_place_en    = isset($request->blog_place_en) ? $request->blog_place_en : '';
        
        if ($request->hasFile('blog_thumb')) {
            File::delete('public/upload/blog/'.$blog->blog_thumb);

            $file               = $request->file('blog_thumb');
            $image_name         = $file->getClientOriginalName();
            $image_save_name    = time().$image_name;
            $blog->blog_thumb   = $image_save_name;
            $file->move('public/upload/blog/', $image_save_name);
        }

        $blog->blog_noidung     = $request->blog_noidung;
        $blog->blog_noidung_vi  = isset($request->blog_noidung_vi) ? $request->blog_noidung_vi : '';
        $blog->blog_noidung_en  = isset($request->blog_noidung_en) ? $request->blog_noidung_en : '';
        $blog->blog_noidung_zh  = isset($request->blog_noidung_zh) ? $request->blog_noidung_zh : '';
        $blog->blog_noidung_ja  = isset($request->blog_noidung_ja) ? $request->blog_noidung_ja : '';
        $blog->blog_noidung_kr  = isset($request->blog_noidung_kr) ? $request->blog_noidung_kr : '';

        $blog->blog_title       = isset($request->blog_title) ? $request->blog_title : $request->blog_ten;
        $blog->blog_mota        = $request->blog_mota;
        
        $blog->blog_mota_vi     = $request->blog_mota_vi;
        $blog->blog_mota_en     = $request->blog_mota_en;
        $blog->blog_mota_zh     = $request->blog_mota_zh;
        $blog->blog_mota_ja     = $request->blog_mota_ja;
        $blog->blog_mota_kr     = $request->blog_mota_kr;

        $blog->blog_keyword     = $request->blog_keyword;
        
        $blog->blog_blogcatid   = isset($request->blog_blogcatid) ? $request->blog_blogcatid : 18;

        $blog->blog_editor      = $request->blog_editor;

        $blog->updated_at       = Carbon::now();
        $blog->save();

        return redirect()->intended('admin/news/?type=blog');
    }

    public function deleteBlog($id){
        $blog = BlogModel::find($id);
        File::delete('public/upload/blog/'.$blog->blog_thumb);
        BlogModel::destroy($id);

        return back();
    }

    public function checkshowBlog($id){
        $blog = BlogModel::find($id);
        $blog->blog_hienthi = $blog->blog_hienthi ? 0 : 1;
        $blog->save();
        
        return back();
    }



}
