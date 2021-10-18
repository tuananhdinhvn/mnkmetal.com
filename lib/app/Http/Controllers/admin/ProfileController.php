<?php

namespace App\Http\Controllers\admin;

use Auth;
use File;
use Carbon\Carbon;


use App\model\UserModel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function getProfile(){
        $data['user_id'] = UserModel::find(Auth::user()->id);
        return view('admin.profile', $data);
    }

    public function postProfile(ProfileRequest $request){
        $user               = UserModel::find(Auth::user()->id);

        if ($request->hasFile('avatar')) {
            File::delete('public/upload/info/'.$user->avatar);

            $file               = $request->file('avatar');
            $image_name         = $file->getClientOriginalName();
            $image_save_name    = time().$image_name;
            $user->avatar       = $image_save_name;
            $file->move('public/upload/info/', $image_save_name);
        }

        $user->name         = $request->name;
        $user->email        = $request->email;
        // $user->password     = bcrypt('admin123');
        $user->phone        = $request->phone;
        $user->diachi       = $request->diachi;
        $user->updated_at   = Carbon::now();
        $user->save();

        return back();
    }


    public function getChangePass(){

        return view('admin/updatePass');
    }

    public function postChangePass(ProfileRequest $request){
        $type_pass      = $request->password;
        $re_type_pass   = $request->re_password;

        

        if($type_pass === $re_type_pass){
            $user               = UserModel::find(Auth::user()->id);
            $user->password     = bcrypt($request->password);
            $user->save();
            
            return redirect()->intended('admin/profile')->with('updated_pass', 'Thay đổi mật khẩu thành công.');
        } else {
            return back()->with('pass_not_same', 'Mật khẩu không trùng khớp');
        }

        
        
    }
}
