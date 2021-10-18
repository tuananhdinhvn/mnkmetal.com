@extends('admin.master')
@section('title', 'Danh sách khách hàng')
@section('main')


    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
              


            <div class="content-panel">


              {{-- <div>
                <form class="form-inline col-md-12" action="" >
                    
                    <div class="form-group " style="width: 90%">
                        <div class="col-lg-10 col-sm-9" style="padding-left:0px">
                            <select id="filter-procat" class="alert alert-primary" name="filter_cust_type" style="width:100%; border: 1.5px solid #dbdbdb;padding: 5px; margin-bottom: 0;">
                              <option value=''>Phân loại khách hàng</option>  
                              <option value='email' {{ Request::get('filter_cust_type')== 'email' ? "selected='selected'" : ""}}>Khách đăng ký nhận mail</option>  
                                @foreach ($event_list as $item)
                                    <option value="{{ $item->event_id }}" {{ Request::get('filter_cust_type')== $item->event_id ? "selected='selected'" : ""}}>Đăng ký {{ $item->event_ten }}</option>
                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    

                    <button type="submit" style="padding: 5px; width: 50px;"><i class="fa fa-search" style="height:100%; border: 1.5px solid #dbdbdb; "></i></button>
                </form>
              </div> --}}

              <table class="table table-striped table-advance table-hover">
                <h4>Danh sách khách hàng</h4>
                
                <hr>

                <thead>
                  <tr>
                    <th class="col-md-3 col-sm-4" ><i class="fa fa-user "></i> Tên khách hàng </th>
                    <th class="col-md-2 hidden-phone"><i class="fa fa-calendar"></i> Email</th>
                    <th class="col-md-2 col-sm-2"><i class="fa fa-credit-card"></i> Số điện thoại</th>
                    <th class="col-md-1 hidden-phone"><i class=" fa fa-bullhorn"></i> Liên hệ</th>
                    <th class="col-md-1 hidden-phone" style="text-align: center"><i class=" fa fa-user"></i> Nhân viên phụ trách</th>
                    <th class="col-md-2 col-sm-4" style="text-align: center"><i class=" fa fa-edit"></i> Tùy chỉnh</th>
                  </tr>
                </thead>
                <tbody>
                    
                  @foreach ($customer_list as $item)
                    <tr>
                      <td>
                        {{ $item->cust_ten }}
                      </td>
                      <td class="hidden-phone">{{ $item->cust_email }}</td>
                      <td>{{ $item->cust_phone }}</td>  
                      
                      <td class="hidden-phone">
                        @if ($item->cust_tinhtrang==0)
                            <button class="btn btn-success btn-xs" title="Đã xác nhận" style="width: 100%"><i class="fa fa-check"></i></button>
                        @elseif ($item->cust_tinhtrang==1)
                            <button class="btn btn-danger btn-xs" title="Chưa gọi" style="width: 100%"><i class="fa fa-minus"></i> </button>
                        @endif  
                      </td>  

                      <td class="hidden-phone" style="text-align: center">@if($item->cust_staff == null) Chưa nhận @else <strong> {{ $item->cust_staff }} </strong> @endif</td>

                      <td style="text-align: center">
                        <a  rel="{{$item->cust_id}}"
                            proname="{{$item->cust_ten}}"
                            href="javascript:"
                            title="Xem nhanh khách hàng"
                            class="btn btn-default btn-xs quickshow-{{$item->cust_id}}">
                            <i class="fa fa-eye"></i>
                        </a>

                        <!-- Modal quick view product -->
                        <div id="annount-order" class="modal annount-order-{{$item->cust_id}}" style="max-width:80%; max-height:80%; padding: 15px">

                            <div class="col-md-12"  style="">
                              <div class="row">
                                <div class="col-md-2">
                                  Tên khách hàng: 
                                </div>
                                <div class="col-md-10 pull-left">
                                  <h4 style="margin: 0">{{$item->cust_ten}}</h4>
                                </div>
                              </div><br/>

                              <div class="row">
                                <div class="col-md-2">
                                  Email: 
                                </div>
                                <div class="col-md-10 pull-left">
                                  {{$item->cust_email}}
                                </div>
                              </div><br/>

                              <div class="row">
                                <div class="col-md-2">
                                  Điện thoại: 
                                </div>
                                <div class="col-md-10 pull-left">
                                  {{$item->cust_phone}}
                                </div>
                              </div><br/>

                            

                              <div class="row">
                                <div class="col-md-2">
                                  Nội dung tin nhắn: 
                                </div>
                                <div class="col-md-10 pull-left">
                                  {{$item->cust_noidung}}
                                </div>
                              </div><br/>
                              
                              <div class="row">
                                <div class="col-md-2">
                                  Tình trạng liên hệ: 
                                </div>
                                <div class="col-md-10 pull-left">
                                    <!--Nếu cust_tinhtrang = 0: Đã gọi xác nhận ; cust_tinhtrang = 1: Chưa gọi-->
                                    <a href="{{ asset('admin/customer/check/'.$item->cust_id) }}" >
                                      @if ($item->cust_tinhtrang==0)
                                          <button class="btn btn-success btn-xs" title="Đã xác nhận"><i class="fa fa-check"></i> Đã liên hệ</button>
                                      @elseif ($item->cust_tinhtrang==1)
                                          <button class="btn btn-danger btn-xs" title="Chưa gọi"><i class="fa fa-minus"></i> Chưa xác nhận</button>
                                      @endif
                                  </a>
                                </div>
                              </div><br/>

                            </div>
                            {{-- <a href="#" rel="modal:close">Đóng</a> --}}
                        </div>
                        


                        @if (Auth::user()->phanquyen == 1)
                          <a href="{{ asset('admin/customer/detail/'.$item->cust_id) }}" title="Cập nhật thông tin khách hàng"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                          
                          <a  rel="{{$item->cust_id}}"
                              custname="{{$item->cust_ten}}"
                              href="javascript:"
                              title="Xóa khách hàng"
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


<script>
    $(document).ready(function(){

        $('.deleteRecord').click(function(){
            var id = $(this).attr('rel');
            var name = $(this).attr('custname');
            // var deleteFunction = $(this).attr('rel1');
            var currentlink = window.location.pathname;
            const hreflink = $(this).attr('href');

            Swal.fire({
                title: 'Bạn có chắc chắn muốn xóa' ,
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
                    'Thông tin khách hàng đã xóa.',
                    'success'
                    )
                }
            })

        });
    });
</script>



<!--Quick product view modal-->
<script>
  $(document).ready(function(){

      <?php foreach($customer_list as $item){ ?>
          $('.quickshow-<?php echo $item->cust_id ?>').click(function() {
              $(".annount-order-<?php echo $item->cust_id ?>").modal({fadeDuration: 100,fadeDelay: 0.1});
          });
      <?php } ?>
      
  }); 
</script>


@endsection