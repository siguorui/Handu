
@extends('home.layout')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:wb="http://open.weibo.com/wb"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<meta name="Keywords" content="韩都衣舍,韩都衣舍官网,韩都衣舍官方,实体店,旗舰店,韩都衣舍淘宝店,淘宝网韩都衣舍">
<meta name="Description" content="韩都衣舍官网—韩都衣舍官方旗舰店，韩风快时尚第一品牌。逛韩都衣舍实体店or韩都衣舍淘宝网店？得先进韩都衣舍官网旗舰店。韩都衣舍网上商城支持货到付款，7天无理由退换货。">
<meta property="qc:admins" content="24477314276016456375">
<meta property="wb:webmaster" content="4685b40c88b09b15">
<meta name="360-site-verification" content="4349abb4464a01d4ad000bd63b864ef4">
<title>韩都衣舍-韩都集团旗下品牌官网，涵盖品牌女装、男装、童装、妈妈装、鞋包等品类。正品保证，货到付款！</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/home/css/handu_base.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/home/css/web_index.css') }}">
<script charset="utf-8" src="%E9%9F%A9%E9%83%BD%E8%A1%A3%E8%88%8D-%E9%9F%A9%E9%83%BD%E9%9B%86%E5%9B%A2%E6%97%97%E4%B8%8B%E5%93%81%E7%89%8C%E5%AE%98%E7%BD%91%EF%BC%8C%E6%B6%B5%E7%9B%96%E5%93%81%E7%89%8C%E5%A5%B3%E8%A3%85%E3%80%81%E7%94%B7%E8%A3%85%E3%80%81%E7%AB%A5%E8%A3%85%E3%80%81%E5%A6%88%E5%A6%88%E8%A3%85%E3%80%81%E9%9E%8B%E5%8C%85%E7%AD%89%E5%93%81%E7%B1%BB%E3%80%82%E6%AD%A3%E5%93%81%E4%BF%9D%E8%AF%81%EF%BC%8C%E8%B4%A7%E5%88%B0%E4%BB%98%E6%AC%BE%EF%BC%81_files/v.htm">
</script><script type="text/javascript" id="veConnect" async="" src="{{ asset('/home/js/capture-apps-4.js') }}"></script>
<script src="{{ asset('/home/js/hm.js') }}"></script>
<script async="" src="{{ asset('/home/js/analytics.js') }}"></script>
<script type="text/javascript" async="" charset="utf-8" src="{{ asset('/home/js/ntkfstat.js') }}"></script>
<script src="{{ asset('/home/js/jquery-1.js') }}"></script>
<script src="{{ asset('/home/js/jquery.js') }}"></script>
<script src="{{ asset('/home/js/jquery_002.js') }}"></script>
<script src="{{ asset('/home/js/wb.js') }}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="{{ asset('/home/js/goods_no1214.js') }}"></script>
<style>
/**泰山压顶*/
.seven{
  width: 100%;
  height:800px;
  background: url({{ asset('/home/imgs/1920-8001.jpg') }}) no-repeat top center;
  display: none;
}
.seven_1{width: 100%;height:143px;background: url({{ asset('/home/imgs/taishanyading_01.jpg') }}) no-repeat top center;}
.seven_2{width: 100%;height:143px;background: url({{ asset('/home/imgs/taishanyading_02.jpg') }}) no-repeat top center;}
.seven_3{width: 100%;height:143px;background: url({{ asset('/home/imgs/taishanyading_03.jpg') }}) no-repeat top center;}
.seven_4{width: 100%;height:142px;background: url({{ asset('/home/imgs/taishanyading_04.jpg') }}) no-repeat top center;}
.seven_5{width: 100%;height:143px;background: url({{ asset('/home/imgs/taishanyading_05.jpg') }}) no-repeat top center;}
.seven_6{width: 100%;height:143px;background: url({{ asset('/home/imgs/taishanyading_06.jpg') }}) no-repeat top center;}
.seven_7{width: 100%;height:143px;background: url({{ asset('/home/imgs/taishanyading_07.jpg') }}) no-repeat top center;}
/*首页顶通*/
.index_dt{width:100%;height: 100px;background: url({{ asset('/home/imgs/4.jpg') }}) no-repeat top center;display: none;}
</style>
  <script>
$(function() {
  /*延迟加载*/
  $("img.lazy").lazyload({placeholder: "themes/handuyishe/index/images/1.png') }}", effect:"fadeIn"});
  /*轮播*/
  $.st('#index_lb li','#index_lb .content',{
    'mode':'fade',
    'time':6,
    'Cmouseover':'wait'
  });
  /*新品上市 新轮播*/
  $.st('.tab_brand li','#new_arrial .floor_con',{
    'mode':'fade',
    'time':3,
    'Cmouseover':'wait',
    'on':'hover'
  });
});
</script>
<script type="text/javascript" async="async" charset="utf-8" src="{{ asset('/home/js/zh_cn.js') }}" data-requiremodule="lang"></script>
<script type="text/javascript" async="async" charset="utf-8" src="{{ asset('/home/js/chat.js') }}" data-requiremodule="chatManage">
</script>
<script type="text/javascript" async="async" charset="utf-8" src="{{ asset('/home/js/mqtt31.js') }}" data-requiremodule="MQTT"></script>
<script type="text/javascript" async="async" charset="utf-8" src="{{ asset('/home/js/mqtt.js') }}" data-requiremodule="Connection"></script></head>
<body><div id="nTalk_post_hiddenElement" style="left: -10px; top: -10px; visibility: hidden; display: none; width: 1px; height: 1px;"></div>
 
