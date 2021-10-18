@extends('admin.master') 
@section('title', 'Chỉnh sửa bài viết')


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
                    <h3>Chỉnh sửa bài viết</h3>
                    <br/>
                    @include('error.note')

                  

                    
                    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">
                        
                    

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">@if($blog_type == 'blog') Tên bài viết <br>(Tiếng Việt) @endif</label>
                            <div class="col-sm-10">
                                <input type="text" name="blog_ten_vi" class="form-control" value="{{ $blog_edit->blog_ten_vi }}"> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">@if($blog_type == 'blog') Tên bài viết <br>(Tiếng Anh) @endif</label>
                            <div class="col-sm-10">
                                <input type="text" name="blog_ten_en" class="form-control" value="{{ $blog_edit->blog_ten_en }}"> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">@if($blog_type == 'blog') Tên bài viết <br>(Tiếng Trung) @endif</label>
                            <div class="col-sm-10">
                                <input type="text" name="blog_ten_zh" class="form-control" value="{{ $blog_edit->blog_ten_zh }}"> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">@if($blog_type == 'blog') Tên bài viết <br>(Tiếng Nhật) @endif</label>
                            <div class="col-sm-10">
                                <input type="text" name="blog_ten_ja" class="form-control" value="{{ $blog_edit->blog_ten_ja }}"> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">@if($blog_type == 'blog') Tên bài viết <br>(Tiếng Hàn) @endif</label>
                            <div class="col-sm-10">
                                <input type="text" name="blog_ten_kr" class="form-control" value="{{ $blog_edit->blog_ten_kr }}"> 
                            </div>
                        </div>

                        <div class="form-group last">
                            <label class="control-label col-md-2">Hình đại diện:</label>
                            <div class="col-md-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: auto;">
                                        <img src="{{ asset('public/upload/blog/'.$blog_edit->blog_thumb) }}" class="image_output" alt="{{ $blog_edit->blog_ten }}" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" name="blog_thumb" class="default image_input" />
                                        </span>
                                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                </div>
                                <span class="label label-info">NOTE!</span>
                                <span>
                                Kích thước hình ảnh tối ưu 1600px X 1060px
                                </span>
                            </div>
                        </div>

                        <hr/>





                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">@if($blog_type == 'blog') Nội dung bài viết<br>(Tiếng Việt) @endif</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="blog_noidung_vi" id="" style="width:100%;" rows="20">{{ $blog_edit->blog_noidung_vi }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">@if($blog_type == 'blog') Nội dung bài viết<br>(Tiếng Anh) @endif</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="blog_noidung_en" id="" style="width:100%;" rows="20">{{ $blog_edit->blog_noidung_en }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">@if($blog_type == 'blog') Nội dung bài viết<br>(Tiếng Trung) @endif</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="blog_noidung_zh" id="" style="width:100%;" rows="20">{{ $blog_edit->blog_noidung_zh }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">@if($blog_type == 'blog') Nội dung bài viết<br>(Tiếng Nhật) @endif</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="blog_noidung_ja" id="" style="width:100%;" rows="20">{{ $blog_edit->blog_noidung_ja }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">@if($blog_type == 'blog') Nội dung bài viết<br>(Tiếng Hàn) @endif</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="blog_noidung_kr" id="" style="width:100%;" rows="20">{{ $blog_edit->blog_noidung_kr }}</textarea>
                            </div>
                        </div>





                        <div class="form-group hidden">
                            <label class="col-sm-2 col-sm-2 control-label">Editor:</label>
                            <div class="col-sm-10">
                                <input type="text" name="blog_editor" class="form-control" value="{{ Auth::user()->name }}">
                            </div>
                        </div>





                        <div class=" pull-right">
                            <input style="width:100px;" type="submit" class="btn btn-primary" value="Cập nhật">
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