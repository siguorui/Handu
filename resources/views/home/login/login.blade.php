@extends('home.layout')
@section('content')
	
	<div style=" width:1000px; margin:0 auto;margin-top:20px; margin-bottom:0;">
	<a href="http://www.handu.com/topic-1134.html" target="_blank">
	<img src="/home/imgs/banner1.jpg"></a></div>
	
	<div class="news_login">
		<div class="news_loginRight">
			<div class="news_loginRight_pic" style="padding-top:25px;"><img src="/home/imgs/410-290.png" width="410" height="290"></div>
		</div>	  
		<div class="news_login_left">
	    <div class="login_form" style="margin-top:25px;">
			  <h1 class="news_login_title">用户登录</h1>
				<form name="formLogin" action="http://www.handu.com/user.php" method="post">
				<div class="news_loginLeft">
					<ul class="news_loginLeft_list">
						<li>
						  <div class="new_loginName">用户名：</div>
							<input name="username" type="text" size="25" maxlength="50" class="new_loginTxt" value="邮箱地址/手机号" onfocus="if (value ==&#39;邮箱地址/手机号&#39;){value =&#39;&#39;}$(&#39;&#39;) " onblur="if (value ==&#39;&#39;){value=&#39;邮箱地址/手机号&#39;}">
						</li>
						<li><div class="new_loginName">密码：</div>
							<input name="password" type="password" size="15" maxlength="30" class="new_loginTxt">
						</li>
                        
                        <li id="captcha_li"><div class="new_loginName">验证码：</div>
							<input type="text" id="captcha" name="captcha" style="width:120px;">&nbsp;<a href="javascript:void(0);" onclick="javascript:re_captcha();"><img src="{{ url('home/login/login/1') }}" width="86" height="31" align="absmiddle" id="captcha_img" style="float:none"></a>
						</li>
                        <script>  
							  function re_captcha() {
							    $url = "{{ URL('home/login/login') }}";
							        $url = $url + "/" + Math.random();
							        document.getElementById('captcha_img').src=$url;
							  }
						</script>
						<li style="text-align:center;margin-left:75px;margin-top:0px;">
						 <span id="message" class="login_error">请输入正确的手机号</span>	
                          <span>
							<input type="hidden" name="back_act" value="http://www.handu.com/">
                            
							<input type="button" name="submit" class="login_btn" onclick="login();_czc.push([&#39;_trackEvent&#39;, &#39;登陆&#39;, &#39;立即登录&#39;]);" value="立即登录" style="float:left; cursor:pointer;">
							<div style="height:35px;line-height:50px;">
							  <input class="news_loginRadio" type="checkbox" value="1" name="remember" id="remember">保存登录信息
							</div>
							</span>
						</li>
						<li style="margin-left:80px;height:30px;line-height:30px;">
						  <a href="http://www.handu.com/user.php?act=register" onclick="_czc.push([&#39;_trackEvent&#39;,&#39;登陆&#39;,&#39;注册&#39;]);" style="float:left;">注册</a>
						  <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
						  <a href="http://www.handu.com/user.php?act=qpassword_name" onclick="_czc.push([&#39;_trackEvent&#39;,&#39;登陆&#39;,&#39;忘记密码&#39;]);">忘记密码?</a>
						</li>
						<li style="margin-left:80px;height:20px;"></li>
					</ul>
				</div>
				</form>
		  </div>
		  <div class="login_other" style="margin-bottom:15px;">
				<div class="login_other_title">其他登录方式：</div>
				<div class="login_other_btn">
					<a href="javascript:void(0);" onclick="toQQLogin();_czc.push([&#39;_trackEvent&#39;, &#39;登陆&#39;, &#39;QQ&#39;]);"><span class="login_other_btn00"></span></a>
					<a href="javascript:void(0);" onclick="toSinaLogin();_czc.push([&#39;_trackEvent&#39;, &#39;登陆&#39;, &#39;Sina&#39;]);"><span class="login_other_btn00 login_other_btn11"></span></a>
					<a href="javascript:void(0);" onclick="toXunleiLogin();_czc.push([&#39;_trackEvent&#39;, &#39;登陆&#39;, &#39;Thunder&#39;]);"><span class="login_other_btn00 login_other_btn22"></span></a>
					<a href="javascript:void(0);" onclick="toAlypayLogin();_czc.push([&#39;_trackEvent&#39;, &#39;登陆&#39;, &#39;Alipay&#39;]);"><span class="login_other_btn00 login_other_btn33"></span></a>
				</div>
		  </div>
		</div>
		

	</div>
	<div style="width:100%;height:auto;overflow:hidden;float:left">
	
@endsection()