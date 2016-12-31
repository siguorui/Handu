@extends('home.layout')
@section('content')
<title>修改密码_韩都衣舍HSTYLE网-韩风快时尚第一品牌购物商城。正品保证！</title> 
  <div style=" width:1000px; margin:0 auto;margin-top:20px; margin-bottom:0;">
  <a href="http://www.handu.com/topic-1134.html" target="_blank">
  <img src="/home/imgs/banner1.jpg"></a></div>
  
  <div class="news_login">
    <div class="news_loginRight">
      <div class="news_loginRight_pic" style="padding-top:25px;"><img src="/home/imgs/410-290.png" width="410" height="290"></div>
    </div>    
    <div class="news_login_left">
      <div class="login_form" width="100%" style="margin-top:25px;">
        <h1 class="news_login_title">修改密码</h1>
        <form name="formLogin" action="{{url('/home/upwd')}}" method="post">
        {{ csrf_field() }}

        <li style="text-align:center;margin-left:75px;margin-top:0px;">
             <span style="color:red;" id="message" class="login_error">
             @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <p class="text-red">{{ $error }}</p>
                    @endforeach
                @endif
                @if(session('info'))
                <p style="color:red;">{{session('info')}}</p>
                @endif</span> 

            </li>
        <div class="news_loginLeft">
          <ul class="news_loginLeft_list">
            
            <li><div class="register_list_name">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</div>
            <input name="password" type="password" autocomplete="off" id="password1"  onblur="check_password(this.value,'tip_e_p');"  class="register_list_txt" />
            <div  id="tip_e_p"  class="register_list_tishi"></div>
          </li>
          <li style="display:block;"><div style="color:#ccc;" class="register_list_neirong">8-24位字符，必须包含字母、数字的组合</div></li>
          <li><div class="register_list_name">确认密码：</div>
            <input name="repassword" type="password" id="conform_password" autocomplete="off" onblur="check_conform_password(this.value,document.getElementById('password1').value, 'tip_e_cp');"  class="register_list_txt" />
            <div id="tip_e_cp" class="register_list_tishi"></div>
          </li>
          <li style="display:block;"><div style="color:#ccc;" class="register_list_neirong">
          请再次输入密码，两次输入必须一致</div></li><br/><br/>

                <input type="hidden" name="rem_token" class="save_btn" value="{{$rem_token}}">
                 <input type="submit" class="save_btn" value="">       
          </ul>
        </div>
        </form>
      </div>

    </div>
    

  </div>
  <div style="width:100%;height:auto;overflow:hidden;float:left">
  
<script type="text/javascript">
  /**
 * 用户相关功能的JS代码(此页面的函数需要jQuery的支持,运行本文件的函数之前必须引入jQUery文件)
 * @since 2013-3-13 15:27:05
 */

/**
 * @desc  用于用户登录的表单验证(引用文件:user_login.dwt)
 * @param f form表单
 * @returns boolean
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
 * @desc  用于用户注册的表单验证<E-mail>(引用文件:user_register.dwt)
 * @param f form表单
 * @returns boolean
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
 * @desc  用于用户注册的表单验证<手机注册>(引用文件:user_register.dwt)
 * @param f form表单
 * @returns boolean
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
 * 检查EMAIL 
 * @param obj input表单对象
 */
function EmailRegCheck(obj) { 
   var str = obj.value; 
   var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/; 
   return reg.test(str); 
} 

/**
 * 检查密码 
 * @param str 密码字符串8-24位
 */
function PasswordRegCheck(str) { 
  var reg= /^(?!\D+$)(?![^a-zA-Z]+$).{8,24}$/;
  return reg.test(str); 
} 
</script>

@endsection()