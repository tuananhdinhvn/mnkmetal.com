@extends('admin.master') 
@section('title', 'Chỉnh sửa hình ảnh')

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
                    <h3>@if($img_type == 'why-us') Cập nhật con số @else Cập nhật hình ảnh @endif</h3>
                    <br/>
                    @include('error.note')

                    <!--Panel heading-->
                    @if($img_type != 'why-us' && $img_type != 'partner' && $img_type != 'slide' && $img_type != 'customer-partner' && $img_type != 'company-member')
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
                    @endif
                    <!-- /panel-heading -->


                    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">
                        <div class="form-group hidden">
                            <label class="col-sm-2 col-sm-2 control-label">Tác giả:</label>
                            <div class="col-sm-10">
                                <input type="text" name="blog_nguoiviet" class="form-control" value="{{ Auth::user()->name }}">
                            </div>
                        </div>




                        <div class="panel-body">
                            <div class="tab-content">

                                @if($img_type != 'why-us' && $img_type != 'partner' && $img_type != 'slide' && $img_type != 'customer-partner' && $img_type != 'company-member')

                                <!--Tab tiếng Việt-->
                                <div class="tab-pane active vilang">
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Tiêu đề hình ảnh<br>(Tiếng Việt):</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="img_title" class="form-control" value="{{ $image_item->img_title }}"> 
                                        </div>
                                    </div>
            
            

                                    @if($img_type == 'album' || $img_type == 'partner')
                                    
                                    @else
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Nội dung mô tả<br>(Tiếng Việt):</label>
                                            <div class="col-sm-10">
                                                <textarea class="editmce" name="img_description" id="" style="width:100%;" rows="30">{{ $image_item->img_description }}</textarea>
                                            </div>
                                        </div>
                                    @endif


                                </div>

                                <!--Tab English-->
                                <div class="tab-pane enlang">
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Tiêu đề hình ảnh<br>(Tiếng Anh):</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="img_title_en" class="form-control" value="{{ $image_item->img_title_en }}"> 
                                        </div>
                                    </div>
            
            

                                    @if($img_type == 'album' || $img_type == 'partner')
                                    
                                    @else
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Nội dung mô tả<br>(Tiếng Anh):</label>
                                            <div class="col-sm-10">
                                                <textarea class="editmce" name="img_description_en" id="" style="width:100%;" rows="30">{{ $image_item->img_description_en }}</textarea>
                                            </div>
                                        </div>
                                    @endif


                                </div>

                                @endif

                            </div>
                        </div>





                        @if($img_type == 'why-us')
                        
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Con số:</label>
                                <div class="col-sm-2">
                                    <input type="text" name="img_number" min="0" class="form-control" value="{{ $image_item->img_number }}"> 
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Mô tả<br>(Tiếng Việt):</label>
                                <div class="col-sm-10">
                                    <input type="text" name="img_description_vi" class="form-control" value="{{ $image_item->img_description_vi }}"> 
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Mô tả<br>(Tiếng Anh):</label>
                                <div class="col-sm-10">
                                    <input type="text" name="img_description_en" class="form-control" value="{{ $image_item->img_description_en }}"> 
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Mô tả<br>(Tiếng Trung):</label>
                                <div class="col-sm-10">
                                    <input type="text" name="img_description_zh" class="form-control" value="{{ $image_item->img_description_zh }}"> 
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Mô tả<br>(Tiếng Nhật):</label>
                                <div class="col-sm-10">
                                    <input type="text" name="img_description_ja" class="form-control" value="{{ $image_item->img_description_ja }}"> 
                                </div>
                            </div>

                        @endif



                        


                        <div class="form-group last">
                            <label class="control-label col-md-2">@if($img_type == 'why-us') Icon @else Hình ảnh @endif :</label>
                            <div class="col-md-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 225px; height: auto">
                                        <img src="{{ asset('public/upload/image/'.$image_item->img_src) }}" class="image_output" style="width:100%; height:100%" alt="" />
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
                                    @if($img_type == 'customer-partner' || $img_type == 'company-member') Kích thước hình ảnh tối ưu 420px X 300px @else Kích thước hình ảnh tối ưu 1300px X 600px @endif
                                </span>
                            </div>
                        </div>


                       

                        <div class=" pull-right">
                            <input style="width:100px;" type="submit" class="btn btn-primary" value="Cập nhật">
                            <a  @if($img_type == 'why-us') href="{{ asset('admin/template/whyus') }}" 
                                @elseif($img_type == 'partner') href="{{ asset('admin/template/achievement') }}" 
                                @elseif($img_type == 'customer-partner' || $img_type == 'company-member') href="{{ asset('admin/template/whyus') }}" 
                                @else href="{{ asset('admin/image') }}" 
                                @endif>
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