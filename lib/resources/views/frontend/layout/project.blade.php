
<section id="projects">
    <div id="project-title" class="text-center text-uppercase container">
        <h3 class="h3 g-letter-spacing-5 g-font-size-24 g-font-weight-400 g-color-primary">@lang('messages.project_title')</h3>
        <p class="project-intro-text">
            @switch( Config::get('app.locale') )
                @case('vi')
                    {!! $project_index->project_intro_vi !!}
                    @break
                @case('en')
                    {!! $project_index->project_intro_en !!}
                    @break
                @case('zh')
                    {!! $project_index->project_intro_zh !!}
                    @break
                @case('ja')
                    {!! $project_index->project_intro_ja !!}
                    @break
                @case('kr')
                    {!! $project_index->project_intro_kr !!}
                    @break
            @endswitch
        </p>
    </div>

    <div id="featured-see-all-link" class="container">
        <p id="feture-project-title-left">@lang('messages.project_featured')</p>
        <p id="see-all-link">
            <span>
                <img style="height: 35px; position: relative; left: -10px; top: 3px;" src="{{ asset('public/upload/template/hand.jpg')}}" alt="">
            </span>
            <a class="text-uppercase" href="{{ asset('project') }}">
                <strong>@lang('messages.project_see_all')</strong>
            </a>
        </p>
    </div>

    <div id="project-index-list" class="container-fluid px-0 text-center">

        <div class="row">

            <div class="project-index-item-cover col-lg-3 col-md-6 col-sm-12 col-xs-12 g-theme-bg-blue-dark-v1--hover g-transition-0_2 g-transition--ease-in"
                 style="background-image: url(https://minhglobal.com/public/upload/template/intropj_bg.jpg);
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;">
                <p style="color: red;
                        font-weight: bold;
                        font-size: 1.3rem;
                        text-align: center;
                        padding-top: 33%;
                        vertical-align: middle;
                        text-transform: uppercase;">

                        @switch( Config::get('app.locale') )
                            @case('vi')
                                {!! $project_index->project_intro_box_vi !!}
                                @break
                            @case('en')
                                {!! $project_index->project_intro_box_en !!}
                                @break
                            @case('zh')
                                {!! $project_index->project_intro_box_zh !!}
                                @break
                            @case('ja')
                                {!! $project_index->project_intro_box_ja !!}
                                @break
                            @case('kr')
                                {!! $project_index->project_intro_box_kr !!}
                                @break
                        @endswitch
                        
                </p>
                {{-- <img class="main-thumbnail" src="{{ asset('public/upload/template/intropj_bg.jpg') }}"
                     style="height: 100%;
                            width: 100%;" 
                     alt=""> --}}
                
            </div>
            

            @foreach ($project_list as $item)
            <div class="project-index-item-cover col-lg-3 col-md-6 col-sm-12 col-xs-12 g-theme-bg-blue-dark-v1--hover g-transition-0_2 g-transition--ease-in">
                <a href="{{ asset('project/'.$item->pro_id) }}" class=" project-index-item ">
                    <div class="thumb-cover">
                        <img class="main-thumbnail" src="{{ asset('public/upload/product/'.$item->pro_thumb) }}" alt="">
						@if($item->pro_thumb_hover != '')
                            <img class="project-thumb-hover" src="{{ asset('public/upload/product/'.$item->pro_thumb_hover) }}" alt="">
						@else
                            <img class="project-thumb-hover" src="{{ asset('public/upload/product/'.$item->pro_thumb) }}" alt="">
                        @endif
    
                        @if($item->pro_status == 'ongoing')
                            <strong class="project-index-status alert alert-warning g-font-size-11 g-font-weight-700 status-btn">ON GOING</strong></p>
                        @else
                            <strong class="project-index-status alert alert-success g-font-size-11 g-font-weight-700 status-btn">FINISHED</strong></p>
                        @endif
                    </div>

                            
                    <div class="project-index-info">
                        <p class="project-index-overview-intro">
                            {{-- {{ number_format($item->pro_area, 0, ',', '.') }} m2 |  --}}
                            @foreach ($major_list as $major_item)
                                @if($major_item->major_id == $item->pro_major_id)
                                    @switch( Config::get('app.locale') )
                                        @case('vi')
                                            {{ $major_item->major_name_vi }}
                                            @break
                                        @case('en')
                                            {{ $major_item->major_name_en }}
                                            @break
                                        @case('zh')
                                            {{ $major_item->major_name_zh }}
                                            @break
                                        @case('ja')
                                            {{ $major_item->major_name_ja }}
                                            @break
                                        @case('kr')
                                            {{ $major_item->major_name_kr }}
                                            @break
                                    @endswitch 
                                @endif
                            @endforeach
                        </p>
                        <p class="project-index-name">
                            @switch( Config::get('app.locale') )
                                @case('vi')
                                    {{ $item->pro_ten_vi }}
                                    @break
                                @case('en')
                                    {{ $item->pro_ten_en }}
                                    @break
                                @case('zh')
                                    {{ $item->pro_ten_zh }}
                                    @break
                                @case('ja')
                                    {{ $item->pro_ten_ja }}
                                    @break
                                @case('kr')
                                    {{ $item->pro_ten_kr }}
                                    @break
                            @endswitch 
                        </p>
                        <p class="project-index-time">
                            <span class="index-time">( {{ \Carbon\Carbon::parse($item->pro_time_work)->format('Y')}} )</span> 
                            
                        <img class="project-index-nation" src="{{ asset('public/upload/nation/'.$item->pro_nation.'.png') }}" alt="">
                    </div>
                </a>
            </div>
               
            @endforeach

        </div>

    </div>

</section>



