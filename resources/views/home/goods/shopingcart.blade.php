<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039)http://www.handu.com/flow.php?step=cart -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>购物车中心-韩都衣舍官方网站</title>
<script charset="utf-8" src="{{asset('/home/js/v.js')}}"></script>
<script type="text/javascript" id="veConnect" async="" src="{{asset('/home/js/capture-apps-4.18.6.js')}}"></script>
<script src="{{asset('/home/js/hm.js')}}"></script>
<script async="" src="{{asset('/home/js/analytics.js')}}"></script>
<script type="text/javascript" async="" charset="utf-8" src="{{asset('/home/js/ntkfstat.js')}}"></script>
<script type="text/javascript" language="javascript" src="{{asset('/home/js/jquery.min.js')}}"></script>
<script type="text/javascript" language="javascript" src="{{asset('/home/js/jquery.json.js')}}"></script>
<script src="{{asset('/home/js/common.js')}}"></script>
<script src="{{asset('/home/js/slides.min.jquery.js')}}"></script>


<link rel="stylesheet" type="text/css" href="{{asset('/home/css/handu_base.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/home/css/handu_cart.css')}}">

<link href="{{asset('/home/css/dialog.css')}}" rel="stylesheet" type="text/css">
<script type="text/javascript" async="async" charset="utf-8" src="{{asset('/home/js/zh_cn.js')}}" data-requiremodule="lang"></script>
<script type="text/javascript" async="async" charset="utf-8" src="{{asset('/home/js/chat.in.js')}}" data-requiremodule="chatManage"></script>
<script type="text/javascript" async="async" charset="utf-8" src="{{asset('/home/js/mqtt31.js')}}" data-requiremodule="MQTT"></script>
<script type="text/javascript" async="async" charset="utf-8" src="{{asset('/home/js/mqtt.chat.js')}}" data-requiremodule="Connection"></script>
<link id="ve-apps-style-css" type="text/css" rel="stylesheet" href="{{asset('/home/css/capture-apps-4.18.6.css')}}"></head>

<body><div id="nTalk_post_hiddenElement" style="left: -10px; top: -10px; visibility: hidden; display: none; width: 1px; height: 1px;"></div>



<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">

<div id="global_nav">
  <div class="global_nav">
    <div class="global_info fl">
      <ul id="HD_MZONE">
        <li class="on">
          <em><a href="http://www.handu.com/">返回首页</a></em>
        </li>
        <li id="nav_addFavorite">
          <a href="javascript:window.external.addFavorite()" rel="nofollow"><b></b>收藏网站</a>
        </li>
      </ul>
    </div>
    <div class="global_info fr">
      <ul id="HD_MEMBERZONE"><style type="text/css">
#HD_MEMBERZONE li.zhuce_main>img {position: absolute;top: 15px;left: -71px;z-index: 222;display: none;}
#HD_MEMBERZONE li.zhuce_main:hover>img {display: block;}
#HD_MEMBERZONE li.on>img {position: absolute;top: 15px;left: 4px;z-index: 222;}
</style>
<li>您好，欢迎光临韩都衣舍！</li>
<li>
  <a href="http://www.handu.com/user.php?act=login" target="_blank">登录</a>
 <!--<span style="position: absolute;top: 12px;right: -4px;"><img src="http://img01.handu.com//hdysweb/20150821/180-263.png"></span>-->
</li>
<li class="zhuce_main">
  <a href="http://www.handu.com/user.php?act=register" style="color:#c70a28;width:30px;height:30px;display:inline-block;" target="_blank">注册</a>
  <!--<img src="http://img01.handu.com/hdysweb/20141014/zhuce.png"  alt="注册" border="0" usemap="#zc_Map"/>
  <map name="zc_Map" id="zc_Map">
    <area shape="rect" coords="2,8,165,189" href="http://www.handu.com/user.php?act=register" target="_blank"/>
  </map>-->
