@extends('admin.master') 
@section('title', 'Chỉnh sửa câu hỏi') 


@section('css')
<!--External CSS-->
<link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
@endsection



@section('main')

<section id="main-content">
    <section class="wrapper">
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb">Chỉnh sửa câu hỏi</h4>
                    @include('error.note')
                    
                    <form class="form-horizontal style-form" enctype='multipart/form-data' method="post">

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Câu hỏi<br/>(Tiếng Việt): </label>
                            <div class="col-sm-10">
                                <input type="text" name="qna_ques" class="form-control" value="{{ $qna_item->qna_ques }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Câu hỏi<br/>(Tiếng Anh): </label>
                            <div class="col-sm-10">
                                <input type="text" name="qna_ques_en" class="form-control" value="{{ $qna_item->qna_ques_en }}">
                            </div>
                        </div>

                        <div class="form-group hidden">
                            <label class="col-sm-2 col-sm-2 control-label">Editor:</label>
                            <div class="col-sm-10">
                                <input type="text" name="qna_editor" class="form-control" value="{{ Auth::user()->name }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Trả lời<br/>(Tiếng Việt)</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="qna_ans" id="" style="width:100%;" rows="20">{{ $qna_item->qna_ans }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Trả lời<br/>(Tiếng Anh)</label>
                            <div class="col-sm-10">
                                <textarea class="editmce" name="qna_ans_en" id="" style="width:100%;" rows="20">{{ $qna_item->qna_ans_en }}</textarea>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="row pull-right" style="padding-right:50px">
                                <input style="width:100px;" type="submit" class="btn btn-primary" value="Cập nhật">
                                <a href="{{ route('admin.qna') }}"><input style="width:100px;" type="button" class="btn btn-danger" value="Hủy"></a>
                            </div>
                        </div>
                        {{ csrf_field() }}
                        
                    </form>


                </div>
            </div>
            <!-- col-lg-12-->
        </div>
        <!-- /row -->

    </section>
    <!-- /wrapper -->
</section>

@endsection