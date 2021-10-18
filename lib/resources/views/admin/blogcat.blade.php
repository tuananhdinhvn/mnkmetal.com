@extends('admin.master') 
@section('title', 'Danh mục bài viết') 
@section('main')

<section id="main-content">
    <section class="wrapper">

        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <div class="col-sm-2 col-sm-2 pull-right">
                        @if($blogcat_type == 'blog')
                            <a href="{{ asset('admin/blogcat/add?type='.$blogcat_type) }}">
                                <button class="pull-right btn btn-primary">Thêm danh mục</button>
                            </a>
                        @elseif($blogcat_type == 'invest')
                            <a href="{{ asset('admin/investcat/add?type='.$blogcat_type) }}">
                                <button class="pull-right btn btn-primary">Thêm danh mục</button>
                            </a>
                        @endif
                    </div>

                    <table class="table table-striped table-advance table-hover">
                        <h4>Danh mục bài viết</h4>

                        <hr>
                        <thead>
                            <tr>
                                <th><i class="fa fa-list-ul"></i> Tên danh mục</th>
                                <th><i class="fa fa-user"></i> Người tạo</th>
                                <th><i class="fa fa-user"></i> Cập nhật gần nhất</th>
                                <th style="text-align:center"><i class=" fa fa-edit"></i> Tùy chỉnh</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($blogcat_list as $blogcat)
                                <tr>
                                    <td>
                                        @if($blogcat_type == 'blog')
                                            <a href="{{ asset('admin/blogcat/edit/'.$blogcat->blogcat_id) }}?type={{ $blogcat_type }}">{{ $blogcat->blogcat_ten }}</a>
                                        @elseif($blogcat_type == 'invest')
                                            <a href="{{ asset('admin/investcat/edit/'.$blogcat->blogcat_id) }}?type={{ $blogcat_type }}">{{ $blogcat->blogcat_ten }}</a>
                                        @endif
                                    </td>
    
                                    <td>{{ $blogcat->blogcat_author }}</td>
                                    
                                    <td>{{ $blogcat->blogcat_editor }}</td>

                                    <td class="middle-align">
                                        @if($blogcat_type == 'blog')
                                            <a href="{{ asset('admin/blogcat/edit/'.$blogcat->blogcat_id) }}?type={{ $blogcat_type }}">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                        @elseif($blogcat_type == 'invest')
                                            <a href="{{ asset('admin/investcat/edit/'.$blogcat->blogcat_id) }}?type={{ $blogcat_type }}">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                        @endif

                                        @if (Auth::user()->phanquyen == 1)
                                            <a href="{{ asset('admin/blogcat/delete/'.$blogcat->blogcat_id) }}" onclick="return confirm('Tất cả bài viết trong cùng danh mục {{ $blogcat->blogcat_ten }} cũng sẽ đồng loạt bị xóa. Bạn có chắc chắn muốn xóa !')">
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
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

        </div>

    </section>
</section>

@stop