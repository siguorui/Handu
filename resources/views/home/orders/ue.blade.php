
  @extends('home.layoutcenter')
  @section('content')
<title>个人中心_韩都衣舍HSTYLE网-韩风快时尚第一品牌购物商城。正品保证！</title>

    
    <div class="user_right">
      
        
 <link type="text/css" href="{{ asset('/home/css/user_index.css') }}" rel="stylesheet">

<form name="selectPageForm" action="{{asset('/home/orders/insert')}}/5" method="post">
{{ csrf_field() }}

 <div id="myOrder">
    <h1 class="theme">
      我的订单评价
     </h1>
    <!-- 加载编辑器的容器 -->
    <script id="container" name="content" type="text/plain">
    </script>
    <!-- 配置文件 -->
    <script type="text/javascript" src="{{asset('/ue/ueditor.config.js')}}"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="{{asset('/ue/ueditor.all.js')}}"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">

        var ue = UE.getEditor('container');
    </script>
      <div style="text-align:center">
      <button type="submit" class="btn btn-primary" style="width: 60px;height: 30px;">提交</button>
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