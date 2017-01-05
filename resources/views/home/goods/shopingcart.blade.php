@extends('home.shopping')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>购物车中心-韩都衣舍官方网站</title>
<script type="text/javascript" language="javascript" src="{{asset('/home/js/jquery.min.js')}}"></script>
<script type="text/javascript" language="javascript" src="{{asset('/home/js/jquery.json.js')}}"></script>
<script src="{{asset('/home/js/common.js')}}"></script>
<script src="{{asset('/home/js/slides.min.jquery.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/home/css/handu_base.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/home/css/handu_cart.css')}}">
<link href="{{asset('/home/css/dialog.css')}}" rel="stylesheet" type="text/css">
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
      <input id="ajax_username" name="email" type="text">
    </li>
    <li>
            <label for="ajax_password">密&#12288;码：</label>
      <input id="ajax_password" name="password" type="password">
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

  str+='<div class="del'+rec_id+'" id="'+rec_id+'">';
  str+='<li id="del-'+rec_id+'"><ul class="deleted_ul">';
  str+='<li style="width:5%;"> <img title="'+ title+'" class="fl" alt="'+title+'" src="'+src+'"></li>';
  str+='<li style="width:48%;"><p><a target="_blank" title="'+title+'" href="goods-'+title+'.html">'+title+'</a></p><p><span>'+sc+'</span></p></li>';
  str+='<li style="width:13%;">'+price+'</li>';
  str+='<li style="width:23%">'+number+'</li>';
  str+='<li><a href="javascript:tobuy('+rec_id+');">重新购买</a>&nbsp;|&nbsp;<a href="javascript:removeToCollect('+rec_id+')">收藏夹</a> </li>';
  str+='<li style="display:none"><input class="goods_id" type="hidden" value="'+rec_id+'"><input class="goods_attr_id" type="hidden" value="'+sc+'"><input name="goods_number[]" type="hidden" value="'+number+'"><input class="rec_id" type="hidden" value="'+rec_id+'"></li>';
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
  </script>
  @endsection