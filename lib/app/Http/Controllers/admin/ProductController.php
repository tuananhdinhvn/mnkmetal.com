<?php
namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Storage;

use DB;
use File;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\ProductCategoryModel;
use App\model\ProductModel;
use App\model\ProdutPhotoModel;
use App\model\ProductCategoryChildModel;
use App\model\CustomerModel;
use App\model\NationModel;
use App\model\MajorModel;
use App\model\ProductLocationModel;

use App\Http\Requests\AddProductRequest;
use App\Http\Requests\EditProductRequest;

class ProductController extends Controller
{
    
    public function getProduct(Request $request){
        $data['procat_list']        = ProductCategoryModel::all();
        $data['procatchild_list']   = ProductCategoryChildModel::all();
        $data['product_photo']      = ProdutPhotoModel::all();

        if(isset($request->filter_procat) && isset($request->filter_procat_child)) {

            //Filter product
            if($request->filter_procat_child == 'none'){
                $data['product_list']   = DB::table('tb_product')
                                                ->join('tb_productcat', 'tb_product.pro_procatid', '=', 'tb_productcat.procat_id')
                                                ->where('pro_procatid', '=', $request->filter_procat)
                                                ->orderBy('pro_id', 'desc')
                                                ->paginate(10);
            } elseif($request->filter_procat_child != 'none'){
                $data['product_list']   = DB::table('tb_product')
                                                ->join('tb_productcat', 'tb_product.pro_procatid', '=', 'tb_productcat.procat_id')
                                                ->where('pro_procat_child', '=', $request->filter_procat_child)
                                                ->orderBy('pro_id', 'desc')
                                                ->paginate(10);
            }
            
        } else {
            //Normal show
            $data['product_list']   = DB::table('tb_product')
                                        ->join('tb_productcat', 'tb_product.pro_procatid', '=', 'tb_productcat.procat_id')
                                        ->orderBy('pro_id', 'desc')
                                        ->paginate(10);
        }

        return view('admin/product', $data);
    }

    // Export product file
    public function exportProduct(){
        $product = ProductModel::all();

        $product_data = "";

        if(count($product) > 0){
            $product_data .= '<table>';
            $product_data .= '<tr><th style="color:white; background:black">Product name</th>';
            $product_data .= '<th style="color:white; background:black; width:150px">Product price</th>';
            $product_data .= '<th style="color:white; background:black; width:150px">Product discount</th>';
            $product_data .= '</tr>';
        }

        foreach($product as $item){
            $product_data .= '<tr><td style="border: 1px solid #ddd;">'.$item->pro_ten.'</td>';
            $product_data .= '<td style="border: 1px solid #ddd; padding-right:10px;">'.number_format($item->pro_giaban, 0, ',', '.').'</td>';
            $product_data .= '<td style="border: 1px solid #ddd; padding-right:10px;">'.number_format($item->pro_giakhuyenmai, 0, ',', '.').'</td></tr>';
        }

        $product_data .= '</table>';

        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=product.xls');
        echo $product_data;
    }

    //Filter product
    public function getFilterProcatChild($idprocat){
        $procat_child       = ProductCategoryChildModel::where('procat2_procat_id', $idprocat)->get();
        $count_procat_child = ProductCategoryChildModel::where('procat2_procat_id', $idprocat)->count();

        if($count_procat_child != 0){
            foreach($procat_child as $key => $item){
                if($key==0){
                    echo "<option value='none'>Chọn danh mục con</option>";
                }
                echo "<option value='".$item->procat2_id."'>".$item->procat2_ten."</option>";
            }
        } else {
            echo "<option value='none'>Không có danh mục con</option>";
        }
    }

    //Upload extra product photo
    public function postsubmit(Request $request){
        $productID              = $request->productID;
        $file                   = $request->file('file');
        $image_name             = $file->getClientOriginalName();
        $image_name             = time().$image_name;
        $file->move('public/upload/productphoto', $image_name);

        $photo                  = new ProdutPhotoModel;
        $photo->photo_url       = $image_name;
        $photo->product_id      = $productID;
        $photo->save();

        return response()->json(['uploaded'=>'upload/productphoto'.$image_name]);

    }





    // -------------------Start Project Minh Global------------------

    //Get project list
    public function getProject(Request $request){
        $pro_type                   = $request->type;

        $data['project_list']       = ProductModel::where('pro_type', 'project')->orderBy('pro_time_work', 'desc')->get();
        $data['project_photo']      = ProdutPhotoModel::all();

        return view('admin/display/project', $data);
    }

    //Get view Add project
    public function addProject(Request $request){
        $data['pro_type']           = $request->type;
        $data['nation_list']        = NationModel::orderBy('nation_name_en', 'asc')->get();
        $data['major_list']         = MajorModel::all();
        $data['location_list']      = ProductLocationModel::orderBy('locate_name_vi', 'asc')->get();
        
        return view('admin/add/addproject', $data);
    }

