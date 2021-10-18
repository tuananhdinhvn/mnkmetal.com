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
        <script src="{{ asset('public/admin/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/option_selection.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/api.jquery.js') }}" type="text/javascript"></script>

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
        <script src="//theme.hstatic.net/1000077855/1000533237/14/wow.js?v=69" type="text/javascript"></script>
        <script>
            new WOW().init();
        </script>
        <link href="{{ asset('public/admin/css/jquery.fancybox.css') }}" rel="stylesheet" type="text/css" media="all" />
        <script src="{{ asset('public/admin/js/jquery.fancybox.js') }}" type="text/javascript"></script>
        <script src="//hstatic.net/290/1000076290/10/2016/3-17/jquery.fancybox-media.js" type="text/javascript"></script>

        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54aa0592190a1461" async="async"></script>
        <!--------------CSS----------->
        <link href="{{ asset('public/css/page-contact-form.css') }}" rel="stylesheet" type="text/css" media="all" />

        <!------FONT------>

        <link rel="stylesheet" type="text/css" href="//hstatic.net/0/0/global/design/member/fonts-master/roboto.css" />

        <link rel="stylesheet" type="text/css" href="//hstatic.net/0/0/global/design/member/fonts-master/roboto.css" />



        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//hstatic.net/0/0/global/design/css/bootstrap.3.3.1.css" />
        <!-- Theme haravan-->

        <!-- Latest compiled and minified JavaScript -->
        <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" media="all" />

        <link href="//hstatic.net/0/0/global/design/theme-default/flexslider.css" rel="stylesheet" type="text/css" media="all" />
        <link href="//theme.hstatic.net/1000077855/1000533237/14/plugin.css?v=69" rel="stylesheet" type="text/css" media="all" />
        <link href="//theme.hstatic.net/1000077855/1000533237/14/responsive.css?v=69" rel="stylesheet" type="text/css" media="all" />
        <link href=" {{ asset('public/css/styles-babylon.css?v=69') }}" rel="stylesheet" type="text/css" media="all" />

        {{-- <link href="//theme.hstatic.net/1000077855/1000533237/14/jquery-ui-1.8.20.custom.css?v=69" rel="stylesheet" type="text/css" media="all" /> --}}
        {{-- <link href="//theme.hstatic.net/1000077855/1000533237/14/animate.css?v=69" rel="stylesheet" type="text/css" media="all" /> --}}

        {{-- <link href="//theme.hstatic.net/1000077855/1000533237/14/sidebar.css?v=69" rel="stylesheet" type="text/css" media="all" /> --}}

        <style>
            .grab {cursor: -webkit-grab; cursor: grab;}
            .grabbing {cursor: -webkit-grabbing; cursor: grabbing !important;}


            #info-table td{
                border: 1px solid #74747487;
                text-transform: uppercase;
                font-size: 14px
            }
            
            .block-social-footer{
                background-color: #272730 !important;
                color: #999 !important;
            }
            .block-social-footer:hover {
                background-color: #c94645 !important;
                color: #fff !important;
            }

            .bread-title{
                padding: 10px 10px 10px 0;
                font-size: 16px;
                text-transform: uppercase;
            }
            .bread-title a:hover{
                color: #c94645 !important
            }


            #table {
                background: #ffffff5c;
            }
            @media only screen and (min-width: 769px) {
                #table{
                    margin-left: 20px
                }
            }

            .text-link{
                color: #272730;
                text-decoration: underline
            }
            .text-link:hover{
                color: #c94645 !important
            }

            .owl-prev{
                position: absolute;
                left: 0;
                top: 45vh;
                font-size: 2rem;
            }
            .owl-prev span{
                font-size: 3rem;
            }
            .owl-next{
                position: absolute;
                right: 0;
                top: 45vh;
                font-size: 2rem;
            }
            .owl-next span{
                font-size: 3rem;
            }
        </style>



        <!--Galery slide-->
        <script src="{{ asset('public/slide-galery/js/jquery-1.11.3.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/slide-galery/js/jssor.slider-28.0.0.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {

                var jssor_1_SlideshowTransitions = [
                {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
                ];

                var jssor_1_options = {
                $AutoPlay: 1,
                $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: jssor_1_SlideshowTransitions,
                    $TransitionsOrder: 1
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,
                    $SpacingX: 5,
                    $SpacingY: 5
                }
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                /*#region responsive code begin*/

                var MAX_WIDTH = 700;

                function ScaleSlider() {
                    var containerElement = jssor_1_slider.$Elmt.parentNode;
                    var containerWidth = containerElement.clientWidth;

                    if (containerWidth) {

                        var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                        jssor_1_slider.$ScaleWidth(expectedWidth);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }

                ScaleSlider();

                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                /*#endregion responsive code end*/
            });
        </script>
        <style>
            /*jssor slider loading skin spin css*/
            .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes jssorl-009-spin {
                from { transform: rotate(0deg); }
                to { transform: rotate(360deg); }
            }

            /*jssor slider arrow skin 106 css*/
            .jssora106 {display:block;position:absolute;cursor:pointer;}
            .jssora106 .c {fill:#fff;opacity:.3;}
            .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
            .jssora106:hover .c {opacity:.5;}
            .jssora106:hover .a {opacity:.8;}
            .jssora106.jssora106dn .c {opacity:.2;}
            .jssora106.jssora106dn .a {opacity:1;}
            .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

            /*jssor slider thumbnail skin 101 css*/
            .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
            .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
            .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
            .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
            .jssort101 .p:hover{padding:2px;}
            .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
            .jssort101 .p:hover.pdn{padding:0;}
            .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
            .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
            .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
            .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
            .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
        </style>
        <!--End slide galery-->


        <!--Extra zoom slide-->
        <link href="{{ asset('public/admin/lib/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/rubick.css') }}" rel="stylesheet" />
        <link href="https://demos.creative-tim.com/rubik/assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
        <!--End Extra zoom slide-->

    </head>
    <body class="home page page-id-1579 page-template page-template-template page-template-home-template page-template-templatehome-template-php">
       
        
        <div id="main-wrapper" class="clearfix">

            <!--Header logo-->
            <header id="header" class="site-header transparent-header clearfix">
                <div class="header-navigation">
                    <div class="container">
                        <div class="row">
                            <div class=" wow fadeInDown col-md-12" >
                                <div id="logo" class="logo-image">
                                    <a href="{{ route('index') }}">
                                        <img    src="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}"
                                                style="margin: auto;"
                                                class="image-logo" title="Babylon Residence" alt="Babylon Residence" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <div id="main" class="site-main clearfix">
                <div id="main" class="site-main clearfix" style="background-image: url(@if( $project_item->pro_background_cover != '' ) {{ asset('public/upload/product/'.$project_item->pro_background_cover) }} @else {{ asset('public/upload/template/ProjectBackground.png') }} @endif ); background-repeat: no-repeat; background-size: cover;">

                    <!--Project banner-->
                    <div class="page-title cover-background wow fadeIn clearfix" style="background-image: url({{ asset('public/upload/product/'.$project_item->pro_background) }});">
                        <div class="title text-center wow fadeIn" data-wow-delay="1.5s">
                            
                        </div>
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
                            @endswitch   

                        </h2>
                    </div>

                    <section id="content" class="clearfix">
                        <div class="room-detail-wrap wrapper clearfix" style="padding-top: 20px; background: transparent;">
                            <div class="container" style="">

                                <!--Breadcumb-->
                                <div class="info" style="padding-bottom: 20px;">
                                    <span class="bread-title">
                                        <i class="fa fa-lg fa-home"></i>
                                        <a href="{{ asset('/#projects') }}">
                                            @lang('messages.project_detail_breadcumb_home')
                                        </a>
                                    </span>
                                
                                    <span class="bread-title">
                                        <i class="fa fa-lg fa-caret-right"></i>
                                        <a @if (Auth::check() && Auth::user()->phanquyen == 3) href="{{ asset('guest') }}" @else href="{{ asset('/project') }}" @endif> @lang('messages.project_detail_breadcumb_project') </a>
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
                                        @endswitch 

                                    </span>
                                </div>

                                <div class="row">
                                    <div class="clearfix" style="margin-bottom: 40px">
                                        <div class="room-slider col-md-6">


                                            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:680px;overflow:hidden;visibility:hidden;">
                                                
                                    
                                                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                                    <img style="margin-top:-19px;position:relative;top:70%;width:38px;height:38px;" src="{{ asset('public/slide-galery/img/spin.svg') }}" />
                                                </div>
                                                
                                                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:680px;overflow:hidden;">
                                       

                                                    <!--Project thumb-->
                                                    <div class="project  animation-1">
                                                        <a class="color-1" href="javascript:void(0)" onClick="rubik.showModal(this)" data-target="project_photo">
                                                            <img data-u="image" src="{{ asset('public/upload/product/'.$project_item->pro_thumb) }}" />
                                                        </a>
                                                        <img data-u="thumb" src="{{ asset('public/upload/product/'.$project_item->pro_thumb) }}" alt="{{ $project_item->pro_ten_en }}" />
                                                    </div>

                                                    <!--Photo-->
                                                    <!--If user login-->
                                                    @if (Auth::check())
                                                        @foreach ($product_alt_photo_private as $item)
                                                            <div class="project  animation-1">
                                                                <a class="color-1" href="javascript:void(0)" onClick="rubik.showModal(this)" data-target="project_photo">
                                                                    <img data-u="image" src="{{ asset('public/upload/productphoto/'.$item->photo_url) }}" />
                                                                </a>
                                                                <img data-u="thumb" src="{{ asset('public/upload/productphoto/'.$item->photo_url) }}" alt="{{ $project_item->pro_ten_en }}" />
                                                            </div>
                                                        @endforeach
                                                        @foreach ($project_alt_photo as $item)
                                                            <div class="project  animation-1">
                                                                <a class="color-1" href="javascript:void(0)" onClick="rubik.showModal(this)" data-target="project_photo">
                                                                    <img data-u="image" src="{{ asset('public/upload/productphoto/'.$item->photo_url) }}" />
                                                                </a>
                                                                <img data-u="thumb" src="{{ asset('public/upload/productphoto/'.$item->photo_url) }}" alt="{{ $project_item->pro_ten_en }}" />
                                                            </div>
                                                        @endforeach
                                                    @else
                                                    <!--If user logout-->
                                                        @foreach ($project_alt_photo as $item)
                                                            <div class="project  animation-1">
                                                                <a class="color-1" href="javascript:void(0)" onClick="rubik.showModal(this)" data-target="project_photo">
                                                                    <img data-u="image" src="{{ asset('public/upload/productphoto/'.$item->photo_url) }}" />
                                                                </a>
                                                                <img data-u="thumb" src="{{ asset('public/upload/productphoto/'.$item->photo_url) }}" alt="{{ $project_item->pro_ten_en }}" />
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                    
                                                    <!--iFrame-->
                                                    <!--if user login-->
                                                    {{-- @if (Auth::check())
                                                        <!--Youtube private-->
                                                        @if ($project_item->pro_youtube_private_1 != null)
                                                            <div>
                                                                <div data-u="image">
                                                                    <iframe width="100%" height="580" src="https://www.youtube.com/embed/{{ $project_item->pro_youtube_private_1 }}" frameborder="0" 
                                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                </div>
                                                                <div data-u="thumb">
                                                                    <img data-u="thumb" src="{{ asset('public/upload/image/play_btn.png') }}" />
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <!--End Youtube private-->

                                                        <!--Youtube public-->
                                                        @if ($project_item->pro_youtube_public_1 != null)
                                                            <div>
                                                                <div data-u="image">
                                                                    <iframe width="100%" height="580" src="https://www.youtube.com/embed/{{ $project_item->pro_youtube_public_1 }}" frameborder="0" 
                                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                </div>
                                                                <div data-u="thumb">
                                                                    <img data-u="thumb" src="{{ asset('public/upload/image/play_btn.png') }}" />
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <!--End Youtube public-->

                                                    <!--if user logout-->
                                                    @else
                                                        <!--Youtube public-->
                                                        @if ($project_item->pro_youtube_public_1 != null)
                                                            <div>
                                                                <div data-u="image">
                                                                    <iframe width="100%" height="580" src="https://www.youtube.com/embed/{{ $project_item->pro_youtube_public_1 }}" frameborder="0" 
                                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                </div>
                                                                <div data-u="thumb">
                                                                    <img data-u="thumb" src="{{ asset('public/upload/image/play_btn.png') }}" />
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <!--End Youtube public-->
                                                    @endif --}}
                                                    <!--End iFrame-->
                                                    
                                                    
                                                </div>


                                                <!-- Thumbnail Navigator -->
                                                <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
                                                    <div data-u="slides">
                                                        <div data-u="prototype" class="p" style="width:190px;height:90px;">
                                                            <div data-u="thumbnailtemplate" class="t"></div>
                                                            <svg viewbox="0 0 16000 16000" class="cv">
                                                                <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                                                                <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                                                                <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Arrow Navigator -->
                                                <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:262px;left:30px;" data-scale="0.75">
                                                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                                        <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                                        <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                                                        <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
                                                    </svg>
                                                </div>
                                                <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:262px;right:30px;" data-scale="0.75">
                                                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                                        <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                                        <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                                                        <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
                                                    </svg>
                                                </div>
                                            </div>
                                            <!-- #endregion Jssor Slider End -->


                                        </div>

                                        <div class="room-detail col-md-6">
                                            {{-- <h2 style="text-transform: uppercase; color: #c94645; letter-spacing: 0.35714rem; padding-left: 10px;">
                                                Project name
                                            </h2> --}}

                                            <table id="table" class="table">
                                                <tbody id="info-table">
                                                    <!--Owner-->
                                                  <tr>
                                                    <td class="table-box"><strong>@lang('messages.project_detail_investor'):</strong> </td>
                                                    <td class="table-box">{{ $project_item->pro_owner_en }}</td>
                                                  </tr>

                                                  <!--Nationality-->
                                                  <tr>
                                                    <td class="table-box"><strong>@lang('messages.project_detail_national'):</strong></td>
                                                    <td class="table-box">
                                                        @foreach ($nation_list as $nation_item)
                                                            @if($nation_item->nation_id == $project_item->pro_nation)
                                                            <img src="{{ asset('public/upload/nation/'.$nation_item->nation_id.'.png') }}" width="35px" alt="">
                                                                {{-- {{ Config::get('app.locale') == 'en' ? $nation_item->nation_name_en : ( Config::get('app.locale') == 'zh' ? $nation_item->nation_name_zh_tra : $nation_item->nation_name_ja ) }} --}}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                  </tr>

                                                  <!--Major-->
                                                  <tr>
                                                    <td class="table-box"><strong>@lang('messages.project_detail_major'):</strong></td>
                                                    <td class="table-box">
                                                        @foreach ($major_list as $major_item)
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
                                                                @endswitch 
                                                            @endif
                                                        @endforeach    
                                                    </td>
                                                  </tr>

                                                  <!--Building grade-->
                                                  <tr>
                                                    <td class="table-box"><strong>@lang('messages.project_detail_building_grade'):</strong></td>
                                                    <td class="table-box">
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

                                                  <!--Time-->
                                                  <tr>
                                                    <td class="table-box"><strong>@lang('messages.project_detail_time'):</strong></td>
                                                    <td class="table-box">{{ \Carbon\Carbon::parse($project_item->pro_time_work)->format('Y')}}</td>
                                                  </tr>

                                                  <!--Floor area-->
                                                  <tr>
                                                    <td class="table-box"><strong>@lang('messages.project_detail_area'):</strong></td>
                                                    <td class="table-box">{{ number_format($project_item->pro_area, 0, ',', '.') }} m2</td>
                                                  </tr>
                                                  
                                                  <!--Location-->
                                                  <tr>
                                                    <td class="table-box"><strong>@lang('messages.project_detail_location'):</strong></td>
                                                    <td class="table-box" style="">
                                                        @foreach ($location_list as $location_item)
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
                                                                @endswitch 
                                                            @endif
                                                        @endforeach   
                                                    </td>
                                                  </tr>

                                                  <!--Industrial park-->
                                                  <tr>
                                                    <td class="table-box"><strong>@lang('messages.project_detail_industrial_park'):</strong></td>
                                                    <td class="table-box">{{ $project_item->pro_induspark }}</td>
                                                  </tr>

                                                  <!--Contractor-->
                                                  <tr>
                                                    <td class="table-box"><strong>@lang('messages.project_detail_contractor'):</strong></td>
                                                    <td class="table-box">
                                                        @if( $project_item->pro_contractor == '' )
                                                            N/A
                                                        @else
                                                            {{ $project_item->pro_contractor }}
                                                        @endif
                                                    </td>
                                                  </tr>

                                                  <!--Scope of work-->
                                                  <tr>
                                                    <td class="table-box"><strong>@lang('messages.project_detail_scope_of_work'):</strong></td>
                                                    <td class="table-box">
                                                        @if( $project_item->pro_scope_work == '' )
                                                            N/A
                                                        @else
                                                            {{ $project_item->pro_scope_work }}
                                                        @endif
                                                    </td>
                                                  </tr>
                                                  
                                                  <!--Status-->
                                                  <tr>
                                                    <td class="table-box"><strong>@lang('messages.project_detail_status'):</strong></td>
                                                    <td class="table-box">
                                                        @if($project_item->pro_status == 'ongoing')
                                                            @lang('messages.project_detail_status_on_going')
                                                        @elseif($project_item->pro_status == 'finished')
                                                            @lang('messages.project_detail_status_finished')
                                                        @endif
                                                    </td>
                                                  </tr>

                                                  <!--3D video-->
                                                  @if( Auth::check() )
                                                    @if( $project_item->pro_3d_video != '' )
                                                        <tr>
                                                            <td class="table-box"><strong>@lang('messages.project_detail_3d_video'):</strong></td>
                                                            <td class="table-box">
                                                                <a href="{{ $project_item->pro_3d_video }}" target="_blank" class="text-link">Link</a>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                  @else
                                                    @if( $project_item->pro_3d_video_private == false && $project_item->pro_3d_video != '' )
                                                        <tr>
                                                            <td class="table-box"><strong>@lang('messages.project_detail_3d_video'):</strong></td>
                                                            <td class="table-box">
                                                                <a href="{{ $project_item->pro_3d_video }}" target="_blank" class="text-link">Link</a>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                  @endif

                                                  <!--4D video-->
                                                  @if( Auth::check() )
                                                    @if( $project_item->pro_4d_video != '' )
                                                        <tr>
                                                            <td class="table-box"><strong>@lang('messages.project_detail_4d_video'):</strong></td>
                                                            <td class="table-box">
                                                                <a href="{{ $project_item->pro_4d_video }}" target="_blank" class="text-link">Link</a>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                  @else
                                                    @if( $project_item->pro_4d_video_private == false && $project_item->pro_4d_video != '' )
                                                        <tr>
                                                            <td class="table-box"><strong>@lang('messages.project_detail_4d_video'):</strong></td>
                                                            <td class="table-box">
                                                                <a href="{{ $project_item->pro_4d_video }}" target="_blank" class="text-link">Link</a>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                  @endif


                                                  <!--Progress video-->
                                                  @if( Auth::check() )
                                                    @if( $project_item->pro_progress_video != '' )
                                                        <tr>
                                                            <td class="table-box"><strong>@lang('messages.project_detail_progress_video'):</strong></td>
                                                            <td class="table-box">
                                                                <a href="{{ $project_item->pro_progress_video }}" target="_blank" class="text-link">Link</a>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                  @else
                                                    @if( $project_item->pro_progress_video_private == false && $project_item->pro_progress_video != '' )
                                                        <tr>
                                                            <td class="table-box"><strong>@lang('messages.project_detail_progress_video'):</strong></td>
                                                            <td class="table-box">
                                                                <a href="{{ $project_item->pro_progress_video }}" target="_blank" class="text-link">Link</a>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                  @endif
                                                 
                                                  
                                                <!--Info-->
                                                @switch( Config::get('app.locale') )
                                                    @case('vi')
                                                        @if( $project_item->pro_thongtin_vi != '' )
                                                            <tr>
                                                                <td class="table-box" style="text-transform: none" colspan="2">
                                                                    {!! $project_item->pro_thongtin_vi !!}
                                                                    @if(Auth::check())
                                                                    {!! $project_item->pro_thongtin_private_vi !!}
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endif
                                                        @break
                                                    @case('en')
                                                        @if( $project_item->pro_thongtin_en != '' )
                                                            <tr>
                                                                <td class="table-box" style="text-transform: none" colspan="2">
                                                                    {!! $project_item->pro_thongtin_en !!}
                                                                    @if(Auth::check())
                                                                    {!! $project_item->pro_thongtin_private_en !!}
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endif
                                                        @break
                                                    @case('zh')
                                                        @if( $project_item->pro_thongtin_zh != '' )
                                                            <tr>
                                                                <td class="table-box" style="text-transform: none" colspan="2">
                                                                    {!! $project_item->pro_thongtin_zh !!}
                                                                    @if(Auth::check())
                                                                    {!! $project_item->pro_thongtin_private_zh !!}
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endif
                                                        @break
                                                    @case('ja')
                                                        @if( $project_item->pro_thongtin_ja != '' )
                                                            <tr>
                                                                <td class="table-box" style="text-transform: none" colspan="2">
                                                                    {!! $project_item->pro_thongtin_ja !!}
                                                                    @if(Auth::check())
                                                                    {!! $project_item->pro_thongtin_private_ja !!}
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endif
                                                        @break
                                                @endswitch 
                                                

                                                </tbody>
                                            </table>


                                        </div>
                                    </div>


                                    <!--Project description-->
                                    {{-- @if (Auth::check())
                                        <div class="room-video">
                                            <div class="room-tour-detail col-md-12">
                                                <h2>@lang('messages.project_detail_project_info')</h2>

                                                <p>
                                                    @switch( Config::get('app.locale') )
                                                        @case('vi')
                                                            {!! $project_item->pro_thongtin_vi !!}
                                                            @break
                                                        @case('en')
                                                            {!! $project_item->pro_thongtin_en !!}
                                                            @break
                                                        @case('zh')
                                                            {!! $project_item->pro_thongtin_zh !!}
                                                            @break
                                                        @case('ja')
                                                            {!! $project_item->pro_thongtin_ja !!}
                                                            @break
                                                    @endswitch  
                                                </p>
                                            
                                                
                                            </div>

                                        </div>
                                    @endif --}}


                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                
            </div>

            <style>
                .owl-item{
                    height: 100vh !important;
                    display: flex !important;
                    align-items: center !important;
                }
            </style>

            <!--Zoom slide item-->
            <div class="project-content" id="project_photo">
                <span class="icon-close"><i class="pe-7s-close-circle"></i></span>
                <div>
                    <div class="project-details">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="owl-carousel">



                                        <!--Project thumb-->
                                        <div class="zoom-img col-lg-12 col-md-12 col-sm-12">
                                            <img style="height: 100vh; width: 80%; margin: 0 auto; object-fit: contain;" class="" alt="" src="{{ asset('public/upload/product/'.$project_item->pro_thumb) }}" />
                                        </div>


                                        <!--Photo-->
                                        <!--If user login-->
                                        @if (Auth::check())
                                            @foreach ($product_alt_photo_private as $item)
                                                <div class="zoom-img col-lg-12 col-md-12 col-sm-12">
                                                    <img style="height: 100vh; width: 80%; margin: 0 auto; object-fit: contain;" alt="" src="{{ asset('public/upload/productphoto/'.$item->photo_url) }}" />
                                                </div>
                                            @endforeach
                                            @foreach ($project_alt_photo as $item)
                                                <div class="zoom-img col-lg-12 col-md-12 col-sm-12">
                                                    <img style="height: 100vh; width: 80%; margin: 0 auto; object-fit: contain;" alt="" src="{{ asset('public/upload/productphoto/'.$item->photo_url) }}" />
                                                </div>
                                            @endforeach
                                        @else
                                        <!--If user logout-->
                                            @foreach ($project_alt_photo as $item)
                                                <div class="zoom-img col-lg-12 col-md-12 col-sm-12">
                                                    <img style="height: 100vh; width: 80%; margin: 0 auto; object-fit: contain;"  alt="" src="{{ asset('public/upload/productphoto/'.$item->photo_url) }}" />
                                                </div>
                                            @endforeach
                                        @endif

                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End zoom slide item-->

           

            <footer id="footer" class="wrapper clearfix">

                <div class="footer-copyright wow fadeIn text-center">
                    <p style="text-align: center; margin-bottom: 20px">
                        <a href="">
                            <img src="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" style="margin: 0 auto" alt="">
                        </a>
                    </p>
                    <div class="container">
                        <div class="copyright">
                            <ul class="footer-social">

                                <li class="twitter soc-icon"><a href="{{ $setting_info[0]->st_twitter }}" class="fa fa-twitter block-social-footer"></a></li>

                                <li class="pinterest soc-icon"><a href="{{ $setting_info[0]->st_pinterest }}" class="fa fa-pinterest block-social-footer"></a></li>

                                <li class="facebook soc-icon"><a href="{{ $setting_info[0]->st_fanpage }}" class="fa fa-facebook block-social-footer"></a></li>

                                <li class="instagram soc-icon"><a href="{{ $setting_info[0]->st_insta }}" class="fa fa-instagram block-social-footer"></a></li>

                                <li class="linkedin soc-icon"><a href="{{ $setting_info[0]->st_linkedin }}" class="fa fa-linkedin block-social-footer"></a></li>

                            </ul>

                        </div>
                    </div>
                </div>
            </footer>


            <script>
                $(".room-slider .flexslider").flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
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
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel({
                    loop:true,
                    nav:true,
                    dots: true,
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
            });

            $(document).ready(function(){
                $( ".zoom-img" ).hover(function() {
                    $( this ).removeClass( "grabbing" ).addClass("grab");
                });
                $( ".zoom-img" ).mousedown(function() {
                    $( this ).removeClass( "grab" ).addClass("grabbing");
                });
                $( ".zoom-img" ).mouseup(function() {
                    $( this ).removeClass( "grabbing" ).addClass("grab");
                });
            });
        </script>
        <!--End Extra zoom slide-->



    </body>
</html>
