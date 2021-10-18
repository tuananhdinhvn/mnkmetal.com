<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\StaticPageModel;
use App\Http\Requests\StaticPageRequest;

use Carbon\Carbon;

class StaticPageController extends Controller
{
    //Trang giới thiệu
    public function getGioithieu(){
        $data['static_item'] = StaticPageModel::find(1);
        return view('admin/static_page', $data);
    }

    public function postGioithieu(StaticPageRequest $request){
        $static                     = StaticPageModel::find(1);
        $static->static_ten         = "Giới thiệu";
        $static->static_slug        = "gioi-thieu";
        $static->static_noidung     = $request->static_noidung;
        $static->static_noidung_en  = $request->static_noidung_en;
        $static->static_type        = "gioi-thieu";
        $static->static_title       = $request->static_title;
        $static->static_description = $request->static_description;
        $static->static_keyword     = $request->static_keyword;
        $static->updated_at         = Carbon::now();
        $static->save();
        return back();
    }

    //Trang tuyển dụng
    public function getTuyendung(){
        $data['static_item'] = StaticPageModel::find(2);
        return view('admin/static_page', $data);
    }

    public function postTuyendung(StaticPageRequest $request){
        $static                     = StaticPageModel::find(2);
        $static->static_ten         = "Tuyển dụng";
        $static->static_slug        = "tuyen-dung";
        $static->static_noidung     = $request->static_noidung;
        $static->static_noidung_en  = $request->static_noidung_en;
        $static->static_type        = "tuyen-dung";
        $static->static_title       = $request->static_title;
        $static->static_description = $request->static_description;
        $static->static_keyword     = $request->static_keyword;
        $static->updated_at         = Carbon::now();
        $static->save();
        return back();
    }

    //Chính sách bảo mật
    public function getChinhSachBaoMat(){
        $data['static_item'] = StaticPageModel::find(3);
        return view('admin/static_page', $data);
    }

    public function postChinhSachBaoMat(StaticPageRequest $request){
        $static                     = StaticPageModel::find(3);
        $static->static_ten         = "Chính sách bảo mật";
        $static->static_slug        = "chinh-sach-bao-mat";
        $static->static_noidung     = $request->static_noidung;
        $static->static_noidung_en  = $request->static_noidung_en;
        $static->static_type        = "chinh-sach-bao-mat";
        $static->static_title       = $request->static_title;
        $static->static_description = $request->static_description;
        $static->static_keyword     = $request->static_keyword;
        $static->updated_at         = Carbon::now();
        $static->save();
        return back();
    }

    //Hướng dẫn mua hàng
    public function getHuongDanMuaHang(){
        $data['static_item'] = StaticPageModel::find(4);
        return view('admin/static_page', $data);
    }

    public function postHuongDanMuaHang(StaticPageRequest $request){
        $static                     = StaticPageModel::find(4);
        $static->static_ten         = "Hướng dẫn mua hàng";
        $static->static_slug        = "huong-dan-mua-hang";
        $static->static_noidung     = $request->static_noidung;
        $static->static_noidung_en  = $request->static_noidung_en;
        $static->static_type        = "huong-dan-mua-hang";
        $static->static_title       = $request->static_title;
        $static->static_description = $request->static_description;
        $static->static_keyword     = $request->static_keyword;
        $static->updated_at         = Carbon::now();
        $static->save();
        return back();
    }

    //Chính sách vận chuyển
    public function getChinhSachVanChuyen(){
        $data['static_item'] = StaticPageModel::find(5);
        return view('admin/static_page', $data);
    }

    public function postChinhSachVanChuyen(StaticPageRequest $request){
        $static                     = StaticPageModel::find(5);
        $static->static_ten         = "Chính sách vận chuyển";
        $static->static_slug        = "chinh-sach-van-chuyen";
        $static->static_noidung     = $request->static_noidung;
        $static->static_noidung_en  = $request->static_noidung_en;
        $static->static_type        = "chinh-sach-van-chuyen";
        $static->static_title       = $request->static_title;
        $static->static_description = $request->static_description;
        $static->static_keyword     = $request->static_keyword;
        $static->updated_at         = Carbon::now();
        $static->save();
        return back();
    }

    //Chính sách bảo hành
    public function getChinhSachBaoHanh(){
        $data['static_item'] = StaticPageModel::find(6);
        return view('admin/static_page', $data);
    }

    public function postChinhSachBaoHanh(StaticPageRequest $request){
        $static                     = StaticPageModel::find(6);
        $static->static_ten         = "Chính sách bảo hành";
        $static->static_slug        = "chinh-sach-bao-hanh";
        $static->static_noidung     = $request->static_noidung;
        $static->static_noidung_en  = $request->static_noidung_en;
        $static->static_type        = "chinh-sach-bao-hanh";
        $static->static_title       = $request->static_title;
        $static->static_description = $request->static_description;
        $static->static_keyword     = $request->static_keyword;
        $static->updated_at         = Carbon::now();
        $static->save();
        return back();
    }

    //Hướng dẫn thanh toán
    public function getHuongDanThanhToan(){
        $data['static_item'] = StaticPageModel::find(7);
        return view('admin/static_page', $data);
    }

    public function postHuongDanThanhToan(StaticPageRequest $request){
        $static                     = StaticPageModel::find(7);
        $static->static_ten         = "Hướng dẫn thanh toán";
        $static->static_slug        = "huong-dan-thanh-toan";
        $static->static_noidung     = $request->static_noidung;
        $static->static_noidung_en  = $request->static_noidung_en;
        $static->static_type        = "huong-dan-thanh-toan";
        $static->static_title       = $request->static_title;
        $static->static_description = $request->static_description;
        $static->static_keyword     = $request->static_keyword;
        $static->updated_at         = Carbon::now();
        $static->save();
        return back();
    }

    //Câu hỏi thường gặp
    public function getCauHoiThuongGap(){
        $data['static_item'] = StaticPageModel::find(8);
        return view('admin/static_page', $data);
    }

    public function postCauHoiThuongGap(StaticPageRequest $request){
        $static                     = StaticPageModel::find(8);
        $static->static_ten         = "Câu hỏi thường gặp";
        $static->static_slug        = "cau-hoi-thuong-gap";
        $static->static_noidung     = $request->static_noidung;
        $static->static_noidung_en  = $request->static_noidung_en;
        $static->static_type        = "cau-hoi-thuong-gap";
        $static->static_title       = $request->static_title;
        $static->static_description = $request->static_description;
        $static->static_keyword     = $request->static_keyword;
        $static->updated_at         = Carbon::now();
        $static->save();
        return back();
    }

}
