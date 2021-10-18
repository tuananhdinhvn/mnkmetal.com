@extends('frontend.master')

@section('title')
    ISET education | Du học {{ $procat_item[0]->procat_ten }}
@endsection


@section('seo')
    <meta name="description" content="{{ $procat_item[0]->procat_mota }}">
    <meta name="keywords" content="{{ $procat_item[0]->procat_keyword }} " />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ISET education | Du học {{ $procat_item[0]->procat_ten }}" />
    <meta property="og:image" content="{{ asset('public/upload/product/'. $procat_item[0]->procat_icon) }}" />
    <meta property="og:image" content="{{ asset('public/upload/product/'. $procat_item[0]->procat_icon) }}" />
    <meta property="og:image:alt" content="ISET education | Du học {{ $procat_item[0]->procat_ten }}" />
    <meta property="og:description" content="{{ $procat_item[0]->procat_mota }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="ISET education | Du học {{ $procat_item[0]->procat_ten }}" />

    <meta name="twitter:site" content="@https://" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="ISET education | Du học {{ $procat_item[0]->procat_ten }}" />
    <meta name="twitter:description" content="{{ $procat_item[0]->procat_mota }}" />

    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <meta name="theme-color" content="#39b54a" />


    <!--CSS staff consultant-->
    <style>
        .table-filter{
            width: 300px;
            margin: 0 auto;
            color: white;
            font-weight: bold;
            font-size: 20px;
            text-shadow: 0 0 10px black;
        }
        .none-border{
            border: none
        }
    </style>

    <style>
        @media only screen and (max-width: 768px){
            .call-staff{
                display: block !important
            }
            
        }

        .staff-title-head{
            font-weight: bold;
        }
        .staff-info-detail{
            font-weight: bold;
            color: #515251
        }
        
        .call-staff{
            width: 100%;
            background: #0c8442;
            padding: 20px;
            font-size: 22px;
            text-transform: uppercase;
            border-radius: 10px;
            color: antiquewhite;
            font-weight: bold;
            display: none
        }
    </style>


@endsection


