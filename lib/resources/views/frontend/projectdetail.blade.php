<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
    
    <!--<![endif]-->
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/upload/template/'. $getindex->homepage_favicon) }}" />
        <meta charset="utf-8" />

        <title>
            {{ $setting_info[0]->st_title }}
        </title>

        <meta content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0" name="viewport" />
        <link rel="canonical" href="" />
        <script type="text/javascript">
            //<![CDATA[
            if (typeof Haravan === "undefined") {
                Haravan = {};
            }
            Haravan.culture = "vi-VN";
            Haravan.shop = "babylon-residence.myharavan.com";
            Haravan.theme = { name: "Babylon-Residence-v1.1-social", id: 1000533237, role: "main" };
            Haravan.domain = "babylon-residence.myharavan.com";
            //]]>
        </script>
        <script type="text/javascript">
            !(function () {
                var hrv_analytics = (window.hrv_analytics = window.hrv_analytics || []);
                if (!hrv_analytics.initialize)
                    if (hrv_analytics.invoked) window.console && console.error && console.error("Segment snippet included twice.");
                    else {
                        hrv_analytics.invoked = !0;
                        hrv_analytics.methods = ["start", "trackSubmit", "trackClick", "trackLink", "trackForm", "pageview", "identify", "reset", "group", "track", "ready", "alias", "debug", "page", "once", "off", "on"];
                        hrv_analytics.factory = function (t) {
                            return function () {
                                var e = Array.prototype.slice.call(arguments);
                                e.unshift(t);
                                hrv_analytics.push(e);
                                return hrv_analytics;
                            };
                        };
                        for (var t = 0; t < hrv_analytics.methods.length; t++) {
                            var e = hrv_analytics.methods[t];
                            hrv_analytics[e] = hrv_analytics.factory(e);
                        }
                        hrv_analytics.load = function (t, e) {
                            var n = document.createElement("script");
                            n.type = "text/javascript";
                            n.async = !0;
                            n.src = "https://stats.hstatic.net/analyticsv3.min.js";
                            var a = document.getElementsByTagName("script")[0];
                            a.parentNode.insertBefore(n, a);
                            hrv_analytics._loadOptions = e;
                        };
                        hrv_analytics.SNIPPET_VERSION = "4.1.0";
                        hrv_analytics.start("pro:web:1000077855");
                        hrv_analytics.page();
                        hrv_analytics.load();
                    }
            })();
        </script>
        <style>
            .grecaptcha-badge {
                visibility: hidden;
            }
        </style>

       

        <script src="https://demos.creative-tim.com/rubik/assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="//hstatic.net/0/0/global/design/js/bootstrap.min.js"></script>
        <script src="//hstatic.net/0/0/global/option_selection.js" type="text/javascript"></script>
        <script src="//hstatic.net/0/0/global/api.jquery.js" type="text/javascript"></script>

        <script src="//theme.hstatic.net/1000077855/1000533237/14/scripts.js?v=69" type="text/javascript"></script>
        <script src="//theme.hstatic.net/1000077855/1000533237/14/modernizr.custom.js?v=69" type="text/javascript"></script>
        <script src="//hstatic.net/0/0/global/design/theme-default/html5shiv.js"></script>
        <script src="//hstatic.net/0/0/global/design/theme-default/jquery-migrate-1.2.0.min.js"></script>
        <script src="//hstatic.net/0/0/global/design/theme-default/jquery.touchSwipe.min.js" type="text/javascript"></script>
        <script data-target=".product-resize" data-parent=".products-resize" data-img-box=".image-resize" src="//hstatic.net/0/0/global/design/js/fixheightproductv2.js"></script>
        <script src="//hstatic.net/0/0/global/design/js/haravan.plugin.1.0.js"></script>

        <script src="//hstatic.net/0/0/global/design/theme-default/jquery.flexslider.js" type="text/javascript"></script>

        <script src="//theme.hstatic.net/1000077855/1000533237/14/classie.js?v=69" type="text/javascript"></script>
        <script src="//theme.hstatic.net/1000077855/1000533237/14/mlpushmenu.js?v=69" type="text/javascript"></script>

        <script src="//theme.hstatic.net/1000077855/1000533237/14/core.min.js?v=69" type="text/javascript"></script>
        <script src="//theme.hstatic.net/1000077855/1000533237/14/widget.min.js?v=69" type="text/javascript"></script>
        <script src="//theme.hstatic.net/1000077855/1000533237/14/mouse.min.js?v=69" type="text/javascript"></script>

        <script src="//theme.hstatic.net/1000077855/1000533237/14/slider.min.js?v=69" type="text/javascript"></script>
       
        <link href="//hstatic.net/0/0/global/design/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all" />
        <script src="//hstatic.net/0/0/global/design/plugins/fancybox/jquery.fancybox.js" type="text/javascript"></script>
        <script src="//hstatic.net/290/1000076290/10/2016/3-17/jquery.fancybox-media.js" type="text/javascript"></script>

        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54aa0592190a1461" async="async"></script>
        <!--------------CSS----------->
        <link href="//hstatic.net/0/0/global/design/theme-default/page-contact-form.css" rel="stylesheet" type="text/css" media="all" />

        <!------FONT------>

        <link rel="stylesheet" type="text/css" href="//hstatic.net/0/0/global/design/member/fonts-master/roboto.css" />

        <link rel="stylesheet" type="text/css" href="//hstatic.net/0/0/global/design/member/fonts-master/roboto.css" />

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//hstatic.net/0/0/global/design/css/bootstrap.3.3.1.css" />
        <!-- Theme haravan-->

        <!-- Latest compiled and minified JavaScript -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />

        <link href="//hstatic.net/0/0/global/design/theme-default/flexslider.css" rel="stylesheet" type="text/css" media="all" />
        <link href="//theme.hstatic.net/1000077855/1000533237/14/plugin.css?v=69" rel="stylesheet" type="text/css" media="all" />
        <link href="//theme.hstatic.net/1000077855/1000533237/14/responsive.css?v=69" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('public/css/styles-babylon.css?v=69') }}" rel="stylesheet" type="text/css" media="all" />

        <style>
            .grab {
                cursor: -webkit-grab;
                cursor: grab;
            }
            .grabbing {
                cursor: -webkit-grabbing;
                cursor: grabbing !important;
            }

            #info-table td {
                border: none;
                text-transform: uppercase;
                font-size: 14px;
                padding-left: 0;
                padding-right: 0;
            }

            .block-social-footer {
                background-color: #272730 !important;
                color: #999 !important;
            }
            .block-social-footer:hover {
                background-color: #c94645 !important;
                color: #fff !important;
            }

            .bread-title {
                padding: 10px 10px 10px 0;
                font-size: 16px;
                text-transform: uppercase;
            }
            .bread-title a:hover {
                color: #c94645 !important;
            }

            #table {
                background: #ffffff5c;
            }
            @media  only screen and (min-width: 769px) {
                #table {
                    margin-top: 20px;
                }
            }

            .text-link {
                color: #272730;
                text-decoration: underline;
            }
            .text-link:hover {
                color: #c94645 !important;
            }

            .owl-prev {
                position: absolute;
                left: 0;
                top: 45vh;
                font-size: 2rem;
            }
            .owl-prev span {
                font-size: 3rem;
            }
            .owl-next {
                position: absolute;
                right: 0;
                top: 45vh;
                font-size: 2rem;
            }
            .owl-next span {
                font-size: 3rem;
            }
        </style>

        <!--Galery slide-->
        <script src="{{ asset('public/slide-galery/js/jquery-1.11.3.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/slide-galery/js/jssor.slider-28.0.0.min.js') }}" type="text/javascript"></script>
        
        <style>
            /*jssor slider loading skin spin css*/
            .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes  jssorl-009-spin {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }

            /*jssor slider arrow skin 106 css*/
            .jssora106 {
                display: block;
                position: absolute;
                cursor: pointer;
            }
            .jssora106 .c {
                fill: #fff;
                opacity: 0.3;
            }
            .jssora106 .a {
                fill: none;
                stroke: #000;
                stroke-width: 350;
                stroke-miterlimit: 10;
            }
            .jssora106:hover .c {
                opacity: 0.5;
            }
            .jssora106:hover .a {
                opacity: 0.8;
            }
            .jssora106.jssora106dn .c {
                opacity: 0.2;
            }
            .jssora106.jssora106dn .a {
                opacity: 1;
            }
            .jssora106.jssora106ds {
                opacity: 0.3;
                pointer-events: none;
            }

            /*jssor slider thumbnail skin 101 css*/
            .jssort101 .p {
                position: absolute;
                top: 0;
                left: 0;
                box-sizing: border-box;
                background: #000;
            }
            .jssort101 .p .cv {
                position: relative;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border: 2px solid #000;
                box-sizing: border-box;
                z-index: 1;
            }
            .jssort101 .a {
                fill: none;
                stroke: #fff;
                stroke-width: 400;
                stroke-miterlimit: 10;
                visibility: hidden;
            }
            .jssort101 .p:hover .cv,
            .jssort101 .p.pdn .cv {
                border: none;
                border-color: transparent;
            }
            .jssort101 .p:hover {
                padding: 2px;
            }
            .jssort101 .p:hover .cv {
                background-color: rgba(0, 0, 0, 6);
                opacity: 0.35;
            }
            .jssort101 .p:hover.pdn {
                padding: 0;
            }
            .jssort101 .p:hover.pdn .cv {
                border: 2px solid #fff;
                background: none;
                opacity: 0.35;
            }
            .jssort101 .pav .cv {
                border-color: #fff;
                opacity: 0.35;
            }
            .jssort101 .pav .a,
            .jssort101 .p:hover .a {
                visibility: visible;
            }
            .jssort101 .t {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border: none;
                opacity: 0.6;
            }
            .jssort101 .pav .t,
            .jssort101 .p:hover .t {
                opacity: 1;
            }
        </style>
        <!--End slide galery-->

        <!--Extra zoom slide-->
        <link href="https://demos.creative-tim.com/rubik/assets/css/bootstrap.css" rel="stylesheet" />
        <link href="{{ asset('css/rubick.css') }}" rel="stylesheet" />
        <link href="https://demos.creative-tim.com/rubik/assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
        <!--End Extra zoom slide-->

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
            
            #jssor_1{
                position: relative; 
                margin: 0 auto; 
                top: 0px; 
                left: 0px; 
                width: 980px; 
                height: 680px; 
                overflow: hidden; 
                visibility: hidden;
            }
            #breadcrumb-header{
                position: relative;
            }
            .black-blur-bread{
                position: absolute;
                top: 0;
                left: 0%;
                width: 100%;
                height: 100%;
                background: #00000087;
            }
            @media(max-width: 768px){
                #jssor_1{
                    /* width: 100% !important;  */
                }
                #detail-main-zone{
                    padding: 0 !important;
                }
            }
        </style>


        <!--Header logo-->
        <style>
            .project-header{
                display: flex;
                justify-content: center;
                align-items: center;
                padding-top: 15px;
                padding-bottom: 15px;
                justify-content: space-between;
            }
            .menu-header-item{
                width: 150px;
                text-transform: uppercase;
                color: #fff;
                font-weight: bold;
                font-family: "Open Sans", Helvetica, Arial, sans-serif;
                line-height: 1.6;
                text-align: center;
                font-size: 1rem;
                cursor: pointer;
            }
            .lang-text{
            }
            .menu-header-item a{
                color: #fff;
                text-align: center;
                font-weight: 750;
            }
            .pc-lang-list{
                position: absolute;
                width: 130px;
                top: 30px;
                right: 20px;
                display: none;
                transition: 0.2s;
            }
            .last-menu-item:hover .pc-lang-list{
                display: block;
            }
            .pc-lang-list a{
                background: #000;
            }
            .pc-lang-list a li{
                padding: 15px 10px;
                background: #000;
            }
            .pc-lang-list a:hover li{
                background: #fff;
                color: #000;
            }
            #mobile-header{
                height: 100px !important;
            }
            .show-mobile-menu-list{
                top: 100px !important;
            }
            @media(max-width: 768px){
                #header{
                    display: none;
                }
            }
        </style>


        <style>
            .hide{
                display: none;
            }
        </style>


    </head>
    <body class="home page page-id-1579 page-template page-template-template page-template-home-template page-template-templatehome-template-php">
        <div id="main-wrapper" class="clearfix">
            
            @include('frontend.layout.mobile-header')

            <header id="header" class="site-header transparent-header clearfix">
                <div class="header-navigation">
                    <div class="container">
                        <div class="row">
                            <div class="  col-md-12 project-header">
                                <div class="menu-header-item">
                                    <a href="{{ asset('/#why-us') }}">@lang('messages.menu_why_us')</a>
                                </div>
                                <div class="menu-header-item">
                                    <a href="{{ asset('/#service') }}">@lang('messages.menu_services')</a>
                                </div>
                                <div class="menu-header-item">
                                    <a href="{{ asset('/#projects') }}">@lang('messages.menu_projects')</a>
                                </div>
                                <div class="menu-header-item">
                                    <a href="{{ asset('/') }}">
                                        <img src="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" alt="" />
                                    </a>
                                </div>
                                <div class="menu-header-item">
                                    <a href="{{ asset('/#social') }}">@lang('messages.menu_social')</a>
                                </div>
                                <div class="menu-header-item">
                                    <a href="{{ asset('/#contact-us') }}">@lang('messages.menu_contact_us')</a>
                                </div>
                                <div class="menu-header-item last-menu-item" style="">
                                    <span class="lang-text">languages</span> 
                                    <div class="pc-lang-list">
                                        <ul style="margin: 0;">
                                            <a style="background: transparent;"><li style="background: transparent;"></li></a>
                                            <a href="{!! route('user.change-language', ['vi']) !!}" ><li>Tiếng Việt</li></a>
                                            <a href="{!! route('user.change-language', ['en']) !!}" ><li>English</li></a>
                                            <a href="{!! route('user.change-language', ['zh']) !!}"><li>中 文</li></a>
                                            <a href="{!! route('user.change-language', ['ja']) !!}"><li>日 本 語</li></a>
                                            {{-- <a href="{!! route('user.change-language', ['kr']) !!}"><li>한국어</li></a> --}}
                                        </ul>
                                    </div>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div id="main" class="site-main clearfix">
                <div id="main" class="site-main clearfix" style="">
                    <!--Project banner-->
                    <div id="breadcrumb-header" class="page-title cover-background wow fadeIn clearfix" style="background-image: url({{ asset('public/upload/product/'.$project_item->pro_background) }});">
                        <div class=" text-center wow fadeIn" data-wow-delay="1.5s"></div>
                        <div class="black-blur-bread"></div>
                    </div>

                    <div class="container text-center">
                        <h2 style="text-transform: uppercase; color: #c94645; letter-spacing: 0.35714rem;">
                            @switch( Config::get('app.locale') )
                                @case('vi')
                                    {{ $project_item->pro_ten_vi }}
                                    @break
                                @case('en')
                                    {{ $project_item->pro_ten_en }}
                                    @break
                                @case('zh')
                                    {{ $project_item->pro_ten_zh }}
                                    @break
                                @case('ja')
                                    {{ $project_item->pro_ten_ja }}
                                    @break
                                @case('kr')
                                    {{ $project_item->pro_ten_kr }}
                                    @break
                            @endswitch   
                        </h2>
                    </div>

                    <section id="content" class="clearfix">
                        <div class="room-detail-wrap wrapper clearfix" style="padding-top: 20px; padding-bottom: 0; background: transparent;">
                            <div class="container" style="">
                                <!--Breadcumb-->
                                <div class="info" style="padding-bottom: 20px;">
                                    <span class="bread-title">
                                        <i class="fa fa-lg fa-home"></i>
                                        <a href="{{ asset('/#projects') }}"> @lang('messages.project_detail_breadcumb_home') </a>
                                    </span>

                                    <span class="bread-title">
                                        <i class="fa fa-lg fa-caret-right"></i>
                                        <a href="{{ asset('project') }}"> @lang('messages.project_detail_breadcumb_project') </a>
                                    </span>
                                    <span class="bread-title">
                                        <i class="fa fa-lg fa-caret-right"></i>

                                        @switch( Config::get('app.locale') )
                                            @case('vi')
                                                {{ $project_item->pro_ten_vi }}
                                                @break
                                            @case('en')
                                                {{ $project_item->pro_ten_en }}
                                                @break
                                            @case('zh')
                                                {{ $project_item->pro_ten_zh }}
                                                @break
                                            @case('ja')
                                                {{ $project_item->pro_ten_ja }}
                                                @break
                                            @case('kr')
                                                {{ $project_item->pro_ten_kr }}
                                                @break
                                        @endswitch   
                                    </span>
                                </div>

                                <div class="row">
                                    <div class="clearfix" style="margin-bottom: 40px;">
                                        <div id="detail-main-zone" class="room-slider col-md-6">
                                            


                                            <style>
                                                #header-img{
                                                    display: flex;
                                                    flex-direction: row;
                                                    justify-content: space-between;
                                                    padding: 0 0 20px 0;
                                                    margin-bottom: 40px;
                                                }
                                                #header-img .header-img-item{
                                                    width: 32%;
                                                    height: auto;
                                                    background: #2f2f2f;
                                                    padding: 4px;
                                                }
                                                #header-img .header-img-1{
                                                    
                                                }
                                                #header-img .header-img-2{
                                                    position: relative;
                                                    bottom: -20px;
                                                }
                                                #header-img .header-img-3{
                                                    position: relative;
                                                    bottom: -40px;
                                                }
                                            </style>

                                            <div id="header-img">
                                                <img class="header-img-item header-img-1" src="@if($project_item->pro_catalouge_1 != '') {{ asset('public/upload/product/'.$project_item->pro_catalouge_1) }} @else {{ asset('public/upload/template/blank1.jpg') }} @endif" alt="">
                                                <img class="header-img-item header-img-2" src="@if($project_item->pro_catalouge_2 != '') {{ asset('public/upload/product/'.$project_item->pro_catalouge_2) }} @else {{ asset('public/upload/template/blank1.jpg') }} @endif" alt="">
                                                <img class="header-img-item header-img-3" src="@if($project_item->pro_catalouge_3 != '') {{ asset('public/upload/product/'.$project_item->pro_catalouge_3) }} @else {{ asset('public/upload/template/blank1.jpg') }} @endif" alt="">
                                            </div>



                                            <img data-u="image" src="{{ asset('public/upload/product/'.$project_item->pro_thumb) }}" />

                                            <!--Old thumbnail version-->
                                            
                                            <!-- #endregion Jssor Slider End -->


                                            <div class="col-md-12 col-sm-12">
                                                <style>
                                                    #project-detail-cover{
                                                        position: relative;
                                                        padding-top: 20px;
                                                    }
                                                    #project-nation-flag{
                                                        padding: 0;
                                                        margin: 0;
                                                        display: flex;
                                                        align-items: center;
                                                    }
                                                    #project-nation-flag img{
                                                        border: 1px solid;
                                                    }
                                                    .project-info-name{
                                                        font-size: 1.5em;
                                                        font-weight: bold;
                                                        color: #8e0c0c;
                                                        padding-left: 5px;
                                                    }
                                                    #project-nation-flag div{
                                                        float: left;
                                                    }
                                                    #table{
                                                        margin-left: 40px;
                                                        background: transparent;
                                                    }
                                                    #info-table .table-title{
                                                        width: 25%;
                                                    }
                                                    @media(max-width: 768px){
                                                        #table{
                                                            margin: 0;
                                                        }
                                                        #info-table .table-title{
                                                            width: 35%;
                                                        }
                                                    }
                                                </style>
                                                
                                                <div id="project-detail-cover">
                                                    <div id="project-nation-flag" class="row">
                                                        <div>
                                                            @foreach ($nation_list as $nation_item)
                                                                @if($nation_item->nation_id == $project_item->pro_nation)
                                                                <img src="{{ asset('public/upload/nation/'.$nation_item->nation_id.'.png') }}" width="35px" alt="">
                                                                    {{-- {{ Config::get('app.locale') == 'en' ? $nation_item->nation_name_en : ( Config::get('app.locale') == 'zh' ? $nation_item->nation_name_zh_tra : $nation_item->nation_name_ja ) }} --}}
                                                                @endif
                                                            @endforeach
                                                            
                                                        </div>
                                                        <span class="project-info-name">
                                                            @switch( Config::get('app.locale') )
                                                                @case('vi')
                                                                    {{ $project_item->pro_ten_vi }}
                                                                    @break
                                                                @case('en')
                                                                    {{ $project_item->pro_ten_en }}
                                                                    @break
                                                                @case('zh')
                                                                    {{ $project_item->pro_ten_zh }}
                                                                    @break
                                                                @case('ja')
                                                                    {{ $project_item->pro_ten_ja }}
                                                                    @break
                                                                @case('kr')
                                                                    {{ $project_item->pro_ten_kr }}
                                                                    @break
                                                            @endswitch   
                                                        </span>
                                                    </div>
                                                    <table id="table" class="table">
                                                        <tbody id="info-table">

                                                            @if($project_item->pro_mgd_team == true)
                                                            <tr>
                                                                <td colspan="2" style="font-weight: bold; color: #3064a4; ">Made by MGD team</td>
                                                            </tr>
                                                            @endif


                                                            <!--Location-->
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_location')</strong></td>
                                                                <td class="table-box" style="">
                                                                    :   @foreach ($location_list as $location_item)
                                                                            @if($location_item->locate_id == $project_item->pro_location_id)
                                                                                @switch( Config::get('app.locale') )
                                                                                    @case('vi')
                                                                                        {{ $location_item->locate_name_vi }}
                                                                                        @break
                                                                                    @case('en')
                                                                                        {{ $location_item->locate_name_en }}
                                                                                        @break
                                                                                    @case('zh')
                                                                                        {{ $location_item->locate_name_zh }}
                                                                                        @break
                                                                                    @case('ja')
                                                                                        {{ $location_item->locate_name_ja }}
                                                                                        @break
                                                                                    @case('kr')
                                                                                        {{ $location_item->locate_name_kr }}
                                                                                        @break
                                                                                @endswitch 
                                                                            @endif
                                                                        @endforeach 
                                                                </td>
                                                            </tr>

                                                            
    
                                                            <!--Owner-->
                                                            
                                                            @if($project_item->pro_owner_en  != '')
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_investor')</strong></td>
                                                                <td class="table-box">: {{ $project_item->pro_owner_en }}</td>
                                                            </tr>
                                                            @endif
    
                                                            <!--Floor area-->
                                                            @if($project_item->pro_area  != '')
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_area')</strong></td>
                                                                <td class="table-box">: {{ number_format($project_item->pro_area, 0, ',', '.') }} m2</td>
                                                            </tr>
                                                            @endif

                                                            <!--Land area-->
                                                            @if($project_item->pro_land_area  != '')
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_land')</strong></td>
                                                                <td class="table-box">: {{ number_format($project_item->pro_land_area, 0, ',', '.') }} m2</td>
                                                            </tr>
                                                            @endif
        
                                                            {{-- <!--General contractor-->
                                                            <tr>
                                                                <td class="table-box table-title"><strong>General Contractor:</strong></td>
                                                                <td class="table-box">: SAKURA COLOR PRODUCTS OF VIETNAM CO., LTD</td>
                                                            </tr> --}}
    
                                                            <!--Construction contractor-->
                                                            @if( $project_item->pro_contractor != '' )
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_contractor')</strong></td>
                                                                <td class="table-box">: {{ $project_item->pro_contractor }}</td>
                                                            </tr>
                                                            @endif


                                                            <!--Scope of work-->
                                                            @if( $project_item->pro_scope_work != '' )
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_scope_of_work')</strong></td>
                                                                <td class="table-box">: {{ $project_item->pro_scope_work }}</td>
                                                            </tr>
                                                            @endif


                                                            <!--Industrial park-->
                                                            @if( $project_item->pro_induspark != '' )
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_industrial_park')</strong></td>
                                                                <td class="table-box">: {{ $project_item->pro_induspark }}</td>
                                                            </tr>
                                                            @endif
        
                                                            <!--Major-->
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_major')</strong></td>
                                                                <td class="table-box">
                                                                    :   @foreach ($major_list as $major_item)
                                                                            @if($major_item->major_id == $project_item->pro_major_id)
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
                                                                </td>
                                                            </tr>


                                                            <!--Building grade-->
                                                            {{-- @if($project_item->pro_building_grade  != '')
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_building_grade')</strong></td>
                                                                <td class="table-box">: 
                                                                    @switch( $project_item->pro_building_grade )
                                                                        @case('grade-1')
                                                                            @lang('messages.project_detail_grade_1')
                                                                            @break
                                                                        @case('grade-2')
                                                                            @lang('messages.project_detail_grade_2')
                                                                            @break
                                                                        @case('grade-3')
                                                                            @lang('messages.project_detail_grade_3')
                                                                            @break
                                                                        @case('grade-4')
                                                                            @lang('messages.project_detail_grade_4')
                                                                            @break
                                                                        @case('grade-special')
                                                                            @lang('messages.project_detail_grade_special')
                                                                            @break
                                                                    @endswitch   
                                                                </td>
                                                            </tr>
                                                            @endif --}}
    
															
                                                            <!--Status-->
                                                            @if($project_item->pro_status != 'unknow')
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_status')</strong></td>
                                                                <td class="table-box">
                                                                    :   @if($project_item->pro_status == 'ongoing')
                                                                            @lang('messages.project_detail_status_on_going')
                                                                        @elseif($project_item->pro_status == 'finished')
                                                                            @lang('messages.project_detail_status_finished')
                                                                        @endif
                                                                </td>
                                                            </tr>
                                                            @endif


															@if( Auth::check() )
                                                            <!--3D Render Video-->
                                                            @if($project_item->pro_3d_video  != '')
                                                                <tr>
                                                                    <td class="table-box table-title"><strong>@lang('messages.project_detail_3d_video')</strong></td>
                                                                    <td class="table-box">
                                                                        :   <a href="{{ $project_item->pro_3d_video }}" target="_blank" style="font-weight: bold; color: rgb(22, 59, 90)">Link</a>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            <!--4D video-->
                                                            @if($project_item->pro_4d_video != '')
                                                                <tr>
                                                                    <td class="table-box table-title"><strong>@lang('messages.project_detail_4d_video')</strong></td>
                                                                    <td class="table-box">
                                                                        :   <a href="{{ $project_item->pro_4d_video }}" target="_blank" style="font-weight: bold; color: rgb(22, 59, 90)">Link</a>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            <!--Progress video-->
                                                            @if($project_item->pro_progress_video != '')
                                                                <tr>
                                                                    <td class="table-box table-title"><strong>@lang('messages.project_detail_progress_video')</strong></td>
                                                                    <td class="table-box">
                                                                        :   <a href="{{ $project_item->pro_progress_video }}" target="_blank" style="font-weight: bold; color: rgb(22, 59, 90)">Link</a>
                                                                    </td>
                                                                </tr>
                                                            @endif
															@endif
    
                                                            <!--Time-->
                                                            <tr>
                                                                <td class="table-box table-title"><strong>@lang('messages.project_detail_time')</strong></td>
                                                                <td class="table-box">: {{ \Carbon\Carbon::parse($project_item->pro_time_work)->format('Y')}}</td>
                                                            </tr>

                                                            
        
        
                                                         
                                                        </tbody>
                                                    </table>
                                                </div>
    
                                            </div>
                                            
                                        </div>


                                        


                                        <style>
                                            table{
                                                background: #fff !important;
                                                padding: 1px;
                                                margin: 0;
                                            }
                                            table tr td{
                                            }
                                            #extra-photo{
                                                float: right;
                                            }
                                            #extra-photo .row-1{

                                            }
                                            #extra-photo .row-2{
                                                min-height: 50px;
                                            }
                                            #extra-photo .extra-img{
                                                border: 2px solid;
                                                padding: 5px;
                                            }
                                            #extra-photo .extra-img img{
                                                
                                                
                                            }
                                            #extra-photo .extra-img-1{
                                                width: 40%;
                                                float: left;
                                            }
                                            #extra-photo .extra-img-1 img{
                                                height: 220px;
                                                width: 100%;
                                            }
                                            #extra-photo .extra-img-2{
                                                width: 60%;
                                                float: right;
                                            }
                                            #extra-photo .extra-img-2 img{
                                                height: 220px;
                                                width: 100%;
                                            }
                                            #extra-photo .extra-img-3{
                                                width: 40%;
                                                float: right;
                                                
                                            }
                                            #extra-photo .extra-img-3 img{
                                                
                                            }
                                            #extra-photo .extra-img-4{
                                                width: 60%;
                                                float: left;
                                            }
                                            #extra-photo .extra-img-4 img{
                                                
                                            }
                                            #extra-photo .extra-img-5{
                                                width: 100%;
                                            }
                                            #extra-photo .extra-img-5 img{
                                                
                                            }
                                        </style>
                                        <div class="col-md-6">
                                            <div id="extra-photo" class="">
                                                
                                                <table style="">
                                                    <tr>
                                                        <td class="extra-img extra-img-1" style="border-right: none; border-bottom: none;">
                                                            <img class="" src="@if($project_item->pro_catalouge_4 != '') {{ asset('public/upload/product/'.$project_item->pro_catalouge_4) }} @else {{ asset('public/upload/template/blank4.jpg') }} @endif" alt="">
                                                        </td>
                                                        <td class="extra-img extra-img-2" style="border-bottom: none;">
                                                            <img class="" src="@if($project_item->pro_catalouge_5 != '') {{ asset('public/upload/product/'.$project_item->pro_catalouge_5) }} @else {{ asset('public/upload/template/blank5.jpg') }} @endif" alt="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="extra-img extra-img-1" style="border-right: none; border-bottom: none;">
                                                            <img class="" src="@if($project_item->pro_catalouge_6 != '') {{ asset('public/upload/product/'.$project_item->pro_catalouge_6) }} @else {{ asset('public/upload/template/blank4.jpg') }} @endif" alt="">
                                                        </td>
                                                        <td class="extra-img extra-img-2" style="border-bottom: none;">
                                                            <img class="" src="@if($project_item->pro_catalouge_7 != '') {{ asset('public/upload/product/'.$project_item->pro_catalouge_7) }} @else {{ asset('public/upload/template/blank5.jpg') }} @endif" alt="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="extra-img extra-img-5" colspan="2">
                                                            <img class="" src="@if($project_item->pro_catalouge_8 != '') {{ asset('public/upload/product/'.$project_item->pro_catalouge_8) }} @else {{ asset('public/upload/template/blank8.jpg') }} @endif" alt="">
                                                        </td>
                                                    </tr>

                                                </table>

  



                                            </div>
                                        </div>

                                        
                                    </div>

                                    <!--Project description-->
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <style>
                .owl-item {
                    height: 100vh !important;
                    display: flex !important;
                    align-items: center !important;
                }
                .img-zoom-cover{
                    margin-bottom: 0; 
                    margin-top: 0; 
                    height: 100vh; 
                    padding-top: 20px; 
                    padding-bottom: 40px;
                }
                .img-zoom{
                    height: ; 
                    width: 80%; 
                    margin: 0 auto;
                }
                @media (max-width: 768px){
                    .img-zoom-cover{
                        padding-top: 5px !important; 
                        padding-bottom: 5px !important;
                    }
                    .img-zoom{
                        width: 100% !important; 
                    }
                    .project-content > div .project-details .container{
                        margin-top: 0px !important;
                    }
                }
            </style>

            <!--Zoom slide item-->
            <div class="project-content" id="project_photo">
                <span class="icon-close"><i class="pe-7s-close-circle"></i></span>
                <div>
                    <div class="project-details">
                        <div class="container img-zoom-cover" style="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="owl-carousel">
                                        <!--Project thumb-->
                                        <div class="zoom-img col-lg-12 col-md-12 col-sm-12">
                                            <img style="" class="img-zoom" alt="" src="{{ asset('public/upload/product/1597129791SKAbia.png') }}" />
                                        </div>

                                        <!--Photo-->
                                        <!--If user login-->
                                        <!--If user logout-->
                                        <div class="zoom-img col-lg-12 col-md-12 col-sm-12">
                                            <img style="" class="img-zoom" alt="" src="{{ asset('public/upload/product/1597129791SKAbia.png') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End zoom slide item-->

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
            
            <footer class="" style="">
                
            
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
                $(".room-slider .flexslider").flexslider({
                    animation: "slide",
                    controlNav: "thumbnails",
                });

                $(".gapura_room .flexslider").flexslider({
                    animation: "slide",
                    controlNav: true,
                });
            </script>
        </div>

        <!--Extra zoom slide-->
        <!--   file for adding vertical points where we activate the elements animation   -->
        <script type="text/javascript" src="https://demos.creative-tim.com/rubik/assets/js/jquery.waypoints.min.js"></script>
        <!--   file where we handle all the script from the Rubik page   -->
        <script type="text/javascript" src="https://demos.creative-tim.com/rubik/assets/js/rubick.js"></script>

        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

        <script>
            $(document).ready(function () {
                $(".owl-carousel").owlCarousel({
                    loop: true,
                    nav: true,
                    dots: true,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        600: {
                            items: 1,
                        },
                        1000: {
                            items: 1,
                        },
                    },
                });
            });

            $(document).ready(function () {
                $(".zoom-img").hover(function () {
                    $(this).removeClass("grabbing").addClass("grab");
                });
                $(".zoom-img").mousedown(function () {
                    $(this).removeClass("grab").addClass("grabbing");
                });
                $(".zoom-img").mouseup(function () {
                    $(this).removeClass("grabbing").addClass("grab");
                });
            });
        </script>
        <!--End Extra zoom slide-->



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
    </body>
</html>
