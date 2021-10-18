<?php

namespace App\Http\Controllers\admin;

use DB;
use Carbon\Carbon;
use File;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\ProductCategoryModel;
use App\Http\Requests\AddProductCatRequest;
use App\Http\Requests\EditProductCatRequest;
use App\Http\Requests\ProductCatChildRequest;

use App\model\ProductLocationModel;
use App\model\ProductCategoryChildModel;
use App\model\CustomerModel;
use App\model\MajorModel;

class ProductCategoryController extends Controller
{

    // ----------------------Project location-----------------------
    public function getProjectLocation(){
        $data['location_list'] = ProductLocationModel::all();

        return view('admin/display/location', $data);
    }

    public function addProjectLocation(){
        
        return view('admin/add/addLocation');
    }

    public function postaddProjectLocation(Request $request){
        $location                   = new ProductLocationModel;
        
		$location->locate_name_vi   = $request->locate_name_vi;
        $location->locate_name_en   = $request->locate_name_en;
        $location->locate_name_zh   = $request->locate_name_zh;
        $location->locate_name_ja   = $request->locate_name_ja;
        $location->locate_name_kr   = $request->locate_name_kr;
      
        $location->created_at       = Carbon::now();
        $location->updated_at       = Carbon::now();
        $location->save();

        return redirect()->intended('admin/project/location');
    }


    public function editProjectLocation($id){
        $data['edit_location']    = ProductLocationModel::find($id);

        return view('admin/edit/editLocation', $data);
    }


    public function posteditProjectLocation(Request $request, $id){
        $location                   = ProductLocationModel::find($id);
        
        $location->locate_name_vi   = $request->locate_name_vi;
        $location->locate_name_en   = $request->locate_name_en;
        $location->locate_name_zh   = $request->locate_name_zh;
        $location->locate_name_ja   = $request->locate_name_ja;
        $location->locate_name_kr   = $request->locate_name_kr;
      
        $location->updated_at       = Carbon::now();
        $location->save();
        return redirect()->intended('admin/project/location');
    }

    public function deleteLocation($id){
        ProductLocationModel::destroy($id);
        return back();
    }


    // ----------------------End Project location--------------------



    // ----------------------Project Major-----------------------
    public function getProjectMajor(){
        $data['major_list']     = MajorModel::all();

        return view('admin/display/major', $data);
    }

    public function addProjectMajor(){
        
        return view('admin/add/addMajor');
    }

    public function postaddProjectMajor(Request $request){
        $major                      = new MajorModel;
        
		$major->major_name_vi       = $request->major_name_vi;
        $major->major_name_en       = $request->major_name_en;
        $major->major_name_zh       = $request->major_name_zh;
        $major->major_name_ja       = $request->major_name_ja;
        $major->major_name_kr       = $request->major_name_kr;
      
        $major->created_at          = Carbon::now();
        $major->updated_at          = Carbon::now();
        $major->save();

        return redirect()->intended('admin/project/major');
    }


    public function editProjectMajor($id){
        $data['edit_major']         = MajorModel::find($id);

        return view('admin/edit/editMajor', $data);
    }

    public function posteditProjectMajor(Request $request, $id){
        $major                      = MajorModel::find($id);
        
        $major->major_name_vi       = $request->major_name_vi;
        $major->major_name_en       = $request->major_name_en;
        $major->major_name_zh       = $request->major_name_zh;
        $major->major_name_ja       = $request->major_name_ja;
        $major->major_name_kr       = $request->major_name_kr;
      
        $major->updated_at          = Carbon::now();
        $major->save();
        return redirect()->intended('admin/project/major');
    }

    public function deleteMajor($id){
        MajorModel::destroy($id);
        return back();
    }


    // ----------------------End Project Major--------------------






    //Product category
    public function getProductCat(){
        $data['procat_list'] = ProductCategoryModel::paginate(20);
        return view('admin/productcat', $data);
    }

    public function addProductCat(){
        $data['staff_list']     = CustomerModel::where('cust_type', 'team')->get();
        
        return view('admin/addproductcat', $data);
    }

    public function postaddProductCat(AddProductCatRequest $request){
        $procat                 = new ProductCategoryModel;

        if ($request->hasFile('procat_icon')) {
            $file_procat_icon       = $request->file('procat_icon');
            $procat_icon            = $file_procat_icon->getClientOriginalName();
            $procat_icon_save_name  = time().$procat_icon;
            $procat->procat_icon    = $procat_icon_save_name;
            $file_procat_icon->move('public/upload/product/', $procat_icon_save_name);
        }
        
        if ($request->hasFile('procat_thumb')) {
            $file_procat_thumb      = $request->file('procat_thumb');
            $procat_thumb           = $file_procat_thumb->getClientOriginalName();
            $procat_thumb_save_name = time().$procat_thumb;
            $procat->procat_thumb   = $procat_thumb_save_name;
            $file_procat_thumb->move('public/upload/product/', $procat_thumb_save_name);
        }


        $procat->procat_ten         = $request->procat_ten;
        $procat->procat_ten_en      = $request->procat_ten_en;
        $procat->procat_slug        = str_slug($request->procat_ten);
		$procat->procat_prio        = isset($request->procat_prio) ? $request->procat_prio : 1;
        $procat->procat_title       = isset($request->procat_title) ? $request->procat_title : $request->procat_ten;
        
        $procat->pro_thongtin       = $request->pro_thongtin;
        $procat->pro_thongtin_en    = $request->pro_thongtin_en;

        // $procat->procat_staff_id    = $request->procat_staff_id;

        $procat->procat_mota        = $request->procat_mota;
        $procat->procat_keyword     = $request->procat_keyword;

        $procat->procat_author      = $request->procat_author;
        $procat->procat_editor      = $request->procat_author;

		$procat->procat_piority     = 9;
        $procat->created_at         = Carbon::now();
        $procat->updated_at         = Carbon::now();
        $procat->save();
        return redirect()->intended('admin/nation');
    }

