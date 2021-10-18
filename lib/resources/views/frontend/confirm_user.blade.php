@extends('frontend.master')

@section('title', 'Xác nhận tài khoản')


@section('css')
    <link href='//theme.hstatic.net/1000271724/1000376256/14/users.css?v=88' rel='stylesheet' type='text/css' media='all' />
    <link href='//theme.hstatic.net/1000271724/1000376256/14/pages.css?v=88' rel='stylesheet' type='text/css' media='all' />
@endsection

@section('main')


<div class="insMain">
    <section id="new-login">
        <div class="fv-login bg_w">
            <div class="container">
               
                <div class="box-login-two">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <h1 class="title-box-login">
                                <strong>Xác nhận tài khoản thành công.</strong>
                            </h1>
                            <br/>
                            <div class="content-cus-form cus-login">
                                <div id='login'>
                                    <form id='customer_login' method='post'>
                                        

                                        <div class="col_full nobottommargin action">
                                            <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" type='submit' value="login">Đăng nhập tài khoản</button>
                                            
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