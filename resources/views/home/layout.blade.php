<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta name="Keywords" content="" />
<link rel="stylesheet" type="text/css" href="{{ asset('/home/css/handu_base.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/home/css/handu_style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/home/css/web_index.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/home/css/talk.css') }}">
<link type="text/css" href="{{ asset('/home/css/NEWS_login.css') }}" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{ asset('/home/css/handu_list.css') }}">
<script type="text/javascript"  src="{{ asset('/home/js/jquery.min.js') }}"></script>
<script type="text/javascript"  src="{{ asset('/home/js/jquery-1.8.3.min.js') }}"></script>
<script type="text/javascript"  src="{{ asset('/home/js/jquery.json.js') }}"></script>
<script type="text/javascript" src="{{ asset('/home/js/utils.js') }}"></script><script type="text/javascript" src="{{ asset('/home/js/users.js') }}"></script>
<script type="text/javascript" id="veConnect" async="" src="{{ asset('/home/js/capture-apps-4.js') }}"></script>
<script src="{{ asset('/home/js/hm.js') }}"></script>
<script async="" src="{{ asset('/home/js/analytics.js') }}"></script>
<script type="text/javascript" async="" charset="utf-8" src="{{ asset('/home/js/ntkfstat.js') }}"></script>
<script src="{{ asset('/home/js/jquery-1.js') }}"></script>
<script src="{{ asset('/home/js/jquery.js') }}"></script>
<script src="{{ asset('/home/js/jquery_002.js') }}"></script>
<script src="{{ asset('/home/js/wb.js') }}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="{{ asset('/home/js/goods_no1214.js') }}"></script>
<script type="text/javascript" async="async" charset="utf-8" src="{{ asset('/home/js/zh_cn.js') }}" data-requiremodule="lang"></script>
<script type="text/javascript" async="async" charset="utf-8" src="{{ asset('/home/js/chat.js') }}" data-requiremodule="chatManage">
</script>
<script type="text/javascript" async="async" charset="utf-8" src="{{ asset('/home/js/mqtt31.js') }}" data-requiremodule="MQTT"></script>
<script type="text/javascript" async="async" charset="utf-8" src="{{ asset('/home/js/mqtt.js') }}" data-requiremodule="Connection"></script>
<script type="text/javascript" src="{{ asset('/home/js/jquery.slide.js') }}"></script>
<style type="text/css">
/* tagscloud */
#tagscloud{width:360px;height:250px;position:relative;font-size:12px;color:#333;margin:0px auto;text-align:center;right: 70px;}
#tagscloud a{position:absolute;top:0px;left:0px;color:#333;font-family:Arial;text-decoration:none;margin:0 10px 15px 0;line-height:18px;text-align:center;font-size:14px;padding:1px 5px;display:inline-block;border-radius:3px;}
#tagscloud a.tagc1{background:#247678;color:#fff;padding:5px;}
#tagscloud a.tagc2{background:#8FBFB3;color:#fff;padding:5px;}
#tagscloud a.tagc3{background:#FBDD65;color:#fff;padding:5px;}
#tagscloud a.tagc4{background:#F77210;color:#fff;padding:5px;}
#tagscloud a.tagc5{background:#BB240C;color:#fff;padding:5px;}
#tagscloud a:hover{color:#fff;background:#0099ff;}
.tcewm{display: none; position: absolute; z-index: 99; top: 90px;}
.tcewm1{display: block;padding: 25px 10px;background: #464646; left: 80px;top: 90px; width: 230px;}
.div_guanbi{width: 18px; height: 18px; overflow: hidden; cursor: pointer;}
.div_btn1{width: 65px;height: 20px; clear: both;margin: 30px 0 0 110px}
</style>
</head>

<body>
@if(session('master'))
<div id="global_nav">
  <div class="global_nav">
    <div class="global_info fl">
      <ul id="HD_MZONE">
        <li class="on">
          <em><a href="{{asset('/')}}">返回首页</a></em>
        </li>
        <li id="nav_addFavorite">
          <a rel="nofollow" href="javascript:window.external.addFavorite()"><b></b>收藏网站</a>
        </li>
      </ul>
    </div>
    <div class="global_info fr">
      <ul id="HD_MEMBERZONE"><style type="text/css">
#HD_MEMBERZONE li.zhuce_main&gt;img {position: absolute;top: 15px;left: -71px;z-index: 222;display: none;}
#HD_MEMBERZONE li.zhuce_main:hover&gt;img {display: block;}
#HD_MEMBERZONE li.on&gt;img {position: absolute;top: 15px;left: 4px;z-index: 222;}
</style>
<li class="on">
  <a class="user_name" title="" target="_blank" href="{{asset('/home/user/myCenter')}}">欢迎您，{{session('master') -> email}}</a>
  
  <a target="_blank" title="注册会员" href="{{asset('/home/user/vip')}}">
    
          <em class="lv lv0"></em>
  </a>
  
  <map name="Map" id="Map">
    <area shape="rect" coords="0,2,151,27" href="#" target="_blank" />
  </map>
</li>

<li class="integral">
  <a target="_blank" href="#"><span>积分</span><b>{{session('master') -> score}}</b></a>
</li>
<li><a href="{{asset('/home/logout')}}">退出</a></li>
<li class="">
    <div class="more-active">
    <a class="bn-more" href="{{asset('/home/user/myCenter')}}"><span>我的韩都</span></a><b></b>
    <div class="more-items">
        <table cellspacing="0" cellpadding="0">
            <tbody>
              <tr><td><a target="_blank" href="">我的订单</a></td></tr>
              <tr><td><a target="_blank" href="#">我的优惠券</a></td></tr>
              <tr><td><a target="_blank" href="">我的收藏</a></td></tr>
              <tr><td><a target="_blank" href="">退货办理</a></td></tr>
                         </tbody>
        </table>
    </div>
    </div>
</li>

@else
<div id="global_nav">
  <div class="global_nav">
    <div class="global_info fl">
      <ul id="HD_MZONE" >
        <li class="on">
         <em><a href="{{asset('/')}}" >返回首页</a></em>
        </li>
        <li id="nav_addFavorite">
          <a href="javascript:window.external.addFavorite()" rel="nofollow" ><b></b>收藏网站</a>
        </li>
      </ul>
    </div>
    <div class="global_info fr">
      <ul id="HD_MEMBERZONE" >
        <style type="text/css">
          #HD_MEMBERZONE li.zhuce_main>img {position: absolute;top: 15px;left: -71px;z-index: 222;display: none;}
          #HD_MEMBERZONE li.zhuce_main:hover>img {display: block;}
          #HD_MEMBERZONE li.on>img {position: absolute;top: 15px;left: 4px;z-index: 222;}
    </style>
<li>您好，欢迎光临韩都衣舍！</li>
<li>
  <a href="{{asset('/home/login/login')}}"  target="_blank">登录</a>
 <!--<span style="position: absolute;top: 12px;right: -4px;"><img src="http://img01.handu.com//hdysweb/20150821/180-263.png"></span>-->
</li>
<li class="zhuce_main">
  <a href="{{asset('/home/user/register')}}" style="color:#c70a28;width:30px;height:30px;display:inline-block;" target="_blank">注册</a>
</li>

@endif

<li><a href="{{asset('/home/goods/shopingcart')}}" style="margin-right:10px"  target="_blank">购物车</a></li>      </ul>
      <ul id="HD_HELPZONE" style="border-right:none;">
        <li><a href="javascript:Chat();">在线客服</a></li>
        <li><a href="#" target="_blank" >帮助中心</a></li>
        <li onmouseover="dhceng('webdhceng', 'show');"  onmouseout="dhceng('webdhceng', 'hide');" style="height:30px; display:inline-block;"><a href="#" target="_blank" ><s></s>网站导航</a></li>
      </ul>
    </div>
  </div>
  <div class="webdhbox" id="webdhceng" style="width:976px;" onmouseover="dhceng('webdhceng', 'show');"  onmouseout="dhceng('webdhceng', 'hide');">
    <div class="webdh">
      <div class="hot">
          <h1>大家都在买<span>Hot</span></h1>
          <ul>
                <li><a href="" target="_blank">t恤</a></li>
                <li><a href="" target="_blank">连衣裙</a></li>
                <li><a href="" target="_blank">牛仔裤</a></li>
                <li><a href="" target="_blank">毛衣针织</a></li>
                <li><a href="" target="_blank">卫衣绒衫</a></li>
                <li><a href="" target="_blank">休闲套装</a></li>
            </ul>
        </div>
      <div class="Hstyle">
          <h1>女装<span>Women</span></h1>
          <ul>
                <li><a href="" target="_blank">韩风快时尚女装</a></li>
                <li><a href="" target="_blank">韩风快时尚妈妈装</a></li>
                <li><a href="" target="_blank">韩风甜美少女装</a></li>
                <li><a href="" target="_blank">东方复古设计师女装</a></li>
                <li><a href="" target="_blank">韩风名媛时尚女装</a></li>
                <li><a href="" target="_blank">欧美浪漫田园风女装</a></li>
                <li><a href="" target="_blank">韩风大码女装</a></li>
                <li><a href="" target="_blank">欧美快时尚女装</a></li>
            </ul>
        </div>
      <div class="AMH">
          <h1>男装<span>Men</span></h1>
          <ul>
                <li><a href="" target="_blank">韩风快时尚男装</a></li>
                <li><a href="" target="_blank">东方禅意设计师男装</a></li>
                <li><a href="" target="_blank">欧美街头轻潮男装</a></li>
            </ul>
        </div>
      <div class="mini">
          <h1>童装<span>Children</span></h1>
          <ul>
                <li><a href="" target="_blank">韩风快时尚童装</a></li>
                <li><a href="" target="_blank">东方简约设计师童装</a></li>
            </ul>
        </div>
      <div class="help">
          <h1>帮助中心<span>Help</span></h1>
          <ul>
                <li><a href="" target="_blank">会员制度</a></li>
                <li><a href="" target="_blank">售后服务</a></li>
                <li><a href="" target="_blank">购物流程</a></li>
                <li><a href="" target="_blank">关于发票</a></li>
                <li><a href="" target="_blank">配送方式</a></li>
                <li><a href="" target="_blank">韩都招聘</a></li>
            </ul>
        </div>
    </div>
  </div>
</div>

<script>
 //鼠标滑过弹出层
function dhceng(obj, sType) 
{ 
  var oDiv = document.getElementById(obj); 
  if (sType == 'show') {oDiv.style.display = 'block';} 
  if (sType == 'hide') {oDiv.style.display = 'none';} 
} 
</script>	
     <style>
     /*header*/
.hdtop_header {
width: 1200px;
height: 115px;
margin: 0 auto;
position: relative;
font-family:"微软雅黑";
}
.hdls_logo {
width: 355px;
height: 97px;
position: absolute;
top: 8px;
left: 0;
background: url({{$logo}}) 0 5px no-repeat;
font-family:"微软雅黑";
}
.hdls_logo>a {
display: block;
float: left;
margin-right: 5px;
width: 100%;
height: 97px;
}
.hdls_logo span{float:right; margin-top:55px; font-size:14px; margin-right:20px;}
#hd_search {
float: left;
width: 540px;
position: absolute;
top: 28px;
left: 401px;
}
#hd_search .hdi-search {
z-index: 11;
width: 488px;
height: 32px;
margin-bottom: 3px;
border: 2px solid #c80a28;
}
#hd_search .form {
height: 32px;
overflow: hidden;
}
#hd_search .hdin_not {
position: relative;
}
#hd_search .hdin_not .text {
color: #c80a28;
outline:none;
border:none;
line-height:20px;
padding-top: 3px;
text-indent: 5px;
font-size: 14px;
}
#hd_search .hdin_not .text {
position: absolute;
z-index: 2;
width: 402px;
}
#hd_search .button {
width: 85px;
background: #c80a28;
position: absolute;
top: 0px;
right: 0px;
font: 16px/30px 'microsoft yahei';
color: #fff;
letter-spacing: 4px;
cursor: pointer;
border:none;
height:32px;
}
#hotwords {
margin-top: 8px;
height: 18px;
color: #666;
overflow: hidden;
}
#hotwords a:link{font-size:11px;}
#hotwords a:link,#hotwords a:visited{
float: left;
margin-right: 8px;
color: #666;
text-decoration:none;
}
#hotwords a:hover{ 
color:#ff0033;
text-decoration:none;
}

