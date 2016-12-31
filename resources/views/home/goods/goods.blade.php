@extends('home.layout')
@section('content')
<!-- <link rel="stylesheet" type="text/css" href="{{asset('/home/css/handu_base_1.css') }}" /> -->
<link rel="stylesheet" type="text/css" href="{{asset('/home/css/handu_detail_1.css') }}" />
<link rel="stylesheet" type="text/css" href="{{asset('/home/css/handu_detail.css') }}" />
<link rel="stylesheet" type="text/css" href="{{asset('/home/css/web_index_1.css') }}" />
<link rel="stylesheet" type="text/css" href="{{asset('/home/css/jquery.jqzoom_1.css') }}" />
<link href="{{asset('/home/css/handu_cart.css')}}" rel="stylesheet" type="text/css">
<script src="/js/jquery.json.js"></script>
<script src='/js/flow_goods_1.js'></script>
<script src='/js/common_1.js'></script>

<div class='detail_wrap'>
<div class="handu_crumb" id='detail_crumb'> 您所在的位置 <code> &gt;</code> <a href=".">韩都衣舍</a> <code>&gt;</code> <a href="category-225-b0.html">{{$position['one']}}</a> <code>&gt;</code> <a href="category-366-b0.html">{{$position['two']}}</a> <code>&gt;</code> <a href="category-10645-b0.html">{{$position['three']}}</a> <code>&gt;</code> {{$position['four']}}</div>
<div class='side_bar'>
  <ul id="cate_guide">
      <h1>商品分类</h1>
              @foreach($category as $v)
              <li><a href="{{ url('/home/cate/index') }}/{{$v->id}}" title="{{$v->title}}" target="_blank">{{$v->title}}</a></li>
              @endforeach
              
    </ul>
  
              <a href="http://www.handu.com/topic-423.html" target="_blank" title="新品" class="gg">
        <img src="{{asset('/home/imgs/1470880931507587404.png')}}" alt="新品" width="170" height="125" />
      </a>
                  
  <div class="share new_goods">
      <!-- 新品上市 -->
    <h1></h1>
    <ul>
        @foreach($new_goods as $v)
          <li class="new_boxs">
        <a href="{{ url('/home/goods/goods') }}/{{$v->id}}" title="{{$v->title}}" target="_blank">
          <img src="{{asset('/home/imgs/goods')}}/{{$v->pic}}" alt="{{$v->title}}" title="{{$v->title}}"/>
        </a>
        <ul>
          <li class="name"><a href="{{ url('/home/goods/goods') }}/{{$v->id}}" target="_blank" title="{{$v->title}}">{{$v->title}}</a></li>
          <li class="price">
            <span class="new_price"><span class="arrow">￥</span>{{$v->promt_price}}.00</span>
            <del class="old_price">￥{{$v->orign_price}}.00</del>
          </li>
        </ul>
      </li>
      @endforeach
    </ul>
  </div>
  
  <div class="share hot_goods">
    <!-- 人气热卖 -->
    <h1></h1>
    <ul>
      
         <li class="hstyle_boxs">
        <a href="{{ url('/home/goods/goods') }}/{{$data->id}}" alt="{{$data->title}}" title="{{$data->title}}" target="_blank">
          <img src="{{asset('/home/imgs/goods')}}/{{$data->pic}}" alt="{{$data->title}}" title="{{$data->title}}"/>
        </a>
        <ul>
          <li class="name">
            <a href="{{ url('/home/goods/goods') }}/{{$data->id}}" target="_blank" title="{{$data->title}}">{{$data->title}}</a>
          </li>
          <li class="price">
            <span class="arrow">￥</span>
            <span class="new_price">{{$data->promt_price}}.00</span>
            <del class="old_price">￥{{$data->orign_price}}.00</del>
          </li>
      
        </ul>
      </li>

    </ul>
  </div>
  
    <a href="#" target="_blank" title="维新运动" class="gg">
          <img src="{{asset('/home/imgs/1439186924043865480.jpg')}}" alt="维新运动" width="170" height="125"/>
    </a>
            
