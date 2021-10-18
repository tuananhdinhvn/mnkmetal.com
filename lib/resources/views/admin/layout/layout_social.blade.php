@extends('admin.master') 
@section('title', 'Quản trị social') 
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
            <h2 class="centered">Social</h2>
            <div class="col-md-12 mt mb">
                <div class="accordion" id="accordion2">

                <form method="post" enctype='multipart/form-data'>

                    <!--Logo đầu trang Favicon-->
                    <div class="accordion-group">
                        <h3>Intro</h3>

                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <div class="form-group last">
                                        
                                    <div class="col-md-12 " style="padding-bottom: 40px">
                                        <div class="col-md-12">
                                            <div class="form-group" style="margin-bottom: 30px;">
                                                <label class="col-sm-2 col-sm-2 control-label">Tiếng Việt:</label>
                                                <div class="col-sm-10">
                                                    <textarea required name="social_intro_vi" class="form-control editmce" rows="10">{{ $homepage_list->social_intro_vi }}</textarea>
                                                </div>
                                            </div><br/>

                                            <div class="form-group" style="margin-bottom: 30px;">
                                                <label class="col-sm-2 col-sm-2 control-label">Tiếng Anh:</label>
                                                <div class="col-sm-10">
                                                    <textarea required name="social_intro_en" class="form-control editmce" rows="10">{{ $homepage_list->social_intro_en }}</textarea>
                                                </div>
                                            </div><br/>

                                            <div class="form-group" style="margin-bottom: 30px;">
                                                <label class="col-sm-2 col-sm-2 control-label">Tiếng Trung:</label>
                                                <div class="col-sm-10">
                                                    <textarea required name="social_intro_zh" class="form-control editmce" rows="10">{{ $homepage_list->social_intro_zh }}</textarea>
                                                </div>
                                            </div><br/>

                                            <div class="form-group" style="margin-bottom: 30px;">
                                                <label class="col-sm-2 col-sm-2 control-label">Tiếng Nhật:</label>
                                                <div class="col-sm-10">
                                                    <textarea required name="social_intro_ja" class="form-control editmce" rows="10">{{ $homepage_list->social_intro_ja }}</textarea>
                                                </div>
                                            </div><br/>

                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Tiếng Hàn:</label>
                                                <div class="col-sm-10">
                                                    <textarea required name="social_intro_kr" class="form-control editmce" rows="10">{{ $homepage_list->social_intro_kr }}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/><br/>

                    <style>
                        @media only screen and (min-width: 769px) {
                           #space-pc{
                                margin-top: 180px
                           }
                           
                            
                        }
                    </style>

                    <!--Numbers-->
                    {{-- <div class="accordion-group" id="space-pc">
                        <div class="col-sm-2 col-sm-2 pull-right">
                            <a href="{{ asset('admin/social/add') }}" class="pull-right btn btn-primary">
                                Thêm Social
                            </a>
                        </div>
                        <h3>Social list</h3>

                        <div id="collapseFour" class="accordion-body">
                            <table class="table table-striped table-advance table-hover">
                                <hr>
                                <thead>
                                    <tr>
                                        <th class="hidden-phone"><i class="fa fa-picture-o"></i> Photo</th>
                                        <th style="text-align:center"><i class=" fa fa-dot-circle-o"></i> Hiển thị</th>
                                        <th style="text-align: center"><i class=" fa fa-edit"></i> Tùy chỉnh</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($img_social_list as $item)
                                        <tr>
                                            <td class="hidden-phone">
                                                <img width="100px" height="auto" src="{{ asset('public/upload/image/'.$item->img_src) }}" />
                                            </td>
        
                                            <td style="text-align:center">
                                                @if ($item->img_show==1)
                                                    <a href="{{ asset('admin/social/show/'.$item->img_id) }}" class="btn btn-success btn-xs">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                @else
                                                    <a href="{{ asset('admin/social/show/'.$item->img_id) }}" class="btn btn-danger btn-xs">
                                                        <i class="fa fa-minus"></i>
                                                    </a>
                                                @endif
                                            </td>
                                            
                                            <td style="text-align: center">
                                                <a href="{{ asset('admin/social/detail/'.$item->img_id) }}" class="btn btn-primary btn-xs">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                
                                                <a  rel="{{ $item->img_id }}"
                                                    proname="{{ $item->img_title }}"
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
                    </div> --}}


                    {{-- <!--Certificate Tab content-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseTwo">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Certificate
                            </a>
                        </div>

                        <div id="collapseTwo" class="accordion-body collapse ">
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
                                                                <img style="height: 100px; width: auto;" src="{{ asset('public/upload/image/'.$item->img_src) }}" alt="">
                                                                </p>
                                                            </div>
                                                        </td>
                                            
                                                        <td class="pull-right">
                                                            

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
                    </div> --}}


                    {{-- <!--Letter Tab content-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseThree">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Letter of appreciation
                            </a>
                        </div>

                        <div id="collapseThree" class="accordion-body collapse ">
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
                                                <img id="bannertop_img_1_output" src="{{ asset('public/upload/template/'.$homepage_list->social_letter_img) }}" alt="" style="width:100%; height:100%"/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-theme02 btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input id="bannertop_img_1_input" type="file" name="social_letter_img" class="default" />
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
                    </div> --}}


                    <!--Social Tab content-->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFour">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Corporate social activities
                            </a>
                        </div>

                        <div id="collapseFour" class="accordion-body collapse ">
                            <div class="accordion-inner">

                                <div class="form-group last">
                                    <label class="control-label col-md-2">Show social tab</label>
                                    <div class="col-md-10">
                                        <input type="checkbox" name="csr_social_show" @if($homepage_list->csr_social_show == 1) checked="checked" @endif/>
                                    </div>
                                </div><br/><br/>

                                <div class="number-table">
                                    <h3>
                                        <span class="pull-right">
                                            <a  href="{{ asset('admin/template/social/add') }}"
                                                title="Chỉnh sửa hình ảnh"
                                                class="btn btn-default btn-xs"
                                                style=" color: #fff;
                                                        background-color: #337ab7;
                                                        border-color: #2e6da4;
                                                        padding: 6px 12px;">
                                                Thêm hình
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

                                                @foreach ($img_social_slide as $item)
                                                    <tr>
                                                        <td>
                                                            <div style="text-align: center">
                                                                <img src="{{ asset('public/upload/image/'.$item->img_src) }}" width="150px" style="margin-bottom: 10px"/>
                                                                <br/>
                                                                <p>{{ $item->img_description_en }}</p>
                                                            </div>
                                                        </td>
                                            
                                                        <td class="pull-right">
                                                            {{-- <a href="{{ asset('admin/image/edit/'.$item_tech->img_id.'?type=techonology') }}"><button class="btn btn-primary">Cập nhật</button></a> --}}

                                                            

                                                            <a  rel="{{ $item->img_id }}"
                                                                proname="{{ $item->img_description_en }}"
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
                    'Đã xóa.',
                    'success'
                    )
                }
            })

        });
    });
</script>


@endsection