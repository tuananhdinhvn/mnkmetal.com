@extends('admin.master') 
@section('title', 'Quản trị why us') 


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
            <h2 class="centered">Quản trị why us</h2>
            <div class="col-md-12 mt mb">
                <div class="accordion" id="accordion2">

                <form method="post" enctype='multipart/form-data'>

                    <!------------------Intro + profile link + youtube----------------------->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseZero">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Intro text
                            </a>
                        </div>

                        <div id="collapseZero" class="accordion-body collapse ">
                            <div class="accordion-inner">
                               
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Intro Tiếng Việt:</label>
                                    <div class="col-sm-10">
                                        <textarea required class="form-control " name="whyus_intro_vi" id="" rows="5">{{ $homepage_list->whyus_intro_vi }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Intro Tiếng Anh:</label>
                                    <div class="col-sm-10">
                                        <textarea required class="form-control " name="whyus_intro_en" id="" rows="5">{{ $homepage_list->whyus_intro_en }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Intro Tiếng Trung:</label>
                                    <div class="col-sm-10">
                                        <textarea required class="form-control " name="whyus_intro_zh" id="" rows="5">{{ $homepage_list->whyus_intro_zh }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Intro Tiếng Nhật:</label>
                                    <div class="col-sm-10">
                                        <textarea required class="form-control " name="whyus_intro_ja" id="" rows="5">{{ $homepage_list->whyus_intro_ja }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Intro Tiếng Hàn:</label>
                                    <div class="col-sm-10">
                                        <textarea required class="form-control " name="whyus_intro_kr" id="" rows="5">{{ $homepage_list->whyus_intro_kr }}</textarea>
                                    </div>
                                </div>

                                

                            </div>
                        </div>
                    </div>


                    <!--Company timeline-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseOne">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Company timeline
                            </a>
                        </div>

                        <div id="collapseOne" class="accordion-body collapse">
                            <div class="accordion-inner">

                                

                                <div class="form-group last">
                                    <label class="control-label col-md-2">Show timeline tab</label>
                                    <div class="col-md-10">
                                        <input type="checkbox" name="whyus_timeline_show" @if($homepage_list->whyus_timeline_show == 1) checked="checked" @endif/>
                                    </div>
                                </div><br/><br/>


                                <div class="form-group last">
                                    <label class="control-label col-md-2">Hình timeline PC</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 185px; height: auto;">
                                                <img id="bannertop_img_1_output" src="{{ asset('public/upload/template/'.$homepage_list->whyus_timeline_pc) }}" alt="" style="width:100%; height:100%"/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="bannertop_img_1_input" type="file" name="whyus_timeline_pc" class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-info">NOTE!</span>
                                        <span>
                                        Kích thước hình ảnh tối ưu 800px X 400px
                                        </span>
                                    </div>
                                </div><br/><br/>


                                <div class="form-group last">
                                    <label class="control-label col-md-2">Hình timeline mobile</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 185px; height: auto;">
                                                <img id="bannertop_img_2_output" src="{{ asset('public/upload/template/'.$homepage_list->whyus_timeline_mobile) }}" alt="" style="width:100%; height:100%"/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="bannertop_img_2_input" type="file" name="whyus_timeline_mobile" class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-info">NOTE!</span>
                                        <span>
                                        Kích thước hình ảnh tối ưu 800px X 400px
                                        </span>
                                    </div>
                                </div><br/><br/>


                                <div class="form-group " style="padding-bottom: 20px">
                                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Number speed load<br/>(ms):</label>
                                    <div class="col-lg-3 col-sm-3">
                                            <input type="number" name="whyus_number_speed" class="form-control" value="{{ $homepage_list->whyus_number_speed }}">
                                    </div>
                                </div><br/>



                                <div class="number-table">

                                    <h3>
                                        <span class="pull-right">
                                            <a  href="{{ asset('admin/image/add?type=why-us') }}"
                                                title="Chỉnh sửa hình ảnh"
                                                class="btn btn-default btn-xs"
                                                style=" color: #fff;
                                                        background-color: #337ab7;
                                                        border-color: #2e6da4;
                                                        padding: 6px 12px;">
                                                Thêm
                                            </a>
                                        </span>
                                    </h3>
                                    
                                    <div class="col-md-offset-1">
                                
                                        <table class="table table-striped table-advance table-hover">
                                            <thead>
                                                <tr>
                                                    <th><i class="fa fa-camera"></i> Icon</th>
                                        
                                                    <th class="pull-right"><i class="fa fa-edit"></i> Tùy chỉnh</th>
                                                </tr>
                                            </thead>


                                            <tbody>

                                                @foreach ($img_number_list as $item_partner)
                                                    
                                                    <tr>
                                                        <td>
                                                            <div style="text-align: center">
                                                                <img src="{{ asset('public/upload/image/'.$item_partner->img_src) }}" width="150px" style="margin-bottom: 10px"/>
                                                                <br/>
                                                                <p><strong>{{ $item_partner->img_number }}</strong></p>
                                                                <p>{{ $item_partner->img_description_en }}</p>
                                                            </div>
                                                            
                                                        </td>
                                            
                                                        <td class="pull-right">
                                                            <a  href="{{ asset('admin/image/edit-number/'.$item_partner->img_id) }}"
                                                                title="Cập nhật con số"
                                                                class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>


                                                            <a  rel="{{ $item_partner->img_id }}"
                                                                proname="{{ $item_partner->img_title }}"
                                                                href="javascript:"
                                                                title="Xóa hình ảnh"
                                                                class="deleteSlide btn btn-danger btn-xs">
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



                    <!--General process-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseTwo">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>General process
                            </a>
                        </div>

                        <div id="collapseTwo" class="accordion-body collapse ">
                            

                            <div class="form-group last">
                                <label class="control-label col-md-2">Show process tab</label>
                                <div class="col-md-10">
                                    <input type="checkbox" name="whyus_process_show" @if($homepage_list->whyus_process_show == 1) checked="checked" @endif/>
                                </div>
                            </div><br/><br/>

                            <div class="accordion-inner ">

                                <h3>
                                    <span class="col-md-offset-5 pull-right-sm">
                                        <a  href="{{ asset('admin/process/add') }}"
                                            title="Chỉnh sửa hình ảnh"
                                            class="btn btn-default btn-xs"
                                            style=" color: #fff;
                                                    background-color: #337ab7;
                                                    border-color: #2e6da4;
                                                    padding: 6px 12px;">
                                            Thêm process
                                        </a>
                                    </span>
                                </h3>
                                
                                <div class=" ">

                                    <table class="table table-striped table-advance table-hover cust-table" style="" >
                                        <thead>
                                            <tr>
                                                <th><i class="fa fa-camera"></i> Process name</th>
                                    
                                                <th class="pull-right"><i class="fa fa-edit"></i> Tùy chỉnh</th>
                                            </tr>
                                        </thead>


                                        <tbody>

                                            @foreach ($process_list as $item)
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <a href="{{ asset('admin/process/edit/'.$item->whyus_process_id) }}">
                                                                {{ $item->whyus_process_title_en }}
                                                            </a>
                                                            <br/>
                                                        </div>
                                                    </td>
                                        
                                                    <td class="pull-right">
                                                        <a href="{{ asset('admin/process/edit/'.$item->whyus_process_id) }}" >
                                                            <span class="btn btn-primary btn-xs" title="Chỉnh sửa"><i class="fa fa-pencil"></i></span>
                                                        </a>

                                                        <a  rel="{{ $item->whyus_process_id }}"
                                                            proname="{{ $item->whyus_process_title_vi }}"
                                                            href="javascript:"
                                                            title="Xóa hình ảnh"
                                                            class="deleteProcess btn btn-danger btn-xs">
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



                    <!--Technology & Equipment-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseThree">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Technology & Equipment
                            </a>
                        </div>

                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="accordion-inner">


                                <div class="form-group last">
                                    <label class="control-label col-md-2">Show technology tab</label>
                                    <div class="col-md-10">
                                        <input type="checkbox" name="whyus_tech_show" @if($homepage_list->whyus_tech_show == 1) checked="checked" @endif/>
                                    </div>
                                </div><br/><br/>



                                <div class="form-group last">
                                    <label class="control-label col-md-2">Hình 1</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 185px; height: auto;">
                                                <img id="" src="{{ asset('public/upload/template/'.$whyus_tech->whyus_tech_img_left) }}" alt="" style="width:100%; height:100%"/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="" type="file" name="whyus_tech_img_left" class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-info">NOTE!</span>
                                        <span>
                                        Kích thước hình ảnh tối ưu 800px X 400px
                                        </span>
                                    </div>
                                </div><br/><br/>


                                <div class="form-group last">
                                    <label class="control-label col-md-2">Hình 2</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 185px; height: auto;">
                                                <img id="" src="{{ asset('public/upload/template/'.$whyus_tech->whyus_tech_img_right) }}" alt="" style="width:100%; height:100%"/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="" type="file" name="whyus_tech_img_right" class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-info">NOTE!</span>
                                        <span>
                                        Kích thước hình ảnh tối ưu 800px X 400px
                                        </span>
                                    </div>
                                </div><br/><br/>



                                <div class="number-table">
                                    <h3>
                                        <span class="pull-right">
                                            <a  href="{{ asset('admin/image/add?type=techonology') }}"
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
                                    
                                    <div class="col-md-offset-1">
                                
                                        <table class="table table-striped table-advance table-hover">
                                            <thead>
                                                <tr>
                                                    <th><i class="fa fa-camera"></i> Hình ảnh</th>
                                        
                                                    <th class="text-center"><i class="fa fa-edit"></i> Tùy chỉnh</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                @foreach ($img_tech_list as $item_tech)
                                                    <tr>
                                                        <td>
                                                            <div style="text-align: center">
                                                                <img src="{{ asset('public/upload/image/'.$item_tech->img_src) }}" width="150px" style="margin-bottom: 10px"/>
                                                                <br/>
                                                                <p><strong>{{ $item_tech->img_number }}</strong></p>
                                                                <p>{{ $item_tech->img_description_en }}</p>
                                                            </div>
                                                        </td>
                                                        
                                                        <td class="text-center">
                                                            
                                                            
                                                            {{-- <a class="get-edit-technology-btn" rel="{{ $item_tech->img_id }}" href=""><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a> --}}

                                                            <a  rel="{{ $item_tech->img_id }}"
                                                                proname="{{ $item_tech->img_description_en }}"
                                                                href="javascript:"
                                                                title="Xóa hình ảnh"
                                                                class="deleteSlide btn btn-danger btn-xs">
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




                    <!--Company Profile-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFour">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Company profile
                            </a>
                        </div>

                        <div id="collapseFour" class="accordion-body collapse">
                            <div class="accordion-inner">

                                <div class="form-group last">
                                    <label class="control-label col-md-2">Show profile tab</label>
                                    <div class="col-md-10">
                                        <input type="checkbox" name="whyus_profile_show" @if($homepage_list->whyus_profile_show == 1) checked="checked" @endif/>
                                    </div>
                                </div><br/><br/>

                                <div class="form-group last">
                                    <label class="control-label col-md-2">Hình Profile</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 185px; height: auto;">
                                                <img id="slide_img_1_output" src="{{ asset('public/upload/template/'.$whyus_profile->whyus_profile_img) }}" alt="" style="width:100%; height:100%"/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="slide_img_1_input" type="file" name="whyus_profile_img" class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-info">NOTE!</span>
                                        <span>
                                        Kích thước hình ảnh tối ưu 800px X 400px
                                        </span>
                                    </div>
                                </div><br/><br/>


                                <div class="number-table">
                                    <h3>
                                        <span class="pull-right">
                                            <a  href="{{ asset('admin/template/whyus/profile/add') }}"
                                                title="Chỉnh sửa hình ảnh"
                                                class="btn btn-default btn-xs"
                                                style=" color: #fff;
                                                        background-color: #337ab7;
                                                        border-color: #2e6da4;
                                                        padding: 6px 12px;">
                                                Thêm document link
                                            </a>
                                        </span>
                                    </h3>
                                    
                                    <div class="col-md-offset-1">
                                
                                        <table class="table table-striped table-advance table-hover">
                                            <thead>
                                                <tr>
                                                    <th><i class="fa fa-tag"></i> Tên document</th>
                                        
                                                    <th class="text-center"><i class="fa fa-edit"></i> Tùy chỉnh</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                @foreach ($profile_doc_list as $item)
                                                    <tr>
                                                        <td>
                                                            <div style="text-align: left">
                                                                <p>{{ $item->event_ten_en }}</p>
                                                            </div>
                                                        </td>
                                                        
                                                        <td class="text-center">
                                                            {{-- <a class="get-edit-technology-btn" href="{{ route('admin.template.csr.edit') }}"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a> --}}

                                                            <a  rel="{{ $item->event_id }}"
                                                                proname="{{ $item->event_ten_en }}"
                                                                href="javascript:"
                                                                title="Xóa document"
                                                                class="deleteProfile btn btn-danger btn-xs">
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

                    


                    <!--Certificate Tab content-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFive">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Certificate
                            </a>
                        </div>

                        <div id="collapseFive" class="accordion-body collapse ">
                            <div class="accordion-inner">

                                <div class="form-group last">
                                    <label class="control-label col-md-2">Show certificate tab</label>
                                    <div class="col-md-10">
                                        <input type="checkbox" name="csr_certificate_show" @if($homepage_list->csr_certificate_show == 1) checked="checked" @endif/>
                                    </div>
                                </div><br/><br/>
                               
                                <div class="number-table">
                                    <h3>
                                        <span class="pull-right">
                                            <a  href="{{ asset('admin/template/csr/add') }}"
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
                                    
                                    <div class="col-md-offset-1">
                                
                                        <table class="table table-striped table-advance table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center"><i class="fa fa-camera"></i> Slide</th>
                                        
                                                    <th class="pull-right"><i class="fa fa-edit"></i> Tùy chỉnh</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                @foreach ($img_certificate as $item)
                                                    <tr>
                                                        <td>
                                                            <div style="text-align: center">
                                                                <p>
                                                                    <a class="get-edit-csr-btn" rel="{{ $item->img_id }}" href="{{ asset('admin/template/csr/edit/'.$item->img_id) }}">
                                                                        <img style="height: 100px; width: auto;" src="{{ asset('public/upload/image/'.$item->img_src) }}" alt="">
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </td>
                                            
                                                        <td class="pull-right">
                                                            <a class="get-edit-csr-btn" rel="{{ $item->img_id }}" href="{{ asset('admin/template/csr/edit/'.$item->img_id) }}">
                                                                <i class="fa fa-pencil btn btn-primary btn-xs" style="height: 22px; vertical-align: middle; padding-top: 4px;"></i>
                                                            </a>

                                                            <a  rel="{{ $item->img_id }}"
                                                                proname="Certificate"
                                                                href="javascript:"
                                                                title="Xóa hình ảnh"
                                                                class="deleteSlide btn btn-danger btn-xs">
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


                    <!--Letter Tab content-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseSix">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Letter of appreciation
                            </a>
                        </div>

                        <div id="collapseSix" class="accordion-body collapse ">
                            <div class="accordion-inner">

                                <div class="form-group last">
                                    <label class="control-label col-md-2">Show letter tab</label>
                                    <div class="col-md-10">
                                        <input type="checkbox" name="csr_letter_show" @if($homepage_list->csr_letter_show == 1) checked="checked" @endif/>
                                    </div>
                                </div><br/><br/>
                               
                                <div class="form-group last">
                                    <label class="control-label col-md-2">Hình letter:</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 185px; height: auto;">
                                                <img id="whyus_img_output" src="{{ asset('public/upload/template/'.$homepage_list->social_letter_img) }}" alt="" style="width:100%; height:100%"/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="whyus_img_input" type="file" name="social_letter_img" class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-info">NOTE!</span>
                                        <span>
                                        Kích thước hình ảnh tối ưu 800px X 400px
                                        </span>
                                    </div>
                                </div><br/><br/>

                                

                            </div>
                        </div>
                    </div>

                    <!--Customer-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseSeven">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Customer
                            </a>
                        </div>

                        <div id="collapseSeven" class="accordion-body collapse">
                            <div class="accordion-inner ">

                                <div class="form-group last">
                                    <label class="control-label col-md-2">Show customer tab</label>
                                    <div class="col-md-10">
                                        <input type="checkbox" name="whyus_cust_show" @if($homepage_list->whyus_cust_show == 1) checked="checked" @endif/>
                                    </div>
                                </div><br/><br/>

                                <h3>
                                    <span class="col-md-offset-5 pull-right-sm">
                                        <a  href="{{ asset('admin/template/whyus/addcust?type=customer-partner') }}"
                                            title="Chỉnh sửa hình ảnh"
                                            class="btn btn-default btn-xs"
                                            style=" color: #fff;
                                                    background-color: #337ab7;
                                                    border-color: #2e6da4;
                                                    padding: 6px 12px;">
                                            Thêm logo khách hàng
                                        </a>
                                    </span>
                                </h3>
                                
                                <div class=" ">

                                    <table class="table table-striped table-advance table-hover cust-table" style="" >
                                        <thead>
                                            <tr>
                                                <th><i class="fa fa-camera"></i> Logo</th>
                                    
                                                <th class="text-center"><i class="fa fa-edit"></i> Tùy chỉnh</th>
                                            </tr>
                                        </thead>


                                        <tbody>

                                            @foreach ($customer_list as $item)
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <a href="{{ asset('admin/template/whyus/editcust/'.$item->img_id.'?type=customer-partner') }}">
                                                                <img src="{{ asset('public/upload/image/'.$item->img_src) }}" width="150px" style="margin-bottom: 10px"/>
                                                            </a>
                                                            <br/>
                                                        </div>
                                                    </td>
                                        
                                                    <td class="text-center">
                                                        {{-- <a href="{{ asset('admin/template/whyus/editcust/'.$item->img_id.'?type=customer-partner') }}" >
                                                            <span class="btn btn-primary btn-xs" title="Chỉnh sửa"><i class="fa fa-pencil"></i></span>
                                                        </a> --}}

                                                        <a  rel="{{ $item->img_id }}"
                                                            proname="Customer"
                                                            href="javascript:"
                                                            title="Xóa hình ảnh"
                                                            class="deleteSlide btn btn-danger btn-xs">
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

                    <!--Company member-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseEight">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Company member
                            </a>
                        </div>

                        <div id="collapseEight" class="accordion-body collapse ">
                            <div class="accordion-inner">
                                
                                <h3>
                                    <span class="col-md-offset-5 pull-right-sm">
                                        <a  href="{{ asset('admin/template/whyus/addmember?type=company-member') }}"
                                            title="Chỉnh sửa hình ảnh"
                                            class="btn btn-default btn-xs"
                                            style=" color: #fff;
                                                    background-color: #337ab7;
                                                    border-color: #2e6da4;
                                                    padding: 6px 12px;">
                                            Thêm logo công ty
                                        </a>
                                    </span>
                                </h3>
                                
                                <div class=" ">

                                    <table class="table table-striped table-advance table-hover cust-table" style="" >
                                        <thead>
                                            <tr>
                                                <th><i class="fa fa-camera"></i> Logo</th>
                                    
                                                <th class="text-center"><i class="fa fa-edit"></i> Tùy chỉnh</th>
                                            </tr>
                                        </thead>


                                        <tbody>

                                            @foreach ($company_member_list as $item)
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <a href="{{ asset('admin/template/whyus/editmember/'.$item->img_id.'?type=company-member') }}">
                                                                <img src="{{ asset('public/upload/image/'.$item->img_src) }}" width="150px" style="margin-bottom: 10px"/>
                                                            </a>
                                                            <br/>
                                                        </div>
                                                    </td>
                                        
                                                    <td class="text-center">
                                                        {{-- <a href="{{ asset('admin/template/whyus/editmember/'.$item->img_id.'?type=company-member') }}" >
                                                            <span class="btn btn-primary btn-xs" title="Chỉnh sửa"><i class="fa fa-pencil"></i></span>
                                                        </a> --}}

                                                        <a  rel="{{ $item->img_id }}"
                                                            proname="Company member"
                                                            href="javascript:"
                                                            title="Xóa hình ảnh"
                                                            class="deleteSlide btn btn-danger btn-xs">
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

<script>
    // Edit Why us - tech btn
    $( ".get-edit-technology-btn" ).click(function(e) {
        img_id = $(this).attr('rel').val();

        e.preventDefault();
        $(location).attr('href','admin/template/whyus/tech/edit/' + img_id);
    });

    // Edit Why us - csr
    $( ".get-edit-csr-btn" ).click(function(e) {
        img_id      = $(this).attr('rel').val();
        img_href    = $(this).attr('href').val();

        e.preventDefault();
        $(location).attr('href', img_href);
    });


    $(document).ready(function(){
        // Quick view add slide image
        $('.quickshow-33').click(function() {
            $(".annount-order-33").modal({fadeDuration: 100,fadeDelay: 0.1});
        });

        // Quick view edit number icon
        <?php foreach($img_number_list as $item){ ?>
            $('.quickshow-<?php echo $item->img_id ?>').click(function() {
                $(".annount-order-<?php echo $item->img_id ?>").modal({fadeDuration: 100,fadeDelay: 0.1});
            });
        <?php } ?>
        
    }); 
</script>


<script>
    $(document).ready(function(){

        // Sweet alert delete slide image 
        $('.deleteSlide').click(function(){
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
                    document.location.href = currentlink + "/delete/" + id + "?type=why-us";
                    Swal.fire(
                    'Deleted!',
                    'Hình ảnh đã xóa.',
                    'success'
                    )
                }
            })

        });



        // Sweet alert delete process 
        $('.deleteProcess').click(function(){
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
                    document.location.href = currentlink + "/process/delete/" + id ;
                    Swal.fire(
                    'Deleted!',
                    'Process đã xóa.',
                    'success'
                    )
                }
            })

        });


        // Sweet alert delete company profile 
        $('.deleteProfile').click(function(){
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
                    document.location.href = currentlink + "/profile/delete/" + id ;
                    Swal.fire(
                    'Deleted!',
                    'Profile đã xóa.',
                    'success'
                    )
                }
            })

        });


    });
</script>


@endsection