</div>
<div class='product_detail'>
    <div class='detail_top '>
        <div class='goods_detail_left '>
    <!-- <script type="text/javascript"  src="{{asset('/home/js/goods_no1214.js')}}"></script> --> 
    <style>
      .gallery_content a{position:relative;display:block;float:left;}
      em.price_11{background:url("http://img01.handu.com/hdysweb/20161209/jb/jb01.png") no-repeat 0 0;width: 125px;height:109px;position:absolute;right:0px;bottom:-76px;text-align:center;font-size: 34px;font-weight: bold;color:#fff;font-family: 'Arial';z-index:300; padding-top:76px; line-height:20px;}
    </style>   
    <style type="text/css">
        *
        {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        #con
        {
            position: relative;
            width: 900px;
            height: 660px;
            /*border: 1px solid #ccc;*/
            margin: 0 auto;
        }
        #small
        {
            position: absolute;
            left: 1px;
            top: 1px;
            float: left;
            width: 479px;
            height: 479px;
            /*border: 1px solid #fcc;*/
        }
        #big
        {
            position: absolute;
            left: 490px;
            top: 1px;
            float: left;
            width: 490px;
            height: 479px;
            /*border: 1px solid #00f;*/
            overflow: hidden;
            display: none;
        }
        #move
        {
            position: absolute;
            left: 0;
            top: 0;
            background: url({{ asset('/home/imgs/bg.png') }});
        }
        #uid
        {
            position: absolute;
            left: 20px;
            top: 500px;
            width: 400px;
            height: 90px;
            border: 1px solid #ccc;
            padding: 10px 0;
        }
        #uid li
        {
            float: left;
            width:88px;
            height: 88px;
            margin: 5px;
        }
    </style>
     <div id="con">
        <div id="small">
            <img id="smallImg" src='{{asset('/home/imgs/20161027181029_ou6246.jpg')}}' width="100%" />
            <div id="move"></div>
        </div>
        <div id="big">
            <img id="bigImg" style="position:absolute;display:block;z-index:1 ;" src='{{asset('/home/imgs/20161027181029_ou6246.jpg')}}' />
        </div>

        <ul id="uid">
            <li><img src='{{asset('/home/imgs/20161027181029_ou6246.jpg')}}' width="100%" /></li>
            <li><img src='{{asset('/home/imgs/20160912100947_gy5753.jpg')}}' width="100%" /></li>
            <li><img src='{{asset('/home/imgs/20160921000943_ig5884.jpg')}}' width="100%" /></li>
            <li><img src='{{asset('/home/imgs/20160827050842_lf5944.jpg')}}' width="100%" /></li>
        </ul>
    </div>

    <script type="text/javascript">
        
        // 获取元素
        var small = document.getElementById('small');
        var big = document.getElementById('big');
        var bigImg = document.getElementById('bigImg');
        var move = document.getElementById('move');
        var con = document.getElementById('con');
        var smallImg = document.getElementById('smallImg');


        // 全局变量
        var moveWidth = 0;
        var moveHeight = 0;
        var smallWidth = 0;
        var smallHeight = 0;
        var bigImgWidth = 0;
        var bigImgHeight = 0;

        // 添加移入事件
        small.onmouseover = function()
        {
            // 显示 big
            big.style.display = 'block';
            move.style.display = 'block';
            this.style.cursor = 'move';

            // 获取尺寸
            var bigWidth = big.offsetWidth;
            var bigHeight = big.offsetHeight;
            bigImgWidth = bigImg.offsetWidth;
            bigImgHeight = bigImg.offsetHeight;
            smallWidth = small.offsetWidth;
            smallHeight = small.offsetHeight;

            // 计算比例
            var wPer = bigWidth / bigImgWidth;
            var hPer = bigHeight / bigImgHeight;

            moveWidth = smallWidth * wPer;
            moveHeight = smallHeight * hPer;

            // console.log(moveWidth);
            // console.log(moveHeight);

            // 设置 move 的宽度和高度
            move.style.width = moveWidth + 'px';
            move.style.height = moveHeight + 'px';
        }

        // 移动事件
        small.onmousemove = function(ent)
        {
            var mx = ent.pageX;
            var my = ent.pageY;

            // 获取 con 的 left top
            var conLeft = con.offsetLeft;
            var conTop = con.offsetTop;
            // 获取 small 的 left top
            var smallLeft = small.offsetLeft;
            var smallTop = small.offsetTop;

            // 计算 move 的 left top
            var moveLeft = mx - conLeft - smallLeft - moveWidth / 2;
            var moveTop = my - conTop - smallTop - moveHeight / 2;

            // 判断
            if(moveLeft <= 0)
            {
                moveLeft = 0;
            }

            if(moveTop <= 0)
            {
                moveTop = 0;
            }

            if(moveLeft >= smallWidth - moveWidth)
            {
                moveLeft = smallWidth - moveWidth;
            }

            if(moveTop >= smallHeight - moveHeight)
            {
                moveTop = smallHeight - moveHeight;
            }

            // 设置 move 的 left top
            move.style.left = moveLeft + 'px';
            move.style.top = moveTop + 'px';

            // 计算 bigImg 移动的比例
            var wPer = moveLeft / smallWidth;
            var hPer = moveTop / smallHeight;

            var bigImgLeft = bigImgWidth * wPer;
            var bigImgTop = bigImgHeight * hPer;

            // 设置 bigImg 的 left top
            bigImg.style.left = - bigImgLeft + 'px';
            bigImg.style.top = - bigImgTop + 'px';

        }

        // 移出事件
        small.onmouseout = function()
        {
            big.style.display = 'none';
            move.style.display = 'none';
            this.style.cursor = 'default';
        }

        // 循环
        var uid = document.getElementById('uid');
        var imgs = uid.getElementsByTagName('img');

        for(var i = 0; i < imgs.length; i ++)
        {
            imgs[i].onmouseover = function()
            {
                var src = this.src;
                smallImg.src = src;
                bigImg.src = src;
                this.width -= 4;
                this.style.border = "2px solid #f00";
            }

            imgs[i].onmouseout = function()
            {
                this.width += 4;
                this.style.border = 'none';
            }
        }


    </script>

            <div class='dashed'></div>
            
            <p>
                <a href="javascript:goods_collect('1052213');_gaq.push(['_trackEvent', 'Collect', 'Like']);_czc.push(['_trackEvent', '收藏', '喜欢']);" class='like fl'>收藏（3）</a>
                
                <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
                <span class="bds_more">分享到：</span>
                <a class="bds_qzone"></a>
                <a class="bds_tsina"></a>
                <a class="bds_tqq"></a>
                <a class="bds_renren"></a>
                <a class="bds_t163"></a>
                <a class="shareCount"></a>
                </div>
                <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=0" ></script>
                <script type="text/javascript" id="bdshell_js"></script>
                <script type="text/javascript">
                document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
                </script>
                
            </p>
        </div>
        <div class="gooods_detail_right">
        <div id="goods_detail_1" class="product_detail_info">
            <h1 class="product_name">
            <span>            </span>{{$data -> title}}</br>
            <em><a href="http://www.handu.com/topic-1506.html" target="_blank"><span class="blink_1" style="color:#c80a28;">【毛呢特惠 5折封顶】全场毛呢外套满499减100/满699减180/满899减300/满1099减400！库存有限，先到先得！毛呢外套只限以上满减优惠，不可使用HSTYLE品牌优惠券</span></a></em></h1>
           <ul> 
            <li>
             商品货号：&nbsp;&nbsp;<span class='code'>{{'HD'.str_pad($data->cate_id,3,"0",STR_PAD_LEFT).str_pad($data->cate_id,6,"0",STR_PAD_LEFT)}}</span>&nbsp;&nbsp;&nbsp;&nbsp;
                          售价：<span class='y'>￥</span><del class='market_price'>{{$data -> orign_price}}</del>
                        </li>
          <li class="li_relative">
              <style>
                  .discount a{text-decoration: underline; color: #ff0;cursor: pointer;}
                  .discount a:hover{text-decoration: none; color: #ff0;}
                </style>            
                                促 销 价：
                <em class='promote_price' ><span class='yy'>￥</span>{{$data -> promt_price}}</em>
                <em class='discount'style="display:none">3.5折</em>                

              <span class="vipPrice">
                <!--<span class="vipPrice_span1">会员专享价</span>
                <span class="vipPrice_span2"><img src="/home/imgs/d.png" class="d_list"></span> -->
                  <div class="vipPriceMain" status="hide" >
                    <div class="vipPriceContent">
                                             <p><b>升级成为普通会员：</b>您只需要成功交易一笔订单，就可以享受正价商品<a>9.8</a>折优惠</p>
                        <p><b>升级成为黄金会员：</b>您只需要消费500.00元，就可以享受正价商品<a>9.5</a>折优惠</p>
                        <p><b>升级成为白金会员：</b>您只需要消费2000.00元，就可以享受正价商品<a>8.5</a>折优惠</p>
                        <p><b >升级成为钻石会员：</b>您只需要消费5000.00元，就可以享受正价商品<a >8</a>折优惠</p> 
                                            <div class="vipPriceMore"><a href="helper-61-723.html" target="_blank"><span class="vipPrice_more fr"></span><span class="fr">更多&gt;</span></a></div>
                    </div>
                  </div>
              </span>
           </li>
            <li>销　　量：&nbsp;&nbsp;<span class='sale_count'>{{$data -> count}}件</span> </li>
            <li>用户评分： 
                  <span class="star-off"><em class="star-on" style="width:100%;"  title="5分" ></em></span>
                  <span class='comment_num'>(共有<a href='#goods_comments_a' onclick="$('#goods_comments_a').parent().click()"> 1</a>条评论)</span>
           
            </li>
            </ul>  
        </div> 

        <div id="goods_detail_3" class="product_detail_info">

          <div class="goods_attr text" > 
              <span class="label">尺码 <b>：</b></span>
                <ul id="size"  >
                  @foreach($size as $s)
                  <li class="" l="{{$s -> size}}" title="{{$s -> size}}">
                    <span>{{$s -> size}}</span><s></s>      
                  </li>
                  @endforeach 
                </ul>            
          </div>

          <div class="goods_attr text" >    
              <span class="label">颜色 <b>：</b></span>
                <ul id="color"  >
                @foreach($res as $v)
                  <li class=""  val="{{$v -> id}}" title="{{$v -> color}}">
                    <span>{{$v -> color}}</span><s></s>       
                  </li>
                @endforeach         
                </ul>
          </div>      
        </div>


    <form action="{{url('/home/goods/buy_now')}}" method="post" id="formCart">
            {{ csrf_field() }}

        <div id="goods_detail_2" class="product_detail_info">
            <div class="set">
              <span class='label'>数　　量：   &nbsp;</span>
              <span class="amount-widget" id="J_AmountWidget" style="margin:0px">
                  <span class="increase" onclick="change_num(1)">+</span>
                  <span class="decrease" onclick="change_num(-1)">-</span>
                  <input name="recId" id="goods_id" type="hidden" value="{{$data->id}}">
                  <input type="text" onchange="gaibian(this)" name="goods_number" id="goodsNumber" class="text" value="1" maxlength="3" title="请输入购买量">
                  <input name="color" type="hidden" value="">
                  <input name="size" type="hidden" value="" />
              </span>
              <span id="goodsInventory">
                  <font class="loading">loading..</font>
                  <font class='inventory' total="">&nbsp;（库存<b></b>件）</font>
                  <font class='no_inventory'> （无货） </font>
              </span>
            </div>
          <p id='GoodsAttrSelectedString'></p>
            
              <p class='detail_btn_set'>
                                <a class='fl detail_btn buy' onclick="buy_now()" title='点击购买'></a>
                                <a onclick="insertCart()" class='fl detail_btn addCart' href="javascript:void(0);" title='加入购物车'></a>
                                
                              </p>
        </div>
    </form>


<script type="text/javascript">
  /*字体闪烁*/
  var index = 0;
  function changeColor() {
      var color = "#666|red";
      var tempcolor = "";
      color = color.split("|");
      index++;
      if (index >=color.length)
      index=0;
      tempcolor = color[index];
      $(".blink_1").each(function (index) {
          if (parseInt($(this).text()) !=0) {                
              $(this).attr("style", "color:" + tempcolor);
          }
      });
  }
  setInterval("changeColor()", 1000); 
</script>
<script type="text/javascript">

$(function($){
  $("#size li:first").addClass('sel');
  $("#color li:first").addClass('sel');
  $('#goodsNumber').val('1');
  choose();

  //商品详情，评论详情显示
  $('#J_TabBar').find('a').eq(0).click(function(){
      $('#J_TabBar').find('li').removeClass('current');
      $(this).parent().addClass('current');
      $('.flat_content').find('li').eq(0).css('display','block');
      $('.flat_content').find('li').eq(1).css('display','none');
  });

  $('#J_TabBar').find('a').eq(1).click(function(){
      $('#J_TabBar').find('li').removeClass('current');
      $(this).parent().addClass('current');
      $('.flat_content').find('li').eq(0).css('display','none');
      $('.flat_content').find('li').next('li').css('display','list-item');
  });


});
 
//定义函数供给(#size li)和(#color li)的click方法调用
function choose(){
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
      });
    var str = '您已选择了';
    if($("#size li").hasClass('sel')){
        var size = $("#size .sel span" ).html();
        str += "　["+$("#size .sel span" ).html()+"]";

        if($("#color li").hasClass('sel')){
          var color = $("#color .sel span" ).html();
          str += "　["+$("#color .sel span" ).html()+"]";

          var goodsNumber = $('#goodsNumber').val();
          var id = $('#goods_id').val();
          
          //当颜色和尺寸均选取时，用ajax获取实时库存
              $.ajax({
                type:'POST',
                url:"{{url('/home/goods/checkStock')}}",
                data:{id:id,size:size,color:color,goodsNumber:goodsNumber},
                success:function(data)
                {
                    $('.inventory').attr('total',data);
                    $('.inventory b').html(data);
                    
                },
                error:function()
                {
                    alert("异常");
                }

            });
        }
    }else{ 
  
      if($("#color li").hasClass('sel')){
        str += "　["+$("#color .sel span" ).html()+"]";
      }else{
        str = '您未选择';
      } 

    }
    // console.log(str);
    $('#GoodsAttrSelectedString').html(str);
}

$('#size li').click(function(){
    // if($(this).hasClass('b')){
    //     return ;//被锁定了
    // }
    
    if($(this).hasClass('sel')){
        $(this).removeClass('sel');
        // console.log($(this span).html());
    }else{
        $(this).siblings().removeClass('sel');
        $(this).addClass('sel');
    }

    choose();
});

$('#color li').click(function(){
    // if($(this).hasClass('b')){
    //     return ;//被锁定了
    // }
    if($(this).hasClass('sel')){
        $(this).removeClass('sel');
        // console.log($(this span).html());
    }else{
        $(this).siblings().removeClass('sel');
        $(this).addClass('sel');
     
    }

    choose();
});

function change_num(num)
{
  var goodsNumber= $('#goodsNumber').val();
  var goodsNumber= parseInt(goodsNumber);
  if(num ==1)
  {
      goodsNumber += 1;
      $('#goodsNumber').val(goodsNumber);
  }else 
  {
      goodsNumber -= 1;

      if(goodsNumber <= -1)
      {
        return false;
      }

      $('#goodsNumber').val(goodsNumber);
  }
}

function insertCart(){
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
      });

    if($("#size li").hasClass('sel'))
    {
      var size = $("#size .sel span" ).html();
     
    }else 
    {
      alert('请选择商品尺码');
      return false;
    }

    if($("#color li").hasClass('sel'))
    {
      var color = $("#color .sel span" ).html();
     
    }else 
    {
      alert('请选择商品颜色');
      return false;
    }

    var goodsNumber = $('#goodsNumber').val();
    var stock = $('.inventory').attr('total');

    if(stock-goodsNumber<0)
    {
        alert('库存不足,请重新选择');
        return false;
    }

    if(goodsNumber<=0)
    {
      alert('请输入正确的商品数量');
      return false;
    }

    var id = $('#goods_id').val();

    $.ajax({
            type:'POST',
            url:"{{url('/home/goods/addCart')}}",
            data:{id:id,size:size,color:color,goodsNumber:goodsNumber},
            success:function(data)
            {
                if(data==0)
                {
                  $('#good_Car').css('display','block');
                }else
                {
                  alert('商品添加到购物车失败');
                }
                
            },
            error:function()
            {
                alert("异常");
            }

        });


}

