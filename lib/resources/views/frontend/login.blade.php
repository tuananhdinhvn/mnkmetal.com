


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Minh Global | Guest Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/upload/template/'. $getindex->homepage_favicon) }}" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/guest-login/vendor/bootstrap/css/bootstrap.min.css') }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/guest-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/guest-login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/guest-login/vendor/animate/animate.css') }} ">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('public/guest-login/vendor/css-hamburgers/hamburgers.min.css') }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/guest-login/vendor/animsition/css/animsition.min.css') }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/guest-login/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('public/guest-login/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/guest-login/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/guest-login/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url({{ asset('public/upload/template/'.$login_bg->promotion_img) }});">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					GUEST LOGIN
                </span>
                
              
				@if (Session::has('error'))
					<div class="content-cus-form cus-login">
						<p class="alert alert-danger">{!! Session::get('error') !!}</p>
					</div>
				@endif


                <form action="login" class="login100-form validate-form p-b-33 p-t-5" id='customer_login' method='post'>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input required class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input required class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit">
							@lang('messages.login_login_btn')
						</button>
					</div>
                    {{ csrf_field() }}
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('public/guest-login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('public/guest-login/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('public/guest-login/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('public/guest-login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('public/guest-login/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('public/guest-login/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('public/guest-login/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('public/guest-login/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('public/guest-login/js/main.js') }}"></script>

</body>
</html>