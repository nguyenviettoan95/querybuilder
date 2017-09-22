<h1>ĐĂNG NHẬP</h1>
<h2 style="color: red">{{ $error or ''}}</h2><br>
<form action="{{route('login')}}" method="post" accept-charset="utf-8">
	{{csrf_field()}}
	Tên đăng nhập:<input type="text" name="name" placeholder="your account"><br>
	Password:<input type="password" name='pass' placeholder="your password"><br>
	<button type="submit">Login</button>
</form>