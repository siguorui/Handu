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
<div class="handu_crumb" id='detail_crumb'> 您所在的位置 <code> &gt;</code> <a href=".">韩都衣舍</a> <code>&gt;</code> <a href="category-225-b0.html">HSTYLE女装</a> <code>&gt;</code> <a href="category-366-b0.html">上装</a> <code>&gt;</code> <a href="category-10645-b0.html">短外套/休闲外套</a> <code>&gt;</code> 韩都衣舍2016冬季新款韩版宽松毛呢外套女OU6246堯</div>
<div class='side_bar'>
  <ul id="cate_guide">
      <h1>商品分类</h1>
              <li><a href="category-10727-b0.html" title="毛呢外套" target="_blank">毛呢外套</a></li>
              <li><a href="category-255-b0.html" title="羽绒服" target="_blank">羽绒服</a></li>
              <li><a href="category-10519-b0.html" title="棉衣/棉服" target="_blank">棉衣/棉服</a></li>
              <li><a href="category-240-b0.html" title="毛针织衫" target="_blank">毛针织衫</a></li>
              <li><a href="category-241-b0.html" title="卫衣/绒衫" target="_blank">卫衣/绒衫</a></li>
              <li><a href="category-10645-b0.html" title="短外套/休闲外套" target="_blank">短外套/休闲外套</a></li>
              <li><a href="category-242-b0.html" title="T恤" target="_blank">T恤</a></li>
              <li><a href="category-246-b0.html" title="衬衫" target="_blank">衬衫</a></li>
              <li><a href="category-57-b0.html" title="套装" target="_blank">套装</a></li>
              <li><a href="category-10734-b0.html" title="风衣" target="_blank">风衣</a></li>
              <li><a href="category-254-b0.html" title="蕾丝衫/雪纺衫" target="_blank">蕾丝衫/雪纺衫</a></li>
              <li><a href="category-257-b0.html" title="马夹" target="_blank">马夹</a></li>
               </ul>
  
              <a href="http://www.handu.com/topic-423.html" target="_blank" title="新品" class="gg">
        <img src="{{asset('/home/imgs/1470880931507587404.png')}}" alt="新品" width="170" height="125" />
      </a>
                  
  <div class="share new_goods">
    <h1></h1>
    <ul>
    
          <li class="new_boxs">
        <a href="goods-1049728.html" title="韩都衣舍2016韩版女冬新款毛呢外套CQ5578莀" target="_blank">
          <img src="{{asset('/home/imgs/20160826050834_cq5578.jpg')}}" alt="韩都衣舍2016韩版女冬新款毛呢外套CQ5578莀" title="韩都衣舍2016韩版女冬新款毛呢外套CQ5578莀"/>
        </a>
        <ul>
          <li class="name"><a href="goods-1049728.html" target="_blank" title="韩都衣舍2016韩版女冬新款毛呢外套CQ5578莀">韩都衣舍2016韩版女冬新款毛呢外套CQ5578莀</a></li>
          <li class="price">
            <span class="new_price"><span class="arrow">￥</span>378.00</span>
            <del class="old_price">￥949.00</del>
          </li>
        </ul>
      </li>
           <li class="new_boxs">
        <a href="goods-1050804.html" title="韩都衣舍2016韩版女装冬装新款显瘦拼接毛呢外套GY5753" target="_blank">
          <img src="{{asset('/home/imgs/20160912100947_gy5753.jpg')}}" alt="韩都衣舍2016韩版女装冬装新款显瘦拼接毛呢外套GY5753" title="韩都衣舍2016韩版女装冬装新款显瘦拼接毛呢外套GY5753"/>
        </a>
        <ul>
          <li class="name"><a href="goods-1050804.html" target="_blank" title="韩都衣舍2016韩版女装冬装新款显瘦拼接毛呢外套GY5753">韩都衣舍2016韩版女装冬装新款显瘦拼接毛呢外套GY5753</a></li>
          <li class="price">
            <span class="new_price"><span class="arrow">￥</span>296.00</span>
            <del class="old_price">￥858.00</del>
          </li>
        </ul>
      </li>
           <li class="new_boxs">
        <a href="goods-1049492.html" title="韩都衣舍2016韩版女装冬装新款宽松显瘦百搭纯色毛呢外套EK6116囡" target="_blank">
          <img src="{{asset('/home/imgs/1049492_g_1481263520747.jpg')}}" alt="韩都衣舍2016韩版女装冬装新款宽松显瘦百搭纯色毛呢外套EK6116囡" title="韩都衣舍2016韩版女装冬装新款宽松显瘦百搭纯色毛呢外套EK6116囡"/>
        </a>
        <ul>
          <li class="name"><a href="goods-1049492.html" target="_blank" title="韩都衣舍2016韩版女装冬装新款宽松显瘦百搭纯色毛呢外套EK6116囡">韩都衣舍2016韩版女装冬装新款宽松显瘦百搭纯色毛呢外套EK6116囡</a></li>
          <li class="price">
            <span class="new_price"><span class="arrow">￥</span>358.00</span>
            <del class="old_price">￥828.00</del>
          </li>
        </ul>
      </li>
           <li class="new_boxs">
        <a href="goods-1049823.html" title="韩都衣舍2016韩版冬新女毛呢外套LF5944" target="_blank">
          <img src="{{asset('/home/imgs/20160827050842_lf5944.jpg')}}" alt="韩都衣舍2016韩版冬新女毛呢外套LF5944" title="韩都衣舍2016韩版冬新女毛呢外套LF5944"/>
        </a>
        <ul>
          <li class="name"><a href="goods-1049823.html" target="_blank" title="韩都衣舍2016韩版冬新女毛呢外套LF5944">韩都衣舍2016韩版冬新女毛呢外套LF5944</a></li>
          <li class="price">
            <span class="new_price"><span class="arrow">￥</span>278.00</span>
            <del class="old_price">￥798.00</del>
          </li>
        </ul>
      </li>
           <li class="new_boxs">
        <a href="goods-1051353.html" title="韩都衣舍2016韩版女装冬装新宽松纯色中长款毛呢外套IG5884" target="_blank">
          <img src="{{asset('/home/imgs/20160921000943_ig5884.jpg')}}" alt="韩都衣舍2016韩版女装冬装新宽松纯色中长款毛呢外套IG5884" title="韩都衣舍2016韩版女装冬装新宽松纯色中长款毛呢外套IG5884"/>
        </a>
        <ul>
          <li class="name"><a href="goods-1051353.html" target="_blank" title="韩都衣舍2016韩版女装冬装新宽松纯色中长款毛呢外套IG5884">韩都衣舍2016韩版女装冬装新宽松纯色中长款毛呢外套IG5884</a></li>
          <li class="price">
            <span class="new_price"><span class="arrow">￥</span>288.00</span>
            <del class="old_price">￥928.00</del>
          </li>
        </ul>
      </li>
          
     
    </ul>
  </div>
  
  <div class="share hot_goods">
    <h1></h1>
    <ul>
    
          <li class="hstyle_boxs">
        <a href="goods-1049734.html" alt="韩都衣舍16冬装女装新款显瘦毛呢外套NH6246" title="韩都衣舍16冬装女装新款显瘦毛呢外套NH6246" target="_blank">
          <img src="{{asset('/home/imgs/20160826050851_nh6246.jpg')}}" alt="韩都衣舍16冬装女装新款显瘦毛呢外套NH6246" title="韩都衣舍16冬装女装新款显瘦毛呢外套NH6246"/>
        </a>
        <ul>
          <li class="name">
            <a href="goods-1049734.html" target="_blank" title="韩都衣舍16冬装女装新款显瘦毛呢外套NH6246">韩都衣舍16冬装女装新款显瘦毛呢外套NH6246</a>
          </li>
          <li class="price">
            <span class="arrow">￥</span>
            <span class="new_price">299.00</span>
            <del class="old_price">￥838.00</del>
          </li>
      
        </ul>
      </li>
      
         <li class="hstyle_boxs">
        <a href="goods-1052213.html" alt="{{$data->title}}" title="{{$data->title}}" target="_blank">
          <img src="{{asset('/home/imgs/goods')}}/{{$data->pic}}" alt="{{$data->title}}" title="{{$data->title}}"/>
        </a>
        <ul>
          <li class="name">
            <a href="goods-1052213.html" target="_blank" title="{{$data->title}}">{{$data->title}}</a>
          </li>
          <li class="price">
            <span class="arrow">￥</span>
            <span class="new_price">{{$data->promt_price}}.00</span>
            <del class="old_price">￥{{$data->orign_price}}.00</del>
          </li>
      
        </ul>
      </li>
      
         <li class="hstyle_boxs">
        <a href="goods-1049797.html" alt="{{$data->title}}" title="{{$data->title}}" target="_blank">
          <img src="{{asset('/home/imgs/20160827050832_cq5963.jpg')}}" alt="{{$data->title}}" title="{{$data->title}}"/>
        </a>
        <ul>
          <li class="name">
            <a href="goods-1049797.html" target="_blank" title="{{$data->title}}">{{$data->title}}</a>
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
  
                           <a href="http://www.handu.com/user.php?act=register" target="_blank" title="维新运动" class="gg">
          <img src="{{asset('/home/imgs/1439186924043865480.jpg')}}" alt="维新运动" width="170" height="125"/>
        </a>
            
