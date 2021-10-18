<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Cart;

use App\model\ProductModel;
use App\model\NationModel;
use App\model\MajorModel;
use App\model\ProductLocationModel;

use App\model\LayoutProductModel;

class SearchController extends Controller
{
    public function getSearch(Request $request){
        
        $data['product_admin']  = LayoutProductModel::find(1);

        $result                 = $request->keyword;
        $query                  = str_replace(' ', '%', $result);

        $data['nation_project_list']        = ProductModel::where('pro_type', 'project')->orderBy('pro_nation')->get();
        $data['nation_list']                = NationModel::all();

        $data['major_project_list']         = ProductModel::where('pro_type', 'project')->orderBy('pro_major_id')->get();
        $data['major_list']                 = MajorModel::all();

        $data['location_project_list']      = ProductModel::where('pro_type', 'project')->orderBy('pro_location_id')->get();
        $data['location_list']              = ProductLocationModel::all();

        $data['year_filter_list']           = ProductModel::where('pro_type', 'project')->orderBy('pro_time_work')->get();

        $data['search_result']  = ProductModel::where('pro_ten_en', 'like', '%'.$query.'%')
                                                ->orWhere('pro_ten_vi', 'like', '%'.$query.'%')
                                                ->orWhere('pro_ten_zh', 'like', '%'.$query.'%')
                                                ->orWhere('pro_ten_ja', 'like', '%'.$query.'%')
                                                ->where('pro_type', 'project')->get();
        $data['search_count']   = ProductModel::where('pro_ten_en', 'like', '%'.$query.'%')
                                                ->orWhere('pro_ten_vi', 'like', '%'.$query.'%')
                                                ->orWhere('pro_ten_zh', 'like', '%'.$query.'%')
                                                ->orWhere('pro_ten_ja', 'like', '%'.$query.'%')
                                                ->where('pro_type', 'project')->count();

        $data['keyword']        = $result;
        
        return view('frontend.search', $data);
    }
}
