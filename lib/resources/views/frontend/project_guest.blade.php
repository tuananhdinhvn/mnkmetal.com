<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ $setting_info[0]->st_title }}</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/upload/template/'. $getindex->homepage_favicon) }}" />


        <!-- Google Fonts -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Roboto:300,400,500,700,900" rel="stylesheet" />
        <meta name="csrf-param" content="authenticity_token" />
        <meta name="csrf-token" content="w+NBtND2eFxCx7pm18UTtuhaEaRfBPgIUf1AalIxM4wte2EFBARPD5WZtPEyiF3YTEk41VYfqL1rvv8Xw4l1oQ==" />

        <link rel="stylesheet" media="all" href="{{ asset('css/application-3663d9d313e196f76d919f7dca4bc1a83ecef45ede70ea08266a1ca585907c62.css') }}" />
        <script src="{{ asset('js/application-4482f6b21ab02b9f0dcb57094c50c9d5b2675f3051b174ed31f43d0627e9af79.js') }}"></script>
        
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!--external css-->
        <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />

        <!--Sweet alert-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

        <style>
            a:hover{
                text-decoration: none
            }
            .btn-logout{
                position: absolute; 
                right: 20px; 
                top: 18vh;
            }
            .btn-logout a{
                color: white
            }
            .btn-logout-mobile{
                display: none;
            }
            .btn-logout-mobile a{ 
                color: white;
                text-transform: uppercase;
            }
            @media only screen and (max-width: 767px) {
                .btn-logout {
                    display: none;
                }

                .btn-logout-mobile{
                    display: block !important
                }
            }
        </style>
    </head>
    <body>
        <main>
            @include('frontend.layout.header-project')

            <!-- Section Content -->
            <section id="topWorks" class="g-py-80">
                <div class="container text-center g-max-width-750 g-mb-70">
                    <div class="text-uppercase g-brd-primary">

                        @if (Auth::check())
                            <h4 class="btn btn-primary btn-logout" >
                                <a href="{{ asset('guest/logout') }}"><strong>@lang('messages.project_guest_logout')</strong></a>
                            </h4>
                        @endif

                        
                        <h3 class="h3 g-letter-spacing-5 g-font-size-24 g-font-weight-400 g-color-primary g-mb-25" style="margin-top: 40px;">
                            @lang('messages.project_guest_title')
                        </h3>
                        
                    </div>
                </div>

                <div class="container-fluid px-0">
                    <div class="row no-gutters">
                        @if (Auth::check())


                       
                            @foreach ($project_list as $key=>$item)
                                @if(Auth::user()->project_share_1 == $item->pro_id)
                                    <a class="col-md-6 col-lg-4 g-parent g-theme-bg-blue-dark-v1--hover g-transition-0_2 g-transition--ease-in" href="{{ asset('project/'.$item->pro_id) }}">
                                        <div >
                                            <img
                                                class="img-fluid w-100"
                                                alt="SKA Factory"
                                                src="{{ asset('public/upload/product/'.$item->pro_thumb) }}"
                                            />
            
                                            <div class="text-center text-uppercase g-pa-30" style="position: relative;">
                                                <h4 class="g-letter-spacing-5 g-font-size-11 g-font-weight-400 g-color-gray-dark-v5 g-color-primary--parent-hover g-mb-10 g-mr-10 g-transition-0_2 g-transition--ease-in">
                                        
                                                    @switch( Config::get('app.locale') )
                                                        @case('vi')
                                                            {{ $item->pro_major_vi }}
                                                            @break
                                                        @case('en')
                                                            {{ $item->pro_major_en }}
                                                            @break
                                                        @case('zh')
                                                            {{ $item->pro_major_zh }}
                                                            @break
                                                        @case('ja')
                                                            {{ $item->pro_major_ja }}
                                                            @break
                                                    @endswitch    
                                                    
                                                </h4>
                                                <h3 class="h6 g-letter-spacing-2 g-font-weight-700 g-color-white--parent-hover mb-0 g-transition-0_2 g-transition--ease-in">
                                                
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
                                                    @endswitch    
                                                    
                                                </h3>
            
                                                <img src="{{ asset('public/upload/nation/'.$item->pro_nation.'.png') }}" alt=""
                                                        style="width: 35px; position: absolute; right: 4%; top: 20px;">
                                            </div>
                                        </div>
                                    </a>
                                @endif

                                @if(Auth::user()->project_share_2 == $item->pro_id)
                                    <a class="col-md-6 col-lg-4 g-parent g-theme-bg-blue-dark-v1--hover g-transition-0_2 g-transition--ease-in" href="{{ asset('project/'.$item->pro_id) }}">
                                        <div >
                                            <img
                                                class="img-fluid w-100"
                                                alt="SKA Factory"
                                                src="{{ asset('public/upload/product/'.$item->pro_thumb) }}"
                                            />
            
                                            <div class="text-center text-uppercase g-pa-30" style="position: relative;">
                                                <h4 class="g-letter-spacing-5 g-font-size-11 g-font-weight-400 g-color-gray-dark-v5 g-color-primary--parent-hover g-mb-10 g-mr-10 g-transition-0_2 g-transition--ease-in">
                                        
                                                    @switch( Config::get('app.locale') )
                                                        @case('vi')
                                                            {{ $item->pro_major_vi }}
                                                            @break
                                                        @case('en')
                                                            {{ $item->pro_major_en }}
                                                            @break
                                                        @case('zh')
                                                            {{ $item->pro_major_zh }}
                                                            @break
                                                        @case('ja')
                                                            {{ $item->pro_major_ja }}
                                                            @break
                                                    @endswitch    
                                                    
                                                </h4>
                                                <h3 class="h6 g-letter-spacing-2 g-font-weight-700 g-color-white--parent-hover mb-0 g-transition-0_2 g-transition--ease-in">
                                                
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
                                                    @endswitch    
                                                    
                                                </h3>
            
                                                <img src="{{ asset('public/upload/nation/'.$item->pro_nation.'.png') }}" alt=""
                                                        style="width: 35px; position: absolute; right: 4%; top: 20px;">
                                            </div>
                                        </div>
                                    </a>
                                @endif
                                    
                                @if(Auth::user()->project_share_3 == $item->pro_id)
                                    <a class="col-md-6 col-lg-4 g-parent g-theme-bg-blue-dark-v1--hover g-transition-0_2 g-transition--ease-in" href="{{ asset('project/'.$item->pro_id) }}">
                                        <div >
                                            <img
                                                class="img-fluid w-100"
                                                alt="SKA Factory"
                                                src="{{ asset('public/upload/product/'.$item->pro_thumb) }}"
                                            />
            
                                            <div class="text-center text-uppercase g-pa-30" style="position: relative;">
                                                <h4 class="g-letter-spacing-5 g-font-size-11 g-font-weight-400 g-color-gray-dark-v5 g-color-primary--parent-hover g-mb-10 g-mr-10 g-transition-0_2 g-transition--ease-in">
                                        
                                                    @switch( Config::get('app.locale') )
                                                        @case('vi')
                                                            {{ $item->pro_major_vi }}
                                                            @break
                                                        @case('en')
                                                            {{ $item->pro_major_en }}
                                                            @break
                                                        @case('zh')
                                                            {{ $item->pro_major_zh }}
                                                            @break
                                                        @case('ja')
                                                            {{ $item->pro_major_ja }}
                                                            @break
                                                    @endswitch    
                                                    
                                                </h4>
                                                <h3 class="h6 g-letter-spacing-2 g-font-weight-700 g-color-white--parent-hover mb-0 g-transition-0_2 g-transition--ease-in">
                                                
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
                                                    @endswitch    
                                                    
                                                </h3>
            
                                                <img src="{{ asset('public/upload/nation/'.$item->pro_nation.'.png') }}" alt=""
                                                        style="width: 35px; position: absolute; right: 4%; top: 20px;">
                                            </div>
                                        </div>
                                    </a>
                                @endif

                                @if(Auth::user()->project_share_4 == $item->pro_id)
                                    <a class="col-md-6 col-lg-4 g-parent g-theme-bg-blue-dark-v1--hover g-transition-0_2 g-transition--ease-in" href="{{ asset('project/'.$item->pro_id) }}">
                                        <div >
                                            <img
                                                class="img-fluid w-100"
                                                alt="SKA Factory"
                                                src="{{ asset('public/upload/product/'.$item->pro_thumb) }}"
                                            />
            
                                            <div class="text-center text-uppercase g-pa-30" style="position: relative;">
                                                <h4 class="g-letter-spacing-5 g-font-size-11 g-font-weight-400 g-color-gray-dark-v5 g-color-primary--parent-hover g-mb-10 g-mr-10 g-transition-0_2 g-transition--ease-in">
                                        
                                                    @switch( Config::get('app.locale') )
                                                        @case('vi')
                                                            {{ $item->pro_major_vi }}
                                                            @break
                                                        @case('en')
                                                            {{ $item->pro_major_en }}
                                                            @break
                                                        @case('zh')
                                                            {{ $item->pro_major_zh }}
                                                            @break
                                                        @case('ja')
                                                            {{ $item->pro_major_ja }}
                                                            @break
                                                    @endswitch    
                                                    
                                                </h4>
                                                <h3 class="h6 g-letter-spacing-2 g-font-weight-700 g-color-white--parent-hover mb-0 g-transition-0_2 g-transition--ease-in">
                                                
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
                                                    @endswitch    
                                                    
                                                </h3>
            
                                                <img src="{{ asset('public/upload/nation/'.$item->pro_nation.'.png') }}" alt=""
                                                        style="width: 35px; position: absolute; right: 4%; top: 20px;">
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            
                            @endforeach

                            
                        @else
                            <p style="font-weight: bold; text-transform: uppercase; font-size: 25px; margin-top: 10vh" class="col-12 text-center">
                                @lang('messages.project_guest_not_login')<br/>
                            </p>
                            <p class="col-12 text-center" style="font-weight: bold;">
                                <a href="{{ asset('/') }}"><span><i class="fa fa-lg fa-arrow-circle-o-left"></i></span> @lang('messages.project_guest_back_home')</a>
                                <br>or<br/>
                                <a href="{{ asset('login') }}"><span><i class="fa fa-lg fa-sign-in"></i></span> @lang('messages.project_guest_login')</a>
                            </p>
                        @endif
                        

                    </div>

                    <div class="text-center">
                        @if (Auth::check())
                            <h4 class="btn btn-primary btn-logout-mobile" >
                                <a href="{{ asset('guest/logout') }}" class=""><strong>@lang('messages.project_guest_logout')</strong></a>
                            </h4>
                        @endif
                    </div>
                    
                </div>
            </section>

            @include('frontend.layout.footer')



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




        </main>
    </body>
</html>