</div>
<div class='product_detail'>
    <div class='detail_top '>
        
        <div class='goods_detail_left '>
    <script type="text/javascript"  src="{{asset('/home/js/goods_no1214.js')}}"></script>
    <style>
      .gallery_content a{position:relative;display:block;float:left;}
      em.price_11{background:url("/Images/jb01.png") no-repeat 0 0;width: 125px;height:109px;position:absolute;right:0px;bottom:-76px;text-align:center;font-size: 34px;font-weight: bold;color:#fff;font-family: 'Arial';z-index:300; padding-top:76px; line-height:20px;}
    </style>
    
     
    <div class='gallery' >
        <div class='gallery_content'>
            <a href="{{asset('/home/imgs/20161027181029_ou6246.jpg')}}" class="jqzoom" title="商品大图" rel="gal1"><img id="masterImage" width="480" src='{{asset('/home/imgs/20161027181029_ou6246.jpg')}}' /></a>
            <div class="videoplayer"></div>
            <div class="colorImg"></div>
            
                
            <script>
         // getGood_price("OU6246");
            </script>
                  
             
        </div>
        <ul class='gallery_nav'>
                                    <li>
            <a  href="javascript:void(0);" rel="{gallery: 'gal1', smallimage: '{{asset('/home/imgs/201610271810290_OU6246.jpg')}}',largeimage: '{{asset('/home/imgs/201610271810290_OU6246.jpg')}}'}">
            <s></s>
            <img src="{{asset('/home/imgs/goods')}}/{{$data->pic}}" />
            </a>
            </li>
                        <li>
            <a  href="javascript:void(0);" rel="{gallery: 'gal1', smallimage: '{{asset('/home/imgs/201610271810291_OU6246.jpg')}}',largeimage: '{{asset('/home/imgs/201610271810291_OU6246.jpg')}}'}">
            <s></s>
            <img src="{{asset('/home/imgs/1477565789661614256.jpg')}}" />
            </a>
            </li>
                        <li>
            <a  href="javascript:void(0);" rel="{gallery: 'gal1', smallimage: '{{asset('/home/imgs/201610271810292_OU6246.jpg')}}',largeimage: '{{asset('/home/imgs/201610271810292_OU6246.jpg')}}'}">
            <s></s>
            <img src="{{asset('/home/imgs/1477565790858763009.jpg')}}" />
            </a>
            </li>
                        <li>
            <a  href="javascript:void(0);" rel="{gallery: 'gal1', smallimage: '{{asset('/home/imgs/201610271810293_OU6246.jpg')}}',largeimage: '{{asset('/home/imgs/201610271810293_OU6246.jpg')}}'}">
            <s></s>
            <img src="{{asset('/home/imgs/1477565790375739681.jpg')}}" />
            </a>
            </li>
                        <li>
            <a  href="javascript:void(0);" rel="{gallery: 'gal1', smallimage: '{{asset('/home/imgs/201610271810294_OU6246.jpg')}}',largeimage: '{{asset('/home/imgs/201610271810294_OU6246.jpg')}}'}">
            <s></s>
            <img src="{{asset('/home/imgs/1477565790122593968.jpg')}}" />
            </a>
            </li>
             
        </ul>
    </div>
    
<script type="text/javascript">
    $('.gallery_nav a').click(function(){
        $('.videoplayer').hide();
        $('.colorImg').hide();
    });
    $('.btn_playvideo').click(function(){  
        var _vsrc='';
        if($(".videoplayer embed").length==0){
            $(".videoplayer").html('<embed src="'+_vsrc+'" allowFullScreen="true" quality="high" width="480" height="480" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>');
        }
        $('.colorImg').hide();
        $(".videoplayer").show();
   
    });
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
             商品货号：&nbsp;&nbsp;<span class='code'>OU6246</span>&nbsp;&nbsp;&nbsp;&nbsp;
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
                  <!-- <em class='discount' style="background:#c80a28;"><a onclick="_is_login(login_suc);">登录</a>即享5折封顶价</em>-->               <!--      
                 <em class='discount' style="background:#c80a28;">【携入场资格】<a onclick="_is_login(login_suc);">登录</a>,立享５折封顶价!</em>
                -->
            
                        
                          
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

        <div id="goods_detail_2" class="product_detail_info">
            <div class="set">
              <span class='label'>数　　量：   &nbsp;</span>
              <span class="amount-widget" id="J_AmountWidget">
                  <span class="increase" onclick="change_num(1)">+</span>
                  <span class="decrease" onclick="change_num(-1)">-</span>
                  <input name="recId" id="cartRecId" type="hidden" value="0">
                  <input type="text" onchange="gaibian(this)" name="goods_number" id="goodsNumber" class="text" value="1" maxlength="3" title="请输入购买量">
                  <input name="goodsPrice" type="hidden" value="46">
              </span>
              <span id="goodsInventory">
                  <font class="loading">loading..</font>
                  <font class='inventory' total="">&nbsp;（库存<b></b>件）</font>
                  <font class='no_inventory'> （无货） </font>
              </span>
            </div>
          <p id='GoodsAttrSelectedString'></p>
            <input type="hidden" name="GoodsId" id="goods_id" value="{{$data->id}}" />
              <p class='detail_btn_set'>
                                <a onclick="_is_login(goods_login_suc)" class='fl detail_btn buy' href="javascript:void(0);" title='点击购买'></a>
                                <a onclick="insertCart()" class='fl detail_btn addCart' href="javascript:void(0);" title='加入购物车'></a>
                                
                              </p>
        </div>  
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

// var sku_list= [{"goods_attr":"575044|575046","product_number":"87"},{"goods_attr":"575044|575047","product_number":"105"}];
// $(function(){
//     update_sku_list();
// });
// function set_def_selected(){
//     if(sku_list.length>0){
//         var def=sku_list[0];
//         $.each(def['goods_attr'].split('|'),function(k,v){
           
//              $(".goods_attr li[val="+v+"]").addClass('sel');
        
//         });
//         $('.goods_attr li.sel').eq(0).click().click();//锁定不可选的属性值
//     }
//     showSelectSKU();
// }
// function update_sku_list(){
//     var goodsId= $("#goods_id").val();
//     var url='goods.php?act=get_products_v2&id='+goodsId;
//     $.getJSON(url,function(data){
//         //console.log(data);
//         sku_list=data;
//         set_def_selected();
//     });
// }
 
// //获取所有包含指定节点的路线
// function filterProduct(ids){
//     var result=[];
//     $(sku_list).each(function(k,v){
//         _attr='|'+v['goods_attr']+'|';
//         _all_ids_in=true;
//         for( k in ids){
//             if(_attr.indexOf('|'+ids[k]+'|')==-1){
//                 _all_ids_in=false;
//                 break;
//             }
//         }
//         if(_all_ids_in){
//             result.push(v);    
//         }
    
//     });
//     return result;
// }
    
// //获取 经过已选节点 所有线路上的全部节点
// // 根据已经选择得属性值，得到余下还能选择的属性值
// function filterAttrs(ids){
//     var products=filterProduct(ids);
    
//     var result=[];
//     $(products).each(function(k,v){
//         result=result.concat(v['goods_attr'].split('|'));
    
//     });
//     return result;
// }
// //已选择的节点数组
// function getSelAttrId(){
    
//      var list=[];
//      $('.goods_attr li.sel').each(function(){
//         list.push($(this).attr('val'));
//      });
//      return list;
// }
// $('.goods_attr li').click(function(){
//     // if($(this).hasClass('b')){
//     //     return ;//被锁定了
//     // }
//     if($(this).hasClass('sel')){
//         $(this).removeClass('sel');
//         //alert(22);
//     }else{
//         $(this).siblings().removeClass('sel');
//         $(this).addClass('sel');
     
//     }
//     var select_ids=getSelAttrId();
//     var filterP=filterProduct(select_ids);
//     if(filterP.length==1){
//         _show_product_num(filterP[0]['product_number']);
//     }
//     //已经选择了的规格
//     var $_sel_goods_attr=$('li.sel').parents('.goods_attr');
    
//     // step 1
//     var all_ids=filterAttrs(select_ids);     
    
//     //获取未选择的
//     var $other_notsel_attr=$('.goods_attr').not($_sel_goods_attr);
    
//     //设置为选择属性中的不可选节点
//     $other_notsel_attr.each(function(){
//        set_block($(this),all_ids);
      
//     });
    
//     //step 2
//     //设置已选节点的同级节点是否可选
//     $_sel_goods_attr.each(function(){ 
//         update_2($(this));  
//     });
    
//     showSelectSKU();
// });
// function update_2($goods_attr){
//     // 若该属性值 $li 是未选中状态的话，设置同级的其他属性是否可选
//     var select_ids=getSelAttrId();
//     var $li=$goods_attr.find('li.sel');
    
//     var select_ids2=del_array_val(select_ids,$li.attr('val'));
    
//     var all_ids=filterAttrs(select_ids2);
    
//     set_block($goods_attr,all_ids);
// }
// function set_block($goods_attr,all_ids){
// // 根据 $goods_attr下的所有节点是否在可选节点中（all_ids） 来设置可选状态
//     $goods_attr.find('li').each(function(k2,li2){
            
//         if($.inArray($(li2).attr('val'),all_ids)==-1){
//             $(li2).addClass('b');
//         }else{
//             $(li2).removeClass('b');
//         }
        
//     });
// }
// function del_array_val(arr,val){
// //去除 数组 arr中的 val ，返回一个新数组
//     var a=[];
//     for(k in arr){
//         if(arr[k]!=val){
//             a.push(arr[k]);
//         }
//     }
//     return a;
// }
// var a = ''; 
// var b = '';
// var c = 'size';
// var d = 'color';
// var goods = [];
// // var sc[] = '';  
// function showSelectSKU(){
//     var $li_sel = $(".goods_attr li.sel");
//     var goodsSelectedString ='你已选择了 ';
//     var not_choose=true;
    
//     //设置选择的属性字符串
//     $li_sel.each(function(){
        
//         _label = $(this).attr('title');
//         //a[] = _label;
//         if( typeof(_label) !='undefined'){
//             goodsSelectedString +='&nbsp;'+'['+_label+']';
//             not_choose=false;
//         }
        
//     });
//     $li_sel.each(function(){
//         _label = $(this).attr('l');
//         //a[] = _label;
//         if( typeof(_label) !='undefined'){
//             a = _label;
//             not_choose=false;
//         }
        
//     });
//     $li_sel.each(function(){
//         _label = $(this).attr('val');
//         //a[] = _label;
//         if( typeof(_label) !='undefined'){
//             b = _label;
//             not_choose=false;
//         }
        
//     });

//     // document.cookie="name="+a;
//     console.log(a);
//     console.log(b);
//     // var goods = [];    
//     goods[0]=a;
//     goods[1]=b;
//     console.log(goods);

//     if(not_choose){
//         goodsSelectedString='您未选择';
//     }
//     $('#GoodsAttrSelectedString').show().html(goodsSelectedString);
// }

// //添加至cookie


// //n =-1 显示原有库存
// function _show_product_num(n){
//     $("#goodsInventory .loading").hide();
//     if(n>0 || n==-1){
//         $("#goodsInventory .inventory").show();
//         if(n==-1){//设为总库存
//             n=$("#goodsInventory .inventory").attr('total');
//         }
//         $("#goodsInventory b").html(n).show();
        
        
//     }else{
//         $("#goodsInventory .no_inventory").show();
//     }
// }
// $('.goods_attr.img li').click(function(){
//     var img=$(this).find('img').attr('bigsrc');
//     if(typeof(img)!=='undefined'){
//         $('.videoplayer').hide();
//         $(".colorImg").show().html('<img src="'+img+'" alt="" />');
       
//     }
// })

</script>
        
        
        
<script src="/js/tag_1.js" type="text/javascript" async></script>
<script type="text/javascript">
// function goods_login_suc_addCart(data){ 
//     goods_addToCart(1053493,'0','0','');
//     DialogManager.close('L_ajax_login');
//     return ;
// }
// function goods_login_suc(data){ 
//     goods_addToCart(1053493,'0','1','');
//     DialogManager.close('L_ajax_login');
//     return ;
// }
function login_suc(){
  
  location.assign('shopingcart');
  // DialogManager.close('L_ajax_login');
  return ;
}
</script>           
            
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
                                                                <li>尺码:
                                                &nbsp;S                                                &nbsp;M                                                &nbsp;L                                                &nbsp;XS                        </li>
                                            <li>颜色:
                                                &nbsp;粉蓝色                                                &nbsp;酒红色                        </li>
                                      </ul>
                </div>
                                <div class="New_goodCONpic"><style type="text/css">
.quanbu{ width:750px; margin:0 auto; float:none}.quanbu img{ float:left; border:0}
area{ border:0; outline:none}
</style>
<div id="top" class="quanbu">
  <a href="http://www.handu.com/topic-640.html" target="_blank"><img alt="" src="{{asset('/home/imgs/sx_01.jpg')}}" width="750" height="86" /></a> <img border="0" alt="" src="{{asset('/home/imgs/sx_02.jpg')}}" width="750" height="170" usemap="#Map" /> 
  <map name="Map">
    <area href="http://www.handu.com/topic-1509.html" shape="rect" target="_blank" coords="2,2,255,167" /><area href="http://www.handu.com/topic-1364.html" shape="rect" target="_blank" coords="261,6,518,164" /><area href="http://www.handu.com/topic-1198.html" shape="rect" target="_blank" coords="522,4,747,165" />
  </map>
<img border="0" alt="" src="{{asset('/home/imgs/sx_03.jpg')}}" width="750" height="694" usemap="#Map2" /> 
  <map name="Map2">
    <area href="http://www.handu.com/brand_topic.php?id=10330" shape="rect" target="_blank" coords="14,115,113,252" /><area href="http://www.handu.com/topic-423.html" shape="rect" target="_blank" coords="121,118,224,251" /><area href="http://www.handu.com/brand_topic.php?id=10314" shape="rect" target="_blank" coords="233,116,338,249" /><area href="http://www.handu.com/brand_topic.php?id=319" shape="rect" target="_blank" coords="348,116,443,249" /><area href="http://www.handu.com/brand_topic.php?id=10142" shape="rect" target="_blank" coords="456,120,553,249" /><area href="http://www.handu.com/brand_topic.php?id=10442" shape="rect" target="_blank" coords="567,114,675,251" /><area href="http://www.handu.com/brand_topic.php?id=328" shape="rect" target="_blank" coords="63,266,166,384" /><area href="http://www.handu.com/brand_topic.php?id=10687" shape="rect" target="_blank" coords="174,266,280,385" /><area href="http://www.handu.com/brand_topic.php?id=10593" shape="rect" target="_blank" coords="288,265,391,386" /><area href="http://www.handu.com/brand_topic.php?id=10470" shape="rect" target="_blank" coords="396,266,503,387" /><area href="http://www.handu.com/topic-1492.html" shape="rect" target="_blank" coords="510,266,611,386" /><area href="http://www.handu.com/brand_topic.php?id=155" shape="rect" target="_blank" coords="-1,399,106,521" /><area href="http://www.handu.com/brand_topic.php?id=10686" shape="rect" target="_blank" coords="113,398,220,520" /><area href="http://www.handu.com/topic-1496.html" shape="rect" target="_blank" coords="227,397,335,520" /><area href="http://www.handu.com/brand_topic.php?id=22" shape="rect" target="_blank" coords="339,397,442,522" /><area href="http://www.handu.com/brand_topic.php?id=10469" shape="rect" target="_blank" coords="451,393,559,521" /><area href="http://www.handu.com/brand_topic.php?id=10361" shape="rect" target="_blank" coords="565,397,675,530" /><area href="http://www.handu.com/topic-1526.html" shape="rect" target="_blank" coords="59,535,165,676" /><area href="http://www.handu.com/brand_topic.php?id=196" shape="rect" target="_blank" coords="175,534,283,668" /><area href="http://www.handu.com/brand_topic.php?id=10534" shape="rect" target="_blank" coords="291,535,400,668" /><area href="http://www.handu.com/brand_topic.php?id=10765" shape="rect" target="_blank" coords="411,534,514,666" /><area href="http://www.handu.com/brand_topic.php?id=10407" shape="rect" target="_blank" coords="522,534,623,659" /><area href="http://www.handu.com/brand_topic.php?id=10745" shape="rect" target="_blank" coords="632,534,736,664" />
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
</div>                </div>
<style>
 .baidu_hdys{width:100%;float:left;}
 .baidu_hdys_img{margin:0 auto;float:none;width:750px;}
</style>
              
  <div style=" margin: 0 auto;font-size: 14px;text-align: center;font-family: 微软雅黑;color: #5c5c5c;flaot:none;line-height:25px;">
      <span style="color:#000">没空去韩国？就来韩都衣舍官网！韩都衣舍官网，网上购物首选。</span>
    </div>
        
            </li>
            <li ><div id="ECS_COMMENT" style="width:1100px;margin:0 auto;float:none;">
  <div class="New_goodCONtitle" id="userConmentList" name="userConmentList">商品评论</div>
  <ul class="New_goodCONPLlist">
                <li>
    <div class="New_goodPLTime New_goodPLNR_star">
        <span style="float:left;margin-right:5px; color:#7b7b7b"><strong>是否合身：</strong>正好</span>                  
      <div class="New_goodPLNR_top">
        <div class="New_goodPLNR">质量不错，我在这里领了优惠券之后更优惠了，打折不少，如果好用可以分享一下网址，记得收藏哦，每周都会更新网址：http://t.cn/RANJ7RH?ks</div>
        <div class="New_goodPLuserName">vml***@163.com</div>
      </div>
              <div class="New_goodPLTime New_goodPLNR_star">
                                    <span style="float:left;margin-right:5px; color:#7b7b7b"><strong>规格：</strong>颜色:酒红色 
尺码:M</span>
                                    
                  <span style="float:left; color:#7b7b7b"><strong>评分：</strong></span>
                                    <img src="/home/imgs/pingfen_pic.png" />
                                    <img src="/home/imgs/pingfen_pic.png" />
                                    <img src="/home/imgs/pingfen_pic.png" />
                                    <img src="/home/imgs/pingfen_pic.png" />
                                    <img src="/home/imgs/pingfen_pic.png" />
                                 </div>
      <div class="New_goodPLTime">[2016-11-18 23:10:30]</div>
      <div  class="New_goodPLNR_top" style=" color:#7b7b7b; margin-left:5px;">
               </div>
    </li>
                  </ul>
  <div class="New_goodPage">
      <span class="f_l f6" style="margin-right:10px; padding:5px 10px;">共 <b>1</b> 条评论</span>
        </div>
</div></li>
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