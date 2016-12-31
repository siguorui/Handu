<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0047)http://h.haikoutour.gov.cn/manager/default.aspx -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=7">
<title>韩都衣舍后台管理系统</title>
<link href="{{asset('/admin/css/layout_login.css')}}" rel="stylesheet" type="text/css">
<!--[if IE 6]>
<script type="text/javascript" src="/Scripts/DD_belatedPNG.js" ></script>
<script type="text/javascript">   DD_belatedPNG.fix('.leftmenu li a:hover,.topmenu .nav_content li a:hover,.index，.profle')  </script>
<![endif]-->

<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<link type="text/css" rel="stylesheet" href="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/style.css"><script type="text/javascript" charset="utf-8" src="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/page_context.js"></script></head>
<body class="logincss" screen_capture_injected="true">
    <form name="form1" method="post" action="{{url('/admin/login')}}" id="form1">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTY4NzcyMTIyMmQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgEFCUlCdG5Mb2dpbm/jusprBUwojs/e1g3XddqM0/zA">
</div>

        <div class="logbox">
            <div class="loginbox">
                @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif
        @if(session('info'))
        {{session('info')}}
        @endif
                <table width="282" border="0" align="right" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td>
        {{ csrf_field() }}
                            <table width="282" border="0" cellspacing="0" cellpadding="0">
                                <tbody><tr>
                                    <td height="33" style="border: 1px solid #d9d9d9; background: url(images/ico_user.gif) no-repeat;
                                        padding-left: 30px; color: #999; font-size: 14px; font-weight: bold">
                                        用户名
                                        <input name="user_name" type="text" maxlength="25" id="tbUserName" style="ime-mode: disabled;border: 0" value="{{old('user_name')}}"></td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 12px">
                            <table width="282" border="0" cellspacing="0" cellpadding="0">
                                <tbody><tr>
                                    <td height="33" style="border: 1px solid #d9d9d9; background: url(images/ico_user.gif) no-repeat;
                                        padding-left: 30px; color: #999; font-size: 14px; font-weight: bold">
                                        密&nbsp;&nbsp;&nbsp;&nbsp;码
                                        <input name="password" type="password" maxlength="50" id="tbPassword" style="ime-mode: disabled;border: 0" value="{{old('password')}}"></td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 12px">
                            <table width="282" border="0" cellspacing="0" cellpadding="0">
                                <tbody><tr>
                                    <td height="33" style="border: 1px solid #d9d9d9; background: url(images/ico_user.gif) no-repeat;
                                        padding-left: 30px; color: #999; font-size: 14px; font-weight: bold">
                                        <input type="text" name="captcha" class="form-control" style="width: 80px;float:left;height:26px;margin-top:2px;">
                        <a onclick="javascript:re_captcha();" ><img style="margin-left:10px;" src="{{ URL('kit/captcha/1') }}"  alt="验证码" title="刷新图片" width="100" height="34" id="c2c98f0de5a04167a9e427d883690ff6" border="0"></a>

                    <script>  
                      function re_captcha() {
                        $url = "{{ URL('kit/captcha') }}";
                            $url = $url + "/" + Math.random();
                            document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
                      }
                    </script></td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    <tr>
                        <td height="50" valign="bottom">
                            <table border="0" align="center" cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                    <td>
                                        <input type="image" name="IBtnLogin" id="IBtnLogin" border="0" src="/admin/imgs/btn_login.gif" style="border-width:0px;">
                                    </td>
                                    <td width="80" align="right">&nbsp;</td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                </tbody></table>
            </div>
        </div> 
    
<div>

    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBALtoYu/DwLyj/OQAgK3jsrkBALespa2DzOg2rdbUYhFCjs7WwDEXQDcRCzw">
</div></form>


</body></html>