  @extends('home.layoutcenter')
  @section('content')

    <div class="user_right">
      
        
 <link type="text/css" href="{{ asset('/home/css/user_index.css') }}" rel="stylesheet">

 <div id="myOrder">
    <h1 class="theme">
      我的订单
      <a href="http://www.handu.com/user.php?act=order_list&is_delete=1" class="blue fr" target="_blank">
       订单回收站
       <span class="img1"></span>
       <span class="img2"></span>
      </a>
     </h1>
        <div class="search">
    <form action="" method="get">
        <input type="hidden" name="act" value="order_list">
        <div style="margin-bottom:10px;">
          <span><input type="text" name="keywords" value="" placeholder="订单编号"></span>
          
              
          <button type="submit" class="searchBtn">&nbsp;</button>
       </div>
       
        <span>下单时间：
          <select id="" name="order_time">
            <option value="0" selected="">全部</option><option value="30">30天内</option><option value="2015">今年内</option><option value="2014">2014年</option><option value="2013">2013年</option><option value="2012">2012年</option>          </select>
        </span>
        &nbsp;&nbsp;
        <span>交易状态：
            <select id="sh_order_status" name="orderStatus">
                <option value="0" selected="">选择交易状态</option><option value="1">待支付</option><option value="2">待发货</option><option value="3">已发货</option><option value="4">已完成</option><option value="5">已取消</option>            </select>
        </span>&nbsp;&nbsp;
        <span>评价状态：
          <select id="sh_comment_status" name="comment">
            <option value="0">全部</option>
            <option value="1">未评价</option>
            <option value="2">已评价</option>
          </select>
        </span>
        
            
    </form>      
    </div>
    
        <div class="th">
          <span style="width:28%;">商品名称</span>
          <span style="width:7%;">单价</span>
          <span style="width:5%;">数量</span>
          <span style="width:10%;">售后</span>
          <span style="width:13%;">实付款</span>
          <span style="width:12%;">

                        <select id="s" onchange="dosubmit(this.value);">
            <option value="" selected="">选择交易状态</option><option value="0">待支付</option><option value="1">待发货</option><option value="2">已发货</option><option value="3">已完成</option><option value="4">已取消</option>            </select>
                      </span>
<script type="text/javascript">
  function dosubmit(val)
        {
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
            type:'post',
            dataType: "json",
            url:"{{ url('/home/orders/change')}}",
            data:{val:$('#s').val()},
            success:function(data)
            { 
                
                console.log(val);
            },
            error:function()
            {
                alert("异常");
            },
      
            });
            return false;
        }


</script>
          <span style="width:11%;">交易操作</span>
          <span style="width:8%;">其它操作</span>
    </div>
        <table class="order_list" cellpadding="0" cellspacing="0">

        
          @foreach($data as $v)
          <tbody><tr>
            <td colspan="8" class="order_th">
              <span>订单编号： <a href="http://www.handu.com/user.php?act=order_detail&order_id=3489747" target="_blank">{{$v -> order_num}}</a></span>
              <span>下单时间：{{$v -> order_time}}</span>
              <a href="javascript:void(0);" onclick="javascript:NTKF.im_openInPageChat();return false;" class="kefu">韩都客服<span class="icon"></span></a>
            </td>
          </tr>
        
          <tr orderid="3489747">
            <td width="26.6%" class="pro_name b1">
              <dl>
                <dt><a href="http://www.handu.com/goods-1052303.html" target="_blank" title="">
                <img src="/home/imgs/1052303_thumb_G_1479982240413.jpg" width="55" alt="韩都衣舍2016韩版女装秋装新款连帽针织衫JM6116蒖" title="韩都衣舍2016韩版女装秋装新款连帽针织衫JM6116蒖"></a></dt>
                <dd>
                  <ul>
                    <li class="name"><a href="http://www.handu.com/goods-1052303.html" target="_blank" tilte="韩都衣舍2016韩版女装秋装新款连帽针织衫JM6116蒖">{{$v -> title}}</a></li>
                    <li class="color_size"><span>颜色:{{$v -> color}}
尺码:S 
</span></li>
                  </ul>
                </dd>
              </dl>
            </td>
            <td width="7%" class="pro_price b2">{{$v -> promt_price}}.00</td>
            <td width="5%" class="pro_num b2">1</td>
         
            <td width="10%" class="pro_sh b1" rowspan="1">
                        </td>
         
            <td width="13%" class="pro_total b1" rowspan="1">
            <span class="price">￥{{$v -> promt_price}}.00</span>  
            <br>({{$v -> deliver}})<br>             <span>{{$v -> pay}}</span>             </td>
            
            <td width="12%" class="pro_statue b1" rowspan="1">
            
            
                         <span class="red">@if($v -> order_state == 0)待支付@elseif($v -> order_state == 1)待发货@elseif($v -> order_state == 2)已发货@elseif($v -> order_state == 3)已完成
                                    @else已取消@endif </span><br>                        
            <a href="http://www.handu.com/user.php?act=order_detail&order_id=3489747" title="未确认,未付款,未发货">订单详情</a><br>
                           
           </td>
            <td width="11%" class="pro_handle b1" title="评论数量:0" rowspan="1">
              @if($v -> order_state == 3)
              <a href="{{url('/home/orders/ue')}}/{{$v -> id}}">请留言</a>
              @elseif($v -> order_state == 0)
               <div style="text-align:center"><input type="button" onclick="window.open('/home/orders/myOrders')"value="立即支付" class="zhifu"></div> <br>
               <a href="javascript:cancel_order(3489747)" class="blue" style="margin-top:5px;">取消订单</a><br>
               @elseif($v -> order_state == 1)
               等待商家发货
               @else
               快递运送中            
                
              @endif
            </td>
            <td width="8%" class="pro_anther" rowspan="1">
            <a href="javascript:returnToCart(3489747)" class="blue">再次购买</a><br>
            </td>
            </tr>
                    
          
          <tr><td colspan="8" class="line"></td></tr>
      
            </tbody>
            @endforeach
    </table>
     
<form name="selectPageForm" action="http://www.handu.com/user.php" method="get">


 <div id="pager" class="pagebar">
  <span class="f_l f6" style=" width:auto;height:30px; line-height:30px;margin-left:10px;">总计 <b>{{$num}}</b>  个记录</span>
      
    
</div>


</form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
        
</div>
<script type="text/javascript">
function cancel_order(order_id){
    var url='user.php?act=cancel_order';
    var y=confirm('确定要取消订单吗？\n友情提示：订单取消后，请不要在第三方支付平台进行支付，取消订单支付无法发货，如有问题请联系官网客服！');
    if(!y) return ;
    
    $.post(url,{'order_id':order_id},function(data){
        if(data.error){
            alert('取消订单失败');
        }else{
            location.reload();
        }
        
    },'json');
    
}
function confirm_receive(order_id){
   var url='user.php?mod=order&act=affirm_received';

   $.post(url,{'order_id':order_id},function(data){
        if(data.error){
            alert('确认失败');
        }else{
           location='user.php?act=commentAdd&orderId='+order_id;
        }
        
    },'json');


}

</script>
 

    </div>
    
  </div>
</div>
      @endsection