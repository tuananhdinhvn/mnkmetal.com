@extends('admin.master')


@section('title', 'Quản trị đơn hàng')

@section('css')
    <!--Sweet alert-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
@endsection



@section('main')
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    
    <!-- row -->
    <div class="row mt">
        <div class="col-md-12">
            


        <div class="content-panel">

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><h5><strong>Lọc đơn hàng:</strong></h5></label>
                <div class="">
                    <div>
                        <form class="form-inline col-md-9" action="" >
                            
                            <div class="form-group ">
                                <div class="col-lg-10 col-sm-9 pull-left">
                                    <select class="alert alert-primary" name="search_order" style="width:200px; border: 1.5px solid #dbdbdb;padding: 5px; margin-bottom: 0;">
                                        <option value="-1" >Tất cả đơn hàng</option>
                                        <option value="0" {{ Request::get('search_order') == 0 ? 'selected="selected"' : '' }} >Mới đặt</option>
                                        <option value="1" {{ Request::get('search_order') == 1 ? 'selected="selected"' : '' }} >Đã xác nhận</option>
                                        <option value="2" {{ Request::get('search_order') == 2 ? 'selected="selected"' : '' }} >Đang giao hàng</option>
                                        <option value="3" {{ Request::get('search_order') == 3 ? 'selected="selected"' : '' }} >Đã thanh toán</option>
                                        <option value="4" {{ Request::get('search_order') == 4 ? 'selected="selected"' : '' }} >Khách hoàn trả</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" style="padding: 5px; width: 50px;"><i class="fa fa-search" style="height:100%; border: 1.5px solid #dbdbdb; "></i></button>
                        </form>
                    </div>
                </div>
                </div>
                <br/><br/>
            

            <table class="table table-striped table-advance table-hover">
            <h4>Order list</h4>
            
            
            <hr>

            <thead>
                <tr>
                    <th><i class="fa fa-barcode"></i> Mã đơn </th>
                    <th class="hidden-phone"><i class="fa fa-calendar"></i> Ngày đặt</th>
                    <th><i class="fa fa-credit-card"></i> Tổng tiền</th>
                    <th><i class=" fa fa-bullhorn"></i> Trạng thái</th>
                    <th style="text-align:center"><i class=" fa fa-edit"></i> Tùy chỉnh</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($order_list as $item)
                    <tr>
                        <td>
                        <a href="{{ asset('admin/order/detail/'.$item->od_id) }}">{{ $item->od_id }}</a>
                        </td>
                        <td class="hidden-phone">{{ date('d/m/Y | H:i', strtotime($item->created_at)) }}</td>
                        <td>{{ number_format($item->od_total, 0, ',', '.') }} VND</td>
                        <td>
                            @if ($item->od_status==0)
                                <span class="label label-info label-mini">
                                    Mới đặt hàng
                                </span>
                            @elseif($item->od_status==1)
                                <span class="label label-primary label-mini">
                                    Đã xác nhận
                                </span>
                            @elseif($item->od_status==2)
                                <span class="label label-default label-mini">
                                    Đang giao
                                </span>
                            @elseif($item->od_status==3)
                                <span class="label label-success label-mini">
                                    Đã thanh toán
                                </span>
                            @elseif($item->od_status==4)
                                <span class="label label-danger label-mini">
                                    Trả hàng
                                </span>
                            @endif
                        </td>
                        <td style="text-align:center">
                            {{-- <a href="{{ asset('admin/order/detail/'.$item->od_id) }}"><button class="btn btn-default btn-xs"><i class="fa fa-eye"></i></button></a> --}}
                            <a href="{{ asset('admin/order/detail/'.$item->od_id) }}"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                            @if (Auth::user()->phanquyen==1)
                                {{-- <a href="{{ asset('admin/order/delete/'.$item->od_id) }}" 
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa đơn hàng {{ $item->od_id }} !')">
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                </a> --}}

                                <a  rel="{{$item->od_id}}"
                                    proname="{{$item->od_id}}"
                                    href="javascript:"
                                    title="Xóa đơn hàng"
                                    class="deleteRecord btn btn-danger btn-xs">
                                    <i class="fa fa-trash-o "></i>
                                </a>
                            @endif
                            
                        </td>
                    </tr>
                @endforeach
                
                
            </tbody>
            </table>
        </div>
        <!-- /content-panel -->
        </div>
        <!-- /col-md-12 -->
    </div>
    <!-- /row -->
    </section>
</section>
<!-- /MAIN CONTENT -->

@endsection



@section('script')
    
<!--Delete Sweet alert-->
<script>
    $(document).ready(function(){

        $('.deleteRecord').click(function(){
            var id          = $(this).attr('rel');
            var name        = $(this).attr('proname');
            var currentlink = window.location.pathname;
            const hreflink  = $(this).attr('href');

            Swal.fire({
                title: 'Bạn có chắc chắn muốn xóa đơn hàng',
                text: name,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Xóa',
                cancelButtonText: 'Hủy'
            }).then((result) => {
                if (result.value) {
                    document.location.href = currentlink + "/delete/" + id;
                    Swal.fire(
                    'Deleted!',
                    'Đơn hàng đã xóa.',
                    'success'
                    )
                }
            })

        });
    });
</script>
@endsection