@extends('admin.master') 
@section('title', 'Danh sách ngành nghề') 

@section('css')
    <!--Sweet alert-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

        
    <!--Css bootstrap fileinput-->
    <link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >

@endsection


@section('main')

<style>
    .img-alt{
        position: relative;
    }
    .btn-delete-img-alt{
        bottom: -25px;
        position: absolute;
        right: 5px;
        width: 24px;
        height: 24px;
        cursor: pointer;
        background: #ffffff;
        color: #747474;
        z-index: 10;
        padding: 0px 5px 5px 5px;
        font-size: 15px;
        border: 1px solid #747474;
        border-radius: 50%;
    }
    .btn-delete-img-alt a{
        color: #747474;
    }
    .btn-delete-img-alt:hover{
        background: #747474;
        color: #ffffff;
    }
    .btn-delete-img-alt:hover > a{
        color: #ffffff;
    }
</style>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- row -->
        <div class="row mt">
            <div class="col-md-12">

                <div class="content-panel">
                    
                    <div class="col-sm-2 col-sm-2 pull-right">
                        <a href="{{ asset('admin/project/major/add') }}">
                            <button class="pull-right btn btn-primary">Thêm ngành nghề</button>
                        </a>
                    </div>
                   
                    <br/>
                    <br/>

                    <table class="table table-striped table-advance table-hover">
                        <h4>Danh sách ngành</h4>

                        <hr>

                        <thead>
                            <tr class="">
                                <th class="col-md-10 "><i class="fa fa-tag "></i> Tên ngành nghề </th>
                                
                                <th style="text-align: center"><i class=" fa fa-edit"></i> Tùy chỉnh</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($major_list as $item)
                                <tr>
                                    <td>
                                        <a href="{{ asset('admin/project/major/edit/'.$item->major_id) }}">{{ $item->major_name_en }}</a>
                                    </td>
                                    
                                    <td style="text-align:center">
                                        <a href="{{ asset('admin/project/major/edit/'.$item->major_id) }}">
                                            <button class="btn btn-primary btn-xs" title="Chỉnh sửa"><i class="fa fa-pencil"></i></button>
                                        </a>
                                        <a  rel="{{ $item->major_id }}"
                                            proname="{{ $item->major_name_en }}"
                                            href="javascript:"
                                            title="Xóa dự án"
                                            class="deleteRecord btn btn-danger btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                                
                        </tbody>
                        
                    </table>
                    {{-- <div class="pull-right">
                        {{ $project_list->links() }}
                    </div> --}}
                    
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

@section('scriptajax')

@endsection

@section('script')
    <!--File input-->
    <script src="js/fileinput.min.js"></script>
    <script src="js/theme.min.js"></script>
    <script src="js/popper.min.js"></script>
    {{-- <script src="js/bootstrap.min.js" type="text/javascript"></script> --}}




<!--Sweet alert-->
<script>
    $(document).ready(function(){

        $('.deleteRecord').click(function(){
            var id          = $(this).attr('rel');
            var name        = $(this).attr('proname');
            var currentlink = window.location.pathname;
            const hreflink  = $(this).attr('href');

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
                    'Ngành nghề đã xóa.',
                    'success'
                    )
                }
            })

        });
    });
</script>


@endsection