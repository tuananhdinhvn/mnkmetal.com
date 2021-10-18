@extends('admin.master') 
@section('title', 'Thêm sự kiện') 

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

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
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
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="col-lg-12 mt">
                <div class="row content-panel">

                    <h3 class="mb mt">Thêm sự kiện</h3>
                    <br>
                    @include('error.note')


                    <!--Panel heading-->
                    <div class="panel-heading">
                        <ul class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a data-toggle="tab" href=".vilang">Tiếng Việt</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href=".enlang" class="contact-map">English</a>
                        </li>
                        </ul>
                    </div>
                    <!-- /panel-heading -->

                    <div class="panel-body">
                        <div class="tab-content">

                            
                            <!--Tab tiếng Việt-->
                            <div class="tab-pane active vilang">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Tên sự kiện<br>(Tiếng Việt): </label>
                                    <div class="col-sm-10">
                                        <input required type="text" name="event_ten" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Giới thiệu sự kiện<br>(Tiếng Việt):</label>
                                    <div class="col-sm-10">
                                        <textarea class="editmce" name="event_des" id="" style="width:100%;" rows="20"></textarea>
                                    </div>
                                </div>
                                


                            </div>

                            <!--Tab English-->
                            <div class="tab-pane enlang">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Tên sự kiện<br>(Tiếng Anh): </label>
                                    <div class="col-sm-10">
                                        <input required class="form-control" type="text" name="event_ten_en">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Giới thiệu sự kiện<br>(Tiếng Anh):</label>
                                    <div class="col-sm-10">
                                        <textarea class="editmce form-control" name="event_des_en" id="" style="width:100%;" rows="20"></textarea>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!--End transfer tab-->

        
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel" style="margin:0">

                        <div class="form-group hidden">
                            <label class="col-sm-2 col-sm-2 control-label">Tác giả:</label>
                            <div class="col-sm-10">
                                <input type="text" name="event_author" class="form-control" value="{{ Auth::user()->name }}">
                            </div>
                        </div>

                        <div class="form-group last">
                            <label class="control-label col-md-2">Banner sự kiện:</label>
                            <div class="col-md-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: auto;">
                                        <img src="{{ asset('public/noimage.jpg') }}" class="image_output" style="width:100%; height:100%" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" name="event_thumb" class="default image_input" />
                                        </span>
                                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                </div>
                                <span class="label label-info">NOTE!</span>
                                <span>
                                Kích thước hình ảnh tối ưu 450px X 450px
                                </span>
                            </div>
                        </div>



                        <div class="form-group ">

                            <label for="newsletter" class="control-label col-lg-2 col-sm-2">Chọn ngày kết thúc:</label>
                            <div class="col-lg-10 col-sm-1">

                                <div class="col-lg-4 col-sm-12" style="padding-left: 0">
                                    <p><label for="newsletter" class="control-label">Ngày:</label></p>
                                    <select id="procat-main" required class="alert alert-primary" name="event_end_day" style="width: 100%; border: 1.5px solid #dbdbdb;">
                                        <option>Chọn ngày</option>
                                        @for ($i =1; $i <= 31; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-lg-4 col-sm-12" style="padding-left: 0">
                                    <p><label for="newsletter" class="control-label">Tháng:</label></p>
                                    <select id="procat-main" required class="alert alert-primary" name="event_end_month" style="width: 100%; border: 1.5px solid #dbdbdb;">
                                        <option>Chọn tháng</option>
                                        @foreach ($months as $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-4 col-sm-12" style="padding-left: 0">
                                    <p><label for="newsletter" class="control-label">Năm:</label></p>
                                    <input required type="number" name="event_end_year" min="2000" style="width: 100%; border: 1.5px solid #dbdbdb; height: 55px; border-radius: 5px">
                                </div>
                                
                            </div>

                        </div>





                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Thời gian kết thúc: </label>
                            <div class="col-sm-4">
                                <div class="input-group bootstrap-timepicker">
                                    <input type="text" name="event_end_time" class="form-control timepicker-24">
                                    <span class="input-group-btn">
                                    <button class="btn btn-theme04" type="button"><i class="fa fa-clock-o"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div> 


                        
                        

                    
                        <div class="form-group">
                            <div class="row pull-right" style="padding-right:50px">
                                <input style="width:100px;" type="submit" class="btn btn-primary fileinput-upload fileinput-upload-button" value="Thêm">
                                <a href="{{ asset('admin/product') }}"><input style="width:100px;" type="button" class="btn btn-danger" value="Hủy"></a>
                            </div>
                        </div>
                        {{ csrf_field() }}
                        {{-- </form> --}}
                    </div>
                </div>
                <!-- col-lg-12-->
            </div>
            <!-- /row -->

        </section>
        <!-- /wrapper -->

    </form>
    </section>

@endsection


<!-- Procat child auto filter -->
@section('scriptajax')
<script>
    // $(document).ready(function(){
    //     $('#procat-main').change(function(){
    //         var id_procat_main = $(this).val();
    //         var currentlink = window.location.pathname;

    //         $.get(currentlink + "/procat-child/"+id_procat_main, function(data){
    //             $("#procat-child").html(data);
    //         });
            
    //     });
    // });
</script>
@endsection

@section('script')
    <script src="lib/jquery/jquery.min.js"></script>

    <script src="js/fileinput.min.js"></script>
    <script src="js/theme.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>


    <!--script for this page-->
    <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script src="lib/advanced-form-components.js"></script>
@endsection