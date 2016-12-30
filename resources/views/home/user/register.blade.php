  	@extends('home.layout')
	@section('content')
	<title>注册中心_韩都衣舍HSTYLE网-韩风快时尚第一品牌购物商城。正品保证！</title>
	<script type="text/javascript"  src="{{ asset('/home/js/jquery-1.1.0.min.js') }}"></script>
  	<div style="margin:0 auto; width:1100px; float:none; margin-top:10px;"><img src="{{ asset('/home/imgs/banner1.jpg') }}" width="1100" height="60" /></div>

	<div class="register">
		<div class="register_right fl">
			<div class="register_right_list">
				<div class="register_right_listName">已是韩都衣舍用户:<a href="{{asset('/home/login')}}">
					<input type="button" value="直接登录" onclick="javascript:window.location.href="{{asset('/home/login')}}";_czc.push(['_trackEvent', '注册', 'Login']);"  class="register_loginbtn" /></a>
				</div>
			</div>
			<div class="news_loginRight_pic" style="margin-left:-7px;">
				<img src="{{ asset('/home/imgs/367-250.png') }}" width="367" height="250" alt="2012-2014上半年度全网销量第一女装品牌" title="2012-2014上半年度全网销量第一女装品牌"/>
				<!--<span style="font-size: 15px;top: -35px;position: relative;color: #333;left: 8px;">韩都衣舍会员群，就等你来，快快扫码加入吧</span>-->
			</div>

			<div class="crm_module zhuce">
		      <div class="dy">
		        <form id="form_dy" method="post" action="send_bonus.php?act=add_user_dingyue">
		          <input type="email" name="email" value="">
		          <button type="submit" onclick="_czc.push(['_trackEvent', '订阅', '订阅']);"></button>
		        </form>
		      </div>
		      <div id="subscription-prompt" style="top:64px;">订阅成功</div>
		      <style type="text/css">
		      /*#subscription-prompt{position: absolute;top: 267px;left:5px;display:none;width: 250px;padding: 2px 0;text-align: center; color:#34772A;border:1px solid #D9D3BB;background:#FFFDEE;}
		      .zhuce {background: url(http://s.handu.com/themes/handuyishe/index/images/footer022.png) no-repeat;width: 430px;height: 97px;float: left;margin-top: 8px;margin-left: -7px;position: relative;}*/
		      </style>
		      <script type="text/javascript">
		        $('#form_dy').submit(function(){
		          var email=$(this).find('input[name=email]').val();
		          $.post($(this).attr('action'),{'email':email},function(data){
					$('#subscription-prompt').html(data.msg).show().delay(5000).fadeOut(400)();
		          },'json')
		          return false;
		        });
		      </script>
		    </div>



		</div>		
		<div class="register_left fl">
			<div class="register_matel">
				<div class="register_num">1</div>
				<div class="register_numName fl">选择注册方式：</div>
				<div id="regTitle" class="register_fs fl">
					<a style="cursor:pointer;" class="register_telphonebtn fl" onclick="_czc.push(['_trackEvent', '注册', 'Phone']);">使用手机注册</a>
					<a style="cursor:pointer;" class="register_emailbtn fl" onclick="_czc.push(['_trackEvent', '注册', 'Email']);">使用邮箱注册</a>
				</div>
				
				<div class="register_tip">
					<span style="display:block;">
						<div class="triangle-up-back phone-up"></div>
						<div class="triangle-up phone-up"></div>
						&nbsp;&nbsp;&nbsp;&nbsp;使用手机号注册再享手机专属券！
					</span>
					<span style="display:none;">
						<div class="triangle-up-back email-up"></div>
						<div class="triangle-up email-up"></div>
						&nbsp;&nbsp;&nbsp;&nbsp;推荐使用手机注册，保障账号安全，享安全无忧购物！
					</span>
				</div>
				
			</div>

			<div class="register_mail" style="position:relative;">
            	
                
				<div id="captcha_li" class="tcewm">
                <div id="sms_captcha_msg" style="color:#ffffff; margin:0px 0px 10px 0px;">请填写图片上的字母或数字：</div>
			 		<div class="div_guanbi" style="float:right; margin-top:-42px;" onclick="validCodeTcClose();"><img src="{{ asset('/home/imgs/18.png') }}"></div>
					<input type="text" id="sms_captcha" name="sms_captcha" style="width:115px;float:left;"/>&nbsp;
                	<a href="javascript:void(0);" onClick="document.getElementById('sms_captcha_img').src='{{asset('kit/captcha/1')}}'+Math.random()" style="float:left;"><img src="{{asset('kit/captcha/1')}}" width="86" height="31" align="absmiddle" id="sms_captcha_img" style="float:none"/></a>
					<div class="div_btn1" onclick="validCodeTcClose();sendValidCode();"><img src="{{ asset('/home/imgs/11.png') }}"></div>
				</div>
                
                
				<div class="register_num">2</div>
				<div class="register_numName fl">填写您的信息：</div>
				<div id="regDiv">
             	
             	@if(count($errors) > 0)
                	@foreach($errors->all() as $error)
                	<p style="color:red;">{{$error}}</p>
                	@endforeach
                @endif

                @if(session('info'))
                <p style="color:red">{{session('info')}}</p>
                @endif   

				<form action="{{ url('/home/user/insert')}}" method="post" name="formMobile" onsubmit="return mobileRegister(this);">
				{{csrf_field()}}
				
				<ul class="register_list">
					<li><div class="register_list_name">您的手机号：</div>
						<input name="phone" type="text" size="25" maxlength="11" id="mobile" onblur="checkMobile(this.value);" autocomplete="off" class="register_list_txt"/>
						<!-- <input type="button" value="发送验证码" class="register_telphonetime" id="send_valid_code" onclick="sendValidCode();"/> -->
						<div id="mobile_msg" class="register_telphonetime" style="display:none;" ><span id="mobile_second" style="font-size:12px; color:#bf0000; width:10px; margin-left:5px;"></span>秒后可重新发送</div>
						<div id="tip_m_m" class="register_list_tishi"></div>
					</li>
					<li><div class="register_list_neirong">
							请输入您的手机号码<a href="" style="color: #bf0000"></a>
						</div>
					</li>
					
					<!-- <li style="margin-top:10px;margin-bottom:10px;"><div class="register_list_name">验证码：</div>
						<input type="text" size="8" id="valid_code" name="valid_code" class="register_list_txt" autocomplete="off" />
					</li> -->
					<li><div class="register_list_name">密码：</div>
						<input name="password" type="password" id="Mpassword" onblur="check_password(this.value,'tip_m_p');"  autocomplete="off" class="register_list_txt" />
						<div id="tip_m_p" class="register_list_tishi"></div>
					</li>
					<li><div class="register_list_neirong">8-16位字符，可使用字母、数字或符号的组合</div></li>
					<li><div class="register_list_name">确认密码：</div>
						<input name="repassword" type="password" id="MCpassword" onblur="check_conform_password(this.value,document.getElementById('Mpassword').value, 'tip_m_cp');"  class="register_list_txt" />
						<div id="tip_m_cp" class="register_list_tishi"></div>
					</li>
					<li><div class="register_list_neirong">
							请再次输入密码，两次密码必须一致<a href="" style="color: #bf0000"></a>
						</div>
					</li>
					<li id="captcha_li"><div class="register_list_name">验证码：</div>
						<input type="text" name="captcha" class="form-control" style="width: 115px;">
				          	<a onclick="javascript:re_captcha();" ><img src="{{ URL('kit/captcha/1') }}"  alt="验证码" title="刷新图片" width="86" height="31" align="absmiddle" id="c2c98f0de5a04167a9e427d883690ff6" border="0"></a>
					<script>  
						function re_captcha() {
						    $url = "{{ URL('kit/captcha') }}";
						        $url = $url + "/" + Math.random();
						        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
					  }
					</script>	
					</li>

					<li>
						<div class="register_list_xieyi">
							<input name="agreement" type="checkbox" value="1" checked="checked" />	
							我已看过并接受<a href="http://www.handu.com/helper-21-734.html" target="_blank" style="color: #bf0000">《用户协议》</a>
						</div>
					</li>
					<li>
						
						<input id="reg_email_submit" type="submit" class="register_list_regree" value="同意协议并注册" onclick="_czc.push(['_trackEvent', '注册', 'Agree']);">
					</li>
				</ul>

				</form>
                
                
				<form action="{{ url('/home/user/add')}}" method="post" name="formUser" onsubmit="return emailRegister(this);">
				{{csrf_field()}}
				<ul class="register_list" style="display:none">
					<li><div class="register_list_name">Email：</div>

						<input name="email" type="email" size="25" value="{{old('email')}}" id="email" onmouseover="vv(this.value);" onblur="checkEmail(this.value);" border="1" class="register_list_txt"  />

						<div  id="tip_e_e"  class="register_list_tishi"></div>
					</li>
					<li><div class="register_list_neirong">Email地址作为用户名，同时也用于接收账户信息、订单通知及密码找回等功能</div></li>
					<li><div class="register_list_name">密码：</div>
						<input name="password" type="password" autocomplete="off" id="password1"  onblur="check_password(this.value,'tip_e_p');"  class="register_list_txt" />
						<div  id="tip_e_p"  class="register_list_tishi"></div>
					</li>
					<li><div class="register_list_neirong">8-24位字符，必须包含字母、数字的组合</div></li>
					<li><div class="register_list_name">确认密码：</div>
						<input name="repassword" type="password" id="conform_password" autocomplete="off" onblur="check_conform_password(this.value,document.getElementById('password1').value, 'tip_e_cp');"  class="register_list_txt" />
						<div id="tip_e_cp" class="register_list_tishi"></div>
					</li>
					<li><div class="register_list_neirong">请再次输入密码，两次输入必须一致</div></li>
                    
                    <li id="captcha_li"><div class="register_list_name">验证码：</div>
						<input type="text" name="captcha" class="form-control" style="width: 115px;">
				          	<a onclick="javascript:r_captcha();" ><img src="{{ URL('kit/captcha/1') }}"  alt="验证码" title="刷新图片" width="86" height="31" align="absmiddle" id="c2c98f0de5a04167a9e427d883690ff" border="0"></a>
					<script>  
						function r_captcha() {
						    $url = "{{ URL('kit/captcha') }}";
						        $url = $url + "/" + Math.random();
						        document.getElementById('c2c98f0de5a04167a9e427d883690ff').src=$url;
					  }
					</script>	
					</li>
                                        
					<li>
                    
						<div class="register_list_xieyi">
							<input name="agreement" type="checkbox" value="1" checked="checked" />	
							我已看过并接受<a href="http://www.handu.com/helper-21-734.html" target="_blank" style="color: #bf0000">《用户协议》</a>
						</div>
					</li>
					<li>
						<input id="reg_email_submit" type="submit" class="register_list_regree" value="同意协议并注册" onclick="_czc.push(['_trackEvent', '注册', 'Agree']);">
					</li>
				</ul>
				</form>
				
				</div>
			</div>
		</div>

	</div>
	

	
	</div>

	<script type="text/javascript">
		function vv(){
			var eml = document.getElementById("email.value");
			// alert(eml);
			if(!empty(eml.value))
			{
				eml.style."border:none";
			}
		}
	</script>
