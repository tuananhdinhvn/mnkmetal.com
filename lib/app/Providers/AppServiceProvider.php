<?php

namespace App\Providers;

use DB;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

use App\model\OrderModel;
use App\model\ProductCategoryModel;
use App\model\ProductCategoryChildModel;
use App\model\ProductModel;
use App\model\BlogModel;
use App\model\BlogCategoryModel;
use App\model\LayoutHomepageModel;
use App\model\LayoutFooterModel;
use App\model\SettingModel;
use App\model\QNAModel;
use App\model\CustomerModel;

use Cart;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        $data['count_new_order']        = OrderModel::where('od_status', 0)->count();
       
        $data['getindex']               = LayoutHomepageModel::find(1);

        $data['getblog_index']          = BlogModel::all();
        $data['setting_info']           = SettingModel::all();

        $data['qna_list']               = QNAModel::all();


        // Shopping Cart
        $data['cart_items']             = Cart::content();
        $data['cart_count']             = Cart::count();
        $data['cart_get_total']         = Cart::total();

        // Menu frontend
        $data['category_menu']          = BlogCategoryModel::all();

        $data['about_menu']             = BlogModel::where('blog_type', 'about')->get();
        $data['nation_menu']            = ProductCategoryModel::all();
        $data['investment_menu']        = BlogCategoryModel::where('blogcat_type', 'invest')->get();

        // Team support
        $data['team_list']          = CustomerModel::where('cust_type', 'team')->get();

        // Admin
        $data['active_sidebar_admin']   = $request->segments(2);

        $data['type_admin']             = $request->type;

        view()->share($data);
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