    //Post Upload new project
    public function postaddProject(Request $request){
        $first_location     = ProductLocationModel::first();
        $first_nation       = NationModel::first();
        $first_major        = MajorModel::first();

        $project_item       = new ProductModel;

        $product_type       = $request->type;

        $project_item->pro_mgd_team     = isset($request->pro_mgd_team) ? true : false;

        if ($request->hasFile('pro_thumb')) {
            $file_pro_thumb             = $request->file('pro_thumb');
            $pro_thumb_image_name       = $file_pro_thumb->getClientOriginalName();
            $pro_thumb_image_save_name  = time().$pro_thumb_image_name;
            $project_item->pro_thumb    = $pro_thumb_image_save_name;
            $file_pro_thumb->move('public/upload/product/', $pro_thumb_image_save_name);
        }

        if ($request->hasFile('pro_thumb_hover')) {
            $file_pro_thumb_hover               = $request->file('pro_thumb_hover');
            $pro_thumb_hover_image_name         = $file_pro_thumb_hover->getClientOriginalName();
            $pro_thumb_hover_image_save_name    = time().$pro_thumb_hover_image_name;
            $project_item->pro_thumb_hover      = $pro_thumb_hover_image_save_name;
            $file_pro_thumb_hover->move('public/upload/product/', $pro_thumb_hover_image_save_name);
        }  
        
        if ($request->hasFile('pro_background')) {
            $file_pro_background            = $request->file('pro_background');
            $pro_background_image_name      = $file_pro_background->getClientOriginalName();
            $pro_background_image_save_name = time().$pro_background_image_name;
            $project_item->pro_background   = $pro_background_image_save_name;
            $file_pro_background->move('public/upload/product/', $pro_background_image_save_name);
        }   

        if ($request->hasFile('pro_background_cover')) {
            $file_pro_background_cover              = $request->file('pro_background_cover');
            $pro_background_cover_image_name        = $file_pro_background_cover->getClientOriginalName();
            $pro_background_cover_image_save_name   = time().$pro_background_cover_image_name;
            $project_item->pro_background_cover     = $pro_background_cover_image_save_name;
            $file_pro_background_cover->move('public/upload/product/', $pro_background_cover_image_save_name);
        }   


        // Catalouge img
        if ($request->hasFile('pro_catalouge_1')) {
            $file_pro_catalouge_1       = $request->file('pro_catalouge_1');
            $pro_catalouge_1_name       = $file_pro_catalouge_1->getClientOriginalName();
            $pro_catalouge_1_save_name  = time().$pro_catalouge_1_name;
            $project_item->pro_catalouge_1  = $pro_catalouge_1_save_name;
            $file_pro_catalouge_1->move('public/upload/product/', $pro_catalouge_1_save_name);
        }   

        if ($request->hasFile('pro_catalouge_2')) {
            $file_pro_catalouge_2       = $request->file('pro_catalouge_2');
            $pro_catalouge_2_name       = $file_pro_catalouge_2->getClientOriginalName();
            $pro_catalouge_2_save_name  = time().$pro_catalouge_2_name;
            $project_item->pro_catalouge_2  = $pro_catalouge_2_save_name;
            $file_pro_catalouge_2->move('public/upload/product/', $pro_catalouge_2_save_name);
        }   

        if ($request->hasFile('pro_catalouge_3')) {
            $file_pro_catalouge_3       = $request->file('pro_catalouge_3');
            $pro_catalouge_3_name       = $file_pro_catalouge_3->getClientOriginalName();
            $pro_catalouge_3_save_name  = time().$pro_catalouge_3_name;
            $project_item->pro_catalouge_3  = $pro_catalouge_3_save_name;
            $file_pro_catalouge_3->move('public/upload/product/', $pro_catalouge_3_save_name);
        }   

        if ($request->hasFile('pro_catalouge_4')) {
            $file_pro_catalouge_4       = $request->file('pro_catalouge_4');
            $pro_catalouge_4_name       = $file_pro_catalouge_4->getClientOriginalName();
            $pro_catalouge_4_save_name  = time().$pro_catalouge_4_name;
            $project_item->pro_catalouge_4  = $pro_catalouge_4_save_name;
            $file_pro_catalouge_4->move('public/upload/product/', $pro_catalouge_4_save_name);
        }   

        if ($request->hasFile('pro_catalouge_5')) {
            $file_pro_catalouge_5       = $request->file('pro_catalouge_5');
            $pro_catalouge_5_name       = $file_pro_catalouge_5->getClientOriginalName();
            $pro_catalouge_5_save_name  = time().$pro_catalouge_5_name;
            $project_item->pro_catalouge_5  = $pro_catalouge_5_save_name;
            $file_pro_catalouge_5->move('public/upload/product/', $pro_catalouge_5_save_name);
        }   

        if ($request->hasFile('pro_catalouge_6')) {
            $file_pro_catalouge_6       = $request->file('pro_catalouge_6');
            $pro_catalouge_6_name       = $file_pro_catalouge_6->getClientOriginalName();
            $pro_catalouge_6_save_name  = time().$pro_catalouge_6_name;
            $project_item->pro_catalouge_6  = $pro_catalouge_6_save_name;
            $file_pro_catalouge_6->move('public/upload/product/', $pro_catalouge_6_save_name);
        }   

        if ($request->hasFile('pro_catalouge_7')) {
            $file_pro_catalouge_7       = $request->file('pro_catalouge_7');
            $pro_catalouge_7_name       = $file_pro_catalouge_7->getClientOriginalName();
            $pro_catalouge_7_save_name  = time().$pro_catalouge_7_name;
            $project_item->pro_catalouge_7  = $pro_catalouge_7_save_name;
            $file_pro_catalouge_7->move('public/upload/product/', $pro_catalouge_7_save_name);
        }   

        if ($request->hasFile('pro_catalouge_8')) {
            $file_pro_catalouge_8       = $request->file('pro_catalouge_8');
            $pro_catalouge_8_name       = $file_pro_catalouge_8->getClientOriginalName();
            $pro_catalouge_8_save_name  = time().$pro_catalouge_8_name;
            $project_item->pro_catalouge_8  = $pro_catalouge_8_save_name;
            $file_pro_catalouge_8->move('public/upload/product/', $pro_catalouge_8_save_name);
        }
        

        $project_item->pro_ten_vi           = $request->pro_ten_vi;
        $project_item->pro_ten_en           = $request->pro_ten_en;
        $project_item->pro_ten_zh           = $request->pro_ten_zh;
        $project_item->pro_ten_ja           = $request->pro_ten_ja;
        $project_item->pro_ten_kr           = $request->pro_ten_kr;

        $project_item->pro_owner_en         = $request->pro_owner_en;

        $project_item->pro_nation           = ($request->pro_nation != 'null') ? $request->pro_nation : $first_nation->nation_id;
        
        $project_item->pro_slug             = str_slug($request->pro_ten_en);

        $project_item->pro_status           = isset($request->pro_status) ? $request->pro_status : 'ongoing';
        $project_item->pro_area             = $request->pro_area;
		$project_item->pro_land_area        = $request->pro_land_area;
        $project_item->pro_time_work        = $request->pro_time_work;
        $project_item->pro_induspark        = $request->pro_induspark;
        $project_item->pro_location_id      = ($request->pro_location_id != 'null') ? $request->pro_location_id : $first_location->locate_id;
        $project_item->pro_contractor       = $request->pro_contractor;
        $project_item->pro_scope_work       = $request->pro_scope_work;
        $project_item->pro_building_grade   = ($request->pro_building_grade != 'null') ? $request->pro_building_grade : 'grade-1';
        $project_item->pro_3d_video         = $request->pro_3d_video;
        $project_item->pro_4d_video         = $request->pro_4d_video;
        $project_item->pro_progress_video   = $request->pro_progress_video;
        $project_item->pro_iframe_youtube   = $request->pro_iframe_youtube;

        $project_item->pro_major_id             = ($request->pro_major_id != 'null') ? $request->pro_major_id : $first_major->major_id;

        $project_item->pro_youtube_public_1     = isset($request->pro_youtube_public_1) ? substr($request->pro_youtube_public_1 ,32) : '';
        $project_item->pro_youtube_public_5     = isset($request->pro_youtube_public_5) ? substr($request->pro_youtube_public_5 ,32) : '';

        $project_item->pro_youtube_private_1    = isset($request->pro_youtube_private_1) ? substr($request->pro_youtube_private_1 ,32) : '';
        $project_item->pro_youtube_private_5    = isset($request->pro_youtube_private_5) ? substr($request->pro_youtube_private_5 ,32) : '';
       

        $project_item->pro_thongtin_vi          = $request->pro_thongtin_vi;
        $project_item->pro_thongtin_en          = $request->pro_thongtin_en;
        $project_item->pro_thongtin_zh          = $request->pro_thongtin_zh;
        $project_item->pro_thongtin_ja          = $request->pro_thongtin_ja;
        $project_item->pro_thongtin_kr          = $request->pro_thongtin_kr;

        $project_item->pro_title                = isset($request->pro_title) ? $request->pro_title : $request->pro_ten_en;
        $project_item->pro_mota                 = $request->pro_mota;
        $project_item->pro_keyword              = $request->pro_keyword;
        $project_item->pro_author               = $request->pro_author;
        $project_item->pro_editor               = $request->pro_author;

        $project_item->pro_hienthi              = 1;
        $project_item->pro_type                 = $product_type;

        $project_item->created_at                 = Carbon::now();
        $project_item->updated_at                 = Carbon::now();

        $project_item->save();





        // $productId = ProductModel::insertGetId([
            // 'pro_ten_vi'        => $request->pro_ten_vi,
            // 'pro_ten_en'        => $request->pro_ten_en,
            // 'pro_ten_zh'        => $request->pro_ten_zh,
            // 'pro_ten_ja'        => $request->pro_ten_ja,

            // 'pro_owner_en'      => $request->pro_owner_en,
            // 'pro_owner_zh'      => $request->pro_owner_zh,
            // 'pro_owner_ja'      => $request->pro_owner_ja,

            // 'pro_nation'        => ($request->pro_nation != 'null') ? $request->pro_nation : $first_nation->nation_id,

            // 'pro_thumb'         => $pro_thumb_image_save_name,
            // 'pro_thumb_hover'       => $pro_thumb_hover_image_save_name,
            // 'pro_background'        => $pro_background_image_save_name,


            // 'pro_catalouge_1'        => ($request->pro_catalouge_1 != '') ? $pro_catalouge_1_save_name : '',
            // 'pro_catalouge_2'        => ($request->pro_catalouge_2 != '') ? $pro_catalouge_2_save_name : '',
            // 'pro_catalouge_3'        => ($request->pro_catalouge_3 != '') ? $pro_catalouge_3_save_name : '',
            // 'pro_catalouge_4'        => ($request->pro_catalouge_4 != '') ? $pro_catalouge_4_save_name : '',
            // 'pro_catalouge_5'        => ($request->pro_catalouge_5 != '') ? $pro_catalouge_5_save_name : '',
            // 'pro_catalouge_6'        => ($request->pro_catalouge_6 != '') ? $pro_catalouge_6_save_name : '',
            // 'pro_catalouge_7'        => ($request->pro_catalouge_7 != '') ? $pro_catalouge_7_save_name : '',
            // 'pro_catalouge_8'        => ($request->pro_catalouge_8 != '') ? $pro_catalouge_8_save_name : '',

            // 'pro_background_cover'  => $pro_background_cover_image_save_name,

            // 'pro_slug'              => str_slug($request->pro_ten_en),

            // 'pro_status'            => isset($request->pro_status) ? $request->pro_status : 'ongoing' ,
            // 'pro_area'              => $request->pro_area,
            // 'pro_time_work'         => $request->pro_time_work,
            // 'pro_induspark'         => $request->pro_induspark,
            // 'pro_location_id'       => ($request->pro_location_id != 'null') ? $request->pro_location_id : $first_location->locate_id,
            
            // 'pro_contractor'        => $request->pro_contractor,
            // 'pro_scope_work'        => $request->pro_scope_work,
            // 'pro_building_grade'    => ($request->pro_building_grade != 'null') ? $request->pro_building_grade : 'grade-1' ,

            // 'pro_3d_video'                  => $request->pro_3d_video,
            // 'pro_3d_video_private'          => isset($request->pro_3d_video_private) ? true : false,
            // 'pro_4d_video'                  => $request->pro_4d_video,
            // 'pro_4d_video_private'          => isset($request->pro_4d_video_private) ? true : false,
            // 'pro_progress_video'            => $request->pro_progress_video,
            // 'pro_progress_video_private'    => isset($request->pro_progress_video_private) ? true : false,

            // 'pro_iframe_youtube'    => $request->pro_iframe_youtube,
            
            // 'pro_major_id'          => ($request->pro_major_id != 'null') ? $request->pro_major_id : $first_major->major_id,

            // 'pro_major_vi'          => $request->pro_major_vi,
            // 'pro_major_en'          => $request->pro_major_en,
            // 'pro_major_zh'          => $request->pro_major_zh,
            // 'pro_major_ja'          => $request->pro_major_ja,

            // 'pro_youtube_public_1'  => isset($request->pro_youtube_public_1) ? substr($request->pro_youtube_public_1 ,32) : '',
            // 'pro_youtube_public_2'  => isset($request->pro_youtube_public_2) ? substr($request->pro_youtube_public_2 ,32) : '',
            // 'pro_youtube_public_3'  => isset($request->pro_youtube_public_3) ? substr($request->pro_youtube_public_3 ,32) : '',
            // 'pro_youtube_public_4'  => isset($request->pro_youtube_public_4) ? substr($request->pro_youtube_public_4 ,32) : '',
            // 'pro_youtube_public_5'  => isset($request->pro_youtube_public_5) ? substr($request->pro_youtube_public_5 ,32) : '',

            // 'pro_youtube_private_1' => isset($request->pro_youtube_private_1) ? substr($request->pro_youtube_private_1 ,32) : '',
            // 'pro_youtube_private_2' => isset($request->pro_youtube_private_2) ? substr($request->pro_youtube_private_2 ,32) : '',
            // 'pro_youtube_private_3' => isset($request->pro_youtube_private_3) ? substr($request->pro_youtube_private_3 ,32) : '',
            // 'pro_youtube_private_4' => isset($request->pro_youtube_private_4) ? substr($request->pro_youtube_private_4 ,32) : '',
            // 'pro_youtube_private_5' => isset($request->pro_youtube_private_5) ? substr($request->pro_youtube_private_5 ,32) : '',

        //     'pro_thongtin_vi'   => $request->pro_thongtin_vi,
        //     'pro_thongtin_en'   => $request->pro_thongtin_en,
        //     'pro_thongtin_zh'   => $request->pro_thongtin_zh,
        //     'pro_thongtin_ja'   => $request->pro_thongtin_ja,

        //     'pro_thongtin_private_vi'   => $request->pro_thongtin_private_vi,
        //     'pro_thongtin_private_en'   => $request->pro_thongtin_private_en,
        //     'pro_thongtin_private_zh'   => $request->pro_thongtin_private_zh,
        //     'pro_thongtin_private_ja'   => $request->pro_thongtin_private_ja,

        //     'pro_title'         => isset($request->pro_title) ? $request->pro_title : $request->pro_ten_en,
        //     'pro_mota'          => $request->pro_mota,
        //     'pro_keyword'       => $request->pro_keyword,
            
        //     'pro_author'        => $request->pro_author,
        //     'pro_editor'        => $request->pro_author,

        //     'pro_hienthi'       => 1,
        //     'pro_type'          => $product_type,

        //     'created_at'        => Carbon::now(),
        //     'updated_at'        => Carbon::now(),
        // ]);
    

        // old version
        // if($request->hasFile('file')){
        //     foreach($request->file as $file){
        //         $alt_name       = $file->getClientOriginalName();
        //         $alt_save_name  = time().$alt_name;
        //         $file->move('public/upload/productphoto/', $alt_save_name);

        //         $alt_item               = new ProdutPhotoModel;
        //         $alt_item->photo_url    = $alt_save_name;
        //         $alt_item->product_id   = $productId;
        //         $alt_item->created_at   = Carbon::now();
        //         $alt_item->updated_at   = Carbon::now();
        //         $alt_item->save();
        //     }
        // }

        // if($request->hasFile('file_private')){
        //     foreach($request->file_private as $file){
        //         $alt_name       = $file->getClientOriginalName();
        //         $alt_save_name  = time().$alt_name;
        //         $file->move('public/upload/productphoto/', $alt_save_name);

        //         $alt_item               = new ProdutPhotoModel;
        //         $alt_item->photo_url    = $alt_save_name;
        //         $alt_item->photo_type   = "private";
        //         $alt_item->product_id   = $productId;
        //         $alt_item->created_at   = Carbon::now();
        //         $alt_item->updated_at   = Carbon::now();
        //         $alt_item->save();
        //     }
        // }

        return redirect()->intended('admin/project');

    }

