@extends('admin.master') 
@section('title', 'Hỗ trợ khách hàng') 
@section('main')

<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- /row -->
        <div class="row content-panel">
            <h2 class="centered">Câu hỏi thường gặp</h2>
            <div class="col-md-10 col-md-offset-1 mt mb">
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseOne">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>How to purchase this template?
                            </a>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseTwo">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>How can I install my server?
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseThree">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>How to change color schemes?
                            </a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFour">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>How to integrate Revolution Slider?
                            </a>
                        </div>
                        <div id="collapseFour" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFive">
                                <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>How Can I get Support?
                            </a>
                        </div>
                        <div id="collapseFive" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end accordion -->
            </div>
            <!-- col-md-10 -->
        </div>

        <section class="wrapper">
          
			
            @if (Session::has('sent_mail'))
                <p class="alert alert-success">{!! Session::get('sent_mail') !!}</p>
            @endif

            <!-- BASIC FORM ELELEMNTS -->
            <h2 class="centered">Liên hệ</h2>

            <div class="row mt">
                <div class="col-lg-4 col-md-4 col-sm-4 col-md-offset-1 ">
                    <p>Nếu bạn có yêu cầu cần hỗ trợ, hãy liên lạc với tôi theo thông tin bên dưới hoặc gửi mail theo form 
                        bên cạnh. Tôi sẽ liên lạc với bạn ngay khi nhận được phản hồi.<br/>
                        Nếu bạn liên hệ với tôi qua điện thoại, hãy gọi trong khoảng thời gian tử <strong>14h đến 20h hằng ngày từ thứ 2
                        đến thứ 6.</strong><br/>
                        
                    </p>

                    <ul class="contact_details">
                        <li><i class="fa fa-envelope-o"></i> tuananhdinh.vn@gmail.com</li>
                        <li><i class="fa fa-phone-square"></i> +84 933 953 192</li>
                        <li><i class="fa fa-skype"></i> tuananhdinh.vn</li>
                        <li><i class="fa fa-globe"></i> <a href="https://tuananhdinh.vn" target="_blank">tuananhdinh.vn</a></li>
                    </ul>
                    <br/>

                    
                    <!-- contact_details -->
                </div>
                <br/>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div id="message"></div>

                    <form action='{{ asset('admin/support') }}' class='contact-form' method='post'>

                        <div class="form-group">
                            <input type="name" required name="cs_name" class="form-control" placeholder="Tên của bạn" >
                           
                        </div>
                        <div class="form-group">
                            <input type="text" required name="cs_phone" class="form-control" placeholder="Số điện thoại của bạn" >
                            
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" required name="cs_message" placeholder="Vấn đề bạn đang gặp phải" rows="5" ></textarea>
                           
                        </div>


                        <div class="form-send">
                            <button type="submit" class="btn btn-large btn-primary">Gửi</button>
                        </div>

                        {{ csrf_field() }}
                    </form>
                </div>

            </div>
            
        </section>

    </section>

</section>

@stop