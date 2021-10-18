@extends('admin.master') 
@section('title', 'Quản trị hình ảnh') 
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
            <h2 class="centered">Quản trị hình ảnh</h2>
            <div class="col-md-10 col-md-offset-1 mt mb">
                <div class="accordion" id="accordion2">

                <form method="post" enctype='multipart/form-data'>

                    <!--Logo đầu trang Favicon-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseOne">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Logo - Favicon
                            </a>
                        </div>

                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <div class="form-group last">
                                        
                                    <div class="col-md-12 col-md-offset-1">
                                        <div class="col-md-6">
                                            <label><strong>LOGO</strong></label>
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px; background: #cecece;">
                                                    <img id="homepage_logo_output" src="{{ asset('public/upload/template/'.$homepage_list->homepage_logo) }}" alt="" />
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                <div>
                                                    <span class="btn btn-theme02 btn-file">
                                                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                        <input id="homepage_logo_input" type="file" name="homepage_logo"class="default " />
                                                    </span>
                                                    <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label><strong>FAVICON</strong></label>
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px; background: #cecece;">
                                                    <img id="homepage_favicon_output" src="{{ asset('public/upload/template/'.$homepage_list->homepage_logo_plus) }}" alt="" style="">
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                <div>
                                                    <span class="btn btn-theme02 btn-file">
                                                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                        <input id="homepage_favicon_input" type="file" name="homepage_logo_plus"class="default" />
                                                    </span>
                                                    <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseTwo">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Slide
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="col-md-6 ">
                                <img src="{{ asset('public/template/slide.png') }}" style="width:100%"/>

                                <div class="form-group " style="padding-top: 20px">
                                    <label for="newsletter" class="control-label col-lg-6 col-sm-6">Number speed load<br/>(ms):</label>
                                    <div class="col-lg-6 col-sm-6">
                                            <input type="number" name="main_slide_speed_load" class="form-control" value="{{ $homepage_list->main_slide_speed_load }}">
                                    </div>
                                </div><br/>


                            </div>

                            <div class="col-md-6 ">

                                <h3>Hình ảnh slide:
                                    <span class="pull-right">
                                        <a  href="{{ asset('admin/image/add?type=slide') }}"
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
                                    
                                                <th class="pull-right"><i class="fa fa-edit"></i> Tùy chỉnh</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($img_slide_list as $item_slide)
                                                
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('public/upload/image/'.$item_slide->img_src) }}" width="150px"/>
                                                    </td>
                                        
                                                    <td class="pull-right">

                                                        {{-- <a href="{{ asset('admin/image/show/'.$item_slide->img_show) }}">

                                                            @if ($item_slide->img_show==1)
                                                                <button class="btn btn-success btn-xs" title="Đang hiển thị"><i class="fa fa-check"></i></button>
                                                            @else
                                                                <button class="btn btn-danger btn-xs" title="Đang ẩn"><i class="fa fa-minus"></i></button>
                                                            @endif
                                                            
                                                        </a> --}}



                                                        <a  rel="{{ $item_slide->img_id }}"
                                                            proname="Tên slide"
                                                            href="javascript:"
                                                            title="Chỉnh sửa hình ảnh"
                                                            class="btn btn-default btn-xs quickshow-{{ $item_slide->img_id }}">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                
                                                        <!-- Modal quick view edit slide image -->
                                                        <div id="annount-order" class="modal annount-order-{{ $item_slide->img_id }}" style="max-width:80%; max-height:80%; padding: 15px">
                                                            <br/>
                                                            <div class="col-md-4" style="text-align:left; padding-bottom: 20px;" >
                                                                <img width="100%" height="auto" src="{{ asset('public/upload/image/'.$item_slide->img_src) }}" />
                                                            
                                                            </div>
                
                                                            <div class="col-md-8"  style="">                                                            
                
                                                                <strong>Title: </strong>
                                                                <div>
                                                                    <p>{{ $item_slide->img_title }}</p>
                                                                </div>
                                                                <br/>

                                                                <strong>Mô tả: </strong>
                                                                
                                                                    <p>
                                                                        <div>
                                                                            {!! $item_slide->img_description !!}
                                                                        </div>
                                                                    </p>
                                                                
                                                            
                                                                <p class="float-right" style="text-align:right; padding-top: 50px">
                                                                    <a href="{{ asset('admin/image/edit/'.$item_slide->img_id.'?type=slide') }}"><button class="btn btn-primary">Cập nhật slide</button></a>
                                                                </p>
                
                                                            </div>
                                                        </div>

                                                        {{-- <a href="{{ asset('admin/image/edit/'.$item_slide->img_id.'?type=slide') }}"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a> --}}

                                                        <a  rel="{{ $item_slide->img_id }}"
                                                            proname="{{ $item_slide->img_title }}"
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


                    <!--Album-->
                    {{-- <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseThree">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Hình ảnh văn phòng
                            </a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="accordion-inner">
    
                                <div class="col-md-12 ">

                                    <h3>
                                        <span class="pull-right">
                                            <a  href="{{ asset('admin/image/add?type=album') }}"
                                                title="Chỉnh sửa hình ảnh"
                                                class="btn btn-default btn-xs"
                                                style=" color: #fff;
                                                        background-color: #337ab7;
                                                        border-color: #2e6da4;
                                                        padding: 6px 12px;">
                                                Thêm ảnh
                                            </a>
                                        </span>
                                    </h3>
                                    
                                    <div class="col-md-offset-1">
                                   
                                        <table class="table table-striped table-advance table-hover">
                                            <thead>
                                                <tr>
                                                    <th><i class="fa fa-camera"></i> Hình ảnh</th>
                                        
                                                    <th class="pull-right"><i class="fa fa-edit"></i> Tùy chỉnh</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($img_album_list as $item_album)
                                                    
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('public/upload/image/'.$item_album->img_src) }}" width="150px"/>
                                                        </td>
                                            
                                                        <td class="pull-right">
                                                            
                                                            <a  rel="{{ $item_album->img_id }}"
                                                                proname="Tên album"
                                                                href="javascript:"
                                                                title="Chỉnh sửa hình ảnh"
                                                                class="btn btn-default btn-xs quickshow-{{ $item_album->img_id }}">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                    
                                                            <!-- Modal quick view edit album image -->
                                                            <div id="annount-order" class="modal annount-order-{{ $item_album->img_id }}" style="max-width:80%; max-height:80%; padding: 15px">
                                                                <br/>
                                                                <div class="col-md-4" style="text-align:left; padding-bottom: 20px;" >
                                                                    <img width="100%" height="auto" src="{{ asset('public/upload/image/'.$item_album->img_src) }}" />
                                                                </div>
                    
                                                                <div class="col-md-8"  style="">                                                            
                    
                                                                    <strong>Title: </strong>
                                                                    <div>
                                                                        <p>{{ $item_album->img_title }}</p>
                                                                    </div>
                                                                    <br/>
                                                                
                                                                    <p class="float-right" style="text-align:right; padding-top: 50px">
                                                                        <a href="{{ asset('admin/image/edit/'.$item_album->img_id.'?type=album') }}"><button class="btn btn-primary">Cập nhật album</button></a>
                                                                    </p>
                    
                                                                </div>
                                                            </div>
    

                                                            <a  rel="{{ $item_album->img_id }}"
                                                                proname="{{ $item_album->img_title }}"
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
                    </div> --}}


                    <!--Partners logo-->
                    {{-- <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFour">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Logo achievemet
                            </a>
                        </div>


                        <div id="collapseFour" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <div class="col-md-6 ">
                                    <img src="{{ asset('public/template/achievement.PNG') }}" style="width:100%"/>
                                </div>

                                <div class="col-md-6 ">

                                    <h3>Hình ảnh logo:
                                        <span class="pull-right">
                                            <a  href="{{ asset('admin/image/add?type=partner') }}"
                                                title="Chỉnh sửa hình ảnh"
                                                class="btn btn-default btn-xs"
                                                style=" color: #fff;
                                                        background-color: #337ab7;
                                                        border-color: #2e6da4;
                                                        padding: 6px 12px;">
                                                Thêm logo
                                            </a>
                                        </span>
                                    </h3>
                                    
                                    <div class="col-md-offset-1">
                                
                                        <table class="table table-striped table-advance table-hover">
                                            <thead>
                                                <tr>
                                                    <th><i class="fa fa-camera"></i> Logo</th>
                                        
                                                    <th class="pull-right"><i class="fa fa-edit"></i> Tùy chỉnh</th>
                                                </tr>
                                            </thead>


                                            <tbody>

                                                @foreach ($img_partner_list as $item_partner)
                                                    
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('public/upload/image/'.$item_partner->img_src) }}" width="150px"/>
                                                        </td>
                                            
                                                        <td class="pull-right">
                                                            
                                                            <a  rel="{{ $item_partner->img_id }}"
                                                                proname="Tên album"
                                                                href="javascript:"
                                                                title="Chỉnh sửa hình ảnh"
                                                                class="btn btn-default btn-xs quickshow-{{ $item_partner->img_id }}">
                                                                <i class="fa fa-eye"></i>
                                                            </a>

                                                            <!-- Modal quick view edit album image -->
                                                            <div id="annount-order" class="modal annount-order-{{ $item_partner->img_id }}" style="max-width:80%; max-height:80%; padding: 15px">
                                                                <br/>
                                                                <div class="col-md-4" style="text-align:left; padding-bottom: 20px;" >
                                                                    <img width="100%" height="auto" src="{{ asset('public/upload/image/'.$item_partner->img_src) }}" />
                                                                </div>

                                                                <div class="col-md-8"  style="">                                                            

                                                                    <strong>Title: </strong>
                                                                    <div>
                                                                        <p>{{ $item_partner->img_title }}</p>
                                                                    </div>
                                                                    <br/>
                                                                
                                                                    <p class="float-right" style="text-align:right; padding-top: 50px">
                                                                        <a href="{{ asset('admin/image/edit/'.$item_partner->img_id.'?type=partner') }}"><button class="btn btn-primary">Cập nhật logo</button></a>
                                                                    </p>

                                                                </div>
                                                            </div>

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
                    </div> --}}



                    <!--Login background-->
                    {{-- <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFive">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Login background
                            </a>
                        </div>
                        <div id="collapseFive" class="accordion-body collapse">
                            <div class="accordion-inner">
    
                                <div class="col-md-12 col-md-offset-1">
                                    <label><strong>HÌNH BACKGROUND</strong></label>
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: auto;">
                                            <img id="promotion_img_output" src="{{ asset('public/upload/template/'.$homepage_list->promotion_img) }}" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input id="promotion_img_input" type="file" name="promotion_img"class="default" />
                                            </span>
                                            <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>

                                   

                                </div>
                            </div>
                        </div>
                    </div> --}}


                    <!--Why us-->
                    {{-- <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseSix">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Tại sao lại chọn chúng tôi
                            </a>
                        </div>
                        <div id="collapseSix" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <div class="col-md-6 ">
                                    <img src="{{ asset('public/template/whyus.png') }}" style="width:100%"/>
                                </div>
    
                                <div class="col-md-6 ">

                                    <h3>1. Title:</h3>
                                    <p><input class="form-control" type="text" name="whyus_title" style="width:100%" value="{{ $homepage_list->whyus_title }}"></p>
                                    
                                    <h3>2. Hình banner:</h3>
                                    <div class="fileupload fileupload-new col-md-offset-1" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img id="whyus_img_output" src="{{ asset('public/upload/template/'.$homepage_list->whyus_img) }}" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input id="whyus_img_input" type="file" name="whyus_img"class="default" />
                                            </span>
                                            <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>

                                    <h3>3. Icon đại diện:</h3>
                                    <div class="col-md-offset-1">
                                        <label>Icon 1:</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img id="whyus_icon_1_output" src="{{ asset('public/upload/template/'.$homepage_list->whyus_icon_1) }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="whyus_icon_1_input" type="file" name="whyus_icon_1"class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <p>
                                            <label>Tiêu đề 1:</label> 
                                            <input class="form-control" type="text" name="whyus_title_1" style="width:100%" value="{{ $homepage_list->whyus_title_1 }}">
                                            <label>Mô tả 1:</label> 
                                            <input class="form-control" type="text" name="whyus_description_1" style="width:100%" value="{{ $homepage_list->whyus_description_1 }}">
                                        </p>
                                        <hr/>

                                        <label>Icon 2:</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img id="whyus_icon_2_output" src="{{ asset('public/upload/template/'.$homepage_list->whyus_icon_2) }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="whyus_icon_2_input" type="file" name="whyus_icon_2"class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <p>
                                            <label>Tiêu đề 2:</label> 
                                            <input class="form-control" type="text" name="whyus_title_2" style="width:100%" value="{{ $homepage_list->whyus_title_2 }}">
                                            <label>Mô tả 2:</label> 
                                            <input class="form-control" type="text" name="whyus_description_2" style="width:100%" value="{{ $homepage_list->whyus_description_2 }}">
                                        </p>
                                        <hr/>

                                        <label>Icon 3:</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img id="whyus_icon_3_output" src="{{ asset('public/upload/template/'.$homepage_list->whyus_icon_3) }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="whyus_icon_3_input" type="file" name="whyus_icon_3"class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <p>
                                            <label>Tiêu đề 3:</label> 
                                            <input class="form-control" type="text" name="whyus_title_3" style="width:100%" value="{{ $homepage_list->whyus_title_3 }}">
                                            <label>Mô tả 3:</label> 
                                            <input class="form-control" type="text" name="whyus_description_3" style="width:100%" value="{{ $homepage_list->whyus_description_3 }}">
                                        </p>
                                        <hr/>

                                        <label>Icon 4:</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img id="whyus_icon_4_output" src="{{ asset('public/upload/template/'.$homepage_list->whyus_icon_4) }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="whyus_icon_4_input" type="file" name="whyus_icon_4"class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <p>
                                            <label>Tiêu đề 4:</label> 
                                            <input class="form-control" type="text" name="whyus_title_4" style="width:100%" value="{{ $homepage_list->whyus_title_4 }}">
                                            <label>Mô tả 4:</label> 
                                            <input class="form-control" type="text" name="whyus_description_4" style="width:100%" value="{{ $homepage_list->whyus_description_4 }}">
                                        </p>
                                        <hr/>

                                        <label>Icon 5:</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img id="whyus_icon_5_output" src="{{ asset('public/upload/template/'.$homepage_list->whyus_icon_5) }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="whyus_icon_5_input" type="file" name="whyus_icon_5"class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <p>
                                            <label>Tiêu đề 5:</label> 
                                            <input class="form-control" type="text" name="whyus_title_5" style="width:100%" value="{{ $homepage_list->whyus_title_5 }}">
                                            <label>Mô tả 5:</label> 
                                            <input class="form-control" type="text" name="whyus_description_5" style="width:100%" value="{{ $homepage_list->whyus_description_5 }}">
                                        </p>
                                        <hr/>

                                        <label>Icon 6:</label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img id="whyus_icon_6_output" src="{{ asset('public/upload/template/'.$homepage_list->whyus_icon_6) }}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="whyus_icon_6_input" type="file" name="whyus_icon_6"class="default" />
                                                </span>
                                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                            </div>
                                        </div>
                                        <p>
                                            <label>Tiêu đề 6:</label> 
                                            <input class="form-control" type="text" name="whyus_title_6" style="width:100%" value="{{ $homepage_list->whyus_title_6 }}">
                                            <label>Mô tả 6:</label> 
                                            <input class="form-control" type="text" name="whyus_description_6" style="width:100%" value="{{ $homepage_list->whyus_description_6 }}">
                                        </p>
                                        
                                        
    
                                    </div>
                                    
                                    
                                </div>
                                    
                            </div>
                                
                        </div>
                        
                    </div> --}}

                    <input class="pull-right btn btn-primary mt" type="submit" value="Cập nhật">

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

