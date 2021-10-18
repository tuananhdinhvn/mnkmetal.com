@extends('frontend.master')


@section('script_head')
<script type='text/javascript' src='{{ asset('public/js/head.js') }}'></script>
@endsection


@section('title')
    {{ $lylich_info->static_title }}
@endsection


@section('seo')
    <meta name="description" content="{{ $setting_info[0]->st_mota }}">
    <meta name="keywords" content="{{ $setting_info[0]->st_keyword }} " />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="robots" content="index,follow">

    <meta property="og:image" content="{{ asset('public/upload/info/logo_tad.png') }}">
    <meta property="og:image:alt" content="{{ $setting_info[0]->st_title }} ">

    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $setting_info[0]->st_title }}">
    <meta property="og:description" content="{{ $setting_info[0]->st_mota }}" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{ $setting_info[0]->st_title }} ">

    
    <meta name="twitter:title" content="{{ $setting_info[0]->st_title }}">
    <meta name="twitter:description" content=" {{ $setting_info[0]->st_mota }}">
    <meta name="twitter:image" content=" {{ asset('public/upload/info/logo_tad.png') }}">
    <meta name="twitter:card" content="summary" />
    {{-- <meta property="og:image" content="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" />
    <meta property="og:image" content="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" /> --}}

@endsection



@section('main')

<style>
    #banner-cv-mobile{
        display: none;
    }
    @media only screen and (max-width:768px) {
        #banner-cv{
            display: none;
        }
        #banner-cv-mobile{
            display: block;
        }
        .hidden{
            display: none !important
        }
    }
</style>

    <div id="content" class="site-content">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <article id="page-about">
                    <header class="entry-banner">
                        <div class="entry-banner-content">
                            <h1 class="hidden" style="display: none">{{ $lylich_info->static_title }}</h1>
                            <h2 class="hidden" style="display: none">{{ $setting_info[0]->st_mota }}</h2>
                            <h3 class="hidden" style="display: none">{{ $setting_info[0]->st_title }}</h3>
                        </div>

                        <div id="webzone-topbanner" class="video-brightness">
                            <img id="banner-cv" style="width:100%; height:100vh" src="{{ asset('public/upload/info/aboutme.png') }}" alt="{{ $lylich_info->static_title }}">
                            <img id="banner-cv-mobile" src="{{ asset('public/upload/info/aboutme-mobile.png') }}" alt="{{ $lylich_info->static_title }}">
                        </div>

                        <div class="overlay"></div>
                        
                    </header>
                    <!-- .entry-banner -->

                    <div class="parallax">
                        <div class="secondary">
                            <div id="first" class="entry-content">

                                <div class="entry-section">
                                    {!! $lylich_info->static_noidung !!}
                                </div>
    
                                {{-- <div id="about-2" class="entry-image">
                                    <div class="text-box-container fade-in-element">
                                        <h3>Which brings me to you</h3>
                                        <div class="text-box">
                                            <p><span class="drop-caps">I</span>'m here to serve. My company is built on a bedrock of love, a passion for what’s possible and a commitment to be an unstoppable force for good.</p>
    
                                            <p>Through our free content, our paid online training programs and anything else we might offer &mdash; we’re in this to make a difference. To help you build a life that you truly love. A life that is one of a kind, unique and brilliantly tailored for you.</p>
    
                                            <p>Whether you’re starting or growing your business or looking to make a big change in your personal life, we’re here to help you reach the highest levels of your creative potential and tap into the deepest wisdom within you.</p>
                                        </div>
                                    </div>
                                </div> --}}
                                
                            </div>
                        </div>
                        
                    </div>
                   
                </article>

            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
    </div>
        
@endsection