<style>
html, body {width: 100%;}
#zhucehl {width:174px;height:150px;position: fixed;left: 1%;bottom: 3%; z-index: 260;display: none;}
#left0901 {position: fixed;left: 50%;bottom: 20%; z-index: 260; display:none; margin-left:-740px;}
#left0901 .img002{display:none;}
@media only screen and (max-width: 1460px) {
#left0901 .img002{display:block;}
#left0901 .img001{display:none;}
#left0901{left:50%;margin-left:-685px;}
</style>

<script>
$(function(){
  setTimeout("closehy()",5000);
})
function closehy(){
 $("#light").hide("slow");
 $("#fade").hide();
}
function xuanfu_close(){
  $("#zhucehl").hide();
}
</script> 
 
<style>
#xf_search{width:100%; height:50px; line-height:50px; background:url({{ asset('/home/imgs/sbg.png') }}) repeat-x ;position:fixed; top:0; display:none; z-index: 10000;}
.xf_search_co{width:1200px; margin:0 auto;}
.xf_logo{float:left; width:180px; margin:5px 0 0 40px;}
.xf_font{float:right; color:#fff; font-size:12px; font-family:"宋体";}
#xf_search_s{float:left;width:750px;position:relative;top:9px;}
#xf_search_s .input_noticea{position:relative;}
#xf_search_s .input_noticea label{position:absolute;display:inline-block;text-indent:5px; z-index:1;height:28px; line-height:28px; color:#CCC;;font:16px/28px 'microsoft yahei';}
#xf_search_s .input_noticea .text{position:absolute; z-index:2}
#xf_search_s .input_noticea .text{background: url("data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVQImWNgYGBgAAAABQABh6FO1AAAAABJRU5ErkJggg==") repeat-x scroll 0 0 transparent;}
#xf_search_s .i-searcha{z-index:11;width:733px;height:28px; background: #fff;}
#xf_search_s .form{height:28px;overflow:hidden}
#xf_search_s input{height:28px;border:0;}
#xf_search_s .text,#xf_search_s .button{-webkit-appearance:none;-webkit-border-radius:0}
#xf_search_s .text{width:646px;height:28px; line-height:28px; text-indent:5px; background-position:0 -360px;background-color:#fff;background-repeat:repeat-x;color:#ccc;font-family:arial,"5b8b4f53";font:14px/28px 'microsoft yahei';}
#xf_search_s .button{width:87px;background:#c80a28; position:absolute;top:0px;right:0px;font:16px/28px 'microsoft yahei';color:#fff;letter-spacing: 4px;cursor: pointer;}
</style>
<div id="xf_search" style="display: none;">
  <div class="xf_search_co">
        <div class="xf_logo"><img src="{{ asset('/home/imgs/slogo.png') }}" width="77" height="40"></div>
        <div id="xf_search_s">
          <div class="i-searcha ld">
            <div class="form input_noticea">
              <form method="get" action="search.php">
                <!--<label for="">七夕穿什么见蓝盆友呢？选我选我选我~</label>-->
                <input class="text" name="keywords" value="毛呢外套" onfocus="if (value =='毛呢外套'){value =''}$('') " onblur="if (value ==''){value='毛呢外套'}" type="text">
                <input value="搜索" onclick="_czc.push(['_trackEvent', '搜索', '悬浮搜索', $('input[name=keywords]').val()])" class="button" type="submit">
              </form>
            </div>
          </div>
        </div>  
        <div class="xf_font">没空去韩国？就来韩都衣舍！</div>
    </div>
</div>
<script type="text/javascript">
$('#xf_search_s .input_noticea input').bind({
  'focus':function(){
  $(this).siblings('label').hide();
  },
  'blur':function(){
  if($(this).val()==''){
    $(this).siblings('label').show();
  }
  }
});
window.onscroll=function(){
  var t=document.documentElement.scrollTop||document.body.scrollTop;
  var t1=document.documentElement.scrollTop||document.body.scrollTop;
  if(t>760){
    $('#xf_search').slideDown();
    
  }else{
    $('#xf_search').slideUp();
   
  }
 if(t>760){
    $('#left0901').fadeIn();
    
  }else{
    $('#left0901').fadeOut();
   
  }
  }
</script>

<script type="text/javascript">

</script>
 

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">

<!-- <div style="width:100%;height:150px;min-width:1200px;background:url({{ asset('/home/imgs/dt.jpg') }}) no-repeat center top;">
 <div style="width:1400px; height:100%; position:relative; margin:0 auto;">
  	<a href="http://www.handu.com/topic-423.html" target="_blank" style="display:block; width:100%; height:100%"> 
		<div style="width:1200px; position:absolute;">
		</div>
</a>
	
     
  </div>
</div> -->
     

@section('content')

    <script>
    $(function(){

		$(".yMenuLCon").hide();
		var s = window.location.href;
		if(s.toLowerCase()=="http://www.handu.com" || s.toLowerCase()=="http://www.handu.com/" ||  s.toLowerCase()=="http://www.handu.com/index.html"){
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
<div style="width:100%;overflow:hidden;min-width:1200px;">
  
   <div class="lb_par" style="position:relative;">
  
  <style>
    .lf_bar{width:100%;height:450px;position:absolute;top:0;z-index:220;left:-100%;}
    .lf_bar .btn_img{background:url({{ asset('/home/imgs/arr_l.png') }}) no-repeat; width:35px;height:100%;position:absolute;right:0; cursor:pointer;}
    .lf_bar.on .btn_img{background:url({{ asset('/home/imgs/arr_r.jpg') }}) no-repeat;}
    .q_mov{height:100%;background:url({{ asset('/home/imgs/cr.jpg') }}) no-repeat center top;position:absolute;right:35px;}
  </style>
    
  
  
  <script>
  $(function(){
    var lw = $(".lf_bar").width()-$(".lf_bar .btn_img").width();
    $(".lf_bar").css({"left":-lw+"px"});
    $(".q_mov").css({"width":lw+"px"});
    $(".btn_img").click(function(){
      if($(this).parent().hasClass("on")){
        $(this).parent().stop().animate({"left":"-"+lw+"px"},1000);
        $(this).parent().removeClass("on");
      }else{
        $(this).parent().addClass("on");
        $(this).parent().stop().animate({"left":"0px"},1000);
      }
    });
  });
  </script>
  
  
  <div id="index_lb">
          <div class="content" style="display: none; z-index: 2;">
        <a rel="nofollow" target="_blank" href="http://www.handu.com/topic-423.html">
          <div style="width:100%;background:url({{ asset('/home/imgs/lbb_01.jpg') }}) no-repeat center 0px;height:90px;"></div>
<div style="width:100%;background:url({{ asset('/home/imgs/lbb_02.jpg') }}) no-repeat center 0px;height:90px;"></div>
<div style="width:100%;background:url({{ asset('/home/imgs/lbb_03.jpg') }}) no-repeat center 0px;height:90px;"></div>
<div style="width:100%;background:url({{ asset('/home/imgs/lbb_04.jpg') }}) no-repeat center 0px;height:90px;"></div>
<div style="width:100%;background:url({{ asset('/home/imgs/lbb_05.jpg') }}) no-repeat center 0px;height:90px;"></div>        </a>
      </div>
          <div class="content" style="z-index: 2; display: block; opacity: 0.232087;">
        <a rel="nofollow" target="_blank" href="http://www.handu.com/topic-1566.html">
          <div style="height:90px;width:100%;background:url({{ asset('/home/imgs/ql_01.jpg') }}) no-repeat center 0px;">
</div>
<div style="height:90px;width:100%;background:url({{ asset('/home/imgs/ql_02.jpg') }}) no-repeat center 0px;">
</div>
<div style="height:90px;width:100%;background:url({{ asset('/home/imgs/ql_03.jpg') }}) no-repeat center 0px;">
</div>
<div style="height:90px;width:100%;background:url({{ asset('/home/imgs/ql_04.jpg') }}) no-repeat center 0px;">
</div>
<div style="height:90px;width:100%;background:url({{ asset('/home/imgs/ql_05.jpg') }}) no-repeat center 0px;">
</div>        </a>
      </div>
          <div class="content" style="z-index: 4; display: block; opacity: 0.767913;">
        <a rel="nofollow" target="_blank" href="http://www.handu.com/topic-1506.html">
          <div style="width:100%;background:url({{ asset('/home/imgs/xt_01.jpg') }}) no-repeat center top;height:90px;">
</div>
<div style="width:100%;background:url({{ asset('/home/imgs/xt_02.jpg') }}) no-repeat center top;height:90px;">
</div>
<div style="width:100%;background:url({{ asset('/home/imgs/xt_03.jpg') }}) no-repeat center top;height:90px;">
</div>
<div style="width:100%;background:url({{ asset('/home/imgs/xt_04.jpg') }}) no-repeat center top;height:90px;">
</div>
<div style="width:100%;background:url({{ asset('/home/imgs/xt_05.jpg') }}) no-repeat center top;height:90px;">
</div>        </a>
      </div>
        <ul class="tab">
              <li class="">1212年终盛典</li>
              <li class="">毛呢外套5折封顶</li>
              <li class="on">99元封顶</li>
          </ul>
 </div>
 
<style>
#index_lb {width:100%;overflow:hidden;position:relative;height:450px;}
#index_lb .content {position:absolute;left:0;top:0;width:100%;height:450px;display: none;cursor:pointer;}
#index_lb .tab{width: 100%;position: absolute;bottom: 6px;text-align: center;z-index:11;}
#index_lb .tab>li {display: inline-block;*display: inline;zoom: 1;float: none;width: 120px;line-height:30px;text-align: center;background: #fff;color: #333;font-family:Arial,"微软雅黑";font-size:12px;text-decoration: none;cursor: pointer;margin-right:4px;*margin-right:10px;}
#index_lb .tab>li.on{background:#333333; color:#ffffff}
</style>
</div>  
</div>


<div style="width:100%;background:url({{ asset('/home/imgs/11.jpg') }}) no-repeat center top;height:120px;">
	<div style="width:1200px; margin:0 auto; position:relative; height:120px;">
    	<a href="http://www.handu.com/topic.php?topic_id=1535" target="_blank"><div style="width:100%; height:100%; position:absolute;"></div></a>
    </div>
</div>
<div style="width:100%;background:url({{ asset('/home/imgs/cc.jpg') }}) no-repeat center top;height:200px;">
	<div style="width:1200px; margin:0 auto; position:relative; height:200px;">
    	<a href="http://www.handu.com/topic-1567.html" target="_blank"><div style="width:100%; height:100%; position:absolute;"></div></a>
    </div>
</div>
<style>
#xf_423{width:100%; height:80px; line-height:80px; background:url({{ asset('/home/imgs/tl.jpg') }}) center top no-repeat; z-index:9999;margin-top: 15px;margin-bottom: -15px;}
.xfxd{position:relative; margin:0 auto; width:1200px; height:80px;}
</style>

<div class="wrap">
  
<script type="text/javascript">
  $(function(){
    /*tab事件*/
    $(".tabs").hover(function(){
      var index = $(this).index();
      $(this).addClass("on").siblings().removeClass("on");
      $(".flower_item").hide();
      $(".flower_item").eq(index).show();
    });
    
})
</script>
<script>
$(function(){
	var index_01 = 0;
	var llength = $(".firstP").length;
	var imge = $(".dh_zppleft .firstP");
		imge.hide();
	imge.eq(0).show();
$("#toRight").click(function(){
//点击箭头的时候自动轮播暂时停用
	clearInterval(timer_01);
	   index_01++;
		if ( index_01< llength) {
			imge.hide();
			imge.eq(index_01).show();
		
		}else{
			index_01 = 0;
			imge.hide();
			imge.eq(index_01).show();
		
		};
	
	})
	$(".divhuan").click(function(){
//点击箭头的时候自动轮播暂时停用
	clearInterval(timer_01);
	   index_01++;
		if ( index_01< llength) {
			imge.hide();
			imge.eq(index_01).show();
		
		}else{
			index_01 = 0;
			imge.hide();
			imge.eq(index_01).show();
		
		};
	
	})
//自动轮播方法	
function autoRun(){
	if(index_01<llength-1){
		index_01 =index_01+1;
		}else{
		index_01 = 0;	
		}
		imge.hide();
		imge.eq(index_01).show();
	}
var  timer_01 = setInterval(autoRun,10000);
$(".firstP a").hover(function(){
		clearInterval(timer_01);
		},function(){
		 timer_01 = setInterval(autoRun,10000);
			})
	})
</script>
<div class="hd_zpp" style="margin-top:0;">
  <div class="dh_zppleft">
      <h1 class="t1"></h1>
      <a class="divhuan">换一批</a>
       <div class="toRight" id="toRight"><img src="{{ asset('/home/imgs/bt.png') }}"></div>
       <div style="width:678px; height:293px; position:relative; overflow:hidden;">
       	<div class="firstP" style="display: none;">
            	 <ul>
            <li><a href="http://www.handu.com/brand_topic.php?id=10330" target="_blank" class="pinpainana1"></a></li>
            <li><a href="http://www.handu.com/topic-423.html" target="_blank" class="pinpaiH1"></a></li>
            <li><a href="http://www.handu.com/brand_topic.php?id=10314" target="_blank" class="pinpaifq1"></a></li>
            <li><a href="http://www.handu.com/brand_topic.php?id=319" target="_blank" class="pinpaiS1"></a></li>
            <li><a href="http://www.handu.com/brand_topic.php?id=10142" target="_blank" class="pinpaiD1"></a></li> 
            <li><a href="http://www.handu.com/brand_topic.php?id=10442" target="_blank" class="pinpaiyt1"></a></li> 
            <li><a href="http://www.handu.com/brand_topic.php?id=328" target="_blank" class="pinpaiN1"></a></li>
           	<li><a href="http://www.handu.com/brand_topic.php?id=10687" target="_blank" class="pinpaiCx1"></a></li>
            <li><a href="http://www.handu.com/brand_topic.php?id=10593" target="_blank" class="pinpaibly1"></a></li>
            <!--<li><a href="http://www.handu.com/brand_topic.php?id=10608" target="_blank" class="pinpaijy1"></a></li>-->
            <li><a href="http://www.handu.com/brand_topic.php?id=10470" target="_blank" class="pinpaila1"></a></li>
           <!--<li><a href="http://www.handu.com/topic-1493.html" target="_blank" class="pinpaissg1"></a></li>-->
           <!--<li><a href="http://www.handu.com/topic-1494.html" target="_blank" class="pinpainayi1"></a></li>-->
             <li><a href="http://www.handu.com/topic-1492.html" target="_blank" class="pinpailww1"></a></li>
            <li><a href="http://www.handu.com/brand_topic.php?id=155" target="_blank" class="pinpaiSU1"></a></li>
            <li><a href="http://www.handu.com/brand_topic.php?id=10686" target="_blank" class="pinpaizc1"></a></li> 
            <li><a href="http://www.handu.com/topic-1496.html" target="_blank" class="pinpaikui1"></a></li>
            <li><a href="http://www.handu.com/brand_topic.php?id=22" target="_blank" class="pinpaiA1"></a></li>
            <li><a href="http://www.handu.com/brand_topic.php?id=10469" target="_blank" class="pinpaianma1"></a></li>
       </ul>
            </div>
           <div class="firstP" style="display: block;">
            	  <ul>
	        
           
            <li><a href="http://www.handu.com/brand_topic.php?id=10361" target="_blank" class="pinpaizg1"></a></li>
            <li><a href="http://www.handu.com/topic-1526.html" target="_blank" class="pinpai3u1"></a></li>
            <li><a href="http://www.handu.com/brand_topic.php?id=196" target="_blank" class="pinpaimini1"></a></li>
            <li><a href="http://www.handu.com/brand_topic.php?id=10534" target="_blank" class="pinpaihp1"></a></li>
            <li><a href="http://www.handu.com/brand_topic.php?id=10765" target="_blank" class="pinpaihw1"></a></li>
            <li><a href="http://www.handu.com/brand_topic.php?id=10407" target="_blank" class="pinpaigy1"></a></li> 
   			<li><a href="http://www.handu.com/brand_topic.php?id=10330" target="_blank" class="pinpainana1"></a></li>
            <li><a href="http://www.handu.com/topic-423.html" target="_blank" class="pinpaiH1"></a></li>
            <li><a href="http://www.handu.com/brand_topic.php?id=10314" target="_blank" class="pinpaifq1"></a></li>
            <li><a href="http://www.handu.com/brand_topic.php?id=319" target="_blank" class="pinpaiS1"></a></li>
            <li><a href="http://www.handu.com/brand_topic.php?id=10142" target="_blank" class="pinpaiD1"></a></li> 
            <li><a href="http://www.handu.com/brand_topic.php?id=10442" target="_blank" class="pinpaiyt1"></a></li> 
            <li><a href="http://www.handu.com/brand_topic.php?id=328" target="_blank" class="pinpaiN1"></a></li>
           	<li><a href="http://www.handu.com/brand_topic.php?id=10687" target="_blank" class="pinpaiCx1"></a></li>
           	<li><a href="http://www.handu.com/brand_topic.php?id=10593" target="_blank" class="pinpaibly1"></a></li>
           	<li><a href="http://www.handu.com/brand_topic.php?id=10470" target="_blank" class="pinpaila1"></a></li>
	      		 </ul>
            </div>
       		
       </div>
    </div>
    
    <div class="dh_zppright">
        <div class="con">
            <div class="tabs" style="top:0;left:0;">韩都动态</div>
            <div class="tabs on" style="top:0;left:123px;">明星家族</div>
            <div class="tabs" style="top:0;left:246px;">媒体报道</div>
            <div class="tabs" style="top:0;left:369px;">无穷花开</div>
        </div>
        <div class="flower_list">
            <div class="flower_item" style="display:none;">
                <div class="one">
                    <a href="http://www.handu.com/news/details/24475.html" target="_blank"><h2 style="background:url({{ asset('/home/imgs/230_1.jpg') }}" no-repeat;"><span>韩都衣舍上市获批！成互联网服饰品牌第一股！……</span></h2></a>
                    <ul>
                        <li><a href="http://www.handu.com/news/details/20170.html" target="_blank">韩都衣舍签约亚洲女神朴信惠</a></li>
                        <li><a href="http://www.handu.com/news/details/20172.html" target="_blank">签约朴信惠，韩都衣舍将要做什么？</a></li>
                        <li><a href="http://www.handu.com/news/details/18671.html" target="_blank">中韩首届电商大会召开 韩都衣舍受邀</a></li>
                    </ul>
                </div>
                <div class="one">
                    <a href="http://www.handu.com/topic.php?topic_id=1539" target="_blank"><h2 style="background:url({{ asset('/home/imgs/20160711/12.jpg') }}" no-repeat;"><span>韩风十年 星光十年</span></h2></a>
                    <ul>
                        <li><a href="http://www.handu.com/news/details/15446.html" target="_blank">韩都衣舍旗下男装AMH摘得双11淘品牌冠军</a></li>
                        <li><a href="http://www.handu.com/news/details/13244.html" target="_blank">韩都衣舍多级跳 淘品牌到孵化器</a></li>
                        <li><a href="http://www.handu.com/news/details/19054.html" target="_blank">情人节，韩都老总竟然为数百人戴戒指？</a></li>
                    </ul>
                </div>
            </div>
            <div class="flower_item">
                <div class="two">
                    <h2><a href="http://www.handu.com/topic-1546.html" target="_blank"><img src="{{ asset('/home/imgs/qy2.jpg') }}" width="481" height="174"></a></h2>
                    <ul>
                        <li><span><a href="http://www.handu.com/news/details/20174.html" target="_blank">[详细内容]</a></span><a href="http://www.handu.com/news/details/20174.html" target="_blank">签约三大韩星：韩都衣舍欲书写互联网品牌的中国时尚传奇</a></li>
                        <li><span><a href="http://www.handu.com/news/details/20175.html" target="_blank">[详细内容]</a></span><a href="http://www.handu.com/news/details/20175.html" target="_blank">StarVC为韩都衣舍品牌背书</a></li>
                        <li><span><a href="http://www.handu.com/topic-1501.html" target="_blank">[详细内容]</a></span><a href="http://www.handu.com/topic-1501.html" target="_blank">AMH星势力计划—韩国巨星池昌旭签约发布会</a></li>
                    </ul>
                </div>
            </div>
            <div class="flower_item" style="display:none;">
                <div class="one">
                    <a href="http://www.handu.com/news/details/21165.html" target="_blank"><h2 style="background:url({{ asset('/home/imgs/xp.jpg') }}" no-repeat;"><span>韩都衣舍：一个线上品牌的衍变</span></h2></a>
                    <ul>
                    	 <li><a href="http://www.handu.com/news/details/22298.html" target="_blank">韩都衣舍：阿米巴炸裂</a></li>
                    	 <li><a href="http://www.handu.com/news/details/21051.html" target="_blank">亲们 字母印花T恤最"韩范儿"</a></li>
                    	 <li><a href="http://www.handu.com/news/details/20922.html" target="_blank">韩都衣舍：走向"设计师孵化平台"</a></li>
                        
                    </ul>
                </div>
                <div class="one">
                    <a href="http://www.handu.com/news/details/22704.html" target="_blank"><h2 style="background:url({{ asset('/home/imgs/051.jpg') }}" no-repeat;"><span>韩都衣舍赵迎光："站在时尚门外的时尚品牌掌门人"</span></h2></a>
                    <ul>
                         <li><a href="http://www.handu.com/news/details/20933.html" target="_blank">赵迎光：把决策力从老板放到员工身上</a></li>
                        <li><a href="http://www.handu.com/news/details/18578.html" target="_blank">供应链跟不上互联网？看韩都衣舍怎么做</a></li>
                        <li><a href="http://www.handu.com/news/details/20057.html" target="_blank">"迪葵纳"时尚妈妈装稳居天猫第一</a></li>
                    </ul>
                </div>
            </div>
            <div class="flower_item" style="display:none;">
                <div class="two">
                    <h2><a href="http://www.handu.com/topic-1121.html" target="_blank"><img src="{{ asset('/home/imgs/1.jpg') }}" width="481" height="174"></a></h2>
                    <ul>
                     <li><span><a href="http://www.handu.com/news/details/24048.html" target="_blank">[详细内容]</a></span><a href="http://www.handu.com/news/details/24048.html" target="_blank">韩都公益：为汶上县寅寺镇草桥小学学生送礼物</a></li>
                        <li><span><a href="http://www.handu.com/news/details/24083.html" target="_blank">[详细内容]</a></span><a href="http://www.handu.com/news/details/24083.html" target="_blank">韩都公益：点亮求学光源 草桥无穷花开</a></li>
                        <li><span><a href="http://www.handu.com/news/details/23308.html" target="_blank">[详细内容]</a></span><a href="http://www.handu.com/news/details/23308.html" target="_blank">筑梦留守儿童"公益项目在山东菏泽启动</a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hd_zpp">
  <div class="dh_gg">
 
 <a href="http://www.handu.com/topic-1566.html" target="_blank"><img src="{{ asset('/home/imgs/680.jpg') }}"></a>
  </div>
    <div class="dh_shipin">
<embed wmode="opaque" type="application/x-shockwave-flash" src="{{ asset('/home/swf/tb_ugc_pieces_core_player_loader.swf') }}" allowfullscreen="true" flashvars="scene=taobao_shop" allowscriptaccess="never" width="498" height="316">
    </div>
</div>  
</div>
<div class="wrap">
  
  
  <div class="floor" id="new_arrial" style="margin-top:20px;">
    <h1>
      <ul class="tab_brand">
        <li class=""><a href="http://www.handu.com/topic-423.html" target="_blank"><span>韩风女装</span></a>|</li>
        <li class=""><a href="http://www.handu.com/brand_topic.php?id=10330" target="_blank"><span>甜美少女</span></a>|</li>
        <li class="hover"><a href="http://www.handu.com/brand_topic.php?id=10142" target="_blank"><span>迪葵纳</span></a>|</li>
        <li class=""><a href="http://www.handu.com/brand_topic.php?id=319" target="_blank"><span>简约女装</span></a>|</li>
        <li class=""><a href="http://www.handu.com/brand_topic.php?id=196" target="_blank"><span>韩风童装</span></a>|</li>
      </ul>
    </h1>
    
    
    <style>
      .new_boxs a{position:relative;display:block;float:left;width:100%}
      em.price_11{background:url("{{ asset('/home/imgs/jb02.png') }}") no-repeat 0 0;width: 93px;height:81px;position:absolute;right:0px;bottom:-41px;text-align:center;font-size: 26px;font-weight: bold;color:#fff;font-family: 'Arial';z-index:300; padding-top:41px;line-height:40px;}
    </style>
    
    <ul class="floor_con" style="display: none; z-index: 2;">
      
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1053119.html" title="韩都衣舍2016韩版女装冬装新款纯色显瘦口袋毛呢外套OI5602棽" target="_blank">
            <img src="{{ asset('/home/imgs/1053119_thumb_G_1480576047685.jpg') }}" alt="韩都衣舍2016韩版女装冬装新款纯色显瘦口袋毛呢外套OI5602棽" title="韩都衣舍2016韩版女装冬装新款纯色显瘦口袋毛呢外套OI5602棽">
            
			<script>
     	getGood_price("OI5602");
            </script><em class="price_11">198</em>
            
          </a>
          <ul>
            <!-- <li class="name"><a href="goods-1053119.html"  target="_blank" title="韩都衣舍2016韩版女装冬装新款纯色显瘦口袋毛呢外套OI5602棽">韩都衣舍2016韩版女装冬装新款纯色显瘦口袋毛呢外套OI5602棽</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>198.00</span>
              <del class="old_price">￥898.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1053081.html" title="韩都衣舍2017韩版女装春装新款宽松显瘦长袖套头毛衣RW6513瑒" target="_blank">
            <img src="{{ asset('/home/imgs/1480555714455887270.jpg') }}" alt="韩都衣舍2017韩版女装春装新款宽松显瘦长袖套头毛衣RW6513瑒" title="韩都衣舍2017韩版女装春装新款宽松显瘦长袖套头毛衣RW6513瑒">
            
			<script>
     	getGood_price("RW6513");
            </script><em class="price_11">146</em>
            
          </a>
          <ul>
            <!-- <li class="name"><a href="goods-1053081.html"  target="_blank" title="韩都衣舍2017韩版女装春装新款宽松显瘦长袖套头毛衣RW6513瑒">韩都衣舍2017韩版女装春装新款宽松显瘦长袖套头毛衣RW6513瑒</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>156.00</span>
              <del class="old_price">￥288.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1053048.html" title="韩都衣舍2016韩版女装冬装新款条纹圆领套头长袖毛衣IG7176僥" target="_blank">
            <img src="{{ asset('/home/imgs/1480490605632642717.jpg') }}" alt="韩都衣舍2016韩版女装冬装新款条纹圆领套头长袖毛衣IG7176僥" title="韩都衣舍2016韩版女装冬装新款条纹圆领套头长袖毛衣IG7176僥">
            
			<script>
     	getGood_price("IG7176");
            </script><em class="price_11">126</em>
            
          </a>
          <ul>
            <!-- <li class="name"><a href="goods-1053048.html"  target="_blank" title="韩都衣舍2016韩版女装冬装新款条纹圆领套头长袖毛衣IG7176僥">韩都衣舍2016韩版女装冬装新款条纹圆领套头长袖毛衣IG7176僥</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>136.00</span>
              <del class="old_price">￥248.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1053021.html" title="韩都衣舍2017韩版女装冬装新款宽松显瘦V领毛衣开衫IG6346僥" target="_blank">
            <img src="{{ asset('/home/imgs/1480435372187169866.jpg') }}" alt="韩都衣舍2017韩版女装冬装新款宽松显瘦V领毛衣开衫IG6346僥" title="韩都衣舍2017韩版女装冬装新款宽松显瘦V领毛衣开衫IG6346僥">
            
			<script>
     	getGood_price("IG6346");
            </script><em class="price_11">166</em>
            
          </a>
          <ul>
            <!-- <li class="name"><a href="goods-1053021.html"  target="_blank" title="韩都衣舍2017韩版女装冬装新款宽松显瘦V领毛衣开衫IG6346僥">韩都衣舍2017韩版女装冬装新款宽松显瘦V领毛衣开衫IG6346僥</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>188.00</span>
              <del class="old_price">￥328.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1053002.html" title="韩都衣舍2017韩版女装春新款宽松腰带收腰显瘦连衣裙CQ6592莀" target="_blank">
            <img src="{{ asset('/home/imgs/1480410132357870070.jpg') }}" alt="韩都衣舍2017韩版女装春新款宽松腰带收腰显瘦连衣裙CQ6592莀" title="韩都衣舍2017韩版女装春新款宽松腰带收腰显瘦连衣裙CQ6592莀">
            
			<script>
     	getGood_price("CQ6592");
            </script><em class="price_11">142</em>
            
          </a>
          <ul>
            <!-- <li class="name"><a href="goods-1053002.html"  target="_blank" title="韩都衣舍2017韩版女装春新款宽松腰带收腰显瘦连衣裙CQ6592莀">韩都衣舍2017韩版女装春新款宽松腰带收腰显瘦连衣裙CQ6592莀</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>152.00</span>
              <del class="old_price">￥278.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
          </ul>
    
    <ul class="floor_con" style="z-index: 2; display: block; opacity: 1;">
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1051867.html" title="娜娜日记甜美女装2016冬装冬季外套女加厚学生红色棉服棉衣NP5488" target="_blank"> 
            <img src="{{ asset('/home/imgs/1476043815683026172.jpg') }}" alt="娜娜日记甜美女装2016冬装冬季外套女加厚学生红色棉服棉衣NP5488" title="娜娜日记甜美女装2016冬装冬季外套女加厚学生红色棉服棉衣NP5488">           
			<script>
         getGood_price("NP5488");
            </script><em class="price_11">228</em>
          </a>
          <ul>
           <!-- <li class="name"><a href="goods-1051867.html"  target="_blank" title="娜娜日记甜美女装2016冬装冬季外套女加厚学生红色棉服棉衣NP5488">娜娜日记甜美女装2016冬装冬季外套女加厚学生红色棉服棉衣NP5488</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>279.00</span>
              <del class="old_price">￥648.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1048628.html" title="娜娜日记甜美女装2016冬装新款中长款粉色毛呢外套女NM5673菡" target="_blank"> 
            <img src="{{ asset('/home/imgs/1048628_thumb_G_1480921804904.jpg') }}" alt="娜娜日记甜美女装2016冬装新款中长款粉色毛呢外套女NM5673菡" title="娜娜日记甜美女装2016冬装新款中长款粉色毛呢外套女NM5673菡">           
			<script>
         getGood_price("NM5673");
            </script><em class="price_11">238</em>
          </a>
          <ul>
           <!-- <li class="name"><a href="goods-1048628.html"  target="_blank" title="娜娜日记甜美女装2016冬装新款中长款粉色毛呢外套女NM5673菡">娜娜日记甜美女装2016冬装新款中长款粉色毛呢外套女NM5673菡</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>369.00</span>
              <del class="old_price">￥778.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1048062.html" title="娜娜日记甜美女装2016冬装新款粉色宽松韩版毛呢外套NL5697嬛0809" target="_blank"> 
            <img src="{{ asset('/home/imgs/1048062_thumb_G_1480921732987.jpg') }}" alt="娜娜日记甜美女装2016冬装新款粉色宽松韩版毛呢外套NL5697嬛0809" title="娜娜日记甜美女装2016冬装新款粉色宽松韩版毛呢外套NL5697嬛0809">           
			<script>
         getGood_price("NL5697");
            </script><em class="price_11">278</em>
          </a>
          <ul>
           <!-- <li class="name"><a href="goods-1048062.html"  target="_blank" title="娜娜日记甜美女装2016冬装新款粉色宽松韩版毛呢外套NL5697嬛0809">娜娜日记甜美女装2016冬装新款粉色宽松韩版毛呢外套NL5697嬛0809</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>362.00</span>
              <del class="old_price">￥768.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1048049.html" title="娜娜日记甜美女装2016冬装新款紫灰色短款羽绒服女NK5870冉0809" target="_blank"> 
            <img src="{{ asset('/home/imgs/1048049_thumb_G_1480921676152.jpg') }}" alt="娜娜日记甜美女装2016冬装新款紫灰色短款羽绒服女NK5870冉0809" title="娜娜日记甜美女装2016冬装新款紫灰色短款羽绒服女NK5870冉0809">           
			<script>
         getGood_price("NK5870");
            </script><em class="price_11">299</em>
          </a>
          <ul>
           <!-- <li class="name"><a href="goods-1048049.html"  target="_blank" title="娜娜日记甜美女装2016冬装新款紫灰色短款羽绒服女NK5870冉0809">娜娜日记甜美女装2016冬装新款紫灰色短款羽绒服女NK5870冉0809</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>339.00</span>
              <del class="old_price">￥738.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1048030.html" title="娜娜日记甜美女装2016冬装新款纯色中长款毛呢外套女NP6009媄0809" target="_blank"> 
            <img src="{{ asset('/home/imgs/1048030_thumb_G_1480921653434.jpg') }}" alt="娜娜日记甜美女装2016冬装新款纯色中长款毛呢外套女NP6009媄0809" title="娜娜日记甜美女装2016冬装新款纯色中长款毛呢外套女NP6009媄0809">           
			<script>
         getGood_price("NP6009");
            </script><em class="price_11">285</em>
          </a>
          <ul>
           <!-- <li class="name"><a href="goods-1048030.html"  target="_blank" title="娜娜日记甜美女装2016冬装新款纯色中长款毛呢外套女NP6009媄0809">娜娜日记甜美女装2016冬装新款纯色中长款毛呢外套女NP6009媄0809</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>368.00</span>
              <del class="old_price">￥768.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
        
    </ul>
    
    <ul class="floor_con" style="z-index: 4; display: block; opacity: 0;">
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1050504.html" title="迪葵纳中老年女装秋装新款中年女上衣长袖针织妈妈装外套FQ4666莜" target="_blank">
            <img src="{{ asset('/home/imgs/1050504_thumb_G_1473149859942.jpg') }}" alt="迪葵纳中老年女装秋装新款中年女上衣长袖针织妈妈装外套FQ4666莜" title="迪葵纳中老年女装秋装新款中年女上衣长袖针织妈妈装外套FQ4666莜">
			<script>
         getGood_price("FQ4666");
            </script><em class="price_11">129</em>
          </a>
          <ul>
            <!-- <li class="name"><a href="goods-1050504.html"  target="_blank" title="迪葵纳中老年女装秋装新款中年女上衣长袖针织妈妈装外套FQ4666莜">迪葵纳中老年女装秋装新款中年女上衣长袖针织妈妈装外套FQ4666莜</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>149.00</span>
              <del class="old_price">￥278.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1048879.html" title="迪葵纳秋装新款中老年女装中年妈妈装上衣印花T恤FQ4819莜0816" target="_blank">
            <img src="{{ asset('/home/imgs/1471377054566288931.jpg') }}" alt="迪葵纳秋装新款中老年女装中年妈妈装上衣印花T恤FQ4819莜0816" title="迪葵纳秋装新款中老年女装中年妈妈装上衣印花T恤FQ4819莜0816">
			<script>
         getGood_price("FQ4819");
            </script><em class="price_11">109</em>
          </a>
          <ul>
            <!-- <li class="name"><a href="goods-1048879.html"  target="_blank" title="迪葵纳秋装新款中老年女装中年妈妈装上衣印花T恤FQ4819莜0816">迪葵纳秋装新款中老年女装中年妈妈装上衣印花T恤FQ4819莜0816</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>119.00</span>
              <del class="old_price">￥209.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1047070.html" title="迪葵纳2016秋装新款中老年女装中年妈妈装长袖外套WD4818轩0726" target="_blank">
            <img src="{{ asset('/home/imgs/1469562716159650900.jpg') }}" alt="迪葵纳2016秋装新款中老年女装中年妈妈装长袖外套WD4818轩0726" title="迪葵纳2016秋装新款中老年女装中年妈妈装长袖外套WD4818轩0726">
			<script>
         getGood_price("WD4818");
            </script><em class="price_11">239</em>
          </a>
          <ul>
            <!-- <li class="name"><a href="goods-1047070.html"  target="_blank" title="迪葵纳2016秋装新款中老年女装中年妈妈装长袖外套WD4818轩0726">迪葵纳2016秋装新款中老年女装中年妈妈装长袖外套WD4818轩0726</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>279.00</span>
              <del class="old_price">￥559.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1045020.html" title="迪葵纳春装中年妈妈装时尚上衣中老年女装宽松中长款外套WQ3567沣" target="_blank">
            <img src="{{ asset('/home/imgs/1464810636313310739.jpg') }}" alt="迪葵纳春装中年妈妈装时尚上衣中老年女装宽松中长款外套WQ3567沣" title="迪葵纳春装中年妈妈装时尚上衣中老年女装宽松中长款外套WQ3567沣">
			<script>
         getGood_price("WQ3567");
            </script><em class="price_11">196</em>
          </a>
          <ul>
            <!-- <li class="name"><a href="goods-1045020.html"  target="_blank" title="迪葵纳春装中年妈妈装时尚上衣中老年女装宽松中长款外套WQ3567沣">迪葵纳春装中年妈妈装时尚上衣中老年女装宽松中长款外套WQ3567沣</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>229.00</span>
              <del class="old_price">￥418.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1043140.html" title="迪葵纳2016春装新款中老年女装中年妈妈装蕾丝镶钻针织衫FQ5023莜" target="_blank">
            <img src="{{ asset('/home/imgs/1463169045470056481.jpg') }}" alt="迪葵纳2016春装新款中老年女装中年妈妈装蕾丝镶钻针织衫FQ5023莜" title="迪葵纳2016春装新款中老年女装中年妈妈装蕾丝镶钻针织衫FQ5023莜">
			<script>
         getGood_price("FQ5023");
            </script><em class="price_11">129</em>
          </a>
          <ul>
            <!-- <li class="name"><a href="goods-1043140.html"  target="_blank" title="迪葵纳2016春装新款中老年女装中年妈妈装蕾丝镶钻针织衫FQ5023莜">迪葵纳2016春装新款中老年女装中年妈妈装蕾丝镶钻针织衫FQ5023莜</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>139.00</span>
              <del class="old_price">￥258.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
        
    </ul>
    
    <ul class="floor_con" style="z-index: 2; display: none;">
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1052346.html" title="哲初女装2016新款秋装套头卫衣上衣长袖宽松显瘦刺绣ZZ7064" target="_blank">
            <img src="{{ asset('/home/imgs/1052346_thumb_G_1478143058051.jpg') }}" alt="哲初女装2016新款秋装套头卫衣上衣长袖宽松显瘦刺绣ZZ7064" title="哲初女装2016新款秋装套头卫衣上衣长袖宽松显瘦刺绣ZZ7064">
			<script>
         getGood_price("ZZ7064");
            </script>
          </a>
          <ul>
            <!-- <li class="name"><a href="goods-1052346.html"  target="_blank" title="哲初女装2016新款秋装套头卫衣上衣长袖宽松显瘦刺绣ZZ7064">哲初女装2016新款秋装套头卫衣上衣长袖宽松显瘦刺绣ZZ7064</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>109.00</span>
              <del class="old_price">￥199.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1052344.html" title="哲初女装2016新款秋装卫衣圆领长袖撞色条纹宽松上衣ZZ7106" target="_blank">
            <img src="{{ asset('/home/imgs/1052344_thumb_G_1478142302884.jpg') }}" alt="哲初女装2016新款秋装卫衣圆领长袖撞色条纹宽松上衣ZZ7106" title="哲初女装2016新款秋装卫衣圆领长袖撞色条纹宽松上衣ZZ7106">
			<script>
         getGood_price("ZZ7106");
            </script>
          </a>
          <ul>
            <!-- <li class="name"><a href="goods-1052344.html"  target="_blank" title="哲初女装2016新款秋装卫衣圆领长袖撞色条纹宽松上衣ZZ7106">哲初女装2016新款秋装卫衣圆领长袖撞色条纹宽松上衣ZZ7106</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>89.00</span>
              <del class="old_price">￥159.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1052342.html" title="哲初简约2016冬装新呢子大衣连帽牛角扣中长款毛呢外套女YH6134" target="_blank">
            <img src="{{ asset('/home/imgs/1052342_thumb_G_1478141866343.jpg') }}" alt="哲初简约2016冬装新呢子大衣连帽牛角扣中长款毛呢外套女YH6134" title="哲初简约2016冬装新呢子大衣连帽牛角扣中长款毛呢外套女YH6134">
			<script>
         getGood_price("YH6134");
            </script>
          </a>
          <ul>
            <!-- <li class="name"><a href="goods-1052342.html"  target="_blank" title="哲初简约2016冬装新呢子大衣连帽牛角扣中长款毛呢外套女YH6134">哲初简约2016冬装新呢子大衣连帽牛角扣中长款毛呢外套女YH6134</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>459.00</span>
              <del class="old_price">￥909.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1052296.html" title="哲初女装2016秋装新款宽松短款百搭多穿加厚套头开衫毛衣YZ7150" target="_blank">
            <img src="{{ asset('/home/imgs/1052296_thumb_G_1477991255837.jpg') }}" alt="哲初女装2016秋装新款宽松短款百搭多穿加厚套头开衫毛衣YZ7150" title="哲初女装2016秋装新款宽松短款百搭多穿加厚套头开衫毛衣YZ7150">
			<script>
         getGood_price("YZ7150");
            </script>
          </a>
          <ul>
            <!-- <li class="name"><a href="goods-1052296.html"  target="_blank" title="哲初女装2016秋装新款宽松短款百搭多穿加厚套头开衫毛衣YZ7150">哲初女装2016秋装新款宽松短款百搭多穿加厚套头开衫毛衣YZ7150</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>139.00</span>
              <del class="old_price">￥249.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1052103.html" title="哲初女装2016冬装新款连帽茧型纯色中长款宽松羽绒服ZZ6642" target="_blank">
            <img src="{{ asset('/home/imgs/1052103_thumb_G_1477020213514.jpg') }}" alt="哲初女装2016冬装新款连帽茧型纯色中长款宽松羽绒服ZZ6642" title="哲初女装2016冬装新款连帽茧型纯色中长款宽松羽绒服ZZ6642">
			<script>
         getGood_price("ZZ6642");
            </script>
          </a>
          <ul>
            <!-- <li class="name"><a href="goods-1052103.html"  target="_blank" title="哲初女装2016冬装新款连帽茧型纯色中长款宽松羽绒服ZZ6642">哲初女装2016冬装新款连帽茧型纯色中长款宽松羽绒服ZZ6642</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>398.00</span>
              <del class="old_price">￥799.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
        
    </ul>
    
    <ul class="floor_con" style="z-index: 2; display: none;">
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1052720.html" title="米妮哈鲁童装2016冬装新款女童中大童韩版儿童上衣棉服宝宝棉衣YO4477畵" target="_blank">
            <img src="{{ asset('/home/imgs/1052720_thumb_G_1479449355906.jpg') }}" alt="米妮哈鲁童装2016冬装新款女童中大童韩版儿童上衣棉服宝宝棉衣YO4477畵" title="米妮哈鲁童装2016冬装新款女童中大童韩版儿童上衣棉服宝宝棉衣YO4477畵">
			<script>
        getGood_price("YO4477");
            </script><em class="price_11">223</em>
          </a>
          <ul>
           <!-- <li class="name"><a href="goods-1052720.html"  target="_blank" title="米妮哈鲁童装2016冬装新款女童中大童韩版儿童上衣棉服宝宝棉衣YO4477畵">米妮哈鲁童装2016冬装新款女童中大童韩版儿童上衣棉服宝宝棉衣YO4477畵</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>249.00</span>
              <del class="old_price">￥578.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1052526.html" title="米妮哈鲁童装2016冬装新女童韩版纯色中大童毛衣套头儿童针织衫鋐" target="_blank">
            <img src="{{ asset('/home/imgs/1478745076679190750.jpg') }}" alt="米妮哈鲁童装2016冬装新女童韩版纯色中大童毛衣套头儿童针织衫鋐" title="米妮哈鲁童装2016冬装新女童韩版纯色中大童毛衣套头儿童针织衫鋐">
			<script>
        getGood_price("ZY5015");
            </script><em class="price_11">64</em>
          </a>
          <ul>
           <!-- <li class="name"><a href="goods-1052526.html"  target="_blank" title="米妮哈鲁童装2016冬装新女童韩版纯色中大童毛衣套头儿童针织衫鋐">米妮哈鲁童装2016冬装新女童韩版纯色中大童毛衣套头儿童针织衫鋐</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>69.00</span>
              <del class="old_price">￥198.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1052475.html" title="米妮哈鲁童装冬装连帽女童中长款儿童棉衣棉服YO5629" target="_blank">
            <img src="{{ asset('/home/imgs/1052475_thumb_G_1478577118459.jpg') }}" alt="米妮哈鲁童装冬装连帽女童中长款儿童棉衣棉服YO5629" title="米妮哈鲁童装冬装连帽女童中长款儿童棉衣棉服YO5629">
			<script>
        getGood_price("YO5629");
            </script><em class="price_11">229</em>
          </a>
          <ul>
           <!-- <li class="name"><a href="goods-1052475.html"  target="_blank" title="米妮哈鲁童装冬装连帽女童中长款儿童棉衣棉服YO5629">米妮哈鲁童装冬装连帽女童中长款儿童棉衣棉服YO5629</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>229.00</span>
              <del class="old_price">￥528.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1052431.html" title="米妮哈鲁童装宝宝夹棉加厚外套宝宝上衣2016秋装新款外套YY5017麥" target="_blank">
            <img src="{{ asset('/home/imgs/1052431_thumb_G_1478487805306.jpg') }}" alt="米妮哈鲁童装宝宝夹棉加厚外套宝宝上衣2016秋装新款外套YY5017麥" title="米妮哈鲁童装宝宝夹棉加厚外套宝宝上衣2016秋装新款外套YY5017麥">
			<script>
        getGood_price("YY5017");
            </script><em class="price_11">60</em>
          </a>
          <ul>
           <!-- <li class="name"><a href="goods-1052431.html"  target="_blank" title="米妮哈鲁童装宝宝夹棉加厚外套宝宝上衣2016秋装新款外套YY5017麥">米妮哈鲁童装宝宝夹棉加厚外套宝宝上衣2016秋装新款外套YY5017麥</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>99.00</span>
              <del class="old_price">￥268.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="new_boxs">
          <a href="http://www.handu.com/goods-1052396.html" title="米妮哈鲁童装2016冬季新款男童韩版中大童外套儿童棉服YG5283妤" target="_blank">
            <img src="{{ asset('/home/imgs/1052396_thumb_G_1478243064312.jpg') }}" alt="米妮哈鲁童装2016冬季新款男童韩版中大童外套儿童棉服YG5283妤" title="米妮哈鲁童装2016冬季新款男童韩版中大童外套儿童棉服YG5283妤">
			<script>
        getGood_price("YG5283");
            </script><em class="price_11">163</em>
          </a>
          <ul>
           <!-- <li class="name"><a href="goods-1052396.html"  target="_blank" title="米妮哈鲁童装2016冬季新款男童韩版中大童外套儿童棉服YG5283妤">米妮哈鲁童装2016冬季新款男童韩版中大童外套儿童棉服YG5283妤</a></li>-->
            <li class="price">
              <span class="new_price"><span class="arrow">￥</span>189.00</span>
              <del class="old_price">￥518.00</del>
            </li>
              <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
        
    </ul>
  </div>
  
  <div class="floor" id="floor1">
    <h1>
      
      <div class="keyWord fr">
           <span style="color:#e53333;"><a href="http://www.handu.com/topic-1007.html" target="_blank">双11来啦</a> <a style="white-space:normal;" href="http://www.handu.com/category-255-b0-1-add_time-desc.html" target="_blank">羽绒服</a></span>&nbsp;<a href="http://www.handu.com/category-10727-b0-1-add_time-desc.html" target="_blank">毛呢外套</a>&nbsp;<a href="http://www.handu.com/category-10519-b0-1-add_time-desc.html" target="_blank">棉衣</a>&nbsp;<a style="white-space:normal;" href="http://www.handu.com/category-247-b0-1-add_time-desc.html" target="_blank">连衣裙</a> <a href="http://www.handu.com/category-240-b0-1-add_time-desc.html" target="_blank">毛衣</a>&nbsp;<a href="http://www.handu.com/category-367-b0-1-add_time-desc.html" target="_blank">裤装</a>&nbsp;<a href="http://www.handu.com/topic-423.html" target="_blank">更多&gt;</a>
        </div>
    </h1>
    
    <div class="floor_con">
      <div class="nav_bar">
        <div class="s_img">
           
                                    <a href="http://www.handu.com/topic-1007.html" target="_blank">
                <img data-original="{{ asset('/home/1478063208640570176.jpg') }}" class="lazy" alt="狂欢风暴来袭" title="狂欢风暴来袭" src="{{ asset('/home/imgs/1478063208640570176.jpg') }}" style="display: block;" width="190" height="253">
                <div class="info">狂欢风暴来袭<span class="fr">&gt;</span></div>
              </a>
                         
        </div>
        
        <div class="s_cate">
          
          <div class="s_cate1">
              
              <a href="http://www.handu.com/category-368-b0.html" title="裙装" target="_blank">裙装</a>
              
              <a href="http://www.handu.com/category-247-b0.html" title="连衣裙" target="_blank">连衣裙</a>
              
              <a href="http://www.handu.com/category-240-b0.html" title="毛针织衫" target="_blank">毛针织衫</a>
              
              <a href="http://www.handu.com/category-249-b0.html" title="牛仔裤" target="_blank">牛仔裤</a>
              
              <a href="http://www.handu.com/category-241-b0.html" title="卫衣/绒衫" target="_blank">卫衣/绒衫</a>
              
              <a href="http://www.handu.com/category-10645-b0.html" title="短外套/休闲外套" target="_blank">短外套/休闲外套</a>
              
              <a href="http://www.handu.com/category-242-b0.html" title="T恤" target="_blank">T恤</a>
              
              <a href="http://www.handu.com/category-250-b0.html" title="休闲裤" target="_blank">休闲裤</a>
                      </div>
          
          <div class="s_cate2">
              
              <a href="http://www.handu.com/category-366-b0.html" title="上装" target="_blank">上装</a>
              
              <a href="http://www.handu.com/category-367-b0.html" title="裤装" target="_blank">裤装</a>
              
              <a href="http://www.handu.com/category-368-b0.html" title="裙装" target="_blank">裙装</a>
              
              <a href="http://www.handu.com/category-369-b0.html" title="配饰" target="_blank">配饰</a>
              
              <a href="http://www.handu.com/category-370-b0.html" title="鞋子" target="_blank">鞋子</a>
              
              <a href="http://www.handu.com/category-371-b0.html" title="箱包" target="_blank">箱包</a>
                      </div>
        </div>
      </div>
      <div class="R fl">
        <div class="fl_img">
                                    <a href="http://www.handu.com/topic-423.html" target="_blank"><img data-original="{{ asset('/home/imgs/1481165727968740526.jpg') }}" class="sad1 lazy" alt="夏季清仓" title="夏季清仓" src="{{ asset('/home/imgs/1481165727968740526.jpg') }}" style="display: block;" width="580" height="423"></a>
                      
                                    <a href="http://www.handu.com/category-255-b0-1-add_time-desc.html" target="_blank"><img data-original="{{ asset('/home/1478063505592900293.jpg') }}" class="sad2 lazy" alt="羽绒服专区" title="羽绒服专区" src="{{ asset('/home/imgs/1478063505592900293.jpg') }}" style="display: block;" width="200" height="253"></a>
                              
                                    <a href="http://www.handu.com/category-10727-b0-1-add_time-desc.html" alt="毛呢专区" title="毛呢专区" target="_blank"><img data-original="{{ asset('/home/imgs/1478224404390527058.jpg') }}" class="sad3 lazy" alt="毛呢专区" title="毛呢专区" src="{{ asset('/home/imgs/1478224404390527058.jpg') }}" style="display: block;" width="200" height="160"></a>
                              </div>
        
        <div class="fr_hot">
          <h1>热销排行榜</h1>
          <ul>
                          <li>
                <h2 style="display:none;"><span class="arrow num_1"></span>2016韩版女装秋装新款</h2>
                <ul class="hot_con" style="display:block; ">
                  <li class="hot_img">
                    <a href="http://www.handu.com/goods-1052477.html" title="韩都衣舍2016韩版女装秋装新款连衣裙JM5735.蒖" target="_blank"><img src="{{ asset('/home/imgs/1478790181313567967.jpg') }}" alt="韩都衣舍2016韩版女装秋装新款连衣裙JM5735.蒖" title="韩都衣舍2016韩版女装秋装新款连衣裙JM5735.蒖"></a>
                    <em class="arrow">1</em>
                  </li>
                  <li class="hot_info">
                    <p><a href="http://www.handu.com/goods-1052477.html" target="_blank" title="韩都衣舍2016韩版女装秋装新款连衣裙JM5735.蒖">2016韩版女装秋装新款</a></p>
                    <p><em class="new_price"><span class="arrow">￥</span>153.00</em></p>
                    <p><del class="old_price"><span class="arrow">￥</span>288.00</del></p>
                    <p class="sales">已售出<span class="red">1202</span>笔</p>
                  </li>
                </ul>
              </li>
                          <li>
                <h2><span class="arrow num_2"></span>街头2016秋装新款女装</h2>
                <ul class="hot_con" "="">
                  <li class="hot_img">
                    <a href="http://www.handu.com/goods-1046332.html" title="韩都衣舍街头2016秋装新款女装宽松显瘦三件套休闲套装HH5106" target="_blank"><img src="{{ asset('/home/imgs/1478790210647370049.jpg') }}" alt="韩都衣舍街头2016秋装新款女装宽松显瘦三件套休闲套装HH5106" title="韩都衣舍街头2016秋装新款女装宽松显瘦三件套休闲套装HH5106"></a>
                    <em class="arrow">2</em>
                  </li>
                  <li class="hot_info">
                    <p><a href="http://www.handu.com/goods-1046332.html" target="_blank" title="韩都衣舍街头2016秋装新款女装宽松显瘦三件套休闲套装HH5106">街头2016秋装新款女装</a></p>
                    <p><em class="new_price"><span class="arrow">￥</span>199.00</em></p>
                    <p><del class="old_price"><span class="arrow">￥</span>478.00</del></p>
                    <p class="sales">已售出<span class="red">985</span>笔</p>
                  </li>
                </ul>
              </li>
                          <li>
                <h2><span class="arrow num_3"></span>2016韩版女装冬装新款</h2>
                <ul class="hot_con" "="">
                  <li class="hot_img">
                    <a href="http://www.handu.com/goods-1051344.html" title="韩都衣舍2016韩版女装冬装新款直筒中长款连帽棉服棉衣OR5596槿" target="_blank"><img src="{{ asset('/home/imgs/1478790221295886406.jpg') }}" alt="韩都衣舍2016韩版女装冬装新款直筒中长款连帽棉服棉衣OR5596槿" title="韩都衣舍2016韩版女装冬装新款直筒中长款连帽棉服棉衣OR5596槿"></a>
                    <em class="arrow">3</em>
                  </li>
                  <li class="hot_info">
                    <p><a href="http://www.handu.com/goods-1051344.html" target="_blank" title="韩都衣舍2016韩版女装冬装新款直筒中长款连帽棉服棉衣OR5596槿">2016韩版女装冬装新款</a></p>
                    <p><em class="new_price"><span class="arrow">￥</span>358.00</em></p>
                    <p><del class="old_price"><span class="arrow">￥</span>708.00</del></p>
                    <p class="sales">已售出<span class="red">816</span>笔</p>
                  </li>
                </ul>
              </li>
                          <li>
                <h2><span class="arrow num_4"></span>2016韩版女冬装新款羽</h2>
                <ul class="hot_con" "="">
                  <li class="hot_img">
                    <a href="http://www.handu.com/goods-1051062.html" title="韩都衣舍2016韩版女冬装新款羽绒服GW6157阨" target="_blank"><img src="{{ asset('/home/imgs/1478790232652608046.jpg') }}" alt="韩都衣舍2016韩版女冬装新款羽绒服GW6157阨" title="韩都衣舍2016韩版女冬装新款羽绒服GW6157阨"></a>
                    <em class="arrow">4</em>
                  </li>
                  <li class="hot_info">
                    <p><a href="http://www.handu.com/goods-1051062.html" target="_blank" title="韩都衣舍2016韩版女冬装新款羽绒服GW6157阨">2016韩版女冬装新款羽</a></p>
                    <p><em class="new_price"><span class="arrow">￥</span>348.00</em></p>
                    <p><del class="old_price"><span class="arrow">￥</span>858.00</del></p>
                    <p class="sales">已售出<span class="red">787</span>笔</p>
                  </li>
                </ul>
              </li>
                          <li>
                <h2><span class="arrow num_5"></span>2016韩版女冬新款显瘦</h2>
                <ul class="hot_con" "="">
                  <li class="hot_img">
                    <a href="http://www.handu.com/goods-1051352.html" title="韩都衣舍2016韩版女冬新款显瘦棉衣GW6087阨0920" target="_blank"><img src="{{ asset('/home/imgs/1478057213801233374.jpg') }}" alt="韩都衣舍2016韩版女冬新款显瘦棉衣GW6087阨0920" title="韩都衣舍2016韩版女冬新款显瘦棉衣GW6087阨0920"></a>
                    <em class="arrow">5</em>
                  </li>
                  <li class="hot_info">
                    <p><a href="http://www.handu.com/goods-1051352.html" target="_blank" title="韩都衣舍2016韩版女冬新款显瘦棉衣GW6087阨0920">2016韩版女冬新款显瘦</a></p>
                    <p><em class="new_price"><span class="arrow">￥</span>328.00</em></p>
                    <p><del class="old_price"><span class="arrow">￥</span>718.00</del></p>
                    <p class="sales">已售出<span class="red">770</span>笔</p>
                  </li>
                </ul>
              </li>
                          <li>
                <h2><span class="arrow num_6"></span>2016韩版女冬装新款肩</h2>
                <ul class="hot_con" "="">
                  <li class="hot_img">
                    <a href="http://www.handu.com/goods-1050806.html" title="韩都衣舍2016韩版女冬装新款肩章贴布短款连帽羽绒服DL6093喆" target="_blank"><img src="{{ asset('/home/imgs/1478790310707289754.jpg') }}" alt="韩都衣舍2016韩版女冬装新款肩章贴布短款连帽羽绒服DL6093喆" title="韩都衣舍2016韩版女冬装新款肩章贴布短款连帽羽绒服DL6093喆"></a>
                    <em class="arrow">6</em>
                  </li>
                  <li class="hot_info">
                    <p><a href="http://www.handu.com/goods-1050806.html" target="_blank" title="韩都衣舍2016韩版女冬装新款肩章贴布短款连帽羽绒服DL6093喆">2016韩版女冬装新款肩</a></p>
                    <p><em class="new_price"><span class="arrow">￥</span>358.00</em></p>
                    <p><del class="old_price"><span class="arrow">￥</span>838.00</del></p>
                    <p class="sales">已售出<span class="red">738</span>笔</p>
                  </li>
                </ul>
              </li>
                          <li>
                <h2><span class="arrow num_7"></span>2016韩版女装秋装新款</h2>
                <ul class="hot_con" "="">
                  <li class="hot_img">
                    <a href="http://www.handu.com/goods-1047634.html" title="韩都衣舍2016韩版女装秋装新款宽松显瘦休闲背带牛仔裤GQ5102耒" target="_blank"><img src="{{ asset('/home/imgs/no_picture.gif') }}" alt="韩都衣舍2016韩版女装秋装新款宽松显瘦休闲背带牛仔裤GQ5102耒" title="韩都衣舍2016韩版女装秋装新款宽松显瘦休闲背带牛仔裤GQ5102耒"></a>
                    <em class="arrow">7</em>
                  </li>
                  <li class="hot_info">
                    <p><a href="http://www.handu.com/goods-1047634.html" target="_blank" title="韩都衣舍2016韩版女装秋装新款宽松显瘦休闲背带牛仔裤GQ5102耒">2016韩版女装秋装新款</a></p>
                    <p><em class="new_price"><span class="arrow">￥</span>139.00</em></p>
                    <p><del class="old_price"><span class="arrow">￥</span>308.00</del></p>
                    <p class="sales">已售出<span class="red">699</span>笔</p>
                  </li>
                </ul>
              </li>
                          <li>
                <h2><span class="arrow num_8"></span>2016韩版女装秋装新款</h2>
                <ul class="hot_con" "="">
                  <li class="hot_img">
                    <a href="http://www.handu.com/goods-1046754.html" title="韩都衣舍2016韩版女装秋装新款毛边破洞宽松长裤牛仔裤OR5502" target="_blank"><img src="{{ asset('/home/imgs/1478790245149647651.jpg') }}" alt="韩都衣舍2016韩版女装秋装新款毛边破洞宽松长裤牛仔裤OR5502" title="韩都衣舍2016韩版女装秋装新款毛边破洞宽松长裤牛仔裤OR5502"></a>
                    <em class="arrow">8</em>
                  </li>
                  <li class="hot_info">
                    <p><a href="http://www.handu.com/goods-1046754.html" target="_blank" title="韩都衣舍2016韩版女装秋装新款毛边破洞宽松长裤牛仔裤OR5502">2016韩版女装秋装新款</a></p>
                    <p><em class="new_price"><span class="arrow">￥</span>106.00</em></p>
                    <p><del class="old_price"><span class="arrow">￥</span>248.00</del></p>
                    <p class="sales">已售出<span class="red">697</span>笔</p>
                  </li>
                </ul>
              </li>
                      </ul>
        </div>
      </div>
    </div>
    
    <ul>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1052213.html" alt="韩都衣舍2016冬季新款韩版宽松毛呢外套女OU6246堯" title="韩都衣舍2016冬季新款韩版宽松毛呢外套女OU6246堯" target="_blank">
            <img data-original="{{ asset('/home/imgs/1477565789851415034.jpg') }}" class="lazy" alt="韩都衣舍2016冬季新款韩版宽松毛呢外套女OU6246堯" title="韩都衣舍2016冬季新款韩版宽松毛呢外套女OU6246堯" src="{{ asset('/home/imgs/1477565789851415034.jpg') }}" style="display: block;" width="230">
			<script>
      getGood_price("OU6246");
            </script><em class="price_11">298</em>
              <!--<div class="hot"></div>              -->
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1052213.html" target="_blank" title="韩都衣舍2016冬季新款韩版宽松毛呢外套女OU6246堯">韩都衣舍2016冬季新款韩版宽松毛呢外套女OU6246堯</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">389.00</span>
              <del class="old_price">￥858.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1052142.html" alt="韩都衣舍2016韩版女冬新宽松纯色套头毛衣RW6338瑒" title="韩都衣舍2016韩版女冬新宽松纯色套头毛衣RW6338瑒" target="_blank">
            <img data-original="{{ asset('/home/imges/1477305540472926604.jpg') }}" class="lazy" alt="韩都衣舍2016韩版女冬新宽松纯色套头毛衣RW6338瑒" title="韩都衣舍2016韩版女冬新宽松纯色套头毛衣RW6338瑒" src="{{ asset('/home/imgs/1477305540472926604.jpg') }}" style="display: block;" width="230">
			<script>
      getGood_price("RW6338");
            </script><em class="price_11">136</em>
              <!--              -->
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1052142.html" target="_blank" title="韩都衣舍2016韩版女冬新宽松纯色套头毛衣RW6338瑒">韩都衣舍2016韩版女冬新宽松纯色套头毛衣RW6338瑒</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">163.00</span>
              <del class="old_price">￥298.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1050030.html" alt="韩都衣舍2016韩版女装冬装新款宽松显瘦加厚连帽羽绒服KY6569湲" title="韩都衣舍2016韩版女装冬装新款宽松显瘦加厚连帽羽绒服KY6569湲" target="_blank">
            <img data-original="{{ asset('/home/imgs/1472659329315336856.jpg') }}" class="lazy" alt="韩都衣舍2016韩版女装冬装新款宽松显瘦加厚连帽羽绒服KY6569湲" title="韩都衣舍2016韩版女装冬装新款宽松显瘦加厚连帽羽绒服KY6569湲" src="{{ asset('/home/imgs/1472659329315336856.jpg') }}" style="display: block;" width="230">
			<script>
      getGood_price("KY6569");
            </script><em class="price_11">318</em>
              <!--              <div class="salesNum">已售139件</div>-->
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1050030.html" target="_blank" title="韩都衣舍2016韩版女装冬装新款宽松显瘦加厚连帽羽绒服KY6569湲">韩都衣舍2016韩版女装冬装新款宽松显瘦加厚连帽羽绒服KY6569湲</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">398.00</span>
              <del class="old_price">￥898.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1052258.html" alt="韩都衣舍2016韩版女装冬季新款毛线衣宽松高领套头毛衣NH6301." title="韩都衣舍2016韩版女装冬季新款毛线衣宽松高领套头毛衣NH6301." target="_blank">
            <img data-original="{{ asset('/home/imgs/1052258_thumb_G_1478240285388.jpg') }}" class="lazy" alt="韩都衣舍2016韩版女装冬季新款毛线衣宽松高领套头毛衣NH6301." title="韩都衣舍2016韩版女装冬季新款毛线衣宽松高领套头毛衣NH6301." src="{{ asset('/home/imgs/1052258_thumb_G_1478240285388.jpg') }}" style="display: block;" width="230">
			<script>
      getGood_price("NH6301");
            </script><em class="price_11">158</em>
              <!--              -->
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1052258.html" target="_blank" title="韩都衣舍2016韩版女装冬季新款毛线衣宽松高领套头毛衣NH6301.">韩都衣舍2016韩版女装冬季新款毛线衣宽松高领套头毛衣NH6301.</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">178.00</span>
              <del class="old_price">￥338.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1051983.html" alt="韩都衣舍2016韩版女装秋装新款宽松显瘦拼接套头长袖卫衣AA6779玎" title="韩都衣舍2016韩版女装秋装新款宽松显瘦拼接套头长袖卫衣AA6779玎" target="_blank">
            <img data-original="{{ asset('/home/imgs/1051983_thumb_G_1479713003629.jpg') }}" class="lazy" alt="韩都衣舍2016韩版女装秋装新款宽松显瘦拼接套头长袖卫衣AA6779玎" title="韩都衣舍2016韩版女装秋装新款宽松显瘦拼接套头长袖卫衣AA6779玎" src="{{ asset('/home/imgs/1051983_thumb_G_1479713003629.jpg') }}" style="display: block;" width="230">
			<script>
      getGood_price("AA6779");
            </script><em class="price_11">102</em>
              <!--              -->
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1051983.html" target="_blank" title="韩都衣舍2016韩版女装秋装新款宽松显瘦拼接套头长袖卫衣AA6779玎">韩都衣舍2016韩版女装秋装新款宽松显瘦拼接套头长袖卫衣AA6779玎</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">112.00</span>
              <del class="old_price">￥228.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1052303.html" alt="韩都衣舍2016韩版女装秋装新款连帽针织衫JM6116蒖" title="韩都衣舍2016韩版女装秋装新款连帽针织衫JM6116蒖" target="_blank">
            <img data-original="{{ asset('/home/imgs/1052303_thumb_G_1479982240413.jpg') }}" class="lazy" alt="韩都衣舍2016韩版女装秋装新款连帽针织衫JM6116蒖" title="韩都衣舍2016韩版女装秋装新款连帽针织衫JM6116蒖" src="{{ asset('/home/imgs/1052303_thumb_G_1479982240413.jpg') }}" style="display: block;" width="230">
			<script>
      getGood_price("JM6116");
            </script><em class="price_11">118</em>
              <!--              -->
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1052303.html" target="_blank" title="韩都衣舍2016韩版女装秋装新款连帽针织衫JM6116蒖">韩都衣舍2016韩版女装秋装新款连帽针织衫JM6116蒖</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">138.00</span>
              <del class="old_price">￥258.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1049797.html" alt="韩都衣舍2016韩版女装冬装新款宽松纯色连帽刺绣毛呢外套CQ5963莀" title="韩都衣舍2016韩版女装冬装新款宽松纯色连帽刺绣毛呢外套CQ5963莀" target="_blank">
            <img data-original="{{ asset('/home/imgs/1472246432455498620.jpg') }}" class="lazy" alt="韩都衣舍2016韩版女装冬装新款宽松纯色连帽刺绣毛呢外套CQ5963莀" title="韩都衣舍2016韩版女装冬装新款宽松纯色连帽刺绣毛呢外套CQ5963莀" src="{{ asset('/home/imgs/1472246432455498620.jpg') }}" style="display: block;" width="230">
			<script>
      getGood_price("CQ5963");
            </script><em class="price_11">358</em>
              <!--              -->
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1049797.html" target="_blank" title="韩都衣舍2016韩版女装冬装新款宽松纯色连帽刺绣毛呢外套CQ5963莀">韩都衣舍2016韩版女装冬装新款宽松纯色连帽刺绣毛呢外套CQ5963莀</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">428.00</span>
              <del class="old_price">￥949.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1050263.html" alt="韩都衣舍2016韩版女装秋装新款纯色修身高领毛衣KY5991湲" title="韩都衣舍2016韩版女装秋装新款纯色修身高领毛衣KY5991湲" target="_blank">
            <img data-original="{{ asset('/home/imgs/1472832151773553108.jpg') }}" class="lazy" alt="韩都衣舍2016韩版女装秋装新款纯色修身高领毛衣KY5991湲" title="韩都衣舍2016韩版女装秋装新款纯色修身高领毛衣KY5991湲" src="{{ asset('/home/imgs/1472832151773553108.jpg') }}" style="display: block;" width="230">
			<script>
      getGood_price("KY5991");
            </script><em class="price_11">126</em>
              <!--              -->
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1050263.html" target="_blank" title="韩都衣舍2016韩版女装秋装新款纯色修身高领毛衣KY5991湲">韩都衣舍2016韩版女装秋装新款纯色修身高领毛衣KY5991湲</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">278.00</span>
              <del class="old_price">￥278.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1050048.html" alt="韩都衣舍2016韩版女装冬装新款可脱卸帽中长款羽绒服AA6040玎" title="韩都衣舍2016韩版女装冬装新款可脱卸帽中长款羽绒服AA6040玎" target="_blank">
            <img data-original="{{ asset('/home/imgs/1050048_thumb_G_1473847829301.jpg') }}" class="lazy" alt="韩都衣舍2016韩版女装冬装新款可脱卸帽中长款羽绒服AA6040玎" title="韩都衣舍2016韩版女装冬装新款可脱卸帽中长款羽绒服AA6040玎" src="{{ asset('/home/imgs/1050048_thumb_G_1473847829301.jpg') }}" style="display: block;" width="230">
			<script>
      getGood_price("AA6040");
            </script><em class="price_11">328</em>
              <!--              -->
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1050048.html" target="_blank" title="韩都衣舍2016韩版女装冬装新款可脱卸帽中长款羽绒服AA6040玎">韩都衣舍2016韩版女装冬装新款可脱卸帽中长款羽绒服AA6040玎</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">397.00</span>
              <del class="old_price">￥1078.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1052260.html" alt="韩都衣舍2016韩版女冬新宽松显瘦加厚中长款过膝羽绒服RW5861.瑒" title="韩都衣舍2016韩版女冬新宽松显瘦加厚中长款过膝羽绒服RW5861.瑒" target="_blank">
            <img data-original="{{ asset('/home/imgs/1052260_thumb_G_1480924582028.jpg') }}" class="lazy" alt="韩都衣舍2016韩版女冬新宽松显瘦加厚中长款过膝羽绒服RW5861.瑒" title="韩都衣舍2016韩版女冬新宽松显瘦加厚中长款过膝羽绒服RW5861.瑒" src="{{ asset('/home/imgs/1052260_thumb_G_1480924582028.jpg') }}" style="display: block;" width="230">
			<script>
      getGood_price("RW5861");
            </script><em class="price_11">368</em>
              <!--              -->
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1052260.html" target="_blank" title="韩都衣舍2016韩版女冬新宽松显瘦加厚中长款过膝羽绒服RW5861.瑒">韩都衣舍2016韩版女冬新宽松显瘦加厚中长款过膝羽绒服RW5861.瑒</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">368.00</span>
              <del class="old_price">￥839.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
          </ul>
  </div>

   <!--<a href="http://www.handu.com/topic-1173.html" target="_blank"><img src="{{ asset('/home/imgs/1200-90.jpg') }}" style="margin:15px 0 -15px 0;float:none;"/></a>-->
  
  <div class="floor" id="floor3">
    <h1>
      
      <div class="keyWord fr">
           <a href="http://www.handu.com/category-405-b0.html" target="_blank"></a> <a href="http://www.handu.com/category-10142-b0.html" target="_blank"><span style="color:#e53333;">2016秋装新品</span></a> <a href="http://www.handu.com/category-10144-b0.html" target="_blank">T恤</a> <a href="http://www.handu.com/category-10146-b0.html" target="_blank">毛针织衫</a> <a style="white-space:normal;" href="http://www.handu.com/category-10294-b0.html" target="_blank">套装</a> <a href="http://www.handu.com/category-10150-b0.html" target="_blank">裙装</a> <a href="http://www.handu.com/category-10149-b0.html" target="_blank">裤装</a> <a href="http://www.handu.com/category-10142-b0.html" target="_blank">更多&gt;</a>
      </div>
    </h1>
    
    <div class="floor_con">
      <div class="nav_bar">
        <div class="s_img">
           
                          <a href="http://www.handu.com/category-10151-b0.html" alt="连衣裙专区" title="连衣裙专区" target="_blank">
                <img data-original="{{ asset('/home/imgs/1473844282099831226.jpg') }}" class="lazy" alt="连衣裙专区" title="连衣裙专区" src="{{ asset('/home/imgs/1473844282099831226.jpg') }}" style="display: block;" width="190" height="253">
                <div class="info">连衣裙专区<span class="fr">&gt;</span></div>
              </a>
                              </div>
        
        <div class="s_cate">
          
          <div class="s_cate1">
              
              <a href="http://www.handu.com/category-10144-b0.html" title="T恤" target="_blank">T恤</a>
              
              <a href="http://www.handu.com/category-10145-b0.html" title="衬衫" target="_blank">衬衫</a>
              
              <a href="http://www.handu.com/category-10149-b0.html" title="裤装" target="_blank">裤装</a>
              
              <a href="http://www.handu.com/category-10150-b0.html" title="裙装" target="_blank">裙装</a>
              
              <a href="http://www.handu.com/category-10646-b0.html" title="短外套" target="_blank">短外套</a>
              
              <a href="http://www.handu.com/category-10146-b0.html" title="毛针织衫" target="_blank">毛针织衫</a>
              
              <a href="http://www.handu.com/category-10294-b0.html" title="套装" target="_blank">套装</a>
              
              <a href="http://www.handu.com/category-10176-b0.html" title="风衣" target="_blank">风衣</a>
                      </div>
          
          <div class="s_cate2">
                                          <p><span class="arrow">【活动】</span><a href="http://www.handu.com/topic-748.html" target="_blank">迪葵纳-韩风时尚妈妈装</a></p>
                                    </div>
        </div>
      </div>
      
      <div class="R fl">
        <div class="fl_img">
                                    <a href="http://www.handu.com/brand_topic.php?id=10142" alt="dequanna" title="dequanna" target="_blank"><img data-original="{{ asset('/home/imgs/1479201998458670029.jpg') }}" class="sad4 lazy" alt="dequanna" title="dequanna" src="{{ asset('/home/imgs/1479201998458670029.jpg') }}" style="display: block;" width="790" height="423"></a>
                              </div>
        <div class="fr_img">
                                    <a href="http://www.handu.com/category-10144-b0.html" alt="新款T恤" title="新款T恤" target="_blank"><img data-original="{{ asset('/home/imgs/1473843032943779769.jpg') }}" class="sad6 lazy" alt="新款T恤" title="新款T恤" src="{{ asset('/home/imgs/1473843032943779769.jpg') }}" style="display: block;" width="200" height="293"></a>
                               
                                    <a href="http://www.handu.com/category-10145-b0.html" alt="衬衫" title="衬衫" target="_blank"><img data-original="{{ asset('/home/imgs/1473843060755564096.jpg') }}" class="sad7 lazy" alt="衬衫" title="衬衫" src="{{ asset('/home/imgs/1473843060755564096.jpg') }}" style="display: block;" width="200" height="130"></a>
                              </div>
      </div>
    </div>
    
    <ul>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1051988.html" alt="迪葵纳冬装新款中年妈妈装中老年女装中长款棉服女WQ6050沣1011" title="迪葵纳冬装新款中年妈妈装中老年女装中长款棉服女WQ6050沣1011" target="_blank">
            <img data-original="{{ asset('/home/imgs/1476388212974597930.jpg') }}" class="lazy" alt="迪葵纳冬装新款中年妈妈装中老年女装中长款棉服女WQ6050沣1011" title="迪葵纳冬装新款中年妈妈装中老年女装中长款棉服女WQ6050沣1011" src="{{ asset('/home/imgs/1476388212974597930.jpg') }}" style="display: block;" width="230">
			<script>
        getGood_price("WQ6050");
            </script><em class="price_11">268</em>
          </a>
          <ul>
             <!--<li class="name"><a href="goods-1051988.html" target="_blank" title="迪葵纳冬装新款中年妈妈装中老年女装中长款棉服女WQ6050沣1011">迪葵纳冬装新款中年妈妈装中老年女装中长款棉服女WQ6050沣1011</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">299.00</span>
              <del class="old_price">￥539.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1051821.html" alt="迪葵纳中老年女装秋装中年妈妈装冬装大码修身毛呢外套WQ4937沣" title="迪葵纳中老年女装秋装中年妈妈装冬装大码修身毛呢外套WQ4937沣" target="_blank">
            <img data-original="{{ asset('/home/imgs/1475956202519724667.jpg') }}" class="lazy" alt="迪葵纳中老年女装秋装中年妈妈装冬装大码修身毛呢外套WQ4937沣" title="迪葵纳中老年女装秋装中年妈妈装冬装大码修身毛呢外套WQ4937沣" src="{{ asset('/home/imgs/1475956202519724667.jpg') }}" style="display: block;" width="230">
			<script>
        getGood_price("WQ4937");
            </script><em class="price_11">98</em>
          </a>
          <ul>
             <!--<li class="name"><a href="goods-1051821.html" target="_blank" title="迪葵纳中老年女装秋装中年妈妈装冬装大码修身毛呢外套WQ4937沣">迪葵纳中老年女装秋装中年妈妈装冬装大码修身毛呢外套WQ4937沣</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">179.00</span>
              <del class="old_price">￥749.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1050530.html" alt="迪葵纳秋装新款中老年女装中年妈妈装上衣长袖毛衣FQ6018莜0906" title="迪葵纳秋装新款中老年女装中年妈妈装上衣长袖毛衣FQ6018莜0906" target="_blank">
            <img data-original="{{ asset('/home/imgs/1473191416367578353.jpg') }}" class="lazy" alt="迪葵纳秋装新款中老年女装中年妈妈装上衣长袖毛衣FQ6018莜0906" title="迪葵纳秋装新款中老年女装中年妈妈装上衣长袖毛衣FQ6018莜0906" src="{{ asset('/home/imgs/1473191416367578353.jpg') }}" style="display: block;" width="230">
			<script>
        getGood_price("FQ6018");
            </script><em class="price_11">139</em>
          </a>
          <ul>
             <!--<li class="name"><a href="goods-1050530.html" target="_blank" title="迪葵纳秋装新款中老年女装中年妈妈装上衣长袖毛衣FQ6018莜0906">迪葵纳秋装新款中老年女装中年妈妈装上衣长袖毛衣FQ6018莜0906</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">159.00</span>
              <del class="old_price">￥288.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1049554.html" alt="迪葵纳秋冬中老年女装棉服中年女上衣妈妈装棉衣外套FQ4661莜0823" title="迪葵纳秋冬中老年女装棉服中年女上衣妈妈装棉衣外套FQ4661莜0823" target="_blank">
            <img data-original="{{ asset('/home/imgs/1471981855281044051.jpg') }}" class="lazy" alt="迪葵纳秋冬中老年女装棉服中年女上衣妈妈装棉衣外套FQ4661莜0823" title="迪葵纳秋冬中老年女装棉服中年女上衣妈妈装棉衣外套FQ4661莜0823" src="{{ asset('/home/imgs/1471981855281044051.jpg') }}" style="display: block;" width="230">
			<script>
        getGood_price("FQ4661");
            </script><em class="price_11">209</em>
          </a>
          <ul>
             <!--<li class="name"><a href="goods-1049554.html" target="_blank" title="迪葵纳秋冬中老年女装棉服中年女上衣妈妈装棉衣外套FQ4661莜0823">迪葵纳秋冬中老年女装棉服中年女上衣妈妈装棉衣外套FQ4661莜0823</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">249.00</span>
              <del class="old_price">￥439.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1047050.html" alt="迪葵纳秋装新款中年女装中老年妈妈装上衣大花T恤FQ4872莜0726" title="迪葵纳秋装新款中年女装中老年妈妈装上衣大花T恤FQ4872莜0726" target="_blank">
            <img data-original="{{ asset('/home/imgs/1469562657423732422.jpg') }}" class="lazy" alt="迪葵纳秋装新款中年女装中老年妈妈装上衣大花T恤FQ4872莜0726" title="迪葵纳秋装新款中年女装中老年妈妈装上衣大花T恤FQ4872莜0726" src="{{ asset('/home/imgs/1469562657423732422.jpg') }}" style="display: block;" width="230">
			<script>
        getGood_price("FQ4872");
            </script><em class="price_11">109</em>
          </a>
          <ul>
             <!--<li class="name"><a href="goods-1047050.html" target="_blank" title="迪葵纳秋装新款中年女装中老年妈妈装上衣大花T恤FQ4872莜0726">迪葵纳秋装新款中年女装中老年妈妈装上衣大花T恤FQ4872莜0726</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">129.00</span>
              <del class="old_price">￥239.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
          </ul>
  </div>
 
  <div class="floor" id="floor4">
    <h1>
      
      <div class="keyWord fr">
           <a href="http://www.handu.com/category-10338-b0.html" target="_blank">衬衫</a> <a href="http://www.handu.com/category-10385-b0.html" target="_blank">套装</a> <a href="http://www.handu.com/category-10333-b0.html" target="_blank">裙装</a> <a href="http://www.handu.com/category-10332-b0.html" target="_blank">裤装</a> <a style="color:#e53333;" href="http://www.handu.com/category-10334-b0.html" target="_blank">T恤</a> <a href="http://www.handu.com/topic-1173.html" target="_blank">更多&gt;</a>                                                            </div>
    </h1>
    
    <div class="floor_con">
      <div class="nav_bar">
        <div class="s_img">
           
                          <a href="http://www.handu.com/category-10330-b0-1-add_time-desc.html" alt="新品主义" title="新品主义" target="_blank">
                <img data-original="{{ asset('/home/imgs/1473844515129901141.jpg') }}" class="lazy" alt="新品主义" title="新品主义" src="{{ asset('/home/imgs/1473844515129901141.jpg') }}" style="display: block;" width="190" height="253">
                <div class="info">新品主义<span class="fr">&gt;</span></div>
              </a>
                              </div>
        
        <div class="s_cate">
          
          <div class="s_cate1">
              
              <a href="http://www.handu.com/category-10333-b0.html" target="_blank">裙装</a>
              
              <a href="http://www.handu.com/category-10332-b0.html" target="_blank">裤装</a>
              
              <a href="http://www.handu.com/category-10380-b0.html" target="_blank">短外套</a>
              
              <a href="http://www.handu.com/category-10334-b0.html" target="_blank">T恤</a>
              
              <a href="http://www.handu.com/category-10341-b0.html" target="_blank">卫衣/绒衫</a>
                      </div>
          
          <div class="s_cate2">
              
              <!--<a href="topic-1173.html" target="_blank"></a>-->
              <p><span class="arrow">【活动】</span><a href="http://www.handu.com/topic-1173.html" target="_blank">娜娜日记-韩风甜美少女装</a></p>
                      </div>
        </div>
      </div>
      
      <div class="R fl">
        <div class="fl_img">
                                    <a href="http://www.handu.com/brand_topic.php?id=10330" alt="娜娜日记甜美女装" title="娜娜日记甜美女装" target="_blank"><img data-original="{{ asset('/home/imgs/1479264165103436988.jpg') }}" class="sad4 lazy" alt="娜娜日记甜美女装" title="娜娜日记甜美女装" src="{{ asset('/home/imgs/1479264165103436988.jpg') }}" style="display: block;" width="790" height="423"></a>
                              </div>
        <div class="fr_img">
           
            <a href="http://www.handu.com/category-10334-b0.html" title="T恤" target="_blank"><img data-original="{{ asset('/home/imgs/1474162303514841236.jpg') }}" class="sad11 lazy" alt="T恤" title="T恤" src="{{ asset('/home/imgs/1474162303514841236.jpg') }}" style="display: block;" width="200" height="135"></a>
           
            <a href="http://www.handu.com/category-10338-b0.html" title="衬衫" target="_blank"><img data-original="{{ asset('/home/imgs/1474163664361342188.jpg') }}" class="sad11 lazy" alt="衬衫" title="衬衫" src="{{ asset('/home/imgs/1474163664361342188.jpg') }}" style="display: block;" width="200" height="135"></a>
           
            <a href="http://www.handu.com/category-10333-b0.html" title="美美裙装" target="_blank"><img data-original="{{ asset('/home/imgs/1474163383120353066.jpg') }}" class="sad11 lazy" alt="美美裙装" title="美美裙装" src="{{ asset('/home/imgs/1474163383120353066.jpg') }}" style="display: block;" width="200" height="135"></a>
                  </div>
      </div>
    </div>
    
    <ul>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1051564.html" alt="娜娜日记甜美女装2016冬装新款冬季外套中长款羽绒服女加厚NP6266" title="娜娜日记甜美女装2016冬装新款冬季外套中长款羽绒服女加厚NP6266" target="_blank">
            <img data-original="{{ asset('/home/imgs/1474834236468808448.jpg') }}" class="lazy" alt="娜娜日记甜美女装2016冬装新款冬季外套中长款羽绒服女加厚NP6266" title="娜娜日记甜美女装2016冬装新款冬季外套中长款羽绒服女加厚NP6266" src="{{ asset('/home/imgs/1474834236468808448.jpg') }}" style="display: block;" width="230">
			<script>
      getGood_price("NP6266");
            </script><em class="price_11">319</em>
          </a>
          <ul>
             <!--<li class="name"><a href="goods-1051564.html" target="_blank" title="娜娜日记甜美女装2016冬装新款冬季外套中长款羽绒服女加厚NP6266">娜娜日记甜美女装2016冬装新款冬季外套中长款羽绒服女加厚NP6266</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">355.00</span>
              <del class="old_price">￥708.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1050084.html" alt="娜娜日记甜美女装2016冬装新款中长款紫色加厚羽绒服NK5969冉0831" title="娜娜日记甜美女装2016冬装新款中长款紫色加厚羽绒服NK5969冉0831" target="_blank">
            <img data-original="{{ asset('/home/imgs/1050084_thumb_G_1479982380724.jpg') }}" class="lazy" alt="娜娜日记甜美女装2016冬装新款中长款紫色加厚羽绒服NK5969冉0831" title="娜娜日记甜美女装2016冬装新款中长款紫色加厚羽绒服NK5969冉0831" src="{{ asset('/home/imgs/1050084_thumb_G_1479982380724.jpg') }}" style="display: block;" width="230">
			<script>
      getGood_price("NK5969");
            </script><em class="price_11">319</em>
          </a>
          <ul>
             <!--<li class="name"><a href="goods-1050084.html" target="_blank" title="娜娜日记甜美女装2016冬装新款中长款紫色加厚羽绒服NK5969冉0831">娜娜日记甜美女装2016冬装新款中长款紫色加厚羽绒服NK5969冉0831</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">349.00</span>
              <del class="old_price">￥778.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1049456.html" alt="娜娜日记甜美女装2016冬装新款蓝色中长款毛呢外套女NL6013嬛0822" title="娜娜日记甜美女装2016冬装新款蓝色中长款毛呢外套女NL6013嬛0822" target="_blank">
            <img data-original="{{ asset('/home/imgs/1049456_thumb_G_1479982312900.jpg') }}" class="lazy" alt="娜娜日记甜美女装2016冬装新款蓝色中长款毛呢外套女NL6013嬛0822" title="娜娜日记甜美女装2016冬装新款蓝色中长款毛呢外套女NL6013嬛0822" src="{{ asset('/home/imgs/1049456_thumb_G_1479982312900.jpg') }}" style="display: block;" width="230">
			<script>
      getGood_price("NL6013");
            </script><em class="price_11">238</em>
          </a>
          <ul>
             <!--<li class="name"><a href="goods-1049456.html" target="_blank" title="娜娜日记甜美女装2016冬装新款蓝色中长款毛呢外套女NL6013嬛0822">娜娜日记甜美女装2016冬装新款蓝色中长款毛呢外套女NL6013嬛0822</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">325.00</span>
              <del class="old_price">￥718.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1049069.html" alt="娜娜日记甜美女装2016秋装新款蓝色休闲运动套装女NK6085冉0818" title="娜娜日记甜美女装2016秋装新款蓝色休闲运动套装女NK6085冉0818" target="_blank">
            <img data-original="{{ asset('/home/imgs/1049069_thumb_G_1473844943239.jpg') }}" class="lazy" alt="娜娜日记甜美女装2016秋装新款蓝色休闲运动套装女NK6085冉0818" title="娜娜日记甜美女装2016秋装新款蓝色休闲运动套装女NK6085冉0818" src="{{ asset('/home/imgs/1049069_thumb_G_1473844943239.jpg') }}" style="display: block;" width="230">
			<script>
      getGood_price("NK6085");
            </script><em class="price_11">95</em>
          </a>
          <ul>
             <!--<li class="name"><a href="goods-1049069.html" target="_blank" title="娜娜日记甜美女装2016秋装新款蓝色休闲运动套装女NK6085冉0818">娜娜日记甜美女装2016秋装新款蓝色休闲运动套装女NK6085冉0818</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">122.00</span>
              <del class="old_price">￥278.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1047222.html" alt="娜娜日记甜美女装2016秋装新款白色圆领贴布针织衫NL6078嬛0728" title="娜娜日记甜美女装2016秋装新款白色圆领贴布针织衫NL6078嬛0728" target="_blank">
            <img data-original="{{ asset('/home/imgs/1047222_thumb_G_1473842968874.jpg') }}" class="lazy" alt="娜娜日记甜美女装2016秋装新款白色圆领贴布针织衫NL6078嬛0728" title="娜娜日记甜美女装2016秋装新款白色圆领贴布针织衫NL6078嬛0728" src="{{ asset('/home/imgs/1047222_thumb_G_1473842968874.jpg') }}" style="display: block;" width="230">
			<script>
      getGood_price("NL6078");
            </script><em class="price_11">109</em>
          </a>
          <ul>
             <!--<li class="name"><a href="goods-1047222.html" target="_blank" title="娜娜日记甜美女装2016秋装新款白色圆领贴布针织衫NL6078嬛0728">娜娜日记甜美女装2016秋装新款白色圆领贴布针织衫NL6078嬛0728</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">128.00</span>
              <del class="old_price">￥248.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
          </ul>
  </div>
  
  <!--广告 banner
  
    <a target="_blank" class="gg_banner" href="http://www.handu.com/topic-1086.html" title="韩都衣舍“无线”专享"><img  title="韩都衣舍“无线”专享" alt="韩都衣舍“无线”专享" data-original="{{ asset('/home/imgs/1426817250388951131.jpg') }}" class="lazy"/></a>
       
         
  -->
  
  
  <div class="floor" id="floor5">
    <h1>
      
      <div class="keyWord fr">
          <a href="http://www.handu.com/category-196-b0-1-add_time-desc.html" target="_blank"><span style="color:#e53333;">2016秋装新品</span></a><a style="white-space:normal;" href="http://www.handu.com/category-206-b0.html" target="_blank">T恤</a> <a style="white-space:normal;" href="http://www.handu.com/category-227-b0.html" target="_blank">衬衫</a> <a href="http://www.handu.com/category-210-b0-1-add_time-desc.html" target="_blank">套装</a><a href="http://www.handu.com/category-10549-b0.html" target="_blank">裙装</a> <a href="http://www.handu.com/category-207-b0.html" target="_blank">卫衣/绒衫</a> <a href="http://www.handu.com/category-376-b0.html" target="_blank">裤装</a> <a href="http://www.handu.com/topic-347.html" target="_blank">更多&gt;</a>                                                                                                                  </div>
    </h1>
    
    <div class="floor_con">
      <div class="nav_bar">
        <div class="s_img">
           
                          <a href="http://www.handu.com/category-196-b0-1-add_time-desc.html" alt="新品6折发售" title="新品6折发售" target="_blank">
                <img data-original="{{ asset('/home/imgs/1439437484910713295.jpg') }}" class="lazy" alt="新品6折发售" title="新品6折发售" src="{{ asset('/home/imgs/1439437484910713295.jpg') }}" style="display: block;" width="190" height="253">
                <div class="info">新品6折发售<span class="fr">&gt;</span></div>
              </a>
                              </div>
        
        <div class="s_cate">
          
          <div class="s_cate1">
              
              <a href="http://www.handu.com/category-207-b0.html" target="_blank">卫衣/绒衫</a>
              
              <a href="http://www.handu.com/category-212-b0.html" target="_blank">牛仔裤</a>
              
              <a href="http://www.handu.com/category-210-b0.html" target="_blank">套装</a>
              
              <a href="http://www.handu.com/category-227-b0.html" target="_blank">衬衫</a>
              
              <a href="http://www.handu.com/category-10709-b0.html" target="_blank">外套/夹克/大衣</a>
              
              <a href="http://www.handu.com/category-206-b0.html" target="_blank">T恤</a>
              
              <a href="http://www.handu.com/category-211-b0.html" target="_blank">连衣裙</a>
              
              <a href="http://www.handu.com/category-200-b0.html" target="_blank">毛衣/针织衫</a>
              
              <a href="http://www.handu.com/category-213-b0.html" target="_blank">打底裤</a>
              
              <a href="http://www.handu.com/category-215-b0.html" target="_blank">半身裙</a>
              
              <a href="http://www.handu.com/category-214-b0.html" target="_blank">休闲裤</a>
              
              <a href="http://www.handu.com/category-10394-b0.html" target="_blank">马甲</a>
                      </div>
          
          <div class="s_cate2">
              
              <!--<a href="topic-347.html" target="_blank"></a>-->
              <p><span class="arrow">【活动】</span><a href="http://www.handu.com/topic-347.html" target="_blank">MiniZaru-韩风快时尚童装</a></p>
                      </div>
        </div>
      </div>
      
      <div class="R fl">
        <div class="fl_img">
                                    <a href="http://www.handu.com/brand_topic.php?id=196" alt="Minizaru童装" title="Minizaru童装" target="_blank"><img data-original="{{ asset('/home/imgs/1479262852372666217.jpg') }}" class="sad4 lazy" alt="Minizaru童装" title="Minizaru童装" src="{{ asset('/home/imgs/1479262852372666217.jpg') }}" style="display: block;" width="790" height="423"></a>
                              </div>
        <div class="fr_img">
           
            <a href="http://www.handu.com/category-210-b0-1-add_time-desc.html" title="精选套装" target="_blank"><img data-original="{{ asset('/home/imgs/1474164497929559238.jpg') }}" class="sad8 lazy" alt="精选套装" title="精选套装" src="{{ asset('/home/imgs/1474164497929559238.jpg') }}" style="display: block;" width="200" height="206"></a>
           
            <a href="http://www.handu.com/category-376-b0.html" title="热卖裤装" target="_blank"><img data-original="{{ asset('/home/imgs/1474164336971661369.jpg') }}" class="sad8 lazy" alt="热卖裤装" title="热卖裤装" src="{{ asset('/home/imgs/1474164336971661369.jpg') }}" style="display: block;" width="200" height="206"></a>
                  </div>
      </div>
    </div>
    
    <ul>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1052473.html" title="米妮哈鲁童装羽绒服2016冬装新款女童连帽儿童中长款厚羽绒服XE5478駺" target="_blank">
            <img data-original="{{ asset('/home/imgs/1052473_thumb_G_1478574450357.jpg') }}" class="lazy" alt="米妮哈鲁童装羽绒服2016冬装新款女童连帽儿童中长款厚羽绒服XE5478駺" title="米妮哈鲁童装羽绒服2016冬装新款女童连帽儿童中长款厚羽绒服XE5478駺" src="{{ asset('/home/imgs/1052473_thumb_G_1478574450357.jpg') }}" style="display: block;" width="230">
			<script>
         getGood_price("XE5478");
            </script><em class="price_11">299</em>
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1052473.html" target="_blank" title="米妮哈鲁童装羽绒服2016冬装新款女童连帽儿童中长款厚羽绒服XE5478駺">米妮哈鲁童装羽绒服2016冬装新款女童连帽儿童中长款厚羽绒服XE5478駺</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">299.00</span>
              <del class="old_price">￥788.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1052677.html" title="米妮哈鲁童装2016冬装新款女童连帽上衣儿童羽绒服轻薄款XC5040" target="_blank">
            <img data-original="{{ asset('/home/imgs/1052677_thumb_G_1479289046312.jpg') }}" class="lazy" alt="米妮哈鲁童装2016冬装新款女童连帽上衣儿童羽绒服轻薄款XC5040" title="米妮哈鲁童装2016冬装新款女童连帽上衣儿童羽绒服轻薄款XC5040" src="{{ asset('/home/imgs/1052677_thumb_G_1479289046312.jpg') }}" style="display: block;" width="230">
			<script>
         getGood_price("XC5040");
            </script><em class="price_11">239</em>
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1052677.html" target="_blank" title="米妮哈鲁童装2016冬装新款女童连帽上衣儿童羽绒服轻薄款XC5040">米妮哈鲁童装2016冬装新款女童连帽上衣儿童羽绒服轻薄款XC5040</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">239.00</span>
              <del class="old_price">￥568.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1052666.html" title="米妮哈鲁童装2016冬装新款男童中大童韩版短款连帽羽绒服ZW4515熣" target="_blank">
            <img data-original="{{ asset('/home/imgs/1479277416691882071.jpg') }}" class="lazy" alt="米妮哈鲁童装2016冬装新款男童中大童韩版短款连帽羽绒服ZW4515熣" title="米妮哈鲁童装2016冬装新款男童中大童韩版短款连帽羽绒服ZW4515熣" src="{{ asset('/home/imgs/1479277416691882071.jpg') }}" style="display: block;" width="230">
			<script>
         getGood_price("ZW4515");
            </script><em class="price_11">297</em>
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1052666.html" target="_blank" title="米妮哈鲁童装2016冬装新款男童中大童韩版短款连帽羽绒服ZW4515熣">米妮哈鲁童装2016冬装新款男童中大童韩版短款连帽羽绒服ZW4515熣</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">297.00</span>
              <del class="old_price">￥678.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1052527.html" title="米妮哈鲁童装16冬中长款女童羽绒服ZY5786 鋐" target="_blank">
            <img data-original="{{ asset('/home/imgs/1052527_thumb_G_1478747043016.jpg') }}" class="lazy" alt="米妮哈鲁童装16冬中长款女童羽绒服ZY5786 鋐" title="米妮哈鲁童装16冬中长款女童羽绒服ZY5786 鋐" src="{{ asset('/home/imgs/1052527_thumb_G_1478747043016.jpg') }}" style="display: block;" width="230">
			<script>
         getGood_price("ZY5786");
            </script><em class="price_11">204</em>
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1052527.html" target="_blank" title="米妮哈鲁童装16冬中长款女童羽绒服ZY5786 鋐">米妮哈鲁童装16冬中长款女童羽绒服ZY5786 鋐</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">299.00</span>
              <del class="old_price">￥758.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1052410.html" title="米妮哈鲁童装2016冬装新款男童中大童韩版连帽加厚羽绒服YO4544熣" target="_blank">
            <img data-original="{{ asset('/home/imgs/1052410_thumb_G_1478249311239.jpg') }}" class="lazy" alt="米妮哈鲁童装2016冬装新款男童中大童韩版连帽加厚羽绒服YO4544熣" title="米妮哈鲁童装2016冬装新款男童中大童韩版连帽加厚羽绒服YO4544熣" src="{{ asset('/home/imgs/1052410_thumb_G_1478249311239.jpg') }}" style="display: block;" width="230">
			<script>
         getGood_price("YO4544");
            </script><em class="price_11">214</em>
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1052410.html" target="_blank" title="米妮哈鲁童装2016冬装新款男童中大童韩版连帽加厚羽绒服YO4544熣">米妮哈鲁童装2016冬装新款男童中大童韩版连帽加厚羽绒服YO4544熣</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">270.00</span>
              <del class="old_price">￥698.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
          </ul>
  </div>
  
  
  <div class="floor" id="floor7">
    <h1>
      
      <div class="keyWord fr">
          <a href="http://www.handu.com/category-329-b0.html" target="_blank">T恤</a> <a href="http://www.handu.com/category-330-b0.html" target="_blank">衬衫</a> <a href="http://www.handu.com/category-331-b0.html" target="_blank">蕾丝雪纺</a> <a href="http://www.handu.com/category-332-b0.html" target="_blank">连衣裙</a> <a style="white-space:normal;" href="http://www.handu.com/category-332-b0-1-add_time-desc.html" target="_blank">连衣裙</a> <a href="http://www.handu.com/category-382-b0-1-add_time-desc.html" target="_blank">裤装</a> <a href="http://www.handu.com/topic-503.html" target="_blank">更多&gt;</a>  
        </div>
    </h1>
    
    <div class="floor_con">
      <div class="nav_bar">
        <div class="s_img">
           <a href="http://www.handu.com/category-328-b0-1-add_time-desc.html" title="出游正当季 新品起航" target="_blank">
                  <img data-original="{{ asset('/home/imgs/1474165220867840508.jpg') }}" class="lazy" alt="出游正当季 新品起航" title="出游正当季 新品起航" src="{{ asset('/home/imgs/1474165220867840508.jpg') }}" style="display: block;" width="190" height="253">
                  <div class="info">出游正当季 新品起航<span class="fr">&gt;</span></div>
               </a>
           </div>
        
        <div class="s_cate">
          
          <div class="s_cate1">
              
               <a href="http://www.handu.com/category-386-b0.html" target="_blank">毛针织衫</a>
              
               <a href="http://www.handu.com/category-332-b0.html" target="_blank">连衣裙</a>
              
               <a href="http://www.handu.com/category-365-b0.html" target="_blank">卫衣/绒衫</a>
              
               <a href="http://www.handu.com/category-10287-b0.html" target="_blank">休闲裤</a>
              
               <a href="http://www.handu.com/category-329-b0.html" target="_blank">T恤</a>
              
               <a href="http://www.handu.com/category-330-b0.html" target="_blank">衬衫</a>
              
               <a href="http://www.handu.com/category-331-b0.html" target="_blank">蕾丝衫/雪纺衫</a>
              
               <a href="http://www.handu.com/category-10795-b0.html" target="_blank">休闲外套</a>
                       </div>
          
          <div class="s_cate2">
             
              <!--<a href="topic-503.html" target="_blank"></a>-->
              <p><span class="arrow">【活动】</span><a href="http://www.handu.com/topic-503.html" target="_blank">Nibbuns-欧美快时尚女装</a></p>
                      </div>
        </div>
      </div>
      
      <div class="R fl">
        <div class="fl_img">
                                    <a href="http://www.handu.com/brand_topic.php?id=328" title="niBBuns女装" target="_blank"><img data-original="{{ asset('/home/imgs/1479194830306011154.jpg') }}" class="sad4 lazy" alt="niBBuns女装" title="niBBuns女装" src="{{ asset('/home/imgs/1479194830306011154.jpg') }}" style="display: block;" width="790" height="423"></a>
                              </div>
        <div class="fr_img">
           
                           <a href="http://www.handu.com/category-381-b0.html" title="" target="_blank"><img data-original="{{ asset('/home/imgs/1474165261333459852.jpg') }}" class="sad12 lazy" alt="" title="" src="{{ asset('/home/imgs/1474165261333459852.jpg') }}" style="display: block;" width="200" height="423"></a>
                                 </div>
      </div>
    </div>
    
    <ul>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1051198.html" title="尼班诗欧美2016冬装新款女装贴布羽绒服女中长款女WUP2036裳0918" target="_blank">
            <img data-original="{{ asset('/home/imgs/1051198_thumb_G_1480922904759.jpg') }}" class="lazy" alt="尼班诗欧美2016冬装新款女装贴布羽绒服女中长款女WUP2036裳0918" title="尼班诗欧美2016冬装新款女装贴布羽绒服女中长款女WUP2036裳0918" src="{{ asset('/home/imgs/1051198_thumb_G_1480922904759.jpg') }}" style="display: block;" width="230">
            
			<script>
        getGood_price("WUP2036");
            </script>
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1051198.html" target="_blank" title="尼班诗欧美2016冬装新款女装贴布羽绒服女中长款女WUP2036裳0918">尼班诗欧美2016冬装新款女装贴布羽绒服女中长款女WUP2036裳0918</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">418.00</span>
              <del class="old_price">￥789.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1051128.html" title="尼班诗欧美2016冬装新款立领贴布黑色百搭棉服女WHZ5661梵0914" target="_blank">
            <img data-original="{{ asset('/home/imgs/1051128_thumb_G_1480923199039.jpg') }}" class="lazy" alt="尼班诗欧美2016冬装新款立领贴布黑色百搭棉服女WHZ5661梵0914" title="尼班诗欧美2016冬装新款立领贴布黑色百搭棉服女WHZ5661梵0914" src="{{ asset('/home/imgs/1051128_thumb_G_1480923199039.jpg') }}" style="display: block;" width="230">
            
			<script>
        getGood_price("WHZ5661");
            </script>
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1051128.html" target="_blank" title="尼班诗欧美2016冬装新款立领贴布黑色百搭棉服女WHZ5661梵0914">尼班诗欧美2016冬装新款立领贴布黑色百搭棉服女WHZ5661梵0914</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">338.00</span>
              <del class="old_price">￥669.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1051006.html" title="尼班诗欧美2016冬新贴布立领宽松大衣棉服棉衣女WHZ5658梵0908" target="_blank">
            <img data-original="{{ asset('/home/imgs/1051006_thumb_G_1480923226894.jpg') }}" class="lazy" alt="尼班诗欧美2016冬新贴布立领宽松大衣棉服棉衣女WHZ5658梵0908" title="尼班诗欧美2016冬新贴布立领宽松大衣棉服棉衣女WHZ5658梵0908" src="{{ asset('/home/imgs/1051006_thumb_G_1480923226894.jpg') }}" style="display: block;" width="230">
            
			<script>
        getGood_price("WHZ5658");
            </script>
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1051006.html" target="_blank" title="尼班诗欧美2016冬新贴布立领宽松大衣棉服棉衣女WHZ5658梵0908">尼班诗欧美2016冬新贴布立领宽松大衣棉服棉衣女WHZ5658梵0908</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">259.00</span>
              <del class="old_price">￥549.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1049763.html" title="尼班诗欧美2016冬装新款中长款显瘦长袖毛呢外套女WGA6163萍0826" target="_blank">
            <img data-original="{{ asset('/home/imgs/1049763_thumb_G_1480923262222.jpg') }}" class="lazy" alt="尼班诗欧美2016冬装新款中长款显瘦长袖毛呢外套女WGA6163萍0826" title="尼班诗欧美2016冬装新款中长款显瘦长袖毛呢外套女WGA6163萍0826" src="{{ asset('/home/imgs/1049763_thumb_G_1480923262222.jpg') }}" style="display: block;" width="230">
            
			<script>
        getGood_price("WGA6163");
            </script>
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1049763.html" target="_blank" title="尼班诗欧美2016冬装新款中长款显瘦长袖毛呢外套女WGA6163萍0826">尼班诗欧美2016冬装新款中长款显瘦长袖毛呢外套女WGA6163萍0826</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">228.00</span>
              <del class="old_price">￥679.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
              <li class="hstyle_boxs">
          <a href="http://www.handu.com/goods-1048960.html" title="尼班诗欧美2016冬装新款女装休闲显瘦中长款棉服女WUC1922芊0816" target="_blank">
            <img data-original="{{ asset('/home/imgs/1048960_thumb_G_1480923313693.jpg') }}" class="lazy" alt="尼班诗欧美2016冬装新款女装休闲显瘦中长款棉服女WUC1922芊0816" title="尼班诗欧美2016冬装新款女装休闲显瘦中长款棉服女WUC1922芊0816" src="{{ asset('/home/imgs/1048960_thumb_G_1480923313693.jpg') }}" style="display: block;" width="230">
            
			<script>
        getGood_price("WUC1922");
            </script>
          </a>
          <ul>
            <!--<li class="name"><a href="goods-1048960.html" target="_blank" title="尼班诗欧美2016冬装新款女装休闲显瘦中长款棉服女WUC1922芊0816">尼班诗欧美2016冬装新款女装休闲显瘦中长款棉服女WUC1922芊0816</a></li>-->
            <li class="price">
              <span class="arrow">￥</span>
              <span class="new_price">319.00</span>
              <del class="old_price">￥619.00</del>
            </li>
            <li><span class="pic_button">立即抢购</span> </li>
          </ul>
        </li>
          </ul>
  </div>

    <a target="_blank" class="gg_banner" href="http://www.handu.com/topic-1363.html" title="上新"><img title="上新" alt="上新" data-original="{{ asset('/home/imgs/1479195380978561259.jpg') }}" class="lazy" src="{{ asset('/home/imgs/1479195380978561259.jpg') }}" style="display: block;"></a>

  <div class="CRM_floor">
    <div class="CRM_hd">
      <a href="http://www.handu.com/news/" target="_blank"><h2>韩都资讯</h2></a>
      <a class="mL" href="http://www.handu.com/news/" target="_blank">更多&gt;</a>
    </div>
    <div class="zxlightbox fl">
      <ul class="zxlightbox_content">
                  <li style="display: block;">
            <a href="http://www.handu.com/topic-1121.html" title="【韩都公益】无穷花开" class="list_pic" target="_blank">
              <img data-original="{{ asset('/home/imgs/1469676232889773651.jpg') }}" class="lazy" alt="【韩都公益】无穷花开" title="【韩都公益】无穷花开" src="{{ asset('/home/imgs/1469676232889773651.jpg') }}" style="display: block;">
            </a>
            <p title="【韩都公益】无穷花开"><span class="zxtitle">【韩都公益】无穷花开</span></p>
          </li>
         
      </ul>
      <ul class="zxlightbox_nav">
                  <li class="current"></li>
          
      </ul>
    </div>
  
    <div class="handu_newsList">
      <h3></h3>
      <ul class="fashion">
                           
            <li>
              <h4><a href="http://www.handu.com/news/details/24476.html" target="_blank">在韩国首创时尚大赛，韩都衣舍又创新纪录</a></h4>
              <p>8月12日，韩都衣舍2016韩国时尚设计师大赛成功举办，在到场的200多位重量级嘉宾及中韩两国媒体见证下，一系列战略合作协议达成，多家韩国企业开启了与韩都衣舍的热恋期，韩都衣舍以一己之力再次搅动韩国，成为了中国电商崛起的新标杆。</p>
            </li>
             
                           
            <li>
              <h4><a href="http://www.handu.com/news/details/24471.html" target="_blank">韩都衣舍跨界玩转模特大赛牵手瑞丽“放胆秀色”</a></h4>
              <p>在继电商节618狂欢、韩国直播和十周年庆典后，韩都衣舍出现在了瑞丽模特大赛的赛场上。7月17日第十二届瑞丽模特大赛南京站完赛，秀场上身穿韩都衣舍服装的参赛模特们成为金陵城一道亮丽的风景线。</p>
            </li>
      
           
        <a target="_blank" href="http://www.handu.com/news/">
         <img data-original="{{ asset('/home/imgs/1410508721545137834.jpg') }}" title="韩都衣舍，感谢有你" target="_blank" class="inset lazy" src="{{ asset('/home/imgs/1410508721545137834.jpg') }}" style="display: block;">
        </a>
      </ul>
      <ul class="list_r">

         <li><a target="_blank" href="http://www.handu.com/news/details/24468.html" title="韩都衣舍携手J-ONE PARTNERS，演绎中韩潮流新风尚">韩都衣舍携手J-ONE PARTNERS，演绎中韩潮流新风尚</a></li>
             
           <li><a target="_blank" href="http://www.handu.com/news/details/24467.html" title="韩都衣舍搭手韩国户外第一品牌 打通电商全产业链">韩都衣舍搭手韩国户外第一品牌 打通电商全产业链</a></li>
             
              </ul>
    </div>


    <div class="crm_module">
      <div class="dy">
        <form id="form_dy" method="post" action="send_bonus.php?act=add_user_dingyue">
          <input name="email" type="text">
          <button type="submit" onclick="_czc.push(['_trackEvent', '订阅', '订阅']);"></button>
        </form>
      </div>
      <div id="subscription-prompt">订阅成功</div>
      <style type="text/css">
      #subscription-prompt{position: absolute;top: 267px;left:5px;display:none;width: 250px;padding: 2px 0;text-align: center; color:#34772A;border:1px solid #D9D3BB;background:#FFFDEE;}
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
  
</div>
<script>
$(function() {
  /**泰山压顶**/
  /*$('.seven').delay(3000).animate({'height':100},1500,
    function(){
      $('.seven').hide();
      $('.index_dt').show();
      //$('.seven').css({'background':'url({{ asset('/home/imgs/dt.jpg') }}" no-repeat top center'});
  });*/
  /**手机端效果**/
  /*cookie判断24小时内用户是否第一次登录*/
  var nameval = getCookie("name_v");
  if(nameval==null||nameval==""){
    $(".close_hy").show("slow");
    $(".black_overlay").show();
    $("#zhucehl").show();
   /* showts();
  }else{
    $(".index_dt").show();*/
  }
  setCookie("name_v","hayden","h24");
});
/**每日促销 scroll
var mar_left = Number($(".brand_collect .eday_sale_con").css("margin-left").split("px")[0]);
function eday_s(index){
  var len = $(".brand_collect .eday_sale_con>li").length;
  var lw = $(".brand_collect .eday_sale_con>li").eq(0).width();
  var move_lt = mar_left-(Number(index)*lw);
  $(".brand_collect .eday_sale_con").animate({"margin-left":move_lt+"px"},250,function(){
    if(index=="+1"){
      var $li = $(".brand_collect .eday_sale_con>li").eq(0);
      $(".brand_collect .eday_sale_con").append($li);
    }else{
      var $li = $(".brand_collect .eday_sale_con>li").eq(len-1);
      $(".brand_collect .eday_sale_con").prepend($li);
    }
    $(".brand_collect .eday_sale_con").css({"margin-left":mar_left+"px"});
  });
}**/
/**新品上市**/
/*$("#new_arrial .tab_brand>li").each(function(index,item){
  $(this).click(function(){
     $(this).addClass("hover").siblings().removeClass("hover");
     $("#new_arrial>ul").eq(index).show().siblings("ul").hide();
  });
});*/
/**热销排行**/
$("#floor1 .R .fr_hot>ul>li").each(function(index,item){
  $(this).hover(function(){
    $(this).find(".hot_con").show();
    $(this).find("h2").hide();
    $(this).siblings().find(".hot_con").hide();
    $(this).siblings().find("h2").show();
  });
});
/*资讯轮播*/
$('.zxlightbox_nav').on('click','li',function(){
   var index = $(this).index();
  $(this).addClass('current').siblings().removeClass('current');
  $(this).parents('.zxlightbox').find('.zxlightbox_content>li').eq(index).fadeIn().siblings().fadeOut();
});
/*加载视频*/
function addmov(){
  var $emb = "<embed src='{{ asset('/home/swf/tb_ugc_pieces_core_player_loader.swf') }}' height='411' width='670'/>";
  $(".mov").empty();
  $(".mov").append($emb);
}
function closeDt(){
  $(".dt").hide();
}
/*用户是否第一次登录方法*/
function setCookie(name,value,time)
  {
    var strsec = getsec(time);
    var exp = new Date();
    exp.setTime(exp.getTime() + strsec*1);
    document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
  }
 
//读取cookies
function getCookie(name)
{
  var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
  if(arr=document.cookie.match(reg)){
    return (arr[2]);
  }else{
    return null;
  }
}
 
function getsec(str)
{
   var str1=str.substring(1,str.length)*1;
   var str2=str.substring(0,1);
   if (str2=="s")
   {
        return str1*1000;
   }
   else if (str2=="h")
   {
       return str1*60*60*1000;
   }
   else if (str2=="d")
   {
       return str1*24*60*60*1000;
   }
}
</script>

@endsection
    
@section('friendLink')
  <script type="text/javascript">
  $.fn.imgscroll = function(o){
    var defaults = {
      speed: 40,
      amount: 0,
      width: 1,
      dir: "left"
    };
    o = $.extend(defaults, o);
    
    return this.each(function(){
      var _li = $("li", this);
      _li.parent().parent().css({overflow: "hidden", position: "relative"}); //div
      _li.parent().css({margin: "0", padding: "0", overflow: "hidden", position: "relative", "list-style": "none"}); //ul
      _li.css({position: "relative", overflow: "hidden"}); //li
      if(o.dir == "left") _li.css({float: "left"});
      
      //初始大小
      var _li_size = 0;
      for(var i=0; i<_li.size(); i++)
        _li_size += o.dir == "left" ? _li.eq(i).outerWidth(true) : _li.eq(i).outerHeight(true);
      
      //循环所需要的元素
      if(o.dir == "left") _li.parent().css({width: (_li_size*3)+"px"});
      _li.parent().empty().append(_li.clone()).append(_li.clone()).append(_li.clone());
      _li = $("li", this);
  
      //滚动
      var _li_scroll = 0;
      function goto(){
        _li_scroll += o.width;
        if(_li_scroll > _li_size)
        {
          _li_scroll = 0;
          _li.parent().css(o.dir == "left" ? {left : -_li_scroll} : {top : -_li_scroll});
          _li_scroll += o.width;
        }
          _li.parent().animate(o.dir == "left" ? {left : -_li_scroll} : {top : -_li_scroll}, o.amount);
      }
      
      //开始
      var move = setInterval(function(){goto();}, o.speed);
      _li.parent().hover(function(){
        clearInterval(move);
      },function(){
        clearInterval(move);
        move = setInterval(function(){goto();}, o.speed);
      });
    });
  };
  
  $(document).ready(function(){
 //这里设置DIV层的样式名 
 
    $(".pullDList").attr("display","block");
    $("#gdtw").imgscroll({
      speed: 40,    //滚动速度
      amount: 0,    //滚动过渡时间
      width: 1,     //滚动步数
      dir: "left"   // "left" 或 "up" 向左或向上滚动
    });
    
  });
  </script>
  <style>
    #gdtw{width:1050px;margin-left:60px; float:left; position: absolute; top:0px; left:60px;}
  </style>
  <div style="width:1200px;">
    <span style=" float:left; width:60px;position:absolute;">友情链接：</span>
    <div style="width: 1140px; position: relative; float: right; margin-top: 1px; overflow: hidden;"> 
      <ul class="friendlink" id="gdtw" style="margin: 0px; padding: 0px; overflow: hidden; position: relative; list-style: outside none none; width: 2370px; left: -127px;"><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.hznzcn.com/" target="_blank">女装批发网</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.36588.com.cn/" target="_blank">照片书</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.17ugo.com/" target="_blank">优品惠</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://guangzhou.liebiao.com/" target="_blank">广州分类信息</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.sjq.cn/" target="_blank">四季青服装网</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.quanlaoda.com/" target="_blank">优惠券</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.wbiao.cn/" target="_blank">手表品牌大全</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.nahuo9.com/" target="_blank">服装批发网</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.zhigou.com/" target="_blank">网上购物</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.1zw.com/" target="_blank">淘牛品</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.shihuo.cn/" target="_blank">虎扑识货</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://xiangyouhui.cn/" target="_blank">享优惠</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.jhly.cn/" target="_blank">嘉华旅游</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.hznzcn.com/" target="_blank">女装批发网</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.36588.com.cn/" target="_blank">照片书</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.17ugo.com/" target="_blank">优品惠</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://guangzhou.liebiao.com/" target="_blank">广州分类信息</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.sjq.cn/" target="_blank">四季青服装网</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.quanlaoda.com/" target="_blank">优惠券</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.wbiao.cn/" target="_blank">手表品牌大全</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.nahuo9.com/" target="_blank">服装批发网</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.zhigou.com/" target="_blank">网上购物</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.1zw.com/" target="_blank">淘牛品</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.shihuo.cn/" target="_blank">虎扑识货</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://xiangyouhui.cn/" target="_blank">享优惠</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.jhly.cn/" target="_blank">嘉华旅游</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.hznzcn.com/" target="_blank">女装批发网</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.36588.com.cn/" target="_blank">照片书</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.17ugo.com/" target="_blank">优品惠</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://guangzhou.liebiao.com/" target="_blank">广州分类信息</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.sjq.cn/" target="_blank">四季青服装网</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.quanlaoda.com/" target="_blank">优惠券</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.wbiao.cn/" target="_blank">手表品牌大全</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.nahuo9.com/" target="_blank">服装批发网</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.zhigou.com/" target="_blank">网上购物</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.1zw.com/" target="_blank">淘牛品</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.shihuo.cn/" target="_blank">虎扑识货</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://xiangyouhui.cn/" target="_blank">享优惠</a></li><li style="position: relative; overflow: hidden; float: left;"><a href="http://www.jhly.cn/" target="_blank">嘉华旅游</a></li></ul>
    </div>
  </div>
   
  <!-- 不知道干什么用的  备注：司国瑞 -->
  <!-- <iframe id="veUtilsIframe" style="visibility: hidden; display: none; border: medium none;" width="0" height="0"></iframe><iframe id="1481458322527" tabindex="-1" src="{{ asset('/home/js/iframeStorage.html') }}" style="display: none;"></iframe> -->
@endsection

 

