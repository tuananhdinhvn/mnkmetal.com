@extends('admin.master') 
@section('title', 'Giao diện trang chủ') 
@section('main')


<link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />

<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- /row -->
        <div class="row content-panel">
            <h2 class="centered">Giao diện chân trang</h2>
            <div class="col-md-10 col-md-offset-1 mt mb">
                <div class="accordion" id="accordion2">

                <form method="post" enctype='multipart/form-data'>

                    <div class="col-md-6">
                        <img src="{{ asset('public/template/footer.png') }}" style="width:100%"/>
                    </div>

                    <div class="col-md-6">
                        <h3>1. Logo chân trang:</h3>

                        <div class="col-md-offset-1">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <img class="image_output" src="{{ asset('public/upload/template/'.$footer_item->footer_logo) }}" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-theme02 btn-file">
                                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                        <input type="file" name="footer_logo"class="default image_input" />
                                    </span>
                                    <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                        
                        <h3>2. Mô tả:</h3>
                        <div class="col-md-offset-1">
                            <textarea class="form-control" name="footer_description" rows="7" style="width:100%">{{ $footer_item->footer_description }}</textarea>
                        </div>


                        <h3>3. Thông tin:</h3>
                        <div class="col-md-offset-1">
                            <label>Địa chỉ:</label>
                            <p><input class="form-control" type="text" name="footer_address" style="width:100%" value="{{ $footer_item->footer_address }}"></p>
                            <label>Email:</label>
                            <p><input class="form-control" type="text" name="footer_email" style="width:100%" value="{{ $footer_item->footer_email }}"></p>
                            <label>Số điện thoại:</label>
                            <p><input class="form-control" type="text" name="footer_phone" style="width:100%" value="{{ $footer_item->footer_phone }}"></p>
                        </div>

                        <h3>4. Link Fanpage:</h3>
                        <div class="col-md-offset-1">
                            <p><input class="form-control" type="text" name="footer_facebook" style="width:100%" value="{{ $footer_item->footer_facebook }}"></p>
                        </div>
                    </div>                      


                    <input class="pull-right btn btn-primary mt" type="submit" value="Cập nhật">

                    {{ csrf_field() }}

                </form>

                </div>
                <!-- end accordion -->
            </div>
            <!-- col-md-10 -->
        </div>

      

    </section>

</section>

@stop