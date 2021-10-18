<h1>Xin chào: {{ $name }}</h1>
<br/>
<p>
    Bạn được mời tham gia ban quản trị isetedu.com.vn<br/>
    Thông tin đăng nhập của bạn:<br/>
    Username: {{ $email }}<br/>
    Password: {{ $pass }}
</p>
<p>Hoàn tất bước cuối cùng để kích hoạt tài khoản của bạn: 
    <a href="https://www.isetedu.com.vn/register/confirm/{{ $code }}?email={{ $email }}" target="_blank">tại đây</a>
</p>