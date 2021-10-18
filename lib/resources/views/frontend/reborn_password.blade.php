@extends('frontend.master')

@section('title', 'Đăng nhập')


@section('css')
    <link href='//theme.hstatic.net/1000271724/1000376256/14/users.css?v=88' rel='stylesheet' type='text/css' media='all' />
    <link href='//theme.hstatic.net/1000271724/1000376256/14/pages.css?v=88' rel='stylesheet' type='text/css' media='all' />
@endsection

@section('main')

<div class="insMain">
    <section id="new-login">
        <div class="fv-login bg_w">
            <div class="container">
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

                              

                                @if (Session::has('confirm_success'))
                                    <div class="content-cus-form cus-login">
                                        <p class="alert alert-success">{!! Session::get('confirm_success') !!}</p>
                                    </div>
                                @elseif (Session::has('check_mail'))
                                    <div class="content-cus-form cus-login">
                                        <p class="alert alert-danger">{!! Session::get('check_mail') !!}</p>
                                    </div>
                                @elseif (Session::has('invalid-email'))
                                    <div class="content-cus-form cus-login">
                                        <p class="alert alert-danger">{!! Session::get('invalid-email') !!}</p>
                                    </div>
                                @elseif (Session::has('valid-email'))
                                    <div class="content-cus-form cus-login">
                                        <p class="alert alert-success">{!! Session::get('valid-email') !!}</p>
                                    </div>
                                @endif

                                


                            <h1 class="title-box-login">
                                <strong>Thay đổi mật khẩu tài khoản</strong>
                            </h1>
                            <br/>
                            
                            <div class="content-cus-form cus-login">
                                <div id='login'>
                                    <form id='customer_login' method='post'>
                                        @include('error.note')
                                        

                                        <div class="col_full">
                                            <span class="not-null">*</span>
                                            <span class="icon_checkout ico-email"></span>
                                            <input type="email" autocomplete="off" id="login-form-username" name="email" placeholder="Email của bạn" required value="{{ $email_reset }}" class="form-control" />
                                        </div>

                                        <div class="col_full">
                                            <span class="not-null">*</span>
                                            <span class="icon_checkout ico-pass"></span>
                                            <input type="password" autocomplete="off" id="login-form-password" name="password" placeholder="Nhập mật khẩu" value="" class="form-control" />
                                            
                                        </div>

                                        
                                        <div class="col_full">
                                            <span class="not-null">*</span>
                                            <span class="icon_checkout ico-pass"></span>
                                            <input type="password" autocomplete="off" id="login-form-password" name="repassword" placeholder="Nhập lại mật khẩu" value="" class="form-control" />
                                            {{-- @if($errors->has('repassword'))
                                                <p style="font-style: italic; color: red;">
                                                    {{$errors->first('repassword')}}
                                                </p>
                                            @endif --}}
                                        </div>
                                        

                                        <div class="col_full nobottommargin action">
                                            <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" type='submit' value="login">Đổi mật khẩu</button>
                                        </div>

                                        <!--</form>-->
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                               
                                
                            </div>
                        </div>


                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
</div>

@endsection    