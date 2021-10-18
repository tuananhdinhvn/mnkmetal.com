@extends('admin.master') 
@section('title', 'Cập nhật social')

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
                    <h3>Cập nhật social</h3>
                    <br/>
                    @include('error.note')


                    
                    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">


                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Mô tả<br>(Tiếng Việt):</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="img_description_vi" id="" style="width:100%;" rows="20">{{ $social_item->img_description_vi }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Mô tả<br>(Tiếng Anh):</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="img_description_en" id="" style="width:100%;" rows="20">{{ $social_item->img_description_en }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Mô tả<br>(Tiếng Trung):</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="img_description_zh" id="" style="width:100%;" rows="20">{{ $social_item->img_description_zh }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Mô tả<br>(Tiếng Nhật):</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="img_description_ja" id="" style="width:100%;" rows="20">{{ $social_item->img_description_ja }}</textarea>
                            </div>
                        </div>



                        <div class="form-group last">
                            <label class="control-label col-md-2">Hình ảnh:</label>
                            <div class="col-md-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 225px; height: auto;">
                                        <img src="{{ asset('public/upload/image/'.$social_item->img_src) }}" class="image_output" style="width:100%; height:100%" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" name="img_src" class="default image_input" />
                                        </span>
                                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                </div>
                                <span class="label label-info">NOTE!</span>
                                <span>
                                Kích thước hình ảnh tối ưu 400px X 400px
                                </span>
                            </div>
                        </div>


                       

                        <div class=" pull-right">
                            <input style="width:100px;" type="submit" class="btn btn-primary" value="Cập nhật">
                            <a href="{{ asset('admin/template/social') }}">
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