</li>
<li><a href="http://www.handu.com/flow.php?step=cart" style="margin-right:10px" target="_blank">购物车</a></li></ul>
      <ul id="HD_HELPZONE" style="border-right:none;">
       
         <!--<li>
          <a href="http://www.handu.com/topic-1430.html" target="_blank" style="color:#c70a28;">团购批发</a>
        </li>-->
        <li><a href="javascript:NTKF.im_openInPageChat();">在线客服</a></li>
        <li><a href="http://www.handu.com/helper.html" target="_blank">帮助中心</a></li>
        <li onmouseover="dhceng(&#39;webdhceng&#39;, &#39;show&#39;);" onmouseout="dhceng(&#39;webdhceng&#39;, &#39;hide&#39;);" style="height:30px; display:inline-block;"><a href="http://www.handu.com/sitemap.html" target="_blank"><s></s>网站导航</a></li>
      </ul>
    </div>
  </div>
  <div class="webdhbox" id="webdhceng" style="width:976px;" onmouseover="dhceng(&#39;webdhceng&#39;, &#39;show&#39;);" onmouseout="dhceng(&#39;webdhceng&#39;, &#39;hide&#39;);">
    <div class="webdh">
      <div class="hot">
          <h1>大家都在买<span>Hot</span></h1>
          <ul>
                <li><a href="http://www.handu.com/category-242-b0-1-add_time-desc.html" target="_blank">t恤</a></li>
                <li><a href="http://www.handu.com/category-247-b0-1-add_time-desc.html" target="_blank">连衣裙</a></li>
                <li><a href="http://www.handu.com/category-249-b0-1-add_time-desc.html" target="_blank">牛仔裤</a></li>
                <li><a href="http://www.handu.com/category-240-b0.html" target="_blank">毛衣针织</a></li>
                <li><a href="hhttp://www.handu.com/category-241-b0.html" target="_blank">卫衣绒衫</a></li>
                <li><a href="http://www.handu.com/category-57-b0.html" target="_blank">休闲套装</a></li>
            </ul>
        </div>
      <div class="Hstyle">
          <h1>女装<span>Women</span></h1>
          <ul>
                <li><a href="http://hstyle.handu.com/" target="_blank">韩风快时尚女装</a></li>
                <li><a href="http://www.handu.com/topic-748.html" target="_blank">韩风快时尚妈妈装</a></li>
                <li><a href="http://www.handu.com/topic-1173.html" target="_blank">韩风甜美少女装</a></li>
                <li><a href="http://www.handu.com/topic-417.html" target="_blank">东方复古设计师女装</a></li>
                <li><a href="http://www.handu.com/topic-502.html" target="_blank">韩风名媛时尚女装</a></li>
                <li><a href="http://www.handu.com/topic-1226.html" target="_blank">欧美浪漫田园风女装</a></li>
                <li><a href="http://www.handu.com/topic-1168.html" target="_blank">韩风大码女装</a></li>
                <li><a href="http://www.handu.com/topic-503.html" target="_blank">欧美快时尚女装</a></li>
            </ul>
        </div>
      <div class="AMH">
          <h1>男装<span>Men</span></h1>
          <ul>
                <li><a href="http://www.handu.com/topic-406.html" target="_blank">韩风快时尚男装</a></li>
                <li><a href="http://www.handu.com/topic-1184.html" target="_blank">东方禅意设计师男装</a></li>
                <li><a href="http://www.handu.com/topic-1225.html" target="_blank">欧美街头轻潮男装</a></li>
            </ul>
        </div>
      <div class="mini">
          <h1>童装<span>Children</span></h1>
          <ul>
                <li><a href="http://www.handu.com/topic-347.html" target="_blank">韩风快时尚童装</a></li>
                <li><a href="http://www.handu.com/topic-1196.html" target="_blank">东方简约设计师童装</a></li>
            </ul>
        </div>
      <div class="help">
          <h1>帮助中心<span>Help</span></h1>
          <ul>
                <li><a href="http://www.handu.com/helper-61-723.html" target="_blank">会员制度</a></li>
                <li><a href="http://www.handu.com/helper-11-743.html" target="_blank">售后服务</a></li>
                <li><a href="http://www.handu.com/helper-21-701.html" target="_blank">购物流程</a></li>
                <li><a href="http://www.handu.com/helper-5-750.html" target="_blank">关于发票</a></li>
                <li><a href="http://www.handu.com/helper-10-737.html" target="_blank">配送方式</a></li>
                <li><a href="http://zhaopin.handu.com/index.php" target="_blank">韩都招聘</a></li>
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

<div class="cart_header">
    <a href="http://www.handu.com/index.php" class="cart_logo fl"></a>
    <div class="cart_step step1 fr"></div>
</div>




<div class="wrap">
    
   <div class="warm_tip"><em>温馨提示：</em>现在&nbsp;<a onclick="_is_login(login_suc);" style="color:#fe0032;cursor:pointer;">登录</a>&nbsp;,把心仪的商品保存在”购物车“</div>    

   

 <div class="shopping_nr">
        <!--<div class="shopping_nr_title">
            <div class="shop_qx" style="width: 117px;"><input id="selectAll" type="checkbox" value=""> 全选</div>
            <div class="shop_qx" style="width: 500px;">商品名称</div>
            <div class="shop_qx" style="width: 117px;">售价</div>
            <div class="shop_qx" style="width: 143px;">数量</div>
            <div class="shop_qx" style="width: 157px;">小计</div>
            <div class="shop_qx" style="width: 162px;">操作</div>
        </div>
        <div class="shopping_car_bottom">
            <div class="shopping_car_arrow">
                <div class="car_arrow"></div>
                <ul class="car_arrow_txt">
                   <li class="car_arrow_warn">您的购物车内没有商品，请挑选心仪的商品吧！</li>
                   <li><a href="http://www.handu.com/" target="_blank" class="go_shopping">去挑选喜欢的商品</a></li>
                </ul>
                </div>
            </div>
        </div>-->
    <form id="formCart" name="formCart" method="post" action="{{url('/home/goods/toPay')}}">
        {{ csrf_field() }}
        <div class="shopping_nr_title">
            <!--<div class="shop_qx" style="width: 110px;"><input id="selectAll" type="checkbox" value=""> 全选</div>-->
            <div class="shop_qx" style="width: 381px;">商品名称</div>
            <div class="shop_qx" style="width: 132px;">售价</div>
            <div class="shop_qx" style="width: 132px;">数量</div>
            <div class="shop_qx" style="width: 122px;">小计</div>
            <div class="shop_qx" style="width: 134px;">操作</div>
            <div class="shop_qx" style="width: 186px;">备注</div>
        </div>
        <div id="cartGoodsList" class="shopping_nr_top">

