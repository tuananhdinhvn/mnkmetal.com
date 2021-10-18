@extends('admin.master') 
@section('title', 'Thông tin achievement')

@section('css')
    <!--External CSS-->
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
@endsection


@section('main')

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
            
            <!-- BASIC FORM ELELEMNTS -->
        <div class="col-lg-12 mt">
            <div class="row content-panel">

                <h3>Thông tin achievement</h3>
                <br/>


               
            </div>
        </div>



            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">

                <div class="col-lg-12">

                    <div class="form-panel" style="margin:0">
                          
                        <div class="form-group hidden">
                            <label class="col-sm-2 col-sm-2 control-label">Editor:</label>
                            <div class="col-sm-10">
                                <input type="text" name="pro_editor" class="form-control" value="{{ Auth::user()->name }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên achievement: </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" required name="pro_ten_en" value="{{ $editpro->pro_ten_en }}">
                            </div>
                        </div>


                        <div class="form-group last">
                            <label class="control-label col-md-2">Logo:</label>
                            <div class="col-md-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: auto;">
                                        <img src="{{ asset('public/upload/product/'.$editpro->pro_thumb) }}" class="image_output" alt="{{ $editpro->pro_ten }}" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" name="pro_thumb"class="default image_input" />
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
                        


                        <div class="form-group">
                            <div class="row pull-right" style="padding-right:50px">
                                <input style="width:100px;" type="submit" class="btn btn-primary fileinput-upload fileinput-upload-button" value="Cập nhật">
                                <a href="{{ asset('admin/template/achievement') }}">
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