<script type="text/javascript">
	/**
 * 用户相关功能的JS代码(此页面的函数需要jQuery的支持,运行本文件的函数之前必须引入jQUery文件)
 * @since	2013-3-13 15:27:05
 */

/**
 * @desc	用于用户登录的表单验证(引用文件:user_login.dwt)
 * @param	f	form表单
 * @returns	boolean
 */
function ck_userLogin() {
	
	obj = document.forms['formLogin'];
	
	var username =  Utils.trim(obj.username.value);
	var regNumber = /^[0-9]+$/;
	//var regEmial = /^([\s\S])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
	var regMobilePhone = /^1[0-9]{10}$/;
	
	
	if(username.length < 0){
		$("#message").html('请输入正确的邮箱/手机号');
		return false;
	}
	
	//验证是不是手机号
	if (regNumber.test(username)) {

		if (!regMobilePhone.test(username)) {
			$("#message").html('请输入正确的手机号');
			return false;
		}

	} else {
		
		if (!Utils.isEmail(username)) {
			$("#message").html('请输入正确的E-mail');
			return false;
		}
		
	}

	if (obj.password.value.length < 6 || obj.password.value.length > 24) {
		$("#message").html('请输入正确的密码');
		return false;
	}
	return true;
}

/**
 * @desc	用于用户注册的表单验证<E-mail>(引用文件:user_register.dwt)
 * @param	f	form表单
 * @returns	boolean
 */
