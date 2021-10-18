@extends('admin.master') 
@section('title', 'Thông tin đơn hàng') 
@section('main')

<section id="main-content">
    <section class="wrapper">
        <div class="col-lg-12 mt">
            <div class="row content-panel">
                <div class="col-lg-10 col-lg-offset-1">

                    <form method="post">
                        <div class="invoice-body">
                            <div class="pull-left">
                                <h1>ORDER DETAIL</h1>
                                <address></address>
                            </div>
                            <!-- /pull-left -->

                            <div class="clearfix"></div>
                            <br>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-9">
                                    <h4>{{ $order_info->od_user_name }}</h4>
                                    <address>
                                    <strong>Phone: {{ $order_info->od_phone }}</strong><br>
                                    {{ $order_info->od_address }}<br>
                                    </address>
                                </div>
                                <!-- /col-md-9 -->
                                <div class="col-md-3">
                                    <br>
                                    <div>
                                        <div class="pull-left"> BARCODE : </div>
                                        <div class="pull-right"> {{ $order_info->od_id }} </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div>
                                        <!-- /col-md-3 -->
                                        {{-- <div class="pull-left"> ORDER DAY : </div> --}}
                                        <div class="pull-left"> {{ date('d/m/Y | H:i', strtotime($order_info->created_at)) }} </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!-- /row -->
                                    <br>
                                    <div class="well well-small green">
                                        <div class="pull-left"> Total : </div>
                                        <div class="pull-right"> {{ number_format($order_info->od_total, 0, ',', '.') }} VND </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!-- /invoice-body -->
                            </div>
                            <!-- /col-lg-10 -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-left" style="width:90px">PRODUCT IMAGE</th>
                                        <th class="text-left">PRODUCT NAME</th>
                                        <th style="width:140px" class="text-right">PRICE</th>
                                        <th style="width:60px" class="text-right">AMOUNT</th>
                                        <th style="width:60px" class="text-right">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($order_detail as $item)
                                        <tr>
                                            <td><img width="60px" height="40px" src="{{ asset('public/upload/product/'.$item->odd_product_img) }}" /></td>
                                            <td>{{ $item->odd_product_name }}</td>
                                            <td class="text-right">{{ number_format($item->odd_product_price, 0, ',', '.') }}</td>
                                            <td class="text-right">{{ $item->odd_qty }}</td>
                                            <td class="text-right">{{ number_format($item->odd_product_price*$item->odd_qty, 0, ',', '.') }}</td>
                                        </tr>
                                    @endforeach


                                    <tr>
                                        <td colspan="3" rowspan="4">
                                            <td class="text-right no-border"><strong>TOTAL</strong></td>
                                        <td class="text-right">{{ number_format($order_info->od_total, 0, ',', '.') }}</td>

                                            {{-- <td class="text-right"><strong>Discount</strong></td>
                                            <td class="text-right">0.00</td> --}}
                                    </tr>

                                    {{-- <tr>
                                        <td class="text-right no-border"><strong>Shipping</strong></td>
                                        <td class="text-right">0.00</td>
                                    </tr>

                                    <tr>
                                        <td class="text-right no-border"><strong>VAT</strong></td>
                                        <td class="text-right">0.00</td>
                                    </tr>

                                    <tr>
                                        <td class="text-right no-border"><strong>TOTAL</strong></td>
                                        <td class="text-right">{{ number_format($order_info->od_total, 0, ',', '.') }}</td>
                                    </tr> --}}

                                    

                                </tbody>
                            </table>
                            <br>
                            <p>
                                <h4>Ghi chú:</h4>
                                <p>{{ $order_info->od_note }}</p>
                            </p>
                            <br>

                            
                            <hr/>

                            <!--Order status-->
                            <div class="order-row" style="padding-bottom: 40px;">
                                <div class="col-md-3">
                                    <strong>Tình trạng đơn hàng:</strong>
                                </div>
                                <div class="col-md-9">
                                    <select class="alert alert-primary" name="order_detail_status" style="width:200px; border: 1.5px solid #dbdbdb;padding: 5px; margin-bottom: 0;">
                                        <option value="0" {{ $order_info->od_status==0 ? "selected='selected'" : ""}}>Mới đặt</option>
                                        <option value="1" {{ $order_info->od_status==1 ? "selected='selected'" : ""}}>Đã xác nhận</option>
                                        <option value="2" {{ $order_info->od_status==2 ? "selected='selected'" : ""}}>Đang giao hàng</option>
                                        <option value="3" {{ $order_info->od_status==3 ? "selected='selected'" : ""}}>Đã thanh toán</option>
                                        <option value="4" {{ $order_info->od_status==4 ? "selected='selected'" : ""}}>Khách hoàn trả</option>
                                    </select>
                                </div>
                            </div>
                        

                        </div>
                        <!--/col-lg-12 mt -->

                        <div class="row pull-right">
                            <input style="width:100px;" type="submit" class="btn btn-primary" value="Cập nhật">
                            <a href="{{ asset('admin/order') }}"><input style="width:100px;" type="button" class="btn btn-danger" value="Hủy"></a>
                        </div>

                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div> 
    </section>
    <!-- /wrapper -->
</section>

@stop