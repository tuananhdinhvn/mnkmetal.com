@extends('admin.master') 
@section('title', 'Chỉnh sửa danh mục con') 
@section('main')

<section id="main-content">
    <form class="form-horizontal style-form" method="post">
        
        <section class="wrapper">


            <!-- BASIC FORM ELELEMNTS -->
            <div class="col-lg-12 mt">
                <div class="row content-panel">

                    <h4 class="mb">Chỉnh sửa danh mục con</h4>
                    <br>
                    @include('error.note')


                    <!--Panel heading-->
                    <div class="panel-heading">
                        <ul class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a data-toggle="tab" href=".vilang">Tiếng Việt</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href=".enlang" class="contact-map">English</a>
                        </li>
                        </ul>
                    </div>
                    <!-- /panel-heading -->


                    <div class="panel-body">
                        <div class="tab-content">

                            <!--Tab tiếng Việt-->
                            <div class="tab-pane active vilang">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Tên danh mục<br>(Tiếng Việt): </label>
                                    <div class="col-sm-10">
                                        <input type="text" required name="procat2_ten" value="{{ $procatchild_item->procat2_ten }}" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!--Tab English-->
                            <div class="tab-pane enlang">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Tên danh mục<br>(Tiếng Anh): </label>
                                    <div class="col-sm-10">
                                        <input type="text" required name="procat2_ten_en" value="{{ $procatchild_item->procat2_ten_en }}" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!--End transfer tab -->



            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                
                <div class="col-lg-12">
                    <div class="form-panel" style="margin:0">
                        
                            <div class="form-group ">
                                <label for="newsletter" class="control-label col-lg-2 col-sm-3">Danh mục chính:</label>
                                <div class="col-lg-10 col-sm-9">
                                    <select class="alert alert-primary" name="procat2_procat_id" style="width:200px; border: 1.5px solid #dbdbdb;">
                                        @foreach ($procat_list as $item)
                                            <option value="{{ $item->procat_id }}" @if ($procatchild_item->procat2_procat_id==$item->procat_id) selected="selected" @endif>{{ $item->procat_ten }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <h4><strong>Tối ưu SEO</strong></h4>
                            <br/>

                            <div class="form-group ">
                                <label for="newsletter" class="control-label col-lg-2 col-sm-3">Title:</label>
                                <div class="col-lg-10 col-sm-9">
                                        <input required type="text" name="procat2_title" class="form-control" value="{{ $procatchild_item->procat2_title }}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Description:</label>
                                <div class="col-sm-10">
                                    <textarea required name="procat2_description" id="" style="width:100%;" rows="7">{{ $procatchild_item->procat2_description }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Keywords: </label>
                                <div class="col-sm-10">
                                    <input type="text" required name="procat2_keyword" value="{{ $procatchild_item->procat2_keyword }}" class="form-control">
                                </div>
                            </div>

                        
                            <div class="form-group">
                                <div class="row pull-right" style="padding-right:50px">
                                    <input style="width:100px;" type="submit" class="btn btn-primary" value="Cập nhật">
                                    <a href="{{ asset('admin/productcat/child') }}"><input style="width:100px;" type="button" class="btn btn-danger" value="Hủy"></a>
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

@stop