@foreach($cartData as $k=>$v)
<h3> <span>品牌：{{$data[$k]->brand}}</span></h3>

<ul id="brand_cart_1" class="{{$k}}">       
      <li id="{{$k}}">

            <!--<div class="cbg xuan"><input name="cartIds" type="checkbox" value="6720105"/></div> -->
            <div class="cbg shop_product">
                <div class="shop_product_pic">
                    <a href="http://www.handu.com/goods-1053493.html" target="_blank" title="{{$data[$k]->title}}">
                        <img src="{{asset('/home/imgs/goods')}}/{{$data[$k]->pic}}" width="112" border="0" alt="{{$data[$k]->title}}">
                    </a>
                </div>
                <div class="shop_product_name">
                    <a href="http://www.handu.com/goods-1053493.html" title="{{$data[$k]->title}}" target="_blank">{{$data[$k]->title}}</a>
                </div>
                
                <div class="shop_product_size">
                    <span>颜色:{{$v['color']}} &nbsp;&nbsp;&nbsp;尺码:{{$v['size']}}</span>
                </div>
            </div>
            <div class="cbg shop_product_money"> <div class="cprice" style="line-height:20px;"><del>￥{{$data[$k]->orign_price}}.00</del><br><span>￥{{$data[$k]->promt_price}}</span></div></div>
            <div class="cbg shop_product_number">
                <span class="amount-widget" id="J_AmountWidget">

                    <span class="increase" onclick="zengjia({{$k}})">+</span>
                    <span class="decrease" onclick="jianshao({{$k}})">-</span>
                     <input name="recId[]" type="hidden" value="{{$k}}">
                     <input type="text" onchange="gaibian({{$k}})" name="goods_number[]" class="text" old="1" id="goodsNumber" value="{{$v['goodsNumber']}}" maxlength="3" title="请输入购买量">
                     <!-- <input name="goodsPrice" type="hidden" value=""> -->
                </span>
            </div>
            <div class="cbg shop_product_money00">￥{{$data[$k]->promt_price}}.00</div>
            <div class="cbg shop_product_close">
                <div class="middle">

                    <a href="javascript:removeToCollect({{$k}});"> 移入收藏夹</a><br>
                    <a href="javascript:confirm_delgoods({{$k}});"> 删除</a>
                </div>
            </div>
            <div class="cbg shop_product_tip">
                <div class="middle"><a href="http://www.handu.com/topic-423.html" target="_blank"><span style="color:#c80a28;">【年终盛典】春季新品6折首发.全场满199包邮.领券满299减30/满399减80/满599减150</span></a></div>
            </div>
            <div class="shop_xinxi" style="display:none">
                   <!-- <input type="hidden" class="goods_id" value="1053493">
                   <input type="hidden" class="goods_attr_id" value="584182,584181">  
                   <input type="hidden" class="goods_number" value="1">   
                   <input type="hidden" class="rec_id" value="{{$k}}">    -->
            </div> 
        </li>   
</ul> 
@endforeach

<script>
$(".cart_good_type").each(function(index,item){
  if(index==0){
    $(this).show();
  }
});
</script>            
        </div>
        
        
        <div class="shopping_car_bottom">
            
            <div class="shopping_car_bottom_right">
              <div class="accumulated fr">
                <table>
                 <tbody><tr>
                      <td><span id="goods_allnum" class="p_color">{{$num}}</span>件商品</td>
                      <td class="td_len1">总计：</td>
                        <td id="total_Price" class="td_len">￥{{$total}}</td>
                  </tr>
                  <tr>  
                          
                        <td colspan="2">满立减：</td>
                      <td id="total_fanxian">-  ￥20.00 </td>
                          
                  </tr>
                   <tr> 
                          
                        <td colspan="2">税费：</td>
                      <td id="total_fanxian">- ￥0.00 </td>
                          
                  </tr>
                </tbody></table>
              </div>
              
            </div>
        </div>

        <div class="shopping_car_bottom shopping_car_bottom_bg">
            <!--<div class="shopping_car_bottom_left hg2">
                      <a id="batchDelete" href="javascript:void(0);">
                            批量删除
                      </a>
                      <a id="batchCollect" href="javascript:void(0);">
                          批量移入收藏夹
                      </a>
            </div>-->
            <div class="shopping_car_bottom_right">
                
                <span class="shopping_car_bottom_rightMoney">
                    <span style="line-height:50px;">
                    
                        购物金额总计：
                        <span style="min-width:75px;display:inline-block;text-align:right;">
                          <span style="color:#bf0000; font-size:18px;">￥</span>
                          <span id="totalAmount">{{$total}}</span>
                        </span>
                    </span>
                </span>

            </div>
        </div>
         

    
    <a href="{{url('/')}}"><div class="cart_btn btn9 fl" style="margin-right:10px;margin-top:12px;" onclick="_czc.push([&#39;_trackEvent&#39;, &#39;购物车&#39;, &#39;继续购物&#39;]);"></div></a>
    <a id="btn_goto_checkout" onclick="to_pay()"><div class="cart_btn btn1 fr" style="margin-top:12px;position:relative;">
      <div class="turnOrder">
        正在转向订单信息,请稍候！
      </div>
    </div></a>
    
</div>
</form>


<div class="div_deleted">
  <h1 id="show_del_msg"></h1>
  <ul class="deleted">
        
  
  </ul>
