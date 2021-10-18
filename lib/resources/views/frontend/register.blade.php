@extends('frontend.master')

@section('title', 'Đăng ký thành viên')


@section('css')
    <link href='//theme.hstatic.net/1000271724/1000376256/14/users.css?v=88' rel='stylesheet' type='text/css' media='all' />
    <link href='//theme.hstatic.net/1000271724/1000376256/14/pages.css?v=88' rel='stylesheet' type='text/css' media='all' />
@endsection

@section('main')
<div class="insMain">
    <section id="new-login">
        <div class="fv-login bg_w">
            <div class="container">
                <div class="box-login-one hidden">
                    <h1 class="title-box-login">
                        Đăng nhập
                    </h1>
                </div>
                {{-- <div id="loginApp" class="boxLogin">
                    <h4>
                        Đăng nhập bằng
                    </h4>
                    <div class="loginSocial text-center">
                        <button type="button" class="btsocialloginfb">Facebook</button>
                        <button type="button" class="btsociallogingg">Google+</button>
                        <script src="//multiapp.haravan.com/social-login/customer/scriptv2.js"></script>
                    </div>
                </div>
                <div class="liner-or">
                    <span>Hoặc</span>
                </div> --}}
                <div class="box-login-two">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <h1 class="title-box-login">
                                <strong>Đăng ký thành viên mới</strong>
                            </h1>
                            <div class="content-cus-form cus-reg">
                                <form id='create_customer' method='post'>

                                    <div class="col_full">
                                        <span class="not-null">*</span>
                                        <span class="icon_checkout ico-name"></span>
                                        <input required type="text" value="{{ old('name') }}" name="name" placeholder="Họ tên" id="last_name" class="text" size="30" />
                                    </div>
                                    
                                    <div class="col_full">
                                        <span class="not-null">*</span>
                                        <span class="icon_checkout ico-name"></span>
                                        <input required type="text" value="{{ old('diachi') }}" name="diachi" placeholder="Địa chỉ" id="first_name" class="text" size="30" />
                                    </div>

                                    <div class="col_full">
                                        <span class="not-null">*</span>
                                        <span class="icon_checkout ico-email"></span>
                                        <input required type="email" value="{{ old('email') }}" placeholder="Email" name="email" id="email" class="text" size="30" />
                                        @if($errors->has('email'))
                                            <p style="font-style: italic; color: red;">
                                                {{$errors->first('email')}}
                                            </p>
                                        @endif
                                    </div>

                                    <div class="col_full">
                                        <span class="not-null">*</span>
                                        <span class="icon_checkout ico-email"></span>
                                        <input required type="text" value="{{ old('phone') }}" placeholder="Số điện thoại" name="phone" id="email" class="text" size="30" />
                                        @if($errors->has('phone'))
                                            <p style="font-style: italic; color: red;">
                                                {{$errors->first('phone')}}
                                            </p>
                                        @endif
                                    </div>

                                    <div class="col_full">
                                        <span class="not-null">*</span>
                                        <span class="icon_checkout ico-pass"></span>
                                        <input required type="password" value="" id="register-form-password" placeholder="Mật khẩu" name="password" id="password" class="password text" size="30" />
                                    </div>

                                    <div class="col_full">
                                        <span class="not-null">*</span>
                                        <span class="icon_checkout ico-pass"></span>
                                        <input required type="password" value="" id="register-form-password" placeholder="Xác nhận mật khẩu" name="repassword" id="password" class="password text" size="30" />
                                        @if($errors->has('repassword'))
                                            <p style="font-style: italic; color: red;">
                                                {{$errors->first('repassword')}}
                                            </p>
                                        @endif
                                    </div>
                                    {{-- <div id="accept" class="clearfix form-row">
                                        <input type="hidden" name="customer[accepts_marketing]" id="marketingCheck" value="false" />
                                        <input type="checkbox" name="customer[accepts_marketing]" id="accepts_marketing" class="" value="" />
                                        <span>Nhận tin khuyến mãi từ <strong>Beauty farm</strong></span>
                                    </div> --}}
                                    <div class="col_full nobottommargin action">
                                        {{-- <input class="button button-3d button-black nomargin" id="register-form-submit" type="submit" value="Đăng ký"> --}}
                                        <button class="button button-3d button-black nomargin" id="register-form-submit" type='submit'>Đăng ký</button>
                                    </div>

                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- check password confirm -->
    <script>
        $('#accepts_marketing').click(function() {
            if ($(this).is(':checked'))
                $('#marketingCheck').val(true);
            else
                $('#marketingCheck').val(false);
        })
    </script>
</div>
@endsection     