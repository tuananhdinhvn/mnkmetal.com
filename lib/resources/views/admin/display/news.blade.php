@extends('admin.master') 
@section('title', 'Danh sách bài viết') 
@section('main')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- row -->
        <div class="row mt">
            <div class="col-md-12">

                <div class="content-panel">
                    <div class="col-sm-2 col-sm-2 pull-right">
                            <a href="{{ asset('admin/news/add') }}?type=blog">
                                <button class="pull-right btn btn-primary">Thêm bài viết</button>
                            </a>
                    </div>
                   
                    <br/>
                    <br/>

                    <table class="table table-striped table-advance table-hover">
                        <h4>Danh sách bài viết</h4>

                        <hr>

                        <thead>
                            <tr>
                                <th class="col-md-4"><i class="fa fa-pencil-square-o"></i> Tên bài viết </th>
                                <th class="col-md-3" style="text-align: center;"><i class="fa fa-check"></i> Hiển thị trang chủ</th>
                                {{-- <th class="col-md-2" ><i class="fa fa-list"></i> Danh mục</th> --}}
                                <th class="col-md-2 hidden-phone"><i class=" fa fa-user"></i> Tác giả</th>
                                <th class="col-md-2 hidden-phone"><i class=" fa fa-user"></i> Cập nhật lần cuối</th>
                                <th class="col-md-2" style="text-align: center"><i class=" fa fa-edit"></i> Tùy chỉnh</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blog_list as $blog)
                            <tr>
                                <td>
                                    <a href="{{ asset('admin/news/edit/'.$blog->blog_id) }}?type=blog">{{ $blog->blog_ten_en }}</a>
                                </td>
                                <td style="text-align: center;">
                                    <a href="{{ asset('admin/news/show/'.$blog->blog_id) }}?type=blog" >
                                        @if ($blog->blog_hienthi==1)
                                            <button class="btn btn-success btn-xs" title="Bài viết nổi bật"><i class="fa fa-check"></i></button>
                                        @else
                                            <button class="btn btn-danger btn-xs" title="Bài viết nổi bật"><i class="fa fa-minus"></i></button>
                                        @endif
                                        
                                    </a>    
                                </td>
                                {{-- <td>{{ $blog->blogcat_ten }}</td> --}}
                                <td class="hidden-phone" >{{ $blog->blog_nguoiviet }}</td>
                                <td class="hidden-phone" >{{ $blog->blog_editor }}</td>
                                <td style="text-align: center">
                                    
                                    <a href="{{ asset('admin/news/edit/'.$blog->blog_id) }}?type=blog">
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                    </a>
                                    
                                    @if (Auth::user()->phanquyen == 1)
                                        <a  rel="{{$blog->blog_id}}"
                                            blogname="{{$blog->blog_ten}}"
                                            href="javascript:"
                                            title="Xóa bài viết"
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