@extends('admin.master') 
@section('title', 'Sửa danh mục bài viết') 

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
                <div class="form-panel">
                    <h4 class="mb">Chỉnh sửa danh mục bài viết</h4>
                    @include('error.note')
                    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên danh mục<br/>(Tiếng Việt): </label>
                            <div class="col-sm-10">
                                <input type="text" name="blogcat_ten" class="form-control" value="{{ $blogcat_edit->blogcat_ten }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên danh mục<br/>(Tiếng Anh): </label>
                            <div class="col-sm-10">
                                <input type="text" name="blogcat_ten_en" class="form-control" value="{{ $blogcat_edit->blogcat_ten_en }}">
                            </div>
                        </div>

                        
                        <div class="form-group hidden">
                            <label class="col-sm-2 col-sm-2 control-label">Editor:</label>
                            <div class="col-sm-10">
                                <input type="text" name="blogcat_editor" class="form-control" value="{{ Auth::user()->name }}">
                            </div>
                        </div>


                        <hr/>

                        <h4><strong>Tối ưu SEO</strong></h4>
                        <br/>

                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Title:</label>
                            <div class="col-lg-10 col-sm-9">
                                    <input type="text" name="blogcat_title" class="form-control" value="{{ $blogcat_edit->blogcat_title }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description:</label>
                            <div class="col-sm-10">
                                <textarea name="blogcat_mota" id="" style="width:100%;" rows="7">{{ $blogcat_edit->blogcat_mota }}</textarea>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Keyword:</label>
                            <div class="col-lg-10 col-sm-9">
                                    <input type="text" name="blogcat_keyword" class="form-control" value="{{ $blogcat_edit->blogcat_keyword }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">URL</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." readonly value="{{ $blogcat_edit->blogcat_slug }}">
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="row pull-right" style="padding-right:50px">
                                <input style="width:100px;" type="submit" class="btn btn-primary" value="Cập nhật">
                                <a href="{{ asset('admin/'.$blogcat_type.'cat?type='.$blogcat_type) }}"><input style="width:100px;" type="button" class="btn btn-danger" value="Hủy"></a>
                            </div>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
            <!-- col-lg-12-->
        </div>
        <!-- /row -->

    </section>
    <!-- /wrapper -->
</section>

@stop