function buy_now(){
    @if(!session('master'))

      alert('请先登录');
      window.location.href="{{ url('/home/login') }}";
      return false;
    @endif

    if($("#size li").hasClass('sel'))
    {
      var size = $("#size .sel span" ).html();
      $('#J_AmountWidget').find("input[name='size']").val(size);
     
    }else 
    {
      alert('请选择商品尺码');
      return false;
    }

    if($("#color li").hasClass('sel'))
    {
      var color = $("#color .sel span" ).html();
      $('#J_AmountWidget').find("input[name='color']").val(color);
     
    }else 
    {
      alert('请选择商品颜色');
      return false;
    }

    var goodsNumber = $('#goodsNumber').val();
    var stock = $('.inventory').attr('total');

    if(stock-goodsNumber<0)
    {
        alert('库存不足,请重新选择');
        return false;
    }

    if(goodsNumber<=0)
    {
      alert('请输入正确的商品数量');
      return false;
    }
    
    document.getElementById('formCart').submit();
    return false;
}



</script>
        
        
        
<script src="/js/tag_1.js" type="text/javascript" async></script>          
            
        <div class='  product_detail_info' style='border-bottom:none;'>       
            
            <div class='extra_info'>
                <ul class="line1">  
                   <li class="et_qqonline">
                    <a href="javascript:NTKF.im_openInPageChat();">
                      <span >在线客服:</span>
                      <span class="et_icon payway3"></span>
                    </a>
                    </li>
      
                    <li class="et_weixian" style="margin-left:30px;" >
                        <a id="zzy_weixin">
                            <span>官方微信:</span>
                            <span class="et_icon"></span>
                           <img src="{{asset('/home/imgs/qrcode_for_hdw3.jpg')}}" width="170" height="170" class="qrcode" style="left:-30px;"> 
                        </a>
                    <img src="{{asset('/home/imgs/sys.gif')}}" class="sao">
                    </li>
                 
                  <div class="clear"></div>
                </ul>
                <div class="goods_payway line2">
                    <label>支付方式:</label>
                    <a href="http://www.handuyishe.com/helper-22-121.html#xx_121"><span>支付宝</span></a>
                    <a href="http://www.handuyishe.com/helper-22-121.html#xx_121"><span>网上银行付款</span></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <label>服务承诺：</label>
                    <span class="sv_icon sv_icon1" title="100%正品保证"></span>
                    <span class="sv_icon sv_icon2" title="7天无理由退换货"></span>
                    <span class="sv_icon sv_icon3" title="安全快速退款"></span>
                </div>
               
            </div>
            
        </div>
        </div>
        
        <br class="clear" />    
    </div>
    
    <div id='flat_tab' class='fr'>
        <div id="J_TabBarBox">
          <ul id="J_TabBar" class="tabbar tm-clear">
            <li class="current"><a href="javascript:void(0)" >商品详情</a></li>
            <li><a id="goods_comments_a" href="javascript:void(0)">评论详情 <span style="color:#c80a28;font-weight:normal;font-size: 12px;">(1)</span></a></li>
            
            <li><a href="http://www.handu.com/helper-61-728.html" target="_blank">常见问题</a></li>
 
          </ul>
          <a onclick="goods_addToCart(1052213,'0','0','');" id="quikAddCart" title="加入购物车" >加入购物车</a>
        </div>
        <ul class="flat_content">
           <li style="display: block;">
            
            <div class="attributes-list" id="J_AttrList">
                <ul id="J_AttrUL">
                  <li id="J_attrBrandName" title="清仓特惠商品">品牌:&nbsp;清仓特惠商品</li>
                  <li>货号：OU6246</li>
                  <li>尺码:&nbsp;XS &nbsp;S &nbsp;M &nbsp;L &nbsp;XL</li>
                  <li>颜色: &nbsp;粉蓝色&nnbsp;酒红色  </li>
                </ul>
            </div>
            <div class="New_goodCONpic">
              <style type="text/css">
                .quanbu{ width:750px; margin:0 auto; float:none}.quanbu img{ float:left; border:0}
                area{ border:0; outline:none}
              </style>

