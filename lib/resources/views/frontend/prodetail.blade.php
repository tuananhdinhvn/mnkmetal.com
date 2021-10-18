@extends('frontend.master')

@section('title')
{{ $school_detail_item[0]->pro_title }}
@endsection

@section('seo')
    <meta name="description" content="{{ $school_detail_item[0]->pro_mota }}">
    <meta name="keywords" content="{{ $school_detail_item[0]->pro_keyword }} " />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $school_detail_item[0]->pro_title }}" />
    <meta property="og:image" content="{{ asset('public/upload/product/'.$school_detail_item[0]->pro_thumb) }}" />
    <meta property="og:image" content="{{ asset('public/upload/product/'.$school_detail_item[0]->pro_thumb) }}" />
    <meta property="og:image:alt" content="{{ $school_detail_item[0]->pro_title }} " />
    <meta property="og:description" content="{{ $school_detail_item[0]->pro_mota }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="{{ $school_detail_item[0]->pro_title }} " />

    <meta name="twitter:site" content="@https://" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{ $school_detail_item[0]->pro_title }}" />
    <meta name="twitter:description" content="{{ $school_detail_item[0]->pro_title }}" />

    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <meta name="theme-color" content="#39b54a" />
@endsection


@section('main')
    <section id="breadcrumb-wrapper" class="breadcrumb-w-img" style="background: url({{ asset('public/upload/product/'.$school_detail_item[0]->pro_thumb) }}); background-repeat: no-repeat; background-size: cover;">
        <div class="breadcrumb-overlay"></div>
        <div class="breadcrumb-content">
            <div class="wrapper">
                <div class="inner text-center" style="text-shadow: 0 0 10px black;">
                    <div class="breadcrumb-big">
                        <h2>
                            {{ Config::get('app.locale') == 'vi' ? $school_detail_item[0]->pro_ten : $school_detail_item[0]->pro_ten_en }}
                        </h2>
                    </div>
                    <div class="breadcrumb-small">
                        <a href="{{ route('index') }}" title="Quay trở về trang chủ">@lang('messages.home')</a>

                        <span aria-hidden="true">/</span>

                        <a href="{{ route('school') }}" title="">{{ Config::get('app.locale') == 'vi' ? 'Du học '.$school_detail_item[0]->procat_ten : $school_detail_item[0]->procat_ten_en }}</a>

                        <span aria-hidden="true">/</span>
                        <span>{{ Config::get('app.locale') == 'vi' ? $school_detail_item[0]->pro_ten : $school_detail_item[0]->pro_ten_en }}</span>
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
                                            <li class="active"><a href="#tab1">@lang('messages.school_detail_intro')</a></li>

                                            <li><a href="#tab2">@lang('messages.school_detail_env')</a></li>

                                            <li><a href="#tab3">@lang('messages.school_detail_schoolar')</a></li>

                                            <li><a href="#tab4">@lang('messages.school_detail_img')</a></li>

                                            {{-- <li class="tabBtnBuyNow" style="width: calc(100% / 2);">
                                                <button type="button" class="btnBuyNow buy-now" data-id="1020054919"><span>Đăng ký</span></button>
                                            </li> --}}
                                        </ul>

                                        <div class="tabs-content active" id="tab1">
                                            <div class="proTab-overview">
                                                {!! $school_detail_item[0]->pro_thongtin !!}
                                            </div>
                                        </div>

                                        <div class="tabs-content" id="tab2">
                                            {!! $school_detail_item[0]->pro_info_tech !!}
                                        
                                        </div>

                                        <div class="tabs-content" id="tab3">
                                            {!! $school_detail_item[0]->pro_schoolarship !!}
                                        </div>

                                        <div class="tabs-content" id="tab4">
                                                                                        
                                            <div id="home-gallery">
                                                <div class="grid-uniform mg-left-0">


                                                    @foreach ($product_alt_photo as $item)
                                                        <div class="grid__item large--one-fifth medium--one-half small--one-half pd-left0">
                                                            <div class="hg-img">
                                                                <a href="{{ asset('public/upload/productphoto/'.$item->photo_url) }}" data-fancybox="home-gallery-images" data-caption="{{ $school_detail_item[0]->pro_ten }}">
                                                                    <img src="{{ asset('public/upload/productphoto/'.$item->photo_url) }}" alt="{{ $school_detail_item[0]->pro_ten }}" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    

                                                   
                                                    
                                                    
                                                    
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
                                    <section id="related-products">
                                        <div class="home-section-head">
                                            <h2>@lang('messages.school_detail_relate')</h2>
                                        </div>
                                        <div class="home-section-body">
                                            <div class="grid">
                                                <div id="owl-related-products-slider" class="owl-carousel owl-theme">


                                                    @foreach ($product_relate as $item_relate)

                                                        @if($item_relate->pro_procatid == $school_detail_item[0]->pro_procatid && $item_relate->pro_id != $school_detail_item[0]->pro_id)
                                                            <div class="item grid__item">
                                                                <div class="product-item clearfix" style="position: relative;">
                                                                    <div class="product-img">
                                                                        <a href="">
                                                                            <img src="{{ asset('public/upload/product/'.$item_relate->pro_thumb) }}" alt="{{ $item_relate->pro_ten }}" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-info" style="height: 200px;">
                                                                        <div class="product-title">
                                                                            <a href="{{ asset('school/'.$item_relate->pro_slug.'.'.$item_relate->pro_id) }}">
                                                                                {{ Config::get('app.locale') == 'vi' ? $item_relate->pro_ten : $item_relate->pro_ten_en }}
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-course">
                                                                            <span class="desc">@lang('messages.index_school_edu_lv'):</span>
                                                                            <span class="title">{{ Config::get('app.locale') == 'vi' ? $item_relate->pro_edu_level : $item_relate->pro_edu_level_en }}</span>
                                                                        </div>
                                                                        <div class="product-time">
                                                                            <span class="desc">@lang('messages.index_school_lang'):</span>
                                                                            <span class="title">{{ Config::get('app.locale') == 'vi' ? $item_relate->pro_edu_lang : $item_relate->pro_edu_lang_en }}</span>
                                                                        </div>
                                                                        <div class="product-languages">
                                                                            <span class="desc">@lang('messages.index_school_city'):</span>
                                                                            <span class="title">
                                                                                {{ Config::get('app.locale') == 'vi' ? $item_relate->pro_edu_city : $item_relate->pro_edu_city_en }}
                                                                            </span>
                                                                        </div>
                                                                        <div class="product-viewmore" style="">
                                                                            <a href="{{ asset('school/'.$item_relate->pro_slug.'.'.$item_relate->pro_id) }}">@lang('messages.index_detail') <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        
                                                    @endforeach
                                                    

                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <script src="//hstatic.net/0/0/global/option_selection.js" type="text/javascript"></script>
            
            @include('frontend.layout.home-contact')

        </main>
    </div>

    {{-- <div id="fixed-vertical-fb">
        <div class="fb-like" data-href="{{ url()->current() }}" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
    </div> --}}
    
@endsection

