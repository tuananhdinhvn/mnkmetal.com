<!--New form-->
<!--Project filter-->
<style>
                   

    .filter-box {
        border-left: 1px solid #cdcdcd;
        font-weight: bold;
        width: 9%;
        text-align: center;
        text-transform: uppercase;
        background: #cdcdcd;
        font-size: 13px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px 5px;
    }
    .filter-header-item {
        border-left: 1px solid #cdcdcd;
        padding: 22px 10px;
        width: 15%;
        text-align: center;
        vertical-align: middle;
        font-weight: bold;
        text-transform: uppercase;
        cursor: pointer;
        font-size: 13px;
        background: white;
    }
    .filter-header-item:hover {
        background: #cdcdcd;
        color: #c94645;
        border-radius: 0 0px 0 0;
    }
    .arrow-down {
        padding-left: 5px;
    }

    .filter-header-hover {
        background: #cdcdcd;
        color: #c94645;
        border-radius: 0 0px 0 0;
    }

    /*--Filter option--*/
    .filter-option {
        position: relative;
        min-height: 280px;
        background: #cdcdcd;
        display: none;
        margin-top: -15px;
    }
    .filter-close-btn {
        width: 40px;
        height: 40px;
        text-align: center;
        position: absolute;
        top: 10px;
        right: 10px;
        border-radius: 50%;
        background: #848181;
        color: white;
        font-weight: bold;
        font-size: 22px;
        padding: 2px;
        cursor: pointer;
        z-index: 100;
    }
    .filter-close-btn:hover {
        color: #c94645;
        background: transparent;
        border: 1.5px solid #c94645;
    }
    .p-3 {
        padding: 10px !important;
    }
    .largerCheckbox {
        width: 20px;
        height: 20px;
    }
    .form-check-label {
        padding-top: 5px;
        padding-left: 10px;
        text-transform: uppercase;
        font-weight: bold;
    }
    .filter-option-item {
        height: 20px;
    }
    .list-checkbox {
        float: left;
        width: 25%;
        list-style: none;
        padding: 30px 5px 0px 0px;
        font-weight: bold;
        /* position: relative; */
    }
    .list-checkbox input {
        position: absolute;
        left: -20px;
    }
    .list-checkbox label {
        text-transform: uppercase;
    }

    #filter-submit,
    #filter-reset {
        width: 8%;
        border: none;
        /* padding: 1px; */
        text-align: center;
        vertical-align: middle;
        font-weight: bold;
        text-transform: uppercase;
        cursor: pointer;
        background: transparent;
        position: relative;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #filter-submit span,
    #filter-reset span {
        /* position: absolute;
        left: 0;
        right: 0;
        bottom: 10px; */
        justify-content: center;
        align-items: center;
        letter-spacing: 1px;
        font-size: 12px;
    }

    #filter-submit {
        background: #dc3545;
        color: white;
        border-radius: 5px 0 0 5px;
    }

    #filter-reset {
        background: #28a745;
        color: white;
        border-radius: 0 5px 5px 0;
    }

    #submit-mobile {
        display: none;
    }

    #filter-form {
		position: relative;
		z-index: 11;
		background: #fff;
    }

    #nationality-option,
    #major-option,
    #location-option,
    #grade-option,
    #status-option,
    #year-option {
        position: absolute;
        z-index: 100;
        top: 9vh;
    }

    #filter-reset a {
        color: white;
    }


    .project-list-cover {
        position: relative;
    }
    .blur-project-list {
        background: transparent;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 10;
        cursor: pointer;
    }

    .btn-filter-text{
        display: flex;
        justify-content: center !important;
        align-items: center !important;
        letter-spacing: 2px !important;

    }


    @media  only screen and (max-width: 768px) {
        .filter-header-item {
            width: 50% !important;
        }
        .filter-header-item i {
            float: right !important;
        }

        .filter-box {
            width: 100% !important;
        }
        /* .filter-box i{
            float: right !important
        }   */

        .filter-close-btn {
            font-size: 14px !important;
            width: 25px !important;
            height: 25px !important;
        }
        .list-checkbox {
            width: 100% !important;
        }
        .filter-option {
            min-height: 0 !important;
            background: #cdcdcd;
            border-top: 1px solid #cdcdcd;
            margin-top: 20px !important;
            margin-bottom: 10px !important;
        }
        .submit-btn {
            margin-top: 20px !important;
        }
    
        #submit-mobile {
            display: block;
        }
        #filter-submit,
        #filter-reset {
            display: none;
        }
    }

    /* Ipad display */
    @media  only screen and (min-width: 1024px) and (max-width: 1366px) {
        .filter-header-item{
            position: relative;
            padding: 5px;
            top: 0px;
            padding-top: 10px;
        }
        .arrow-down{
            position: absolute;
            top: 18px;
            left: 42%;

        }
        .filter-box{
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .list-checkbox label{
            font-size: 12px;
        }
    }


    /* special display */
    @media(min-width: 1280px){
        #filter-form{
            height: 8vh;
            background: #cdcdcd;
        }
    }
    @media(max-width: 1279px){
        #filter-form{

        }
    }

    @media(min-width: 1000px) and (max-width: 1024px){
        #filter-submit, #filter-reset {
            height: 50px !important;
        }
    }

    
