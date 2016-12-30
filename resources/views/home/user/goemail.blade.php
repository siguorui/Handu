@extends('home.layout')
@section('content')
	<center style="font-size:36px;">
		尊敬的韩都客户，恭喜，注册成功，请<a href="http://mail.{{$mail}}" style="color:red">前往邮箱</a>激活<br/>
		<img  src="{{ url('/home/imgs/1479194830306011154.jpg')}}"/>
	</center>
@endsection