</div>


<div class="shopping_order_title">
  韩都官网为您推荐
    <span class="fr">
         <a href="javascript:void(0)" class="current t1">最近浏览过的商品</a>
         <a href="javascript:void(0)" class="t2">最近收藏的</a>
    </span>

</div>
    <!-- <div id="slides">
            <div class="slides_container" style="overflow: hidden; position: relative; display: block;">
                
      <div class="slides_control" style="position: relative; width: 3660px; height: 240px; left: -1220px;">


          <div class="slide" style="position: absolute; top: 0px; left: 1220px; z-index: 0;"> -->
            @foreach($keepData as $k=>$v)
              <div class="item">
                  <a href="http://www.handu.com/goods-1032502.html" title="" target="_blank">
                       <img src="{{asset('/home/imgs/goods')}}/{{$v->pic}}" alt="" title="{{$v->title}}">
                  </a>
                  <p><a href="http://www.handu.com/goods-1032502.html" title="" target="_blank">{{$v->title}}</a></p>
                  <p><span class="price">{{$v->promt_price}}.00</span></p>
              </div>
            @endforeach

          <!-- </div> -->
          <div class="slide" style="position: absolute; top: 0px; left: 1220px; z-index: 0; display: none;">       
          </div>


     <!--  </div>
          
    </div>
            <a href="http://www.handu.com/flow.php?step=cart#" class="prev">Prev</a><a href="http://www.handu.com/flow.php?step=cart#" class="next">Next</a>
  </div>
 -->


    <div class="h" style="display:none  ">
            
        <div class="slide">
        
                
             </div>
    </div>

</div>
  
<script type="text/javascript" src="{{asset('/home/js/dialog.js')}}" ></script>

