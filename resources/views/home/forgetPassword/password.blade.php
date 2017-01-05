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
            <li><div class="new_loginName">密码：</div>
              <input name="password" type="password" size="15" maxlength="30" class="new_loginTxt" placeholder="请输入新密码">
            </li>
            <li><div class="new_loginName">确认密码：</div>
              <input name="repassword" type="password" size="15" maxlength="30" class="new_loginTxt" placeholder="请再次输入密码">
            </li>
            <input type="hidden" name="rem_token" class="save_btn" value="{{$rem_token}}">
            <li style="text-align:center;margin-left:75px;margin-top:0px;">
             <span id="message" class="login_error">
             @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <p class="text-red">{{ $error }}</p>
                    @endforeach
                @endif
                @if(session('info'))
                <p class="text-red">{{session('info')}}</p>
                @endif</span> 
                          <span>
              
              <input type="submit" name="submit" class="login_btn" onclick="login();_czc.push([&#39;_trackEvent&#39;, &#39;登陆&#39;, &#39;保存&#39;]);" value="立即保存" style="float:left; cursor:pointer;">
             
              </span>
            </li>       
          </ul>
        </div>
        </form>
      </div>

    </div>
    

  </div>
  <div style="width:100%;height:auto;overflow:hidden;float:left">
  


@endsection()