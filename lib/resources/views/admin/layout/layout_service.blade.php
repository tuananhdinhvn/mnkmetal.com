<!-- ==================================================== -->


@extends('admin.master') 
@section('title', 'Quản trị service') 


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

@section('main')

<style>
    .main-section{
        margin: 0 auto;
        padding: 0 20px 0 0;
        width: 100%
    }

    .cust-table, .number-table{
        width: 50%
    }


    @media only screen and (max-width: 768px) {
        .cust-table, .number-table{
            width: 100%
        }
        .pull-right-sm{
            float: right;
        }
    }
</style>


<section id="main-content">


    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">

    <section class="wrapper">
        
       

        <div class="row content-panel">
            <h2 class="centered">Quản trị service</h2>
            <div class="col-md-12 mt mb">
                <div class="accordion" id="accordion2">

                <form method="post" enctype='multipart/form-data'>

                    <!------------------Intro----------------------->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseZero">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Intro text
                            </a>
                        </div>

                        <div id="collapseZero" class="accordion-body collapse ">
                            <div class="accordion-inner">
                               
                                <div class="form-group" style="padding-bottom: 20px;">
                                    <label class="col-sm-2 col-sm-2 control-label">Tiếng Việt:</label>
                                    <div class="col-sm-10">
                                        <input required type="text" name="service_intro_vi" class="form-control" value="{{ $service_item->service_intro_vi }}">
                                    </div>
                                </div><br/>
    
                                <div class="form-group" style="padding-bottom: 20px;">
                                    <label class="col-sm-2 col-sm-2 control-label">Tiếng Anh:</label>
                                    <div class="col-sm-10">
                                        <input required type="text" name="service_intro_en" class="form-control" value="{{ $service_item->service_intro_en }}">
                                    </div>
                                </div><br/>
    
                                <div class="form-group" style="padding-bottom: 20px;">
                                    <label class="col-sm-2 col-sm-2 control-label">Tiếng Trung:</label>
                                    <div class="col-sm-10">
                                        <input required type="text" name="service_intro_zh" class="form-control" value="{{ $service_item->service_intro_zh }}">
                                    </div>
                                </div><br/>
    
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Tiếng Nhật:</label>
                                    <div class="col-sm-10">
                                        <input required type="text" name="service_intro_ja" class="form-control" value="{{ $service_item->service_intro_ja }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Tiếng Hàn:</label>
                                    <div class="col-sm-10">
                                        <input required type="text" name="service_intro_kr" class="form-control" value="{{ $service_item->service_intro_kr }}">
                                    </div>
                                </div>

                                

                            </div>
                        </div>
                    </div>


                    <!--Design srevice-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseOne">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Design
                            </a>
                        </div>

                        <div id="collapseOne" class="accordion-body collapse">
                            <div class="accordion-inner">


                                <div class="form-group row">
                                    <label class="control-label col-md-2">Background</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 185px; height: auto;">
                                                <img id="bannertop_img_1_output" src="{{ asset('public/upload/service/'.$service_item->service_background_1) }}" alt="" style="width:100%; height:100%"/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="bannertop_img_1_input" type="file" name="service_background_1" class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-info">NOTE!</span>
                                        <span>
                                        Kích thước hình ảnh tối ưu 420px X 300px
                                        </span>
                                    </div>
                                </div><br/><br/>
    
                                <div class="form-group " style="padding-bottom: 20px">
                                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Việt):</label>
                                    <div class="col-lg-10 col-sm-9">
                                            <input type="text" name="service_title1_vi" class="form-control" value="{{ $service_item->service_title1_vi }}">
                                    </div>
                                </div><br/>
                                <div class="form-group " style="padding-bottom: 20px">
                                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Anh):</label>
                                    <div class="col-lg-10 col-sm-9">
                                            <input type="text" name="service_title1_en" class="form-control" value="{{ $service_item->service_title1_en }}">
                                    </div>
                                </div><br/>
                                <div class="form-group " style="padding-bottom: 20px">
                                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Trung):</label>
                                    <div class="col-lg-10 col-sm-9">
                                            <input type="text" name="service_title1_zh" class="form-control" value="{{ $service_item->service_title1_zh }}">
                                    </div>
                                </div><br/>
                                <div class="form-group " style="padding-bottom: 20px">
                                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Nhật):</label>
                                    <div class="col-lg-10 col-sm-9">
                                            <input type="text" name="service_title1_ja" class="form-control" value="{{ $service_item->service_title1_ja }}">
                                    </div>
                                </div><br/>
                                <div class="form-group " style="padding-bottom: 20px">
                                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Hàn):</label>
                                    <div class="col-lg-10 col-sm-9">
                                            <input type="text" name="service_title1_kr" class="form-control" value="{{ $service_item->service_title1_kr }}">
                                    </div>
                                </div><br/>
                                
                                
    
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Việt):</label>
                                    <div class="col-sm-10">
                                        <textarea name="service_des1_vi" id="" style="width:100%;" rows="7">{{ $service_item->service_des1_vi }}</textarea>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Anh):</label>
                                    <div class="col-sm-10">
                                        <textarea name="service_des1_en" id="" style="width:100%;" rows="7">{{ $service_item->service_des1_en }}</textarea>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Trung):</label>
                                    <div class="col-sm-10">
                                        <textarea name="service_des1_zh" id="" style="width:100%;" rows="7">{{ $service_item->service_des1_zh }}</textarea>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Nhật):</label>
                                    <div class="col-sm-10">
                                        <textarea name="service_des1_ja" id="" style="width:100%;" rows="7">{{ $service_item->service_des1_ja }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Hàn):</label>
                                    <div class="col-sm-10">
                                        <textarea name="service_des1_kr" id="" style="width:100%;" rows="7">{{ $service_item->service_des1_kr }}</textarea>
                                    </div>
                                </div>
    
    
                                
    
                                <div class="form-group last" style="padding-top: 20px;">
                                    <label class="control-label col-md-2">Info image</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 185px; height: auto;">
                                                <img id="whyus_icon_1_output" src="{{ asset('public/upload/service/'.$service_item->service_img_info_1) }}" alt="" style="width:100%; height:100%"/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="whyus_icon_1_input" type="file" name="service_img_info_1" class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-info">NOTE!</span>
                                        <span>
                                        Kích thước hình ảnh tối ưu 420px X 300px
                                        </span>
                                    </div>
                                </div><br/><br/>
    
                             



                                <div class="accordion-inner ">
            
                                    <h3>
                                        <span class="col-md-offset-5 pull-right-sm">
                                            <a  href="{{ asset('admin/template/service/addslide?type=service-design-slide') }}"
                                                title="Chỉnh sửa hình ảnh"
                                                class="btn btn-default btn-xs"
                                                style=" color: #fff;
                                                        background-color: #337ab7;
                                                        border-color: #2e6da4;
                                                        padding: 6px 12px;">
                                                Thêm slide
                                            </a>
                                        </span>
                                    </h3>
                                    
                                    <div class=" ">
                                        <table class="table table-striped table-advance table-hover cust-table" style="" >
                                            <thead>
                                                <tr>
                                                    <th><i class="fa fa-camera"></i> Hình ảnh</th>
                                                    <th class="pull-right"><i class="fa fa-edit"></i> Tùy chỉnh</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach ($service_design_slide as $item)
                                                    <tr>
                                                        <td>
                                                            <div>
                                                                <a href="{{ asset('admin/template/service/editslide/'.$item->img_id) }}">
                                                                    <img width="150px" src="{{ asset('public/upload/service/'.$item->img_src) }}"/>
                                                                </a>
                                                                <br/>
                                                            </div>
                                                        </td>
                                            
                                                        <td class="pull-right">
                                                            <a href="{{ asset('admin/template/service/editslide/'.$item->img_id) }}" >
                                                                <span class="btn btn-primary btn-xs" title="Chỉnh sửa"><i class="fa fa-pencil"></i></span>
                                                            </a>
                                                            <a  rel="{{ $item->img_id }}"
                                                                proname="{{ $item->img_description_en }}"
                                                                href="javascript:"
                                                                title="Xóa hình ảnh"
                                                                class="deleteServiceSlide btn btn-danger btn-xs">
                                                                <i class="fa fa-trash-o "></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
    
                                    </div>
    
                                </div>












                              
        
                            </div>
                        </div>
                    </div>



                    <!--Management srevice-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseTwo">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Management
                            </a>
                        </div>

                        <div id="collapseTwo" class="accordion-body collapse ">
                            

                            <div class="form-group row">
                                <label class="control-label col-md-2">Background</label>
                                <div class="col-md-10">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 185px; height: auto;">
                                            <img id="bannertop_img_2_output" src="{{ asset('public/upload/service/'.$service_item->service_background_2) }}" alt="" style="width:100%; height:100%"/>
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input id="bannertop_img_2_input" type="file" name="service_background_2" class="default" />
                                            </span>
                                            <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>
                                    <span class="label label-info">NOTE!</span>
                                    <span>
                                    Kích thước hình ảnh tối ưu 420px X 300px
                                    </span>
                                </div>
                            </div><br/><br/>

                            <div class="form-group " style="padding-bottom: 20px">
                                <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Việt):</label>
                                <div class="col-lg-10 col-sm-9">
                                        <input type="text" name="service_title2_vi" class="form-control" value="{{ $service_item->service_title2_vi }}">
                                </div>
                            </div><br/>
                            <div class="form-group " style="padding-bottom: 20px">
                                <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Anh):</label>
                                <div class="col-lg-10 col-sm-9">
                                        <input type="text" name="service_title2_en" class="form-control" value="{{ $service_item->service_title2_en }}">
                                </div>
                            </div><br/>
                            <div class="form-group " style="padding-bottom: 20px">
                                <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Trung):</label>
                                <div class="col-lg-10 col-sm-9">
                                        <input type="text" name="service_title2_zh" class="form-control" value="{{ $service_item->service_title2_zh }}">
                                </div>
                            </div><br/>
                            <div class="form-group " style="padding-bottom: 20px">
                                <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Nhật):</label>
                                <div class="col-lg-10 col-sm-9">
                                        <input type="text" name="service_title2_ja" class="form-control" value="{{ $service_item->service_title2_ja }}">
                                </div>
                            </div><br/>
                            <div class="form-group " style="padding-bottom: 20px">
                                <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Hàn):</label>
                                <div class="col-lg-10 col-sm-9">
                                        <input type="text" name="service_title2_kr" class="form-control" value="{{ $service_item->service_title2_kr }}">
                                </div>
                            </div><br/>
                            
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Việt):</label>
                                <div class="col-sm-10">
                                    <textarea name="service_des2_vi" id="" style="width:100%;" rows="7">{{ $service_item->service_des2_vi }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Anh):</label>
                                <div class="col-sm-10">
                                    <textarea name="service_des2_en" id="" style="width:100%;" rows="7">{{ $service_item->service_des2_en }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Trung):</label>
                                <div class="col-sm-10">
                                    <textarea name="service_des2_zh" id="" style="width:100%;" rows="7">{{ $service_item->service_des2_zh }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Nhật):</label>
                                <div class="col-sm-10">
                                    <textarea name="service_des2_ja" id="" style="width:100%;" rows="7">{{ $service_item->service_des2_ja }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Hàn):</label>
                                <div class="col-sm-10">
                                    <textarea name="service_des2_kr" id="" style="width:100%;" rows="7">{{ $service_item->service_des2_kr }}</textarea>
                                </div>
                            </div>

                            <div class="form-group last" style="padding-top: 20px;">
                                <label class="control-label col-md-2">Info image</label>
                                <div class="col-md-10">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 185px; height: auto;">
                                            <img id="whyus_icon_2_output" src="{{ asset('public/upload/service/'.$service_item->service_img_info_2) }}" alt="" style="width:100%; height:100%"/>
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input id="whyus_icon_2_input" type="file" name="service_img_info_2" class="default" />
                                            </span>
                                            <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>
                                    <span class="label label-info">NOTE!</span>
                                    <span>
                                    Kích thước hình ảnh tối ưu 420px X 300px
                                    </span>
                                </div>
                            </div><br/><br/>



                            <div class="accordion-inner ">
            
                                <h3>
                                    <span class="col-md-offset-5 pull-right-sm">
                                        <a  href="{{ asset('admin/template/service/addslide?type=service-manage-slide') }}"
                                            title="Chỉnh sửa hình ảnh"
                                            class="btn btn-default btn-xs"
                                            style=" color: #fff;
                                                    background-color: #337ab7;
                                                    border-color: #2e6da4;
                                                    padding: 6px 12px;">
                                            Thêm slide
                                        </a>
                                    </span>
                                </h3>
                                
                                <div class=" ">
                                    <table class="table table-striped table-advance table-hover cust-table" style="" >
                                        <thead>
                                            <tr>
                                                <th><i class="fa fa-camera"></i> Hình ảnh</th>
                                                <th class="pull-right"><i class="fa fa-edit"></i> Tùy chỉnh</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach ($service_manage_slide as $item)
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <a href="{{ asset('admin/template/service/editslide/'.$item->img_id) }}">
                                                                <img width="150px" src="{{ asset('public/upload/service/'.$item->img_src) }}"/>
                                                            </a>
                                                            <br/>
                                                        </div>
                                                    </td>
                                        
                                                    <td class="pull-right">
                                                        <a href="{{ asset('admin/template/service/editslide/'.$item->img_id) }}" >
                                                            <span class="btn btn-primary btn-xs" title="Chỉnh sửa"><i class="fa fa-pencil"></i></span>
                                                        </a>
                                                        <a  rel="{{ $item->img_id }}"
                                                            proname="{{ $item->img_description_en }}"
                                                            href="javascript:"
                                                            title="Xóa hình ảnh"
                                                            class="deleteServiceSlide btn btn-danger btn-xs">
                                                            <i class="fa fa-trash-o "></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                            


                            

                            </div>
                        </div>
                    </div>



                    <!--Construction srevice-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseThree">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Construction
                            </a>
                        </div>

                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="accordion-inner">


                                <div class="form-group row">
                                    <label class="control-label col-md-2">Background</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 185px; height: auto;">
                                                <img id="bannertop_img_3_output" src="{{ asset('public/upload/service/'.$service_item->service_background_3) }}" alt="" style="width:100%; height:100%"/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="bannertop_img_3_input" type="file" name="service_background_3" class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-info">NOTE!</span>
                                        <span>
                                        Kích thước hình ảnh tối ưu 420px X 300px
                                        </span>
                                    </div>
                                </div><br/><br/>
    
    
                                <div class="form-group " style="padding-bottom: 20px">
                                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Việt):</label>
                                    <div class="col-lg-10 col-sm-9">
                                            <input type="text" name="service_title3_vi" class="form-control" value="{{ $service_item->service_title3_vi }}">
                                    </div>
                                </div><br/>
                                <div class="form-group " style="padding-bottom: 20px">
                                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Anh):</label>
                                    <div class="col-lg-10 col-sm-9">
                                            <input type="text" name="service_title3_en" class="form-control" value="{{ $service_item->service_title3_en }}">
                                    </div>
                                </div><br/>
                                <div class="form-group " style="padding-bottom: 20px">
                                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Trung):</label>
                                    <div class="col-lg-10 col-sm-9">
                                            <input type="text" name="service_title3_zh" class="form-control" value="{{ $service_item->service_title3_zh }}">
                                    </div>
                                </div><br/>
                                <div class="form-group " style="padding-bottom: 20px">
                                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Nhật):</label>
                                    <div class="col-lg-10 col-sm-9">
                                            <input type="text" name="service_title3_ja" class="form-control" value="{{ $service_item->service_title3_ja }}">
                                    </div>
                                </div><br/>
                                <div class="form-group " style="padding-bottom: 20px">
                                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Hàn):</label>
                                    <div class="col-lg-10 col-sm-9">
                                            <input type="text" name="service_title3_kr" class="form-control" value="{{ $service_item->service_title3_kr }}">
                                    </div>
                                </div><br/>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Việt):</label>
                                    <div class="col-sm-10">
                                        <textarea name="service_des3_vi" id="" style="width:100%;" rows="7">{{ $service_item->service_des3_vi }}</textarea>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Anh):</label>
                                    <div class="col-sm-10">
                                        <textarea name="service_des3_en" id="" style="width:100%;" rows="7">{{ $service_item->service_des3_en }}</textarea>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Trung):</label>
                                    <div class="col-sm-10">
                                        <textarea name="service_des3_zh" id="" style="width:100%;" rows="7">{{ $service_item->service_des3_zh }}</textarea>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Nhật):</label>
                                    <div class="col-sm-10">
                                        <textarea name="service_des3_ja" id="" style="width:100%;" rows="7">{{ $service_item->service_des3_ja }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Hàn):</label>
                                    <div class="col-sm-10">
                                        <textarea name="service_des3_kr" id="" style="width:100%;" rows="7">{{ $service_item->service_des3_kr }}</textarea>
                                    </div>
                                </div>
    
                                <div class="form-group last" style="padding-top: 20px;">
                                    <label class="control-label col-md-2">Info image</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 185px; height: auto;">
                                                <img id="whyus_icon_3_output" src="{{ asset('public/upload/service/'.$service_item->service_img_info_3) }}" alt="" style="width:100%; height:100%"/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="whyus_icon_3_input" type="file" name="service_img_info_3" class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-info">NOTE!</span>
                                        <span>
                                        Kích thước hình ảnh tối ưu 420px X 300px
                                        </span>
                                    </div>
                                </div><br/><br/>
    
                                <div class="accordion-inner ">
            
                                    <h3>
                                        <span class="col-md-offset-5 pull-right-sm">
                                            <a  href="{{ asset('admin/template/service/addslide?type=service-construction-slide') }}"
                                                title="Chỉnh sửa hình ảnh"
                                                class="btn btn-default btn-xs"
                                                style=" color: #fff;
                                                        background-color: #337ab7;
                                                        border-color: #2e6da4;
                                                        padding: 6px 12px;">
                                                Thêm slide
                                            </a>
                                        </span>
                                    </h3>
                                    
                                    <div class=" ">
                                        <table class="table table-striped table-advance table-hover cust-table" style="" >
                                            <thead>
                                                <tr>
                                                    <th><i class="fa fa-camera"></i> Hình ảnh</th>
                                                    <th class="pull-right"><i class="fa fa-edit"></i> Tùy chỉnh</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach ($service_construction_slide as $item)
                                                    <tr>
                                                        <td>
                                                            <div>
                                                                <a href="{{ asset('admin/template/service/editslide/'.$item->img_id) }}">
                                                                    <img width="150px" src="{{ asset('public/upload/service/'.$item->img_src) }}"/>
                                                                </a>
                                                                <br/>
                                                            </div>
                                                        </td>
                                            
                                                        <td class="pull-right">
                                                            <a href="{{ asset('admin/template/service/editslide/'.$item->img_id) }}" >
                                                                <span class="btn btn-primary btn-xs" title="Chỉnh sửa"><i class="fa fa-pencil"></i></span>
                                                            </a>
                                                            <a  rel="{{ $item->img_id }}"
                                                                proname="{{ $item->img_description_en }}"
                                                                href="javascript:"
                                                                title="Xóa hình ảnh"
                                                                class="deleteServiceSlide btn btn-danger btn-xs">
                                                                <i class="fa fa-trash-o "></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
    
                                    </div>
    
                                </div>


                              
        
                            </div>
                        </div>
                    </div>




                    <!--Development srevice-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFour">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Development
                            </a>
                        </div>

                        <div id="collapseFour" class="accordion-body collapse">
                            <div class="accordion-inner">


                                <div class="form-group row">
                                    <label class="control-label col-md-2">Background</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 185px; height: auto;">
                                                <img id="bannertop_img_4_output" src="{{ asset('public/upload/service/'.$service_item->service_background_4) }}" alt="" style="width:100%; height:100%"/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="bannertop_img_4_input" type="file" name="service_background_4" class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-info">NOTE!</span>
                                        <span>
                                        Kích thước hình ảnh tối ưu 420px X 300px
                                        </span>
                                    </div>
                                </div><br/><br/>
    
                                <div class="form-group " style="padding-bottom: 20px">
                                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Việt):</label>
                                    <div class="col-lg-10 col-sm-9">
                                            <input type="text" name="service_title4_vi" class="form-control" value="{{ $service_item->service_title4_vi }}">
                                    </div>
                                </div><br/>
                                <div class="form-group " style="padding-bottom: 20px">
                                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Anh):</label>
                                    <div class="col-lg-10 col-sm-9">
                                            <input type="text" name="service_title4_en" class="form-control" value="{{ $service_item->service_title4_en }}">
                                    </div>
                                </div><br/>
                                <div class="form-group " style="padding-bottom: 20px">
                                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Trung):</label>
                                    <div class="col-lg-10 col-sm-9">
                                            <input type="text" name="service_title4_zh" class="form-control" value="{{ $service_item->service_title4_zh }}">
                                    </div>
                                </div><br/>
                                <div class="form-group " style="padding-bottom: 20px">
                                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Nhật):</label>
                                    <div class="col-lg-10 col-sm-9">
                                            <input type="text" name="service_title4_ja" class="form-control" value="{{ $service_item->service_title4_ja }}">
                                    </div>
                                </div><br/>
                                <div class="form-group " style="padding-bottom: 20px">
                                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tiêu đề<br/>(Tiếng Hàn):</label>
                                    <div class="col-lg-10 col-sm-9">
                                            <input type="text" name="service_title4_kr" class="form-control" value="{{ $service_item->service_title4_kr }}">
                                    </div>
                                </div><br/>


                                
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Việt):</label>
                                    <div class="col-sm-10">
                                        <textarea name="service_des4_vi" id="" style="width:100%;" rows="7">{{ $service_item->service_des4_vi }}</textarea>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Anh):</label>
                                    <div class="col-sm-10">
                                        <textarea name="service_des4_en" id="" style="width:100%;" rows="7">{{ $service_item->service_des4_en }}</textarea>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Trung):</label>
                                    <div class="col-sm-10">
                                        <textarea name="service_des4_zh" id="" style="width:100%;" rows="7">{{ $service_item->service_des4_zh }}</textarea>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Nhật):</label>
                                    <div class="col-sm-10">
                                        <textarea name="service_des4_ja" id="" style="width:100%;" rows="7">{{ $service_item->service_des4_ja }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Mô tả<br/>(Tiếng Hàn):</label>
                                    <div class="col-sm-10">
                                        <textarea name="service_des4_kr" id="" style="width:100%;" rows="7">{{ $service_item->service_des4_kr }}</textarea>
                                    </div>
                                </div>
    
                                <div class="form-group last" style="padding-top: 20px;">
                                    <label class="control-label col-md-2">Info image</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 185px; height: auto;">
                                                <img id="whyus_icon_4_output" src="{{ asset('public/upload/service/'.$service_item->service_img_info_4) }}" alt="" style="width:100%; height:100%"/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="whyus_icon_4_input" type="file" name="service_img_info_4" class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-info">NOTE!</span>
                                        <span>
                                        Kích thước hình ảnh tối ưu 420px X 300px
                                        </span>
                                    </div>
                                </div><br/><br/>
    
                                <div class="accordion-inner ">
            
                                    <h3>
                                        <span class="col-md-offset-5 pull-right-sm">
                                            <a  href="{{ asset('admin/template/service/addslide?type=service-development-slide') }}"
                                                title="Chỉnh sửa hình ảnh"
                                                class="btn btn-default btn-xs"
                                                style=" color: #fff;
                                                        background-color: #337ab7;
                                                        border-color: #2e6da4;
                                                        padding: 6px 12px;">
                                                Thêm slide
                                            </a>
                                        </span>
                                    </h3>
                                    
                                    <div class=" ">
                                        <table class="table table-striped table-advance table-hover cust-table" style="" >
                                            <thead>
                                                <tr>
                                                    <th><i class="fa fa-camera"></i> Hình ảnh</th>
                                                    <th class="pull-right"><i class="fa fa-edit"></i> Tùy chỉnh</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach ($service_develop_slide as $item)
                                                    <tr>
                                                        <td>
                                                            <div>
                                                                <a href="{{ asset('admin/template/service/editslide/'.$item->img_id) }}">
                                                                    <img width="150px" src="{{ asset('public/upload/service/'.$item->img_src) }}"/>
                                                                </a>
                                                                <br/>
                                                            </div>
                                                        </td>
                                            
                                                        <td class="pull-right">
                                                            <a href="{{ asset('admin/template/service/editslide/'.$item->img_id) }}" >
                                                                <span class="btn btn-primary btn-xs" title="Chỉnh sửa"><i class="fa fa-pencil"></i></span>
                                                            </a>
                                                            <a  rel="{{ $item->img_id }}"
                                                                proname="{{ $item->img_description_en }}"
                                                                href="javascript:"
                                                                title="Xóa hình ảnh"
                                                                class="deleteServiceSlide btn btn-danger btn-xs">
                                                                <i class="fa fa-trash-o "></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
    
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
        
    });
</script>
@endsection



@section('script')
    <script src="js/fileinput.min.js"></script>
    <script src="js/theme.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>



<!---->
<script>
    $(document).ready(function(){

        // Sweet alert delete slide image 
        $('.deleteServiceSlide').click(function(){
            var id          = $(this).attr('rel');
            var name        = $(this).attr('proname');
            var currentlink = window.location.pathname;
            const hreflink  = $(this).attr('href');

            Swal.fire({
                title: 'Bạn có chắc chắn muốn xóa',
                text: name,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Xóa',
                cancelButtonText: 'Hủy'
            }).then((result) => {
                if (result.value) {
                    document.location.href = currentlink + "/delete-slide-service/" + id;
                    Swal.fire(
                    'Deleted!',
                    'Hình ảnh đã xóa.',
                    'success'
                    )
                }
            })

        });





        


    });
</script>


@endsection