</style>

<form id="filter-form" action="project-filter" method="GET">
    <!--Filter Header-->
    <div class="container-fluid row" style="position: relative; z-index: 11; height: 100%;">
        <div class="filter-box">
            
            @lang('messages.project_filter_title')
        </div>

        <!--Nationality header-->
        <div id="nationality-header" class="filter-header-item">

            @if( request()->get('filter_nationality') ) 
                @foreach ($nation_list as $nation_item)
                    @if( request()->get('filter_nationality') == $nation_item->nation_id)
                    <span style="color: #c94645">
                        @switch( Config::get('app.locale') )
                            @case('vi')
                                {{ $nation_item->nation_name_vi }}
                                @break
                            @case('en')
                                {{ $nation_item->nation_name_en }}
                                @break
                            @case('zh')
                                {{ $nation_item->nation_name_zh_tra }}
                                @break
                            @case('ja')
                                {{ $nation_item->nation_name_ja }}
                                @break
                            @case('kr')
                                {{ $nation_item->nation_name_kr }}
                                @break
                        @endswitch
                    </span>
                    @endif
                @endforeach
            @else 
                @lang('messages.project_filter_nationality') 
            @endif 

            <i class="fa fa-2x fa-sort-down arrow-down"></i>
        </div>
        <!--End nationality header-->

        <!--Major header-->
        <div id="major-header" class="filter-header-item">

            @if( request()->get('filter_major') ) 
                @foreach ($major_list as $major_item)
                    @if( request()->get('filter_major') == $major_item->major_id)
                    <span style="color: #c94645">
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
                    </span>
                    @endif
                @endforeach
            @else 
                @lang('messages.project_filter_major')  
            @endif 

            <i class="fa fa-2x fa-sort-down arrow-down"></i>
        </div>
        <!--End major header-->

        <!--Location header-->
        <div id="location-header" class="filter-header-item">

            @if( request()->get('filter_location') ) 
                @foreach ($location_list as $location_item)
                    @if( request()->get('filter_location') == $location_item->locate_id)
                    <span style="color: #c94645">
                        @switch( Config::get('app.locale') )
                            @case('vi')
                                {{ $location_item->locate_name_vi }}
                                @break
                            @case('en')
                                {{ $location_item->locate_name_en }}
                                @break
                            @case('zh')
                                {{ $location_item->locate_name_zh }}
                                @break
                            @case('ja')
                                {{ $location_item->locate_name_ja }}
                                @break
                            @case('kr')
                                {{ $location_item->locate_name_kr }}
                                @break
                        @endswitch
                    </span>
                    @endif
                @endforeach
            @else 
                @lang('messages.project_filter_location')
            @endif

            <i class="fa fa-2x fa-sort-down arrow-down"></i>
        </div>
        <!--End location header-->

        <!--Building grade header-->
        {{-- <div id="grade-header" class="filter-header-item">

            @if( request()->get('filter_grade') )
            <span style="color: #c94645">
                @switch( request()->get('filter_grade') )
                    @case('grade-1')
                        @lang('messages.project_detail_grade_1')
                        @break
                    @case('grade-2')
                        @lang('messages.project_detail_grade_2')
                        @break
                    @case('grade-3')
                        @lang('messages.project_detail_grade_3')
                        @break
                    @case('grade-4')
                        @lang('messages.project_detail_grade_4')
                        @break
                    @case('grade-special')
                        @lang('messages.project_detail_grade_special')
                        @break
                @endswitch
            </span>
            @else 
                @lang('messages.project_filter_grade')
            @endif

            <i class="fa fa-2x fa-sort-down arrow-down"></i>
        </div> --}}
        <!--End building grade header-->

        <!--Status header-->
        <div id="status-header" class="filter-header-item">

            @if( request()->get('filter_status') )
            <span style="color: #c94645">
                @switch( request()->get('filter_status') )
                    @case('ongoing')
                        @lang('messages.project_detail_status_on_going')
                        @break
                    @case('finished')
                        @lang('messages.project_detail_status_finished')
                        @break
                @endswitch
            </span>
            @else 
                @lang('messages.project_filter_status') 
            @endif

            <i class="fa fa-2x fa-sort-down arrow-down"></i>
        </div>
        <!--End status header-->

        <!--Year header-->
        <div id="year-header" class="filter-header-item">
            
            @if( request()->get('filter_year') ) 
            <span style="color: #c94645">
                {{ request()->get('filter_year') }}
            </span>
            @else 
                @lang('messages.project_filter_time')  
            @endif

            <i class="fa fa-2x fa-sort-down arrow-down"></i>
        </div>

        <!--Submit button-->

        <button id="filter-submit" type="submit" class="">
            <span style=""><span class="btn-filter-text"><i class="fa fa-filter"></i> @lang('messages.project_filter_btn')</span></span>
        </button>

        <!--Reset button-->
        <div id="filter-reset" class="">
            <a href="">
                <span><span class="btn-filter-text"><i class="fa fa-rotate-left"></i> @lang('messages.project_reset_btn')</span></span>
            </a>
        </div>

        <!--End year header-->
    </div>
    <!--End filter header-->

    <!--Show filter option-->
    <!--Nationality Option list-->
    <div id="nationality-option" class="container-fluid filter-option row">
        <div class="filter-close-btn">
            X
        </div>

        <ul>

            <!--First option nation-->
            <li class="list-checkbox">
                <span class="col-md-3 px-2 py-4 text-center filter-option-item">
                    <input class="largerCheckbox" type="radio" name="filter_nationality" id="" value="{{ $nation_project_list[0]->pro_nation }}"
                            @if( request()->get('filter_nationality') == $nation_project_list[0]->pro_nation ) checked @endif
                            rel="   @foreach ($nation_list as $nation_item)
                                        @if($nation_project_list[0]->pro_nation == $nation_item->nation_id)
                                            @switch( Config::get('app.locale') )
                                                @case('vi')
                                                    {{ $nation_item->nation_name_vi }}
                                                    @break
                                                @case('en')
                                                    {{ $nation_item->nation_name_en }}
                                                    @break
                                                @case('zh')
                                                    {{ $nation_item->nation_name_zh_tra }}
                                                    @break
                                                @case('ja')
                                                    {{ $nation_item->nation_name_ja }}
                                                    @break
                                                @case('kr')
                                                    {{ $nation_item->nation_name_kr }}
                                                    @break
                                            @endswitch
                                        @endif
                                    @endforeach ">

                    <label>
                        @foreach ($nation_list as $nation_item)
                            @if($nation_project_list[0]->pro_nation == $nation_item->nation_id)
                                @switch( Config::get('app.locale') )
                                    @case('vi')
                                        {{ $nation_item->nation_name_vi }}
                                        @break
                                    @case('en')
                                        {{ $nation_item->nation_name_en }}
                                        @break
                                    @case('zh')
                                        {{ $nation_item->nation_name_zh_tra }}
                                        @break
                                    @case('ja')
                                        {{ $nation_item->nation_name_ja }}
                                        @break
                                    @case('kr')
                                        {{ $nation_item->nation_name_kr }}
                                        @break
                                @endswitch
                            @endif
                        @endforeach
                    </label>
                </span>
            </li>
            <!--End first option nation-->



            <!--Nation option list-->
            @foreach ($nation_project_list as $key => $item)
                                
                @if($key>0)

                    @if($nation_project_list[$key-1]->pro_nation != $item->pro_nation)

                        @foreach ($nation_list as $nation_item)

                            @if($item->pro_nation == $nation_item->nation_id)
                            <li class="list-checkbox">
                                <span class="col-md-3 px-2 py-4 text-center filter-option-item">
                                    <input class="largerCheckbox" type="radio" name="filter_nationality" value="{{ $nation_item->nation_id }}"
                                            @if( request()->get('filter_nationality') == $nation_item->nation_id ) checked @endif
                                            rel="
                                                @switch( Config::get('app.locale') )
                                                    @case('vi')
                                                        {{ $nation_item->nation_name_vi }}
                                                        @break
                                                    @case('en')
                                                        {{ $nation_item->nation_name_en }}
                                                        @break
                                                    @case('zh')
                                                        {{ $nation_item->nation_name_zh_tra }}
                                                        @break
                                                    @case('ja')
                                                        {{ $nation_item->nation_name_ja }}
                                                        @break
                                                    @case('kr')
                                                        {{ $nation_item->nation_name_kr }}
                                                        @break
                                                @endswitch
                                                ">
                                    <label>
                                        @switch( Config::get('app.locale') )
                                            @case('vi')
                                                {{ $nation_item->nation_name_vi }}
                                                @break
                                            @case('en')
                                                {{ $nation_item->nation_name_en }}
                                                @break
                                            @case('zh')
                                                {{ $nation_item->nation_name_zh_tra }}
                                                @break
                                            @case('ja')
                                                {{ $nation_item->nation_name_ja }}
                                                @break
                                            @case('kr')
                                                {{ $nation_item->nation_name_kr }}
                                                @break
                                        @endswitch
                                    </label>
                                </span>
                            </li>
                            @endif

                        @endforeach
                        <!--End list nation-->

                    @endif
                    <!--End check duplicate nation-->

                @endif
                <!--End check key > 0-->
                
            @endforeach
            <!--End nation option list-->
        </ul>
    </div>

    <!--Major Option list-->
    <div id="major-option" class="container-fluid filter-option row">
        <div class="filter-close-btn">
            X
        </div>

        <ul>
            <!--First major option-->
            <li class="list-checkbox">
                <span class="col-md-3 px-2 py-4 text-center filter-option-item">
                    <input class="largerCheckbox" type="radio" name="filter_major" id="" value="{{ $major_project_list[0]->pro_major_id }}"
                            @if( request()->get('filter_major') == $major_project_list[0]->pro_major_id ) checked @endif
                            rel="   @foreach ($major_list as $major_item)
                                        @if($major_project_list[0]->pro_major_id == $major_item->major_id)
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
                                    @endforeach ">
                    <label>
                        @foreach ($major_list as $major_item)
                            @if($major_project_list[0]->pro_major_id == $major_item->major_id)
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
                    </label>
                </span>
            </li>
            <!--End First major option-->




            <!--Major option list-->
            @foreach ($major_project_list as $key => $item)
                                
                @if($key>0)

                    @if($major_project_list[$key-1]->pro_major_id != $item->pro_major_id)

                        @foreach ($major_list as $major_item)

                            @if($item->pro_major_id == $major_item->major_id)
                            
                            <li class="list-checkbox">
                                <span class="col-md-3 px-2 py-4 text-center filter-option-item">
                                    <input class="largerCheckbox" type="radio" name="filter_major" id="" value="{{ $major_item->major_id }}"
                                            @if( request()->get('filter_major') == $major_item->major_id ) checked @endif
                                            rel="   @switch( Config::get('app.locale') )
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
                                                    @endswitch ">
                                    <label>
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
                                    </label>
                                </span>
                            </li>
                            @endif

                        @endforeach
                        <!--End list nation-->

                    @endif
                    <!--End check duplicate nation-->

                @endif
                <!--End check key > 0-->
                
            @endforeach
            <!--End major option list-->


        </ul>
    </div>

    <!--Location Option list-->
    <div id="location-option" class="container-fluid filter-option row">
        <div class="filter-close-btn">
            X
        </div>

        <ul>
            <!--First Location option-->
            <li class="list-checkbox">
                <span class="col-md-3 px-2 py-4 text-center filter-option-item">
                    <input class="largerCheckbox" type="radio" name="filter_location" id="" value="{{ $location_project_list[0]->pro_location_id }}"
                            @if( request()->get('filter_location') == $location_project_list[0]->pro_location_id ) checked @endif
                            rel="   @foreach ($location_list as $location_item)
                                        @if($location_project_list[0]->pro_location_id == $location_item->locate_id)
                                            @switch( Config::get('app.locale') )
                                                @case('vi')
                                                    {{ $location_item->locate_name_vi }}
                                                    @break
                                                @case('en')
                                                    {{ $location_item->locate_name_en }}
                                                    @break
                                                @case('zh')
                                                    {{ $location_item->locate_name_zh }}
                                                    @break
                                                @case('ja')
                                                    {{ $location_item->locate_name_ja }}
                                                    @break
                                                @case('kr')
                                                    {{ $location_item->locate_name_kr }}
                                                    @break
                                            @endswitch
                                        @endif
                                    @endforeach ">
                    <label>
                        @foreach ($location_list as $location_item)
                            @if($location_project_list[0]->pro_location_id == $location_item->locate_id)
                                @switch( Config::get('app.locale') )
                                    @case('vi')
                                        {{ $location_item->locate_name_vi }}
                                        @break
                                    @case('en')
                                        {{ $location_item->locate_name_en }}
                                        @break
                                    @case('zh')
                                        {{ $location_item->locate_name_zh }}
                                        @break
                                    @case('ja')
                                        {{ $location_item->locate_name_ja }}
                                        @break
                                    @case('kr')
                                        {{ $location_item->locate_name_kr }}
                                        @break
                                @endswitch
                            @endif
                        @endforeach
                    </label>
                </span>
            </li>
            <!--End first Location option-->

            <!--Location option list-->
            @foreach ($location_project_list as $key => $item)
                
                    @if($key>0)

                        @if($location_project_list[$key-1]->pro_location_id != $item->pro_location_id)

                            @foreach ($location_list as $location_item)

                                @if($item->pro_location_id == $location_item->locate_id)
                                    <li class="list-checkbox">
                                        <span class="col-md-3 px-2 py-4 text-center filter-option-item">
                                            <input class="largerCheckbox" type="radio" name="filter_location" id="" value="{{ $location_item->locate_id }}"
                                                    @if( request()->get('filter_location') == $location_item->locate_id ) checked @endif
                                                    rel="   @switch( Config::get('app.locale') )
                                                                @case('vi')
                                                                    {{ $location_item->locate_name_vi }}
                                                                    @break
                                                                @case('en')
                                                                    {{ $location_item->locate_name_en }}
                                                                    @break
                                                                @case('zh')
                                                                    {{ $location_item->locate_name_zh }}
                                                                    @break
                                                                @case('ja')
                                                                    {{ $location_item->locate_name_ja }}
                                                                    @break
                                                                @case('kr')
                                                                    {{ $location_item->locate_name_kr }}
                                                                    @break
                                                            @endswitch ">
                                            <label>
                                                @switch( Config::get('app.locale') )
                                                    @case('vi')
                                                        {{ $location_item->locate_name_vi }}
                                                        @break
                                                    @case('en')
                                                        {{ $location_item->locate_name_en }}
                                                        @break
                                                    @case('zh')
                                                        {{ $location_item->locate_name_zh }}
                                                        @break
                                                    @case('ja')
                                                        {{ $location_item->locate_name_ja }}
                                                        @break
                                                    @case('kr')
                                                        {{ $location_item->locate_name_kr }}
                                                        @break
                                                @endswitch
                                            </label>
                                        </span>
                                    </li>
                                @endif

                        @endforeach
                        <!--End list nation-->

                    @endif
                    <!--End check duplicate nation-->

                @endif
                <!--End check key > 0-->
                
            @endforeach
            <!--End Location option list-->
        </ul>
    </div>

    <!--Building grade Option list-->
    <div id="grade-option" class="container-fluid filter-option row">
        <div class="filter-close-btn">
            X
        </div>

        <ul>
            <!--grade Option list-->
            <li class="list-checkbox">
                <span class="col-md-3 px-2 py-4 text-center filter-option-item">
                    <input class="largerCheckbox" type="radio" name="filter_grade" id="" value="grade-1"
                            @if( request()->get('filter_grade') == 'grade-1' ) checked @endif
                            rel="@lang('messages.project_detail_grade_1')">
                    <label>
                        @lang('messages.project_detail_grade_1')
                    </label>
                </span>
            </li>

            <li class="list-checkbox">
                <span class="col-md-3 px-2 py-4 text-center filter-option-item">
                    <input class="largerCheckbox" type="radio" name="filter_grade" id="" value="grade-2"
                            @if( request()->get('filter_grade') == 'grade-2' ) checked @endif
                            rel="@lang('messages.project_detail_grade_2')">
                    <label>
                        @lang('messages.project_detail_grade_2')
                    </label>
                </span>
            </li>

            <li class="list-checkbox">
                <span class="col-md-3 px-2 py-4 text-center filter-option-item">
                    <input class="largerCheckbox" type="radio" name="filter_grade" id="" value="grade-3"
                            @if( request()->get('filter_grade') == 'grade-3' ) checked @endif
                            rel="@lang('messages.project_detail_grade_3')">
                    <label>
                        @lang('messages.project_detail_grade_3')
                    </label>
                </span>
            </li>

            <li class="list-checkbox">
                <span class="col-md-3 px-2 py-4 text-center filter-option-item">
                    <input class="largerCheckbox" type="radio" name="filter_grade" id="" value="grade-4"
                            @if( request()->get('filter_grade') == 'grade-4' ) checked @endif
                            rel="@lang('messages.project_detail_grade_4')">
                    <label>
                        @lang('messages.project_detail_grade_4')
                    </label>
                </span>
            </li>

            <li class="list-checkbox">
                <span class="col-md-3 px-2 py-4 text-center filter-option-item">
                    <input class="largerCheckbox" type="radio" name="filter_grade" id="" value="grade-special"
                            @if( request()->get('filter_grade') == 'grade-special' ) checked @endif
                            rel="@lang('messages.project_detail_grade_special')">
                    <label>
                        @lang('messages.project_detail_grade_special')
                    </label>
                </span>
            </li>
            <!--End grade Option list-->



        </ul>
    </div>

    <!--Status Option list-->
    <div id="status-option" class="container-fluid filter-option row">
        <div class="filter-close-btn">
            X
        </div>

        <ul>
            <!--status list-->
            <li class="list-checkbox">
                <span class="col-md-3 px-2 py-4 text-center filter-option-item">
                    <input class="largerCheckbox" type="radio" name="filter_status" id="" value="ongoing"
                            @if( request()->get('filter_status') == 'ongoing' ) checked @endif
                            rel="ON GOING">
                    <label>
                        @lang('messages.project_detail_status_on_going')
                    </label>
                </span>
            </li>

            <li class="list-checkbox">
                <span class="col-md-3 px-2 py-4 text-center filter-option-item">
                    <input class="largerCheckbox" type="radio" name="filter_status" id="" value="finished"
                            @if( request()->get('filter_status') == 'finished' ) checked @endif
                            rel="FINISHED">
                    <label>
                        @lang('messages.project_detail_status_finished')
                    </label>
                </span>
            </li>
            <!--End status list-->

        </ul>
    </div>

    <!--Year Option list-->
    <div id="year-option" class="container-fluid filter-option row">
        <div class="filter-close-btn">
            X
        </div>

        <ul>

            <!--First year option-->
            <li class="list-checkbox">
                <span class="col-md-3 px-2 py-4 text-center filter-option-item">
                    <input class="largerCheckbox" type="radio" name="filter_year" id="" value='{{ \Carbon\Carbon::parse($year_filter_list[0]->pro_time_work)->format('Y') }}'
                            @if( request()->get('filter_year') == \Carbon\Carbon::parse($year_filter_list[0]->pro_time_work)->format('Y') ) checked @endif
                            rel="{{ \Carbon\Carbon::parse($year_filter_list[0]->pro_time_work)->format('Y') }}">
                    <label>
                        {{ \Carbon\Carbon::parse($year_filter_list[0]->pro_time_work)->format('Y') }}
                    </label>
                </span>
            </li>
            <!--End First year option-->



            <!--year option list-->
            @foreach ($year_filter_list as $key => $item)
                @if($key>0)
                    @if(\Carbon\Carbon::parse($year_filter_list[$key-1]->pro_time_work)->format('Y') != \Carbon\Carbon::parse($item->pro_time_work)->format('Y'))

                        <li class="list-checkbox">
                            <span class="col-md-3 px-2 py-4 text-center filter-option-item">
                                <input class="largerCheckbox" type="radio" name="filter_year" id="" value='{{ \Carbon\Carbon::parse($item->pro_time_work)->format('Y') }}'
                                        @if( request()->get('filter_year') == \Carbon\Carbon::parse($item->pro_time_work)->format('Y') ) checked @endif
                                        rel="{{ \Carbon\Carbon::parse($item->pro_time_work)->format('Y') }}">
                                <label>
                                    {{ \Carbon\Carbon::parse($item->pro_time_work)->format('Y') }}
                                </label>
                            </span>
                        </li>

                    @endif
                @endif                                
            @endforeach
            <!--End year option list-->


        </ul>
    </div>

    <div id="submit-mobile" class="col-12 text-center" style="padding: 20px 0 40px 0;">
        <button type="submit" class="btn btn-danger col-lg-2 col-sm-6 text-uppercase submit-btn" style="margin-bottom: 20px;"><i class="fa fa-filter"></i> @lang('messages.project_filter_btn')</button>
        <a href="/project" class="btn btn-success col-lg-2 col-sm-6 text-uppercase" style="margin-bottom: 20px;"> <i class="fa fa-rotate-left"></i> @lang('messages.project_reset_btn') </a>
    </div>

    {{ csrf_field() }}
