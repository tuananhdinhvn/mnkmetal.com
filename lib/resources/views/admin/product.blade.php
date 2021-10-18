@extends('admin.master') 
@section('title', 'Danh sách trường học') 

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
                            <a href="{{ route('admin.product.add') }}">
                                <button class="pull-right btn btn-primary">Thêm trường</button>
                            </a>
                    </div>

                    {{-- <div class="col-sm-2 col-sm-2 pull-right">
                        <a href="{{ route('admin.product.export') }}">
                            <button class="pull-left btn btn-success">Xuất danh sách trường</button>
                        </a>
                    </div> --}}
                   
                    <div>
                        <form class="form-inline col-md-7" action="" >
                            
                            <div class="form-group " >
                                <div class="col-lg-10 col-sm-9" style="padding-left:0px">
                                    <select id="filter-procat" class="alert alert-primary" name="filter_procat" style="width:200px; border: 1.5px solid #dbdbdb;padding: 5px; margin-bottom: 0;">
                                        @foreach ($procat_list as $key=>$item)
                                            @if ($key==0)
                                                <option value='none'>Chọn quốc gia</option>;
                                            @endif
                                            <option value="{{ $item->procat_id }}" {{ Request::get('filter_procat')==$item->procat_id ? "selected='selected'" : ""}}>{{ $item->procat_ten }}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                            </div>

                            {{-- <div class="form-group">
                                <div class="col-sm-6" style="padding: 0;">
                                    <input type="text" name="search_name" value="{{ Request::get("search_name") }}" placeholder="Nhập tên sản phẩm..." class="form-control">
                                    <select id="filter-procat-child" class="alert alert-primary" name="filter_procat_child" style="width:200px; border: 1.5px solid #dbdbdb;padding: 5px; margin-bottom: 0;">
                                        @foreach ($procatchild_list as $key=>$item)
                                            @if ($key==0)
                                                <option value='none'>Chọn danh mục con</option>;
                                            @endif
                                            <option value="{{ $item->procat2_id }}" {{ Request::get('filter_procat_child')==$item->procat2_id ? "selected='selected'" : ""}}>{{ $item->procat2_ten }}</option>
                                        @endforeach
                                        
                                    </select>
                                
                                </div>
                            </div> --}}

                            <button type="submit" style="padding: 5px; width: 50px;"><i class="fa fa-search" style="height:100%; border: 1.5px solid #dbdbdb; "></i></button>
                        </form>
                    </div>
                    <br/>
                    <br/>

                    <table class="table table-striped table-advance table-hover">
                        <h4>Danh sách trường học</h4>

                        <hr>

                        <thead>
                            <tr>
                                <th class="col-md-3 col-sm-3"><i class="fa fa-tag "></i> Tên truường </th>
                                <th class="hidden-phone"><i class="fa fa-picture-o"></i> Logo trường</th>
                                <th><i class="fa fa-th-list"></i> Quốc gia</th>
                                {{-- <th><i class=" fa fa-th-list"></i> Danh mục con</th> --}}
                                <th style="text-align:center"><i class=" fa fa-dot-circle-o"></i> Nổi bật trang chủ</th>
                                <th class="hidden-phone"><i class="fa fa-user"></i> Người tạo</th>
                                <th class="hidden-phone"><i class="fa fa-user"></i> Cập nhật lần cuối</th>
                                <th style="text-align: center"><i class=" fa fa-edit"></i> Tùy chỉnh</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($product_list as $item)
                                <tr>
                                    <td>
                                        <a href="{{ asset('admin/school/detail/'.$item->pro_id) }}">{{ $item->pro_ten }}</a>
                                    </td>
                                    
                                    <td class="hidden-phone">
                                        <img width="100px" height="auto" src="{{ asset('public/upload/product/'.$item->pro_thumb) }}" />
                                    </td>

                                    <td>{{ $item->procat_ten }}</td>
                                    {{-- <td>{{ $item->procat2_ten }}</td> --}}
									<td style="text-align:center">
										<a href="{{ asset('admin/product/show/'.$item->pro_id) }}" >
                                            @if ($item->pro_hienthi==1)
                                                <button class="btn btn-success btn-xs" title="Đang hiển thị"><i class="fa fa-check"></i></button>
                                            @else
                                                <button class="btn btn-danger btn-xs" title="Đang ẩn"><i class="fa fa-minus"></i></button>
                                            @endif
                                            
                                        </a>
                                    </td>
                                    
                                    <td class="hidden-phone">
                                        {{ $item->pro_author }}
                                    </td>

                                    <td class="hidden-phone">
                                        {{ $item->pro_editor }}
                                    </td>

                                    <td style="text-align: center">

                                        <!--Quick view school button-->
                                        {{-- <a  rel="{{$item->pro_id}}"
                                            proname="{{$item->pro_ten}}"
                                            href="javascript:"
                                            title="Xem nhanh sản phẩm"
                                            class="btn btn-default btn-xs quickshow-{{$item->pro_id}}">
                                            <i class="fa fa-eye"></i>
                                        </a> --}}


                                        <!-- Modal quick view product -->
                                        <div id="annount-order" class="modal annount-order-{{$item->pro_id}}" style="max-width:80%; max-height:80%; padding: 15px">
                                            <div class="col-md-4" style="text-align:left; padding-bottom: 20px;" >
                                                <img width="100%" height="auto" src="{{ asset('public/upload/product/'.$item->pro_thumb) }}" />
                                                <p id="photo-list-{{$item->pro_id}}" style="padding-top:10px">
                                                    @foreach ($product_photo as $photo)
                                                        @if ($photo->product_id == $item->pro_id)
                                                            <span class="img-alt">
                                                                <img width="22%" height="auto" src="{{ asset('public/upload/productphoto/'.$photo->photo_url) }}" />
                                                                {{-- <span class="btn-delete-img-alt" rel="{{$photo->photo_id}}" rel1="{{$item->pro_id}}"><a>X</a></span> --}}
                                                            </span>
                                                        @endif
                                                    @endforeach
                                                </p>
                                            </div>

                                            <div class="col-md-8"  style="">
                                                <p><h4>{{$item->pro_ten}}</h4></p><br>
                                                <p><strong>Giá bán: </strong>
                                                    @if ($item->pro_giaban != $item->pro_giakhuyenmai && $item->pro_giakhuyenmai != 0)
                                                        <strong class='panel panel-success ' style="padding:5px; color: #4fb84f"><span class="">{{ number_format($item->pro_giaban, 0, ',', '.') }} ₫</span> </strong>
                                                        <del class='ega-pro__price-del ega-small ega-color--secondary'>
                                                            <span class='panel panel-default ' style="padding:5px; color: #858585">
                                                                <span class="">{{ number_format($item->pro_giakhuyenmai, 0, ',', '.') }} ₫</span> 
                                                            </span>
                                                        </del>
                                                    @elseif($item->pro_giaban != 0 && $item->pro_giakhuyenmai == 0)
                                                        <strong class='panel panel-success ' style="padding:5px; color: #4fb84f"><span class="">{{ number_format($item->pro_giaban, 0, ',', '.') }} ₫</span> </strong>
                                                    @elseif($item->pro_giaban == 0)
                                                        <strong class='panel panel-danger ' style="padding:5px; color: red"><span class="">Liên hệ</span> </strong>
                                                    @endif
                                                </p>

                                                <p>
                                                    <strong class="col-md-3" style="padding-left:0"> Danh mục chính: </strong><span class="col-md-9">{{ $item->procat_ten }}</span>
                                                </p>
                                                {{-- <p>
                                                    <strong class="col-md-3" style="padding-left:0"> Danh mục con: </strong><span class="col-md-9">{{ $item->procat2_ten }}</span>
                                                </p> --}}

                                                <strong>Thông số kỹ thuật: </strong>
                                                <div style="overflow: scroll; height: 180px;">
                                                    <p>{!! $item->pro_info_tech !!}</p>
                                                </div>
                                                

                                                <p class="float-right" style="text-align:right; padding-top: 50px">
                                                    <a href="{{ asset('admin/school/detail/'.$item->pro_id) }}"><button class="btn btn-primary">Chỉnh sửa thông tin</button></a>
                                                </p>


                                            </div>
                                            {{-- <a href="#" rel="modal:close">Đóng</a> --}}
                                        </div>

                                        

                                        <a href="{{ asset('admin/school/detail/'.$item->pro_id) }}">
                                            <button class="btn btn-primary btn-xs" title="Chỉnh sửa"><i class="fa fa-pencil"></i></button>
                                        </a>
                                        
                                        @if (Auth::user()->phanquyen == 1)
                                            <a  rel="{{$item->pro_id}}"
                                                proname="{{$item->pro_ten}}"
                                                href="javascript:"
                                                title="Xóa sản phẩm"
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
                        {{ $product_list->links() }}
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

