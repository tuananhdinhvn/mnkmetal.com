@extends('admin.master') 
@section('title', 'Giao diện trang liên hệ') 
@section('main')

<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- /row -->
        <div class="row content-panel">
            <h2 class="centered">Trang liên hệ</h2>
            <div class="col-md-5 col-md-offset-1 mt mb">
                <img src="{{ asset('public/template/contact.png') }}" width="100%" alt="">
            </div>


            <div class="col-md-5 col-md-offset-1 mt mb">
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                        <form  method="post">
                            <h3>1. Google Map:</h3>
                            <textarea class="form-control" placeholder="Enter your Google iFrame here" name="contact_map" style="width:100%" rows="10">{{ $contact_item->contact_map }}</textarea>
                            <h3>2. Thông tin trang:</h3>
                            <p><label>Tiêu đề:</label> <input class="form-control" type="text" name="contact_title" style="width:100%" value="{{ $contact_item->contact_title }}"></p>
                            <p><label>Địa chỉ:</label> <input class="form-control" type="text" name="contact_add" style="width:100%" value="{{ $contact_item->contact_add }}"></p>
                            <p><label>Email:</label> <input class="form-control" type="email" name="contact_email" style="width:100%" value="{{ $contact_item->contact_email }}"></p>
                            <p><label>Hotline:</label> <input class="form-control" type="text" name="contact_phone" style="width:100%" value="{{ $contact_item->contact_phone }}"></p>

                            <input class="pull-right btn btn-primary mt" type="submit" value="Cập nhật">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    
                </div>
                <!-- end accordion -->
            </div>
            <!-- col-md-10 -->
        </div>

        

    </section>

</section>

@stop