function emailRegister(obj){
	
	var email = obj.email.value;
	var password = Utils.trim(obj.password1.value);
	var confirm_password = Utils.trim(obj.conform_password.value);
	
	
	if (!Utils.isEmail(email)) {
		$("#tip_e_e").html( 'E-mail格式不正确');
		return false;
	}	
	
	
	if(check_password(password, 'tip_e_p') == false){
		
		return false;
	}
	
	if(check_conform_password(confirm_password, password, 'tip_e_cp') == false){
		
		return false;
	}
	
	return true;
	
}

/**
 * @desc	用于用户注册的表单验证<手机注册>(引用文件:user_register.dwt)
 * @param	f	form表单
 * @returns	boolean
 */
function mobileRegister(obj){

	var mobile = obj.mobile.value;
	var password = Utils.trim(obj.password.value);
	var confirm_password = Utils.trim(obj.confirm_password.value);

	var msg = "";

	if (MobileRegCheck(mobile) == false) {
		$("#tip_m_m").html('手机号格式不正确');
		return false;
	}else{
		$("#tip_m_m").html('');
	}
	
	if(check_password(password, 'tip_m_p') == false){
		
		return false;
	}
	
	if(check_conform_password(confirm_password, password, 'tip_m_cp') == false){
		
		return false;
	}

	
	return true;
}


