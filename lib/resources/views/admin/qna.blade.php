@extends('admin.master') 
@section('title', 'Câu hỏi thường gặp')

@section('css')
   <!--Sweet alert-->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

@endsection


@section('main')

    <section id="main-content">
        <section class="wrapper">

            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <div class="col-sm-2 col-sm-2 pull-right">
                            <a href="{{ route('admin.addqna') }}">
                                <button class="pull-right btn btn-primary">Thêm câu hỏi</button>
                            </a>
                        </div>

                        <table class="table table-striped table-advance table-hover">
                            <h4>Danh sách câu hỏi</h4>

                            <hr>
                            <thead>
                                <tr>
                                    <th><i class="fa fa-list-ul"></i> Câu hỏi</th>
                                    <th><i class="fa fa-user"></i> Người tạo</th>
                                    <th><i class="fa fa-user"></i> Cập nhật gần nhất</th>
                                    <th style="text-align:center"><i class=" fa fa-edit"></i> Tùy chỉnh</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($qna_list as $item)
                                    <tr>
                                        <td>
                                            <a href="{{ asset('admin/qna/edit/'.$item->qna_id) }}">{{ $item->qna_ques }}</a>
                                        </td>

                                        <td>{{ $item->qna_author }}</td>
                                        
                                        <td>{{ $item->qna_editor }}</td>

                                        <td class="middle-align">
                                            <a href="{{ asset('admin/qna/edit/'.$item->qna_id) }}">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>

                                            <a  rel="{{$item->qna_id}}"
                                                proname="{{$item->qna_ques}}"
                                                href="javascript:"
                                                title="Xóa câu hỏi"
                                                class="deleteRecord btn btn-danger btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                    
                                

                            </tbody>
                        </table>
                    </div>
                    <!-- /content-panel -->
                </div>

            </div>

        </section>
    </section>

@endsection



@section('script')
    <!--File input-->
    <script src="js/fileinput.min.js"></script>
    <script src="js/theme.min.js"></script>
    <script src="js/popper.min.js"></script>



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
                        'Câu hỏi đã xóa.',
                        'success'
                        )
                    }
                })

            });
        });
    </script>


@endsection