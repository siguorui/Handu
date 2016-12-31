  @extends('home.layoutcenter')
  @section('content')

    
<div class="user_right">
      
        
 <link type="text/css" href="{{ asset('/home/css/user_index.css') }}" rel="stylesheet">

 <div class="userinfo">
        <div class="img">
          <a href="{{asset('/home/user/details')}}">
           <img src="{{$data1 -> photo}}" width="120">
           <div class="upd_img">修改头像</div>
          </a>
          <a href="{{asset('/home/user/details/')}}" target="_blank" class="upd_ifo">编辑个人资料</a>
        </div>
        <ul class="info">
          <li><span class="user_name">{{$data -> email}}</span>欢迎您！</li>
          <li>
                              <span class="lv lv0"></span>          <span>您的<a href="http://www.handu.com/helper-61-724.html" target="_blank" class="blue">经验值</a>为{{$data2 -> expr_val}}， 
          只要有一笔购物就能升级为普通会员哦            </span>
           
            </li>
          <li><a href="{{asset('/home/user/details')}}" target="_blank" class="blue">完善账户信息，随时随地享受快乐购物！还能获得100积分哦~</a></li>
          <li class="favor">我的优惠信息：
            <a href="http://www.handu.com/user.php?act=bonus" target="_blank">韩都优惠券<span class="red">（{{$data2 -> coupon}}）</span></a> 

            <a href="{{url('/home/user/address')}}" target="_blank">我的收货地址</a>

          </li>
        </ul>
      </div>
      <div class="loginT">您上一次的登录时间：2016-12-16 09:12:14 ,，您最近30天内提交了1个订单</div>
    
    <div class="mod" id="mod1">
        <h1>我的交易提醒：</h1>
        <div class="con">
                    <a href="http://www.handu.com/user.php?act=order_list&amp;orderStatus=2" class="blue">待发货<span class="red">（0）</span></a>
          <a href="http://www.handu.com/user.php?act=order_list&amp;orderStatus=3" class="blue">待收货<span class="red">（0）</span></a>
          <a href="http://www.handu.com/user.php?act=order_list&amp;comment=2" class="blue">待评价<span class="red">（0）</span></a>
                            </div>
      </div>
      
      <div class="mod" id="mod2">
        <h1><span class="fl">我的购物车：</span><a href="{{asset('/home/goods/shopingcart')}}" target="_blank" class="blue">查看购物车&gt;</a></h1>
        <div class="con">
          <div class="pros">
            
            
            <a href="{{asset('/')}}" target="_blank">
              <div class="none no2">
                <!--<div class="tips">
                  <p>您的购物车内没有商品，请挑选心仪的商品吧！</p>
                  <p><a href="" target="_blank" title="" class="red">去挑选喜欢的商品</a></p>
                </div>-->
              </div>
            </a>
         
            
            <ul>
              
                            <li class="car_box">
                <a href="http://www.handu.com/goods-1052477.html" target="_blank" title="韩都衣舍2016韩版女装秋装新款连衣裙JM5735.蒖">
                  <img src="{{ asset('/home/imgs/1052477_thumb_G_1479806769576.jpg') }}" title="" alt="">
                </a>
                <ul>
                  <li class="name">
                    <a href="http://www.handu.com/goods-1052477.html" target="_blank">韩都衣舍2016韩版女装秋装新款连衣裙JM5735.蒖</a>
                  </li>
                  <li class="price">
                    <span class="new_price">￥153.00</span>
                    <del class="old_price">864.00</del>
                  </li>
                  <li class="discount">省711</li>
                </ul>
              </li>
                             <li class="car_box">
                <a href="http://www.handu.com/goods-1054100.html" target="_blank" title="韩都衣舍2016韩版女装冬装新款连帽开衫中长款外套PC6187晽">
                  <img src="{{ asset('/home/imgs/1481697726577849571.jpg') }}" title="" alt="">
                </a>
                <ul>
                  <li class="name">
                    <a href="http://www.handu.com/goods-1054100.html" target="_blank">韩都衣舍2016韩版女装冬装新款连帽开衫中长款外套PC6187晽</a>
                  </li>
                  <li class="price">
                    <span class="new_price">￥176.00</span>
                    <del class="old_price">698.00</del>
                  </li>
                  <li class="discount">省522</li>
                </ul>
              </li>
                           </ul>
         
          </div>
        </div>
      </div> 
            <div class="mod" id="mod3">
        <h1><span class="fl">我的收藏夹</span><a href="{{ asset('/home/user/favorite')}}" target="_blank" class="blue">查看收藏夹&gt;</a></h1>
        <div class="con">
          <div class="pros">
            <ul style="margin-left: 0px;">
            @if(isset($data5))
            @foreach($data5 as $d5)
             <li class="car_box">
                <a href="http://www.handu.com/goods-1049016.html" target="_blank" title="">
                  <img src="/home/imgs/goods/{{$d5 -> pic}}" title="{{$d5 -> title}}" alt="{{$d5 -> title}}">
                </a>
              </li> 
            @endforeach
 
            @endif
              </ul>
            <div class="count">
                           <a href="{{ asset('/home/user/favorite')}}" target="_blank">查看全部宝贝</a>
            </div>
          </div>
          
          <div class="prev_btn btn" onclick="transImg('mod3','-1',4)"></div>
          <div class="down_btn btn" onclick="transImg('mod3','+1',4)"></div>
        </div>
      </div>
        
 
 <div class="mod" id="mod4">
        <h1><span class="fl">猜你喜欢</span></h1>
        <div class="con">
          <div class="pros">
            <ul>
                         <li class="car_box">
                <a href="http://www.handu.com/goods-1052489.html" target="_blank" title="">
                  <img src="{{ asset('/home/imgs/no_picture.gif') }}" title="" alt="">
                </a>
                <ul>
                  <li class="name">
                    <a href="http://www.handu.com/goods-1052489.html" target="_blank">韩都衣舍2016韩版女冬新款中长款羽绒服GW6225阨</a>
                  </li>
                  <li class="price">
                    <span class="price_name">售价：</span>
                    ￥978                  </li>
                </ul>
              </li>
                         <li class="car_box">
                <a href="http://www.handu.com/goods-1051983.html" target="_blank" title="">
                  <img src="{{ asset('/home/imgs/1481795377428218285.jpg') }}" title="" alt="">
                </a>
                <ul>
                  <li class="name">
                    <a href="http://www.handu.com/goods-1051983.html" target="_blank">韩都衣舍2016韩版女装秋装新款宽松显瘦拼接套头长袖卫衣AA6779玎</a>
                  </li>
                  <li class="price">
                    <span class="price_name">售价：</span>
                    ￥228                  </li>
                </ul>
              </li>
                         <li class="car_box">
                <a href="http://www.handu.com/goods-1047442.html" target="_blank" title="">
                  <img src="{{ asset('/home/imgs/no_picture.gif') }}" title="" alt="">
                </a>
                <ul>
                  <li class="name">
                    <a href="http://www.handu.com/goods-1047442.html" target="_blank">韩都衣舍2016韩版女装秋装新款宽松套头刺绣毛针织衫AA5571玎0802</a>
                  </li>
                  <li class="price">
                    <span class="price_name">售价：</span>
                    ￥258                  </li>
                </ul>
              </li>
                         <li class="car_box">
                <a href="http://www.handu.com/goods-1050030.html" target="_blank" title="">
                  <img src="{{ asset('/home/imgs/no_picture.gif') }}" title="" alt="">
                </a>
                <ul>
                  <li class="name">
                    <a href="http://www.handu.com/goods-1050030.html" target="_blank">韩都衣舍2016韩版女装冬装新款宽松显瘦加厚连帽羽绒服KY6569湲</a>
                  </li>
                  <li class="price">
                    <span class="price_name">售价：</span>
                    ￥898                  </li>
                </ul>
              </li>
                         <li class="car_box">
                <a href="http://www.handu.com/goods-1052142.html" target="_blank" title="">
                  <img src="{{ asset('/home/imgs/1481795155095847138.jpg') }}" title="" alt="">
                </a>
                <ul>
                  <li class="name">
                    <a href="http://www.handu.com/goods-1052142.html" target="_blank">韩都衣舍2016韩版女冬新宽松纯色套头毛衣RW6338瑒</a>
                  </li>
                  <li class="price">
                    <span class="price_name">售价：</span>
                    ￥298                  </li>
                </ul>
              </li>
                         <li class="car_box">
                <a href="http://www.handu.com/goods-1052303.html" target="_blank" title="">
                  <img src="{{ asset('/home/imgs/no_picture.gif') }}" title="" alt="">
                </a>
                <ul>
                  <li class="name">
                    <a href="http://www.handu.com/goods-1052303.html" target="_blank">韩都衣舍2016韩版女装秋装新款连帽针织衫JM6116蒖</a>
                  </li>
                  <li class="price">
                    <span class="price_name">售价：</span>
                    ￥258                  </li>
                </ul>
              </li>
                         <li class="car_box">
                <a href="http://www.handu.com/goods-1050048.html" target="_blank" title="">
                  <img src="{{ asset('/home/imgs/1481795441077771410.jpg') }}" title="" alt="">
                </a>
                <ul>
                  <li class="name">
                    <a href="http://www.handu.com/goods-1050048.html" target="_blank">韩都衣舍2016韩版女装冬装新款可脱卸帽中长款羽绒服AA6040玎</a>
                  </li>
                  <li class="price">
                    <span class="price_name">售价：</span>
                    ￥1078                  </li>
                </ul>
              </li>
                         <li class="car_box">
                <a href="http://www.handu.com/goods-1052255.html" target="_blank" title="">
                  <img src="{{ asset('/home/imgs/no_picture.gif') }}" title="" alt="">
                </a>
                <ul>
                  <li class="name">
                    <a href="http://www.handu.com/goods-1052255.html" target="_blank">韩都衣舍2016韩版女装秋新款无袖直筒显瘦背心裙连衣裙IG5960僥</a>
                  </li>
                  <li class="price">
                    <span class="price_name">售价：</span>
                    ￥288                  </li>
                </ul>
              </li>
                         <li class="car_box">
                <a href="http://www.handu.com/goods-1052204.html" target="_blank" title="">
                  <img src="{{ asset('/home/imgs/1481795182419501268.jpg') }}" title="" alt="">
                </a>
                <ul>
                  <li class="name">
                    <a href="http://www.handu.com/goods-1052204.html" target="_blank">韩都衣舍2016韩版女装冬装新款宽松显瘦拼接中长款羽绒服JM5658蒖</a>
                  </li>
                  <li class="price">
                    <span class="price_name">售价：</span>
                    ￥938                  </li>
                </ul>
              </li>
                         <li class="car_box">
                <a href="http://www.handu.com/goods-1049650.html" target="_blank" title="">
                  <img src="{{ asset('/home/imgs/no_picture.gif') }}" title="" alt="">
                </a>
                <ul>
                  <li class="name">
                    <a href="http://www.handu.com/goods-1049650.html" target="_blank">韩都衣舍2016韩版女装冬装新款印花直筒显瘦羽绒服JT6167</a>
                  </li>
                  <li class="price">
                    <span class="price_name">售价：</span>
                    ￥938                  </li>
                </ul>
              </li>
            
     
            
            </ul>
          </div>
          
          <div class="prev_btn btn" onclick="transImg('mod4','-1',4)"></div>
          <div class="down_btn btn" onclick="transImg('mod4','+1',4)"></div>
        </div>
      </div>
      
      
      

    </div>
    
  </div>
</div>
      @endsection