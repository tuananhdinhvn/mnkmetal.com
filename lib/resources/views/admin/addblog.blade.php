@extends('admin.master') 
@section('title', 'Thêm bài viết')

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
                    <h3>Thêm bài viết</h3>
                    <br/>
                    @include('error.note')
                    
                    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">
                        



                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">@if($blog_type == 'blog') Tên bài viết <br>(Tiếng Việt) @endif</label>
                            <div class="col-sm-10">
                                <input type="text" name="blog_ten_vi" class="form-control" value=""> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">@if($blog_type == 'blog') Tên bài viết <br>(Tiếng Anh) @endif</label>
                            <div class="col-sm-10">
                                <input type="text" name="blog_ten_en" class="form-control" value=""> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">@if($blog_type == 'blog') Tên bài viết <br>(Tiếng Trung) @endif</label>
                            <div class="col-sm-10">
                                <input type="text" name="blog_ten_zh" class="form-control" value=""> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">@if($blog_type == 'blog') Tên bài viết <br>(Tiếng Nhật) @endif</label>
                            <div class="col-sm-10">
                                <input type="text" name="blog_ten_ja" class="form-control" value=""> 
                            </div>
                        </div>

                        <div class="form-group last">
                            <label class="control-label col-md-2">Hình đại diện:</label>
                            <div class="col-md-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 120px;">
                                        <img src="{{ asset('public/noimage.jpg') }}" class="image_output" style="width:100%; height:100%" alt="" />
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
                                Kích thước hình ảnh tối ưu 420px X 300px
                                </span>
                            </div>
                        </div>

                        <hr/>

                     

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">@if($blog_type == 'blog') Nội dung bài viết<br>(Tiếng Việt) @endif</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="blog_noidung_vi" id="" style="width:100%;" rows="20"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">@if($blog_type == 'blog') Nội dung bài viết<br>(Tiếng Anh) @endif</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="blog_noidung_en" id="" style="width:100%;" rows="20"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">@if($blog_type == 'blog') Nội dung bài viết<br>(Tiếng Trung) @endif</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="blog_noidung_zh" id="" style="width:100%;" rows="20"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">@if($blog_type == 'blog') Nội dung bài viết<br>(Tiếng Nhật) @endif</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="blog_noidung_ja" id="" style="width:100%;" rows="20"></textarea>
                            </div>
                        </div>








                        <div class="form-group hidden">
                            <label class="col-sm-2 col-sm-2 control-label">Tác giả:</label>
                            <div class="col-sm-10">
                                <input type="text" name="blog_nguoiviet" class="form-control" value="{{ Auth::user()->name }}">
                            </div>
                        </div>

                        
                        {{-- @if($blog_type != 'gioi-thieu' && $blog_type != 'alumni' && $blog_type != 'about')
                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-2 col-sm-3">Danh mục:</label>
                            <div class="col-lg-10 col-sm-9">
                                <select class="alert alert-primary" name="blog_blogcatid" style="width:200px; border: 1.5px solid #dbdbdb;">
                                    @foreach ($blogcat_list as $blogcat)
                                        <option value="{{ $blogcat->blogcat_id }}" >{{ $blogcat->blogcat_ten }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @endif --}}




                        <hr/>

                       

                      
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Mô tả ngắn <br/>(Tiếng Việt):</label>
                            <div class="col-sm-10">
                                <textarea name="blog_mota_vi" id="" style="width:100%;" rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Mô tả ngắn <br/>(Tiếng Anh):</label>
                            <div class="col-sm-10">
                                <textarea name="blog_mota_en" id="" style="width:100%;" rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Mô tả ngắn <br/>(Tiếng Trung):</label>
                            <div class="col-sm-10">
                                <textarea name="blog_mota_zh" id="" style="width:100%;" rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Mô tả ngắn <br/>(Tiếng Nhật):</label>
                            <div class="col-sm-10">
                                <textarea name="blog_mota_ja" id="" style="width:100%;" rows="7"></textarea>
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