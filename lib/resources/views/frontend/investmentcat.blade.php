@extends('frontend.master')

@section('title')
    Tư vấn đầu tư và định cư {{ $investmentcat_detail->blogcat_ten }} | ISET education
@endsection


@section('seo')
    <meta name="description" content="{{ $investmentcat_detail->blogcat_mota }}">
    <meta name="keywords" content="{{ $investmentcat_detail->blogcat_mota }} " />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ISET education | Du học {{ $investmentcat_detail->blogcat_ten }}" />
    <meta property="og:image" content="{{ asset('public/upload/template/'. $getindex->homepage_favicon) }}" />
    <meta property="og:image" content="{{ asset('public/upload/template/'. $getindex->homepage_favicon) }}" />
    <meta property="og:image:alt" content="ISET education | Du học {{ $investmentcat_detail->blogcat_ten }}" />
    <meta property="og:description" content="{{ $investmentcat_detail->blogcat_mota }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="ISET education | Du học {{ $investmentcat_detail->blogcat_ten }}" />

    <meta name="twitter:site" content="@https://" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="ISET education | Du học {{ $investmentcat_detail->blogcat_ten }}" />
    <meta name="twitter:description" content="{{ $investmentcat_detail->blogcat_mota }}" />

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

        .investcat-title a{
            color: black !important
        }
        .investcat-title a:hover{
            color: #39b54a !important
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
                            @lang('messages.investcat_page_breadcrumb') {{ Config::get('app.locale') == 'vi' ? $investmentcat_detail->blogcat_ten : $investmentcat_detail->blogcat_ten_en }}
                        </h2>
                    </div>
                    <div class="breadcrumb-small">
                        <a href="{{ route('index') }}" title="Quay trở về trang chủ">@lang('messages.home')</a>

                        <span aria-hidden="true">/</span>

                        <span>@lang('messages.investcat_page_breadcrumb') {{ Config::get('app.locale') == 'vi' ? $investmentcat_detail->blogcat_ten : $investmentcat_detail->blogcat_ten_en }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="PageContainer" class="is-moved-by-drawer">
        <main class="main-content" role="main">


            <section id="collection-wrapper" style="background: #f6f6f7;">
                <div class="wrapper">
                    <div class="inner">

                            <div class="collection-body">
                                <div class="grid-uniform product-list">

                                    
                                    @foreach ($investment_list as $item)
                                      
                                        <div class="grid__item large--one-third medium--one-half small--one-whole" style="position: relative; height: 330px; margin-bottom: 35px; background: #f6f6f7;">
                                            <div class="product-item clearfix">
                                                <div class="product-img">
                                                    <a href="{{ asset('investment/'.$item->blog_slug.'.'.$item->blog_blogcatid.'.'.$item->blog_id) }}">
                                                        <img src="{{ asset('public/upload/blog/'.$item->blog_thumb) }}" alt="{{ $item->blogcat_ten }}" />
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-title investcat-title">
                                                        <a href="{{ asset('investment/'.$item->blog_slug.'.'.$item->blog_blogcatid.'.'.$item->blog_id) }}">
                                                            {{ Config::get('app.locale') == 'vi' ? $item->blog_ten : $item->blog_ten_en }}
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="product-viewmore" style="position: absolute; bottom: 0; padding: 5px 0;">
                                                        <a href="{{ asset('investment/'.$item->blog_slug.'.'.$item->blog_blogcatid.'.'.$item->blog_id) }}">@lang('messages.index_detail') <i class="fa fa-angle-right" aria-hidden="true"></i></a>
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
            
            @include('frontend.layout.home-contact')

        </main>
    </div>

    {{-- <div id="fixed-vertical-fb">
        <div class="fb-like" data-href="{{ url()->current() }}" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
    </div> --}}
    
@endsection