<div id="top" class="quanbu">
  <a href="topic-640.html" target="_blank"><img alt="" src="{{asset('/home/imgs/sx_01.jpg')}}" width="750" height="86" /></a> <img border="0" alt="" src="{{asset('/home/imgs/sx_02.jpg')}}" width="750" height="170" usemap="#Map" /> 
  <map name="Map">
    <area href="topic-1509.html" shape="rect" target="_blank" coords="2,2,255,167" /><area href="http://www.handu.com/topic-1364.html" shape="rect" target="_blank" coords="261,6,518,164" /><area href="http://www.handu.com/topic-1198.html" shape="rect" target="_blank" coords="522,4,747,165" />
  </map>
<img border="0" alt="" src="{{asset('/home/imgs/sx_03.jpg')}}" width="750" height="694" usemap="#Map2" /> 
  <map name="Map2">
    <area href="" shape="rect" target="_blank" coords="14,115,113,252" /><area href="http://www.handu.com/topic-423.html" shape="rect" target="_blank" coords="121,118,224,251" /><area href="http://www.handu.com/brand_topic.php?id=10314" shape="rect" target="_blank" coords="233,116,338,249" /><area href="http://www.handu.com/brand_topic.php?id=319" shape="rect" target="_blank" coords="348,116,443,249" /><area href="http://www.handu.com/brand_topic.php?id=10142" shape="rect" target="_blank" coords="456,120,553,249" /><area href="http://www.handu.com/brand_topic.php?id=10442" shape="rect" target="_blank" coords="567,114,675,251" /><area href="http://www.handu.com/brand_topic.php?id=328" shape="rect" target="_blank" coords="63,266,166,384" /><area href="http://www.handu.com/brand_topic.php?id=10687" shape="rect" target="_blank" coords="174,266,280,385" /><area href="http://www.handu.com/brand_topic.php?id=10593" shape="rect" target="_blank" coords="288,265,391,386" /><area href="http://www.handu.com/brand_topic.php?id=10470" shape="rect" target="_blank" coords="396,266,503,387" /><area href="http://www.handu.com/topic-1492.html" shape="rect" target="_blank" coords="510,266,611,386" /><area href="http://www.handu.com/brand_topic.php?id=155" shape="rect" target="_blank" coords="-1,399,106,521" /><area href="http://www.handu.com/brand_topic.php?id=10686" shape="rect" target="_blank" coords="113,398,220,520" /><area href="http://www.handu.com/topic-1496.html" shape="rect" target="_blank" coords="227,397,335,520" /><area href="http://www.handu.com/brand_topic.php?id=22" shape="rect" target="_blank" coords="339,397,442,522" /><area href="http://www.handu.com/brand_topic.php?id=10469" shape="rect" target="_blank" coords="451,393,559,521" /><area href="http://www.handu.com/brand_topic.php?id=10361" shape="rect" target="_blank" coords="565,397,675,530" /><area href="http://www.handu.com/topic-1526.html" shape="rect" target="_blank" coords="59,535,165,676" /><area href="http://www.handu.com/brand_topic.php?id=196" shape="rect" target="_blank" coords="175,534,283,668" /><area href="http://www.handu.com/brand_topic.php?id=10534" shape="rect" target="_blank" coords="291,535,400,668" /><area href="http://www.handu.com/brand_topic.php?id=10765" shape="rect" target="_blank" coords="411,534,514,666" /><area href="http://www.handu.com/brand_topic.php?id=10407" shape="rect" target="_blank" coords="522,534,623,659" /><area href="http://www.handu.com/brand_topic.php?id=10745" shape="rect" target="_blank" coords="632,534,736,664" />
  </map>
<a href="http://www.handu.com/topic-1566.html" target="_blank"><img alt="" src="{{asset('/home/imgs/750.jpg')}}" width="750" height="374" /></a> 
  <div style="padding-top:10px;clear:both;">
    <img border="0" alt="" src="{{asset('/home/imgs/bt.jpg')}}" width="750" height="10" /><a href="http://www.handu.com/goods-1052260.html" target="_blank"><img alt="" src="{{asset('/home/imgs/goods/sx_01.jpg')}}" width="183" height="332" /></a> <a href="http://www.handu.com/goods-1052489.html" target="_blank"><img alt="" src="{{asset('/home/imgs/goods/sx_02.jpg')}}" width="192" height="332" /></a> <a href="http://www.handu.com/goods-1049633.html" target="_blank"><img alt="" src="{{asset('/home/imgs/goods/sx_03.jpg')}}" width="190" height="332" /></a> <a href="http://www.handu.com/goods-1049734.html" target="_blank"><img alt="" src="{{asset('/home/imgs/goods/sx_04.jpg')}}" width="185" height="332" /></a> <a href="http://www.handu.com/goods-1051714.html" target="_blank"><img alt="" src="{{asset('/home/imgs/sx_05.jpg')}}" width="183" height="335" /></a> <a href="http://www.handu.com/goods-1049876.html" target="_blank"><img alt="" src="{{asset('/home/imgs/sx_06.jpg')}}" width="192" height="335" /></a> <a href="http://www.handu.com/goods-1050114.html" target="_blank"><img alt="" src="{{asset('/home/imgs/sx_07.jpg')}}" width="190" height="335" /></a> <a href="http://www.handu.com/goods-1052324.html" target="_blank"><img alt="" src="{{asset('/home/imgs/sx_08.jpg')}}" width="185" height="335" /></a> <a href="http://www.handu.com/goods-1050030.html" target="_blank"><img alt="" src="{{asset('/home/imgs/sx_09.jpg')}}" width="183" height="333" /></a> <a href="http://www.handu.com/goods-1052213.html" target="_blank"><img alt="" src="{{asset('/home/imgs/sx_10.jpg')}}" width="192" height="333" /></a> <a href="http://www.handu.com/goods-1051137.html" target="_blank"><img alt="" src="{{asset('/home/imgs/sx_11.jpg')}}" width="190" height="333" /></a> <a href="http://www.handu.com/goods-1052320.html" target="_blank"><img alt="" src="{{asset('/home/imgs/sx_12.jpg')}}" width="185" height="333" /></a> 
    <p>
      <br />
    </p>
    <div>
    </div>
  </div>
