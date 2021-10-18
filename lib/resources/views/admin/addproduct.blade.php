@extends('admin.master') 
@section('title', 'Thêm achievement') 

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


    <script type="text/javascript">

        $("#file-input").fileinput({
            theme: 'fa',
            uploadUrl: "http://localhost/customer/saithanhpool/admin/product/upload-submit",
            deleteUrl: "http://localhost/customer/saithanhpool/admin/product/delete-submit",
            uploadExtraData:function(){
                return {
                    _token:$("input[name='_token']").val()
                };
            },
            allowedFileTypes: ['image'],
            showCancel: true,
            initialPreviewAsData: true,
            overwriteInitial: true,
            maxFilePreviewSize: 10240,
            maxFileSize:2000,
            maxFileNum:5,
            showCaption: false,
            initialCaption: "File upload",
            slugCallback:function(filename){
                return filename.replace("(","_").replace(']','_');
            }
        });

        var files = $('#input-id').fileinput('getFileList');
        console.log('Files selected - ' + files);

    </script>
@endsection


@section('main')

<style>
    .main-section{
        margin: 0 auto;
        padding: 0 20px 0 0;
        width: 100%
    }
</style>


<section id="main-content">

    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">

    <section class="wrapper">
        
        <!-- BASIC FORM ELELEMNTS -->
        <div class="col-lg-12 mt">
            <div class="row content-panel">

                <h3 class="mb mt">Thêm achievement</h3>
                <br>
                @include('error.note')
            
            </div>
        </div>
        <!--End transfer tab-->





     
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel" style="margin:0">
                  
                    <div class="form-group hidden">
                        <label class="col-sm-2 col-sm-2 control-label">Tác giả:</label>
                        <div class="col-sm-10">
                            <input type="text" name="pro_author" class="form-control" value="{{ Auth::user()->name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tên achievement: </label>
                        <div class="col-sm-10">
                            <input type="text" required name="pro_ten_en" class="form-control">
                        </div>
                    </div>

                    <div class="form-group last">
                        <label class="control-label col-md-2">Logo:</label>
                        <div class="col-md-10">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: auto;">
                                    <img src="{{ asset('public/noimage.jpg') }}" class="image_output" style="width:100%; height:100%" alt="" />
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
                            <span class="label label-info">NOTE!</span>
                            <span>
                            Kích thước hình ảnh tối ưu 450px X 450px
                            </span>
                        </div>
                    </div>


                    <div class="form-group last">
                        <label class="control-label col-md-2">Hình ảnh chứng nhận:</label>
                        <div class="col-md-10">
                            <input class="form-control" type="file" multiple name="file[]">
                        </div>
                    </div>
                


               
                    
                    <div class="form-group">
                        <div class="row pull-right" style="padding-right:50px">
                            <input style="width:100px;" type="submit" class="btn btn-primary fileinput-upload fileinput-upload-button" value="Thêm">
                            <a href="{{ asset('admin/template/achievement') }}"><input style="width:100px;" type="button" class="btn btn-danger" value="Hủy"></a>
                        </div>
                    </div>

                    {{ csrf_field() }}

                </div>
            </div>
            <!-- col-lg-12-->
        </div>
        <!-- /row -->

    </section>
    <!-- /wrapper -->

</form>
</section>

@endsection


<!-- Procat child auto filter -->
@section('scriptajax')
<script>
    // $(document).ready(function(){
    //     $('#procat-main').change(function(){
    //         var id_procat_main = $(this).val();
    //         var currentlink = window.location.pathname;

    //         $.get(currentlink + "/procat-child/"+id_procat_main, function(data){
    //             $("#procat-child").html(data);
    //         });
            
    //     });
    // });
</script>
@endsection