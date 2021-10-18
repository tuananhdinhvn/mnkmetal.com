@extends('admin.master') 
@section('title', 'Chỉnh sửa process')

@section('css')
<!--External CSS-->
<link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />


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


@endsection


@section('main')
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">

            <div class="col-lg-12">

                <div style="padding: 20px 10px 0 10px;" class="form-panel">
                    <h3>Chỉnh sửa process</h3>
                    <br/>
                    @include('error.note')
                    
                    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">


                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên process <br>(Tiếng Việt)</label>
                            <div class="col-sm-10">
                            <input type="text" name="whyus_process_title_vi" class="form-control" value="{{ $process_detail->whyus_process_title_vi }}"> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên process <br>(Tiếng Anh)</label>
                            <div class="col-sm-10">
                                <input type="text" name="whyus_process_title_en" class="form-control" value="{{ $process_detail->whyus_process_title_en }}"> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên process <br>(Tiếng Trung)</label>
                            <div class="col-sm-10">
                                <input type="text" name="whyus_process_title_zh" class="form-control" value="{{ $process_detail->whyus_process_title_zh }}"> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên process <br>(Tiếng Nhật)</label>
                            <div class="col-sm-10">
                                <input type="text" name="whyus_process_title_ja" class="form-control" value="{{ $process_detail->whyus_process_title_ja }}"> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên process <br>(Tiếng Hàn)</label>
                            <div class="col-sm-10">
                                <input type="text" name="whyus_process_title_kr" class="form-control" value="{{ $process_detail->whyus_process_title_kr }}"> 
                            </div>
                        </div>

                        <div class="form-group last">
                            <label class="control-label col-md-2">Hình đại diện:</label>
                            <div class="col-md-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 120px;">
                                        <img src="{{ asset('public/upload/template/'.$process_detail->whyus_process_thumb) }}" class="image_output" style="width:100%; height:100%" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" name="whyus_process_thumb" class="default image_input" />
                                        </span>
                                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                </div>
                                <span class="label label-info">NOTE!</span>
                                <span>
                                Kích thước hình ảnh tối ưu 1600px X 1060px
                                </span>
                            </div>
                        </div>

                        <!--Hình process-->
                        <div class="form-group last">
                            <label class="control-label col-md-2">Hình ảnh process:</label>
                            <div class="col-md-10">
                                <input class="form-control" type="file" multiple name="file[]">
                                    @foreach ($process_detail_slide as $item)
                                        <div class="col-md-2 alt_item">
                                            <img src="{{ asset('public/upload/process/'.$item->img_src) }}" 
                                            alt="" 
                                            srcset=""
                                            width="100%">
                                            <a href="{{ asset('admin/process/edit/'.$process_detail->whyus_process_id.'/'.$item->img_id ) }}">
                                                <span class="alt-del-but" rel="{{$item->photo_id}}">X</span>
                                            </a>
                                        </div>
                                    @endforeach
                                <br>
                                {{-- <span class="label label-warning" style="font-weight: 200">NOTE !</span>
                                <span>
                                Kích thước hình ảnh tối ưu 1024px X 683px
                                </span> --}}
                            </div>
                        </div>
                        

                       

                       

                        <div class=" pull-right">
                            <input style="width:100px;" type="submit" class="btn btn-primary" value="Cập nhật">
                            <a href="{{ asset('admin/template/whyus') }}">
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