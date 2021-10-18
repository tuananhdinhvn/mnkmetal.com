@extends('admin.master') 
@section('title', 'Quản trị service') 



@section('main')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- /row -->
            <div class="row content-panel">
                <div class="col-md-12 mt mb">

                    <a  rel="111"
                        proname="2222"
                        href="javascript:"
                        title="Xóa achievement"
                        class="deleteRecord btn btn-danger btn-xs">
                        <i class="fa fa-trash-o "></i>
                    </a>

                </div>
                <!-- col-md-10 -->
            </div>

            

        </section>

    </section>

@endsection





@section('script')

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
                        document.location.href = "http://localhost/customer/minh-global/admin/achievement" + "/delete/" + id;
                        Swal.fire(
                        'Deleted!',
                        'Achievement đã xóa.',
                        'success'
                        )
                    }
                })

            });
        });
    </script>


@endsection