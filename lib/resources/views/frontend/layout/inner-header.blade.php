<style>
    .text-upper-case{
        text-transform: uppercase;
    }

</style>

<header class="header-builder-frontend header-position-relative" style="background: transparent;">

    {{-- Header mobile --}}
    <div class="header-mobile header_mobile_screen">
        <div class="header-mobile-content">
            <div class="container">
                <div class="row">
                    <div class="left col-md-3 col-sm-3 col-xs-3">
                        <div class="clearfix">
                            <div class="canvas-menu gva-offcanvas">
                                <a class="dropdown-toggle" data-canvas=".mobile" href="#"><i class="fa fa-2x fa-bars"></i></a>
                            </div>
                            <div class="gva-offcanvas-content mobile">
                                <div class="close-canvas">
                                    <a><i class="fa fa-lg fa-times-circle"></i></a>
                                </div>
                                <div class="wp-sidebar sidebar">
                                    <div id="gva-mobile-menu" class="navbar-collapse">
                                        <ul id="menu-main-menu" class="gva-nav-menu gva-mobile-menu">
                                            
                                            <li id="menu-item-10129" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10129 text-upper-case"><a href="{{ asset('/') }}">Home</a></li>

                                            <li id="menu-item-10129" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10129 text-upper-case"><a href="{{ asset('about-us') }}">About us</a></li>

                                            <li id="menu-item-10129" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10129 text-upper-case"><a href="{{ asset('services') }}">Services</a></li>

                                            <li id="menu-item-10129" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10129 text-upper-case"><a href="{{ asset('partners') }}">Our partners</a></li>
                                            
                                            <li id="menu-item-620" class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-610 menu-item-620 text-upper-case">
                                                <a href="{{ asset('contact') }}">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="after-offcanvas"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="center text-center col-md-6 col-sm-6 col-xs-6 mobile-logo">
                        <div class="logo-menu">
                            <a href="{{ asset('/') }}">
                                <noscript><img src="{{ asset('public/upload/info/mainlogo.png') }}" alt="Indutri &#8211; Industry &amp; Factory Business WordPress Theme" /></noscript>
                                <img
                                    class="lazyload"
                                    src="{{ asset('public/upload/info/mainlogo.png') }}"
                                    data-src="{{ asset('public/upload/info/mainlogo.png') }}"
                                    alt="Indutri &#8211; Industry &amp; Factory Business WordPress Theme"
                                />
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    {{-- End header mobile --}}

    {{-- Header PC --}}
    <style>
        .header-pc-inner{
            background: transparent;
            padding-top: 70px;
            padding-bottom: 30px;
        }
        .header-pc-inner img{
            float: left;
        }

        .flex-menu-head{
            display: flex;
            position: absolute;
            right: 5%;
            padding-top: 40px;

        }
        .flex-menu-item{
            justify-content: center;
            text-align: center;
            font-weight: bold;
            color: #9aa3b2;
            margin-left: 50px;
            text-transform: uppercase;
        }
        .flex-menu-item a{
            color: #0c0c0c;
        }
        .flex-menu-item a:hover{
            color: #ff5316;
        }
        .current-menu{
            color: white;
        }

        .top-info-cover{
            padding-left: 50px;
        }
        .info-top-head{
            float: right;
            display: flex;
            justify-content: space-between;
            position: absolute;
            right: 5%;
            padding-top: 25px;
        }

        .tophead-info{
            font-weight: bold;
            color: #0c0c0c;
            font-size: 15px;
        }
        .top-head-icon{
            color: #ff5316;
            padding-right: 5px;
        }


    </style>

    <div class="header-builder-inner container">
        <div class="header_default_screen">
            <div class="header-main-wrapper">
                <div data-elementor-type="wp-post" data-elementor-id="4818" class="elementor elementor-4818" data-elementor-settings="[]">
                    <div class="elementor-inner">
                        <div class="elementor-section-wrap">

                            <div class="info-top-head">
                                <div class="top-info-cover"> <span class="fa fa-lg fa-envelope top-head-icon"></span> <span class="tophead-info">kieu.tran@mnkmetal.com</span></div>

                                <div class="top-info-cover"> <span class="fa fa-lg fa-phone top-head-icon"></span> <span class="tophead-info">091 314 1800</span></div>
                            </div>

                            <div class="elementor-row header-pc-inner">
                                <a href="{{ asset('/') }}">
                                    <img src="{{ asset('public/upload/info/mainlogo.png') }}" width="200" alt="Indutri &#8211; Industry &amp; Factory Business WordPress Theme" />
                                </a>
                                

                                <div class="flex-menu-head row">
                                    <div class="flex-menu-item current-menu"> <a href="{{ asset('/') }}">Home</a> </div>
                                    <div class="flex-menu-item current-menu"> <a href="{{ asset('about-us') }}">About us</a> </div>
                                    <div class="flex-menu-item current-menu"> <a href="{{ asset('services') }}">Services</a> </div>
                                    <div class="flex-menu-item current-menu"> <a href="{{ asset('partners') }}">Partners</a> </div>
                                    <div class="flex-menu-item current-menu"> <a href="{{ asset('contact') }}">Contact</a> </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End header PC --}}


</header>