{{-- @extends('frontend.master')

@section('title', 'Giỏ Hàng')


@section('css')
<link href='//theme.hstatic.net/1000271724/1000376256/14/pages.css?v=88' rel='stylesheet' type='text/css' media='all' />
@endsection

@section('main')
<script type="text/javascript">
    function updateCart(qty, rowId){
        $.get(
            '{{ asset('cart/update') }}',
            { qty:qty, rowId:rowId },
            function(){
                location.reload();
            }
        );
    }
</script>        

@if ($cart_count==0)
    <div class="insMain">
        <section id="insCartPage" class="bg_w ajax-cart-popup">
            <div class="container">
                <div class="content">
                    <div id="AjaxifyCart" class="ajaxcart">
                        <h1 class="page-header">Giỏ Hàng</h1>

                        <div class="page-content not-item text-center">
                            <div class="img text-center">
                                <img src="{{ asset('public/upload/info/empty_cart.png') }}" alt="Không có sản phẩm nào trong giỏ hàng của bạn" />
                            </div>
                            <p>
                                Không có sản phẩm nào trong giỏ hàng của bạn
                            </p>
                            <div class="ctnBuy">
                                <a href="{{ asset('product') }}" class="btn insButton closeCartLine">Tiếp tục mua hàng </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@else
    <div class="insMain">
        <section id="insCartPage" class="bg_w ajax-cart-popup">
            <div class="container">
                <div class="content">
                    <div id="AjaxifyCart" class="ajaxcart">
                        <h1 class="page-header">Giỏ Hàng</h1>
    
                        <div class="page-content">
                            <div class="row">
                                <div class="boxCart leftCart col-md-8 col-sm-12 col-xs-12 ">

                                    <div class="cart_header_labels hidden-xs clearfix">
                                        <div class="label_item col-xs-12 col-sm-2 col-md-2">
                                            <div class="cart_product first_item">
                                                Sản phẩm
                                            </div>
                                        </div>
                                        <div class="label_item col-xs-12 col-sm-3 col-md-3">
                                            <div class="cart_description item">
                                                Mô Tả
                                            </div>
                                        </div>
                                        <div class="label_item col-xs-12 col-sm-2 col-md-2">
                                            <div class="cart_price item">
                                                Giá
                                            </div>
                                        </div>
                                        <div class="label_item col-xs-12 col-sm-2 col-md-2">
                                            <div class="cart_quantity item">
                                                Số Lượng
                                            </div>
                                        </div>
                                        <div class="label_item col-xs-12 col-sm-2 col-md-2">
                                            <div class="cart_total item">
                                                Tổng
                                            </div>
                                        </div>
                                        <div class="label_item col-xs-12 col-sm-1 col-md-1">
                                            <div class="cart_delete last_item">
                                                Xóa
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ajax_content_cart">
                                        @foreach ($cart_items as $item)
                                            <div class="list_product_cart clearfix itemCart" data-id="1025198797">
                                                <div class="cpro_item image col-xs-3 col-sm-2 col-md-2">
        
                                                    <div class="cpro_item_inner">
                                                        <a class="cart__image">
                                                            <img class="img-responsive" src="{{ asset('public/upload/product/'.$item->options->img) }}" alt="{{ $item->name }}">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cpro_item text-left title col-xs-9 col-sm-3 col-md-3">
                                                    <div class="cpro_item_inner">
                                                        <a class="product_name" >
                                                            {{ $item->name }}
                                                        </a>
        
                                                    </div>
                                                </div>
                                                <div class="cpro_item price col-xs-9 col-sm-2 col-md-2">
                                                    <div class="cpro_item_inner">
                                                        <span class="price product-price"><span class="money">{{ number_format($item->price, 0, ',', '.') }} ₫</span></span>
                                                    </div>
                                                </div>
                                                <div class="cpro_item qty text-center col-xs-6 col-sm-2 col-md-2">
                                                    <div class="cpro_item_inner">
                                                        <div class="ajaxcart__qty">
                                                            <input type="number" class="ajaxcart__qty-num" onchange="updateCart(this.value, '{{ $item->rowId }}')" min="1" value="{{ $item->qty }}" min="0" aria-label="quantity" pattern="[0-9]*">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cpro_item line-price col-xs-12 col-sm-2 col-md-2 hidden-xs">
                                                    <div class="cpro_item_inner">
                                                        <span class="price product-price money_line"><span class="money">{{ number_format($item->price*$item->qty, 0, ',', '.') }} ₫</span></span>
                                                    </div>
                                                </div>
                                                <div class="cpro_item remove col-xs-2 col-sm-1 col-md-1">
                                                    <div class="cpro_item_inner">
                                                        <a href="{{ asset('cart/delete/'.$item->rowId) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa !')" class="cart__remove ajaxcart__remove">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        
                                    </div>
                                </div>


                                <div class="boxCart rightCart col-md-4 col-sm-12 col-xs-12 ">
                                    <div class="list_button_cart clearfix">
                                        <div class="actionCart clearfix text-right">
                                            <p>
                                                <span class="cart__subtotal-title pull-left">Tổng</span>
                                                <span class="h3 cart__subtotal pull-right"><span class="money">{{ $cart_get_total }} ₫</span></span>
                                            </p>
                                            <!--<p><em>Đã bao gồm thuế và phí Shipping</em></p>-->
                                            <div class="groupButton text-center">
                                                <a class="btn con-ajax-cart btn-outline insButton" href="{{ asset('product') }}" title="Tiếp Tục Mua Sắm">Tiếp Tục Mua Sắm</a>
                                                @if (Auth::check())
                                                    <a class="btn con-ajax-cart btn-outline insButton" href="{{ asset('payment') }}" title="Thanh toán">Thanh toán</a>
                                                @else
                                                    <a class="btn con-ajax-cart btn-outline insButton" href="{{ asset('login') }}" title="Thanh toán">Thanh toán</a>
                                                @endif
                                                
                                            </div>
                                        </div>
                                        <div class="note_item">
    
                                            <div class="note_cart">
                                                <label class="control-label" for="CartSpecialInstructions">Chú Thích</label>
                                                <textarea name="note" class="form-control" placeholder="Bạn muốn mô tả rõ hơn về đơn hàng..." id="CartSpecialInstructions"></textarea>
                                            </div>
    
                                        </div>
    
                                        <div class="pd_saler">
                                            <h3>Dịch vụ & Khuyến mãi</h3>
    
                                            <p>
                                                Nhập mã ECQLJKY7QROS khi thanh toán, giảm ngay 50.000đ.
                                            </p>
    
                                            <p>
                                                Tặng mã coupon giảm 500.000đ khi đơn hàng trên 10 triệu đồng.
                                            </p>
    
                                            <p>
                                                Giao hàng miễn phí trong nội thành Tp. Hồ Chí Minh
                                            </p>
    
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </section>
    </div>
@endif



@endsection --}}