    //Get view edit project
    public function getProjectDetail($id){
        $data['project_detail']     = ProductModel::find($id);
        $data['nation_list']        = NationModel::orderBy('nation_name_en', 'asc')->get();
        $data['alt_photos']         = ProdutPhotoModel::where('product_id', $id)->where('photo_type', null)->get();
        $data['alt_photos_private'] = ProdutPhotoModel::where('product_id', $id)->where('photo_type', 'private')->get();
        $data['major_list']         = MajorModel::all();
        $data['location_list']      = ProductLocationModel::orderBy('locate_name_vi', 'asc')->get();

        return view('admin/edit/editproject', $data);
    }

    //Post Edit project
    public function postProjectDetail(Request $request, $id){
        $first_location = ProductLocationModel::first();
        $first_nation   = NationModel::first();
        $first_major    = MajorModel::first();

        if( isset($request->pro_nation) ){
            $pro_nation_old         = ProductModel::find($id)->pro_nation;
            $nation_uncheck_item    = NationModel::find($pro_nation_old);
            $nation_uncheck_item->nation_check = null;
            $nation_uncheck_item->save();

            $nation_item = NationModel::find($request->pro_nation);
            $nation_item->nation_check = 'checked';
            $nation_item->save();
        }

        $product                    = ProductModel::find($id);

        $product->pro_mgd_team       = isset($request->pro_mgd_team) ? true : false;
       
        $product->pro_ten_vi        = $request->pro_ten_vi;
        $product->pro_ten_en        = $request->pro_ten_en;
        $product->pro_ten_zh        = $request->pro_ten_zh;
        $product->pro_ten_ja        = $request->pro_ten_ja;
        $product->pro_ten_kr        = $request->pro_ten_kr;

        $product->pro_owner_en      = $request->pro_owner_en;
        $product->pro_owner_zh      = $request->pro_owner_zh;
        $product->pro_owner_ja      = $request->pro_owner_ja;
        $product->pro_owner_kr      = $request->pro_owner_kr;

        $product->pro_nation        = ($request->pro_nation != 'null') ? $request->pro_nation : $first_nation->nation_id;

        if ($request->hasFile('pro_thumb')) {
            File::delete('public/upload/product/'.$product->pro_thumb);

            $file                   = $request->file('pro_thumb');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $product->pro_thumb     = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_thumb_hover')) {
            File::delete('public/upload/product/'.$product->pro_thumb_hover);

            $file                   = $request->file('pro_thumb_hover');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $product->pro_thumb_hover     = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_background')) {
            File::delete('public/upload/product/'.$product->pro_background);

            $file                   = $request->file('pro_background');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $product->pro_background     = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_background_cover')) {
            File::delete('public/upload/product/'.$product->pro_background);

            $file                   = $request->file('pro_background_cover');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $product->pro_background_cover     = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }


        // Catalouge img
        if ($request->hasFile('pro_catalouge_1')) {
            File::delete('public/upload/product/'.$product->pro_catalouge_1);

            $file                       = $request->file('pro_catalouge_1');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_1   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_2')) {
            File::delete('public/upload/product/'.$product->pro_catalouge_2);

            $file                       = $request->file('pro_catalouge_2');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_2   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_3')) {
            File::delete('public/upload/product/'.$product->pro_catalouge_3);

            $file                       = $request->file('pro_catalouge_3');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_3   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_4')) {
            File::delete('public/upload/product/'.$product->pro_catalouge_4);

            $file                       = $request->file('pro_catalouge_4');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_4   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_5')) {
            File::delete('public/upload/product/'.$product->pro_catalouge_5);

            $file                       = $request->file('pro_catalouge_5');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_5   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_6')) {
            File::delete('public/upload/product/'.$product->pro_catalouge_6);

            $file                       = $request->file('pro_catalouge_6');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_6   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_7')) {
            File::delete('public/upload/product/'.$product->pro_catalouge_7);

            $file                       = $request->file('pro_catalouge_7');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_7   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        if ($request->hasFile('pro_catalouge_8')) {
            File::delete('public/upload/product/'.$product->pro_catalouge_8);

            $file                       = $request->file('pro_catalouge_8');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $product->pro_catalouge_8   = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }

        $product->pro_status            = isset($request->pro_status) ? $request->pro_status : 'ongoing' ;
        $product->pro_area              = $request->pro_area;
        $product->pro_land_area         = $request->pro_land_area;
        $product->pro_time_work         = $request->pro_time_work;
        $product->pro_induspark         = $request->pro_induspark;
        $product->pro_location_id       = ($request->pro_location_id != 'null') ? $request->pro_location_id : $first_location->locate_id;


        $product->pro_contractor        = $request->pro_contractor;
        $product->pro_scope_work        = $request->pro_scope_work;
        $product->pro_building_grade    = ($request->pro_building_grade != 'null') ? $request->pro_building_grade : 'grade-1';

        $product->pro_3d_video                  = $request->pro_3d_video;
        $product->pro_3d_video_private          = isset($request->pro_3d_video_private) ? true : false;
        $product->pro_4d_video                  = $request->pro_4d_video;
        $product->pro_4d_video_private          = isset($request->pro_4d_video_private) ? true : false;
        $product->pro_progress_video            = $request->pro_progress_video;
        $product->pro_progress_video_private    = isset($request->pro_progress_video_private) ? true : false;


        $product->pro_iframe_youtube    = $request->pro_iframe_youtube;

        $product->pro_major_id          = ($request->pro_major_id != 'null') ? $request->pro_major_id : $first_major->major_id;

        $product->pro_major_vi          = $request->pro_major_vi;
        $product->pro_major_en          = $request->pro_major_en;
        $product->pro_major_zh          = $request->pro_major_zh;
        $product->pro_major_ja          = $request->pro_major_ja;
        $product->pro_major_kr          = $request->pro_major_kr;

        $product->pro_youtube_public_1  = isset($request->pro_youtube_public_1) ? substr($request->pro_youtube_public_1 ,32) : '';
        $product->pro_youtube_public_2  = isset($request->pro_youtube_public_2) ? substr($request->pro_youtube_public_2 ,32) : '';
        $product->pro_youtube_public_3  = isset($request->pro_youtube_public_3) ? substr($request->pro_youtube_public_3 ,32) : '';
        $product->pro_youtube_public_4  = isset($request->pro_youtube_public_4) ? substr($request->pro_youtube_public_4 ,32) : '';
        $product->pro_youtube_public_5  = isset($request->pro_youtube_public_5) ? substr($request->pro_youtube_public_5 ,32) : '';

        $product->pro_youtube_private_1 = isset($request->pro_youtube_private_1) ? substr($request->pro_youtube_private_1 ,32) : '';
        $product->pro_youtube_private_2 = isset($request->pro_youtube_private_2) ? substr($request->pro_youtube_private_2 ,32) : '';
        $product->pro_youtube_private_3 = isset($request->pro_youtube_private_3) ? substr($request->pro_youtube_private_3 ,32) : '';
        $product->pro_youtube_private_4 = isset($request->pro_youtube_private_4) ? substr($request->pro_youtube_private_4 ,32) : '';
        $product->pro_youtube_private_5 = isset($request->pro_youtube_private_5) ? substr($request->pro_youtube_private_5 ,32) : '';

        $product->pro_thongtin_vi       = $request->pro_thongtin_vi;
        $product->pro_thongtin_en       = $request->pro_thongtin_en;
        $product->pro_thongtin_zh       = $request->pro_thongtin_zh;
        $product->pro_thongtin_ja       = $request->pro_thongtin_ja;
        $product->pro_thongtin_kr       = $request->pro_thongtin_kr;

        $product->pro_thongtin_private_vi       = $request->pro_thongtin_private_vi;
        $product->pro_thongtin_private_en       = $request->pro_thongtin_private_en;
        $product->pro_thongtin_private_zh       = $request->pro_thongtin_private_zh;
        $product->pro_thongtin_private_ja       = $request->pro_thongtin_private_ja;
        $product->pro_thongtin_private_kr       = $request->pro_thongtin_private_kr;

        $product->pro_title             = isset($request->pro_title) ? $request->pro_title : $request->pro_ten_en;
        $product->pro_mota              = $request->pro_mota;
        $product->pro_keyword           = $request->pro_keyword;

        $product->updated_at            = Carbon::now();
        $product->save();


        if($request->hasFile('file')){
            foreach($request->file as $file){
                $alt_name       = $file->getClientOriginalName();
                $alt_save_name  = time().$alt_name;
                $file->move('public/upload/productphoto/', $alt_save_name);

                $alt_item               = new ProdutPhotoModel;
                $alt_item->photo_url    = $alt_save_name;
                $alt_item->product_id   = $id;
                $alt_item->created_at   = Carbon::now();
                $alt_item->updated_at   = Carbon::now();
                $alt_item->save();
            }
        }

        if($request->hasFile('file_private')){
            foreach($request->file_private as $file){
                $alt_name       = $file->getClientOriginalName();
                $alt_save_name  = time().$alt_name;
                $file->move('public/upload/productphoto/', $alt_save_name);

                $alt_item               = new ProdutPhotoModel;
                $alt_item->photo_url    = $alt_save_name;
                $alt_item->photo_type    = "private";
                $alt_item->product_id   = $id;
                $alt_item->created_at   = Carbon::now();
                $alt_item->updated_at   = Carbon::now();
                $alt_item->save();
            }
        }

        return redirect()->intended('admin/project');
    }


    // -------------------End Project------------------




    // ----------------Start achievement---------------


    //Get view add achievement
    public function addAchievement(Request $request){
        $data['procat_list']        = ProductCategoryModel::all();
        $data['procatchild_list']   = ProductCategoryChildModel::all();

        $product_id                 = ProductModel::select('pro_id')->orderBy('created_at', 'desc')->first();
        $data['photo_pro_id']       = $product_id;
        return view('admin/addproduct', $data);
    }


    //Upload new achievement
    public function postaddAchievement(Request $request){

        $product_type           = $request->type;

        if ($request->hasFile('pro_thumb')) {
            $file               = $request->file('pro_thumb');
            $image_name         = $file->getClientOriginalName();
            $image_save_name    = time().$image_name;
            $file->move('public/upload/product/', $image_save_name);
        }      
      

        $productId = ProductModel::insertGetId([
            'pro_ten'               => $request->pro_ten,
            'pro_ten_en'            => $request->pro_ten_en,
            'pro_slug'              => str_slug($request->pro_ten),
            'pro_thumb'             => $image_save_name,
            'pro_thongtin'          => $request->pro_thongtin,
            'pro_thongtin_en'       => $request->pro_thongtin_en,
            'pro_info_tech'         => $request->pro_info_tech,
            'pro_info_tech_en'      => $request->pro_info_tech_en,

            'pro_schoolarship'      => isset($request->pro_schoolarship) ? $request->pro_schoolarship : '',
            'pro_schoolarship_en'   => isset($request->pro_schoolarship_en) ? $request->pro_schoolarship_en : '',

            'pro_giaban'        => ($request->pro_giaban) ? $request->pro_giaban : 0,
            'pro_giakhuyenmai'  => ($request->pro_giakhuyenmai) ? $request->pro_giakhuyenmai : 0,

            'pro_edu_level'     => isset($request->pro_edu_level) ? $request->pro_edu_level : '',
            'pro_edu_level_en'  => isset($request->pro_edu_level_en) ? $request->pro_edu_level_en : '',
            'pro_edu_lang'      => isset($request->pro_edu_lang) ? $request->pro_edu_lang : '',
            'pro_edu_lang_en'   => isset($request->pro_edu_lang_en) ? $request->pro_edu_lang_en : '',
            'pro_edu_city'      => isset($request->pro_edu_city) ? $request->pro_edu_city : '',
            'pro_edu_city_en'   => isset($request->pro_edu_city_en) ? $request->pro_edu_city_en : '',

            'pro_title'         => isset($request->pro_title) ? $request->pro_title : $request->pro_ten,
            'pro_mota'          => $request->pro_mota,
            'pro_keyword'       => $request->pro_keyword,
            'pro_procatid'      => $request->pro_procatid,
            
            'pro_author'        => $request->pro_author,
            'pro_editor'        => $request->pro_author,

            'pro_hienthi'       => 1,
            'pro_type'          => $product_type,

            'pro_level'         => ($request->pro_level!='none') ? $request->pro_level : '',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ]);
    

        if($request->hasFile('file')){

            foreach($request->file as $file){
                $alt_name       = $file->getClientOriginalName();
                $alt_save_name  = time().$alt_name;
                $file->move('public/upload/productphoto/', $alt_save_name);

                $alt_item               = new ProdutPhotoModel;
                $alt_item->photo_url    = $alt_save_name;
                $alt_item->product_id   = $productId;
                $alt_item->created_at   = Carbon::now();
                $alt_item->updated_at   = Carbon::now();
                $alt_item->save();
            }

        }



        return redirect()->intended('admin/template/achievement');

    }

    // -------------------End achievement------------------



    //Pic product category in add and edit page
    public function ajaxProcatChild($idprocat){
        $procat_child       = ProductCategoryChildModel::where('procat2_procat_id', $idprocat)->get();
        $count_procat_child = ProductCategoryChildModel::where('procat2_procat_id', $idprocat)->count();

        if($count_procat_child != 0){
            foreach($procat_child as $key => $item){
                if($key==0){
                    echo "<option>Chọn danh mục con</option>";
                }
                echo "<option value='".$item->procat2_id."'>".$item->procat2_ten."</option>";
            }
        } else {
            echo "<option value='none'>Chọn danh mục con</option>";
        }

    }

    

    //Pic product category in add and edit page
    public function ajaxeditProcatChild($id, $idprocat){
        $procat_child       = ProductCategoryChildModel::where('procat2_procat_id', $idprocat)->get();
        $count_procat_child = ProductCategoryChildModel::where('procat2_procat_id', $idprocat)->count();

        if($count_procat_child != 0){
            foreach($procat_child as $key => $item){
                if($key==0){
                    echo "<option>Chọn danh mục con</option>";
                }
                echo "<option value='".$item->procat2_id."'>".$item->procat2_ten."</option>";
            }
        } else {
            echo "<option value='none'>Chọn danh mục con</option>";
        }

    }

    public function deletealt(Request $request){

        $IDaltphoto = $request->idaltphoto;
        $IDproduct  = $request->idproduct;
        $htmlString = "";

        $productphoto = ProdutPhotoModel::find($IDaltphoto);
        File::delete('public/upload/productphoto/'.$productphoto->photo_url);
        ProdutPhotoModel::destroy($IDaltphoto);

        $count_result   = ProdutPhotoModel::where('product_id', $IDproduct)->count();
        $result         = ProdutPhotoModel::where('product_id', $IDproduct)->get();

        return back();

        // if($count_result != 0){
        //     foreach($result as $key => $item){
        //         echo "<span class='img-alt'>
        //                 <img width='22%' height='auto' src='http://localhost/customer/saithanhpool/public/upload/productphoto/".$item->photo_url."'>
        //                 <span class='btn-delete-img-alt' rel='".$item->photo_id."' rel1='".$item->product_id."'><a>X</a></span>
        //             </span>";
        //     }
        // } else {
        //     echo "<span class='img-alt'>Không có hình ảnh phụ</span>";
        // }

    }


    //Get view edit product
    public function getProductDetail($id){
        $data['editpro']            = ProductModel::find($id);
        $data['procat_list']        = ProductCategoryModel::all();
        $data['procat_child_list']  = ProductCategoryChildModel::all();
        $data['alt_photos']         = ProdutPhotoModel::where('product_id', $id)->get();

        return view('admin/editproduct', $data);
    }

    //Edit product
    public function postProductDetail(EditProductRequest $request, $id){
        $product = ProductModel::find($id);
       
        $product->pro_ten           = $request->pro_ten;
        $product->pro_ten_en        = $request->pro_ten_en;
        if ($request->hasFile('pro_thumb')) {
            File::delete('public/upload/product/'.$product->pro_thumb);

            $file                   = $request->file('pro_thumb');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $product->pro_thumb     = $image_save_name;
            $file->move('public/upload/product/', $image_save_name);
        }
        
        $product->pro_thongtin          = $request->pro_thongtin;
        $product->pro_thongtin_en       = $request->pro_thongtin_en;
        $product->pro_info_tech         = $request->pro_info_tech;
        $product->pro_info_tech_en      = $request->pro_info_tech_en;
        $product->pro_schoolarship      = isset($request->pro_schoolarship) ? $request->pro_schoolarship : '';
        $product->pro_schoolarship_en   = isset($request->pro_schoolarship_en) ? $request->pro_schoolarship_en : '';


        $product->pro_giaban            = ($request->pro_giaban) ? $request->pro_giaban : 0;
        $product->pro_giakhuyenmai      = ($request->pro_giakhuyenmai) ? $request->pro_giakhuyenmai : 0;


        $product->pro_edu_level         = isset($request->pro_edu_level) ? $request->pro_edu_level : '';
        $product->pro_edu_level_en      = isset($request->pro_edu_level_en) ? $request->pro_edu_level_en : '';
        $product->pro_edu_lang          = isset($request->pro_edu_lang) ? $request->pro_edu_lang : '';
        $product->pro_edu_lang_en       = isset($request->pro_edu_lang_en) ? $request->pro_edu_lang_en : '';
        $product->pro_edu_city          = isset($request->pro_edu_city) ? $request->pro_edu_city : '';
        $product->pro_edu_city_en       = isset($request->pro_edu_city_en) ? $request->pro_edu_city_en : '';
        

        $product->pro_title             = isset($request->pro_title) ? $request->pro_title : $request->pro_ten;
        $product->pro_mota              = $request->pro_mota;
        $product->pro_keyword           = $request->pro_keyword;

        $product->pro_editor            = $request->pro_editor;

        $product->pro_procatid          = $request->pro_procatid;
        $product->pro_procat_child      = ($request->pro_procat_child!='none') ? $request->pro_procat_child : 0;
        $product->pro_level             = ($request->pro_level!='none') ? $request->pro_level : '';

        $product->updated_at            = Carbon::now();
        $product->save();


        if($request->hasFile('file')){
            foreach($request->file as $file){
                $alt_name       = $file->getClientOriginalName();
                $alt_save_name  = time().$alt_name;
                $file->move('public/upload/productphoto/', $alt_save_name);

                $alt_item               = new ProdutPhotoModel;
                $alt_item->photo_url    = $alt_save_name;
                $alt_item->product_id   = $id;
                $alt_item->created_at   = Carbon::now();
                $alt_item->updated_at   = Carbon::now();
                $alt_item->save();
            }
        }

        return redirect()->intended('admin/template/achievement');
    }
    

    //Delete product action
    public function deleteProduct(Request $request, $id){
        $nation_delete_item         = ProductModel::find($id)->pro_nation;
        $count_nation               = ProductModel::where('pro_nation', $nation_delete_item)->count();

        if( $count_nation == 1 ){

            $nation_uncheck_item    = NationModel::find($nation_delete_item);
            $nation_uncheck_item->nation_check = null;
            $nation_uncheck_item->save();

        }


        // Delete product alt photos
        $product_alt_photo  = ProdutPhotoModel::where('product_id', $id)->get();
        foreach($product_alt_photo as $photo_item){
            File::delete('public/upload/productphoto/'.$photo_item->photo_url);
            ProdutPhotoModel::destroy($photo_item->photo_id);
        }

        $product            = ProductModel::find($id);
        // Not use order manage so delete it
        File::delete('public/upload/product/'.$product->pro_thumb);
        ProductModel::destroy($id);

        // // Keep product thumb for order detail
        // File::delete('public/upload/product/'.$product->pro_thumb);
        
        return back();
    }

    
    //Check show or hide product action
    public function checkshowProduct($id){
        $product = ProductModel::find($id);
        $product->pro_hienthi = $product->pro_hienthi ? 0 : 1;
        $product->save();
        
        return back();
    }

    //Check show or hide video link
    public function checkshow3D($id){
        $product                        = ProductModel::find($id);
        $product->pro_3d_video_private  = $product->pro_3d_video_private ? 0 : 1;
        $product->save();
        
        return back();
    }

    public function checkshow4D($id){
        $product                        = ProductModel::find($id);
        $product->pro_4d_video_private  = $product->pro_4d_video_private ? 0 : 1;
        $product->save();
        
        return back();
    }

    public function checkshowProgress($id){
        $product                                = ProductModel::find($id);
        $product->pro_progress_video_private    = $product->pro_progress_video_private ? 0 : 1;
        $product->save();
        
        return back();
    }
}
