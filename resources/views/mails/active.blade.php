<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div style="height:300px;background:#f0f">
		{{$data['email']}}:您好，<br/>
		请点击下面的链接<a href="{{url('/home/user/active')}}/{{$data['rem_token']}}">激活</a><br/>您的账号
		如果这个链接点击不了的话。
		请复制下面的URL地址，到浏览器回车。
		{{url('/home/user/active')}}/{{$data['rem_token']}}
	</div>
</body>
</html>