</form>

<!--End show option-->

<!--Project filter bar-->
<script>
    $(document).on("ready", function () {
        $(".filter-close-btn").click(function () {
            $(".filter-option").fadeOut();
            // Remove header hover effect
            $(".filter-header-item").removeClass("filter-header-hover");
            // Remove blur cover project
            $(".normal-project-list").removeClass("blur-project-list");
        });

        // Remove itself blur
        $(".normal-project-list").click(function () {
            $(this).removeClass("blur-project-list");
            $(".filter-option").fadeOut();
            $(".filter-header-item").removeClass("filter-header-hover");
        });

        // Nationality
        $("#nationality-header").click(function () {
            $(".filter-header-item").removeClass("filter-header-hover");
            $(this).addClass("filter-header-hover");

            $(".filter-option").css("display", "none");
            $("#nationality-option").css("display", "block");
            $(".normal-project-list").addClass("blur-project-list");
        });

        $("input[name=filter_nationality]").click(function () {
            var nationality = $(this).attr("rel");
            $("#nationality-header").html("<span style='color: #c94645'>" + nationality + "</span> <i class='fa fa-2x fa-sort-down arrow-down'></i>");
        });

        // Major
        $("#major-header").click(function () {
            $(".filter-header-item").removeClass("filter-header-hover");
            $(this).addClass("filter-header-hover");

            $(".filter-option").css("display", "none");
            $("#major-option").css("display", "block");
            $(".normal-project-list").addClass("blur-project-list");
        });

        $("input[name=filter_major]").click(function () {
            var major = $(this).attr("rel");
            $("#major-header").html("<span style='color: #c94645'>" + major + "</span> <i class='fa fa-2x fa-sort-down arrow-down'></i>");
        });

        // Location
        $("#location-header").click(function () {
            $(".filter-header-item").removeClass("filter-header-hover");
            $(this).addClass("filter-header-hover");

            $(".filter-option").css("display", "none");
            $("#location-option").css("display", "block");
            $(".normal-project-list").addClass("blur-project-list");
        });

        $("input[name=filter_location]").click(function () {
            var location = $(this).attr("rel");
            $("#location-header").html("<span style='color: #c94645'>" + location + "</span> <i class='fa fa-2x fa-sort-down arrow-down'></i>");
        });

        // Building grade
        $("#grade-header").click(function () {
            $(".filter-header-item").removeClass("filter-header-hover");
            $(this).addClass("filter-header-hover");

            $(".filter-option").css("display", "none");
            $("#grade-option").css("display", "block");
            $(".normal-project-list").addClass("blur-project-list");
        });

        $("input[name=filter_grade]").click(function () {
            var grade = $(this).attr("rel");
            $("#grade-header").html("<span style='color: #c94645'>" + grade + "</span> <i class='fa fa-2x fa-sort-down arrow-down'></i>");
        });

        // Status
        $("#status-header").click(function () {
            $(".filter-header-item").removeClass("filter-header-hover");
            $(this).addClass("filter-header-hover");

            $(".filter-option").css("display", "none");
            $("#status-option").css("display", "block");
            $(".normal-project-list").addClass("blur-project-list");
        });

        $("input[name=filter_status]").click(function () {
            var status = $(this).attr("rel");
            $("#status-header").html("<span style='color: #c94645'>" + status + "</span> <i class='fa fa-2x fa-sort-down arrow-down'></i>");
        });

        // Year
        $("#year-header").click(function () {
            $(".filter-header-item").removeClass("filter-header-hover");
            $(this).addClass("filter-header-hover");

            $(".filter-option").css("display", "none");
            $("#year-option").css("display", "block");
            $(".normal-project-list").addClass("blur-project-list");
        });

        $("input[name=filter_year]").click(function () {
            var year = $(this).attr("rel");
            $("#year-header").html("<span style='color: #c94645'>" + year + "</span> <i class='fa fa-2x fa-sort-down arrow-down'></i>");
        });
    });
</script>