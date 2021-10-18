<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered" style="position:relative;">
                <a href="{{ asset('admin/profile') }}"><img src="{{ asset('public/upload/info/'.Auth::user()->avatar) }}" class="img-circle" width="80"><span><i class="fa fa-gears fa-xs setting-profile" style=""></i></span></a>
            </p>
            <h5 class="centered">{{ Auth::user()->name }}</h5>
            <p style="text-align:center;">{{ Auth::user()->email }}</p>
            {{-- <li class="mt">
                <a @if ($active_sidebar_admin[1]=='dashboard') class="active" @endif href="{{ asset('admin/dashboard') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li> --}}

            {{-- <li>
                <a @if ($active_sidebar_admin[1]=='event') class="active" @endif href="{{ route('admin.event') }}">
                    <i class="fa fa-comments"></i>
                    <span>Sự kiện </span>
                </a>
            </li> --}}

            @if (Auth::user()->phanquyen==1)
                <li>
                    <a @if ($active_sidebar_admin[1]=='customer') class="active" @endif href="{{ route('admin.customer') }}">
                        <i class="fa fa-comments"></i>
                        <span>Khách hàng </span>
                    </a>
                </li>
            @endif

            <li>
                <a href="{{ asset('admin/news?type=blog') }}" @if ($active_sidebar_admin[1]=='news') class="active" @endif>
                    <i class="fa fa-book"></i>
                    <span>Tin tức</span>
                </a>
            </li>


            <li class="sub-menu">
                <a href="javascript:;" @if ($active_sidebar_admin[1]=='project') class="active" @endif>
                    <i class="fa fa-tags"></i>
                    <span>Project</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ route('admin.project.location') }}">Location</a></li>
                    <li><a href="{{ route('admin.project.major') }}">Ngành nghề</a></li>
                    <li><a href="{{ route('admin.project') }}">Danh sách dự án</a></li>
                </ul>
            </li>


            
            {{-- <li>
                <a @if ($active_sidebar_admin[1]=='order') class="active" @endif href="{{ asset('admin/order') }}">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Đơn hàng </span>
                    <span class="label label-theme pull-right mail-info">{{ $count_new_order }}</span>
                </a>
            </li> --}}



            <li class="sub-menu">
                <a href="javascript:;" @if ($active_sidebar_admin[1]=='template') class="active" @endif>
                    <i class="fa fa-th"></i>
                    <span>Template</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ asset('admin/template/whyus') }}">Why us</a></li>
                    <li><a href="{{ asset('admin/template/service') }}">Service</a></li>
                    <li><a href="{{ asset('admin/template/project') }}">Project</a></li>
                    {{-- <li><a href="{{ asset('admin/template/achievement') }}">Achievement</a></li> --}}
                    <li><a href="{{ asset('admin/template/social') }}">Cert & CSR</a></li>
                </ul>
            </li>


            {{-- <li class="sub-menu">
                <a href="javascript:;" @if ($active_sidebar_admin[1]=='nation' || $active_sidebar_admin[1]=='school') class="active" @endif>
                    <i class="fa fa-tags"></i>
                    <span>Tư vấn du học</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ route('admin.nation') }}">Quốc gia</a></li>
                    <li><a href="{{ asset('admin/productcat/child') }}">Danh mục con</a></li>
                    <li><a href="{{ route('admin.school') }}">Danh sách trường</a></li>
                </ul>
            </li> --}}

            {{-- <li class="sub-menu">
                <a href="javascript:;" @if ($active_sidebar_admin[1]=='static') class="active" @endif>
                    <i class="fa fa-th"></i>
                    <span>Trang đơn</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ asset('admin/static/gioi-thieu') }}">Trang giới thiệu</a></li>
                    <li><a href="{{ asset('admin/static/tuyen-dung') }}">Trang tuyển dụng</a></li>
                    <li><a href="{{ asset('admin/static/chinh-sach-bao-mat') }}">- Chính sách bảo mật</a></li>
                    <li><a href="{{ asset('admin/static/huong-dan-mua-hang') }}">- Hướng dẫn mua hàng</a></li>
                    <li><a href="{{ asset('admin/static/chinh-sach-van-chuyen') }}">- Chính sách vận chuyển</a></li>
                    <li><a href="{{ asset('admin/static/chinh-sach-bao-hanh') }}">- Chính sách bảo hành</a></li>
                    <li><a href="{{ asset('admin/static/huong-dan-thanh-toan') }}">- Hướng dẫn thanh toán</a></li>
                    <li><a href="{{ asset('admin/static/cau-hoi-thuong-gap') }}">- Câu hỏi thường gặp</a></li>
                </ul>
            </li> --}}

           
            {{-- <li class="sub-menu">
                <a href="javascript:;" @if ( $type_admin =='blog' ) class="active" @endif>
                    <i class="fa fa-book"></i>
                    <span>Tin tức & hoạt động</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ asset('admin/blogcat?type=blog') }}">Danh mục bài viết</a></li>
                    <li><a href="{{ asset('admin/blog?type=blog') }}">Danh sách bài viết</a></li>
                </ul>
            </li> --}}

            

            
            @if (Auth::user()->phanquyen==1)
                
                <li>
                    <a href="{{ asset('admin/image') }}" @if ($active_sidebar_admin[1]=='image') class="active" @endif>
                        <i class="fa fa-camera"></i>
                        <span>Hình ảnh</span>
                    </a>
                </li>

            
                <li>
                    <a href="{{ asset('admin/setting') }}" @if ($active_sidebar_admin[1]=='setting') class="active" @endif>
                        <i class="fa fa-tasks"></i>
                        <span>Cài đặt chung</span>
                    </a>
                </li>

                <li>
                    <a href="{{ asset('admin/users') }}" @if ($active_sidebar_admin[1]=='users') class="active" @endif>
                        <i class="fa fa-sitemap"></i>
                        <span>Phân quyền quản trị</span>
                    </a>
                </li>
            @endif
            
            {{-- <li>
                <a href="{{ asset('admin/support') }}" @if ($active_sidebar_admin[1]=='support') class="active" @endif>
                    <i class="fa fa-coffee"></i>
                    <span>Support</span>
                </a>
            </li> --}}
            <li>
                <a href="{{ asset('admin/logout') }}">
                    <i class="fa fa-sign-out"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>