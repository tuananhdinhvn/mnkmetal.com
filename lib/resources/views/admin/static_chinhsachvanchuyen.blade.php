@extends('admin.master') 
@section('title', 'Chính sách vận chuyển')

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
                    <h3>Chính sách vận chuyển</h3>
                    <br/>
                    @include('error.note')
                    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">
                        

                        {{-- <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tiêu đề bài viết:</label>
                            <div class="col-sm-10">
                                <input type="text" name="blog_ten" class="form-control" value=""> 
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nội dung trang:</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="static_noidung" id="" style="width:100%;" rows="30"></textarea>
                            </div>
                        </div>

                        <hr/>

                        <h4><strong>Tối ưu SEO</strong></h4>
                        <br/>

                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Title:</label>
                            <div class="col-lg-10 col-sm-9">
                                    <input type="text" name="static_title" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description:</label>
                            <div class="col-sm-10">
                                <textarea name="static_description" id="" style="width:100%;" rows="7"></textarea>
                            </div>
                        </div>

                       

                        <div class=" pull-right">
                            <input style="width:100px;" type="submit" class="btn btn-primary" value="Thêm">
                            <a href="{{ asset('admin/blog') }}">
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