<?php
namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Cart;

use App\model\ProductCategoryModel;
use App\model\ProductCategoryChildModel;
use App\model\ProductModel;
use App\model\LayoutHomepageModel;
use App\model\LayoutProductModel;
use App\model\ProdutPhotoModel;
use App\model\CustomerModel;
use App\model\NationModel;
use App\model\MajorModel;
use App\model\ProductLocationModel;


class ProductController extends Controller
{
    public function getProduct(Request $request){

        $data['nation_list']    = ProductCategoryModel::all();
        $data['product_admin']  = LayoutProductModel::find(1);

        
        if($request->price){
            $price = $request->price;
            switch($price)
            {
                case 1:
                    $data['product_list']   = ProductModel::where('pro_giaban', '<', 20000)->orderBy('pro_id', 'desc')->paginate(12);
                break;

                case 2:
                    $data['product_list']   = ProductModel::whereIn('pro_giaban', [20000, 30000])->orderBy('pro_id', 'desc')->paginate(12);
                break;

                case 3:
                    $data['product_list']   = ProductModel::whereIn('pro_giaban', [30000, 50000])->orderBy('pro_id', 'desc')->paginate(12);
                break;

                case 4:
                    $data['product_list']   = ProductModel::whereIn('pro_giaban', [50000, 100000])->orderBy('pro_id', 'desc')->paginate(12);
                break;

                case 5:
                    $data['product_list']   = ProductModel::where('pro_giaban', '>', 100000)->orderBy('pro_id', 'desc')->paginate(12);
                break;

                default:
                    $data['product_list']   = ProductModel::orderBy('pro_id', 'desc')->paginate(12);
                break;
            }
        } else {
            $data['product_list']   = ProductModel::orderBy('pro_id', 'desc')->paginate(12);
        }

        if($request->search_sort){
            $search_sort = $request->search_sort;
            switch($search_sort)
            {
                case 'price-asc':
                    $data['product_list']   = ProductModel::orderBy('pro_giaban', 'asc')->paginate(12);
                break;

                case 'price-desc':
                    $data['product_list']   = ProductModel::orderBy('pro_giaban', 'desc')->paginate(12);
                break;

                case 'title-asc':
                    $data['product_list']   = ProductModel::orderBy('pro_ten', 'asc')->paginate(12);
                break;

                case 'title-desc':
                    $data['product_list']   = ProductModel::orderBy('pro_ten', 'desc')->paginate(12);
                break;

                case 'created-asc':
                    $data['product_list']   = ProductModel::orderBy('created_at', 'asc')->paginate(12);
                break;

                case 'created-desc':
                    $data['product_list']   = ProductModel::orderBy('created_at', 'desc')->paginate(12);
                break;

                default:
                    $data['product_list']   = ProductModel::orderBy('pro_id', 'desc')->paginate(12);
                break;
        }
    } else {

        $data['product_list']   = ProductModel::orderBy('pro_id', 'desc')->paginate(12);

    }

        return view('frontend.product', $data);
        
    }

    // Get product filter
    public function filterProject(Request $request){

        $query = ProductModel::query();

        $query->when(request('filter_nationality'), function ($q) {
            return $q->where('pro_nation', request('filter_nationality') );
        });
        $query->when(request('filter_area'), function ($q) {
            switch ( request('filter_area') ) {
                case 'area_1':
                    return $q->where('pro_area', '<', 50000 );
                    break;
                case 'area_2':
                    return $q->whereBetween('pro_area', [50000, 100000]);
                    break;
                case 'area_3':
                    return $q->where('pro_area', '>', 100000 );
                    break;
            }
        });
        $query->when(request('filter_major'), function ($q) {
            return $q->where('pro_major_id', request('filter_major') );
        });
        $query->when(request('filter_location'), function ($q) {
            return $q->where('pro_location_id', request('filter_location') );
        });
        $query->when(request('filter_grade'), function ($q) {
            return $q->where('pro_building_grade', request('filter_grade') );
        });
        $query->when(request('filter_status'), function ($q) {
            return $q->where('pro_status', request('filter_status') );
        });
        $query->when(request('filter_year'), function ($q) {
            return $q->whereYear('pro_time_work', request('filter_year') );
        });

        $data['project_list']               = $query->where('pro_type', 'project')->orderBy('pro_time_work', 'desc')->get();
        $data['project_count']              = $query->where('pro_type', 'project')->count();

        $data['nation_project_list']        = ProductModel::where('pro_type', 'project')->orderBy('pro_nation')->get();
        $data['nation_list']                = NationModel::all();
        
        $data['major_project_list']         = ProductModel::where('pro_type', 'project')->orderBy('pro_major_id')->get();
        $data['major_list']                 = MajorModel::all();

        $data['location_project_list']      = ProductModel::where('pro_type', 'project')->orderBy('pro_location_id')->get();
        $data['location_list']              = ProductLocationModel::all();

        $data['year_filter_list']           = ProductModel::where('pro_type', 'project')->orderBy('pro_time_work')->get();

        $data['project_bg']                 = LayoutHomepageModel::find(1);

        return view('frontend.filter_result', $data);

    }
    
    public function getProductDetail($slug, $id){

        $data['cart_items']                 = Cart::content();
        $data['cart_count']                 = Cart::count();
        $data['cart_get_total']             = Cart::total();
        
        $data['school_detail_item']         = DB::table('tb_product')
                                                    ->join('tb_productcat', 'tb_product.pro_procatid', '=', 'tb_productcat.procat_id')
                                                    ->where('pro_id', $id)
                                                    ->get();
        
        $data['nation_name']                = DB::table('tb_product')
                                                ->join('tb_productcat', 'tb_product.pro_procatid', '=', 'tb_productcat.procat_id')
                                                ->where('pro_id', $id)
                                                ->get();

        $data['product_alt_photo']          = ProdutPhotoModel::where("product_id",$id)->where('photo_type', null)->get();
        $data['product_alt_photo_private']  = ProdutPhotoModel::where('product_id', $id)->where('photo_type', 'private')->get();
        

        $data['product_relate']         = ProductModel::all();

        
        return view('frontend.prodetail', $data);
    }

    // Danh mục chính
    public function getProductCategory($slug, $id){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::total();

        $data['procat_item']    = ProductCategoryModel::where('procat_id', $id)->get();
        $data['product_list']   = ProductModel::where('pro_procatid', $id)->orderBy('pro_id', 'desc')->paginate(12);
        $data['product_count']  = ProductModel::where('pro_procatid', $id)->count();

		$data['nation_list']	= ProductCategoryModel::all();
		
        $data['staff_info']     = DB::table('tb_customer')
                                    ->join('tb_productcat', 'tb_customer.cust_id', '=', 'tb_productcat.procat_staff_id')
                                    ->where('tb_productcat.procat_id', $id)
                                    ->get();
                       

        return view('frontend.productcat', $data);
    }
    

    // Danh mục con
    public function getProductCategoryChild($slug_main, $slug_child, $id){
        $data['procatchild_item']   = DB::table('tb_productcat_lv2')
                                                ->join('tb_productcat', 'tb_productcat_lv2.procat2_procat_id', '=', 'tb_productcat.procat_id')
                                                ->where('procat2_id', '=', $id)
                                                ->get();

        $data['product_list']       = ProductModel::where('pro_procat_child', $id)->orderBy('pro_id', 'desc')->paginate(12);
        $data['product_count']      = ProductModel::where('pro_procat_child', $id)->count();

        return view('frontend.productcat_child', $data);
    }

}
