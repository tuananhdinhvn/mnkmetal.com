@extends('frontend.master')

@section('title')
    {{ $investment_detail->blog_ten }}
@endsection

@section('seo')

    <meta name="description" content="{{ $investment_detail->blog_mota }}">
    <meta name="keywords" content="{{ $investment_detail->blog_keyword }} " />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $investment_detail->blog_title }}" />
    <meta property="og:image" content="{{ asset('public/upload/blog/'. $investment_detail->blog_thumb) }}" />
    <meta property="og:image" content="{{ asset('public/upload/blog/'. $investment_detail->blog_thumb) }}" />
    <meta property="og:image:alt" content="{{ $investment_detail->blog_title }} " />
    <meta property="og:description" content="{{ $investment_detail->blog_mota }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="{{ $investment_detail->blog_title }} " />

    <meta name="twitter:site" content="@https://" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{ $investment_detail->blog_title }}" />
    <meta name="twitter:description" content="{{ $investment_detail->blog_mota }}" />

    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <meta name="theme-color" content="#39b54a" />

@endsection



@section('main')


    <section id="breadcrumb-wrapper" class="breadcrumb-w-img">
        <div class="breadcrumb-overlay"></div>
        <div class="breadcrumb-content">
            <div class="wrapper">
                <div class="inner text-center">
                    <div class="breadcrumb-big">
                        <h2>
                            {{ Config::get('app.locale') == 'vi' ? $investment_detail->blog_ten : $investment_detail->blog_ten_en }}
                        </h2>
                    </div>
                    <div class="breadcrumb-small">

                        <a href="{{ route('index') }}">@lang('messages.home')</a>

                        <span aria-hidden="true">/</span>

                        <a href="{{ asset('investment/dau-tu-dinh-cu') }}-{{ $investmentcat_detail->blogcat_slug }}.{{ $investmentcat_detail->blogcat_id }}">
                            @lang('messages.investcat_page_breadcrumb') {{ Config::get('app.locale') == 'vi' ? $investmentcat_detail->blogcat_ten : $investmentcat_detail->blogcat_ten_en }}
                        </a>

                        <span aria-hidden="true">/</span>
                        
                        <span>{{ Config::get('app.locale') == 'vi' ? $investment_detail->blog_ten : $investment_detail->blog_ten_en }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="PageContainer" class="is-moved-by-drawer">
        <main class="main-content" role="main">
            <section id="blog-wrapper">
                <div class="wrapper">
                    <div class="inner">
                        <div class="grid">
                            <article class="float-right grid__item large--nine-twelfths medium--one-whole small--one-whole" itemscope itemtype="http://schema.org/Article">
                                <div class="article-content">
                                    <div class="article-head">
                                        <h2 style="font-family: 'Montserrat' !important; font-weight: bold !important; text-transform: uppercase;">
                                            {{ Config::get('app.locale') == 'vi' ? $investment_detail->blog_ten : $investment_detail->blog_ten_en }}
                                        </h2>
                                    </div>

                                    

                                    <div class="article-body">
                                        {!! Config::get('app.locale') == 'vi' ? $investment_detail->blog_noidung : $investment_detail->blog_noidung_en !!}
                                    </div>
                                </div>
                                
                                <div id="section-fbcomment" class="fb-comments-wrapper">
                                    <div
                                        class="fb-comments"
                                        data-href="{{ url()->current() }}"
                                        data-width="100%"
                                        data-numposts="5"
                                    ></div>
                                </div>

                                <hr />

                                <div class="related-articles">
                                    <div class="related-articles-head">
                                        <h3>
                                            @lang('messages.blog_detail_relate')
                                        </h3>
                                    </div>
                                    <div class="related-articles-body">
                                        <ul class="no-bullets">

                                            @foreach ($investment_relate as $item)
                                                @if($item->blog_blogcatid == $investmentcat_detail->blogcat_id && $item->blog_id != $investment_detail->blog_id)
                                                    <li>
                                                        <a href="{{ asset('investment/'.$item->blog_slug.'.'.$item->blog_blogcatid.'.'.$item->blog_id) }}">{{ Config::get('app.locale') == 'vi' ? $item->blog_ten : $item->blog_ten_en }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                           
                                        </ul>
                                    </div>
                                </div>
                            </article>

                            @include('frontend.layout.sidebar-detail')

                        </div>
                    </div>
                </div>
            </section>

            @include('frontend.layout.home-contact')
        </main>
    </div>


@endsection