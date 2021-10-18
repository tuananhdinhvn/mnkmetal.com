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
                                            <h2 class="title"><span>OUR PARTNERS</span></h2>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>





                        <div
                            class="elementor-element elementor-element-2293ed17 elementor-widget elementor-widget-gva-brand"
                            data-id="2293ed17"
                            data-element_type="widget"
                            data-widget_type="gva-brand.default"
                        >
                            <div class="elementor-widget-container">
                                <div class="gva-element-gva-brand gva-element">
                                    <div class="gva-brand-carousel style-2">
                                        <div
                                            class="init-carousel-owl owl-carousel"
                                            data-items="5"
                                            data-items_lg="5"
                                            data-items_md="4"
                                            data-items_sm="3"
                                            data-items_xs="2"
                                            data-items_xx="2"
                                            data-loop="1"
                                            data-speed="800"
                                            data-auto_play="1"
                                            data-auto_play_speed="800"
                                            data-auto_play_timeout="6000"
                                            data-auto_play_hover="1"
                                            data-navigation="0"
                                            data-pagination="0"
                                            data-mouse_drag="1"
                                            data-touch_drag="1"
                                        >
                                            @for ($i = 1; $i <= 10; $i++)
                                                <div class="item brand-item">
                                                    <div class="brand-item-content">
                                                        <span>
                                                            <img
                                                                src="{{ asset('public/upload/template/'.$i.'.png') }}"
                                                                alt=""
                                                                class="brand-img"
                                                            />
                                                        </span>
                                                    </div>
                                                </div>
                                            @endfor

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>