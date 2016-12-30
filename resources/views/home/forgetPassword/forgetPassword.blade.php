@extends('home.layout')
@section('content')
<title>忘记密码_韩都衣舍HSTYLE网-韩风快时尚第一品牌购物商城。正品保证！</title>	
	<div class="register">
		<div class="register_left" style="border:none; margin-left:200px;">
			<div class="register_matel">
				<div class="register_num" style="display:none;">1</div>
				<div class="register_numName">找回密码的方式：</div>
                                <div id="regTitle" class="register_fs">
					<a style="cursor:pointer;" class="register_emailbtn">使用Email找回</a>
				</div>
			</div>

			<div class="register_mail">
				<div class="register_num" style="display:none;">2</div>
				<div class="register_numName">填写您的信息：</div>
				<div id="regDiv">
				<form action="{{asset('/home/changePassword')}}" method="post" name="formUser" onsubmit="">
				{{csrf_field()}}
				<ul class="register_list">
					<li><div class="register_list_name">Email：</div>
						<input name="email" type="text" size="25" id="email" onblur="checkForgotPasswordEmail(this.value);"  class="register_list_txt"/>
						<div  id="tip_e_e"  class="register_list_tishi"></div>
					</li>
					<li style="margin-left:114px;">请填写您的注册邮箱</li>
					<li>
						<input type="hidden" name="act" value="send_pwd_email" />
						<input id="ckforgotPasswordSubmit" type="submit" class="register_list_regree" value="立即发送邮件">
					</li>
				</ul>
				</form>
				
				</div>
			</div>
		</div>

	</div>
	
@endsection()