#hotwords s {
color: #999;
text-decoration: none;
margin: 0 8px 0 0px;
font-size: 11px;
float:left;
}
.header_ewm{width:88px; height:106px; border:1px solid #dddddd;  position:absolute;margin-top:15px; right:35px;}
.handu_dz{color:#ddd; font-size:12px; position:absolute; z-index:2; top:6px; left:10px;}
.head_btnleft{width:11px; height:11px; background:url({{ asset('/home/imgs/xxx.jpg') }}); position:absolute; left:-13px; border:1px solid #ddd; border-right:none; cursor:pointer;}
.headew_img{ position:absolute;top: 24px;
left: 4px;}
.displaynone{display:none;}
.colorRed{color:#f00;}
.colorfff{color:#f00;}
.colorfff:hover{text-decoration:none;}
     </style>
     
     	<div class="hd_header">
	<div class="hdtop_header">
		<div class="hdls_logo">
     <a href="{{ url('/')}}"></a>
     <a href="" target="_blank" style="width:100px;"></a>
    </div>
    <div id="hd_search">
      <div class="hdi-search">
        <div class="form hdin_not">
          <form method="get" action="{{url('/home/search')}}">
            <!--<label for="">请输入关键词</label>-->
            <input type="text" class="text" name="keywords" value="{{$request['keywords'] or ''}}">
            <input type="submit" value="搜索" class="button">
          </form>
        </div>
      </div>
  
      <script type="text/javascript">
        $('#hd_search .hdin_not input').bind({
          'focus':function(){
            $(this).siblings('label').hide();
          },
          'blur':function(){
            if($(this).val()==''){
              $(this).siblings('label').show();
            }
          }
        });
		$(function(){
				$(".head_btnleft").click(function(){
					$(".header_ewm").addClass("displaynone");
					
				});
				
			})
		
      </script>
      <div id="hotwords">
        <a href="{{asset('/home/cate/goodsList')}}/4" target="_blank">韩风童装</a><s> | </s>
        <a href="{{asset('/home/cate/goodsList')}}/14" target="_blank">可爱童装</a><s> | </s>
        <a href="{{asset('/home/cate/goodsList')}}/1" target="_blank">简约女装</a><s> | </s>
        <a href="{{asset('/home/cate/goodsList')}}/5" target="_blank">甜美女装</a><s> | </s>
        <a href="{{asset('/home/cate/goodsList')}}/7" target="_blank">时尚妈妈</a><s> | </s>
        <a href="" target="_blank">明星同款</a>
       </div>
    </div>
    
    <div style="position: absolute;right: 40px;top: 15px; width:100px;"><img src="{{ asset('/home/imgs/ewm.png') }}" width="100" height="100">
    	<div style=" width:100%;font-family:'微软雅黑'; line-height:16px; text-align:center; font-size:12px; color:#ff0032;font-weight: bold;">下载APP即送壕礼</div>
    </div>
    </div>
</div>


 <script>
    $(function(){	
		// 导航左侧栏js效果 start
		
		$(".pullDList li").hover(function(){
		$(".yMenuLConin").hide();
			$(this).find(".listi5").children("img").eq(0).css("display","none");
			$(this).find(".listi5").children("img").eq(1).css("display","block");
			$(".yMenuLCon").fadeIn();
			var index=$(this).index(".pullDList li");
			$(this).addClass("menulihover").siblings().removeClass("menulihover");
				$(this).addClass("mliselected").siblings().removeClass("mliselected");
			$($(".yMenuLConin")[index]).fadeIn().siblings().fadeOut();
			$($(".yMenuLConin")[index]).addClass("yMenuLConinhover").siblings().removeClass("yMenuLConinhover");
			$(this).siblings().children("yMenuLConin").hide();
			
		},function(){
			$(this).find(".listi5").children("img").eq(0).css("display","block");
			$(this).find(".listi5").children("img").eq(1).css("display","none");
		})
		$(".pullD").mouseleave(function(){
			$(".yMenuLCon").fadeOut();
			$(".yMenuLConin").fadeOut();
			$(".pullDList li").removeClass("menulihover");
			

		})
		
	})
    </script>
	<style>
 *{margin:0; padding:0;}
 body{background-color:fff;}
ul,li{list-style:none;margin:0; padding:0;}
a:active{text-decoration:none;}
a:visited{text-decoration:none;}
a:link{text-decoration:none;}
em,i{font-style: normal;}
.yHeader{width: 100%; font-family:"微软雅黑";}
.yNavIndex{width: 1200px;margin: 18px auto 0;height:33px;position: relative;}
.yNavIndex a:hover{text-decoration:underline;}
.yNavIndex .yMenuIndex a:hover{text-decoration:none; color:#ec0736;}
.yNavIndex .yMenuIndex{margin-left: 190px; width:990px;}
.nav_menuLi{float:left; padding:1px 16px; text-align:center;line-height:33px; font-weight:bold;}
.fright{float:right; position:relative;}
.fl_ah{float:left; margin:11px 0 11px 0;}
.nav_menuLi a{font-size:14px; color:#000;}

/*下拉*/
.pullD{z-index: 200;position: absolute;}
.pullDTitle{height: 33px;width: 190px; background:url({{ asset('/home/imgs/but.jpg') }});color: #ffffff;font-size: 14px;font-weight: normal;text-align: center;line-height: 33px;}
.pullDList{width: 190px;height: 453px; background-color:#e3e3e3;position: relative;z-index: 2; overflow:hidden;}
.pullDList li{padding:12px 13px;position: relative; border-bottom:1px  dotted #ccc; border-top:none;}
.pullDH3_t{font-size:14px; height:24px; color:#333; font-weight:bold;}
.pullDList li i{display: inline-block;
transition:margin-left .2s;-webkit-transition: margin-left .2s linear;-moz-transition: margin-left .2s linear;-o-transition: margin-left .2s linear; width: 18px;height: 18px; float:left; margin:1px 5px 0 0;}
.pullDList li.menulihover i{margin-left: 6px;}

.pullDList li a{color: #555;font-size: 12px; margin:0 1px;}
.pullDList li.mliselected{background: #e3e3e3;}
.pullDList li.mliselected span{top: 17px;right: 8px;}
.pullDList li.menulihover{background: #333; border-right:none; border-bottom:1px solid #ccc;}
.pullDList li.menulihover a{color:#fff;}
.pullDList li.menulihover .pullDH3_t{color:#fff;}
.pullDList li span{display: inline-block;position: absolute;top: 17px;right: 8px; background:url({{ asset('/home/imgs/leftjt.png') }}) no-repeat; width:6px; height:9px;}
.pullDList li.menulihover span{top: 17px;right: 8px;background:url({{ asset('/home/imgs/jthover.png') }}) no-repeat; width:6px; height:9px;}
/*下拉详细列表具体分类*/
.yMenuLCon{width: 410px;height:454px;position: absolute;z-index:2;top: 33px;left: 190px;overflow: hidden;}

.yMenuLConin{display: none; background: #fff; opacity:0.97; -moz-opacity:0.97;filter: alpha(opacity=97);width: 192px;height:455px;position: absolute;left: -10px;top: 0;-webkit-transition: left .3s linear;-moz-transition: left .3s linear;-o-transition: left .3s linear;}
.yMenuLConinhover{left:0px;}
.yMenuLCinList{overflow: hidden;}
.itemtc_h{width:300px; background-color:#fff; padding-bottom:8px; padding-top:8px; height:455px;}
.itemtc_h02{width:380px; margin:0 auto;}
.itemtcul_h{width:230px; overflow:hidden; margin:0 auto;}

.itContent_h{height:auto; width:380px; clear:both; overflow:hidden;}
.itContent_h .divH3{font-size:14px; color:#333;}
.itContent_h a{ color:#888; font-size:12px; display: inline-block;
float: left;
white-space: nowrap;
background: url({{ asset('/home/imgs/jgg.jpg') }})  no-repeat right 3px;
padding: 0 8px;
margin-top: 3px;}
.itContent_h .fl_ah{background:none;}
.itContent_zpp a{margin:3px 5px; float:left;}
.itContent_zpp .aFirst{margin:3px 0px; margin-right:5px;}
.itContent_h a:last-child{background:none;}
.menu_line_1{width:380px;border-bottom:1px dotted #ddd; margin:6px 0 4px 0;}
</style>


<div class="yHeader">

		<div class="yNavIndex">
       
        	<ul class="yMenuIndex">
              <li class="nav_menuLi">
            <a href="" target="_blank">
            	2016秋冬新品
            </a>
            </li>
				
            <li class="nav_menuLi">
            <a href="" target="_blank" >
              团购批发
            </a>
            </li>
            
            
             <li class="nav_menuLi fright">
           <a href="" target="_blank">
            	招兵买马</a></li>
            </li>
             <li class="nav_menuLi fright"  onmouseover="zixun('hdzx', 'show');" onMouseOut="zixun('hdzx', 'hide');"  style="position:relative;">
            <a href="" target="_blank">
            	韩都资讯
                <img src="{{ asset('/home/imgs/sjt.png') }}"/>
            </a>
              <div class="zix_x" id="hdzx">
          <ul>
             
               <li><a href="" target="_blank">韩都设计</a></li>
           		<li> <a href="" target="_blank">
            	品牌故事</a></li>
             
          </ul>
          </div>
            </li>
            
             <li class="nav_menuLi fright"  onmouseover="zixun('jhb', 'show');" onMouseOut="zixun('jhb', 'hide');" style="padding: 1px 5px;width: 95px;position: relative;top: 0px;height: 33px;">
            <a href="" target="_blank" >
            	会员俱乐部
              <img src="{{ asset('/home/imgs/sjt.png') }}"/>
            </a>
            <div class="zix_x" id="jhb">
          <ul>
              <li><a href="" target="_blank">韩都真人秀</a></li>
              <li><a href="" target="_blank">好评有礼</a></li>
             
          </ul>
           <script>
               function zixun(obj, sType) 
      { 
        var oDiv = document.getElementById(obj); 
        if (sType == 'show') {oDiv.style.display = 'block';} 
        if (sType == 'hide') {oDiv.style.display = 'none';} 
      } 
              </script>
        </div>
            </li>
              
        <style>
       .yMenuIndex .zix_x{width:100%; overflow:hidden; display:none;position: absolute;top: 33px;right: 0px;z-index: 100000; border:1px solid #ddd; border-top:1px solid #c80a28; border-bottom:none;}
      .yMenuIndex .zix_x ul li{width:100%; height:35px; line-height:41px; color:#000; background:#fff; text-align:center; font-size:14px; border-bottom:1px solid #dddddd;}
      .yMenuIndex .zix_x ul li:hover{background:#fff;}
	  .menu_ewm {width: 168px;overflow: hidden;display: none; position: absolute;top: 33px;left: -40px; z-index: 100000;
}
      .yMenuIndex .zix_x a:link{color:#000;  text-decoration:none;}
      .yMenuIndex .zix_x a:hover{color:#ff0033;}
     
        </style>
 
				
			</ul>
        
			<div class="pullD">
				<h2 class="pullDTitle">
					全部商品分类
				</h2>
				<ul class="pullDList" style="display:none;">

				<li>
						<h3  class="pullDH3_t">
                           <i class="listi5"><img src="{{ asset('/home/imgs/tb1.png') }}"/>
 <img src="{{ asset('/home/imgs/tb01.png') }}" style="display:none;"/>
                        </i>
                         全部商品分类
                        </h3>
						<a href="" target="_blank">本周新品</a>
						<a href="" target="_blank">按价格</a>
                        <a href="" target="_blank">按销量</a>
                        <span></span>
						
					</li>
					<li>
						<h3  class="pullDH3_t">
                         <i class="listi5"><img src="{{ asset('/home/imgs/tb2.png') }}"/>
  <img src="{{ asset('/home/imgs/tb02.png') }}" style="display:none;"/>
                        </i>
                        
                         精选推荐
                        </h3>
						<a href="" target="_blank" style="color:#f00">羽绒服</a>
						<a href="" target="_blank">潮流爆款</a>
                         <a href="" target="_blank">品牌特惠 </a>
                        <span></span>
						
					</li>
                    <li>
						<h3  class="pullDH3_t">
                         <i class="listi5"><img src="{{ asset('/home/imgs/tb3.png') }}"/>
 <img src="{{ asset('/home/imgs/tb03.png') }}" style="display:none;"/>
                        </i>
                       
                         潮流女装
                        </h3>
						<a href="" target="_blank" style="color:#f00">羽绒服</a>
						<a href="" target="_blank">毛呢外套</a>
                        <a href="" target="_blank">棉衣</a>
                        <span></span>
						
					</li>
                    
                    <li>
					  <h3  class="pullDH3_t">
                        
                        <i class="listi5"><img src="{{ asset('/home/imgs/tb5.png') }}"/>
 <img src="{{ asset('/home/imgs/tb05.png') }}" style="display:none;"/>
                        </i>
                         可爱童装
                        </h3>
						<a  href="#" target="_blank">童装新品</a>
						<a  href="#" target="_blank" style="color:#f00">套装</a>
                        <a href="#" target="_blank">毛衣/针织</a>
                        <span></span>
					</li>
                  <li style="padding:10px 13px;">
					<h3  class="pullDH3_t">
                        <i class="listi5"><img src="{{ asset('/home/imgs/tb6.png') }}"/>
 <img src="{{ asset('/home/imgs/tb06.png') }}" style="display:none;"/>
                        </i>
                         时尚妈妈
                     </h3>
					 <a href="" target="_blank">棉衣</a>
					 <a href="" target="_blank">毛针织衫</a>
                     <a href="" target="_blank">毛呢外套</a>
                     
                     <span></span>
						
					</li> 
				  <li style="padding:9px 13px;">
					<h3  class="pullDH3_t">
                        <i class="listi5"><img src="{{ asset('/home/imgs/tb7.png') }}"/>
 <img src="{{ asset('/home/imgs/tb07.png') }}" style="display:none;"/>
                        </i>
                        
                         鞋包配饰
                      </h3>
					  <a href="" target="_blank" style="color:#f00">鞋子</a>
					  <a href="" target="_blank">箱包</a>
                 	  <a href="" target="_blank" style="color:#f00">99元封顶</a>
                      <span></span>
						
					</li>				
 				<li style="padding:9px 13px;">
					<h3  class="pullDH3_t">
                        <i class="listi5"><img src="{{ asset('/home/imgs/tb8.png') }}"/>
 <img src="{{ asset('/home/imgs/tb8.png') }}" style="display:none;"/>
                        </i>
                        
                         明星同款
                      </h3>
					  <a>全智贤同款</a>
					  <a>朴信惠同款</a>
                      <span></span>
						
					</li>	
				</ul>
							
                            
		 	<div class="yMenuLCon">
				<div class="yMenuLConin">
					
                    	<div class="itemtc_h">
                        		 <div class="itemtcul_h">
                                  <div style="width:70px; float:left;">
                                  @foreach(Session::get('index') as $d)
                                    <a href="{{url('home/cate/index')}}/{{$d->id}}" target="_blank" class="fl_ah"><img src="/home/imgs/{{$d -> assit_logo}}" alt="{{$d -> title}}">
                                </a>
                                   
                                    @endforeach 
                          
                                    </div>
                                    <div style="width:70px; float:left; margin-left:10px;">
                                     @foreach(Session::get('index1') as $d1)
                                     <a href="{{url('home/cate/index')}}/{{$d1->id}}" target="_blank" class="fl_ah" >
                                      <img src="/home/imgs/{{$d1 -> assit_logo}}" alt="{{$d1 -> title}}">
                                    </a>
                                    @endforeach
                                    </div>
                              <div style="width:70px; float:left; margin-left:10px;">
                                
                                 @foreach(Session::get('index2') as $d2)
                                     <a target="_blank" href="{{url('home/cate/index')}}/{{$d2->id}}" class="fl_ah" >
                                     <img src="/home/imgs/{{$d2 -> assit_logo}}" alt="{{$d2 -> title}}">
                                  </a>
                                       
                                   @endforeach   
                              </div>
                                    
</div>
                              
                        </div>
                   </div>
			 
				<div class="yMenuLConin" style="width:400px;">
				 <div class="itemtc_h itemtc_h02">
         		 <div class="itContent_h"> <div class="divH3">特惠精选</div>
                 <div> <a href="#" target="_blank">清仓特惠</a>  <a href="#" target="_blank">爆款特惠</a> 
            </div>
           
          </div>
          <div  class="menu_line_1"></div>
          
          <div class="itContent_h"> <div class="divH3">潮流新品</div> <div>
 <a href="#" target="_blank" style="color:#f00">2016冬装新品</a>  <a href="#" target="_blank">原创新品</a>  <a href="#" target="_blank">羽绒服</a>  <a href="#" target="_blank">毛呢外套</a> 
  <a href="#" target="_blank">棉衣</a>
            </div>
          </div>
           <div  class="menu_line_1"></div>
           
          <div class="itContent_h"> <div class="divH3">类目新品</div> <div>
 <a href="#" target="_blank" style="color:#f00;"><em>连衣裙</em></a>    <a href="#" target="_blank">牛仔裤</a>  <a href="#" target="_blank"><em>衬衫</em></a>  <a href="#" target="_blank">卫衣</a>  <a href="#" target="_blank" style="color:#f00;">T恤</a>  <a href="#" target="_blank">休闲裤</a>  <a href="#" target="_blank">半身裙</a>  <a href="#" target="_blank">套装</a>  <a href="#" target="_blank">羽绒服</a>  <a href="#" target="_blank">毛呢外套</a> 
  <a href="#" target="_blank">棉衣</a>
  <a href="#" target="_blank">毛针织衫</a>
            </div>
          </div>
           <div  class="menu_line_1"></div>
             
          <div class="itContent_h"> <div class="divH3">爆款集锦</div> <div>
 <a href="#" target="_blank" style="color:#f00">2016冬装爆款</a>  <a href="#" target="_blank">女装爆款</a>  <a href="#" target="_blank">男装爆款</a>  <a href="#" target="_blank">童装爆款</a>  <a href="#" target="_blank">妈妈装爆款</a>
            </div>
          </div>
           <div  class="menu_line_1"></div>
           <div class="itContent_h"> <div class="divH3">百变风格</div> <div>
 <a href="#" target="_blank" style="color:#f00">潮流韩范</a>  <a href="#" target="_blank">纯色</a>  <a href="#" target="_blank">优雅OL</a>  <a href="#" target="_blank">印花</a>  <a href="#" target="_blank">甜美清新</a>  <a href="#" target="_blank">条纹</a>  <a href="#" target="_blank">度假出游</a>  <a href="#" target="_blank">拼接</a>  <a href="#" target="_blank">复古</a>  <a href="#" target="_blank">字母</a>  <a href="#" target="_blank">修身</a>  <a href="#" target="_blank">几何</a>  <a href="#" target="_blank">宽松</a>  <a href="#" target="_blank">不规则</a>
            </div>
          </div>
           <div  class="menu_line_1"></div>
           <div class="itContent_h"> <div class="divH3">更多推荐</div> <div>
 <a href="#" target="_blank">设计师推荐</a>  <a href="#" target="_blank">大码-范奎恩</a>  <a href="#" target="_blank">劳拉的誓约</a>  <a href="#" target="_blank">极简主义-白鹿语</a>  <a href="#" target="_blank" style="color:#f00"><em>轻时尚简约-哲初</em></a> 
            </div>
          </div>
           <div  class="menu_line_1"></div>
             
          
   				 </div>
				</div>
         
         	<div class="yMenuLConin" style="width:400px;">
				 <div class="itemtc_h itemtc_h02">
         
          @foreach(Session::get('index3') as $k2 =>$v2)

                    		 <div class="itContent_h"> 
             
             <div class="divH3">{{$v2 -> title}}</div> 
              
             <div>
             
            @foreach(Session::get('index4')[$k2] as $d3)
           

              <a href="{{url('home/cate/index')}}/{{$d3->id}}" target="_blank">{{$d3 -> title}}</a>
          
              @endforeach
            
            </div>
            
          </div>
           <div  class="menu_line_1"></div>

              @endforeach
             
          <div class="itContent_h"  style="border:none; height:auto;"> 
          @foreach(Session::get('index5') as $d4)
          <div class="itContent_zpp">
 						<a href="{{url('home/cate/index')}}/{{$d4->id}}" target="_blank" class="fl_ah aFirst"><img  src="/home/imgs/{{$d4 -> assit_logo}}" alt="{{$d4 -> title}}"/>
                                </a>        
            </div>
          @endforeach
          </div>

   				 </div>
				</div>
           
           <div class="yMenuLConin" style="width:400px; top:140px; height:314px;">
				 <div class="itemtc_h itemtc_h02">
         @foreach(Session::get('index6') as $k => $d4)
         		 <div class="itContent_h"> <div class="divH3">{{$d4 -> title}}</div> <div>
             @foreach(Session::get('index7')[$k] as $d5)
             
 <a href="{{url('home/cate/index')}}/{{$d5->id}}" target="_blank">{{$d5 ->title}}</a> 
              
              @endforeach 
            </div>
          </div>
            <div  class="menu_line_1"></div>

          @endforeach
         
            <div  class="menu_line_1"></div>

          <div class="itContent_h"  style="border:none; height:auto;">  <div class="itContent_zpp">
 	                      @foreach(Session::get('index6') as $k => $d4)
                                <a href="{{url('home/cate/index')}}/{{$d4->id}}" target="_blank" class="fl_ah aFirst"><img src="/home/imgs/{{$d4 -> assit_logo}}" alt="{{$d4 -> title}}">
                                </a>
                        @endforeach 
            </div>
          </div>
   				 </div>
				</div>
              <div class="yMenuLConin" style="width:400px; top:300px; height:154px">
				 <div class="itemtc_h itemtc_h02">
         		 <div class="itContent_h"> 
            @foreach(Session::get('index8') as $d6)
             <div class="divH3">{{$d6 -> title}}</div> 
            @endforeach 
             <div>
            @foreach(Session::get('index9') as $d7)
 <a href="{{url('home/cate/index')}}/{{$d7->id}}" target="_blank" >{{$d7 -> title}}</a> 
            @endforeach
            </div>
          </div>
   <div  class="menu_line_1"></div>
          
             
          <div class="itContent_h"  style="border:none; height:auto;"><div class="itContent_zpp">
                                  @foreach(Session::get('index8') as $d6)
                                 <a href="{{url('home/cate/index')}}/{{$d6->id}}" target="_blank" class="fl_ah aFirst">
                                    	<img src="/home/imgs/{{$d6 -> assit_logo}}" alt="韩韵衣香">
                                    </a>  
                                  @endforeach 
            </div>
          </div>
   				 </div>
				</div>
      
                
		 	</div>
					
			</div>
		</div>
		
 	</div>
    <script>
    $(function(){
		$(".yMenuLCon").hide();
		var s = window.location.href;
		if(s.toLowerCase()=="{{url('/')}}" || s.toLowerCase()=="{{url('/')}}/" ||  s.toLowerCase()=="{{url('/')}}/index.html"){
			$(".pullDList").show();
			$(".yMenuLCon").show();
			
			}else{
			$(".pullD").hover(function(){
			$(".pullDList").show();
			
			},function(){
			$(".pullDList").hide();	
				})
			}
		})
    </script>
	
      <style>
      .lxftime55{position:absolute; top:20px; left:11px; color:#fff; font-size:24px; font-family:Arial, Helvetica, sans-serif;}
      </style>

      @yield('content')

      <div class="handu_footer ">
          <div class="footer_info">
   
                       <div class="info_column first">
               <h4 class="fht21">新手指南</h4>
               <ul>
                              <li><a href="helper-21-700.html" title="用户注册" target="_blank">用户注册</a></li>
                              <li><a href="helper-21-701.html" title="购物流程" target="_blank">购物流程</a></li>
                               
                              <li><a href="#" title="网站导航" target="_blank">网站导航</a></li>
                              <li><a href="#" title="帮助中心" target="_blank">帮助中心</a></li>
                           </ul>
           </div>
           
                       <div class="info_column">
               <h4 class="fht22">支付方式</h4>
               <ul>
                              <li><a href="#" title="在线支付" target="_blank">在线支付</a></li>
                              <li><a href="#" title="货到付款" target="_blank">货到付款</a></li>
                              <li><a href="#" title="扫码支付" target="_blank">扫码支付</a></li>
                              <li><a href="#" title="优惠券支付" target="_blank">优惠券支付</a></li>
                              
                           </ul>
           </div>
           
                       <div class="info_column">
               <h4 class="fht10">配送方式</h4>
               <ul>
                              
                              <li><a href="#" title="配送说明" target="_blank">配送说明</a></li>
                              <li><a href="#" title="运费说明" target="_blank">运费说明</a></li>
                              <li><a href="#" title="验货签收" target="_blank">验货签收</a></li>
                              <li><a href="#" title="货到付款" target="_blank">货到付款</a></li>
                              
                           </ul>
           </div>
           
                       <div class="info_column">
               <h4 class="fht11">售后服务</h4>
               <ul>
                              <!--<li><a href="helper-11-742.html" title="正品保证" target="_blank">正品保证</a></li>-->
                              <li><a href="#" title="退换货政策" target="_blank">退换货政策</a></li>
                              <li><a href="#" title="退换货流程" target="_blank">退换货流程</a></li>
                              
                              
                           </ul>
           </div>
           
                       <div class="info_column">
               <h4 class="fht61">会员中心</h4>
               <ul>
                  <li><a href="#" title="会员制度" target="_blank">会员制度</a></li>
                  <li><a href="#" title="会员积分" target="_blank">会员积分</a></li>
                  <li><a href="#" title="好评有礼" target="_blank">好评有礼</a></li>
                              
                </ul>
           </div>
           
          
           
               
                       <div class="info_column">
               <h4 class="fht5">关于我们</h4>
               <ul>
                  <li><a href="#" title="品牌故事" target="_blank">品牌故事</a></li>
                  <li><a href="#" title="媒体报道" target="_blank">媒体报道</a></li>
                  <li><a href="#" title="诚聘英才" target="_blank">诚聘英才</a></li>
                  <li><a href="#" title="联系我们" target="_blank">联系我们</a></li>     
                </ul>
           </div>
           
     
               
  </div>
 <div class="footer_feature"></div>

  <div class="footer_black"> 
     <a href="/index.php" target="_blank">首页</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a href="#" target="_blank">品牌故事</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a href="#" target="_blank">诚聘英才</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a href="#" target="_blank">媒体报道</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a href="#" target="_blank">联系我们</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a href="#" target="_blank">网站地图</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a href="#" target="_blank">友情链接</a>
   </div>

    <center class="copyright_info">
      <span><img src="{{ asset('/home/imgs/copyright.gif') }}" alt="" width="33" height="37" border="0" align="absmiddle">鲁ICP备14003322号-2 © 2006-2015 handu.com All Rights Reserved. 
      
      <a target="_blank" href="#" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="{{ asset('/home/imgs/beiantubiao.png') }}" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">鲁公网安备 37010202000113号</p></a>
      
      山东韩都衣舍电商集团有限公司，禁止非法复制
      </span>

                <span id="cnzz_stat_icon_5484197"><a href="#" target="_blank" title="站长统计"><img src="{{ asset('/home/imgs/pic.gif')}}" vspace="0" hspace="0" border="0"></a></span>
                <!-- <script src="./stat.php" type="text/javascript"></script> -->
                <!-- <script src="./core.php" charset="utf-8" type="text/javascript"></script>   -->
                <br>
             <center>

         <img src="{{ asset('/home/imgs/zxmbutton02_sy.jpg') }}" alt="" width="114" height="38" border="0">
         
        <a href="#" target="_blank"><img src="{{ asset('/home/imgs/zxmbutton05_sy.jpg') }}" alt="" width="103" height="38" border="0" style="margin:5px 5px 0 5px;"></a>


    <a href="" target="_blank" style="display:inline-block;position:relative;width:102px;height:37px;">
       <img src="{{ asset('/home/imgs/cnnic.png') }}" alt="" width="102" height="37" border="0"></a>

        <!--<a href="http://si.trustutn.org/info?sn=615140701004909923565" target="_blank">
        <img src="http://img01.handu.com/hdysweb/20140415/renzheng.jpg" alt="" width="45" height="38" border="0"></a>-->

        <a style="display: inline-block;width: 74px;margin: 4px 3px;"> <img src="{{ asset('/home/imgs/cctv.png') }}" alt="" width="74" height="40" border="0"></a>
        </center>

        <script src="{{ asset('/home/js/cert.js') }}"></script>
        <script type="text/javascript"   src="{{ asset('/home/js/certShow.js') }}"></script>
    </center>

    @yield('friendLink')
</div>

<script type="text/javascript">

$(function() {
    
    //添加收藏夹
    $('#nav_addFavorite a').click(function(){
        var sURL="{{ url('/') }}";
        var sTitle='韩都衣舍HSTYLE';
        try {
            window.external.addFavorite(sURL, sTitle);
        }
        catch (e) {
            try {
                window.sidebar.addPanel(sTitle, sURL, "");
            }
            catch (e) {
                alert("您可以尝试通过快捷键 Ctrl + D 加入到收藏夹~");
            }
        }
    
    });
   
});


</script> 


<div class="float_box" >
  
  <div class="float_app"></div>
  <a href="" target="_blank" class="a1" onclick="_czc.push(['_trackEvent', '悬浮', '购物车']);"></a>
  <a href="" target="_blank" class="a2" onclick="_czc.push(['_trackEvent', '悬浮', '在线客服']);"></a>
  <a href="" target="_blank" class="a3" onclick="_czc.push(['_trackEvent', '悬浮', '在线反馈']);"></a>
  <a href="" class="a4" target="_blank"></a>
  <a href="javascript:void(0);" class="a5 backTop"  onclick="_czc.push(['_trackEvent', '悬浮', '返回顶部']);"></a>
  
</div>

<!-- 客服在线聊天 -->
<div id="main" style="display: none;position: fixed;top:120px;left: 500px;z-index: 9999">
           
            <div id="right">
                <div id="content">
                    <h2 id="content-title">您好，韩都客服竭诚为您服务</h2>
                    <hr />
                    <div id="show_msg">
                        
                    </div>
                </div>
                <div id="send">
                    <div id="control">
                    <form id="Formchat">
                    颜色：
                    <select name="color" id="color">
                        <option value="">请选择</option>
                        <option style="color:#FF8888" value="#FF8888">爱的暗示</option>
                        <option style="color:#00BBFF" value="#00BBFF">忧郁的蓝</option>
                        <option style="color:#0000FF" value="#0000FF">碧空蓝天</option>
                        <option style="color:#9F88FF" value="#9F88FF">灰蓝种族</option>
                        <option style="color:#000088" value="#000088 ">蔚蓝海洋</option>
                        <option style="color:#77FFEE" value="#77FFEE">清清之蓝</option>
                        <option style="color:#4400B3" value="#4400B3">发亮篮紫</option>
                        <option style="color:#A500CC" value="#A500CC">紫的拘谨</option>
                        <option style="color:#B088FF" value="#B088FF">卡其制服</option>
                        <option style="color:#D1BBFF" value="#D1BBFF">伦敦灰雾</option>
                        <option style="color:#DC143C" value="#DC143C">卡布其诺</option>
                        <option style="color:#A52A2A" value="#A52A2A">苦涩心红</option>
                        <option style="color:#FF0000" value="#FF0000">正宗喜红</option>
                        <option style="color:#990099" value="#990099">红的发紫</option>
                        <option style="color:#FF0000" value="#FF0000">红旗飘飘</option>
                        <option style="color:#D2691E" value="#D2691E ">黄金岁月</option>
                        <option style="color:#800080" value="#800080">紫金绣贴</option>
                        <option style="color:#006400" value="#006400">橄榄树绿</option>
                        <option style="color:#000000" value="#000000">绝对黑色</option> 
                    </select>
                   
                    <br />
                    <textarea id="msg" name="msg"></textarea><br/>
                    <input type="button" value="发送" onclick="sendmsg()" />
                    <input type="button" value="退出聊天" onclick="outchat()">
                    
                    </form>
                    </div>
                </div>
            </div>
        </div>
  <!-- 客服在线聊天 -->
<script language="javascript" type="text/javascript">
$(window).scroll(function(){
      var t = document.documentElement.scrollTop||document.body.scrollTop;

      if(t>450){
    $(".float_box").fadeIn();
      }
      else{
     $(".float_box").hide();
      }
})

$('.float_box .backTop').click(function(){
    $("html, body").animate({'scrollTop':0},320);
})
</script>


<script language="javascript" type="text/javascript">
  NTKF_PARAM = {
  siteid:"kf_9817",
  settingid: "kf_9817_1377747298633",
    itemid: "",
      uid:"",
    uname:"",

userlevel:0,
  orderid: "",
  orderprice: "",
itemparam: "size=41|color=red|brand=tata",
      erpparam: "sid=eadfddeeel|utm=adfe|source=baidu" 

} 
</script><script type="text/javascript" src="{{ asset('/home/js/ntkfstat.js') }}" charset="utf-8"></script>
 
 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','{{ asset('/home/js/analytics.js') }}','ga');

  ga('create', 'UA-45831645-1', 'handu.com');
  ga('require', 'displayfeatures');
    ga('send', 'pageview');
</script>
 



<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "{{ asset('/home/js/hm.js') }}";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

 


<style type="text/css">
.gwd_toolbar_container{display:none; visibility:hidden;}
.gwd_float_curve_trigger{display:none; visibility:hidden;}
.gwd_float_curve{display:none; visibility:hidden;}
.gwd_toolbar_control_small{display:none;}
.gwd_toolbar_container gwd_toolbar_containerX gwd_toolbar_big gwd_ns_x11 gwd_toolbar_no_transition{visibility:hidden !important; display:none !important; margin-left: -1000000px !important;}
.gwd_toolbar_goods_list gwd_ns_baokuan{display:none !important; visibility:hidden !important; margin-left: -1000000px !important;}
.gwd_toolbar_goods_list .gwd_toolbar_goods_item_pic {display:none !important;}
.gwd_toolbar_info{display:none !important; visibility:hidden !important; margin-left: -1000000px !important;}
</style>
<script src="{{ asset('/home/js/tag.js') }}" type="text/javascript" async></script><script type="text/javascript">

$(function(){
  var regTitleList = $('#regTitle>a');
  var regDivUlList = $("#regDiv>form>ul");
  var regTipList   = $(".register_tip>span"); //新增,点击 email注册和手机注册,显示不同的提示信息
  regTitleList.each(function(i){
    $(this).click(function(){
      regTitleList.removeClass().addClass('register_emailbtn').eq(i).removeClass().addClass('register_telphonebtn');
      regDivUlList.hide().eq(i).show();
      regTipList.hide().eq(i).show();   //新增,提示信息
    });
  });
   /**去掉文本框的黄色背景**/
   if(window.navigator.userAgent.indexOf("Chrome") >= 0){
      $('input:-webkit-autofill').each(function(){
        var clone =$(this).clone(true,true);
        $(this).after(clone).remove();
      });  
    }
});
  function toQQLogin() {
    window.location.href = "#";
  }
  function toSinaLogin() {
    window.location.href = "#";
  }
  function toXunleiLogin() {
    window.location.href = "#";
  }
  function toAlypayLogin() {
    window.location.href = "#";
  }
  
  
  
  $("#captcha_img").click(function(){
    reset_captcha();
  });
  
  function reset_captcha(){
    
    if($("input[name=captcha]").size()>0){
      document.getElementById('captcha_img').src='captcha.php?'+Math.random();
    }
  }
  
  
</script> 
<script  type="text/javascript">
  
  //发送短信前图片验证码
    function validCodeTc(){
      $(".tcewm").addClass("tcewm1");
    }
  
    function validCodeTcClose(){
      $(".tcewm").addClass("tcewm").removeClass("tcewm1");
    }
  
     function Chat(){
        $('#main').css('display','block');
        showmsg();
        inte = setInterval("showmsg()",2000);
    }

     //及时显示聊天内容
    //利用ajax每间隔2s就去服务器获得一次聊天信息
    var maxID = 0;
    function showmsg(){

         $.ajax({
                type:'GET',
                url:"{{url('/home/chat/showmsg')}}",
                data:{maxID:maxID},
                success:function(data)
                {

                    var s = "";
                    $(data).each(function(i,n){
                        if(n['sender']=='顾客'){
                            var speaker = '我';
                            s += "<p style='color:#417F4B'>"+speaker+"&nbsp;"+n['add_time']+"</p>";
                            s += "<p style='color:"+n['color']+"'>"+n['msg']+"</p>";
                        }else{
                            speaker = '韩都客服';
                            s += "<p style='color:#0075B8'>"+speaker+"&nbsp;"+n['add_time']+"</p>";
                            s += "<p style='color:"+n['color']+"'>"+n['msg']+"</p>";
                        }
                        //把已经获得消息的最大id赋予给maxID
                        maxID = n['id'];
                    });

                    var showdiv = $('#show_msg');
                    var msg = showdiv.html();
                    var aa = msg + s;
                    showdiv.html(aa);

                    var show = $('#show_msg')[0];
                    show.scrollTop = show.scrollHeight;
                    //设置滚动条卷起高度
                    // showdiv.scrollTop = showdiv.scrollHeight;
                    
                },
                error:function()
                {
                    alert("服务器繁忙，请稍等");
                }

            });
        
    }
    

    function sendmsg(){
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
    var fm = $('#Formchat')[0];
    //FormData收集表单信息
    var fd = new FormData(fm);

    //ajax提交表单信息到服务器存储
    
                $.ajax({
                    type:'POST',
                    url:"{{url('/home/chat/sendmsg')}}",
                    data:fd,
                    processData: false,    //必须设置
                    contentType: false,
                    success:function(data){
                        if(data==0){
                           $('#color').val('');
                          $('#msg').val('');
                        }
                    },
                    error:function()
                    {
                        alert("发送失败,请重试");
                    }

                });
                    //必须设置
    }

    function outchat(){
        $('#main').css('display','none');
        clearInterval(inte);
    }

        var did = document.getElementById('main');
        var mw = 0;
        var mh = 0;
        var isDown = false;

        did.onmousedown = function(e)
        {
            isDown = true;
            var _mx = e.pageX;
            var _my = e.pageY;
            var ol = did.offsetLeft;
            var ot = did.offsetTop;

            mw = _mx - ol;
            mh = _my - ot;

            this.style.cursor = 'move';

        }

        window.onmousemove = function(e)
        {
            if(!isDown) return;
            var newmx = e.pageX;
            var newmy = e.pageY;

            dl = newmx - mw;
            dt = newmy - mh;

            did.style.left = dl + 'px';
            did.style.top = dt + 'px';
        }

        did.onmouseup = function()
        {
            isDown = false;
            did.style.cursor = 'default';
        }
</script>

</body>
</html>