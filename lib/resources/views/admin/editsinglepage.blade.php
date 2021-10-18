@extends('admin.master') 
@section('title', 'Chỉnh sửa trang')
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
                    <h3>Chỉnh sửa trang</h3>
                    <br/>
                    @include('error.note')
                    <form class="form-horizontal style-form" method="post">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tiêu đề trang:</label>
                            <div class="col-sm-10">
                                <input type="text" name="sp_ten" class="form-control" value="Tên trang">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nội dung trang:</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="sp_noidung" id="" style="width:100%;" rows="30">Nội dung trang</textarea>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Hiển thị:</label>
                            <div class="col-lg-10 col-sm-9">
                                <input type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="sp_hienthi" />
                            </div>
                        </div>

                        <hr/>

                        <h4><strong>Tối ưu SEO</strong></h4>
                        <br/>

                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Title:</label>
                            <div class="col-lg-10 col-sm-9">
                                <input type="text" name="sp_title" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description:</label>
                            <div class="col-sm-10">
                                <textarea name="sp_mota" id="" style="width:100%;" rows="7">Mô tả trang</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">URL:</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." readonly value="Slug trang">
                            </div>
                        </div>

                        <div class=" pull-right">
                            <input style="width:100px;" type="submit" class="btn btn-primary" value="Cập nhật">
                            <a href="{{ asset('admin/singlepage') }}">
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