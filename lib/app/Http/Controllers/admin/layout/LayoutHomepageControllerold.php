<?php

namespace App\Http\Controllers\admin\layout;

use File;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\ProductCategoryModel;
use App\model\LayoutHomepageModel;
use App\model\LayoutServiceModel;
use App\model\ImageModel;
use App\model\ProductModel;
use App\model\ProdutPhotoModel;
use App\model\WhyusProcessModel;
use App\model\EventModel;


use App\Http\Requests\LayoutHomepageRequest;

class LayoutHomepageController extends Controller
{

    // Why us
    public function getWhyUs(){
        $data['homepage_list']          = LayoutHomepageModel::find(1);
        $data['img_number_list']        = ImageModel::where('img_type', 'why-us')->get();
        $data['service_item']           = LayoutServiceModel::find(1);
        $data['customer_list']          = ImageModel::where('img_type', 'customer-partner')->get();
        $data['company_member_list']    = ImageModel::where('img_type', 'company-member')->get();
        $data['process_list']           = WhyusProcessModel::all();

        $data['whyus_tech']             = LayoutHomepageModel::find(1);
        $data['img_tech_list']          = ImageModel::where('img_type', 'techonology')->get();

        $data['whyus_profile']          = LayoutHomepageModel::find(1);

        $data['profile_doc_list']       = EventModel::where('event_type', 'profile-document')->get();

        $data['img_social_list']    = ImageModel::where('img_type', 'social')->get();
        $data['img_social_slide']   = ImageModel::where('img_type', 'social_slide')->get();
        $data['img_certificate']    = ImageModel::where('img_type', 'cert-img')->get();


        return view('admin/layout/layout_why_us', $data);
    }


