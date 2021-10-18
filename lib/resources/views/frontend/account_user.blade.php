@extends('frontend.master')

@section('title', 'Tài khoản khách hàng')


@section('css')
    <link href='{{ asset('css/users.css') }}' rel='stylesheet' type='text/css' media='all' />
    <link href='{{ asset('css/pages.css') }}' rel='stylesheet' type='text/css' media='all' />
@endsection

@section('main')

<div class="insMain">
    <section id="new-login">
        <div class="fv-login bg_w">
            <div class="container">
                
                
                <div class="box-login-two">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">

                                {{-- @if (Session::has('confirm_success'))
                                    <div class="content-cus-form cus-login">
                                        <p class="alert alert-success">{!! Session::get('confirm_success') !!}</p>
                                    </div>
                                @elseif (Session::has('check_mail'))
                                    <div class="content-cus-form cus-login">
                                        <p class="alert alert-danger">{!! Session::get('check_mail') !!}</p>
                                    </div>
                                @endif --}}




                                @if (Auth::user()->xacnhan==false)

                                    <h1 class="title-box-login">
                                        <strong>Tài khoản chưa được kích hoạt<br>Vui lòng kích hoạt tài khoản để thay đổi mật khẩu</strong>
                                    </h1>
                                    <div class="content-cus-form cus-login">
                                        <img src="{{ asset('public/upload/info/lock.png') }}" alt="">
                                    </div>
                                
                                @else

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
                                                <input type="email" name="email" placeholder="Email của bạn" required value="" class="form-control" />
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
                                                
                                            </div>

                                            <div class="col_full nobottommargin action">
                                                <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" type='submit' value="login">Đổi mật khẩu</button>
                                            </div>

                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>

                                @endif
                            


                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
</div>

@endsection    