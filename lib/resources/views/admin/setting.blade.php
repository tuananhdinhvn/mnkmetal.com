@extends('admin.master') 
@section('title', 'Cài đặt website')
@section('main')

<!--External CSS-->
<link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />

<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">

            <div class="col-lg-12">

                <div style="padding: 20px 10px 0 10px;" class="form-panel">
                    <h3>Thông tin chung</h3>
                    <br/>
                    @include('error.note')
                    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">

                     
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên công ty<br/>(Tiếng Việt):</label>
                            <div class="col-sm-10">
                                <input required type="text" name="st_tencongty_vi" class="form-control" value="{{ $setting_item->st_tencongty_vi }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên công ty<br/>(Tiếng Anh):</label>
                            <div class="col-sm-10">
                                <input required type="text" name="st_tencongty_en" class="form-control" value="{{ $setting_item->st_tencongty_en }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên công ty<br/>(Tiếng Trung):</label>
                            <div class="col-sm-10">
                                <input required type="text" name="st_tencongty_zh" class="form-control" value="{{ $setting_item->st_tencongty_zh }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên công ty<br/>(Tiếng Nhật):</label>
                            <div class="col-sm-10">
                                <input required type="text" name="st_tencongty_ja" class="form-control" value="{{ $setting_item->st_tencongty_ja }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên công ty<br/>(Tiếng Hàn):</label>
                            <div class="col-sm-10">
                                <input required type="text" name="st_tencongty_kr" class="form-control" value="{{ $setting_item->st_tencongty_kr }}">
                            </div>
                        </div>
                        <hr/>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Địa chỉ<br/>(Tiếng Việt):</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_diachi_vi" class="form-control" value="{{ $setting_item->st_diachi_vi }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Địa chỉ<br/>(Tiếng Anh):</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_diachi_en" class="form-control" value="{{ $setting_item->st_diachi_en }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Địa chỉ<br/>(Tiếng Trung):</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_diachi_zh" class="form-control" value="{{ $setting_item->st_diachi_zh }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Địa chỉ<br/>(Tiếng Nhật):</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_diachi_ja" class="form-control" value="{{ $setting_item->st_diachi_ja }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Địa chỉ<br/>(Tiếng Hàn):</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_diachi_kr" class="form-control" value="{{ $setting_item->st_diachi_kr }}">
                            </div>
                        </div>

                        <hr/>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Địa chỉ văn phòng<br/>(Tiếng Việt):</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_diachi_office_vi" class="form-control" value="{{ $setting_item->st_diachi_office_vi }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Địa chỉ văn phòng<br/>(Tiếng Anh):</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_diachi_office_en" class="form-control" value="{{ $setting_item->st_diachi_office_en }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Địa chỉ văn phòng<br/>(Tiếng Trung):</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_diachi_office_zh" class="form-control" value="{{ $setting_item->st_diachi_office_zh }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Địa chỉ văn phòng<br/>(Tiếng Nhật):</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_diachi_office_ja" class="form-control" value="{{ $setting_item->st_diachi_office_ja }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Địa chỉ văn phòng<br/>(Tiếng Hàn):</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_diachi_office_kr" class="form-control" value="{{ $setting_item->st_diachi_office_kr }}">
                            </div>
                        </div>
                        <hr/>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Email:</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_email" class="form-control" value="{{ $setting_item->st_email }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Hotline:</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_hotline" class="form-control" value="{{ $setting_item->st_hotline }}">
                            </div>
                        </div>

                        
                        <h3>Social</h3>
                        <br/>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Twitter:</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_twitter" class="form-control" value="{{ $setting_item->st_twitter }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Pinterest:</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_pinterest" class="form-control" value="{{ $setting_item->st_pinterest }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Facebook:</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_fanpage" class="form-control" value="{{ $setting_item->st_fanpage }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Instagram:</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_insta" class="form-control" value="{{ $setting_item->st_insta }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Linkedin:</label>
                            <div class="col-sm-10">
                                <input type="text" name="st_linkedin" class="form-control" value="{{ $setting_item->st_linkedin }}">
                            </div>
                        </div>

                        
						


                        <h3>Cài đặt code bổ sung</h3>
                        <br/>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Đầu trang <code>&lt;head\&gt;</code>:</label>
                            <div class="col-sm-10">
                                <textarea name="st_codehead" id="" style="width:100%;" rows="10">{{ $setting_item->st_codehead }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Đầu body <code>&lt;body&gt;</code>:</label>
                            <div class="col-sm-10">
                                <textarea name="st_codebody" id="" style="width:100%;" rows="10">{{ $setting_item->st_codebody }}</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Cuối body <code>&lt;/body&gt;</code>:</label>
                            <div class="col-sm-10">
                                <textarea name="st_codefoot" id="" style="width:100%;" rows="10">{{ $setting_item->st_codefoot }}</textarea>
                            </div>
                        </div>


                        <hr/>

                        <h4><strong>Tối ưu SEO</strong></h4>
                        <br/>

                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Title:</label>
                            <div class="col-lg-10 col-sm-9">
                                    <input type="text" name="st_title" class="form-control" value="{{ $setting_item->st_title }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description:</label>
                            <div class="col-sm-10">
                                <textarea name="st_mota" id="" style="width:100%;" rows="7">{{ $setting_item->st_mota }}</textarea>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Keywords:</label>
                            <div class="col-lg-10 col-sm-9">
                                    <input required type="text" name="st_keyword" class="form-control" value="{{ $setting_item->st_keyword }}">
                            </div>
                        </div>
                        

                        <div class=" pull-right">
                            <input style="width:100px;" type="submit" class="btn btn-primary" value="Cập nhật">
                        </div>

                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
            <!-- col-lg-12-->
        </div>

    </section>
    <!-- /wrapper -->
</section>

@stop()