<a href="http://www.handu.com/topic-423.html" target="_blank"><img alt="" src="{{asset('/home/imgs/75.jpg')}}" width="750" height="423" /></a> 
</div></div> 
            
                <div class="goods_desc" style="text-align: center;">
                    <!-- <div class='model_title'>商品信息</div>-->
                    <div style="width:98.0%;height:auto;padding:20.0px 0;background:#ffffff;" align="center">
  <div style="width:400.0px;height:70.0px;margin:0 auto;">
    <img class="img-ks-lazyload" src="{{asset('/home/imgs/tb2up1utxxxxxcbxpxxxxxxxxxx-263817957.gif')}}" align="absmiddle" /> 
  </div>
</div>
<div style="width:98.0%;max-width:790.0px;min-width:400.0px;margin:0 auto;height:auto;" align="center">
  <img class="img-ks-lazyload" src="{{asset('/home/imgs/tb2vy6uaq1m.ebjszpixxawfpxa-263817957.png')}}" /><img class="img-ks-lazyload" src="{{asset('/home/imgs/tb2jgyvaf5n.ebjszfmxxbosxxa-263817957.jpg')}}" /> 
</div>
<div align="center">
  <img class="desc_anchor img-ks-lazyload" id="desc-module-2" src="{{asset('/home/imgs/spaceball.gif')}}" /> 