@section('main')
    <section id="breadcrumb-wrapper" class="breadcrumb-w-img" style="background: url('https://www.isetedu.com.vn/public/upload/product/{{ $procat_item[0]->procat_icon }}'); background-size: cover; background-repeat: no-repeat;">
        <div class="breadcrumb-overlay"></div>
        <div class="breadcrumb-content">
            <div class="wrapper">
                <div class="inner text-center">
                    <div class="breadcrumb-big">
                        <h2>
                            {{ Config::get('app.locale') == 'vi' ? 'Du học '.$procat_item[0]->procat_ten : $procat_item[0]->procat_ten_en }}
                        </h2>
                    </div>
                    <div class="breadcrumb-small">
                        <a href="{{ route('index') }}" title="Quay trở về trang chủ">@lang('messages.home')</a>

                        <span aria-hidden="true">/</span>

                        <span>{{ Config::get('app.locale') == 'vi' ? 'Du học '.$procat_item[0]->procat_ten : $procat_item[0]->procat_ten_en }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="PageContainer" class="is-moved-by-drawer">
        <main class="main-content" role="main">


            <section id="product-wrapper">
                <div class="wrapper">
                    <div class="inner">
                        <div itemscope itemtype="http://schema.org/Product">
                            <meta itemprop="url" content="{{ url()->current() }}" />
                            <meta itemprop="image" content="//product.hstatic.net/1000248829/product/hc-img2_grande.png" />

                            <div class="grid product-single">
                                <div class="grid__item large--one-whole">
                                    <div class="hrvproduct-tabs">
                                        <ul class="tabs clearfix">
                                            <li class="active" ><a href="#tab1">@lang('messages.nation_tab_intro_title')</a></li>

                                            {{-- <li><a href="#tab2">@lang('messages.nation_staff_title')</a></li> --}}

                                            {{-- <li class="tabBtnBuyNow" style="width: calc(100% / 2);">
                                                <button type="button" class="btnBuyNow buy-now" data-id="1020054919"><span>Đăng ký</span></button>
                                            </li> --}}
                                        </ul>




                                        <!--introduce-->
                                        <div class="tabs-content active" id="tab1">
                                            <div class="proTab-overview">
                                                {!! Config::get('app.locale') == 'vi' ? $procat_item[0]->pro_thongtin : $procat_item[0]->pro_thongtin_en !!}
                                            </div>
                                        </div>

                                        <!--Consultant staff-->
                                        <div class="tabs-content" id="tab2">
                                            
                                            <div class="grid">
                                                <div class="grid__item large--one-quarter medium--one-whole small--one-whole">
                                                    <div class="hau-img">
                                                        <img src="{{ asset('public/upload/template/'.$staff_info[0]->cust_photo) }}" width="100%" height="auto" alt="" />
                                                    </div>
                                                </div>
                        
                                                <div class="grid__item large--three-quarters medium--one-whole small--one-whole" >
                                                    <div class="event-info">
                                                        <div style="text-align: justify;">
                                                            <table>
                                                                <tr>
                                                                    <td class="none-border staff-title-head">@lang('messages.nation_staff_name')</td>
                                                                    <td class="none-border staff-info-detail">{{ $staff_info[0]->cust_ten }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="none-border staff-title-head">@lang('messages.nation_staff_position')</td>
                                                                    <td class="none-border staff-info-detail">{{ $staff_info[0]->cust_diachi }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="none-border staff-title-head">@lang('messages.nation_staff_email')</td>
                                                                    <td class="none-border staff-info-detail">{{ $staff_info[0]->cust_email }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="none-border staff-title-head">@lang('messages.nation_staff_phone')</td>
                                                                    <td class="none-border staff-info-detail">{{ $staff_info[0]->cust_phone }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="none-border staff-title-head">@lang('messages.nation_staff_zalo')</td>
                                                                    <td class="none-border staff-info-detail">{{ $staff_info[0]->cust_zalo }}</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <a href="tel:{{ $staff_info[0]->cust_phone }}"><button class="call-staff">@lang('messages.nation_staff_call_btn')</button></a> 
                                                </div>
                                            </div>
                                        
                                        </div>

                                    </div>

                                    <style>
                                        .hrvproduct-tabs .tabs-content {
                                            display: none;
                                        }
                                        .hrvproduct-tabs .tabs-content.active {
                                            display: block;
                                        }
                                    </style>
                                    <script>
                                        var menu = $(".hrvproduct-tabs .tabs li");
                                        var menuLinks = $(".hrvproduct-tabs .tabs li a");
                                        var tabsContent = $(".hrvproduct-tabs .tabs-content");
                                        menuLinks.click(function (e) {
                                            e.preventDefault();
                                            var targetBlock = $(this).attr("href");
                                            menu.removeClass("active");
                                            $(this).parent("li").addClass("active");
                                            tabsContent.hide();
                                            $(targetBlock).fadeIn(500);
                                        });
                                    </script>

                                    <hr />

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="collection-wrapper">
                <div class="wrapper">
                    <div class="inner">

                            <div class="collection-body">
                                <div class="grid-uniform product-list">

                                    
                                    @foreach ($product_list as $school)
                                      
                                        <div class="grid__item large--one-third medium--one-half small--one-whole" style="position: relative;">
                                            <div class="product-item clearfix">
                                                <div class="product-img">
                                                    <a href="{{ asset('school/'.$school->pro_slug.'.'.$school->pro_id) }}">
                                                        <img src="{{ asset('public/upload/product/'.$school->pro_thumb) }}" alt="{{ $school->pro_ten }}" />
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-title">
                                                        <a href="{{ asset('school/'.$school->pro_slug.'.'.$school->pro_id) }}">
                                                            {{ Config::get('app.locale') == 'vi' ? $school->pro_ten : $school->pro_ten_en }}
                                                        </a>
                                                    </div>
                                                    <div class="product-course">
                                                        <span class="desc">@lang('messages.index_school_edu_lv'):</span>
                                                        <span class="title">{{ Config::get('app.locale') == 'vi' ? $school->pro_edu_level : $school->pro_edu_level_en }}</span>
                                                    </div>
                                                    <div class="product-time">
                                                        <span class="desc">@lang('messages.index_school_lang'):</span>
                                                        <span class="title">{{ Config::get('app.locale') == 'vi' ? $school->pro_edu_lang : $school->pro_edu_lang_en }}</span>
                                                    </div>
                                                    <div class="product-languages">
                                                        <span class="desc">@lang('messages.index_school_city'):</span>
                                                        <span class="title">
                                                            {{ Config::get('app.locale') == 'vi' ? $school->pro_edu_city : $school->pro_edu_city_en }}
                                                        </span>
                                                    </div>
                                                    <div class="product-viewmore" style="">
                                                        <a href="{{ asset('school/'.$school->pro_slug.'.'.$school->pro_id) }}">@lang('messages.index_detail') <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                 
                                </div>
                                <div class="pagination not-filter"></div>
                            </div>

                    </div>
                </div>
            </section>




            

            <script src="//hstatic.net/0/0/global/option_selection.js" type="text/javascript"></script>
			
			<!--Lọc danh sách trường-->
			<div class="wrapper">
        		<div class="inner">
            		@include('frontend.layout.school-filter')
			    </div>    
            </div>
            
            @include('frontend.layout.home-teachers')
			
            @include('frontend.layout.home-contact')
			

        </main>
    </div>

    {{-- <div id="fixed-vertical-fb">
        <div class="fb-like" data-href="{{ url()->current() }}" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
    </div> --}}
    
@endsection


