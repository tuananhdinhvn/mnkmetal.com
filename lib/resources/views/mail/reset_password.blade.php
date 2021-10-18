<h1>Thay đổi mật khẩu</h1>
<p>Xin chào: {{ $name }}</p>
<p>Email: {{ $email }}</p>
<p>Code reset: {{ $code }}</p>
<p>
    Link reset mật khẩu: <a href="http://localhost/mydaughter/website/change-password/{{ $code }}?email={{ $email }}" target="_blank">tại đây</a>
</p>