@extends('admin.master') 

@section('title', 'Thay đổi mật khẩu') 

@section('main')
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row ">

            <!-- /col-lg-12 -->
            <div class="col-lg-12">
                <div class="row content-panel">

                    <!-- /panel-heading -->

                    <div id="edit" class="tab-pane">
                        <div class="row">

                            @if (Session::has('pass_not_same'))
                                <div class="col-lg-offset-2 col-md-8">
                                    <p class="alert alert-danger">{!! Session::get('pass_not_same') !!}</p>
                                </div>
                            @endif
                            

                            <form method="post" enctype='multipart/form-data' class="form-horizontal">
                                <div class="col-lg-8 col-lg-offset-2 detailed">
                                    <h4 class="mb">Thay đổi mật khẩu</h4>
                                    
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Mật khẩu mới: </label>
                                        <div class="col-lg-9">
                                            <input required type="password" name="password" min="8" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Xác nhận mật khẩu mới: </label>
                                        <div class="col-lg-9">
                                            <input required type="password" name="re_password" min="8" class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-8 col-lg-offset-2 detailed mt">
                                    <div class="form-group">
                                        <div class="col-lg-12"> 
                                            <button class="btn btn-primary pull-right" type="submit">Cập nhật</button>
                                        </div>
                                    </div>

                                </div>
                                {{ csrf_field() }}
                            </form>
                            <!-- /col-lg-8 -->
                        </div>
                        <!-- /row -->
                    </div>

                </div>
                <!-- /col-lg-12 -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /wrapper -->
</section>
@endsection