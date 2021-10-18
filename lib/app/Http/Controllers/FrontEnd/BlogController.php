<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Cart;

use App\model\BlogModel;
use App\model\BlogCategoryModel;

class BlogController extends Controller
{
    public function getBlog(){

        $data['blog_cat']       = BlogCategoryModel::where('blogcat_type', 'blog')->get();
        $data['blog_list']      = BlogModel::where('blog_type', 'blog')->get();

        return view('frontend.blog', $data);
    }


    public function getBlogDetail($slug, $id){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::total();

        // $data['blogcat_detail'] = BlogCategoryModel::find($cat_id);
        $data['blog_detail']    = BlogModel::find($id);
        $data['blog_relate']    = BlogModel::where('blog_type', 'blog')->get();
        
        return view('frontend.blogdetail', $data);
    }

    

    public function getBlogCategory($slug, $id){
        $data['blogcat_item']       = BlogCategoryModel::find($id);
        $redirect_404               = BlogCategoryModel::where('blogcat_slug', $slug)->where('blogcat_id', $id)->count();
        
        if($redirect_404 == 0){
            return redirect('404');
        }
        
        $data['blogcat_list_item']  = BlogModel::where('blog_blogcatid', $id)->get();
        $data['thumb_mobile']       = 'public/upload/blog/'.$data['blogcat_item']->blogcat_thumb_mobile;

        return view('frontend.blogcat', $data);
    }


}