</div>
<div style="width:98.0%;max-width:790.0px;min-width:400.0px;margin:0 auto;height:auto;line-height:50.0px;text-align:center;font-family:microsoft yahei;background:#f3f3f3;" align="center">
  <div style="width:100.0%;height:auto;padding:20.0px 0;background:#ffffff;">
    <div style="width:400.0px;height:70.0px;margin:0 auto;">
      <img class="img-ks-lazyload" alt="" src="{{asset('/home/imgs/tb20dvgtxxxxxxsxpxxxxxxxxxx-263817957.gif')}}" /> 
    </div>
  </div>
  <table style="text-align:center;background:#ffffff;color:#5c5c5c;font-size:24.0px;font-family:microsoft yahei;border:1.0px solid #e5e5e5;margin:0 auto 20.0px;" class="ke-zeroborder" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td height="50" bgcolor="#f7f7f7" width="111">
          <b>货号</b> 
        </td>
        <td height="50" align="left" bgcolor="#f7f7f7">
          OU6246
        </td>
      </tr>
      <tr>
        <td height="50">
          <b>尺码</b> 
        </td>
        <td height="50" align="left">
          XS S M L
        </td>
      </tr>
      <tr>
        <td height="50" bgcolor="#f7f7f7">
          <b>颜色</b> 
        </td>
        <td height="50" align="left" bgcolor="#f7f7f7">
          粉蓝色 酒红色
        </td>
      </tr>
      <tr>
        <td height="50">
          <b>成分</b> 
        </td>
        <td height="50" align="left">
          面料：50%羊毛50%聚酯纤维 里料：100%聚酯纤维
        </td>
      </tr>
      <tr>
        <td rowspan="4" bgcolor="#f7f7f7">
          <b>参数</b> 
        </td>
        <td style="font-size:18.0px;line-height:26.0px;padding-top:10.0px;" align="left" bgcolor="#f7f7f7">
          等级：合格品&nbsp;
        </td>
      </tr>
      <tr>
        <td style="font-size:18.0px;line-height:26.0px;" align="left" bgcolor="#f7f7f7">
          执行标准：FZ/T 73020-2012
        </td>
      </tr>
      <tr>
        <td style="font-size:18.0px;line-height:26.0px;" align="left" bgcolor="#f7f7f7">
          安全类别：GB18401-2010
        </td>
      </tr>
      <tr>
        <td style="font-size:18.0px;line-height:26.0px;padding-bottom:10.0px;" align="left" bgcolor="#f7f7f7">
          C类（非直接接触皮肤的纺织产品）
        </td>
      </tr>
      <tr>
        <td height="50">
          <b>季节</b> 
        </td>
        <td height="50" align="left">
          冬季
        </td>
      </tr>
      <tr>
        <td>
          &nbsp;
        </td>
        <td style="font-size:18.0px;line-height:26.0px;padding:10.0px 0;" align="left">
          &nbsp;
        </td>
      </tr>
    </tbody>
  </table>
  <table style="text-align:center;background:#ffffff;line-height:50.0px;color:#5c5c5c;font-family:微软雅黑;margin:20.0px auto;font-size:24.0px;border-collapse:collapse;" class="ke-zeroborder" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td style="border:1.0px solid #e6e6e6;background-repeat:no-repeat;background-position:left center;" background="/Images/t26egjxjxbxxxxxxxx-263817957.gif">
          <b>面料弹性</b> 
        </td>
        <td style="border:1.0px solid #e6e6e6;" bgcolor="#CCCCCC">
          无弹性
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          轻微弹性
        </td>
        <td style="border:1.0px solid #e6e6e6;" bgcolor="#FFFFFF">
          高弹力
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;background-repeat:no-repeat;background-position:left center;" background="/Images/t26egjxjxbxxxxxxxx-263817957.gif">
          <b>厚薄指数</b> 
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          厚款
        </td>
        <td style="border:1.0px solid #e6e6e6;" bgcolor="#d6d6d6">
          厚薄适中
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          薄款
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;background-repeat:no-repeat;background-position:left center;" background="{{asset('/home/imgs/t20nwxxptbxxxxxxxx-263817957.gif')}}">
          <b>版型</b> 
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          紧身
        </td>
        <td style="border:1.0px solid #e6e6e6;" bgcolor="">
          修身
        </td>
        <td style="border:1.0px solid #e6e6e6;" bgcolor="#d6d6d6">
          宽松
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;background-repeat:no-repeat;background-position:left center;" background="{{asset('/home/imgs/t20nwxxptbxxxxxxxx-263817957.gif')}}">
          <b>长度</b> 
        </td>
        <td style="border:1.0px solid #e6e6e6;" bgcolor="#FFFFFF">
          短款
        </td>
        <td style="border:1.0px solid #e6e6e6;" bgcolor="#d6d6d6">
          中长款
        </td>
        <td style="border:1.0px solid #e6e6e6;" bgcolor="#FFFFFF">
          长款
        </td>
      </tr>
    </tbody>
  </table>
  <table style="border-collapse:collapse;background:#ffffff;font-family:微软雅黑;font-size:24.0px;text-align:center;line-height:50.0px;margin:20.0px auto;" class="ke-zeroborder" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td style="border:1.0px solid #e6e6e6;border-bottom:none;line-height:90.0px;font-size:28.0px;text-align:left;text-indent:30.0px;">
          洗涤说明<span style="color:#aaaaaa;font-size:18.0px;margin-left:10.0px;">Washing Instructions</span> 
        </td>
      </tr>
      <tr>
        <td>
          <img class="img-ks-lazyload" alt="" src="{{asset('/home/imgs/tb2sgrkkpxxxxbvxxxxxxxxxxxx-263817957.gif')}}" style="width:100.0%;" /> 
        </td>
      </tr>
    </tbody>
  </table>
  <table style="font-size:20.0px;font-family:微软雅黑;background:#ffffff;line-height:50.0px;text-align:center;border-collapse:collapse;margin:0 auto 20.0px;" class="ke-zeroborder" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td colspan="8" style="border:1.0px solid #e6e6e6;line-height:90.0px;font-size:28.0px;text-align:left;text-indent:30.0px;">
          尺码表<span style="color:#aaaaaa;font-size:18.0px;margin-left:10.0px;">Size Filter</span> 
        </td>
      </tr>
      <tr bgcolor="#484848">
        <td style="border:1.0px solid #e6e6e6;line-height:30.0px;" width="18%">
          <span style="color:#ffffff;">上衣尺码</span> 
        </td>
        <td style="border:1.0px solid #e6e6e6;line-height:30.0px;" width="9%">
          <span style="color:#ffffff;">肩袖长</span> 
        </td>
        <td style="border:1.0px solid #e6e6e6;line-height:30.0px;" width="10%">
          <span style="color:#ffffff;">胸围</span> 
        </td>
        <td style="border:1.0px solid #e6e6e6;line-height:30.0px;" width="15%">
          <span style="color:#ffffff;">臀围</span> 
        </td>
        <td style="border:1.0px solid #e6e6e6;line-height:30.0px;" width="14%">
          <span style="color:#ffffff;">衣长</span> 
        </td>
        <td style="border:1.0px solid #e6e6e6;line-height:30.0px;" width="11%">
          <span style="color:#ffffff;">下摆围</span> 
        </td>
        <td style="border:1.0px solid #e6e6e6;line-height:30.0px;" width="13%">
          <span style="color:#ffffff;">袖口围</span> 
        </td>
        <td style="border:1.0px solid #e6e6e6;line-height:30.0px;" width="10%">
          <span style="color:#ffffff;">袖肥</span> 
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;">
          XS
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          65
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          98
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          97
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          84
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          92
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          26
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          38
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          66.5
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          102
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          101
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          85
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          96
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          27
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          40
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;">
          M
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          68
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          106
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          105
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          86
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          100
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          28
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          42
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          69.5
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          110
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          109
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          87
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          104
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          29
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          44
        </td>
      </tr>
      <tr>
        <td colspan="8" style="border:1.0px solid #e6e6e6;text-align:left;text-indent:20.0px;font-size:20.0px;line-height:26.0px;padding:10.0px 0;color:#5c5c5c;">
          因测量方式不同，若有1-2cm误差皆属合理范围。
        </td>
      </tr>
    </tbody>
  </table>
  <table style="font-size:20.0px;font-family:微软雅黑;background:#ffffff;line-height:50.0px;text-align:center;border-collapse:collapse;margin:0 auto 20.0px;" class="ke-zeroborder" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td colspan="2" style="border:1.0px solid #e6e6e6;line-height:90.0px;font-size:28.0px;text-align:left;text-indent:30.0px;">
          测量方式<span style="color:#aaaaaa;font-size:18.0px;margin-left:10.0px;">Measurement</span> 
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;width:200.0px;">
          <img class="img-ks-lazyload" alt="" src="{{asset('/home/imgs/tb2cc4ekxxxxxaoxxxxxxxxxxxx-263817957.jpg')}}" /> 
        </td>
        <td style="border:1.0px solid #e6e6e6;">
          <table style="font-family:微软雅黑;font-size:20.0px;line-height:26.0px;text-align:left;" class="ke-zeroborder" border="0" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
              <tr>
                <td align="center" width="30">
                  1.
                </td>
                <td>
                  肩宽（平铺肩部折痕处肩缝，左肩端点到右端肩点的距离）
                </td>
              </tr>
              <tr>
                <td align="center">
                  2.
                </td>
                <td>
                  胸围/2（平铺肩部折痕处肩缝，左侧至右侧直量）
                </td>
              </tr>
              <tr>
                <td align="center">
                  3.
                </td>
                <td>
                  袖长（肩端点至袖口直量）
                </td>
              </tr>
              <tr>
                <td align="center">
                  4.
                </td>
                <td>
                  前衣长（从肩颈点至下摆底端的垂直长度）
                </td>
              </tr>
              <tr>
                <td align="center">
                  5.
                </td>
                <td>
                  后衣长（从肩颈点至下摆底端的垂直长度）
                </td>
              </tr>
              <tr>
                <td align="center">
                  6.
                </td>
                <td>
                  后中长（从后领中底部至下摆的垂直长度）
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
  <table style="font-size:20.0px;font-family:微软雅黑;line-height:30.0px;text-align:center;width:100.0%;background:#ffffff;border-collapse:collapse;border:1.0px solid #e6e6e6;margin:20.0px auto;" class="ke-zeroborder" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td style="border:1.0px solid #e6e6e6;font-size:16.0px;background-repeat:no-repeat;background-position:center;height:60.0px;" align="left" background="{{asset('/home/imgs/tb2zjy1efxxxxc4xpxxxxxxxxxx-263817957.gif')}}" bgcolor="#fff" valign="top" width="118">
          <span style="margin-left:0.0px;margin-top:0.0px;display:block;float:left;width:100.0%;text-align:right;">身高(cm)</span><span style="display:block;float:left;width:100.0%;">体重(kg)</span> 
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          150
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          153
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          155
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          158
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          160
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          163
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          165
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          168
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          170
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          41
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          XS/S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ececec;">
          XS
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ececec;">
          XS
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          &nbsp;
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          &nbsp;
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          &nbsp;
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          43
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S/XS
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S/XS
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S/XS
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          &nbsp;
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          &nbsp;
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          45
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;" bgcolor="#d9d9d9">
          M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;" bgcolor="#d9d9d9">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;" bgcolor="#d9d9d9">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          &nbsp;
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          47
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          S/M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          S/M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#d9d9d9;">
          S
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          49
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          S/M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          S/M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          S/M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          S/M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          S/M
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          51
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          M
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          53
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          M/L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          M
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#bababa;">
          M
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          55
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          M/L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          M/L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          M/L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          M/L
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          57
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          59
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          XL
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          L/XL
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          61
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          XL
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          XL
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          XL
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          XL
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          L/XL
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          L/XL
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          L/XL
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#8d8d8d;">
          L
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          63
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          &nbsp;
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          &nbsp;
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          &nbsp;
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          XL
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          XL
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          XL
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          XL
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          L/XL
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          L/XL
        </td>
      </tr>
      <tr>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          65
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          &nbsp;
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          &nbsp;
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          &nbsp;
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#ffffff;">
          &nbsp;
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          XL
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          XL
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          XL
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          XL
        </td>
        <td style="border:1.0px solid #e6e6e6;background:#6b6a6a;">
          XL
        </td>
      </tr>
      <tr>
        <td colspan="10" style="border:1.0px solid #e6e6e6;text-align:left;text-indent:20.0px;font-size:20.0px;line-height:26.0px;padding:10.0px 0;color:#5c5c5c;">
          温馨提示：由于个人体型差异及穿衣习惯的不同，此推荐表仅供参考，请亲们同时结合产品尺码表和自身习惯选择合适尺码。
        </td>
      </tr>
    </tbody>
  </table>