<script>
    $(document).ready(function(){
        // Quick view add slide image
        $('.quickshow-33').click(function() {
            $(".annount-order-33").modal({fadeDuration: 100,fadeDelay: 0.1});
        });

        // Quick view edit slide image
        <?php foreach($img_slide_list as $item){ ?>
            $('.quickshow-<?php echo $item->img_id ?>').click(function() {
                $(".annount-order-<?php echo $item->img_id ?>").modal({fadeDuration: 100,fadeDelay: 0.1});
            });
        <?php } ?>


        // Quick view edit album image
        <?php foreach($img_album_list as $item){ ?>
            $('.quickshow-<?php echo $item->img_id ?>').click(function() {
                $(".annount-order-<?php echo $item->img_id ?>").modal({fadeDuration: 100,fadeDelay: 0.1});
            });
        <?php } ?>

        // Quick view edit partner logo
        <?php foreach($img_partner_list as $item){ ?>
            $('.quickshow-<?php echo $item->img_id ?>').click(function() {
                $(".annount-order-<?php echo $item->img_id ?>").modal({fadeDuration: 100,fadeDelay: 0.1});
            });
        <?php } ?>
        

        // $('.quickshow-22').click(function() {
        //     $(".annount-order-22").modal({fadeDuration: 100,fadeDelay: 0.1});
        // });
        
    }); 
</script>


<!---->
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
                    document.location.href = currentlink + "/delete/" + id;
                    Swal.fire(
                    'Deleted!',
                    'Slide đã xóa.',
                    'success'
                    )
                }
            })

        });
    });
</script>


@endsection