function checkEmail(email){
	var submit_disabled = false;
	var tip_e_e = $("#tip_e_e");
	
	if (email == '') {
		
		tip_e_e.html( '请填写E-mail');
		submit_disabled = true;
	} 
	else if (!Utils.isEmail(email)) {
		
		tip_e_e.html( 'E-mail格式不正确');
		submit_disabled = true;
	}

	if (submit_disabled) {
		$("#reg_email_submit").attr('disabled',true);
		return false;
	}

	tip_e_e.html('<img src="http://handu.com/home/imgs/keyizhuce.gif">');
	

	
}
/**
 * 找回密码-验证邮箱
 * @param email
 * @returns {Boolean}
 */
function checkForgotPasswordEmail(email){
	var submit_disabled = false;
	var tip_e_e = $("#tip_e_e");
	
	if (email == '') {
		tip_e_e.html( '请填写E-mail');
		submit_disabled = true;
		
	} 
	else if (!Utils.isEmail(email)) {
		tip_e_e.html( 'E-mail格式不正确');
		submit_disabled = true;
	}
	else{
		$("#tip_e_e").html('<img src="{{url('/home/imgs/keyizhuce.gif') }}" />');
		$("#ckforgotPasswordSubmit").attr('disabled',false);
	}
	
	if (submit_disabled) {
		$("#ckforgotPasswordSubmit").attr('disabled',true);
		return false;
	}
	
	$.get('user.php?act=check_email',{email:email,rid:Math.random()},function(result){
		if(result == 'ok'){
			$("#tip_e_e").html('该E-mail不存在');
			$("#ckforgotPasswordSubmit").attr('disabled',false);
		}else{
			$("#tip_e_e").html('<img src="{{url('/home/imgs/keyizhuce.gif') }}" />');
			$("#ckforgotPasswordSubmit").attr('disabled',false);
		}
	},'TEXT');
	
}


/**
 * 检查手机号是否正确
 */
function checkMobile(mobile){
    if (MobileRegCheck(mobile)) {
    	// $.get('user.php?act=check_username',{username:mobile},function(data){
    	// 	if(data == 'ok'){
    	// 		$("#tip_m_m").html('<img src="{{url('/home/imgs/keyizhuce.gif') }}" />');
    	// 	}else if(data == 'false'){
    	// 		$("#tip_m_m").html('您所填写的手机号已存在');
    	// 	}else{
    	// 		$("#tip_m_m").html(data);
    	// 	}
    	// },'TEXT');
    	
    	$("#tip_m_m").html('<img src="http://handu.com/home/imgs/keyizhuce.gif">');
	} else {
		$("#tip_m_m").html('手机号格式不正确');
	}
}



function check_password(password, divID) {
	if (password.length < 8) {
		$("#"+divID).html('密码长度不能小于8位');
		return false;
	} 
	
	if(PasswordRegCheck(password) == false){
		$("#"+divID).html('密码必须为8-24位字母与数字组合');
		return false;
	}
	
	$("#"+divID).html('<img src="{{url('/home/imgs/keyizhuce.gif') }}" />');
	return true;
	
}

function check_conform_password(conform_password, password , divID) {
	
	if (conform_password.length < 8) {
		$("#"+divID).html('密码长度不能小于8位');
		return false;
	}
	
	if (conform_password != password) {
		$("#"+divID).html('两次输入的密码不一致');
		return false;
	}
	
	$("#"+divID).html('<img src="{{url('/home/imgs/keyizhuce.gif') }}" />');
	return true;
}

/* *
 * 会员找回密码时，对输入作处理
 */
function submitPwd() {
	var frm = document.forms['getPassword2'];
	var password = frm.elements['new_password'].value;
	var confirm_password = frm.elements['confirm_password'].value;
	var tip_gp_p =document.getElementById('tip_gp_p');
	var tip_gp_cp =document.getElementById('tip_gp_cp');
	var errorMsg = '';
	if (password.length == 0) {
		tip_gp_p.innerHTML = '请输入新密码';
		return false;
	}else if (password.length < 6) {
		tip_gp_p.innerHTML = '新密码不能小于6位';
		return false;
	}else if (confirm_password != password) {
		tip_gp_cp.innerHTML = '两次输入的密码不一致';
		return false;
	}

	return true;
}