</div>
<p align="center">
  &nbsp;
</p>
<p align="center">
  &nbsp;
</p>
<div align="center">
  <img class="desc_anchor img-ks-lazyload" id="desc-module-3" src="{{asset('/home/imgs/spaceball.gif')}}" /> 
</div>
<div style="width:100.0%;height:auto;max-width:750.0px;margin:0 auto;" align="center">
  <div style="width:100.0%;height:auto;padding:20.0px 0 0;background:#ffffff;">
    <div style="width:400.0px;margin:0 auto;">
      <img class="img-ks-lazyload" alt="" src="{{asset('/home/imgs/tb2_09ztxxxxxb9xpxxxxxxxxxx-263817957.gif')}}" /> 
    </div>
  </div>
  <p>
    <img class="img-ks-lazyload" src="{{asset('/home/imgs/tb2v7t7av5n.ebjszfkxxx_qvxa-263817957.jpg')}}" /> 
  </p>
  <div style="width:100.0%;height:auto;padding:20.0px 0;background:#ffffff;">
    <div style="width:400.0px;margin:0 auto;">
      <img class="img-ks-lazyload" alt="" src="{{asset('/home/imgs/tb2ysditxxxxxadxxxxxxxxxxxx-263817957.gif')}}" /> 
    </div>
  </div>
<img class="img-ks-lazyload" src="{{asset('/home/imgs/tb2e8a0axmj.ebjy0fhxxbbdfxa-263817957.jpg')}}" /><img class="img-ks-lazyload" src="{{asset('/home/imgs/tb2fhgpaxei.ebjssplxxx6gfxa-263817957.jpg')}}" /><img class="img-ks-lazyload" src="{{asset('/home/imgs/tb2p62tajuo.ebjszfcxxxulfxa-263817957.jpg')}}" /><img class="img-ks-lazyload" src="{{asset('/home/imgs/tb2ruyyaram.ebjszfmxxcypvxa-263817957.jpg')}}" /><img class="img-ks-lazyload" src="{{asset('/home/imgs/tb2znqwaroj.ebjy1xaxxbnupxa-263817957.jpg')}}" /><img class="img-ks-lazyload" src="{{asset('/home/imgs/tb24vkqacij.ebjsspfxxbbkfxa-263817957.jpg')}}" /><img class="img-ks-lazyload" src="{{asset('/home/imgs/tb2admwaroj.ebjy1xaxxbnupxa-263817957.jpg')}}" /><img class="img-ks-lazyload" src="{{asset('/home/imgs/tb2upgqacij.ebjsspfxxbbkfxa-263817957.jpg')}}" /><img class="img-ks-lazyload" src="{{asset('/home/imgs/tb23gjtaoko.ebjszphxxxqcpxa-263817957.jpg')}}" /><img class="img-ks-lazyload" src="{{asset('/home/imgs/tb2wpzuaq5m.ebjszfrxxxpgvxa-263817957.jpg')}}" /> 
  <p>
    &nbsp;
  </p>
</div>
<div align="center">
  <img class="desc_anchor img-ks-lazyload" id="desc-module-4" src="{{asset('/home/imgs/spaceball.gif')}}" /> 
</div>
<div style="width:100.0%;height:auto;padding:20.0px 0;background:#ffffff;" align="center">
  <div style="width:400.0px;margin:0 auto;">
    <img class="img-ks-lazyload" alt="" src="{{asset('/home/imgs/tb2p2u.txxxxxabxpxxxxxxxxxx-263817957.gif')}}" height="80" width="400" /> 
  </div>
</div>
<div style="width:100.0%;max-width:750.0px;min-width:480.0px;margin:0 auto 30.0px;height:auto;line-height:50.0px;text-align:center;font-family:microsoft yahei;" align="center">
  <img class="img-ks-lazyload" src="{{asset('/home/imgs/tb2oxqmxyko.ebjszphxxxqcpxa-263817957.jpg')}}" /> 
  <table style="font-size:1.0em;background-repeat:no-repeat;background-position:left center;line-height:24.0px;width:100.0%;border-bottom:1.0px solid #dddddd;float:left;margin-bottom:30.0px;" class="ke-zeroborder" background="{{asset('/home/imgs/tb2oxqmxyko.ebjszphxxxqcpxa-263817957.jpg')}}" border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td style="border-left:1.0px solid #dddddd;font-size:1.25rem;color:#ffffff;font-family:微软雅黑;" height="69" align="center" width="60">
          1
        </td>
        <td style="text-align:left;color:#5c5c5c;border-right:1.0px solid #dddddd;">
          <span style="font-family:微软雅黑;font-size:1.5em;">面料设计</span><br />
<span style="font-family:微软雅黑;font-size:1.0rem;">精选优质面料，穿着舒适。</span> 
        </td>
      </tr>
    </tbody>
  </table>
</div>
<div style="width:100.0%;max-width:750.0px;min-width:480.0px;margin:0 auto 30.0px;height:auto;line-height:50.0px;text-align:center;font-family:microsoft yahei;" align="center">
  <img class="img-ks-lazyload" src="{{asset('/home/imgs/tb2zjvpxxmj.ebjy0fhxxbbdfxa-263817957.jpg')}}" /> 
  <table style="font-size:1.0em;background-repeat:no-repeat;background-position:left center;line-height:24.0px;width:100.0%;border-bottom:1.0px solid #dddddd;float:left;margin-bottom:30.0px;" class="ke-zeroborder" background="{{asset('/home/imgs/tb2oxqmxyko.ebjszphxxxqcpxa-263817957.jpg')}}" border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td style="border-left:1.0px solid #dddddd;font-size:1.25rem;color:#ffffff;font-family:微软雅黑;" height="69" align="center" width="60">
          2
        </td>
        <td style="text-align:left;color:#5c5c5c;border-right:1.0px solid #dddddd;">
          <span style="font-family:微软雅黑;font-size:1.5em;">领型设计</span><br />
<span style="font-family:微软雅黑;font-size:1.0rem;">时尚大翻领，凸显气质。</span> 
        </td>
      </tr>
    </tbody>
  </table>
</div>
<div style="width:100.0%;max-width:750.0px;min-width:480.0px;margin:0 auto 30.0px;height:auto;line-height:50.0px;text-align:center;font-family:microsoft yahei;" align="center">
  <img class="img-ks-lazyload" src="{{asset('/home/imgs/tb22pjpxcki.ebjy1zcxxxiopxa-263817957.jpg')}}" /> 
  <table style="font-size:1.0em;background-repeat:no-repeat;background-position:left center;line-height:24.0px;width:100.0%;border-bottom:1.0px solid #dddddd;float:left;margin-bottom:30.0px;" class="ke-zeroborder" background="{{asset('/home/imgs/tb2oxqmxyko.ebjszphxxxqcpxa-263817957.jpg')}}" border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td style="border-left:1.0px solid #dddddd;font-size:1.25rem;color:#ffffff;font-family:微软雅黑;" height="69" align="center" width="60">
          3
        </td>
        <td style="text-align:left;color:#5c5c5c;border-right:1.0px solid #dddddd;">
          <span style="font-family:微软雅黑;font-size:1.5em;">口袋设计</span><br />
