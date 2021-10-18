@extends('admin.master') 
@section('title', 'Giao diện sản phẩm') 
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
            <h2 class="centered">Giao diện sản phẩm</h2>
            <div class="col-md-10 col-md-offset-1 mt mb">
                <div class="accordion" id="accordion2">

                <form method="post" enctype='multipart/form-data'>

                    <div class="col-md-6">
                        <img src="{{ asset('public/template/product.png') }}" style="width:100%"/>
                    </div>

                    <div class="col-md-6">
                        <h3>1. Danh mục sản phẩm:</h3>
                        <div class="col-md-offset-1">
                            <div class="row">    
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="newsletter" class="control-label col-lg-4 col-sm-4" style="padding-top: 10px; padding-left: 0;">Hiển thị:</label>
                                    <div class="col-lg-8 col-sm-8">
                                        <input type="checkbox" style="width: 20px" class="checkbox form-control" value="{{ $product->product_category }}" name="product_category">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3>2. Bộ lọc sản phẩm:</h3>
                        <div class="col-md-offset-1">
                            <div class="row">    
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="newsletter" class="control-label col-lg-4 col-sm-4" style="padding-top: 10px; padding-left: 0;">Hiển thị:</label>
                                    <div class="col-lg-8 col-sm-8">
                                        <input type="checkbox" style="width: 20px" value="{{ $product->product_fillter }}" class="checkbox form-control" name="product_fillter">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <h3>3. Hình quảng cáo:</h3>

                        <div class="col-md-offset-1">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="{{ asset('public/upload/template/'.$product->product_advertise) }}" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-theme02 btn-file">
                                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                        <input type="file" name="product_advertise"class="default" />
                                    </span>
                                    <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                </div>
                            </div>
                        </div>

                        <h3>4. Hình banner:</h3>

                        <div class="col-md-offset-1">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="{{ asset('public/upload/template/'.$product->product_banner) }}" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-theme02 btn-file">
                                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Chọn hình ảnh</span>
                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                        <input type="file" name="product_banner"class="default" />
                                    </span>
                                    <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
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

@stop