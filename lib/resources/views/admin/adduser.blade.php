@extends('admin.master') 
@section('title', 'Thêm quản trị viên')
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
                    <h3>Thêm quản trị viên</h3>
                    <br/>
                    @include('error.note')
                    <form class="form-horizontal style-form" method="post">
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên quản trị viên:</label>
                            <div class="col-sm-10">
                                <input type="text" required name="name" class="form-control" value=""> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Email đăng nhập:</label>
                            <div class="col-sm-10">
                                <input type="email" required name="email" class="form-control" value=""> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Mật khẩu đăng nhập:</label>
                            <div class="col-sm-10">
                                <input type="password" required name="password" class="form-control" value=""> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Số điện thoại:</label>
                            <div class="col-sm-10">
                                <input type="text" required name="phone" class="form-control" value=""> 
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Địa chỉ:</label>
                            <div class="col-sm-10">
                                <input type="text" required name="diachi" class="form-control" value=""> 
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Cấp bậc quản trị:</label>
                            <div class="col-lg-10 col-sm-9">
                                <select class="alert alert-primary" required name="phanquyen" style="width:200px; border: 1.5px solid #dbdbdb;">
                                   
                                        <option value="1">Admin</option>
                                        <option value="2">Editor</option>
                                        {{-- <option value="3">Guest</option> --}}
                                    
                                </select>
                            </div>
                        </div>


                        {{-- <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Phân quyền dự án:</label>
                            <div class="col-lg-10 col-sm-9">
                                <div class="col-lg-6 col-sm-12">
                                    <select class="alert alert-primary" required name="project_share_1" style="width:100%; border: 1.5px solid #dbdbdb;">
                                        <option value="0">Chọn dự án</option>
                                        @foreach ($project_list as $item)
                                            <option value="{{ $item->pro_id }}">{{ $item->pro_ten_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <select class="alert alert-primary" required name="project_share_2" style="width:100%; border: 1.5px solid #dbdbdb;">
                                        <option value="0">Chọn dự án</option>
                                        @foreach ($project_list as $item)
                                            <option value="{{ $item->pro_id }}">{{ $item->pro_ten_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <select class="alert alert-primary" required name="project_share_3" style="width:100%; border: 1.5px solid #dbdbdb;">
                                        <option value="0">Chọn dự án</option>
                                        @foreach ($project_list as $item)
                                            <option value="{{ $item->pro_id }}">{{ $item->pro_ten_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <select class="alert alert-primary" required name="project_share_4" style="width:100%; border: 1.5px solid #dbdbdb;">
                                        <option value="0">Chọn dự án</option>
                                        @foreach ($project_list as $item)
                                            <option value="{{ $item->pro_id }}">{{ $item->pro_ten_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                        </div> --}}


                        {{-- <div class="form-group last">
                            <label class="control-label col-md-2">Hình đại diện:</label>
                            <div class="col-md-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                        <input type="file" class="default" name="avatar"/>
                                        </span>
                                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                </div>
                                <span class="label label-info">NOTE!</span>
                                <span>
                                Kích thước hình ảnh tối ưu 100px X 100px
                                </span>
                            </div>
                        </div> --}}

                        


                        <div class=" pull-right">
                            <input style="width:100px;" type="submit" class="btn btn-primary" value="Thêm">
                            <a href="{{ asset('admin/users') }}">
                                <input style="width:100px;" type="button" class="btn btn-danger" value="Hủy">
                            </a>
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