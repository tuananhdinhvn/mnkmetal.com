@extends('frontend.master')

@section('title', 'Tư vấn đầu tư và định cư | ISET education')


@section('seo')

    <meta name="description" content="{{ $setting_info[0]->st_mota }}">
    <meta name="keywords" content="{{ $setting_info[0]->st_keyword }} " />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Tư vấn đầu tư và định cư" />
    <meta property="og:image" content="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" />
    <meta property="og:image" content="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" />
    <meta property="og:image:alt" content="Tư vấn đầu tư và định cư" />
    <meta property="og:description" content="{{ $setting_info[0]->st_mota }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="Tư vấn đầu tư và định cư" />

    <meta name="twitter:site" content="@https://" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{ $setting_info[0]->st_title }}" />
    <meta name="twitter:description" content="{{ $setting_info[0]->st_mota }}" />

    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <meta name="theme-color" content="#39b54a" />

    <style>
        .blog-title{
            color: color: #074f28
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
                            @lang('messages.invest_page_title')
                        </h2>
                    </div>
                    <div class="breadcrumb-small">
                        <a href="{{ route('index') }}">@lang('messages.home')</a>

                        <span aria-hidden="true">/</span>
                        <span>@lang('messages.invest_page_title')</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="PageContainer" class="is-moved-by-drawer">
        <main class="main-content" role="main">
            <section id="blog-wrapper" class="in-blog">
                <div class="wrapper">
                    <div class="inner">
                        <h1 class="hide">
                            @lang('messages.news_title')
                        </h1>

                        <div class="grid">
                            <div class="grid__item large--nine-twelfths medium--one-whole small--one-whole float-right">
                                <div class="blog-content">
                                    <!--- Loop all blogs --->

                                    @foreach ($investment_cat as $key=>$item_cat)
                                        <div class="blog-single-item">
                                            <div class="section-title clearfix">
                                                <div class="title">
                                                    <h2 style="font-size: 25px">{{ Config::get('app.locale') == 'vi' ? $item_cat->blogcat_ten : $item_cat->blogcat_ten_en }}</h2>
                                                </div>
                                                <div class="line"></div>
                                            </div>
                                            <div class="blog-single-slider grid">
                                                <div id="owl-blog-single-slider{{ $key+1 }}" class="owl-carousel owl-theme">


                                                    @foreach ($investment_list as $item)
                                                        @if($item_cat->blogcat_id == $item->blog_blogcatid)
                                                            <div class="item grid__item">
                                                                <div class="ha-item">
                                                                    <div class="ha-img">
                                                                        <a href="{{ asset('investment/'.$item->blog_slug.'.'.$item->blog_blogcatid.'.'.$item->blog_id) }}" style="font-size: 15px; ">
                                                                            <img src="{{ asset('public/upload/blog/'.$item->blog_thumb) }}" alt="{{ $item->blog_ten }}" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="ha-title">
                                                                        <a href="{{ asset('investment/'.$item->blog_slug.'.'.$item->blog_blogcatid.'.'.$item->blog_id) }}" class="blog-title">{{ Config::get('app.locale') == 'vi' ? $item->blog_ten : $item->blog_ten_en }}</a>
                                                                        {{-- <a href="#">{{ Config::get('app.locale') == 'vi' ? $item->blog_ten : $item->blog_ten_en }}</a> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach





                                    

                                    <!--- End loop all blogs --->
                                </div>
                            </div>

                            @include('frontend.layout.sidebar-detail')
                            
                        </div>
                    </div>
                </div>
            </section>

            @include('frontend.layout.home-contact')
        
        
        </main>
    </div>


@endsection