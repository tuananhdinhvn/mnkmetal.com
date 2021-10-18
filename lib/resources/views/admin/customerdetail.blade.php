@extends('admin.master')
@section('title', 'Thông tin khách hàng')
@section('main')


<section id="main-content">
    <section class="wrapper">
    
    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
            
        <div class="col-lg-12">
                
        <div style="padding: 20px 10px 0 10px;" class="form-panel">
                <h3>Thông tin khách hàng</h3>
                <br/>
            <form class="form-horizontal style-form" method="post">
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tên khách hàng:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="cust_ten" value="{{ $cust_item->cust_ten }}">
                    </div>
                </div>
                {{-- <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Địa chỉ:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="cust_diachi" value="{{ $cust_item->cust_diachi }}">
                    </div>
                </div> --}}
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Số điện thoại:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="cust_phone" value="{{ $cust_item->cust_phone }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Email:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="cust_email" value="{{ $cust_item->cust_email }}">
                    </div>
                </div>
            

                {{-- <div class="form-group ">
                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Tình trạng liên hệ:</label>
                    <div class="col-lg-10 col-sm-9">
                        <select class="alert alert-primary" name="cust_tinhtrang" style="width:200px; border: 1.5px solid #dbdbdb;">
                                <!--Nếu cust_tinhtrang = 0: Đã gọi xác nhận ; cust_tinhtrang = 1: Chưa gọi-->
                                <option value="0" @if ($cust_item->cust_tinhtrang==1) selected @endif>Chưa gọi</option>
                           
                                <option value="1" @if ($cust_item->cust_tinhtrang==0) selected @endif>Đã gọi</option>
                                                        
                        </select>
                    </div>
                </div> --}}


                <div class=" pull-right">
                    <input style="width:100px;" type="submit" class="btn btn-primary" value="Cập nhật">
                    <a href="{{ asset('admin/customer') }}"><input style="width:100px;" type="button" class="btn btn-danger" value="Hủy"></a>
                </div>

                {{ csrf_field() }}
            </form>
        </div>
        </div>
        <!-- col-lg-12-->
    </div>
   
    
    
    <section class="wrapper">
        <div class="col-lg-12">
            <div class="row content-panel">
                
                    <table class="invoice-body">
                        <div class="container">
                            <h3>NỘI DUNG LIÊN HỆ</h3>
                        </div>
                       

                        <div class="container">
                            <p>{{ $cust_item->cust_noidung }}</p>
                        </div>
                       
                    </div>
            </div>    
        </div>   
    </section>
    
    
    </section>
    <!-- /wrapper -->
</section>
   

@stop()