    public function editProductCat($id){
        $data['edit_procat']    = ProductCategoryModel::find($id);
        $data['staff_list']     = CustomerModel::where('cust_type', 'team')->get();

        return view('admin/editproductcat', $data);
    }

    public function posteditProductCat(EditProductCatRequest $request, $id){
        $procat                 = ProductCategoryModel::find($id);
		
		if ($request->hasFile('procat_icon')) {
            File::delete('public/upload/product/'.$request->procat_icon);

            $file_procat_icon       = $request->file('procat_icon');
            $procat_icon            = $file_procat_icon->getClientOriginalName();
            $procat_icon_save_name  = time().$procat_icon;
            $procat->procat_icon    = $procat_icon_save_name;
            $file_procat_icon->move('public/upload/product/', $procat_icon_save_name);
        }
        

        if ($request->hasFile('procat_thumb')) {
            File::delete('public/upload/product/'.$request->procat_thumb);

            $file_procat_thumb      = $request->file('procat_thumb');
            $procat_thumb           = $file_procat_thumb->getClientOriginalName();
            $procat_thumb_save_name = time().$procat_thumb;
            $procat->procat_thumb   = $procat_thumb_save_name;
            $file_procat_thumb->move('public/upload/product/', $procat_thumb_save_name);
        }
		
        $procat->procat_ten         = $request->procat_ten;
        $procat->procat_ten_en      = $request->procat_ten_en;
		$procat->procat_prio        = isset($request->procat_prio) ? $request->procat_prio : 1;
        $procat->procat_title       = isset($request->procat_title) ? $request->procat_title : $request->procat_ten;

        $procat->pro_thongtin       = $request->pro_thongtin;
        $procat->pro_thongtin_en    = $request->pro_thongtin_en;
        
        // $procat->procat_staff_id    = $request->procat_staff_id;

        $procat->procat_mota        = $request->procat_mota;
        $procat->procat_keyword     = $request->procat_keyword;

        $procat->procat_editor      = $request->procat_editor;

		$procat->procat_piority     = 9;
        $procat->updated_at         = Carbon::now();
        $procat->save();
        return redirect()->intended('admin/nation');
    }

    public function deleteProductCat($id){
        ProductCategoryModel::destroy($id);
        return back();
    }

    public function checkScrollProductCat($id){
        $procat = ProductCategoryModel::find($id);
        $procat->procat_noibat = $procat->procat_noibat ? 0 : 1;
        $procat->save();
        return back();
    }
    
    //Child product category
    public function getProductCatChild(ProductCatChildRequest $request){
        $data['procat_list']    = ProductCategoryModel::all();

        if(isset($request->search_category) && ($request->search_category)!="none") {

            $data['procat_child']   = DB::table('tb_productcat_lv2')
                                        ->join('tb_productcat', 'tb_productcat_lv2.procat2_procat_id', '=', 'tb_productcat.procat_id')
                                        ->where('procat2_procat_id', '=', $request->search_category)
                                        ->orderBy('procat2_procat_id', 'desc')
                                        ->paginate(20);
        } elseif(($request->search_category)=="none" || !isset($request->search_category)){
            $data['procat_child']   = DB::table('tb_productcat_lv2')
                                        ->join('tb_productcat', 'tb_productcat_lv2.procat2_procat_id', '=', 'tb_productcat.procat_id')
                                        ->paginate(20);
        } 


        return view('admin/procat_child', $data);
    }

    public function getAddProductCatChild(){
        $data['procat_list']    = ProductCategoryModel::all();
        return view('admin/add_productcatchild', $data);
    }

    public function postAddProductCatChild(ProductCatChildRequest $request){
        $procat_child                       = new ProductCategoryChildModel;

        $procat_child->procat2_ten          = $request->procat2_ten;
        $procat_child->procat2_ten_en       = $request->procat2_ten_en;
        $procat_child->procat2_slug         = str_slug($request->procat2_ten);
        $procat_child->procat2_title        = isset($request->procat2_title) ? $request->procat2_title : $request->procat2_ten;
        $procat_child->procat2_description  = $request->procat2_description;
        $procat_child->procat2_keyword      = $request->procat2_keyword;
        $procat_child->procat2_procat_id    = $request->procat2_procat_id;
        $procat_child->created_at           = Carbon::now();
        $procat_child->updated_at           = Carbon::now();
        $procat_child->save();
        return redirect()->intended('admin/productcat/child');
    }

    public function getEditProductCatChild($id){
        $data['procat_list']        = ProductCategoryModel::all();
        $data['procatchild_item']   = ProductCategoryChildModel::find($id);
        return view('admin/edit_productcatchild', $data);
    }

    public function postEditProductCatChild(ProductCatChildRequest $request, $id){
        $procat_child                       = ProductCategoryChildModel::find($id);

        $procat_child->procat2_ten          = $request->procat2_ten;
        $procat_child->procat2_ten_en       = $request->procat2_ten_en;
        $procat_child->procat2_slug         = str_slug($request->procat2_ten);
        $procat_child->procat2_title        = isset($request->procat2_title) ? $request->procat2_title : $request->procat2_ten;
        $procat_child->procat2_description  = $request->procat2_description;
        $procat_child->procat2_keyword      = $request->procat2_keyword;
        $procat_child->procat2_procat_id    = $request->procat2_procat_id;
        $procat_child->updated_at           = Carbon::now();
        $procat_child->save();
        return redirect()->intended('admin/productcat/child');
    }

    public function deleteProductCatChild($id){
        ProductCategoryChildModel::destroy($id);
        return back();
    }

   
}
