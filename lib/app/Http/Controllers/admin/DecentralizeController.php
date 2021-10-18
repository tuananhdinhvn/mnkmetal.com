<?php
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

use Cart;
use Carbon\Carbon;
use Mail;

use App\model\UserModel;
use App\model\ProductModel;

use App\Http\Requests\AddUserRequest;

use App\Http\Requests\EditUserRequest;

class DecentralizeController extends Controller
{
    public function getUser(){
        $data['user_list']          = UserModel::where('phanquyen', '!=', 4)->get();
        return view('admin/user', $data);
    }

    public function addUser(){
        $data['project_list']       =  ProductModel::where('pro_type', 'project')->get();

        return view('admin/adduser', $data);
    }

    // public function postaddUser(AddUserRequest $request){
    //     $user               = new UserModel;
    //     $user->name         = $request->name;
    //     $user->email        = $request->email;
    //     $user->password     = bcrypt($request->password);
    //     $user->phone        = $request->phone;
    //     $user->diachi       = $request->diachi;
    //     $user->phanquyen    = $request->phanquyen;
    //     $user->avatar       = 'avatar.png';
    //     $user->created_at   = Carbon::now();
    //     $user->updated_at   = Carbon::now();
    //     $user->save();
    //     return redirect()->intended('admin/users');
    // }

    public function postaddUser(AddUserRequest $request){
        $pass_send_mail     = $request->password;

        $id_user = UserModel::insertGetId([
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => bcrypt($request->password),
            'phone'             => $request->phone,
            'diachi'            => $request->diachi,
            'phanquyen'         => $request->phanquyen,
            'avatar'            => 'avatar.png',

            'project_share_1'   => $request->project_share_1,
            'project_share_2'   => $request->project_share_2,
            'project_share_3'   => $request->project_share_3,
            'project_share_4'   => $request->project_share_4,

            'xacnhan'           => true,
            // 'code_active'  => Str::random(47),
            // 'code_active'  => 'actived',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ]);


        // // Send confirm mail
        // $user_info = UserModel::find($id_user);

        // $user_name      = $user_info->name;
        // $password       = $pass_send_mail;
        // $mail_user      = $user_info->email;
        // $code_active    = $user_info->code_active;

        // $data = [
        //     'name'  => $user_name,
        //     'pass'  => $password,
        //     'email' => $mail_user,
        //     'code'  => $code_active,
        // ];

        // Mail::send('mail.confirm_register', $data, function ($message) use ($mail_user, $user_name) {
            
        //     $message->from('tuananhdinhcs@gmail.com', 'ISET education');
        //     $message->to($mail_user, $user_name);
        //     $message->subject('Xác nhận kích hoạt tài khoản quản trị ISET education');
        // });

        return redirect()->intended('admin/users')->with('check_mail', 'Tài khoản quản trị đã được tạo');
        // return redirect()->intended('admin/users');
    }



    public function editUser($id){
        $data['user_item']          = UserModel::find($id);
        $data['project_list']       =  ProductModel::where('pro_type', 'project')->get();

        return view('admin/edituser', $data);
    }
    public function posteditUser(EditUserRequest $request, $id){
        $user                   = UserModel::find($id);
        $user->name             = $request->name;
        $user->email            = $request->email;
        // $user->password     = bcrypt($request->password);
        $user->phone            = $request->phone;
        $user->diachi           = $request->diachi;
        $user->phanquyen        = $request->phanquyen;

        $user->project_share_1  = $request->project_share_1;
        $user->project_share_2  = $request->project_share_2;
        $user->project_share_3  = $request->project_share_3;
        $user->project_share_4  = $request->project_share_4;

        $user->updated_at   = Carbon::now();
        $user->save();
        return redirect()->intended('admin/users');
    }


    public function deleteUser($id){
        UserModel::destroy($id);
        return back();
    }
}
