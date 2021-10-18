<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\SettingModel;
use App\Http\Requests\SettingRequest;

class SettingControllerler extends Controller
{
    public function getSetting(){
        $data['setting_item'] = SettingModel::find(1);
        return view('admin/setting', $data);
    }
    public function postgetSetting(SettingRequest $request){
        $setting                    = SettingModel::find(1);
        
        $setting->st_tencongty      = $request->st_tencongty;
        $setting->st_tencongty_vi   = $request->st_tencongty_vi;
        $setting->st_tencongty_en   = $request->st_tencongty_en;
        $setting->st_tencongty_zh   = $request->st_tencongty_zh;
        $setting->st_tencongty_ja   = $request->st_tencongty_ja;
        $setting->st_tencongty_kr   = $request->st_tencongty_kr;

        $setting->st_diachi         = $request->st_diachi;
        $setting->st_diachi_vi      = $request->st_diachi_vi;
        $setting->st_diachi_en      = $request->st_diachi_en;
        $setting->st_diachi_zh      = $request->st_diachi_zh;
        $setting->st_diachi_ja      = $request->st_diachi_ja;
        $setting->st_diachi_kr      = $request->st_diachi_kr;

        $setting->st_diachi_office_vi      = $request->st_diachi_office_vi;
        $setting->st_diachi_office_en      = $request->st_diachi_office_en;
        $setting->st_diachi_office_zh      = $request->st_diachi_office_zh;
        $setting->st_diachi_office_ja      = $request->st_diachi_office_ja;
        $setting->st_diachi_office_kr      = $request->st_diachi_office_kr;

        $setting->st_email          = $request->st_email;

        $setting->st_hotline        = $request->st_hotline;
        $setting->st_hotline_en     = $request->st_hotline_en;
        $setting->st_hotline_zh     = $request->st_hotline_zh;
        $setting->st_hotline_ja     = $request->st_hotline_ja;
        
        $setting->st_fanpage        = $request->st_fanpage;
        $setting->st_skype          = $request->st_skype;
        $setting->st_github         = $request->st_github;
        $setting->st_twitter        = $request->st_twitter;
        $setting->st_youtube        = $request->st_youtube;
        $setting->st_insta          = $request->st_insta;
        $setting->st_linkedin       = $request->st_linkedin;
        $setting->st_pinterest      = $request->st_pinterest;

		// Hotline support
        $setting->st_name_bot_1			= $request->st_name_bot_1;
        $setting->st_name_bot_2			= $request->st_name_bot_2;
        $setting->st_name_bot_3    		= $request->st_name_bot_3;
        $setting->st_name_bot_4  		= $request->st_name_bot_4;
		$setting->st_hotline_bot_1		= $request->st_hotline_bot_1;
        $setting->st_hotline_bot_2		= $request->st_hotline_bot_2;
        $setting->st_hotline_bot_3    	= $request->st_hotline_bot_3;
        $setting->st_hotline_bot_4  	= $request->st_hotline_bot_4;
		
		// Social
        $setting->st_social_insta      = $request->st_social_insta;
        $setting->st_social_twitter    = $request->st_social_twitter;
        $setting->st_social_youtube    = $request->st_social_youtube;
        $setting->st_social_pinterest  = $request->st_social_pinterest;
		$setting->st_social_zalo       = $request->st_social_zalo;
		
		
        // Chi nhánh 1
        $setting->st_branch_name_1      = $request->st_branch_name_1;
        $setting->st_branch_name_1_en   = $request->st_branch_name_1_en;

        $setting->st_branch_add_1       = $request->st_branch_add_1;
        $setting->st_branch_add_1_en    = $request->st_branch_add_1_en;

        $setting->st_branch_hotline_1   = $request->st_branch_hotline_1;
        $setting->st_branch_email_1     = $request->st_branch_email_1;

        // Chi nhánh 2
        $setting->st_branch_name_2      = $request->st_branch_name_2;
        $setting->st_branch_name_2_en   = $request->st_branch_name_2_en;

        $setting->st_branch_add_2       = $request->st_branch_add_2;
        $setting->st_branch_add_2_en    = $request->st_branch_add_2_en;

        $setting->st_branch_hotline_2   = $request->st_branch_hotline_2;
        $setting->st_branch_email_2     = $request->st_branch_email_2;

        // Giấy phép kinh doanh
        $setting->st_permission_code    = $request->st_permission_code;
        $setting->st_permission_date    = $request->st_permission_date;
        $setting->st_permission_place   = $request->st_permission_place;
        $setting->st_website            = $request->st_website;


        // if ($request->hasFile('st_logohead')) {
        //     File::delete('public/upload/info/'.$setting->st_logohead);

        //     $file                   = $request->file('st_logohead');
        //     $image_name             = $file->getClientOriginalName();
        //     $image_save_name        = time().$image_name;
        //     $setting->st_logohead   = $image_save_name;
        //     $file->move('public/upload/info/', $image_save_name);
        // }


        $setting->st_codehead   = $request->st_codehead;
        $setting->st_codebody   = $request->st_codebody;
        $setting->st_codefoot   = $request->st_codefoot;
        $setting->st_title      = $request->st_title;
        $setting->st_mota       = $request->st_mota;
        $setting->st_keyword    = $request->st_keyword;
        $setting->updated_at    = Carbon::now();
        $setting->save();
        return back();
    }
}
