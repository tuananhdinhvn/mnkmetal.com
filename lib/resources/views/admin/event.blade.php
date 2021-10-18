@extends('admin.master') 
@section('title', 'Danh sách sự kiện') 
@section('main')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- row -->
        <div class="row mt">
            <div class="col-md-12">

                <div class="content-panel">
                    <div class="col-sm-2 col-sm-2 pull-right">
                            <a href="{{ route('admin.event.add') }}">
                                <button class="pull-right btn btn-primary">Thêm sự kiện</button>
                            </a>
                    </div>
                   
                    
                    <div>
                        <form class="form-inline col-md-9" action="" method="get">
                            {{-- <div class="form-group">
                                <div class="col-sm-6" style="padding-left: 0;">
                                    <input type="text" name="search_name" value="{{ Request::get("search_name") }}" placeholder="Tìm kiếm bài viết..." class="form-control">
                                </div>
                            </div> --}}
                            {{-- <div class="form-group ">
                                <div class="col-lg-10 col-sm-9">
                                    <select class="alert alert-primary" name="search_category" style="width:200px; border: 1.5px solid #dbdbdb;padding: 5px; margin-bottom: 0;">
                                        <option >Danh mục</option>
                                        @foreach ($blogcat_list as $item)
                                            <option value="{{ $item->blogcat_id }}" {{ Request::get('search_category')==$item->blogcat_id ? "selected='selected'" : ""}}>{{ $item->blogcat_ten }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                            {{-- <button type="submit" style="padding: 5px; width: 50px;"><i class="fa fa-search" style="height:100%; border: 1.5px solid #dbdbdb; "></i></button> --}}
                        </form>
                    </div>
                

                    <br/>
                    <br/>

                    <table class="table table-striped table-advance table-hover">
                        <h4>Danh sách sự kiện</h4>

                        <hr>

                        <thead>
                            <tr>
                                <th class="col-md-3"><i class="fa fa-pencil-square-o"></i> Tên sự kiện </th>
                                <th class="col-md-1" style="text-align: center;"><i class="fa fa-check"></i> Hiển thị</th>
                                <th class="col-md-2"><i class="fa fa-calendar"></i> Ngày kết thúc</th>
                                <th class="col-md-2 hidden-phone"><i class="fa fa-calendar"></i> Người tạo</th>
                                <th class="col-md-2 hidden-phone"><i class="fa fa-calendar"></i> Cập nhật lần cuối</th>
                                <th class="col-md-2" style="text-align: center;"><i class=" fa fa-edit"></i> Tùy chỉnh</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($event_list as $item)
                            <tr>
                                <td>
                                    <a href="{{ asset('admin/event/detail/'.$item->event_id) }}">{{ $item->event_ten }}</a>
                                </td>
                                <td style="text-align: center;">
                                    <a href="{{ asset('admin/event/check-show/'.$item->event_id) }}" >
                                        @if($item->event_show == true)
                                            <button class="btn btn-success btn-xs" title="Hiển thị sự kiện"><i class="fa fa-check"></i></button>
                                        @else
                                            <button class="btn btn-danger btn-xs" title="Ẩn sự kiện"><i class="fa fa-minus"></i></button>
                                        @endif
                                    </a>    
                                </td>
                                <td>{{ $item->event_end_day }} {{ $item->event_end_month }} {{ $item->event_end_year }} <br/> <span class="pull-left">{{ $item->event_end_time }}</span> </td>
                             
                                <td class="hidden-phone">
                                    {{ $item->event_author }}
                                </td>
                                <td class="hidden-phone">
                                    {{ $item->event_editor }}
                                </td>

                                <td style="text-align: center;">
                                    
                                    <a href="{{ asset('admin/event/detail/'.$item->event_id) }}">
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                    </a>

                                    @if (Auth::user()->phanquyen==1)
                                        <a  rel="{{ $item->event_id }}"
                                            blogname="{{ $item->event_ten }}"
                                            href="javascript:"
                                            title="Xóa sự kiện"
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
            var name = $(this).attr('blogname');
            // var deleteFunction = $(this).attr('rel1');
            var currentlink = window.location.pathname;
            const hreflink = $(this).attr('href');

            Swal.fire({
                title: 'Bạn có chắc chắn muốn xóa',
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
                    'Đã xóa ' + name,
                    'success'
                    )
                }
            })

        });
    });
</script>
@endsection