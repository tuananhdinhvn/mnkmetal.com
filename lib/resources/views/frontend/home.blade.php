<!DOCTYPE html>
<html lang="en-US" class="no-js">
    <head>
        @include('frontend.layout.head-seo')
        
        <style>
            .top-head-info{
                color: #ff5316;
            }
            .top-info-text{
                color: #000;
                text-shadow: #fff;
                font-size: 15px;
                font-weight: bold;
                padding: 5px 7px 5px 5px;
                position: relative;
                top: 2px;
            }
            .text-upper-case{
                text-transform: uppercase;
            }
            .link-a-menu{
                color: #000 !important;
            }
            .link-a-menu:hover{
                color: #ff5316 !important;
            }

        </style>
    </head>
    <body class="page-template-default page page-id-5053 theme-indutri woocommerce-no-js tribe-no-js elementor-default elementor-kit-8020 elementor-page elementor-page-5053">
        <div class="wrapper-page">

            @include('frontend.layout.header')
            
            <div id="page-content">
                <div id="wp-main-content" class="clearfix main-page">
                    <div class="disable-breadcrumb clearfix"></div>
                    <div class="container-layout-content container-full">
                        <div class="content-page-wrap">
                            <div class="main-page-content base-layout row has-no-sidebar">
                                <div class="content-page col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="content-page-inner">
                                        <div class="post-5053 page type-page status-publish hentry" id="5053">
                                            <div data-elementor-type="wp-post" data-elementor-id="5053" class="elementor elementor-5053" data-elementor-settings="[]">
                                                <div class="elementor-inner">
                                                    <div class="elementor-section-wrap">

                                                        @include('frontend.layout.homeslide')

                                                        {{-- @include('frontend.layout.intro-quote') --}}
                                                        
                                                        @include('frontend.layout.short-info')

                                                        @include('frontend.layout.our-project')

                                                        @include('frontend.layout.numbers')
                                                        
                                                        @include('frontend.layout.our-service')
                                                        
                                                        {{-- @include('frontend.layout.video-intro') --}}


                                                        
                                                        @include('frontend.layout.background-staff')

                                                        @include('frontend.layout.partner-logo')

                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="link-pages"></div>
                                            <div class="container"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('frontend.layout.footer')

        
        <div id="gva-overlay"></div>
        <div id="gva-quickview" class="clearfix"></div>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="blur-svg">
            <defs>
                <filter id="blur-filter"><feGaussianBlur stdDeviation="3"></feGaussianBlur></filter>
            </defs>
        </svg>
     
        <noscript>
            <style>
                .lazyload {
                    display: none;
                }
            </style>
        </noscript>

        @include('frontend.layout.script-footer')

        
    </body>
</html>