<div class="handu_footer ">
<div class="footer_info">
   
                       <div class="info_column first">
               <h4 class="fht21">新手指南</h4>
               <ul>
                              <li><a href="http://www.handu.com/helper-21-700.html" title="用户注册" target="_blank">用户注册</a></li>
                              <li><a href="http://www.handu.com/helper-21-701.html" title="购物流程" target="_blank">购物流程</a></li>
                               
                              <li><a href="http://www.handu.com/sitemap.html" title="网站导航" target="_blank">网站导航</a></li>
                              <li><a href="http://www.handu.com/helpercenter.php" title="帮助中心" target="_blank">帮助中心</a></li>
                           </ul>
           </div>
           
                       <div class="info_column">
               <h4 class="fht22">支付方式</h4>
               <ul>
                              <li><a href="http://www.handu.com/helper-22-121.html" title="在线支付" target="_blank">在线支付</a></li>
                              <li><a href="http://www.handu.com/helper-22-705.html" title="货到付款" target="_blank">货到付款</a></li>
                              <li><a href="http://www.handu.com/helper-22-706.html" title="扫码支付" target="_blank">扫码支付</a></li>
                              <li><a href="http://www.handu.com/helper-22-707.html" title="优惠券支付" target="_blank">优惠券支付</a></li>
                              
                           </ul>
           </div>
           
                       <div class="info_column">
               <h4 class="fht10">配送方式</h4>
               <ul>
                              
                              <li><a href="http://www.handu.com/helper-10-737.html" title="配送说明" target="_blank">配送说明</a></li>
                              <li><a href="http://www.handu.com/helper-10-738.html" title="运费说明" target="_blank">运费说明</a></li>
                              <li><a href="http://www.handu.com/helper-10-739.html" title="验货签收" target="_blank">验货签收</a></li>
                              <li><a href="http://www.handu.com/helper-10-740.html" title="货到付款" target="_blank">货到付款</a></li>
                              
                           </ul>
           </div>
           
                       <div class="info_column">
               <h4 class="fht11">售后服务</h4>
               <ul>
                              <!--<li><a href="helper-11-742.html" title="正品保证" target="_blank">正品保证</a></li>-->
                              <li><a href="http://www.handu.com/helper-11-743.html" title="退换货政策" target="_blank">退换货政策</a></li>
                              <li><a href="http://www.handu.com/helper-11-744.html" title="退换货流程" target="_blank">退换货流程</a></li>
                              
                              
                           </ul>
           </div>
           
                       <div class="info_column">
               <h4 class="fht61">会员中心</h4>
               <ul>
                              <li><a href="http://www.handu.com/helper-61-723.html" title="会员制度" target="_blank">会员制度</a></li>
                              <li><a href="http://www.handu.com/helper-61-724.html" title="会员积分" target="_blank">会员积分</a></li>
                              <li><a href="http://www.handu.com/topic-640.html" title="好评有礼" target="_blank">好评有礼</a></li>
                              <!--<li><a href="helper-61-726.html" title="推荐返利" target="_blank">推荐返利</a></li>-->
                              
                           </ul>
           </div>
           
            <!--           <div class="info_column">
               <h4 class="fht60">韩国代购</h4>
               <ul>
                              <li><a href="helper-60-687.html" title="代购流程" target="_blank">代购流程</a></li>
                              <li><a href="helper-60-688.html" title="配送时间及费用" target="_blank">配送时间及费用</a></li>
                              <li><a href="helper-60-689.html" title="售后服务" target="_blank">售后服务</a></li>
                              
                           </ul>
           </div>-->
           
               
                       <div class="info_column">
               <h4 class="fht5">关于我们</h4>
               <ul>
                              <li><a href="http://www.handu.com/topic-511.html" title="品牌故事" target="_blank">品牌故事</a></li>
                              
                              <li><a href="http://www.handu.com/news/list/82_2.html" title="媒体报道" target="_blank">媒体报道</a></li>
                              <li><a href="http://zhaopin.handu.com/" title="诚聘英才" target="_blank">诚聘英才</a></li>
                              <li><a href="http://www.handu.com/helper-5-750.html" title="联系我们" target="_blank">联系我们</a></li>
                               <!--<li><a href="http://www.handu.com/topic-1430.html" title="团购批发" target="_blank">团购批发</a></li>-->
                           </ul>
           </div>
           
     
               
  </div>

  <div class="footer_feature"></div>

  <div class="footer_black"> 
     <a href="http://www.handu.com/index.php" target="_blank">首页</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a href="http://www.handu.com/topic-511.html" target="_blank">品牌故事</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a href="http://zhaopin.handu.com/" target="_blank">诚聘英才</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a href="http://www.handu.com/news/list/82_2.html" target="_blank">媒体报道</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a href="http://www.handu.com/helper-5-750.html" target="_blank">联系我们</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a href="http://www.handu.com/sitemap.html" target="_blank">网站地图</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a href="http://www.handu.com/link.html" target="_blank">友情链接</a>
   </div>

    <center class="copyright_info">
      <span><img src="{{asset('/home/imgs/copyright.gif')}}" alt="" width="33" height="37" border="0" align="absmiddle">鲁ICP备14003322号-2 © 2006-2015 handu.com All Rights Reserved. 
      
      <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=37010202000113" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="{{asset('/home/imgs/beiantubiao.png')}}" style="float:left;"><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">鲁公网安备 37010202000113号</p></a>
      
      韩都衣舍电子商务集团股份有限公司，禁止非法复制
      </span>
      
                <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_5484197'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s25.cnzz.com/stat.php%3Fid%3D5484197%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_5484197"><a href="http://www.cnzz.com/stat/website.php?web_id=5484197" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src="{{asset('/home/imgs/pic.gif')}}"></a></span><script src="{{asset('/home/js/stat.php')}}" type="text/javascript"></script><script src="{{asset('/home/js/core.php')}}" charset="utf-8" type="text/javascript"></script> 
                <br>
             <center>

         <img src="{{asset('/home/imgs/zxmbutton02_sy.jpg')}}" alt="" width="114" height="38" border="0">
         
        <a href="http://www.handu.com/themes/handuyishe/html/yyzz.html" target="_blank"><img src="{{asset('/home/imgs/zxmbutton05_sy.jpg')}}" alt="" width="103" height="38" border="0" style="margin:5px 5px 0 5px;"></a>


    <a href="https://ss.knet.cn/verifyseal.dll?sn=e14071837010051457jcgb000000&amp;ct=df&amp;a=1&amp;pa=0.6688498684670776" target="_blank" style="display:inline-block;position:relative;width:102px;height:37px;">
       <img src="{{asset('/home/imgs/cnnic.png')}}" alt="" width="102" height="37" border="0"></a>

        <!--<a href="http://si.trustutn.org/info?sn=615140701004909923565" target="_blank">
        <img src="http://img01.handu.com/hdysweb/20140415/renzheng.jpg" alt="" width="45" height="38" border="0"></a>-->

        <a style="display: inline-block;width: 74px;margin: 4px 3px;"> <img src="{{asset('/home/imgs/cctv.png')}}" alt="" width="74" height="40" border="0"></a>
        </center>

        <script src="{{asset('/home/js/cert.js')}}"></script>
        <script type="text/javascript" src="{{asset('/home/js/certShow')}}"></script>
    </center>
</div>


<style type="text/css">
.ajax_login_form .login_other{width:100%;position:relative;top:-12px;}
.ajax_login_form .login_other .login_other_title{height:30px;line-height:30px;}
.ajax_login_form .login_other .login_other_btn a span{background-image: url(themes/handuyishe/images/login_lh.png)}
.ajax_login_form .login_other .login_other_btn .login_other_btn00{background-position:-11px -24px;width: 80px;height: 30px;display:inline-block;margin-right:15px;}
.ajax_login_form .login_other .login_other_btn .login_other_btn11{background-position:-11px -62px;}
.ajax_login_form .login_other .login_other_btn .login_other_btn22{background-position:-11px -101px;}
.ajax_login_form .login_other .login_other_btn .login_other_btn33{background-position:-11px -139px;}
</style>