function checkEditPassword(){
	var password = document.getElementById('new_password').value;
	var confirm_password = document.getElementById('confirm_password').value;
	var tip_gp_p =document.getElementById('tip_gp_p');
	var tip_gp_cp =document.getElementById('tip_gp_cp');
	var errorMsg = '';
	if (password.length == 0) {
		tip_gp_p.innerHTML = '请输入新密码';
		return false;
	}else if (password.length < 6) {
		tip_gp_p.innerHTML = '新密码不能小于6位';
		return false;
	}else{
		tip_gp_p.innerHTML = '<img src="{{url('/home/imgs/keyizhuce.gif') }}" />';
	}
}

function checkEditConfirmPassword(){
	var password = document.getElementById('new_password').value;
	var confirm_password = document.getElementById('confirm_password').value;
	var tip_gp_p =document.getElementById('tip_gp_p');
	var tip_gp_cp =document.getElementById('tip_gp_cp');
	var errorMsg = '';
	if (password.length == 0) {
		tip_gp_p.innerHTML = '请输入新密码';
		return false;
	}else if (password.length < 6) {
		tip_gp_p.innerHTML = '新密码不能小于6位';
		return false;
	}else if (confirm_password != password) {
		tip_gp_cp.innerHTML = '两次输入的密码不一致';
		return false;
	}else{
		tip_gp_cp.innerHTML = '<img src="{{url('/home/imgs/keyizhuce.gif') }}" />';
	}
}


/**
 * 发送验证码
 */
// function sendValidCode() {
	
// 	if($("#sms_captcha").val() == ''){
// 		$(".tcewm").addClass("tcewm1");	
// 		return false;
// 	}
// 	var sms_captcha = $("#sms_captcha").val();
	
//     if(MobileRegCheck($("#mobile").val())) {
		
//         $.post('user.php?act=ajax_get_valid_code',{mobile:mobile.value,sms_captcha:sms_captcha},function(data){
			
			
// 			if(data == '验证码不正确'){
// 				$("#sms_captcha_msg").html(data);
// 				$(".tcewm").addClass("tcewm1");	
// 			}
// 			$("#sms_captcha").val('');
// 			document.getElementById('sms_captcha_img').src='captcha.php?is_login=1&'+Math.random();
			
// 			if(data != '') {
// 				$("#tip_m_m").html(data);
// 			}
			
// 		},'TEXT');
		
//         //countDown();
		
//     }else{
//     	$("#tip_m_m").html('手机号格式不正确');
//     }
// }

/**
 * 手机注册发送验证码倒计时
 * @param send_valid_code	发送验证码的button
 */
// function countDown(){
	
// 	$("#send_valid_code").hide();
// 	$('#mobile_msg').show();
//     var time = 60; //设置时间为几秒  
//     //var timer = document.getElementById('timer'); //获取ID为timer的对象  
//     //send_valid_code.value = time; //初始化显示秒数  
//     time = time - 1;  
//     var g = window.setInterval(function(){  
//         if(time<0){  
//             window.clearTimeout(g); //清除动画  
//             //window.location.href = 'http://www.qianduanzu.com/'; //跳转到指定地址  
//             //window.history.back(-1); //后退  
//             $('#send_valid_code').val('重新发送');
// 			$('#mobile_msg').hide();
// 			$('#send_valid_code').show();
//         } else {  
//             showTime();  
//         }  
//     },1000);  
//     //显示函数  
//     function showTime(){  
//     	$("#mobile_second").html(time);
//         time--;  
//     }  
// }

/**
 * ***************************** js toods function
 * ***********************************
 */


/**
 * 检查EMAIL 
 * @param obj	input表单对象
 */
function EmailRegCheck(obj) { 
   var str = obj.value; 
   var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/; 
   return reg.test(str); 
} 
/**
 * 检查手机号码 
 * @param str	手机号码
 */
function MobileRegCheck(str) { 
	var reg= eval("/^1[0-9]{10}$/");
	return reg.test(str); 
}
/**
 * 检查密码 
 * @param str	密码字符串8-24位
 */
function PasswordRegCheck(str) { 
	var reg= /^(?!\D+$)(?![^a-zA-Z]+$).{8,24}$/;
	return reg.test(str); 
} 

</script>

	@endsection