    public function postWhyUs(Request $request){

        // Why us
        $layout                     = LayoutHomepageModel::find(1);

        $layout->whyus_intro_vi     = $request->whyus_intro_vi;
        $layout->whyus_intro_en     = $request->whyus_intro_en;
        $layout->whyus_intro_zh     = $request->whyus_intro_zh;
        $layout->whyus_intro_ja     = $request->whyus_intro_ja;
        $layout->whyus_intro_kr     = $request->whyus_intro_kr;

        $layout->whyus_number_speed = $request->whyus_number_speed;
        
        $layout->whyus_timeline_show    = isset($request->whyus_timeline_show) ? true : false;
        $layout->whyus_process_show     = isset($request->whyus_process_show) ? true : false;
        $layout->whyus_tech_show        = isset($request->whyus_tech_show) ? true : false;
        $layout->whyus_profile_show     = isset($request->whyus_profile_show) ? true : false;
        $layout->whyus_cust_show        = isset($request->whyus_cust_show) ? true : false;


        // Why us - Timeline

        if ($request->hasFile('whyus_timeline_pc')) {
            File::delete('public/upload/template/'.$layout->whyus_timeline_pc);

            $file                           = $request->file('whyus_timeline_pc');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->whyus_timeline_pc      = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }

        if ($request->hasFile('whyus_timeline_mobile')) {
            File::delete('public/upload/template/'.$layout->whyus_timeline_mobile);

            $file                           = $request->file('whyus_timeline_mobile');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->whyus_timeline_mobile  = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }


        $layout->whyus_file         = $request->whyus_file;
        $layout->whyus_video_intro  = isset($request->whyus_video_intro) ? substr($request->whyus_video_intro ,32) : '';

        // Why us - Technology & Equipment
        if ($request->hasFile('whyus_tech_img_left')) {
            File::delete('public/upload/template/'.$layout->whyus_tech_img_left);

            $file                           = $request->file('whyus_tech_img_left');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->whyus_tech_img_left    = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }

        if ($request->hasFile('whyus_tech_img_right')) {
            File::delete('public/upload/template/'.$layout->whyus_tech_img_right);

            $file                           = $request->file('whyus_tech_img_right');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->whyus_tech_img_right   = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }

        // Why us - Company profile
        if ($request->hasFile('whyus_profile_img')) {
            File::delete('public/upload/template/'.$layout->whyus_profile_img);

            $file                           = $request->file('whyus_profile_img');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->whyus_profile_img      = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }


        // CSR section
        $layout->csr_certificate_show   = isset($request->csr_certificate_show) ? true : false;
        $layout->csr_letter_show        = isset($request->csr_letter_show) ? true : false;

        if ($request->hasFile('social_letter_img')) {
            File::delete('public/upload/template/'.$layout->social_letter_img);
            
            $file                           = $request->file('social_letter_img');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->social_letter_img      = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }

        $layout->updated_at         = Carbon::now();
        $layout->save();       


        // Service
        // $service                    = LayoutServiceModel::find(1);

        // $service->service_intro_vi  = $request->service_intro_vi;
        // $service->service_intro_en  = $request->service_intro_en;
        // $service->service_intro_zh  = $request->service_intro_zh;
        // $service->service_intro_ja  = $request->service_intro_ja;

        // $service->service_title1_vi = $request->service_title1_vi;
        // $service->service_title1_en = $request->service_title1_en;
        // $service->service_title1_zh = $request->service_title1_zh;
        // $service->service_title1_ja = $request->service_title1_ja;

        // $service->service_des1_vi   = $request->service_des1_vi;
        // $service->service_des1_en   = $request->service_des1_en;
        // $service->service_des1_zh   = $request->service_des1_zh;
        // $service->service_des1_ja   = $request->service_des1_ja;

        // if ($request->hasFile('service_background_1')) {
        //     File::delete('public/upload/template/'.$service->service_background_1);

        //     $file                           = $request->file('service_background_1');
        //     $image_name                     = $file->getClientOriginalName();
        //     $image_save_name                = time().$image_name;
        //     $service->service_background_1  = $image_save_name;
        //     $file->move('public/upload/template/', $image_save_name);
        // }

        // $service->service_title2_vi = $request->service_title2_vi;
        // $service->service_title2_en = $request->service_title2_en;
        // $service->service_title2_zh = $request->service_title2_zh;
        // $service->service_title2_ja = $request->service_title2_ja;

        // $service->service_des2_vi   = $request->service_des2_vi;
        // $service->service_des2_en   = $request->service_des2_en;
        // $service->service_des2_zh   = $request->service_des2_zh;
        // $service->service_des2_ja   = $request->service_des2_ja;

        // if ($request->hasFile('service_background_2')) {
        //     File::delete('public/upload/template/'.$service->service_background_2);

        //     $file                           = $request->file('service_background_2');
        //     $image_name                     = $file->getClientOriginalName();
        //     $image_save_name                = time().$image_name;
        //     $service->service_background_2  = $image_save_name;
        //     $file->move('public/upload/template/', $image_save_name);
        // }

        // $service->service_title3_vi = $request->service_title3_vi;
        // $service->service_title3_en = $request->service_title3_en;
        // $service->service_title3_zh = $request->service_title3_zh;
        // $service->service_title3_ja = $request->service_title3_ja;

        // $service->service_des3_vi   = $request->service_des3_vi;
        // $service->service_des3_en   = $request->service_des3_en;
        // $service->service_des3_zh   = $request->service_des3_zh;
        // $service->service_des3_ja   = $request->service_des3_ja;

        // if ($request->hasFile('service_background_3')) {
        //     File::delete('public/upload/template/'.$service->service_background_3);

        //     $file                           = $request->file('service_background_3');
        //     $image_name                     = $file->getClientOriginalName();
        //     $image_save_name                = time().$image_name;
        //     $service->service_background_3  = $image_save_name;
        //     $file->move('public/upload/template/', $image_save_name);
        // }

        // $service->service_title4_vi = $request->service_title4_vi;
        // $service->service_title4_en = $request->service_title4_en;
        // $service->service_title4_zh = $request->service_title4_zh;
        // $service->service_title4_ja = $request->service_title4_ja;

        // $service->service_des4_vi   = $request->service_des4_vi;
        // $service->service_des4_en   = $request->service_des4_en;
        // $service->service_des4_zh   = $request->service_des4_zh;
        // $service->service_des4_ja   = $request->service_des4_ja;

        // if ($request->hasFile('service_background_4')) {
        //     File::delete('public/upload/template/'.$service->service_background_4);

        //     $file                           = $request->file('service_background_4');
        //     $image_name                     = $file->getClientOriginalName();
        //     $image_save_name                = time().$image_name;
        //     $service->service_background_4  = $image_save_name;
        //     $file->move('public/upload/template/', $image_save_name);
        // }


        // $service->created_at        = Carbon::now();
        // $service->updated_at        = Carbon::now();
        // $service->save();


        return back();
        
    }

	
	// Why us technology & equipment
    public function geteditTech(Request $request, $id){
        $data['image_item']         = ImageModel::find($id);
        $data['img_type']           = $request->type;

        return view('admin/edit/edit_tech_slide', $data);
    }

    //--------------- why us - Process -------------//
    public function getaddProcess(){
        return view('admin/add/add_process');
    }


    public function postaddProcess(Request $request){

        if ($request->hasFile('whyus_process_thumb')) {
            $file_whyus_process_thumb              = $request->file('whyus_process_thumb');
            $whyus_process_thumb_image_name        = $file_whyus_process_thumb->getClientOriginalName();
            $whyus_process_thumb_image_save_name   = time().$whyus_process_thumb_image_name;
            $file_whyus_process_thumb->move('public/upload/template/', $whyus_process_thumb_image_save_name);
        }  


        $processId = WhyusProcessModel::insertGetId([

            'whyus_process_title_vi'        => $request->whyus_process_title_vi,
            'whyus_process_title_en'        => $request->whyus_process_title_en,
            'whyus_process_title_zh'        => $request->whyus_process_title_zh,
            'whyus_process_title_ja'        => $request->whyus_process_title_ja,
            'whyus_process_title_kr'        => $request->whyus_process_title_kr,

            'whyus_process_thumb'           => $whyus_process_thumb_image_save_name,

            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ]);

        if($request->hasFile('file')){

            foreach($request->file as $file){
                $alt_name       = $file->getClientOriginalName();
                $alt_save_name  = time().$alt_name;
                $file->move('public/upload/process/', $alt_save_name);

                $img                    = new ImageModel;
                $img->img_src           = $alt_save_name;
                $img->img_type          = 'process';
                $img->img_process_id    = $processId;
                $img->created_at        = Carbon::now();
                $img->updated_at        = Carbon::now();
                $img->save();
            }

        }

        return redirect()->intended('admin/template/whyus');
    }
    