<div class="ajax_login_form" id="ajax_login_form" style="display: none">
  <div id="dialog_object_L_ajax_login" did="L_ajax_login" class="dialog_wrapper dialog_has_title" style="z-index: 9999; position: absolute; width: 450px; left: 406.5px; top: 318.5px;"><div class="dialog_body" style="z-index: 9991; position: relative;"><h3 class="dialog_head"><div class="dialog_ornament1"></div><div class="dialog_ornament2"></div><span class="dialog_title"><span class="dialog_title_icon">登录</span></span><span class="dialog_close_button" style="position: absolute; text-indent: -9999px; cursor: pointer; overflow: hidden;">close</span></h3><div class="dialog_content" style="margin: 0px; padding: 0px;">
  <form name="formLogin" action="{{url('/home/login')}}" method="post">
        {{ csrf_field() }}
    <ul>
    <li>
      <label for="ajax_username">用户名：</label>
      <input id="ajax_username" name="ajax_username" type="text">
    </li>
    <li>
            <label for="ajax_password">密&#12288;码：</label>
      <input id="ajax_password" name="ajax_password" type="password">
      <span id="ajax_login_nr_tishi" class="notice_msg"></span>
    </li>
        <li id="captcha_li">
            <label for="ajax_captcha">验证码：</label>
      <input id="captcha" name="captcha" style="width:100px;" type="text">&nbsp;<a onclick="javascript:re_captcha();" ><img src="{{ URL('kit/captcha/1') }}" id="c2c98f0de5a04167a9e427d883690ff6" width="86" height="29" alt="验证码" title="刷新图片" align="absmiddle"></a>
        <script>  
            function re_captcha() {
              $url = "{{ URL('kit/captcha') }}";
                  $url = $url + "/" + Math.random();
                  document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
            }
          </script>
      </li>
    <li> 
      <button type="submit" onclick="__ajaxLogin();" id="ajax_loginSubmit" style="margin-left:114px;"> </button>
            <a class="ajax_reg_link" href="{{url('home/user/register')}}" target="_blank">
            <span style="color:#c80a28;">注册</span>
            </a>
            <a class="ajax_reg_link" href="{{url('/home/login')}}" target="_blank">忘记密码</a> 
    </li>
  </ul>
  </form>
  <div class="login_other">
    <div class="login_other_title">其他登录方式：</div>
    <div class="login_other_btn" style="margin-left:30px;">
      <a href="javascript:void(0);" onclick="toQQLogin();_czc.push(['_trackEvent', '登陆', 'QQ']);"><span class="login_other_btn00"></span></a>
      <a href="javascript:void(0);" onclick="toSinaLogin();_czc.push(['_trackEvent', '登陆', 'Sina']);"><span class="login_other_btn00 login_other_btn11"></span></a>
      <a href="javascript:void(0);" onclick="toXunleiLogin();_czc.push(['_trackEvent', '登陆', 'Thunder']);"><span class="login_other_btn00 login_other_btn22"></span></a>
      <a href="javascript:void(0);" onclick="toAlypayLogin();_czc.push(['_trackEvent', '登陆', 'Alipay']);"><span class="login_other_btn00 login_other_btn33"></span></a>
    </div>
  </div>
</div>

</div></div><div style="clear:both;display:block;"></div><div class="dialog_border" style="left: -5px; top: -5px; z-index: 9990; display: block; position: absolute; width: 460px;"></div></div>



