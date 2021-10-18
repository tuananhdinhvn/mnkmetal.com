@extends('admin.master') 
@section('title', 'Danh mục sản phẩm con') 
@section('main')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- row -->
        <div class="row mt">
            <div class="col-md-12">

                <div class="content-panel">
                    <div class="col-sm-2 col-sm-2 pull-right">
                            <a href="{{ asset('admin/productcat/child/add') }}">
                                <button class="pull-right btn btn-primary">Thêm danh mục con</button>
                            </a>
                    </div>
                   
                    <div>
                        <form class="form-inline col-md-9" action="" >
                            
                            <div class="form-group ">
                                <div class="col-lg-10 col-sm-9" style="padding-left: 0;">
                                    <select class="alert alert-primary" name="search_category" style="width:200px; border: 1.5px solid #dbdbdb;padding: 5px; margin-bottom: 0;">
                                        <option value="none">Tất cả danh mục</option>
                                        @foreach ($procat_list as $item)
                                            <option value="{{ $item->procat_id }}" {{ Request::get('search_category')==$item->procat_id ? "selected='selected'" : ""}}>{{ $item->procat_ten }}</option>
                                        @endforeach
                                        
                                        
                                    </select>
                                </div>
                            </div>
                            <button type="submit" style="padding: 5px; width: 50px;"><i class="fa fa-search" style="height:100%; border: 1.5px solid #dbdbdb; "></i></button>
                        </form>
                    </div>
                    <br/>
                    <br/>

                    <table class="table table-striped table-advance table-hover">
                        <h4>Danh mục con</h4>

                        <hr>

                        <thead>
                            <tr>
                                <th><i class="fa fa-tag"></i> Tên danh mục </th>
                                <th><i class="fa fa-th-list"></i> Danh mục chính</th>
                                <th><i class=" fa fa-edit"></i> Tùy chỉnh</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($procat_child as $item)
                                <tr>
                                    <td>
                                        <a href="{{ asset('admin/productcat/child/edit/'.$item->procat2_id) }}">{{ $item->procat2_ten }}</a>
                                    </td>
                                    

                                    <td>{{ $item->procat_ten }}</td>
                                    <td>
                                        {{-- <i class="btn btn-success btn-xs" title="Đang hiển thị"><i class="fa fa-check"></i></i> --}}
                                        <a href="{{ asset('admin/productcat/child/edit/'.$item->procat2_id) }}">
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        </a>
                                        {{-- <a href="{{ asset('admin/productcat/child/delete/'.$item->procat2_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa !')">
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </a> --}}

                                        <a  rel="{{$item->procat2_id}}"
                                            procatname="{{$item->procat2_ten}}"
                                            href="javascript:"
                                            title="Xóa danh mục"
                                            class="deleteRecord btn btn-danger btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </a>

                                    
                                    </td>
                                </tr>
                            @endforeach

                            
                                
                        </tbody>
                        
                    </table>
                    <div class="pull-right">
                        {{ $procat_child->links() }}
                    </div>
                    
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