@extends('admin.master') 
@section('title', 'Cập nhật profile') 

@section('css')
<link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />


<!--Css bootstrap fileinput-->
<link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/all.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/font-awesome.min.css" >

@endsection

@section('script')
    <script src="js/fileinput.min.js"></script>
    <script src="js/theme.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>


    
@endsection


@section('main')

<style>
    .main-section{
        margin: 0 auto;
        padding: 0 20px 0 0;
        width: 100%
    }
</style>


<section id="main-content">


    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">

    <section class="wrapper">
        
       

        <div class="row content-panel">
            <h2 class="centered">Cập nhật profile</h2>
            <div class="col-md-12 mt mb">
                <div class="accordion" id="accordion2">

                <form method="post" enctype='multipart/form-data'>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tên tài liệu<br>(Tiếng Việt): </label>
                        <div class="col-sm-10">
                            <input type="text" required name="event_ten_vi" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tên tài liệu<br>(Tiếng Anh): </label>
                        <div class="col-sm-10">
                            <input type="text" required name="event_ten_en" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tên tài liệu<br>(Tiếng Trung): </label>
                        <div class="col-sm-10">
                            <input type="text" required name="event_ten_zh" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tên tài liệu<br>(Tiếng Nhật): </label>
                        <div class="col-sm-10">
                            <input type="text" required name="event_ten_ja" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Phân loại: </label>
                        <div class="col-lg-4 col-sm-3">
                            <select id="procat-main" required class="alert alert-primary" name="event_category" style="width:200px; border: 1.5px solid #dbdbdb;">
                                <option>Chọn status</option>
                                <option value="doc">Document</option>
                                <option value="vid">Video</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Link<br>: </label>
                        <div class="col-sm-10">
                            <input type="text" required name="event_link" class="form-control">
                        </div>
                    </div>
                
                    

                    <div class="form-group">
                        <div class="row pull-right" style="padding-right:50px">
                            <input style="width:100px;" type="submit" class="btn btn-primary fileinput-upload fileinput-upload-button" value="Thêm">
                            <a href="{{ asset('admin/template/whyus') }}"><input style="width:100px;" type="button" class="btn btn-danger" value="Hủy"></a>
                        </div>
                    </div>
                    {{ csrf_field() }}

                </form>

                </div>
                <!-- end accordion -->
            </div>
            <!-- col-md-10 -->
        </div>



    </section>
    <!-- /wrapper -->

</form>
</section>

@endsection

@section('scriptajax')

@endsection