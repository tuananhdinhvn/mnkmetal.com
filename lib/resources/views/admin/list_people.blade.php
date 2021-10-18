@extends('admin.master') 
@section('title') 
    @if($people_type=='alumni')
        Danh sách sinh viên
    @elseif($people_type=='team')
        Danh sách nhân viên
    @endif
@endsection

@section('main')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- row -->
        <div class="row mt">
            <div class="col-md-12">

                <div class="content-panel">
                    <div class="col-sm-2 col-sm-2 pull-right">
                            <a href="{{ asset('admin/'.$people_type.'/add') }}?type={{ $people_type }}">
                                <button class="pull-right btn btn-primary">@if($people_type=='alumni') Thêm sinh viên @elseif($people_type=='team') Thêm nhân viên @endif</button>
                            </a>
                    </div>
                   
                    <br/>
                    <br/>

                    <table class="table table-striped table-advance table-hover">
                        <h4>@if($people_type=='alumni') Danh sách sinh viên @elseif($people_type=='team') Danh sách nhân viên @endif</h4>

                        <hr>

                        <thead>
                            <tr>
                                <th><i class="fa fa-pencil-square-o"></i>@if($people_type=='alumni') Tên sinh viên @elseif($people_type=='team') Tên nhân viên @endif  </th>
                                {{-- <th><i class="fa fa-th-list"></i> Danh mục</th> --}}
                                <th class="hidden-phone"><i class="fa fa-calendar"></i>@if($people_type=='alumni') Nước du học @elseif($people_type=='team') Lĩnh vực làm việc @endif  </th>
                                <th style="text-align: center"><i class=" fa fa-edit"></i> Tùy chỉnh</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_people as $item)
                                <tr>
                                    <td>
                                        <a href="{{ asset('admin/'.$people_type.'/edit/'.$item->cust_id) }}?type={{ $item->cust_type }}">{{ $item->cust_ten }}</a>
                                    </td>
                                    {{-- <td>{{ $blog->blogcat_ten }}</td> --}}
                                    <td class="hidden-phone">{{ $item->cust_diachi }}</td>
                                    <td style="text-align: center">
                                        
                                        <a href="{{ asset('admin/'.$people_type.'/edit/'.$item->cust_id) }}?type={{ $item->cust_type }}">
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        </a>
                                        {{-- <a href="{{ asset('admin/blog/delete/222') }}" onclick="return confirm('Bạn có chắc chắn muốn xóa !')">
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </a> --}}

                                        @if (Auth::user()->phanquyen == 1)
                                            <a  rel="{{ $item->cust_id }}"
                                                blogname="{{ $item->cust_ten }}"
                                                href="javascript:"
                                                title="Xóa nội dung"
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
                    'Đã xóa bài viết',
                    'success'
                    )
                }
            })

        });
    });
</script>
@endsection