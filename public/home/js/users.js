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
	
	$.get('user.php?act=check_email',{email:email,rid:Math.random()},function(result){
		if(result == 'ok'){
			$("#tip_e_e").html('<img src="{{url('/home/imgs/keyizhuce.gif')}}" />');
			$("#reg_email_submit").attr('disabled',false);
		}
		else if(result == 'false'){
			$("#tip_e_e").html('该E-mail已被注册');
			$("#reg_email_submit").attr('disabled',false);
		}
		else{
			$("#tip_e_e").html(result);
			$("#reg_email_submit").attr('disabled',false);
		}
	},'TEXT');
	
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
		$("#tip_e_e").html('<img src="themes/handuyishe/images/keyizhuce.gif" />');
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
			$("#tip_e_e").html('<img src="themes/handuyishe/images/keyizhuce.gif" />');
			$("#ckforgotPasswordSubmit").attr('disabled',false);
		}
	},'TEXT');
	
}


/**
 * 检查手机号是否正确
 */
function checkMobile(mobile){
    if (MobileRegCheck(mobile)) {
    	$.get('user.php?act=check_username',{username:mobile},function(data){
    		if(data == 'ok'){
    			$("#tip_m_m").html('<img src="themes/handuyishe/images/keyizhuce.gif" />');
    		}else if(data == 'false'){
    			$("#tip_m_m").html('您所填写的手机号已存在');
    		}else{
    			$("#tip_m_m").html(data);
    		}
    	},'TEXT');
    	
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
	
	$("#"+divID).html('<img src="themes/handuyishe/images/keyizhuce.gif" />');
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
	
	$("#"+divID).html('<img src="themes/handuyishe/images/keyizhuce.gif" />');
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
		tip_gp_p.innerHTML = '<img src="themes/handuyishe/images/keyizhuce.gif" />';
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
		tip_gp_cp.innerHTML = '<img src="themes/handuyishe/images/keyizhuce.gif" />';
	}
}


/**
 * 发送验证码
 */
function sendValidCode() {
	
	if($("#sms_captcha").val() == ''){
		$(".tcewm").addClass("tcewm1");	
		return false;
	}
	var sms_captcha = $("#sms_captcha").val();
	
    if(MobileRegCheck($("#mobile").val())) {
		
        $.post('user.php?act=ajax_get_valid_code',{mobile:mobile.value,sms_captcha:sms_captcha},function(data){
			
			
			if(data == '验证码不正确'){
				$("#sms_captcha_msg").html(data);
				$(".tcewm").addClass("tcewm1");	
			}
			$("#sms_captcha").val('');
			document.getElementById('sms_captcha_img').src='captcha.php?is_login=1&'+Math.random();
			
			if(data != '') {
				$("#tip_m_m").html(data);
			}
			
		},'TEXT');
		
        //countDown();
		
    }else{
    	$("#tip_m_m").html('手机号格式不正确');
    }
}

/**
 * 手机注册发送验证码倒计时
 * @param send_valid_code	发送验证码的button
 */
function countDown(){
	
	$("#send_valid_code").hide();
	$('#mobile_msg').show();
    var time = 60; //设置时间为几秒  
    //var timer = document.getElementById('timer'); //获取ID为timer的对象  
    //send_valid_code.value = time; //初始化显示秒数  
    time = time - 1;  
    var g = window.setInterval(function(){  
        if(time<0){  
            window.clearTimeout(g); //清除动画  
            //window.location.href = 'http://www.qianduanzu.com/'; //跳转到指定地址  
            //window.history.back(-1); //后退  
            $('#send_valid_code').val('重新发送');
			$('#mobile_msg').hide();
			$('#send_valid_code').show();
        } else {  
            showTime();  
        }  
    },1000);  
    //显示函数  
    function showTime(){  
    	$("#mobile_second").html(time);
        time--;  
    }  
}

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


