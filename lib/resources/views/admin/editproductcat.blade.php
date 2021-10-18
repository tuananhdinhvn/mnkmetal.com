@extends('admin.master') 
@section('title', 'Cập nhật quốc gia')

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

    <form class="form-horizontal style-form" enctype="multipart/form-data" method="post">


        <section class="wrapper">



            <!-- BASIC FORM ELELEMNTS -->
            <div class="col-lg-12 mt">
                <div class="row content-panel">

                    <h3>Cập nhật quốc gia</h3>
                    <br/>
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
                                    <label class="col-sm-2 col-sm-2 control-label">Tên nước<br>(Tiếng Việt): </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="procat_ten" class="form-control" value="{{ $edit_procat->procat_ten }}"> 
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Giới thiệu chung<br>(Tiếng Việt):</label>
                                    <div class="col-sm-10">
                                        <textarea class="editmce" name="pro_thongtin" id="" style="width:100%;" rows="20">{{ $edit_procat->pro_thongtin }}</textarea>
                                    </div>
                                </div>

                            </div>

                            <!--Tab English-->
                            <div class="tab-pane enlang">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Tên nước<br>(Tiếng Anh): </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="procat_ten_en" class="form-control" value="{{ $edit_procat->procat_ten_en }}"> 
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Giới thiệu chung<br>(Tiếng Anh):</label>
                                    <div class="col-sm-10">
                                        <textarea class="editmce" name="pro_thongtin_en" id="" style="width:100%;" rows="20">{{ $edit_procat->pro_thongtin_en }}</textarea>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>

                </div>
            </div>
            <!--End transfer tab -->







            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">

                <div class="col-lg-12">

                    <div class="form-panel" style="margin:0">
                        
                        <div class="form-group hidden">
                            <label class="col-sm-2 col-sm-2 control-label">Editor:</label>
                            <div class="col-sm-10">
                                <input type="text" name="procat_editor" class="form-control" value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                      
                            <div class="form-group last">
                                <label class="control-label col-md-2">Quốc kỳ:</label>
                                <div class="col-md-10">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: auto;">
                                            <img src="{{ asset('public/upload/product/'.$edit_procat->procat_icon) }}" id="homepage_logo_output" style="width:100%; height:100%" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input id="homepage_logo_input" type="file" name="procat_icon" class="default" />
                                            </span>
                                            <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>
                                    <span class="label label-info">NOTE!</span>
                                    <span>
                                    Kích thước hình ảnh tối ưu 100px X 100px
                                    </span>
                                </div>
                            </div>



                            {{-- <div class="form-group ">
    
                                <label for="newsletter" class="control-label col-lg-2 col-sm-3">Nhân viên phụ trách:</label>
                                <div class="col-lg-4 col-sm-3">
                                    <select id="procat-child" class="alert alert-primary" name="procat_staff_id" style="width:200px; border: 1.5px solid #dbdbdb;">
                                        <option>Chọn nhân viên</option>
                                        @foreach ($staff_list as $item)
                                            <option value="{{ $item->cust_id }}"  @if ($edit_procat->procat_staff_id == $item->cust_id) selected='selected' @endif >{{ $item->cust_ten }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div> --}}

                            {{-- <div class="form-group last">
                                <label class="control-label col-md-2">Banner đại diện:</label>
                                <div class="col-md-10">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 282px; height: 448px;">
                                            <img src="{{ asset('public/upload/product/'.$edit_procat->procat_thumb) }}" class="image_output" style="width:100%; height:100%" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input type="file" name="procat_thumb" class="default image_input" />
                                            </span>
                                            <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>
                                    <span class="label label-info">NOTE!</span>
                                    <span>
                                    Kích thước hình ảnh tối ưu 282px X 448px
                                    </span>
                                </div>
                            </div> --}}

                            
                            {{-- <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Độ ưu tiên: </label>
                                <div class="col-sm-1 col-md-1">
                                    <input type="number" name="procat_prio" min="1" class="form-control" value="{{ $edit_procat->procat_prio }}"> 
                                </div>
                            </div> --}}

                            {{-- <div class="row">    
                                <div class="form-group col-md-4 col-sm-4">
                                    <label for="newsletter" class="control-label col-lg-4 col-sm-4">Nổi bật:</label>
                                    <div class="col-lg-8 col-sm-8">
                                        <input type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="blog_noibat" />
                                    </div>
                                </div>

                                <div class="form-group col-md-4 col-sm-4">
                                    <label for="newsletter" class="control-label col-lg-4 col-sm-4">Hiển thị:</label>
                                    <div class="col-lg-8 col-sm-8">
                                        <input type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="blog_hienthi" />
                                    </div>
                                </div>
                            </div> --}}

                            <hr/>

                            <h4><strong>Tối ưu SEO</strong></h4>
                            <br/>

                            <div class="form-group ">
                                <label for="newsletter" class="control-label col-lg-2 col-sm-3">Title:</label>
                                <div class="col-lg-10 col-sm-9">
                                        <input required type="text" name="procat_title" class="form-control" value="{{ $edit_procat->procat_title }}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Description:</label>
                                <div class="col-sm-10">
                                    <textarea required name="procat_mota" id="" style="width:100%;" rows="7">{{ $edit_procat->procat_mota }}</textarea>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="newsletter" class="control-label col-lg-2 col-sm-3">Keywords:</label>
                                <div class="col-lg-10 col-sm-9">
                                        <input required type="text" name="procat_keyword" class="form-control" value="{{ $edit_procat->procat_keyword }}">
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class=" pull-right">
                                    <input style="width:100px;" type="submit" class="btn btn-primary" value="Cập nhật">
                                    <a href="{{ asset('admin/nation') }}">
                                        <input style="width:100px;" type="button" class="btn btn-danger" value="Hủy">
                                    </a>
                                </div>
                            </div>
                        

                            

                            {{ csrf_field() }}
                        {{-- </form> --}}
                    </div>
                </div>
                <!-- col-lg-12-->
            </div>

        </section>
        <!-- /wrapper -->

    </form>
</section>

@stop()