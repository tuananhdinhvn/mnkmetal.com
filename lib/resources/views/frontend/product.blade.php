@extends('frontend.master')

@section('title', 'ISET education | Danh sách trường học')


@section('seo')
    <meta name="description" content="{{ $setting_info[0]->st_mota }}">
    <meta name="keywords" content="{{ $setting_info[0]->st_keyword }} " />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ISET education | Danh sách trường học" />
    <meta property="og:image" content="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" />
    <meta property="og:image" content="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" />
    <meta property="og:image:alt" content="ISET education | Danh sách trường học" />
    <meta property="og:description" content="{{ $setting_info[0]->st_mota }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="ISET education | Danh sách trường học" />

    <meta name="twitter:site" content="@https://" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="ISET education | Danh sách trường học" />
    <meta name="twitter:description" content="{{ $setting_info[0]->st_mota }}" />

    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <meta name="theme-color" content="#39b54a" />

    <!-- Extra CSS ================================================== -->
    <link rel="stylesheet" href="{{ asset('public/css/service.css') }}" />

    <style>
        .nation-heading{
            font-size: 30px;
            padding: 0;
            margin: 0 0 10px;
            font-weight: bold;
            text-transform: uppercase;
        }
    </style>
    
@endsection

@section('main')

    <section id="breadcrumb-wrapper" class="breadcrumb-w-img">
        <div class="breadcrumb-overlay"></div>
        <div class="breadcrumb-content">
            <div class="wrapper">
                <div class="inner text-center">
                    <div class="breadcrumb-big">
                        <h2>
                            @lang('messages.schools')
                        </h2>
                    </div>
                    <div class="breadcrumb-small">
                        <a href="{{ route('index') }}" title="Quay trở về trang chủ">@lang('messages.home')</a>

                        <span aria-hidden="true">/</span>

                        <span>@lang('messages.schools')</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="PageContainer" class="is-moved-by-drawer">
        <main class="main-content" role="main">
            <section id="collection-wrapper">
                <div class="wrapper">


                    <div class="inner">
                        
                        <!--Filter-->
                        @include('frontend.layout.school-filter')
                        <!--End filter-->
                        
                        
                        @foreach ($nation_list as $nation)
                                    
                            <div class="collection-head">
                                <div class="collection-title">
                                    <h2 class="nation-heading">{{ Config::get('app.locale') == 'vi' ? 'Du học '.$nation->procat_ten : $nation->procat_ten_en }}</h2>
                                    <div class="section-title-underline"></div>
                                </div>
                            </div>


                            <div class="collection-body">
                                <div class="grid-uniform product-list">

                                    
                                    @foreach ($product_list as $school)
                                        @if($nation->procat_id == $school->pro_procatid)

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

                                        @endif
                                    
                                    @endforeach



                                </div>
                                <div class="pagination not-filter"></div>
                            </div>


                            
                        @endforeach


                        



                    </div>
                </div>
            </section>

            @include('frontend.layout.home-contact')
        
        
        </main>
    </div>


@endsection