@extends('admin.master') 
@section('title', 'Quản trị template') 
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
            <h2 class="centered">Intro Project</h2>



            <div class="col-md-12 mt mb">
                <div class="accordion" id="accordion2">

                <form method="post" enctype='multipart/form-data'>

                    <!--Intro-->

                    
                    <div class="form-group" style="padding-bottom: 20px;">
                        <label class="col-sm-2 col-sm-2 control-label">Tiếng Việt:</label>
                        <div class="col-sm-10">
                            <textarea class="editmce" name="project_intro_vi" id="" cols="80%" rows="10" style="width: 100%">{{ $project_item->project_intro_vi }}</textarea>
                        </div>
                    </div><br/>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label class="col-sm-2 col-sm-2 control-label">Tiếng Anh:</label>
                        <div class="col-sm-10">
                            <textarea class="editmce" name="project_intro_en" id="" cols="80%" rows="10" style="width: 100%">{{ $project_item->project_intro_en }}</textarea>
                        </div>
                    </div><br/>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label class="col-sm-2 col-sm-2 control-label">Tiếng Trung:</label>
                        <div class="col-sm-10">
                            <textarea class="editmce" name="project_intro_zh" id="" cols="80%" rows="10" style="width: 100%">{{ $project_item->project_intro_zh }}</textarea>
                        </div>
                    </div><br/>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label class="col-sm-2 col-sm-2 control-label">Tiếng Nhật:</label>
                        <div class="col-sm-10">
                            <textarea class="editmce" name="project_intro_ja" id="" cols="80%" rows="10" style="width: 100%">{{ $project_item->project_intro_ja }}</textarea>
                        </div>
                    </div><br/>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tiếng Hàn:</label>
                        <div class="col-sm-10">
                            <textarea class="editmce" name="project_intro_kr" id="" cols="80%" rows="10" style="width: 100%">{{ $project_item->project_intro_kr }}</textarea>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12" style="height: 20px; width: 100%"><p></p></div>
                    </div>     

                    <br/><br/>
                    <hr>


                    <h2 class="centered">Intro Project box</h2>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label class="col-sm-2 col-sm-2 control-label">Tiếng Việt:</label>
                        <div class="col-sm-10">
                            <input type="text" required name="project_intro_box_vi" class="form-control" value="{{ $project_item->project_intro_box_vi }}" >
                        </div>
                    </div><br/>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label class="col-sm-2 col-sm-2 control-label">Tiếng Anh:</label>
                        <div class="col-sm-10">
                            <input type="text" required name="project_intro_box_en" class="form-control" value="{{ $project_item->project_intro_box_en }}" >
                        </div>
                    </div><br/>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label class="col-sm-2 col-sm-2 control-label">Tiếng Trung:</label>
                        <div class="col-sm-10">
                            <input type="text" required name="project_intro_box_zh" class="form-control" value="{{ $project_item->project_intro_box_zh }}" >
                        </div>
                    </div><br/>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label class="col-sm-2 col-sm-2 control-label">Tiếng Nhật:</label>
                        <div class="col-sm-10">
                            <input type="text" required name="project_intro_box_ja" class="form-control" value="{{ $project_item->project_intro_box_ja }}" >
                        </div>
                    </div>
                    <br/>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tiếng Hàn:</label>
                        <div class="col-sm-10">
                            <input type="text" required name="project_intro_box_kr" class="form-control" value="{{ $project_item->project_intro_box_kr }}" >
                        </div>
                    </div>
                    <br/>

                  
                    {{-- <div class="form-group last" style="margin-top: 20px">
                        <label class="control-label col-md-2">Background:</label>
                        <div class="col-md-10">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: auto;">
                                    <img src="{{ asset('public/upload/template/'.$project_item->project_all_bg) }}" class="image_output" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-theme02 btn-file">
                                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                        <input type="file" name="project_all_bg"class="default image_input" />
                                    </span>
                                    <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                </div>
                            </div>
                            <span class="label label-info">NOTE!</span>
                            <span>
                            Kích thước hình ảnh tối ưu 800px X 675px
                            </span>
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