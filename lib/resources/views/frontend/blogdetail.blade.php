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
        <script src="//theme.hstatic.net/1000077855/1000533237/14/wow.js?v=69" type="text/javascript"></script>
        <script>
            new WOW().init();
        </script>
        <link href="//hstatic.net/0/0/global/design/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all" />
        <script src="//hstatic.net/0/0/global/design/plugins/fancybox/jquery.fancybox.js" type="text/javascript"></script>
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

        <!--Header logo-->
        <style>
            #header{
                background-color: rgba(0,0,0,0.8);
            }
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

            <header id="header" class="site-header clearfix">
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
                                            <a href="{!! route('user.change-language', ['kr']) !!}"><li>한국어</li></a>
                                        </ul>
                                    </div>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>
            </header>




            <div id="main" class="site-main clearfix" style="padding-top: 30px;">
                <div id="main" class="site-main clearfix">
                    

                    <div id="content" class="clearfix">
                        <div class="article wrapper">
                            <div class="container">
                                <div class="row">
                                    <article id="post-1758" class="col-md-9 post-1758 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized tag-story">
                                        <div class="post-content">
                                            <h3 class="title-post text-center">
                                                @switch( Config::get('app.locale') )
                                                    @case('vi')
                                                        {{ $blog_detail->blog_ten_vi }}
                                                        @break
                                                    @case('en')
                                                        {{ $blog_detail->blog_ten_en }}
                                                        @break
                                                    @case('zh')
                                                        {{ $blog_detail->blog_ten_zh }}
                                                        @break
                                                    @case('ja')
                                                        {{ $blog_detail->blog_ten_ja }}
                                                        @break
                                                    @case('kr')
                                                        {{ $blog_detail->blog_ten_kr }}
                                                        @break
                                                @endswitch   
                                            </h3>
                                            <div class="info">
                                               

                                            </div>

                                            <div class="content">
                                                @switch( Config::get('app.locale') )
                                                    @case('vi')
                                                        {!! $blog_detail->blog_noidung_vi !!}
                                                        @break
                                                    @case('en')
                                                        {!! $blog_detail->blog_noidung_en !!}
                                                        @break
                                                    @case('zh')
                                                        {!! $blog_detail->blog_noidung_zh !!}
                                                        @break
                                                    @case('ja')
                                                        {!! $blog_detail->blog_noidung_ja !!}
                                                        @break
                                                    @case('kr')
                                                        {!! $blog_detail->blog_noidung_kr !!}
                                                        @break
                                                @endswitch  

                                             
                                            </div>
                                        </div>

                                       
                                    </article>
                                    <!-- #post-1758 -->

                                    <div class="col-md-3 clearfix">
                                        <aside id="primary-sidebar" class="widget-area sidebar">
                                            

                                            <!--Begin: Bài viết mới nhất-->
                                            <div class="news-latest list-group">
                                                <div class="block-title">
                                                    <h3 class="widget-title">@lang('messages.news_detail_relate_title')</h3>
                                                </div>
                                                <div class="content-latest">

                                                    @foreach ($blog_relate as $item)
                                                        @if($item->blog_id != $blog_detail->blog_id)
                                                            <div class="article seller-item">
                                                                <div class="sellers-img">
                                                                    <a href="{{ asset('blog/'.$item->blog_slug.'.'.$item->blog_id) }}" class="products-block-image content_img clearfix">
                                                                        <img src="{{ asset('public/upload/blog/'.$item->blog_thumb) }}" alt="{{ $item->blog_ten_vi }}" />
                                                                    </a>
                                                                </div>

                                                                <div class="product-content">
                                                                    <h5 class="bs-title">
                                                                        <a href="{{ asset('blog/'.$item->blog_slug.'.'.$item->blog_id) }}">
                                                                            @switch( Config::get('app.locale') )
                                                                                @case('vi')
                                                                                    {{ $item->blog_ten_vi }}
                                                                                    @break
                                                                                @case('en')
                                                                                    {{ $item->blog_ten_en }}
                                                                                    @break
                                                                                @case('zh')
                                                                                    {{ $item->blog_ten_zh }}
                                                                                    @break
                                                                                @case('ja')
                                                                                    {{ $item->blog_ten_ja }}
                                                                                    @break
                                                                                @case('kr')
                                                                                    {{ $item->blog_ten_kr }}
                                                                                    @break
                                                                            @endswitch       
                                                                        </a>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach

                                                    

                                                    
                                                </div>
                                                <!--End: Bài viết mới nhất-->
                                            </div>

                                            
                                        </aside>
                                        <!-- #primary-sidebar -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            

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




            

        </div>
    </body>
</html>