<div class="float_box" style="display: block;">
  
  <div class="float_app"></div>
  <a href="http://www.handu.com/flow.php?step=cart" target="_blank" class="a1" onclick="_czc.push([&#39;_trackEvent&#39;, &#39;悬浮&#39;, &#39;购物车&#39;]);"></a>
  <a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODE4ODAzNF80MzI3MjBfNDAwODA2Nzc3N18yXw" target="_blank" class="a2" onclick="_czc.push([&#39;_trackEvent&#39;, &#39;悬浮&#39;, &#39;在线客服&#39;]);"></a>
  <a href="http://www.handu.com/msg.php" target="_blank" class="a3" onclick="_czc.push([&#39;_trackEvent&#39;, &#39;悬浮&#39;, &#39;在线反馈&#39;]);"></a>
  <a href="http://jq.qq.com/?_wv=1027&amp;k=29u2lqa" class="a4" target="_blank"></a>
  <a href="javascript:void(0);" class="a5 backTop" onclick="_czc.push([&#39;_trackEvent&#39;, &#39;悬浮&#39;, &#39;返回顶部&#39;]);"></a>
  
</div>
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
    itemid: "1042684",
      uid:"",
    uname:"",

userlevel:0,
  orderid: "",
  orderprice: "",
itemparam: "size=41|color=red|brand=tata",
      erpparam: "sid=eadfddeeel|utm=adfe|source=baidu" 

} 
   
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45831645-1', 'handu.com');
  ga('require', 'displayfeatures');
    ga('send', 'pageview');
</script>
 



<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?925dc35723dff5cd810f7fee2e41a269";
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
<script src="{{asset('/home/js/tag.js')}}" type="text/javascript" async=""></script>


<script type="text/javascript">


$(function(){
  
  
  /* 批量删除  */
  $("#selectAll").click(function(){
      var cartIds = $("#cartGoodsList input:checkbox");
    if(this.checked == true ){
      cartIds.prop('checked',true);
    }else{
      cartIds.prop('checked',false);
    }
  });
  $(".brand_checkall").live('click',function(){
      var cartIds = $(this).parent().next().find("input:checkbox");
    if(this.checked == true ){
      cartIds.prop('checked',true);
    }else{
      cartIds.prop('checked',false);
    }
  });
   

   
  $("#batchDelete").click(function(){
    var cartIds = $("input:checkbox[name='cartIds']");
    var recIds = new Array();
    
    $("input:checkbox:checked[name='cartIds']").each(function(i){
      recIds.push(this.value);
    });
    popConfirm({'text':'您确实要把选择的商品移出购物车吗？','onClickYes':function(){
                for(i=0;i<recIds.length;i++){
                    delgoods(recIds[i]);  
                }
            }
        });
    
  });
  /*批量加入收藏夹*/
  $("#batchCollect").click(function(){
        var cartIdsck = $("input:checkbox:checked[name='cartIds']");
        var cartArray =[];
        cartIdsck.each(function(){
       cartArray.push($(this).parents('li').children().find('.goods_id').val());
        })   
  
        popConfirm({'text':'你确定要把选择的商品移入收藏夹吗？','onClickYes':function(){
                for(i=0;i<cartArray.length;i++){
                     
                     $.get('user.php?act=collect',{id: cartArray[i]},function(result){
                         if(result.message == '由于您还没有登录，因此您还不能使用该功能。')
                            location.href='user.php?act=login';
                         
                        },'json');
                        
                }
            }
        });
   
 
    });
 
  //最近浏览的商品
  var t1 = $('.slides_container').html();
    var t2 = $('.h').html();
  $(".t2").click(function(){
          $('.slides_container').html(t2);
          $(this).addClass('current');
          $('.t1').removeClass('current');

        $('#slides').slides({
          preload: false,
          generatePagination: false,
          generateNextPrev: false
      });
       
    })

    $(".t1").click(function(){
       $('.slides_container').html(t1);
       $(this).addClass('current');
       $('.t2').removeClass('current');
       
       $('#slides').slides({
        preload: false,
        generatePagination: false,
        generateNextPrev: false
      });
       
    })
  
});


/*左右增加减少*/
function zengjia(rec_id){
     var id ='#'+rec_id;
    var number = $(id).find("input[name='goods_number[]']").val();
    number = parseInt(number)+1;
    var price = $(id).find('del').next().next('span').html();
    $('#goods_allnum').html(parseInt($('#goods_allnum').html()) + 1);
    var totalAmount = $('#totalAmount').html();
    // var price = parseInt(price);
    nprice = price.split('￥')[1];
    if(parseInt(totalAmount)>=0){
       totalAmount = parseInt(totalAmount) + parseInt(nprice);
    }

    $('#total_Price').html('￥'+totalAmount);
    $('#totalAmount').html(totalAmount);
    $(id).find("input[name='goods_number[]']").val(number);
}
function jianshao(rec_id){
    var id ='#'+rec_id;
    var number = $(id).find("input[name='goods_number[]']").val();
    if(number==1){
      return false;
    }
    number = number-1;
    var price = $(id).find('del').next().next('span').html();
    $('#goods_allnum').html($('#goods_allnum').html()- 1);
    var totalAmount = $('#totalAmount').html();
    // var price = parseInt(price);
    nprice = price.split('￥')[1];
    if(parseInt(totalAmount)>=0){
        totalAmount = totalAmount - nprice;
    }

    $('#total_Price').html('￥'+totalAmount);
    $('#totalAmount').html(totalAmount);
    $(id).find("input[name='goods_number[]']").val(number);
}

function gaibian(rec_id){
   var id ='#'+rec_id;
    var number = $(id).find("input[name='goods_number[]']").val();
    if(number<=0){
      alert('请输入正确的购买数量');
      $(id).find("input[name='goods_number[]']").val(1);
      return false;
    }


    
}

function toPay(){
  $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
  

  var formElement = $("#formCart")[0]; 
  var formData = new FormData(formElement);
  // console.log(str);

  $.ajax({
                type:'POST',
                url:"{{url('/home/goods/toPay')}}",
                data:formData,
                processData: false,    //必须设置
                contentType: false,    //必须设置
                success:function(data)
                {
                    
                    
                },
                error:function()
                {
                    alert("异常");
                }

            });

    // JSON.parse(arr);
    // console.log(arr);

}


function removeToCollect(rec_id){
     $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
      });
    var id ='#'+rec_id;
    var number = $(id).find("input[name='goods_number[]']").val();
    $.ajax({
                type:'POST',
                url:"{{url('/home/goods/removeToCollect')}}",
                data:{id:rec_id,number:number},
                success:function(data)
                {
                   if(data==0){
                      window.location.href="{{url('home/login/login')}}";
                      return false;
                   }else if(data==1){
                      alert('移入收藏夹成功');
                      return false;
                   }else if(data==2){
                      alert('该商品已在收藏夹');
                      return false;
                   }else {
                      alert('移入收藏夹失败');
                      return false;
                   }
                    
                },
                error:function()
                {
                    alert("异常");
                }

            });
}
function confirm_delgoods(rec_id){
    var op={'text':'确认要从购物车中删除吗？',
            onClickYes:function(){
                delgoods(rec_id);   
            } 
        };
    popConfirm(op);    
   
}
//删除商品ajax
var li = new Array();
function delgoods(rec_id){
    var id ='#'+rec_id;
  
    var src = $(id).find('.shop_product_pic img').attr('src');
    var title = $(id).find('.shop_product_pic img').attr('alt');
    var number = $(id).find("input[name='goods_number[]']").val();
    var sc = $(id).find('.shop_product_size span').html();
    var price = $(id).find('del').next().next('span').html();

    // $(id).css('display','none');
   
    $(id).parent().css('display','none');
    $(id).parent().prev('h3').css('display','none');
    li[rec_id] = $(id).remove();

    //更新数量、总价信息
    $('#goods_allnum').html($('#goods_allnum').html()-number);
    var total_Price = $('#total_Price').html();
    var ntotal_Price = total_Price.split('￥')[1];
    // var price = parseInt(price);
    nprice = price.split('￥')[1];
    if(parseInt(ntotal_Price)>=0){
    var total = ntotal_Price - nprice*number;
    }

    $('#total_Price').html('￥'+total);
    $('#totalAmount').html(total);
    

  var str='';

  str+='<div class="del'+rec_id+'">';
  str+='<li id="del-'+rec_id+'"><ul class="deleted_ul">';
  str+='<li style="width:5%;"> <img title="'+ title+'" class="fl" alt="'+title+'" src="'+src+'"></li>';
  str+='<li style="width:48%;"><p><a target="_blank" title="'+title+'" href="goods-'+title+'.html">'+title+'</a></p><p><span>'+sc+'</span></p></li>';
  str+='<li style="width:13%;">'+price+'</li>';
  str+='<li style="width:23%">'+number+'</li>';
  str+='<li><a href="javascript:tobuy('+rec_id+');">重新购买</a>&nbsp;|&nbsp;<a href="javascript:removeToCollect('+rec_id+')">收藏夹</a> </li>';
  str+='<li style="display:none"><input class="goods_id" type="hidden" value="'+rec_id+'"><input class="goods_attr_id" type="hidden" value="'+sc+'"><input class="goods_number[]" type="hidden" value="'+number+'"><input class="rec_id" type="hidden" value="'+rec_id+'"></li>';
  str+='</ul></li></div>';

            
  $('.deleted').append(str);
  $('#show_del_msg'). html('您已删除的商品，您可以重新购买或放入收藏夹');
  
}



