<section
    class="elementor-section elementor-top-section elementor-element elementor-element-56ac185c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="56ac185c"
    data-element_type="section"
    data-settings='{"background_background":"classic"}'
    
>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6713731 top column-style-top"
                data-id="6713731"
                data-element_type="column"
            >
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">


                        <div    class="elementor-element elementor-element-1dea1ce5 elementor-widget elementor-widget-gva-heading-block"
                                data-id="1dea1ce5"
                                data-element_type="widget"
                                data-widget_type="gva-heading-block.default" >

                            <div class="elementor-widget-container">
                                <div class="gva-element-gva-heading-block gva-element">
                                    <div class="align-center style-1 widget gsc-heading box-align-left">
                                        <div class="content-inner">
                                            <h2 class="title"><span>FEATURE PRODUCTS</span></h2>
                                            <p>Automated tools management system / Smart cabinet</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>





                        <!-- Swiper -->
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">

                                @for ($i = 1; $i <= 4; $i++)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('public/upload/product/feature'.$i.'.PNG') }}" />
                                    </div>
                                @endfor
                                
                            
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                        <!-- Swiper JS -->
                        <script src="{{ asset('js/swiper-bundle.min.js')}}"></script>

                        <!-- Initialize Swiper -->
                        <script>
                        var swiper = new Swiper(".mySwiper", {
                            effect: "coverflow",
                            grabCursor: true,
                            loop: true,
                            centeredSlides: true,
                            slidesPerView: "auto",
                            coverflowEffect: {
                            rotate: 50,
                            stretch: 0,
                            depth: 100,
                            modifier: 1,
                            slideShadows: true,
                            },
                            pagination: {
                            el: ".swiper-pagination",
                            },
                        });
                        </script>

        



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>