@extends('frontend.master')


@section('title')
    Giỏ hàng
@endsection


@section('main')

    <h1 style="display:none">{{ $setting_info[0]->st_title }} </h1>
    
        @include('frontend.layout.style_head_body')
        
        @include('frontend.layout.header')
    
        <script type="text/javascript">
            function updateCart(qty, rowId){
                $.get(
                    '{{ asset('cart/update') }}',
                    { qty:qty, rowId:rowId },
                    function(){
                        location.reload();
                    }
                );
            }
        </script>        


        <style>
            @media screen and (max-width: 767px){
                #cart-pc-show{
                    display: none;
                }

                #cart-mobile-show{
                    display: block;
                }
            }
            @media screen and (min-width: 768px){
                #cart-pc-show{
                    display: block;
                }

                #cart-mobile-show{
                    display: none;
                }
            }

            .font-15{
                font-size: 15px   
            }
            .font-20{
                font-size: 20px
            }
            .font-25{
                font-size: 25px;
            }

            .cart-header{
                border-bottom: 1px solid #cdcdcd;
                border-top: 1px solid #cdcdcd;
                padding: 20px 15px;
            }
            .cart-total{
                padding: 20px 15px;
            }
            .cart-item-list{
                padding: 10px 15px
            }

            .button-cart{
                padding: 5px;
                border-radius: 20px;
                color: #0082ff;
                background: white;
                border: 1px solid #0082ff;
                text-align: center;
            }
            .button-cart:hover{
                background: #0082ff;
                color: white;
            }
            .button-cart:hover a{
                color: white
            }

            .cart-note{
                display: block;
            width: 100%;
            height: auto;
            padding: 10px 15px;
            font-size: 14px;
            line-height: 1.42857;
            color: #555555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 5px;
            }
        </style>

        
        
        @if ($cart_count==0)
            <div class="insMain">
                <section id="insCartPage" class="bg_w ajax-cart-popup">
                    <div class="ega-container">
                        <div class="content">
                            <div id="AjaxifyCart" class="ajaxcart">
                                <h2 style="text-align:center">@lang('messages.cart_title')</h2>
        
                                <div class="page-content not-item text-center" style="text-align:center">
                                    <div class="img text-center">
                                        <img src="{{ asset('public/upload/info/empty_cart.png') }}" alt="@lang('messages.cart_empty')" />
                                    </div>
                                    <p>
                                        @lang('messages.cart_empty')
                                    </p>

                                    <div class="button-cart ega-col-xs-2 ega-col-sm-2 ega-col-md-2" style="margin: 20px auto;">
                                        <a href="{{ asset('/') }}">@lang('messages.cart_shopping_next')</a>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        @else

        <!-- PC template -->
        <div id="cart-pc-show" class="ega-container">
            <h2 style="text-align:center">@lang('messages.cart_title')</h2>
            <div class="ega-row">
                <div class="ega-col-md-8 ega-col-sm-12 ega-col-xs-12 ega-f--left ">
                    <div class="ega-row cart-header" style="font-weight:bold">
                        <div class="label_item ega-col-xs-12 ega-col-sm-2 ega-col-md-2">@lang('messages.cart_header_img')</div>
                        <div class="label_item ega-col-xs-12 ega-col-sm-3 ega-col-md-3">@lang('messages.cart_header_name')</div>
                        <div class="label_item ega-col-xs-12 ega-col-sm-2 ega-col-md-2">@lang('messages.cart_header_price')</div>
                        <div class="label_item ega-col-xs-12 ega-col-sm-2 ega-col-md-2">@lang('messages.cart_header_qty')</div>
                        <div class="label_item ega-col-xs-12 ega-col-sm-2 ega-col-md-2">@lang('messages.cart_header_money')</div>
                        <div class="label_item ega-col-xs-12 ega-col-sm-1 ega-col-md-1">@lang('messages.cart_header_del')</div>
                    </div>


                 


                    @foreach ($cart_items as $item)
                    <div class="ega-row cart-item-list">
                        <div class="label_item ega-col-xs-2 ega-col-sm-2 ega-col-md-2">
                            <img src="{{ asset('public/upload/product/'.$item->options->img) }}" alt="{{ $item->name }}" style="width:100%"/>
                        </div>
                        <div class="label_item ega-col-xs-2 ega-col-sm-3 ega-col-md-3">{{ Config::get('app.locale') == 'vi' ? $item->name : $item->options->name_en }}</div>
                        <div class="label_item ega-col-xs-2 ega-col-sm-2 ega-col-md-2">{{ ($item->price == 0) ? (Config::get('app.locale') == 'vi' ? "Liên hệ" : "Contact") : number_format($item->price, 0, ',', '.')." ₫" }} </div>
                        <div class="label_item ega-col-xs-2 ega-col-sm-2 ega-col-md-2">
                            {{-- <input type="number" class="ajaxcart__qty-num" onchange="updateCart(this.value, '{{ $item->rowId }}')" min="1" value="{{ $item->qty }}" min="0"> --}}
                            {{ $item->qty }}
                        </div>
                        <div class="label_item ega-col-xs-2 ega-col-sm-2 ega-col-md-2">{{ ($item->price*$item->qty == 0) ? (Config::get('app.locale') == 'vi' ? "Liên hệ" : "Contact") : number_format($item->price*$item->qty, 0, ',', '.')." ₫" }} </div>
                        <div class="label_item ega-col-xs-2 ega-col-sm-1 ega-col-md-1">
                            <a href="{{ asset('cart/delete/'.$item->rowId) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa !')"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                    @endforeach
                    

                </div>

                <div class="ega-col-md-4 ega-col-sm-12 ega-col-xs-12 ega-f--right cart-total">
                    <div class="ega-row">
                        <span class="ega-col-xs-12 ega-col-sm-8 ega-col-md-8 ega-f--left" style="font-weight:bold; font-size:20px;">@lang('messages.cart_header_money')</span>
                        <span class="ega-col-xs-12 ega-col-sm-4 ega-col-md-4 ega-f--right" style="text-align:right; font-size:20px;">{{ ($cart_get_total == 0) ? (Config::get('app.locale') == 'vi' ? "Liên hệ" : "Contact") : $cart_get_total." ₫" }}</span>
                    </div>
                    <br/>
                    <div class="ega-row">
                        
                        <div class="button-cart ega-col-xs-12 ega-col-sm-6 ega-col-md-6">
                            <a href="{{ asset('/') }}">@lang('messages.cart_shopping_next')</a>
                        </div>
                        <div class="button-cart ega-col-xs-12 ega-col-sm-6 ega-col-md-6">
                            <a href="{{ asset('payment') }}">@lang('messages.cart_payment')</a>
                        </div>
                    </div>
                    <br/>
                    <div class="ega-row">
                        
                        <h5>@lang('messages.cart_note'):</h5>
                        <textarea class="cart-note" name="" id="" cols="100%" rows="5" placeholder="@lang('messages.cart_note_placeholder') ..."></textarea>
                    </div>

                </div>
            </div>
        </div>
        <!-- End PC template -->  


        <!-- End mobile template -->  
        <div id="cart-mobile-show" class="">
            <h2 style="text-align:center">@lang('messages.cart_title')</h2>
            <br/>
            

            @foreach ($cart_items as $item)
            <div class="ega-row ega-container">
                <div class="ega-col-4 ">
                    <img src="{{ asset('public/upload/product/'.$item->options->img) }}" alt="{{ $item->name }}" srcset="">
                </div>
                <div class="ega-col-8 ">
                    <strong class="font-15">{{ Config::get('app.locale') == 'vi' ? $item->name : $item->options->name_en }}</strong>
                    <div class="ega-row">
                        <div class="ega-col-8 font-15">
                            {{ $item->qty }}
                        </div>
                        <div class="ega-col-4 font-15">
                            <a href="{{ asset('cart/delete/'.$item->rowId) }}"><i class="fa fa-trash"></i></a>
                        </div>

                    </div>
                    <span class="font-15">{{ ($item->price*$item->qty == 0) ? (Config::get('app.locale') == 'vi' ? "Liên hệ" : "Contact") : number_format($item->price*$item->qty, 0, ',', '.')." ₫" }}</span><br/>
                </div>

            </div>
            <br/>
            @endforeach

            <div class="ega-row ega-container">
                <span class="ega-col-8 font-25">@lang('messages.cart_header_money')</span>
                <span class="ega-col-4 ega-f--right font-25">{{ ($cart_get_total == 0) ? (Config::get('app.locale') == 'vi' ? "Liên hệ" : "Contact") : $cart_get_total." ₫" }}</span>
            </div>
            <br/>

            <div class="ega-container" >

                <div class="ega-row" style="margin:0;">
                    <div class="button-cart ega-col-6 font-15">
                        <a href="{{ asset('/') }}">@lang('messages.cart_shopping_next')</a>
                    </div>
                    <div class="button-cart ega-col-6 font-15">
                        <a href="{{ asset('payment') }}">@lang('messages.cart_payment')</a>
                    </div>
                </div>
                <br/>

                <h5>@lang('messages.cart_note'):</h5>
                <textarea class="cart-note" name="" id="" cols="100%" rows="5" placeholder="@lang('messages.cart_note_placeholder') ..."></textarea><br/>
            </div>

               
           
        </div>
        @endif



        
        
    
    
        @include('frontend.layout.footer')
    
        @include('frontend.layout.script_body')
    
        <!--3 items bot mobile-->
        @include('frontend.layout.contact_item_mobile')
        
    
        {{-- <div id="ega-scroll-top" data-ega-role="scrollto">
            <svg class="ega-ic-angle-up">
                <use xlink:href="#ega-ic-angle-up"></use>
            </svg>
        </div> --}}
    
        @include('frontend.layout.script_foot')
    
    
@endsection

