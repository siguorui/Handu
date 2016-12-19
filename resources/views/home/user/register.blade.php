  	@extends('home.layout')
	@section('content')
	<script type="text/javascript"  src="{{ asset('/home/js/jquery-1.1.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/home/js/users.js') }}"></script>
  	<div style="margin:0 auto; width:1100px; float:none; margin-top:10px;"><img src="{{ asset('/home/imgs/banner1.jpg') }}" width="1100" height="60" /></div>

	<div class="register">
		<div class="register_right fl">
			<div class="register_right_list">
				<div class="register_right_listName">已是韩都衣舍用户：
					<input type="button" value="直接登录" onclick="javascript:window.location.href='user.php?act=login';_czc.push(['_trackEvent', '注册', 'Login']);"  class="register_loginbtn" />
				</div>
			</div>
			<div class="news_loginRight_pic" style="margin-left:-7px;">
				<img src="{{ asset('/home/imgs/367-250.png') }}" width="367" height="250" alt="2012-2014上半年度全网销量第一女装品牌" title="2012-2014上半年度全网销量第一女装品牌"/>
				<!--<span style="font-size: 15px;top: -35px;position: relative;color: #333;left: 8px;">韩都衣舍会员群，就等你来，快快扫码加入吧</span>-->
			</div>

			<div class="crm_module zhuce">
		      <div class="dy">
		        <form id="form_dy" method="post" action="send_bonus.php?act=add_user_dingyue">
		          <input type="text" name="email" value="">
		          <button type="submit" onclick="_czc.push(['_trackEvent', '订阅', '订阅']);"></button>
		        </form>
		      </div>
		      <div id="subscription-prompt" style="top:64px;">订阅成功</div>
		      <style type="text/css">
		      #subscription-prompt{position: absolute;top: 267px;left:5px;display:none;width: 250px;padding: 2px 0;text-align: center; color:#34772A;border:1px solid #D9D3BB;background:#FFFDEE;}
		      .zhuce {background: url(http://s.handu.com/themes/handuyishe/index/images/footer022.png) no-repeat;width: 430px;height: 97px;float: left;margin-top: 8px;margin-left: -7px;position: relative;}
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
                

				<form action="{{ url('/home/user/add')}}" method="post" name="formMobile" onsubmit="return mobileRegister(this);">
				<ul class="register_list">
					<li><div class="register_list_name">您的手机号：</div>
						<input name="mobile" type="text" size="25" maxlength="11" id="mobile" onblur="checkMobile(this.value);" autocomplete="off" class="register_list_txt"/>
						<input type="button" value="发送验证码" class="register_telphonetime" id="send_valid_code" onclick="sendValidCode();"/>
						<div id="mobile_msg" class="register_telphonetime" style="display:none;" ><span id="mobile_second" style="font-size:12px; color:#bf0000; width:10px; margin-left:5px;"></span>秒后可重新发送</div>
						<div id="tip_m_m" class="register_list_tishi"></div>
					</li>
					<li><div class="register_list_neirong">
							请输入您在注册时使用的手机号码,若当前号码不用/丢失，或无法收到验证码?<a href="" style="color: #bf0000">其他验证方式</a>
						</div>
					</li>
					
					<li style="margin-top:10px;margin-bottom:10px;"><div class="register_list_name">验证码：</div>
						<input type="text" size="8" id="valid_code" name="valid_code" class="register_list_txt" autocomplete="off" />
					</li>
					<li><div class="register_list_name">密码：</div>
						<input name="password" type="password" id="Mpassword" onblur="check_password(this.value,'tip_m_p');"  autocomplete="off" class="register_list_txt" />
						<div id="tip_m_p" class="register_list_tishi"></div>
					</li>
					<li><div class="register_list_neirong">6-16位字符，可使用字母、数字或符号的组合</div></li>
					<li><div class="register_list_name">确认密码：</div>
						<input name="confirm_password" type="password" id="MCpassword" onblur="check_conform_password(this.value,document.getElementById('Mpassword').value, 'tip_m_cp');"  class="register_list_txt" />
						<div id="tip_m_cp" class="register_list_tishi"></div>
					</li>
					
					<li>
						<div class="register_list_xieyi">
							<input name="agreement" type="checkbox" value="1" checked="checked" />	
							我已看过并接受<a href="http://www.handu.com/helper-21-734.html" target="_blank" style="color: #bf0000">《用户协议》</a>
						</div>
					</li>
					<li>
						<input type="hidden" name="back_act" value="./" />
						<input type="hidden" name="parent_id" value="0" />
						<input type="hidden" name="act" value="act_register" />
						<input id="reg_email_submit" type="submit" class="register_list_regree" value="同意协议并注册" onclick="_czc.push(['_trackEvent', '注册', 'Agree']);">
					</li>
				</ul>

				</form>
                
                @if(count($errors) > 0)
                	@foreach($errors->all() as $error)
                	<p class="text-red">{{$error}}</p>
                	@endforeach
                @endif

                @if(session('info'))
                <p class="text-red">{{session('info')}}</p>
                @endif
				<form action="{{ url('/home/user/add')}}" method="post" name="formUser" onsubmit="return emailRegister(this);">
				{{csrf_field()}}
				<ul class="register_list" style="display:none">
					<li><div class="register_list_name">Email：</div>
						<input name="email" type="text" size="25" value="{{old('email')}}" id="email" onblur="checkEmail(this.value);"  class="register_list_txt"/>
						<div  id="tip_e_e"  class="register_list_tishi"></div>
					</li>
					<li><div class="register_list_neirong">Email地址作为用户名，同时也用于接收账户信息、订单通知及密码找回等功能</div></li>
					<li><div class="register_list_name">密码：</div>
						<input name="password" type="password" autocomplete="off" id="password1" onblur="check_password(this.value,'tip_e_p');"  class="register_list_txt" />
						<div  id="tip_e_p"  class="register_list_tishi"></div>
					</li>
					<li><div class="register_list_neirong">8-24位字符，必须包含字母、数字的组合</div></li>
					<li><div class="register_list_name">确认密码：</div>
						<input name="password_confirmation" type="password" id="conform_password" autocomplete="off" onblur="check_conform_password(this.value,document.getElementById('password1').value, 'tip_e_cp');"  class="register_list_txt" />
						<div id="tip_e_cp" class="register_list_tishi"></div>
					</li>
					<li><div class="register_list_neirong">请再次输入密码，两次输入必须一致</div></li>
                    
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
						<input type="hidden" name="back_act" value="./" />
						<input type="hidden" name="parent_id" value="0" />
						<input type="hidden" name="act" value="act_register" />
						<input id="reg_email_submit" type="submit" class="register_list_regree" value="同意协议并注册" onclick="_czc.push(['_trackEvent', '注册', 'Agree']);">
					</li>
				</ul>
				</form>
				
				</div>
			</div>
		</div>

	</div>
	

	
	</div>
	@endsection