//重新购买方法
function tobuy(goodsId){
    var id ='#'+goodsId;
    var res = $('.deleted').find('img').length;

    if(res==1){
        $('#show_del_msg'). html('');
    }

    // $(id).css('display','block');
    // $(id).parent().css('display','block');
    // $(id).parent().append(li);
    // $(id).parent().prev('h3').css('display','block');
    $('.'+goodsId).css('display','block');
    $('.'+goodsId).append(li[goodsId]);
    $('.'+goodsId).prev('h3').css('display','block');

    var cla = '.del'+goodsId;
    var totalAmount = $('#totalAmount').html();
    var number = $(cla).find('.deleted_ul li').eq(3).html();
    var price = $(cla).find('.deleted_ul li').eq(2).html();
    price = price.split('￥')[1];

    totalAmount = parseInt(totalAmount) + parseInt(price*number);
    $('#goods_allnum').html(parseInt($('#goods_allnum').html())+parseInt(number));
    $('#total_Price').html('￥'+totalAmount);
    $('#totalAmount').html(totalAmount);
    
    $(cla).remove();

}
//更新购物车内容 商品数量 优惠价格，总价等信息
function _update_cart_info(result){
        var total = result.total;
        $('#cartGoodsList').html(result.cartGoodsList);
        $('#goods_allnum').html(total.goods_all_num);
        $('#total_Price').html(total.goods_amount);
        $('#total_fanxian').html('- '+total.your_discount);
        $('#totalAmount').html(total.shopping_money);
}

//切换浏览和收藏
function change_tuijian(obj){
  if(obj==1)
  {
    $('#shoucang').attr('class','current'); 
    $('#liulan').attr('class',' '); 
  }else if(obj==2)
  {
    $('#shoucang').attr('class',' '); 
    $('#liulan').attr('class','current'); 
  }

}

///删除的商品加入收藏夹
function collect(goodsId){
  
  $.get('user.php?act=collect',{id: goodsId},function(result){
    
        if(result.message == '由于您还没有登录，因此您还不能使用该功能。')
            location.href='user.php?act=login';
        else
            popMsg(result.message,400);
    
  },'json');

}

//关闭登录框
$('.dialog_close_button').click(function(){
    $('#ajax_login_form').css('display','none');
});

function to_pay(){
    //判断购物车内有没有商品
     var obj = $('#cartGoodsList').find('li').length;
      if(obj == 0)
      {
          alert('购物车内没有商品');
          return false;
      }

    @if(!session('master'))

      alert('请先登录');
      $('#ajax_login_form').css('display','block');
      return false;
    @endif

     var goodsNumber = $('#goodsNumber').val();
     if(goodsNumber<=0)
    {
      alert('请输入正确的商品数量');
      return false;
    }
    
    document.getElementById('formCart').submit();
    return false;
}

</script>


  <script>
    $(function(){
      $('#slides').slides({
        preload: false,
        generatePagination: false,
        generateNextPrev: true
      });
    });
  </script><iframe id="veUtilsIframe" width="0" height="0" style="visibility: hidden; display: none; border: none;" src="{{asset('/home/imgs/saved_resource.html')}}"></iframe><iframe id="1482203326563" tabindex="-1" src="{{asset('/home/imgs/iframeStorage.html')}}" style="display: none;"></iframe><div id="ve-chat-container" class="waiting ready"><div id="ve-chat-iframe-container" style="height: 520px; top: 110px;"><div id="ve-chat-iframe-drag-area"></div><iframe id="ve-chat-iframe" tabindex="-1" src="{{asset('/home/imgs/1667.html')}}" style="height: 520px;"></iframe></div><div id="ve-chat-iframe-overlay"></div></div></body></html>