    public function geteditProcess(Request $request, $id){
        $data['process_detail']         = WhyusProcessModel::find($id);
        $data['process_detail_slide']   = ImageModel::where('img_type', 'process')->where('img_process_id', $id)->get();

        return view('admin/edit/edit_process', $data);
    }


    public function posteditProcess(Request $request, $id){
        $process                        = WhyusProcessModel::find($id);

        $process->whyus_process_title_vi = $request->whyus_process_title_vi;
        $process->whyus_process_title_en = $request->whyus_process_title_en;
        $process->whyus_process_title_zh = $request->whyus_process_title_zh;
        $process->whyus_process_title_ja = $request->whyus_process_title_ja;
        $process->whyus_process_title_kr = $request->whyus_process_title_kr;

        
        if ($request->hasFile('whyus_process_thumb')) {
            File::delete('public/upload/template/'.$process->whyus_process_thumb);
            
            $file                           = $request->file('whyus_process_thumb');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $process->whyus_process_thumb   = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
		
		if($request->hasFile('file')){

            foreach($request->file as $file){
                $alt_name       = $file->getClientOriginalName();
                $alt_save_name  = time().$alt_name;
                $file->move('public/upload/process/', $alt_save_name);

                $img                    = new ImageModel;
                $img->img_src           = $alt_save_name;
                $img->img_type          = 'process';
                $img->img_process_id    = $id;
                $img->created_at        = Carbon::now();
                $img->updated_at        = Carbon::now();
                $img->save();
            }

        }

        $process->updated_at          = Carbon::now();
        $process->save();

        return redirect('admin/template/whyus');
        
    }

    public function deleteProcess(Request $request, $id){
        $process = WhyusProcessModel::find($id);
        File::delete('public/upload/template/'.$process->whyus_process_thumb);
        WhyusProcessModel::destroy($id);

        return back();
    }

    public function deleteProcessSlide($id, $idImg){

        $img  = ImageModel::find($idImg);

        File::delete('public/upload/process/'.$img->img_src);
        ImageModel::destroy($idImg);

        return back();
    }

    //------------  End why us - Process -------------//






    //------------ why us - Company profile ----------//
    public function getaddProfile(){
        
        return view('admin/add/add_profile_doc');
    }

    public function postaddProfile(Request $request){
        $profile                    = new EventModel;

        $profile->event_ten_vi      = $request->event_ten_vi;
        $profile->event_ten_en      = $request->event_ten_en;
        $profile->event_ten_zh      = $request->event_ten_zh;
        $profile->event_ten_ja      = $request->event_ten_ja;
        $profile->event_ten_kr      = $request->event_ten_kr;

        $profile->event_category    = ($request->event_category != 'null') ? $request->event_category : 'doc';

        $profile->event_link        = $request->event_link;

        $profile->event_type        = 'profile-document';

        $profile->save();

        return redirect()->intended('admin/template/whyus');
    }

    public function geteditProfile(Request $request, $id){
        $data['profile_doc_item']            = EventModel::find($id);

        return view('admin/edit/edit_profile_doc', $data);
    }

    public function getdeleteProfile($id){
        $profile            = EventModel::find($id);
        EventModel::destroy($id);

        return back();

    }
    //------------ End why us - Company profile ----------//



	
	//-------- Cert & CSR -----------//
    public function addCSR(){
        return view('admin/add/add_csr');
    }

    public function postaddCSR(Request $request){
        $cert = new ImageModel;

        if ($request->hasFile('img_src')) {
            $file           = $request->file('img_src');
            $img_name       = $file->getClientOriginalName();
            $img_save_name  = time().$img_name;
            $cert->img_src  = $img_save_name;
            $file->move('public/upload/image/', $img_save_name);
        }

        $cert->img_type         = 'cert-img';
        $cert->created_at       = Carbon::now();
        $cert->updated_at       = Carbon::now();

        $cert->save();

        return redirect()->intended('admin/template/social');
    }

	public function addSocialSlide(){
        return view('admin/add/add_social_slide');
    }

    public function postaddSocialSlide(Request $request){

        if ($request->hasFile('social_slide')) {

            $file           = $request->file('social_slide');
            $img_name       = $file->getClientOriginalName();
            $img_save_name  = time().$img_name;
            $file->move('public/upload/image/', $img_save_name);

            $img                        = new ImageModel;

            $img->img_src               = $img_save_name;
            $img->img_description_vi    = $request->img_description_vi;
            $img->img_description_en    = $request->img_description_en;
            $img->img_description_zh    = $request->img_description_zh;
            $img->img_description_ja    = $request->img_description_ja;
            $img->img_description_kr    = $request->img_description_kr;

            $img->img_type              = 'social_slide';
            
            $img->created_at            = Carbon::now();
            $img->updated_at            = Carbon::now();
            $img->save();
        }

        return redirect('admin/template/social');
    }

    //------ End Cert & CSR ---------//
	
	
	
	

    // Service
    public function getService(){
        $data['service_item']      = LayoutServiceModel::find(1);
        
        $data['service_design_slide']           = ImageModel::where('img_type', 'service-design-slide')->get();
        $data['service_manage_slide']           = ImageModel::where('img_type', 'service-manage-slide')->get();
        $data['service_construction_slide']     = ImageModel::where('img_type', 'service-construction-slide')->get();
        $data['service_develop_slide']          = ImageModel::where('img_type', 'service-development-slide')->get();

        return view('admin/layout/layout_service', $data);
    }

    
    public function postService(Request $request){
        $layout                     = LayoutServiceModel::find(1);

        $layout->service_intro_vi   = $request->service_intro_vi;
        $layout->service_intro_en   = $request->service_intro_en;
        $layout->service_intro_zh   = $request->service_intro_zh;
        $layout->service_intro_ja   = $request->service_intro_ja;
        $layout->service_intro_kr   = $request->service_intro_kr;

        $layout->service_title1_vi  = $request->service_title1_vi;
        $layout->service_title1_en  = $request->service_title1_en;
        $layout->service_title1_zh  = $request->service_title1_zh;
        $layout->service_title1_ja  = $request->service_title1_ja;
        $layout->service_title1_kr  = $request->service_title1_kr;

        $layout->service_des1_vi    = $request->service_des1_vi;
        $layout->service_des1_en    = $request->service_des1_en;
        $layout->service_des1_zh    = $request->service_des1_zh;
        $layout->service_des1_ja    = $request->service_des1_ja;
        $layout->service_des1_kr    = $request->service_des1_kr;

        if ($request->hasFile('service_background_1')) {
            File::delete('public/upload/service/'.$layout->service_background_1);

            $file                           = $request->file('service_background_1');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->service_background_1   = $image_save_name;
            $file->move('public/upload/service/', $image_save_name);
        }

        if ($request->hasFile('service_img_info_1')) {
            File::delete('public/upload/service/'.$layout->service_img_info_1);

            $file                           = $request->file('service_img_info_1');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->service_img_info_1     = $image_save_name;
            $file->move('public/upload/service/', $image_save_name);
        }


        if($request->hasFile('design_slide')){
            foreach($request->design_slide as $file){
                $alt_name       = $file->getClientOriginalName();
                $alt_save_name  = time().$alt_name;
                $file->move('public/upload/service/', $alt_save_name);

                $silde_design                   = new ImageModel;
                $silde_design->img_src          = $alt_save_name;
                $silde_design->img_type         = 'service-design';
                $silde_design->created_at       = Carbon::now();
                $silde_design->updated_at       = Carbon::now();
                $silde_design->save();
            }
        }

        $layout->service_title2_vi  = $request->service_title2_vi;
        $layout->service_title2_en  = $request->service_title2_en;
        $layout->service_title2_zh  = $request->service_title2_zh;
        $layout->service_title2_ja  = $request->service_title2_ja;
        $layout->service_title2_kr  = $request->service_title2_kr;

        $layout->service_des2_vi    = $request->service_des2_vi;
        $layout->service_des2_en    = $request->service_des2_en;
        $layout->service_des2_zh    = $request->service_des2_zh;
        $layout->service_des2_ja    = $request->service_des2_ja;
        $layout->service_des2_kr    = $request->service_des2_kr;

        if ($request->hasFile('service_background_2')) {
            File::delete('public/upload/service/'.$layout->service_background_2);

            $file                           = $request->file('service_background_2');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->service_background_2   = $image_save_name;
            $file->move('public/upload/service/', $image_save_name);
        }

        if ($request->hasFile('service_img_info_2')) {
            File::delete('public/upload/service/'.$layout->service_img_info_2);

            $file                           = $request->file('service_img_info_2');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->service_img_info_2     = $image_save_name;
            $file->move('public/upload/service/', $image_save_name);
        }


        if($request->hasFile('manage_slide')){
            foreach($request->manage_slide as $file){
                $alt_name       = $file->getClientOriginalName();
                $alt_save_name  = time().$alt_name;
                $file->move('public/upload/service/', $alt_save_name);

                $silde_manage                   = new ImageModel;
                $silde_manage->img_src          = $alt_save_name;
                $silde_manage->img_type         = 'service-manage';
                $silde_manage->created_at       = Carbon::now();
                $silde_manage->updated_at       = Carbon::now();
                $silde_manage->save();
            }
        }

        $layout->service_title3_vi  = $request->service_title3_vi;
        $layout->service_title3_en  = $request->service_title3_en;
        $layout->service_title3_zh  = $request->service_title3_zh;
        $layout->service_title3_ja  = $request->service_title3_ja;
        $layout->service_title3_kr  = $request->service_title3_kr;

        $layout->service_des3_vi    = $request->service_des3_vi;
        $layout->service_des3_en    = $request->service_des3_en;
        $layout->service_des3_zh    = $request->service_des3_zh;
        $layout->service_des3_ja    = $request->service_des3_ja;
        $layout->service_des3_kr    = $request->service_des3_kr;

        if ($request->hasFile('service_background_3')) {
            File::delete('public/upload/service/'.$layout->service_background_3);

            $file                           = $request->file('service_background_3');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->service_background_3   = $image_save_name;
            $file->move('public/upload/service/', $image_save_name);
        }

        if ($request->hasFile('service_img_info_3')) {
            File::delete('public/upload/service/'.$layout->service_img_info_3);

            $file                           = $request->file('service_img_info_3');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->service_img_info_3     = $image_save_name;
            $file->move('public/upload/service/', $image_save_name);
        }

        if($request->hasFile('construction_slide')){
            foreach($request->construction_slide as $file){
                $alt_name       = $file->getClientOriginalName();
                $alt_save_name  = time().$alt_name;
                $file->move('public/upload/service/', $alt_save_name);

                $silde_construction                   = new ImageModel;
                $silde_construction->img_src          = $alt_save_name;
                $silde_construction->img_type         = 'service-construction';
                $silde_construction->created_at       = Carbon::now();
                $silde_construction->updated_at       = Carbon::now();
                $silde_construction->save();
            }
        }

        $layout->service_title4_vi  = $request->service_title4_vi;
        $layout->service_title4_en  = $request->service_title4_en;
        $layout->service_title4_zh  = $request->service_title4_zh;
        $layout->service_title4_ja  = $request->service_title4_ja;
        $layout->service_title4_kr  = $request->service_title4_kr;

        $layout->service_des4_vi    = $request->service_des4_vi;
        $layout->service_des4_en    = $request->service_des4_en;
        $layout->service_des4_zh    = $request->service_des4_zh;
        $layout->service_des4_ja    = $request->service_des4_ja;
        $layout->service_des4_kr    = $request->service_des4_kr;

        if ($request->hasFile('service_background_4')) {
            File::delete('public/upload/service/'.$layout->service_background_4);

            $file                           = $request->file('service_background_4');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->service_background_4   = $image_save_name;
            $file->move('public/upload/service/', $image_save_name);
        }

        if ($request->hasFile('service_img_info_4')) {
            File::delete('public/upload/service/'.$layout->service_img_info_4);

            $file                           = $request->file('service_img_info_4');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->service_img_info_4     = $image_save_name;
            $file->move('public/upload/service/', $image_save_name);
        }


        if($request->hasFile('develop_slide')){
            foreach($request->develop_slide as $file){
                $alt_name       = $file->getClientOriginalName();
                $alt_save_name  = time().$alt_name;
                $file->move('public/upload/service/', $alt_save_name);

                $silde_develop                   = new ImageModel;
                $silde_develop->img_src          = $alt_save_name;
                $silde_develop->img_type         = 'service-develop';
                $silde_develop->created_at       = Carbon::now();
                $silde_develop->updated_at       = Carbon::now();
                $silde_develop->save();
            }
        }

        $layout->created_at         = Carbon::now();
        $layout->updated_at         = Carbon::now();
        $layout->save();

        return back();
    }


    public function getServiceSlide(){
        return view('admin/add/add_service_slide');
    }


    public function postServiceSlide(Request $request){
        $img_type                   = $request->type;

        $img                        = new ImageModel;
        $img->img_description_vi    = $request->img_description_vi;
        $img->img_description_en    = $request->img_description_en;
        $img->img_description_zh    = $request->img_description_zh;
        $img->img_description_ja    = $request->img_description_ja;
        $img->img_description_kr    = $request->img_description_kr;
        $img->img_type              = $img_type;

        if ($request->hasFile('img_src')) {
            $file           = $request->file('img_src');
            $img_name       = $file->getClientOriginalName();
            $img_save_name  = time().$img_name;
            $img->img_src   = $img_save_name;
            $file->move('public/upload/service/', $img_save_name);
        }

        $img->save();

        return redirect('admin/template/service');
    }


    public function geteditServiceSlide(Request $request, $id){
        $data['img_item']       = ImageModel::find($id);

        return view('admin/edit/edit_service_slide', $data);
    }

    public function posteditServiceSlide(Request $request, $id){
        $img                        = ImageModel::find($id);

        $img->img_description_vi    = $request->img_description_vi;
        $img->img_description_en    = $request->img_description_en;
        $img->img_description_zh    = $request->img_description_zh;
        $img->img_description_ja    = $request->img_description_ja;
        $img->img_description_kr    = $request->img_description_kr;

        if ($request->hasFile('img_src')) {
            File::delete('public/upload/service/'.$img->img_src);

            $file           = $request->file('img_src');
            $img_name       = $file->getClientOriginalName();
            $img_save_name  = time().$img_name;
            $img->img_src   = $img_save_name;
            $file->move('public/upload/service/', $img_save_name);
        }

        $img->save();

        return redirect('admin/template/service');
    }


    public function deletServiceSlide($id){
        $img  = ImageModel::find($id);

        File::delete('public/upload/service/'.$img->img_src);
        ImageModel::destroy($id);

        return back();
    }



    // Project
    public function getProject(){
        $data['project_item']      = LayoutHomepageModel::find(1);

        return view('admin/layout/layout_project', $data);
    }



    public function postProject(Request $request){
        $layout                     = LayoutHomepageModel::find(1);

        $layout->project_intro_vi   = $request->project_intro_vi;
        $layout->project_intro_en   = $request->project_intro_en;
        $layout->project_intro_zh   = $request->project_intro_zh;
        $layout->project_intro_ja   = $request->project_intro_ja;
        $layout->project_intro_kr   = $request->project_intro_kr;

        if ($request->hasFile('project_all_bg')) {
            File::delete('public/upload/template/'.$layout->project_all_bg);

            $file                   = $request->file('project_all_bg');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->project_all_bg = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }

        $layout->project_intro_box_vi   = $request->project_intro_box_vi;
        $layout->project_intro_box_en   = $request->project_intro_box_en;
        $layout->project_intro_box_zh   = $request->project_intro_box_zh;
        $layout->project_intro_box_ja   = $request->project_intro_box_ja;
        $layout->project_intro_box_kr   = $request->project_intro_box_kr;

        // if ($request->hasFile('project_all_bg')) {
        //     File::delete('public/upload/template/'.$layout->project_all_bg);

        //     $file                   = $request->file('project_all_bg');
        //     $image_name             = $file->getClientOriginalName();
        //     $image_save_name        = time().$image_name;
        //     $layout->project_all_bg = $image_save_name;
        //     $file->move('public/upload/template/', $image_save_name);
        // }

        $layout->updated_at         = Carbon::now();
        $layout->save();

        return back();
        
    }



    // Achievement
    public function getAchievement(){
        $data['achievement_item']       = LayoutHomepageModel::find(1);
        $data['img_partner_list']       = ImageModel::where('img_type', 'partner')->get();
        $data['achievement_list']       = ProductModel::where('pro_type', 'achievement')->get();
        $data['achievement_photo']      = ProdutPhotoModel::all();

        return view('admin/layout/layout_achievement', $data);
    }



    public function postAchievement(Request $request){
        $layout                     = LayoutHomepageModel::find(1);

        $layout->achievement_intro_vi   = $request->achievement_intro_vi;
        $layout->achievement_intro_en   = $request->achievement_intro_en;
        $layout->achievement_intro_zh   = $request->achievement_intro_zh;
        $layout->achievement_intro_ja   = $request->achievement_intro_ja;
        $layout->achievement_intro_kr   = $request->achievement_intro_kr;

        $layout->updated_at         = Carbon::now();
        $layout->save();

        return back();
        
    }

    // -------- Start Social ----------------------

    public function getSocial(){
        $data['homepage_list']      = LayoutHomepageModel::find(1);
        $data['img_social_list']    = ImageModel::where('img_type', 'social')->get();
        $data['img_social_slide']   = ImageModel::where('img_type', 'social_slide')->get();

        $data['img_certificate']    = ImageModel::where('img_type', 'cert-img')->get();

        return view('admin/layout/layout_social', $data);
    }



    public function postSocial(Request $request){
        $layout                     = LayoutHomepageModel::find(1);

        $layout->social_intro_vi    = $request->social_intro_vi;
        $layout->social_intro_en    = $request->social_intro_en;
        $layout->social_intro_zh    = $request->social_intro_zh;
        $layout->social_intro_ja    = $request->social_intro_ja;
        $layout->social_intro_kr    = $request->social_intro_kr;

        // $layout->csr_certificate_show   = isset($request->csr_certificate_show) ? true : false;
        // $layout->csr_letter_show        = isset($request->csr_letter_show) ? true : false;
        $layout->csr_social_show        = isset($request->csr_social_show) ? true : false;


        if ($request->hasFile('social_letter_img')) {
            File::delete('public/upload/template/'.$layout->social_letter_img);
            
            $file                           = $request->file('social_letter_img');
            $image_name                     = $file->getClientOriginalName();
            $image_save_name                = time().$image_name;
            $layout->social_letter_img      = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }

        $layout->updated_at         = Carbon::now();
        $layout->save();

        return back();
        
    }

    public function addSocialItem(){

        return view('admin/add_social');
    }

    public function postaddSocialItem(Request $request){
        $image                      = new ImageModel;

        $image->img_description_vi = $request->img_description_vi;
        $image->img_description_en = $request->img_description_en;
        $image->img_description_zh = $request->img_description_zh;
        $image->img_description_ja = $request->img_description_ja;
        $image->img_description_kr = $request->img_description_kr;

        if ($request->hasFile('img_src')) {
            $file                   = $request->file('img_src');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $image->img_src         = $image_save_name;
            $file->move('public/upload/image/', $image_save_name);
        }

        $image->img_type            = "social";
        $image->img_show            = true;

        $image->created_at          = Carbon::now();
        $image->updated_at          = Carbon::now();
        $image->save();

        return redirect('admin/template/social');
        
    }


    public function getSocialDetail(Request $request, $id){
        $data['social_item']        = ImageModel::find($id);
        $data['img_type']           = $request->type;

        return view('admin/editSocial', $data);
    }


    public function postSocialDetail(Request $request, $id){
        $image                      = ImageModel::find($id);

        $image->img_description_vi = $request->img_description_vi;
        $image->img_description_en = $request->img_description_en;
        $image->img_description_zh = $request->img_description_zh;
        $image->img_description_ja = $request->img_description_ja;
        $image->img_description_kr = $request->img_description_kr;

        
        if ($request->hasFile('img_src')) {
            File::delete('public/upload/image/'.$image->img_src);
            
            $file                   = $request->file('img_src');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $image->img_src         = $image_save_name;
            $file->move('public/upload/image/', $image_save_name);
        }


        $image->updated_at          = Carbon::now();
        $image->save();

        return redirect('admin/template/social');
        
    }


    public function deleteSocial($id){
        $social                 = ImageModel::find($id);
        File::delete('public/upload/image/'.$social->img_src);
        ImageModel::destroy($id);

        return back();
    }


    public function checkshowSocial($id){
        $social                 = ImageModel::find($id);
        $social->img_show       = $social->img_show ? 0 : 1;
        $social->save();
        
        return back();
    }

    // --------------- End Minh Global part ---------------------



    // Default
    public function getLayoutHomepage(){
        $data['homepage_list']      = LayoutHomepageModel::find(1);
        $data['procat_list']        = ProductCategoryModel::all();
        $data['img_slide_list']     = ImageModel::where('img_type', 'slide')->get();
        $data['img_album_list']     = ImageModel::where('img_type', 'album')->get();
        $data['img_partner_list']   = ImageModel::where('img_type', 'partner')->get();

        return view('admin/layout/layout_homepage', $data);
    }



    public function postLayoutHomepage(LayoutHomepageRequest $request){
        $layout = LayoutHomepageModel::find(1);
       
        if ($request->hasFile('homepage_logo')) {
            File::delete('public/upload/template/'.$layout->homepage_logo);

            $file                   = $request->file('homepage_logo');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->homepage_logo  = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }

        if ($request->hasFile('homepage_logo_plus')) {
            File::delete('public/upload/template/'.$layout->homepage_logo_plus);

            $file                       = $request->file('homepage_logo_plus');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $layout->homepage_logo_plus = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }

        if ($request->hasFile('homepage_favicon')) {
            File::delete('public/upload/template/'.$layout->homepage_favicon);

            $file                       = $request->file('homepage_favicon');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $layout->homepage_favicon   = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }

        if ($request->hasFile('promotion_img')) {
            File::delete('public/upload/template/'.$layout->promotion_img);

            $file                       = $request->file('promotion_img');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $layout->promotion_img      = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }

        //Video slide
        if ($request->hasFile('slide_vid')) {
            // File::delete('public/upload/template/'.$layout->slide_vid);

            $file                   = $request->file('slide_vid');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->slide_vid      = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }

        //Main Slide
        $layout->main_slide_speed_load  = $request->main_slide_speed_load;

        if ($request->hasFile('slide_img_1')) {
            File::delete('public/upload/template/'.$layout->slide_img_1);

            $file                   = $request->file('slide_img_1');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->slide_img_1    = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->slide_link_1      = $request->slide_link_1;

        if ($request->hasFile('slide_img_2')) {
            File::delete('public/upload/template/'.$layout->slide_img_2);

            $file                   = $request->file('slide_img_2');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->slide_img_2    = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->slide_link_2      = $request->slide_link_2;

        if ($request->hasFile('slide_img_3')) {
            File::delete('public/upload/template/'.$layout->slide_img_3);

            $file                   = $request->file('slide_img_3');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $layout->slide_img_3    = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->slide_link_3      = $request->slide_link_3;

        //Banner Top
        if ($request->hasFile('bannertop_img_1')) {
            File::delete('public/upload/template/'.$layout->bannertop_img_1);

            $file                       = $request->file('bannertop_img_1');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $layout->bannertop_img_1    = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->bannertop_link_1      = $request->bannertop_link_1;

        if ($request->hasFile('bannertop_img_2')) {
            File::delete('public/upload/template/'.$layout->bannertop_img_2);

            $file                       = $request->file('bannertop_img_2');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $layout->bannertop_img_2    = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->bannertop_link_2      = $request->bannertop_link_2;

        if ($request->hasFile('bannertop_img_3')) {
            File::delete('public/upload/template/'.$layout->bannertop_img_3);

            $file                       = $request->file('bannertop_img_3');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $layout->bannertop_img_3    = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->bannertop_link_3      = $request->bannertop_link_3;

        if ($request->hasFile('bannertop_img_4')) {
            File::delete('public/upload/template/'.$layout->bannertop_img_4);

            $file                       = $request->file('bannertop_img_4');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $layout->bannertop_img_4    = $image_save_name;
            $file->move('public/upload/template/', $image_save_name);
        }
        $layout->bannertop_link_4      = $request->bannertop_link_4;


        $layout->updated_at        = Carbon::now();
        $layout->save();
        return back();
        
    }


    public function getaddImage(Request $request){
        $data['img_type']           = $request->type;
        
        return view('admin/addImage', $data);
    }

    public function postaddImage(Request $request){
        $image              = new ImageModel;

        if ($request->hasFile('img_src')) {

            $file                   = $request->file('img_src');
            $image_name             = $file->getClientOriginalName();
            $image_save_name        = time().$image_name;
            $image->img_src         = $image_save_name;
            $file->move('public/upload/image/', $image_save_name);
        }

        $image->img_number          = $request->img_number;

        $image->img_title           = isset($request->img_title) ? $request->img_title : '';
        $image->img_title_en        = isset($request->img_title_en) ? $request->img_title_en : '';
        
        $image->img_description     = isset($request->img_description) ? $request->img_description : '';
        $image->img_description_vi  = isset($request->img_description_vi) ? $request->img_description_vi : '';
        $image->img_description_en  = isset($request->img_description_en) ? $request->img_description_en : '';
        $image->img_description_zh  = isset($request->img_description_zh) ? $request->img_description_zh : '';
        $image->img_description_ja  = isset($request->img_description_ja) ? $request->img_description_ja : '';
        $image->img_description_kr  = isset($request->img_description_kr) ? $request->img_description_kr : '';

        $image->img_link            = isset($request->img_link) ? $request->img_link : '';
        $image->img_type            = isset($request->type) ? $request->type : '';

        $image->img_plus_icon       = ($request->img_plus_icon != 'null') ? true : false;


        $image->img_show            = true;
        $image->created_at          = Carbon::now();
        $image->updated_at          = Carbon::now();
        $image->save();

        if($request->type == 'why-us' || $request->type == 'techonology'){
            return redirect()->intended('admin/template/whyus');
        } elseif($request->type == 'partner'){
            return redirect()->intended('admin/template/achievement');
        } elseif($request->type == 'customer-partner'){
            return redirect()->intended('admin/template/whyus');
        } elseif($request->type == 'company-member'){
            return redirect()->intended('admin/template/whyus');
        } else {
            return redirect()->intended('admin/image');
        }
    }


    public function geteditImage(Request $request, $id){
        $data['image_item']         = ImageModel::find($id);
        $data['img_type']           = $request->type;

        return view('admin/edit/edit_tech_slide', $data);
    }


    public function posteditImage(Request $request, $id){
        $image                   = ImageModel::find($id);

        if ($request->hasFile('img_src')) {
            File::delete('public/upload/image/'.$image->img_src);

            $file                       = $request->file('img_src');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $image->img_src             = $image_save_name;
            $file->move('public/upload/image/', $image_save_name);
        }

        $image->img_number          = $request->img_number;

        $image->img_title           = isset($request->img_title) ? $request->img_title : '';
        $image->img_title_en        = isset($request->img_title_en) ? $request->img_title_en : '';
        
        $image->img_description     = isset($request->img_description) ? $request->img_description : '';
        $image->img_description_vi  = isset($request->img_description_vi) ? $request->img_description_vi : '';
        $image->img_description_en  = isset($request->img_description_en) ? $request->img_description_en : '';
        $image->img_description_zh  = isset($request->img_description_zh) ? $request->img_description_zh : '';
        $image->img_description_ja  = isset($request->img_description_ja) ? $request->img_description_ja : '';
        $image->img_description_kr  = isset($request->img_description_kr) ? $request->img_description_kr : '';

        $image->img_link            = isset($request->img_link) ? $request->img_link : '';
        $image->img_type            = isset($request->type) ? $request->type : '';
        $image->img_show            = true;
        $image->created_at          = Carbon::now();
        $image->updated_at          = Carbon::now();
        $image->save();

        if($request->type == 'why-us'){
            return redirect()->intended('admin/template/whyus');
        } elseif($request->type == 'customer-partner'){
            return redirect()->intended('admin/template/whyus');
        } elseif($request->type == 'company-member'){
            return redirect()->intended('admin/template/whyus');
        } else {
            return redirect()->intended('admin/image');
        }
    }


    // Edit company number
    public function geteditNumber(Request $request, $id){
        $data['number_item']        = ImageModel::find($id);

        return view('admin/edit/edit_number', $data);
    }

    public function posteditNumber(Request $request, $id){
        $image                   = ImageModel::find($id);

        if ($request->hasFile('img_src')) {
            File::delete('public/upload/image/'.$image->img_src);

            $file                       = $request->file('img_src');
            $image_name                 = $file->getClientOriginalName();
            $image_save_name            = time().$image_name;
            $image->img_src             = $image_save_name;
            $file->move('public/upload/image/', $image_save_name);
        }

        $image->img_number          = $request->img_number;

        $image->img_title           = isset($request->img_title) ? $request->img_title : '';
        $image->img_title_en        = isset($request->img_title_en) ? $request->img_title_en : '';
        
        $image->img_description_vi  = isset($request->img_description_vi) ? $request->img_description_vi : '';
        $image->img_description_en  = isset($request->img_description_en) ? $request->img_description_en : '';
        $image->img_description_zh  = isset($request->img_description_zh) ? $request->img_description_zh : '';
        $image->img_description_ja  = isset($request->img_description_ja) ? $request->img_description_ja : '';
        $image->img_description_kr  = isset($request->img_description_kr) ? $request->img_description_kr : '';

        $image->img_plus_icon       = isset($request->img_plus_icon) ? true : false;

        $image->updated_at          = Carbon::now();
        $image->save();

        return redirect()->intended('admin/template/whyus');
    }







    public function getdeleteImage(Request $request, $id){
        $image = ImageModel::find($id);
        File::delete('public/upload/image/'.$image->img_src);
        ImageModel::destroy($id);

        if($request->type == 'partner'){
            return redirect()->intended('admin/template/achievement');
        } elseif($request->type == 'why-us'){
            return redirect()->intended('admin/template/whyus');
        } else {
            return redirect()->intended('admin/image');
        }

       
    }


    //Check show or hide slide image
    public function getshowImage($id){
        $image              = ImageModel::find($id);
        
        $image->img_show    = $image->img_show ? false : true;
        $image->save();

        return back();

    }


}