@section('scriptajax')
<script>
    $(document).ready(function(){
        $('#filter-procat').change(function(){
            var id_procat_main = $(this).val();
            var currentlink = window.location.pathname;

            $.get(currentlink + "/filter-procat-child/"+id_procat_main, function(data){
                $("#filter-procat-child").html(data);
            });
            
        });
    });
</script>
@endsection

@section('script')
    <!--File input-->
    <script src="js/fileinput.min.js"></script>
    <script src="js/theme.min.js"></script>
    <script src="js/popper.min.js"></script>
    {{-- <script src="js/bootstrap.min.js" type="text/javascript"></script> --}}


    <script type="text/javascript">
        // Delete alternate photo

        $( ".btn-delete-img-alt" ).click(function() {
            var IDaltphoto  = $(this).attr('rel');
            var IDproduct   = $(this).attr('rel1');
            var currentlink = window.location.pathname;

            $.get(currentlink + "/delete-submit-photo/", { idproduct:IDproduct, idaltphoto:IDaltphoto }, function(data){
                $("#photo-list-" + IDproduct).html(data);
            });

            location.reload();

        });


        // Upload alternate product photo
        $( ".file-input" ).click(function() {
            var productID   = $(this).attr('rel');
            var currentlink = window.location.pathname;
            
            $(this).fileinput({
                theme: 'fa',
                uploadUrl: currentlink+"/upload-submit?productID="+productID,
                deleteUrl: currentlink+"/delete-submit",
                uploadExtraData:function(){
                    return {
                        _token:$("input[name='_token']").val()
                    };
                },
                allowedFileTypes: ['image'],
                showCancel: true,
                initialPreviewAsData: true,
                overwriteInitial: false,
                maxFilePreviewSize: 10240,
                maxFileSize:2000,
                maxFileNum:5,
                showCaption: false,
                initialCaption: "File upload",
                slugCallback:function(filename){
                    return filename.replace("(","_").replace(']','_');
                }

            });

        });
    </script>


<!--Quick product view modal-->
<script>
    $(document).ready(function(){

        <?php foreach($product_list as $item){ ?>
            $('.quickshow-<?php echo $item->pro_id ?>').click(function() {
                $(".annount-order-<?php echo $item->pro_id ?>").modal({fadeDuration: 100,fadeDelay: 0.1});
            });
        <?php } ?>
        
    }); 
</script>


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
                    'Sản phẩm đã xóa.',
                    'success'
                    )
                }
            })

        });
    });
</script>


@endsection
