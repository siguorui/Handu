<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div style="height:300px;background:#f0f">
		{{$data1->email}}:您好，<br/>
		请点击这里<a href="{{url('/home/forgetPassword/upassword')}}/{{$data1->rem_token}}">修改密码</a>
		如果这个链接点击不了的话。
		请复制下面的URL地址，到浏览器回车。
		{{url('/home/forgetPassword/upassword')}}/{{$data1->rem_token}}
	</div>
</body>
</html>