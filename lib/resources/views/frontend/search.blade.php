<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Minh Global | Design, Build &amp; Development</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/upload/template/'. $getindex->homepage_favicon) }}" />

        <!--external css-->
        <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />

        <!-- Google Fonts -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Roboto:300,400,500,700,900" rel="stylesheet" />
        <meta name="csrf-param" content="authenticity_token" />
        <meta name="csrf-token" content="w+NBtND2eFxCx7pm18UTtuhaEaRfBPgIUf1AalIxM4wte2EFBARPD5WZtPEyiF3YTEk41VYfqL1rvv8Xw4l1oQ==" />

        <link rel="stylesheet" media="all" href="{{ asset('css/application-3663d9d313e196f76d919f7dca4bc1a83ecef45ede70ea08266a1ca585907c62.css') }}" />
        <script src="{{ asset('js/application-4482f6b21ab02b9f0dcb57094c50c9d5b2675f3051b174ed31f43d0627e9af79.js') }}"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

        <!--Sweet alert-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

        <!--owl-->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

        <style>
            /* Custom scroll bar */
            ::-webkit-scrollbar {
                width: 10px;
                border-radius: 4px;
            }
            ::-webkit-scrollbar-track {
                background: #fff; 
                border-radius: 4px;
            }
            ::-webkit-scrollbar-thumb {
                background: rgb(163, 163, 161); 
                border-radius: 4px;
            }
            ::-webkit-scrollbar-thumb:hover {
                background: rgb(163, 163, 161); 
                border-radius: 4px;
            }
            /* Custom scroll bar */
        </style>

        <style>
            a:hover {
                text-decoration: none;
            }
            .text-major {
                color: #dc3545;
                font-size: 10px !important;
                margin: 0 !important;
                font-weight: bold !important;
                position: absolute;
                top: 10px;
                left: 0;
                right: 0;
            }
            .project-list-item:hover .text-major {
                color: #fff !important;
            }

            .thumb-hover {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                opacity: 0;
            }
            .thumb-hover:hover {
                opacity: 1 !important;
            }
            @media (max-width: 991px){
                nav .logo-header{
                    -webkit-box-pack: start;
                    justify-content: center !important;
                }
            }

            #intro-project{
                /* height: 15vh; */
            }
            #project-title{
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 5vh;
                position: relative;
                top: 12px;
            }
            #intro-text{
                height: 10vh;
                position: relative;
                top: 5px;
                padding-top: 10px;
                z-index: 11;
            }
        </style>

        <style>
            .project-main-thumb{
                height: 65% !important;
            }
            .project-detail-info{
                height: 35%;
                position: relative;
            }
            .project-list-item{
                position: relative;
                padding: 0 !important;
                background: #cdcdcd;
            }
            .project-list-item .project-completion-time{
                position: absolute;
                top: 52px;
                left: 0;
                width: 100%;
                font-size: 1.1rem;
                margin: 0;
            }
            .project-list-item:hover .project-completion-time{
                color: #fff;
            }
            #all-project-slide .owl-nav{
                /* display: none; */
            }
            #all-project-slide .owl-nav .owl-next{
                position: absolute;
                top: 0;
                right: -5px;
                font-size: 25px;
                z-index: 1000000;
                color: #c94645;
                height: 65vh;
                font-weight: bold;
                text-transform: uppercase;
                background: transparent;
                padding: 0 5px !important;
                transition: 0.5s;
                animation-name: blink;
                animation-duration: 2s;
                animation-iteration-count: infinite;
                outline: none;
            }
            
            #all-project-slide .owl-nav .owl-next span{

            }
            #all-project-slide .owl-nav .owl-prev{
                position: absolute;
                top: 0;
                left: -5px;
                font-size: 25px;
                z-index: 1000000;
                color: #c94645;
                height: 65vh;
                font-weight: bold;
                text-transform: uppercase;
                background: transparent;
                padding: 0 5px !important;
                transition: 0.5s;
                animation-name: blink;
                animation-duration: 2s;
                animation-iteration-count: infinite;
            }
            #all-project-slide .owl-nav:hover .owl-prev ,#all-project-slide .owl-nav:hover .owl-next{
                background: #ffffff8f;
                animation-play-state: paused;
                color: #c94645 !important;
            }

            .project-list-item-inner{
                height: 100%;
                position: relative;
            }
            .main-project-name{
                font-size: 0.8rem;
                top: 30px;
                position: absolute;
                left: 0;
                right: 0;
            }
            .project-detail-info .nation-flag{
                width: 33px !important;
                position: absolute;
                right: 12%;
                bottom: 7px;
            }

            .project-list-item-inner .status-btn{
                display: block;
                position: absolute;
                left: 0;
                bottom: 35%;
                padding: 2px 10px;
                margin: 0;
                border-radius: 0 10px 0 0;
            }

            @keyframes blink {
                0%   {color: #c94645;}
                50%  {color: #c9454500;}
                100% {color: #c94645;}
            }

            @media(max-width: 1239px){
                #all-project-slide .owl-nav{
                    display: block;
                }
                #all-project-slide .owl-nav .owl-next, 
                #all-project-slide .owl-nav .owl-prev{
                    position: fixed;
                    top: 60vh;
                    height: 45px;
                    width: 45px;
                    background: #ffffffa1;
					z-index: 10;
                }
            }
        </style>


        <style>
            /* special display */
            @media(min-width: 1279px){
                .project-list-item{
                    height: 33vh;
                }
            }

            @media(max-width: 1278px){
                #intro-project{
                    /* min-height: 200px; */
                    padding-top: 30px;
                }
                .text-major{
                    bottom: 45px;
                    font-size: 0.6rem !important;
                }
                .project-list-item .project-completion-time{
                    font-size: 0.7rem;
                    bottom: 25px;
                }
                .main-project-name{
                    font-size: 0.7rem;
                    bottom: 30px;
                }
                .project-detail-info .nation-flag{
                    width: 35px !important;
                    bottom: 5px;
                }

                .status-btn{

                }
            }

            @media(max-width: 769px){
                .text-major{
                    color: #dc3545;
                    font-size: 0.8rem !important;
                    margin: 0 !important;
                    font-weight: bold !important;
                    padding-top: 0;
                }
                .main-project-name{
                    font-size: 0.9rem;
                    bottom: 45px !important;
                }
                .project-list-item .project-completion-time{
                    font-size: 1.2rem;
                    bottom: 7px;
                    font-weight: bold;
                }
                .project-detail-info .nation-flag{
                    right: 5%;
                }
            }

            /* iPad pro display */
            @media(min-width:1000px) and (max-width:1025px){
                .project-list-item .project-completion-time{
                    top: 40px;
                }
                .text-major{
                    top: 5px;
                }
                .main-project-name{
                    top: 25px;
                }
                .project-detail-info .nation-flag{
                    width: 25px !important;
                }
            }
        </style>

        <style>
            .margin-left-15{
                margin-left: 15px;
            }
        </style>

        <style>
            footer .g-theme-bg-blue-dark-v1{
                background-color: #3064a4 !important;
                padding: 40px 0;
            }
            footer .g-theme-bg-blue-dark-v2{
                background-color: transparent!important;
                width: 100% !important;
                /* text-align: center; */
                /* margin: 0 auto; */
                display: flex;
                justify-content: center;
            }
            footer .g-theme-bg-blue-dark-v2 i{
                color: white;
                border-radius: 50%;
                border: 1px solid white;
                width: 40px;
                height: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .social-icon-list li{
                width: 80px;
                margin: 0 !important;
            }
            .social-icon-list li a:hover{
                background: transparent !important;
            }
            #footer-logo{
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 30px;
            }
            #footer-logo img{
                height: 50px;
            }
            .break-mobile{
                display: none;
            }
            @media(max-width: 768px){
                .break-mobile{
                    display: block;
                }
                #footer-form .form-group label{
                    padding: 0 !important;
                }
                #footer-form .form-group div{
                    padding: 0 !important;
                }
            }
        </style>

        <style>
            .hide{
                display: none;
            }
        </style>


    </head>
    <body>
        <main>


            

            @include('frontend.layout.header-project')


            <!-- Section Content -->
            <section id="topWorks" class="g-py-80">
                <div id="intro-project" class="container-fluid text-center g-max-width-950">
                    <div class="text-uppercase g-brd-primary">
                        <h3 id="project-title" class="h3 g-letter-spacing-5 g-font-size-24 g-font-weight-400 g-color-primary" style="">@lang('messages.project_searching_result_title')</h3>
                        <div id="intro-text" class="text-center col-lg-8 col-md-8 offset-md-2 text-center">
                            <p style="margin: 0;">
                                @lang('messages.project_searching_keyword'): {{ $keyword }}
                            </p>
                            <p>
                                <strong>{{ $search_count }}</strong> @lang('messages.project_filter_result_text')@if( $search_count>1 && Config::get('app.locale') == 'en' )s @endif
                            </p>
                        </div>
                    </div>
                </div>

                <!--Mobile search box-->
                @include('frontend.layout.searchbox-mobile')

                <!--Project filter form-->
                @include('frontend.layout.project_filter')


                <div class="container-fluid px-0 project-list-cover">
                    <div class="normal-project-list"></div>
                    <div class="row no-gutters">

                        <div id="all-project-slide" class="owl-carousel owl-theme">

                            @foreach ($search_result->chunk(8) as $chunk)
                                <div class="item row">
                                    @foreach ($chunk as $key => $item)

                                        <div style="" class="project-list-item col-md-6 col-lg-3 col-sm-12 g-parent g-theme-bg-blue-dark-v1--hover g-transition-0_2 g-transition--ease-in">
                                            <div class="project-list-item-inner" style="">

                                                @if($item->pro_status == 'ongoing')
                                                    <strong class="alert alert-warning g-font-size-11 g-font-weight-700 status-btn">ON GOING</strong>
                                                @elseif($item->pro_status == 'finished')
                                                    <strong class="alert alert-success g-font-size-11 g-font-weight-700 status-btn">FINISHED</strong>
                                                @endif


                                                <a href="{{ asset('project/'.$item->pro_id) }}">
                                                    {{-- <img class="img-fluid w-100 thumb-hover" src="{{ asset('public/upload/product/'.$item->pro_thumb) }}" style="" /> --}}
                                                    <img class="img-fluid w-100 project-main-thumb" alt="SKA Factory" src="{{ asset('public/upload/product/'.$item->pro_thumb) }}" />
                                                </a>

                                                <a href="{{ asset('project/'.$item->pro_id) }}" class="link-project-info">
                                                    <div class="text-center text-uppercase project-detail-info">
                                                        <h3 style="" class="text-major g-letter-spacing-2 g-font-size-11 g-font-weight-400 g-color-primary--parent-hover g-mb-10 g-transition-0_2 g-transition--ease-in">
                                                            {{-- {{ number_format($item->pro_area, 0, ',', '.') }} m2 |  --}}

                                                            @foreach ($major_list as $major_item)
                                                                @if($major_item->major_id == $item->pro_major_id)
                                                                    @switch( Config::get('app.locale') )
                                                                        @case('vi')
                                                                            {{ $major_item->major_name_vi }}
                                                                            @break
                                                                        @case('en')
                                                                            {{ $major_item->major_name_en }}
                                                                            @break
                                                                        @case('zh')
                                                                            {{ $major_item->major_name_zh }}
                                                                            @break
                                                                        @case('ja')
                                                                            {{ $major_item->major_name_ja }}
                                                                            @break
                                                                        @case('kr')
                                                                            {{ $major_item->major_name_kr }}
                                                                            @break
                                                                    @endswitch 
                                                                @endif
                                                            @endforeach
                                                            

                                                        </h3>
                                                        <h3 class="main-project-name h6 g-letter-spacing-2 g-font-weight-700 g-color-white--parent-hover mb-0 g-transition-0_2 g-transition--ease-in">
                                                            @switch( Config::get('app.locale') )
                                                                @case('vi')
                                                                    {{ $item->pro_ten_vi }}
                                                                    @break
                                                                @case('en')
                                                                    {{ $item->pro_ten_en }}
                                                                    @break
                                                                @case('zh')
                                                                    {{ $item->pro_ten_zh }}
                                                                    @break
                                                                @case('ja')
                                                                    {{ $item->pro_ten_ja }}
                                                                    @break
                                                                @case('kr')
                                                                    {{ $item->pro_ten_kr }}
                                                                    @break
                                                            @endswitch 
                                                        </h3>

                                                        @foreach ($nation_list as $nation_item)
                                                            @if($item->pro_nation == $nation_item->nation_id )
                                                                <img class="nation-flag" src="{{ asset('public/upload/nation/'.$item->pro_nation.'.png') }}" alt=""
                                                                        style="">
                                                            @endif
                                                        @endforeach
                                                        <br />

                                                        <h3 class="project-completion-time">
                                                            ( {{ \Carbon\Carbon::parse($item->pro_time_work)->format('Y')}} )
                                                        </h3>

                                                        <br/>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    @endforeach

                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>

            </section>


            <footer>

                <div class="text-center g-color-gray-dark-v5 g-theme-bg-blue-dark-v1 g-py-40">
                    <a id="footer-logo">
                        <img src="{{ asset('public/upload/template/1594074534logo.png') }}" alt="">
                    </a>

                    <ul class="social-icon-list list-inline d-inline-block mb-0">
                        <li class="list-inline-item g-mr-10">
                            <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-theme-bg-blue-dark-v2 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" href="https://www.twitter.com/">
                                <i class="fa fa-1x fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mr-10">
                            <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-theme-bg-blue-dark-v2 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" href="https://www.facebook.com/">
                                <i class="fa fa-1x fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mr-10">
                            <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-theme-bg-blue-dark-v2 g-bg-primary--hover g-transition-0_2 g-transition--ease-in" href="https://www.pinterest.com/">
                                <i class="fa fa-1x fa-youtube"></i>
                            </a>
                        </li>

                    </ul>
                </div>

            </footer>


            <script>
                // initialization of google map
                function initMap() {
                    $.HSCore.components.HSGMap.init('.js-g-map');
                }

                $(document).on('ready', function () {
                    // initialization of carousel
                    $.HSCore.components.HSCarousel.init('.js-carousel');

                    // initialization of header
                    $.HSCore.components.HSHeader.init($('#js-header'));
                    $.HSCore.helpers.HSHamburgers.init('.hamburger');

                    // initialization of tabs
                    $.HSCore.components.HSTabs.init('[role="tablist"]');

                    $('#processes [role="tablist"] .nav-link').on('click', function () {
                    setTimeout(function () {
                        $('#processesTabs .js-carousel').slick('setPosition');
                    }, 200);
                    });
                });

                $(window).on('load', function() {
                    // initialization of HSScrollNav
                    $.HSCore.components.HSScrollNav.init($('.js-scroll-nav'), {
                    duration: 700
                    });
                });

                $(window).on('resize', function () {
                    setTimeout(function () {
                    $.HSCore.components.HSTabs.init('[role="tablist"]');
                    }, 200);
                });
            </script>


            <!--owl-->
            <script src="{{ asset('js/jquery.min.js') }}"></script>
            <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

            <!--Search btn-->
            <script>
                $('.search-icon').click(function(){
                    $('.project-search-keyword').toggle(500);
                });
                // $('#topWorks').click(function(){
                //     $('.project-search-keyword').hide(500);
                // });
            </script>


            <!--Add text next button-->
            <script>
                $(document).ready(function(){
                    $("#all-project-slide .owl-nav .owl-next span").html("<i class='fa fa-chevron-right'></i>");
                    $("#all-project-slide .owl-nav .owl-prev span").html("<i class='fa fa-chevron-left'></i>");
                });
                // $('').append('Next slide ›');
            </script>

            <!--None border click nav button-->
            <script>
                $(document).ready(function(){
                    $(".owl-next").click( function(){
                        $(this).css('border', 'none !important');
                    });
                });
            </script>

            <!--All project slide-->
            <script>
                $('#all-project-slide').owlCarousel({
                    loop:true,
                    margin:10,
                    nav:true,
                    autoplay:false,
                    autoplayTimeout:5000,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:1
                        },
                        1000:{
                            items:1
                        }
                    }
                })
            </script>

            <!--Search btn-->
            <script>
                $('.search-icon').click(function(){
                    $('.project-search-keyword').toggleClass('hide');
                });
                $('#topWorks').click(function(){
                    $('.project-search-keyword').hide(500);
                });
            </script>

            <!--Click Reset btn event-->
            <script>
                $( "#filter-reset" ).click(function(e) {
                    e.preventDefault();
                    $(location).attr('href','project');
                });
            </script>


            <!--Roll down mobile main menu-->
            <script>
                $('#toggle-mobile-btn').click(function(){
                    $('.mobile-menu-list').toggleClass('show-mobile-menu-list');
                    $(this).addClass('hide');
                    $("#close-toggle-mobile-btn").removeClass('hide');
                });

                $('#close-toggle-mobile-btn').click(function(){
                    $('.mobile-menu-list').toggleClass('show-mobile-menu-list');
                    $(this).addClass('hide');
                    $("#toggle-mobile-btn").removeClass('hide');
                });

                $('.menu-item-hide').click(function(){
                    $('.mobile-menu-list').removeClass('show-mobile-menu-list');
                    $('#close-toggle-mobile-btn').addClass('hide');
                    $("#toggle-mobile-btn").removeClass('hide');
                });
            </script>

            <!--Roll down lang mobile-->
            <script>
                $("#roll-down-lang-mobile").click(function(){
                    $(this).toggleClass('rotate-animation', 500);
                    $('.lang-mobile-cover').toggleClass('hide', 500);
                });
                $(".lang-mobile-title").click(function(){
                    $("#roll-down-lang-mobile").toggleClass('rotate-animation', 500);
                    $('.lang-mobile-cover').toggleClass('hide', 500);
                });
            </script>


            <!--mobile lang click-->
            <script>
                $( ".mobile-lang-vi" ).click(function(e) {
                    e.preventDefault();
                    $(location).attr('href','https://minhglobal.com/change-language/vi');
                });
                $( ".mobile-lang-en" ).click(function(e) {
                    e.preventDefault();
                    $(location).attr('href','https://minhglobal.com/change-language/en');
                });
                $( ".mobile-lang-zh" ).click(function(e) {
                    e.preventDefault();
                    $(location).attr('href','https://minhglobal.com/change-language/zh');
                });
                $( ".mobile-lang-ja" ).click(function(e) {
                    e.preventDefault();
                    $(location).attr('href','https://minhglobal.com/change-language/ja');
                });
                $( ".mobile-lang-kr" ).click(function(e) {
                    e.preventDefault();
                    $(location).attr('href','https://minhglobal.com/change-language/kr');
                });
            </script>

        </main>
    </body>
</html>


