@extends('admin.master') 

@section('title', 'Hồ sơ')

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
                            @if (Session::has('updated_pass'))
                                <div class="col-lg-offset-2 col-md-8">
                                    <p class="alert alert-success">{!! Session::get('updated_pass') !!}</p>
                                </div>
                            @endif

                            <div class="form-group col-lg-offset-2" >
                                <a href="{{ asset('admin/profile/change-password') }}">
                                    <button class="btn btn-primary ">Thay đổi mật khẩu</button>
                                </a>
                            </div>

                            <form method="post" enctype='multipart/form-data' class="form-horizontal">
                                


                                <div class="col-lg-8 col-lg-offset-2 detailed">

                                    

                                    <h4 class="mb">Cập nhật hồ sơ</h4>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"> Avatar</label>
                                        <div class="col-lg-9">
                                            <img class="image_output" src="{{ asset('public/upload/info/'.$user_id->avatar) }}" style="width:200px; padding-bottom:10px;\"><br/>
                                            <input type="file" name="avatar" class="file-pos default image_input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Họ tên:</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="name" class="form-control" value="{{ $user_id->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Email: </label>
                                        <div class="col-lg-9">
                                            <input type="email" required name="email" class="form-control" value="{{ $user_id->email }}">
                                        </div>
                                    </div>

                                    {{-- <div class="form-group">
                                        <label class="col-lg-3 control-label">Cập nhật mật khẩu: </label>
                                        <div class="col-lg-9">
                                            <input type="password" required name="password" class="form-control" value="{{ $user_id->password }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Xác nhận mật khẩu: </label>
                                        <div class="col-lg-9">
                                            <input type="password" required name="password" class="form-control" value="{{ $user_id->password }}">
                                        </div>
                                    </div> --}}

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Điện thoại: </label>
                                        <div class="col-lg-9">
                                            <input type="text" name="phone" class="form-control" value="{{ $user_id->phone }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Địa chỉ: </label>
                                        <div class="col-lg-9">
                                            <input type="text" name="diachi" class="form-control" value="{{ $user_id->diachi }}">
                                        </div>
                                    </div>

                                    @if (Auth::user()->phanquyen == 1)
                                    <div class="form-group ">
                                        <label for="newsletter" class="col-lg-3 control-label">Cấp bậc quản trị:</label>
                                        <div class="col-lg-9">
                                            <select class="alert alert-primary" name="phanquyen" style="width:200px; border: 1.5px solid #dbdbdb;">
                                                @if ($user_id->phanquyen==1)
                                                    <option value="1" @if ($user_id->phanquyen==1) selected @endif>Admin</option>
                                                    <option value="2" @if ($user_id->phanquyen==2) selected @endif>Manager</option>
                                                    <option value="3" @if ($user_id->phanquyen==3) selected @endif>Staff</option>
                                                @elseif($user_id->phanquyen==2)
                                                    <option value="2" @if ($user_id->phanquyen==2) selected @endif>Manager</option>
                                                    <option value="3" @if ($user_id->phanquyen==3) selected @endif>Staff</option>
                                                @else
                                                    <option value="3" @if ($user_id->phanquyen==3) selected @endif>Staff</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    @endif

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