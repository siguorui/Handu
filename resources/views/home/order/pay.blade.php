@extends('home.shopping')

@section('content')

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>订单确认确认成功-韩都衣舍官方网站</title>
<script type="text/javascript" src="{{ asset('/home/js/utils.js') }}"></script>
<script type="text/javascript" src="{{ asset('/home/js/jquery-1.8.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/home/js/transport_jquery.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/home/css/handu_base.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/home/css/handu_cart.css') }}">

<style type="text/css">
.congratulation{
  font-size: 22px;
  color: #C70A28;
  text-align: center;
  margin: 30px auto 10px;
}


.confirm{
  width: 700px;
  margin: 10px auto;
}
table.confirm th{
  background: #E9E9E9;
  padding: 5px;
  text-align: center;
}
table.confirm td{
  border:1px solid #DDDDDD;
  padding: 10px;
  text-align: center;

}
.shop_success_payment{
	width:700px;height:auto;margin:10px auto;overflow:hidden;
}
</style>


<body>
<div id="nTalk_post_hiddenElement" style="left: -10px; top: -10px; visibility: hidden; display: none; width: 1px; height: 1px;"></div>
  <div class="shopping_1100" style="width:990px;">
    <div class="cart_header" style="width:990px;">
	  <a href="http://www.handu.com/index.php" class="cart_logo1 fl"></a>
	  <div class="cart_step step3 fr"></div>
	</div>
    <div class="wrap" style="width:990px;">
	  	  
	  	  <h1 class="congratulation">恭喜您,订单提交成功！</h1>
	        <table class="confirm">
        <thead>
              <tr><th>订单编号</th>
              <th>应付金额</th>
              <th>配送方式</th>
              <th>支付方式</th>
        </tr></thead>
        <tbody>
             <tr>
                <td>{{$pay['order_num']}}</td>
                <td>￥{{$pay['total']}}.00</td>
                <td>
                  @if($pay['deliver']==9)
                  普通快递
                  @elseif($pay['deliver']==6)
                  EMS 国内特快专递
                  @endif
                </td>
                <td>
                  					{{$pay['pay']}}				                  </td>
             </tr>
        </tbody>
      </table>
  	 <div class="shop_success_payment">
  	<span class="fl" style="color:#c80a28;margin: 5px 0;">温馨提示：</span>	  <div class="fl warm_tip2">
  	     下单30分钟内付款+关键词好评就送10元红包&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.handu.com/topic-640.html" target="_blank">查看详情</a>
  	  </div>

      <form method="post" action="{{ url('/home/order/pay_now')}}">
        {{ csrf_field() }}
            <input type="hidden" name="order_num" value="{{$pay['order_num']}}" />

                <div class="fr">
  	     <div style="text-align:center"><input onclick="" value="" class="zhifu" type="submit"></div>         </div>
      </form>
  	</div>
    	
	
  </div>
  </div>
@endsection