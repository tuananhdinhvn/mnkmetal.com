@extends('admin.master') 
@section('title', 'Trang đơn') 
@section('main')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- row -->
        <div class="row mt">
            <div class="col-md-12">

                <div class="content-panel">
                    <div class="col-sm-2 col-sm-2 pull-right">
                            <a href="{{ asset('admin/singlepage/add') }}">
                                <button class="pull-right btn btn-primary">Thêm trang</button>
                            </a>
                    </div>
                   
                    
                    <table class="table table-striped table-advance table-hover">
                        <h4>Trang đơn</h4>

                        <hr>

                        <thead>
                            <tr>
                                <th><i class="fa fa-pencil-square-o"></i> Tên trang </th>
                                <th class="hidden-phone"><i class="fa fa-calendar"></i> Cập nhật gần nhất</th>
                                <th><i class=" fa fa-user"></i> Người viết</th>
                                <th><i class=" fa fa-edit"></i> Tùy chỉnh</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                <tr>
                                    <td>
                                        <a href="{{ asset('admin/singlepage/edit/1') }}">Tên trang</a>
                                    </td>
                                    <td class="hidden-phone">Ngày cập nhật</td>
                                    <td>Người viết</td>
                                    <td>
                                        <a href="{{ asset('admin/singlepage/edit/1') }}">
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        </a>
                                        <a href="{{ asset('admin/singlepage/delete/1') }}" onclick="return confirm('Bạn có chắc chắn muốn xóa Tên trang!')">
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </a>
                                    </td>
                                </tr>
                           
                            
                           
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

@stop()