@extends('admin.master') 
@section('title')
    @if($people_type=='alumni')
        Cập nhật học viên
    @elseif($people_type=='team')
        Cập nhật nhân viên
    @endif

@endsection

@section('css')
<!--External CSS-->
<link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
@endsection


@section('main')
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">

            <div class="col-lg-12">

                <div style="padding: 20px 10px 0 10px;" class="form-panel">
                    <h3>
                        @if($people_type=='alumni')
                            Cập nhật học viên
                        @elseif($people_type=='team')
                            Cập nhật nhân viên
                        @endif
                    </h3>
                    <br/>
                    @include('error.note')
                    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">
                                @if($people_type=='alumni')
                                    Tên học viên
                                @elseif($people_type=='team')
                                    Tên nhân viên
                                @endif
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="cust_ten" class="form-control" value="{{ $people_detail->cust_ten }}"> 
                            </div>
                        </div>

               
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">
                                @if($people_type=='alumni')
                                    Nơi du học:
                                @elseif($people_type=='team')
                                    Lĩnh vực làm việc:
                                @endif
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="cust_diachi" class="form-control" value="{{ $people_detail->cust_diachi }}"> 
                            </div>
                        </div>



                        <!--Type == team-->
                        @if($people_type=='team')
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">
                                    Email:
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="cust_email" class="form-control" value="{{ $people_detail->cust_email }}"> 
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">
                                    Số diện thoại:
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="cust_phone" class="form-control" value="{{ $people_detail->cust_phone }}"> 
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">
                                    Zalo:
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="cust_zalo" class="form-control" value="{{ $people_detail->cust_zalo }}"> 
                                </div>
                            </div>
						
							<div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">
                                    Năm kinh nghiệm:
                                </label>
                                <div class="col-sm-10">
                                    <input type="number" name="cust_ghichu" class="form-control" value="{{ $people_detail->cust_ghichu }}"> 
                                </div>
                            </div>
						
                        @endif
                        <!--End Type == team-->

        

                        @if($people_type=='alumni')
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nội dung đánh giá</label>
                            <div class="col-sm-10">
                                <textarea name="cust_noidung" id="" style="width:100%;" rows="10">{{ $people_detail->cust_noidung }}</textarea>
                            </div>
                        </div>
                        @endif

                        
                       


                        @if($people_type=='team')
                        <div class="form-group last">
                            <label class="control-label col-md-2">Hình đại diện:</label>
                            <div class="col-md-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; auto">
                                        <img src="{{ asset('public/upload/template/'.$people_detail->cust_photo) }}" class="image_output" style="width:100%; height:100%" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" name="cust_photo" class="default image_input" />
                                        </span>
                                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                </div>
                                <span class="label label-info">NOTE!</span>
                                <span>
                                Kích thước hình ảnh tối ưu 1920px X 1080px
                                </span>
                            </div>
                        </div>
                        @endif



                        <hr/>
                       

                        <div class=" pull-right">
                            <input style="width:100px;" type="submit" class="btn btn-primary" value="Cập nhật">
                            <a href="{{ asset('admin/'.$people_detail->cust_type) }}?type={{ $people_detail->cust_type }}">
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