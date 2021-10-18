@extends('frontend.master')

@section('title')
    {{ $procatchild_item[0]->procat2_title }}
@endsection

@section('seo')
    <meta name="description" content="{{ $procatchild_item[0]->procat2_description }}">
    <meta name="keywords" content="{{ $procatchild_item[0]->procat2_keyword }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $procatchild_item[0]->procat2_title }}" />
    <meta property="og:image" content="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" />
    <meta property="og:image" content="{{ asset('public/upload/template/'. $getindex->homepage_logo) }}" />

    <meta property="og:image:alt" content="{{ $procatchild_item[0]->procat2_ten }}" />
    <meta property="og:description" content="{{ $procatchild_item[0]->procat2_keyword }}" />


    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="{{ $procatchild_item[0]->procat2_ten }} - Sài Thành pool" />
@endsection


@section('main')


    @include('frontend.layout.style_head_body')

    @include('frontend.layout.header')

    
    @include('frontend.layout.leftmenu_inside')

    @include('frontend.layout.scrollmenu_inside')

    <section id="ega-breadcrumb" class='ega-p-t--3 ega-p-b--3'>
        <div class="ega-container">
            <ul class="ega-menu ega-ul ega-menu--breadcrumb ega-m--0">
                <li class="ega-menu__item"><a href="{{ asset('/') }}">@lang('messages.home')</a></li>
                <li class="ega-menu__item"><a href="{{ asset('category/'.$procatchild_item[0]->procat_slug.'.'.$procatchild_item[0]->procat_id) }}">{{ Config::get('app.locale') == 'vi' ? $procatchild_item[0]->procat_ten : $procatchild_item[0]->procat_ten_en }}</a></li>
                <li class="ega-menu__item"><a>{{ Config::get('app.locale') == 'vi' ? $procatchild_item[0]->procat2_ten : $procatchild_item[0]->procat2_ten_en }}</a></li>
                
            </ul>
        </div>
    </section>

    
    @include('frontend.layout.svg')

    <script>
        /** START ega-global.js **/
        if ((typeof EGA) === 'undefined') {
            EGA = {};
        }

    </script>
    <script src='js/api.jquery.js' type='text/javascript'></script>
    <script src='js/ega-global-liquid.js' type='text/javascript'></script>
    <script src='js/option_selection.js' type='text/javascript'></script>

    <div id="ega-collection">
        <div class="ega-container">
            <div class='collection_banner ega-m-b--4'>
                <img src="public/pic/banner-product.jpg" class='lazyload' />
            </div>
            <div class="collection-wrapper ega-p-b--4">
                <div class="ega-row">
                    <div class="ega-col-xl-9 ega-col-lg-8 ega-col-12 ega-order--2">
                        <div id="sort-wrap" class="ega-row ega-p-b--3">
                            <div class="ega-col-sm-6 ega-col-md-8 ega-col-12 count-products">
                                Có <span class="ega-color--danger">{{ $product_count }}</span> sản phẩm.
                            </div>
                            {{-- <div class="ega-col-sm-6 ega-col-md-4 ega-col-12 ega-text--right">
                                <div class='ega-sortby'>
                                    <label>Sắp xếp theo:</label>
                                    <select data-role='sortby'>
                                        <option value="manual">Sản phẩm nổi bật</option>
                                        <option value="price-ascending" data-filter="&sortby=(price:product=asc)">Giá: Tăng dần</option>
                                        <option value="price-descending" data-filter="&sortby=(price:product=desc)">Giá: Giảm dần</option>
                                        <option value="title-ascending" data-filter="&sortby=(title:product=asc)">Tên: A-Z</option>
                                        <option value="title-descending" data-filter="&sortby=(price:product=desc)">Tên: Z-A</option>
                                        <option value="created-ascending" data-filter="&sortby=(updated_at:product=desc)">Cũ nhất</option>
                                        <option value="created-descending" data-filter="&sortby=(updated_at:product=asc)">Mới nhất</option>
                                        <option value="best-selling" data-filter="&sortby=(sold_quantity:product=desc)">Bán chạy nhất</option>
                                    </select>
                                </div>
                            </div> --}}
                        </div>

                        <!--Main board-->
                        <div id="result">
                            <div class="ega-row">
                                

                                @foreach ($product_list as $item)
                                    <div class='ega-col-md-3 ega-col-sm-6 ega-col-6'>

                                        <div class='ega-pro ega-pro--style3 ega-pro-item ega-text--center'>
                                            <h3 class='ega-pro__title ega-m--0 ega-h5'>
                                                <a href="{{ asset('product/'.$item->pro_slug.'.'.$item->pro_id) }}" class='ega-text--no-underline'>
                                                    {{ Config::get('app.locale') == 'vi' ? $item->pro_ten : $item->pro_ten_en }}
                                                </a>
                                            </h3>
                                            <br/>
                                            <div class='ega-pro__content ega-p--2'>
                                                <a href="{{ asset('product/'.$item->pro_slug.'.'.$item->pro_id) }}" class='ega-pro__img ega-text--no-underline'>
                                                    <picture>
                                                        <img src="{{ asset('public/upload/product/'.$item->pro_thumb) }}" class='lazyload' data-src="{{ asset('public/upload/product/'.$item->pro_thumb) }}" alt="{{ $item->pro_ten }}" />
                                                    </picture>
                                                </a>

                                                @if ($item->pro_giaban != $item->pro_giakhuyenmai && $item->pro_giakhuyenmai != 0)
                                                    <div class="ega-pro__sale-tag style2">
                                                        <span>-{{round((($item->pro_giakhuyenmai - $item->pro_giaban)*100/$item->pro_giakhuyenmai), 0)}}%</span>
                                                    </div>
                                                @endif
                                                
                                                
                                            </div>
                                            <div class='ega-pro__price-group'>
                                                @if ($item->pro_giaban != $item->pro_giakhuyenmai && $item->pro_giakhuyenmai != 0)
                                                    <ins class='ega-pro__price ega-text--no-underline ega-color--danger'>{{ number_format($item->pro_giaban, 0, ',', '.') }}₫</ins>
                                                    <del class='ega-pro__price-del ega-small ega-color--secondary'>{{ number_format($item->pro_giakhuyenmai, 0, ',', '.') }}₫</del>
                                                @elseif($item->pro_giaban != 0 && $item->pro_giakhuyenmai == 0)
                                                    <ins class='ega-pro__price ega-text--no-underline ega-color--danger'>{{ number_format($item->pro_giaban, 0, ',', '.') }}₫</ins>
                                                @elseif($item->pro_giaban == 0)
                                                    <ins class='ega-pro__price ega-text--no-underline ega-color--danger'>Liên hệ</ins>
                                                @endif
                                                
                                            </div>
                                        </div>

                                    </div>
                                @endforeach

                                
                                
                            </div>
                        </div>
                        <div id="pagination" class="ega-text--center ega-m-t--3">
                            <div class="ega-d--i-block">
                                <div class="ega-pagi">
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Left sidebar-->
                    @include('frontend.layout.category_sidebar')
                    

                </div>
            </div>
        </div>
    </div>

    @include('frontend.layout.footer')

    @include('frontend.layout.script_body')


    @include('frontend.layout.contact_item_mobile')

  

    <div id="ega-scroll-top" data-ega-role="scrollto">
        <svg class="ega-ic-angle-up">
            <use xlink:href="#ega-ic-angle-up"></use>
        </svg>
    </div>

    <script>
        $('#addtocart-mb').click(function() {
            $('#addcart-btn').click()
        })
    </script>

    <!-- Fonts START -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800&display=swap&subset=vietnamese" rel="stylesheet">
    <!-- Fonts END -->

    <link href='css/supermarket.scss.css' rel='stylesheet' type='text/css' media='all' />
    <!-- collection page filter script -->
    

    <!-- end collection page filter script -->

    @include('frontend.layout.script_foot')

    
@endsection