<span style="font-family:微软雅黑;font-size:1.0rem;">对称式口袋设计，美观实用。</span> 
        </td>
      </tr>
    </tbody>
  </table>
</div>
<div style="width:100.0%;max-width:750.0px;min-width:480.0px;margin:0 auto 30.0px;height:auto;line-height:50.0px;text-align:center;font-family:microsoft yahei;" align="center">
  <img class="img-ks-lazyload" src="{{asset('/home/imgs/tb2e6emxpop.ebjszfhxxxqnpxa-263817957.jpg')}}" /> 
  <table style="font-size:1.0em;background-repeat:no-repeat;background-position:left center;line-height:24.0px;width:100.0%;border-bottom:1.0px solid #dddddd;float:left;margin-bottom:30.0px;" class="ke-zeroborder" background="{{asset('/home/imgs/tb2oxqmxyko.ebjszphxxxqcpxa-263817957.jpg')}}" border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td style="border-left:1.0px solid #dddddd;font-size:1.25rem;color:#ffffff;font-family:微软雅黑;" height="69" align="center" width="60">
          4
        </td>
        <td style="text-align:left;color:#5c5c5c;border-right:1.0px solid #dddddd;">
          <span style="font-family:微软雅黑;font-size:1.5em;">里衬设计</span><br />
<span style="font-family:微软雅黑;font-size:1.0rem;">优质里料，做工精致，表里如一。</span> 
        </td>
      </tr>
    </tbody>
  </table>

</div>
    <div style="width:100.0%;max-width:750.0px;min-width:480.0px;margin:0 auto 30.0px;height:auto;line-height:50.0px;text-align:center;font-family:microsoft yahei;" align="center">
      &nbsp;
    </div>

    <div style="width:100.0%;height:auto;padding:20.0px 0;background:#ffffff;" align="center">
      <div style="width:400.0px;margin:0 auto;">
        <img class="img-ks-lazyload" alt="" src="{{asset('/home/imgs/tb2be6vjvxxxxa3xxxxxxxxxxxx-263817957.gif')}}" height="80" width="400" /> 
      </div>
    </div>

    <div align="center">
      <img class="img-ks-lazyload" src="{{asset('/home/imgs/tb2i6kmxygo.ebjszfpxxckcxxa-263817957.jpg')}}" /><br/>
    </div>                

</div>
      <style>
       .baidu_hdys{width:100%;float:left;}
       .baidu_hdys_img{margin:0 auto;float:none;width:750px;}
      </style>
              
      <div style=" margin: 0 auto;font-size: 14px;text-align: center;font-family: 微软雅黑;color: #5c5c5c;flaot:none;line-height:25px;">
      <span style="color:#000">没空去韩国？就来韩都衣舍官网！韩都衣舍官网，网上购物首选。</span>
      </div>
        
  </li>

  <li style="display: none;">
  <div id="ECS_COMMENT" style="width:1100px;margin:0 auto;float:none;">

  <div class="New_goodCONtitle" id="userConmentList" name="userConmentList">商品评论</div>
  <ul class="New_goodCONPLlist">
      <li>
      <div class="New_goodPLTime New_goodPLNR_star">
          <span style="float:left;margin-right:5px; color:#7b7b7b"><strong>是否合身：</strong>正好</span> 
      </div>

        <div class="New_goodPLNR_top">
          <div class="New_goodPLNR">质量不错，我在这里领了优惠券之后更优惠了，打折不少，如果好用可以分享一下网址，记得收藏哦，每周都会更新网址：http://t.cn/RANJ7RH?ks</div>
          <div class="New_goodPLuserName">vml***@163.com</div>
        </div>

        <div class="New_goodPLTime New_goodPLNR_star">
                <span style="float:left;margin-right:5px; color:#7b7b7b"><strong>规格：</strong>颜色:酒红色 尺码:M</span>            
            <span style="float:left; color:#7b7b7b"><strong>评分：</strong></span>
                  <img src="/home/imgs/pingfen_pic.png" />
                  <img src="/home/imgs/pingfen_pic.png" />
                  <img src="/home/imgs/pingfen_pic.png" />
                  <img src="/home/imgs/pingfen_pic.png" />
                  <img src="/home/imgs/pingfen_pic.png" />
        </div>

        <div class="New_goodPLTime">[2016-11-18 23:10:30]</div>
        <div  class="New_goodPLNR_top" style=" color:#7b7b7b; margin-left:5px;"></div>
                 
      </li>
  </ul>

    <div class="New_goodPage">
        <span class="f_l f6" style="margin-right:10px; padding:5px 10px;">共 <b>1</b> 条评论</span>
    </div>
</div>
</li>
        <li></li> 
</ul>
    </div>
    
    </div>
</div>
<div id="good_Car" class="good_buycar" style="display: none;">
    <div class="good_Car_top">
      <ul>
        <li><div class="good_Car_topName">该商品已经成功添加到购物车</div>
          <div class="good_Car_topCOlose" onclick="_close_goods_Car();">×</div></li>
        <li><a href="{{url('home/goods/shopingcart')}}"><img src="/home/imgs/guycar_buycart.png"/></a>

          <a href="javascript:_close_goods_Car();" class="jixuguang" style="margin-top:0;"><img src="/home/imgs/jxgw.png"></a>
        </li>
      </ul>
    </div>
        <div class="good_Car_Bottom">
      <div class="good_Car_BottomTitle">购买此商品的用户还购买了：</div>
      <div class="good_Car_BottomNR">
                    <div class="good_Car_pic">
              <a href="goods-1052320.html" target="_blank"><img src="/home/imgs/1052320_thumb_g_1479363180519.jpg" height="80"  ></a>
              <p class="car_name">
                <a href="goods-1052320.html" target="_blank">韩都衣舍2016韩版女冬新款...</a>
              </p>
              <p class="car_money">￥858</p>
            </div>
                    <div class="good_Car_pic">
              <a href="goods-1051903.html" target="_blank"><img src="/home/imgs/1476178179685424826.jpg" height="80"  ></a>
              <p class="car_name">
                <a href="goods-1051903.html" target="_blank">韩都衣舍2016韩版女装冬装...</a>
              </p>
              <p class="car_money">￥828</p>
            </div>
                    <div class="good_Car_pic">
              <a href="goods-1051395.html" target="_blank"><img src="/home/imgs/1474435101284428449.jpg" height="80"  ></a>
              <p class="car_name">
                <a href="goods-1051395.html" target="_blank">韩都衣舍2016韩版女冬装新...</a>
              </p>
              <p class="car_money">￥808</p>
            </div>
                    <div class="good_Car_pic">
              <a href="goods-1052198.html" target="_blank"><img src="/home/imgs/1477536847592267226.jpg" height="80"  ></a>
              <p class="car_name">
                <a href="goods-1052198.html" target="_blank">韩都衣舍2016韩版女装冬季...</a>
              </p>
              <p class="car_money">￥678</p>
            </div>
                
                  
      </div>
    </div>
    <script type="text/javascript">
    function _close_goods_Car(){
        $('#good_Car').hide();
    }
    </script>
</div>
@endsection