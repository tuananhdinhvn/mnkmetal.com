@extends('admin.master') 
@section('title', 'Cập nhật dự án') 

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


<style>
    .alt-cover{
        margin-top: 10px;
    }
    .alt_item{
        height: 150px;
        position: relative;
        padding: 10px;
        border-radius: 10px
    }
    .alt_item:hover{
        background: #dbdbdb;
    }
    .alt_item:hover .alt-del-but{
        background: #fff;
        cursor: pointer;
        border: solid 1px #aaa;
        color: #aaa;
    }
    .alt-del-but{
        position: absolute;
        bottom: 10px;
        left: 45%;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        padding-left: 7px;
        padding-top: 3px;
        background: #aaa;
        color: #fff;
        z-index: 11;

    }
</style>


<section id="main-content">


    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">

    <section class="wrapper">
        

        

        <div class="row content-panel">
            <h2 class="centered">Cập nhật dự án</h2>
            <div class="col-md-12 mt mb">
                <div class="accordion" id="accordion2">

                <form method="post" enctype='multipart/form-data'>

                    <!------------------Thông tin chung----------------------->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseOne">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Thông tin chung
                            </a>
                        </div>

                        <div id="collapseOne" class="accordion-body collapse ">
                            <div class="accordion-inner">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Tên dự án<br>(Tiếng Việt): </label>
                                    <div class="col-sm-10">
                                        <input type="text" required name="pro_ten_vi" class="form-control" value="{{ $project_detail->pro_ten_vi }}" >
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Tên dự án<br>(Tiếng Anh): </label>
                                    <div class="col-sm-10">
                                        <input type="text" required name="pro_ten_en" class="form-control" value="{{ $project_detail->pro_ten_en }}" >
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Tên dự án<br>(Tiếng Trung): </label>
                                    <div class="col-sm-10">
                                        <input type="text" required name="pro_ten_zh" class="form-control" value="{{ $project_detail->pro_ten_zh }}">
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Tên dự án<br>(Tiếng Nhật): </label>
                                    <div class="col-sm-10">
                                        <input type="text" required name="pro_ten_ja" class="form-control" value="{{ $project_detail->pro_ten_ja }}">
                                    </div>
                                </div>
                                <hr/>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Owner: </label>
                                    <div class="col-sm-10">
                                        <input type="text" required name="pro_owner_en" class="form-control" value="{{ $project_detail->pro_owner_en }}">
                                    </div>
                                </div>
    
                                <div class="form-group ">
                                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Nationality:</label>
                                    <div class="col-lg-4 col-sm-3">
                                        <select id="procat-main" required class="alert alert-primary" name="pro_nation" style="width:200px; border: 1.5px solid #dbdbdb;">
                                            <option value="null">Chọn quốc tịch</option>
                                            @foreach ($nation_list as $item)
                                                <option value="{{ $item->nation_id }}" @if ($project_detail->pro_nation==$item->nation_id) selected="selected" @endif>{{ $item->nation_name_en }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Major: </label>
                                    <div class="col-lg-4 col-sm-3">
                                        <select id="procat-main" required class="alert alert-primary" name="pro_major_id" style="width:200px; border: 1.5px solid #dbdbdb;">
                                            <option value="null">Chọn ngành</option>
                                            @foreach ($major_list as $item)
                                                <option value="{{ $item->major_id }}" @if ($project_detail->pro_major_id == $item->major_id) selected="selected" @endif>{{ $item->major_name_en }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Building grade: </label>
                                    <div class="col-lg-4 col-sm-3">
                                        <select id="procat-main" required class="alert alert-primary" name="pro_building_grade" style="width:200px; border: 1.5px solid #dbdbdb;">
                                            <option value="null">Chọn grade</option>
                                            <option value="grade-1" @if ($project_detail->pro_building_grade == 'grade-1') selected="selected" @endif>Grade 1</option>
                                            <option value="grade-2" @if ($project_detail->pro_building_grade == 'grade-2') selected="selected" @endif>Grade 2</option>
                                            <option value="grade-3" @if ($project_detail->pro_building_grade == 'grade-3') selected="selected" @endif>Grade 3</option>
                                            <option value="grade-4" @if ($project_detail->pro_building_grade == 'grade-4') selected="selected" @endif>Grade 4</option>
                                            <option value="grade-special" @if ($project_detail->pro_building_grade == 'grade-special') selected="selected" @endif>Special grade</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Construction time: </label>
                                    <div class="col-sm-4">
                                        <input type="date" required name="pro_time_work" class="form-control" value="{{ $project_detail->pro_time_work }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Floor area: </label>
                                    <div class="col-sm-4">
                                        <input type="text" required name="pro_area" class="form-control" value="{{ $project_detail->pro_area }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Location: </label>
                                    <div class="col-lg-4 col-sm-3">
                                        <select id="procat-main" required class="alert alert-primary" name="pro_location_id" style="width:200px; border: 1.5px solid #dbdbdb;">
                                            <option value="null">Chọn location</option>
                                            @foreach ($location_list as $item)
                                                <option value="{{ $item->locate_id }}" @if ($project_detail->pro_location_id== $item->locate_id) selected="selected" @endif>{{ $item->locate_name_vi }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Industrial Park: </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pro_induspark" class="form-control" value="{{ $project_detail->pro_induspark }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Contractor: </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pro_contractor" class="form-control" value="{{ $project_detail->pro_contractor }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Scope of work: </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pro_scope_work" class="form-control" value="{{ $project_detail->pro_scope_work }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Status: </label>
                                    <div class="col-lg-4 col-sm-3">
                                        <select id="procat-main" required class="alert alert-primary" name="pro_status" style="width:200px; border: 1.5px solid #dbdbdb;">
                                            <option>Chọn status</option>
                                            <option value="ongoing" @if ($project_detail->pro_status== 'ongoing') selected="selected" @endif>ON GOING</option>
                                            <option value="finished" @if ($project_detail->pro_status== 'finished') selected="selected" @endif>FINISHED</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Link 3D video: </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pro_3d_video" class="form-control" value="{{ $project_detail->pro_3d_video }}">
                                    </div>

                                    <div class="col-lg-10 offset-lg-2 offset-md-2">
                                        <input type="checkbox" id="drop-remove" name="pro_3d_video_private" @if($project_detail->pro_3d_video_private == 1) checked="checked" @endif> Private link
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Link 4D video: </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pro_4d_video" class="form-control" value="{{ $project_detail->pro_4d_video }}">
                                    </div>

                                    <div class="col-lg-10 offset-lg-2 offset-md-2">
                                        <input type="checkbox" id="drop-remove" name="pro_4d_video_private" @if($project_detail->pro_4d_video_private == 1) checked="checked" @endif> Private link
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Link progress video: </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pro_progress_video" class="form-control" value="{{ $project_detail->pro_progress_video }}">
                                    </div>

                                    <div class="col-lg-10 offset-lg-2 offset-md-2">
                                        <input type="checkbox" id="drop-remove" name="pro_progress_video_private" @if($project_detail->pro_progress_video_private == 1) checked="checked" @endif> Private link
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                    <!--Hình public-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseTwo">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Hình ảnh public
                            </a>
                        </div>

                        <div id="collapseTwo" class="accordion-body collapse ">
                            <div class="accordion-inner">
                                <div class="form-group last">
                                    <label class="control-label col-md-2">Hình đại diện dự án:</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="{{ asset('public/upload/product/'.$project_detail->pro_thumb) }}" class="image_output" style="width:100%; height:100%" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input type="file" name="pro_thumb" class="default image_input" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-warning" style="font-weight: 200">NOTE !</span>
                                        <span>
                                        Kích thước hình ảnh tối ưu 1024px X 683px
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group last">
                                    <label class="control-label col-md-2">Thumbnail hover:</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: auto;">
                                                <img id="promotion_img_output" src="@if($project_detail->pro_thumb_hover != '') {{ asset('public/upload/product/'.$project_detail->pro_thumb_hover) }} @else {{ asset('public/noimage.jpg') }} @endif " class="promotion_img_output" style="width:100%; height:100%" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="promotion_img_input" type="file" name="pro_thumb_hover" class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-warning" style="font-weight: 200">NOTE !</span>
                                        <span>
                                        Kích thước hình ảnh tối ưu 1024px X 683px
                                        </span>
                                    </div>
                                </div>


        
                                <div class="form-group last">
                                    <label class="control-label col-md-2">Hình banner:</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img id="homepage_favicon_output" src="{{ asset('public/upload/product/'.$project_detail->pro_background) }}" alt="" style="width:100%; height:100%">
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="homepage_favicon_input" type="file" name="pro_background"class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-warning" style="font-weight: 200">NOTE !</span>
                                        <span>
                                            Kích thước hình ảnh tối ưu 1200px X 729px
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group last">
                                    <label class="control-label col-md-2">Hình background:</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img id="whyus_img_output" src="{{ asset('public/upload/product/'.$project_detail->pro_background_cover) }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="whyus_img_input" type="file" name="pro_background_cover"class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-warning" style="font-weight: 200">NOTE !</span>
                                        <span>
                                            Kích thước hình ảnh tối ưu 1200px X 729px
                                        </span>
                                    </div>
                                </div>
        
        
                                <div class="form-group last">
                                    <label class="control-label col-md-2">Hình ảnh thi công:</label>
                                    <div class="col-md-10 alt-cover">
                                        <input class="form-control" type="file" multiple name="file[]">
                                        
                                            @foreach ($alt_photos as $alt_item)
                                            <div class="col-md-2 alt_item">
                                                <img src="{{ asset('public/upload/productphoto/'.$alt_item->photo_url) }}" 
                                                alt="" 
                                                srcset=""
                                                width="100%">
                                                <span class="alt-del-but" rel="{{$alt_item->photo_id}}" rel1="{{$alt_item->product_id}}">X</span>
                                            </div>
                                            @endforeach
                                        
                                    </div>
                                </div>
                                <span class="label label-warning" style="font-weight: 200">NOTE !</span>
                                <span>
                                Kích thước hình ảnh tối ưu 1024px X 683px
                                </span>
                                
                            </div>
                        </div>
                    </div>



                    <!--Hình private-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseThree">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Hình ảnh private
                            </a>
                        </div>

                        <div id="collapseThree" class="accordion-body collapse ">
                            <div class="accordion-inner">
                                <div class="form-group last">
                                    <label class="control-label col-md-2">Hình ảnh thi công<br/>(Private):</label>
                                    <div class="col-md-10 alt-cover">
                                        <input class="form-control" type="file" multiple name="file_private[]">
                                        
                                            @foreach ($alt_photos_private as $alt_item)
                                            <div class="col-md-2 alt_item">
                                                <img src="{{ asset('public/upload/productphoto/'.$alt_item->photo_url) }}" 
                                                alt="" 
                                                srcset=""
                                                width="100%">
                                                <span class="alt-del-but" rel="{{$alt_item->photo_id}}" rel1="{{$alt_item->product_id}}">X</span>
                                            </div>
                                            @endforeach
                                        
                                    </div>
                                </div>

                                <span class="label label-warning" style="font-weight: 200">NOTE !</span>
                                <span>
                                Kích thước hình ảnh tối ưu 1024px X 683px
                                </span>
                                
                                {{-- <div class="form-group">
                                    <label class="col-sm-1 control-label">
                                        <span class="label label-danger control-label" style="font-weight: 400">NOTE !</span>
                                    </label>
                                    <span style="">
                                    Kích thước frame tối ưu <strong>WIDTH: 100% - HEIGHT: 350</strong>
                                    </span>
                                </div> --}}
                              
                            </div>
                        </div>
                    </div>



                    <!--Thông tin dự án public-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFour">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Thông tin dự án (public)
                            </a>
                        </div>

                        <div id="collapseFour" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Thông tin dự án<br>(Tiếng Việt): </label>
                                    <div class="col-sm-10">
                                        <textarea class="editmce" name="pro_thongtin_vi" id="" style="width:100%;" rows="20">{{ $project_detail->pro_thongtin_vi }}</textarea>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Thông tin dự án<br>(Tiếng Anh): </label>
                                    <div class="col-sm-10">
                                        <textarea class="editmce" name="pro_thongtin_en" id="" style="width:100%;" rows="20">{{ $project_detail->pro_thongtin_en }}</textarea>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Thông tin dự án<br>(Tiếng Trung): </label>
                                    <div class="col-sm-10">
                                        <textarea class="editmce" name="pro_thongtin_zh" id="" style="width:100%;" rows="20">{{ $project_detail->pro_thongtin_zh }}</textarea>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Thông tin dự án<br>(Tiếng Nhật): </label>
                                    <div class="col-sm-10">
                                        <textarea class="editmce" name="pro_thongtin_ja" id="" style="width:100%;" rows="20">{{ $project_detail->pro_thongtin_ja }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--Thông tin dự án private-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFive">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Thông tin dự án (private)
                            </a>
                        </div>

                        <div id="collapseFive" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Thông tin dự án<br>(Tiếng Việt): </label>
                                    <div class="col-sm-10">
                                        <textarea class="editmce" name="pro_thongtin_private_vi" id="" style="width:100%;" rows="20">{{ $project_detail->pro_thongtin_private_vi }}</textarea>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Thông tin dự án<br>(Tiếng Anh): </label>
                                    <div class="col-sm-10">
                                        <textarea class="editmce" name="pro_thongtin_private_en" id="" style="width:100%;" rows="20">{{ $project_detail->pro_thongtin_private_en }}</textarea>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Thông tin dự án<br>(Tiếng Trung): </label>
                                    <div class="col-sm-10">
                                        <textarea class="editmce" name="pro_thongtin_private_zh" id="" style="width:100%;" rows="20">{{ $project_detail->pro_thongtin_private_zh }}</textarea>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Thông tin dự án<br>(Tiếng Nhật): </label>
                                    <div class="col-sm-10">
                                        <textarea class="editmce" name="pro_thongtin_private_ja" id="" style="width:100%;" rows="20">{{ $project_detail->pro_thongtin_private_ja }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    

                    <div class="form-group">
                        <div class="row pull-right" style="padding-right:50px">
                            <input style="width:100px;" type="submit" class="btn btn-primary fileinput-upload fileinput-upload-button" value="Cập nhật">
                            <a href="{{ asset('admin/project') }}"><input style="width:100px;" type="button" class="btn btn-danger" value="Hủy"></a>
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
<script>
    $(document).ready(function(){
        $('#procat-main').change(function(){
            var id_procat_main = $(this).val();
            var currentlink = window.location.pathname;

            $.get(currentlink + "/procat-child/"+id_procat_main, function(data){
                $("#procat-child").html(data);
            });
            
        });
    });

    // Delete alternate photo
    $( ".alt-del-but" ).click(function() {
        var IDaltphoto  = $(this).attr('rel');
        var IDproduct   = $(this).attr('rel1');
        var currentlink = window.location.pathname;

        $.get(currentlink + "/delete-submit-photo/", { idproduct:IDproduct, idaltphoto:IDaltphoto }, function(data){
            location.reload();
        });

    });


</script>
@endsection