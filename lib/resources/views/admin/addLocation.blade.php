@extends('admin.master') 
@section('title', 'Thêm location') 
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
            <h2 class="centered">Thêm location</h2>
            <div class="col-md-10 col-md-offset-1 mt mb">
                <div class="accordion" id="accordion2">

                <form method="post" enctype='multipart/form-data'>

                    <!--Logo đầu trang Favicon-->
                    <div class="accordion-group">
                        <h3>Tên location</h3>

                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <div class="form-group last">
                                        
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="form-group" style="margin-bottom: 30px;">
                                                <label class="col-sm-2 col-sm-2 control-label">Tiếng Việt:</label>
                                                <div class="col-sm-10">
                                                    <input required type="text" name="locate_name_vi" class="form-control" value="">
                                                </div>
                                            </div><br/>

                                            <div class="form-group" style="margin-bottom: 30px;">
                                                <label class="col-sm-2 col-sm-2 control-label">Tiếng Anh:</label>
                                                <div class="col-sm-10">
                                                    <input required type="text" name="locate_name_en" class="form-control" value="">
                                                </div>
                                            </div><br/>

                                            <div class="form-group" style="margin-bottom: 30px;">
                                                <label class="col-sm-2 col-sm-2 control-label">Tiếng Trung:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="locate_name_zh" class="form-control" value="">
                                                </div>
                                            </div><br/>

                                            <div class="form-group" style="margin-bottom: 60px;">
                                                <label class="col-sm-2 col-sm-2 control-label">Tiếng Nhật:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="locate_name_ja" class="form-control" value="">
                                                </div>
                                            </div>
                                            <br/>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                   


                    <input class="pull-right btn btn-primary mt" type="submit" value="Thêm">

                    {{ csrf_field() }}

                </form>

                </div>
                <!-- end accordion -->
            </div>
            <!-- col-md-10 -->
        </div>

        

    </section>

</section>

@endsection





@section('script')


@endsection