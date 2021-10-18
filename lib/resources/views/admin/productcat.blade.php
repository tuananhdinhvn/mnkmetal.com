@extends('admin.master') 
@section('title', 'Quốc gia du học') 


@section('main')
<section id="main-content">
    <section class="wrapper">

        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <div class="col-sm-2 col-sm-2 pull-right">
                        <a href="{{ asset('admin/nation/add') }}">
                            <button class="pull-right btn btn-primary">Thêm quốc gia</button>
                        </a>
                    </div>

                    <table class="table table-striped table-advance table-hover">
                        <h4>Quốc gia du học</h4>

                        <hr>
                        <thead>
                            <tr>
                                <th><i class="fa fa-list-ul"></i> Tên nước</th>
								<th style="text-align:center"><i class=" fa fa-user"></i> Người tạo</th>
								<th style="text-align:center"><i class=" fa fa-user"></i> Cập nhật lần cuối</th>
                                <th style="text-align: center;"><i class=" fa fa-edit"></i> Tùy chỉnh</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($procat_list as $item)
                                <tr>
                                    <td>
                                        <a href="{{ asset('admin/nation/edit/'.$item->procat_id) }}">{{ $item->procat_ten }}</a>
                                    </td>

                                    <td style="text-align: center">
                                        {{ $item->procat_author }}
                                    </td>

                                    <td style="text-align: center">
                                        {{ $item->procat_editor }}
                                    </td>
									{{-- <td style="text-align:center">
                                        {{ $item->procat_prio }}
                                    </td>
                                    <td style="text-align:center">
										<a href="{{ asset('admin/productcat/check-scroll/'.$item->procat_id) }}" >
                                            @if ($item->procat_noibat==1)
                                                <button class="btn btn-success btn-xs" title="Danh mục nổi bật"><i class="fa fa-check"></i></button>
                                            @else
                                                <button class="btn btn-danger btn-xs" title="Danh mục ẩn"><i class="fa fa-minus"></i></button>
                                            @endif
                                            
                                        </a>
									</td> --}}
                                    <td class="middle-align">
                                        
                                        <a href="{{ asset('admin/nation/edit/'.$item->procat_id) }}">
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        </a>
                                        
                                        @if (Auth::user()->phanquyen == 1)
                                            <a  rel="{{$item->procat_id}}"
                                                procatname="{{$item->procat_ten}}"
                                                href="javascript:"
                                                title="Xóa danh mục"
                                                class="deleteRecord btn btn-danger btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            
                           

                        </tbody>
                    </table>

                    <div class="pull-right">
                        {{ $procat_list->links() }}
                    </div>

                </div>
                <!-- /content-panel -->
            </div>

        </div>

    </section>
</section>
@endsection


@section('script')
<script>
    $(document).ready(function(){

        $('.deleteRecord').click(function(){
            var id = $(this).attr('rel');
            var name = $(this).attr('procatname');
            // var deleteFunction = $(this).attr('rel1');
            var currentlink = window.location.pathname;
            const hreflink = $(this).attr('href');

            Swal.fire({
                title: 'Bạn có chắc chắn muốn xóa ' + name,
                text: 'Tất cả sản phẩm cùng danh mục cũng sẽ bị xóa',
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
                    'Danh mục đã xóa.',
                    'success'
                    )
                }
            })

        });
    });
</script>
@endsection