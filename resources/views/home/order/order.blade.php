<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>订单确认中心-韩都衣舍官方网站</title>

<script type="text/javascript" id="veConnect" async="" src="{{ asset('/home/js/capture-apps-4.js') }}"></script>
<script src="{{ asset('/home/js/hm.js') }}"></script><script async="" src="{{ asset('/home/js/analytics.js') }}"></script><script type="text/javascript" async="" charset="utf-8" src="{{ asset('/home/js/ntkfstat.js') }}"></script><script type="text/javascript" language="javascript" src="{{ asset('/home/js/jquery_002.js') }}"></script>
<script type="text/javascript" language="javascript" src="{{ asset('/home/js/jquery.js') }}"></script>
<script type="text/javascript">
var isIndex = '';
var process_request = "正在处理您的请求..."; 
</script>
<script type="text/javascript" src="{{ asset('/home/js/utils.js') }}"></script>
<script type="text/javascript" src="{{ asset('/home/js/jquery-1.8.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/home/js/transport_jquery.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/home/css/handu_base.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/home/css/handu_cart.css') }}/">
<script type="text/javascript" async="async" charset="utf-8" src="{{ asset('/home/js/zh_cn.js') }}" data-requiremodule="lang"></script>
<script type="text/javascript" async="async" charset="utf-8" src="{{ asset('/home/js/chat.js') }}" data-requiremodule="chatManage"></script>
<script type="text/javascript" async="async" charset="utf-8" src="{{ asset('/home/js/mqtt31.js') }}" data-requiremodule="MQTT"></script>
<script type="text/javascript" async="async" charset="utf-8" src="{{ asset('/home/js/mqtt.js') }}" data-requiremodule="Connection"></script></head>

<body><div id="nTalk_post_hiddenElement" style="left: -10px; top: -10px; visibility: hidden; display: none; width: 1px; height: 1px;"></div>


<div class="hd_header_w990">
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
<li class="on">
  <a href="http://www.handu.com/user.php" target="_blank" title="15313066678" class="user_name">欢迎您，15313066678</a>
  
  <a href="http://www.handu.com/user.php?act=privilege" title="注册会员" target="_blank">
    
  	    	<em class="lv lv0"></em>
      
  </a>
  <!--<img src="http://img01.handu.com/hdysweb/20141222/gwgl.png"  alt="官网会员内部攻略" border="0" usemap="#Map" />
  <map name="Map" id="Map">
    <area shape="rect" coords="0,2,151,27" href="http://www.handu.com/topic-1276.html" target="_blank" />
  </map>-->
</li>

<li class="integral">
  <a href="http://www.handu.com/user.php?act=exchange" target="_blank"><span>积分</span><b>190</b></a>
</li>
<li><a href="http://www.handu.com/user.php?act=logout">退出</a></li>
<li class="">
    <div class="more-active">
    <a href="http://www.handu.com/user.php" class="bn-more"><span>我的韩都</span></a><b></b>
    <div class="more-items">
        <table cellspacing="0" cellpadding="0">
            <tbody>
              <tr><td><a href="http://www.handu.com/user.php?act=order_list" target="_blank">我的订单</a></td></tr>
              <tr><td><a href="http://www.handu.com/user.php?act=bonus" target="_blank">我的优惠券</a></td></tr>
              <tr><td><a href="http://www.handu.com/user.php?act=collection_list" target="_blank">我的收藏</a></td></tr>
              <tr><td><a href="http://www.handu.com/user.php?act=return_list" target="_blank">退货办理</a></td></tr>
                         </tbody>
        </table>
    </div>
    </div>
</li>
<li><a href="http://www.handu.com/flow.php?step=cart" style="margin-right:10px" target="_blank">购物车</a></li></ul>
      <ul id="HD_HELPZONE" style="border-right:none;">
       
         <!--<li>
          <a href="http://www.handu.com/topic-1430.html" target="_blank" style="color:#c70a28;">团购批发</a>
        </li>-->
        <li><a href="javascript:NTKF.im_openInPageChat();">在线客服</a></li>
        <li><a href="http://www.handu.com/helper.html" target="_blank">帮助中心</a></li>
        <li onmouseover="dhceng('webdhceng', 'show');" onmouseout="dhceng('webdhceng', 'hide');" style="height:30px; display:inline-block;"><a href="http://www.handu.com/sitemap.html" target="_blank"><s></s>网站导航</a></li>
      </ul>
    </div>
  </div>
  <div class="webdhbox" id="webdhceng" style="width: 976px; display: none;" onmouseover="dhceng('webdhceng', 'show');" onmouseout="dhceng('webdhceng', 'hide');">
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
</script></div>

<!-- <form action="" method="post" name="theForm" onsubmit="return checkShoppingOrderForm();" id="theForm"> -->
<input name="is_now" id="is_now" value="0" type="hidden">
<input name="is_package" id="is_package" value="" type="hidden">
<div class="cart_header" style="width:990px;">
    <a href="http://www.handu.com/index.php" class="cart_logo1 fl"></a>
    <div class="cart_step step2 fr"></div>
</div>
<div class="wrap" style="padding-top:20px;background:#fefefe;">
    <div class="wrap_content">

      <div class="shopping_order">
          <div class="shopping_order_title">填写并核对订单信息</div>
           <ul class="confirm_list">

<li id="shop_address">	
    <h2>收货人信息<span style="display:block;position:relative;top:-30px;left:75px;" id="address_info" class="shop_updateinfo" subjectname="收货" onclick="openHide(this,0);" status="hide">[修改]</span></h2>
    <div class="shopping_order_currentinfo" style="display:block;">
      
   </div>

   

   <div id="all_address" class="shopping_order_info_parent" style="display: block;">
                   	
  <ul class="shopping_order_address" id="shopping_order_address" style="width:100%;">
      @foreach($address as $value)
   	   		<li class="{{$value->state==1? "selected":''}} addr_list" ondblclick="edit_show(this)" onclick="save(this)">
          <span class="address_name">
            <input name="address" value="{{$value->id}}" checked="checked" style="display:none;" type="radio">&nbsp;&nbsp;&nbsp;
            {{$value->to_name}}&nbsp;&nbsp;&nbsp;{{$value->phone}}        </span>
          
          <input name="is_default" value="{{$value->state}}" type="hidden">
          
          <br>
          <span class="address_dizhi" style="word-break: break-all;word-wrap: break-word;overflow:hidden;position:absolute;top:25px;padding: 5px 10px;line-height: 25px;height:40px;">
            {{$value->addr_area}}             {{$value->addr_deta}}</span>
        		 
          <br>
       		<span style="display:none;" id="addr_edit">
            <input class="hide_address_id" value="1259237" type="hidden">
            <a class="edit" style="cursor:pointer;" onclick="edit_address({{$value->id}},event);">[编辑]</a>
            <a class="edit" href="javascript:void(0);" onclick="if (confirm('你确认要删除该收货地址吗？'))dropAddress({{$value->id}});">[删除]</a>
          </span>
 			</li>
      @endforeach
        <li id="newAddress" style="background:none;">
      <span>
        <input class="hide_address_id" value="" type="hidden"> 
        <input class="address_isnow" value="0" type="hidden">
        <input name="address" value=" " style="display:none;" type="radio">&nbsp;&nbsp;&nbsp;
        <input name="" value="使用新地址" onclick="show_addr()" style="display: inline-block;padding: 0 10px;overflow: hidden;border: 1px solid #ccc;border-width: 0 1px;border-radius: 2px;background: #ccc url({{asset('/home/imgs/btn_cart.png')}}) 0 -380px repeat-x;cursor: pointer;color: #333;height: 25px;line-height: 25px;" type="button">
      </span>
    </li>
  </ul>

 <form action="{{url('/home/order/add_address')}}" id="formCart" method="post">
 
  <ul class="shopping_order_addressContent" id="edit_address" style="display:none;">
   
      <li>
        <div class="all_address_name"><em class="star">*</em>收货人姓名：</div> 
            <input value="" id="consignee" name="to_name" maxlength="20" class="all_address_txt" type="text"> (必填)
      </li>
    <li>
      <div class="all_address_name"><em class="star">*</em>所在地区：</div>
      <div class="all_address_select">
            <select id="province" onchange="showcity()"><option value="0">请选择</option> </select>
            <input id='province1' name="province" type="hidden"/>
            <select id="city"  onchange="showarea()"><option value="0">请选择</option> </select>
            <input id='city1' name="city" type="hidden"/>
            <select id="area" onchange="showdistrict()" ><option value="0">请选择</option></select>
            <input id='area1' name="district" type="hidden"/>
       </div>
    </li>
    <li>
      <div class="all_address_name"><em class="star">*</em>详细地址：</div>
        <input id="address" name="addr_deta" class="all_address_txt00" maxlength="200" value="" type="text">(必填)</li>
    <li>
     <div class="all_address_name"><em class="star">*</em>电话：</div>
    <input value="" id="tel" class="all_address_txt" maxlength="12" name="phone" type="text">  (必填)</li>

  <li class="all_address_Btn">
    
       <!-- <input value="" id="address_id" name="address_id" type="hidden"> -->
        <div class="cart_btn btn5 fl" onclick="add_address()"></div>
        <div class="cart_btn btn10 fl" style="margin-left:10px;" onclick="hideorder(this);"></div>&nbsp;&nbsp;<input value="1" checked="checked" name="state" type="checkbox" id='default'>设为默认 
</li>
</ul>
</form>

<script>
    function show_addr()
    {
      $('#edit_address').css('display','block');
      $('.btn5').attr('onclick','add_address()');
      $('.all_address_select').find("input[name='id']").remove();
    }

    function add_address()
    {
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
                    url:"{{url('/home/order/add_address')}}",
                    data:formData,
                    processData: false,    //必须设置
                    contentType: false,    //必须设置
                    success:function(data)
                    {
                        if(data.length == 0)
                        {
                            return ;
                        }
                        var str = '';
                        $('#shopping_order_address').find('.addr_list').remove();
                        $(data).each(function(i,n){
                          if(n['state']==1){
                            str += '<li class="selected addr_list" ondblclick="edit_show(this)" onclick="save(this)">';
                          }else{ 
                            str += '<li class="addr_list" onclick="edit_show(this)">';
                          }
                          str += '<span class="address_name">';
                          str += '<input name="address" value="'+n['id']+'" checked="checked" style="display:none" type="radio">'+n['to_name']+'&nbsp;&nbsp;&nbsp;'+n['phone']+'</span>';

                          str +=  '<input name="is_default" value="'+n['id']+'" type="hidden"><br>';
                          str +=  '<span class="address_dizhi" style="word-break: break-all;word-wrap: break-word;overflow:hidden;position:absolute;top:25px;padding: 5px 10px;line-height: 25px;height:40px;">'+n['addr_area']+'             '+n['addr_deta']+'</span><br>';
                          str += '<span style="display:none;" id="addr_edit">';
                          str +=  '<input class="hide_address_id" value="1259237" type="hidden">';
                           str +=  '<a class="edit" style="cursor:pointer;" onclick="edit_address('+n['id']+',event);">[编辑]</a>';
                          str +=  '<a class="edit" href="javascript:void(0);" onclick="if (confirm(\'你确认要删除该收货地址吗？\'))dropAddress('+n['id']+');">[删除]</a>';
                          str += '</span></li>';
                          // $('#shopping_order_address').prepend(str); 
                          $('#newAddress').before(str);
                          str = '';
                        });
                        $('#edit_address').css("display","none");
                        
                    },

                    error:function()
                    {
                        alert("异常");
                    }

                });
    }

    function edit_show(obj){
        $('.addr_list').removeClass('selected');
        $(obj).find('#addr_edit').css('display','block');
        $(obj).addClass('selected');
       
    }

    function save(obj){
      $('.addr_list').find("input[name='is_default'][value='1']").parent().addClass('selected');
      $('.addr_list').find("input[name='is_default'][value='0']").parent().removeClass('selected');
      
      $(obj).find('#addr_edit').css('display','none');
    }

    function edit_address(id,eve){
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
          });
        $('#edit_address').css('display','block');
       
        eve.stopPropagation();
            $.ajax({
                type:'POST',
                url:"{{ url('/home/order/edit_address')}}",
                data:{id:id},
                success:function(data)
                { 
                   $('#consignee').val(data.to_name);
                   $('#province').find("option[value='0']").html(data.province);
                   $('#province1').val(data.province);
                   $('#province').find("option[value='0']").attr({"selected":true});
                   $('#city').find("option[value='0']").html(data.city);
                   $('#city1').val(data.city);
                   $('#city').find("option[value='0']").attr({"selected":true});
                   $('#area').find("option[value='0']").html(data.district);
                   $('#area1').val(data.district);
                   $('#area').find("option[value='0']").attr({"selected":true});
                   $('#address').val(data.addr_deta);
                   $('#tel').val(data.phone);
                   if(data.state==1)
                   {
                      $('#default').attr({"checked":true});
                   }else 
                   {
                      $('#default').attr({"checked":false});
                   }
                 
                    $('.btn5').attr('onclick','update_address()');
                    $('.all_address_select').append('<input type="hidden" name="id" value="'+data.id+'" />');

                },
                error:function()
                {
                    alert("异常");
                },
      
            });

    }


    function update_address()
    {
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
                    url:"{{url('/home/order/update_address')}}",
                    data:formData,
                    processData: false,    //必须设置
                    contentType: false,    //必须设置
                    success:function(data)
                    {
                        if(data.length == 0 || data == 1)
                        {
                            return ;
                        }
                        var str = '';
                        $('#shopping_order_address').find('.addr_list').remove();
                        $(data).each(function(i,n){
                          if(n['state']==1){
                            str += '<li class="selected addr_list" ondblclick="edit_show(this)" onclick="save(this)">';
                          }else{ 
                            str += '<li class="addr_list" onclick="edit_show(this)">';
                          }
                          str += '<span class="address_name">';
                          str += '<input name="address" value="'+n['id']+'" checked="checked" style="display:none" type="radio">'+n['to_name']+'&nbsp;&nbsp;&nbsp;'+n['phone']+'</span>';

                          str +=  '<input name="is_default" value="'+n['id']+'" type="hidden"><br>';
                          str +=  '<span class="address_dizhi" style="word-break: break-all;word-wrap: break-word;overflow:hidden;position:absolute;top:25px;padding: 5px 10px;line-height: 25px;height:40px;">'+n['addr_area']+'             '+n['addr_deta']+'</span><br>';
                          str += '<span style="display:none;" id="addr_edit">';
                          str +=  '<input class="hide_address_id" value="1259237" type="hidden">';
                          str +=  '<a class="edit" style="cursor:pointer;" onclick="edit_address('+n['id']+',event);">[编辑]</a>';
                          str +=  '<a class="edit" href="javascript:void(0);" onclick="if (confirm(\'你确认要删除该收货地址吗？\'))dropAddress('+n['id']+');">[删除]</a>';
                          str += '</span></li>';
                          // $('#shopping_order_address').prepend(str); 
                          $('#newAddress').before(str);
                          str = '';
                        });
                        $('#edit_address').css("display","none");

                        $('.btn5').attr('onclick','update_address()');
                        $('#edit_address').css("display","none");
                    },

                    error:function()
                    {
                        alert("异常");
                    }

                });
    }
	//地址修改
    // function edit_address(obj,is_now) {

    //   $(".shopping_order_addressContent").css('display','block');
    //   console.log(11);
  //     $.ajaxSetup({
  //         headers: {
  //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //         }
  //   });
		// var address_id = obj.prev('.hide_address_id').val();
  //   console.log(11);
		//  $("#edit_address").css("display","block");
		//  obj.parents().find('.shopping_order_address li').removeClass('selected');
		//  obj.parent().parent().addClass('selected');
		 
		// $("input[name=address][value="+address_id+"]").attr("checked",'checked');
        // $.ajax({
        //     type : 'post',
        //     url : 'flow.php?step=ajax_edit_address',
        //     cache: false,
        //     data: {address_id:address_id,is_now:is_now,rid:Math.random()},
        //     dataType:'json',
        //     success:function(data) {

        //     	$("#edit_address").html(data.consignee);
        //     	showorder();
            	
        //     }
        // });
    // }
	///点radio最后改变配送方式
// 	function changeAddress(address,is_now) {
 
//      if(address.val()==" "){
//        $(".shopping_order_addressContent").css("display","block");
//      }else{
//        $(".shopping_order_addressContent").css("display","none");
//      }
 
//  	 	address.parents().find('.shopping_order_address li').removeClass('selected');
    
		
//     address.parent().parent().addClass('selected');
		
// 		 var address_dizhi=address.parents('.address_name').siblings(".address_dizhi").text();
//  		 var address_name 	=  address.parents('span').text().trim();
// 		 var address_tel   = address.parents('.address_name').siblings(".address_tel").text();
		 
		 
		
// 		$.get('flow.php?step=ajax_change_address', {address_id:address.val(),is_now:is_now, goods_price:$('#goodsPriceTotal').val(), discount:$('#discountTotal').val()}, function(data) {
//  			 $('#shop_shopping').html(data);  //改变运送方式
// 			 //改变显示的内容
// 			 $('#address_name').html(address_name+'&nbsp;'+address_tel);
// 			 $('#address_address').html(address_dizhi);
			 
 
//          }, 'json');
		 
// 	}
// 	//删除地址
	
	    function dropAddress(address_id){
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

    	$.ajax({
            type : 'post',
            url : "{{url('/home/order/del_address')}}",
            cache: false,
            data: {address_id:address_id},
            dataType:'json',
            success:function(data) {
				      if(data == 0){
                 $("input[name=address][value="+address_id+"]").parent().parent().remove();
                    var addrLength = $("#userConsigneeList>li").length;
        		    	if(addrLength <= 0){
        		    		$("#userConsigneeList").append('<li>您没有收货地址,请先添加一个收货地址</li>');
        		    	}
              }else {
                  alert('删除失败');
              }

            }
        });
    }
	
	
	 ////取消按钮
 function hideorder(item)
 {
	 // openHide(item,0,"save");
   $('#edit_address').css("display","none");
 }
/**收货地址绑定事件**/
// $(".shopping_order_address>li").each(function(index,item){
//   $(this).click(function(){
    
//     var addr =$('#address_info').attr("status");
//     if(addr == "hide"){
//       alert("请先点击[修改]!");
//       return;
//     }
//      $(this).find("input[name='address']").attr("checked",true);
//      var is_now = $(this).find(".address_isnow").val();
//      if($.trim($(this).attr("id"))=="newAddress"){
//        edit_address($(this).find("input[name='address']"),is_now);
//      }else{
//        changeAddress($(this).find("input[name='address']"),is_now);
//        $(this).find("#addr_edit").css("display","block");
//      }
//   });
// });

</script>                

           </div>
           <div></div> 
        </li>

                <li id="shop_shopping">
                                      <h2>配送方式<span class="shop_updateinfo" id="shipping_way_xiugai" subjectname="配送" onclick="openHide(this,1);">[修改]</span>
                 <span style="font-size:13px;cursor:default;">  包邮仅限“普通快递”</span>
                 </h2>
                 <div class="shopping_order_currentinfo">
                   <p id="peisong_way">
                   	<span>普通快递&nbsp;￥0.00 &nbsp;<span>送货时间不限</span></span>
                                                                       		
                   </p>
                   <input name="best_time" value="送货时间不限" type="hidden">
                 </div>

      <div class="shopping_order_delivery shopping_order_info_parent" style="display:none;">      <table class="express_list">
                        <thead><tr><th width="15%">送货方式</th> <th width="15%">配送时间</th><th width="20%">运费标准</th></tr></thead>
                        <tbody>
                            
                            <tr class="express_list_tr">
                                <td><input name="shipping" class="shopping_order_delivery_radiop" value="6" type="radio">&nbsp; <span class="shipping_name">EMS 国内特快专递</span>
                                <input class="shipping_is_now" value="0" type="hidden">
                                </td>
                                <td>
                                    <select name="district" class="selDistricts">
                                         <option value="送货时间不限" selected="selected">送货时间不限</option>
                                         <option value="周六日、假期送货">周六日、假期送货</option>
                                         <option value="周一至周五">周一至周五</option>
                                    </select>
                                </td>
                                <td style="text-indent:20px;"><span class="shipping_fee">￥0.00</span></td>
                            </tr> 
                            <tr class="express_list_tr">
                                <td><input name="shipping" class="shopping_order_delivery_radiop" checked="checked" value="9" type="radio">&nbsp; <span class="shipping_name">普通快递</span>
                                <input class="shipping_is_now" value="0" type="hidden">
                                </td>
                                <td>
                                    <select name="district" class="selDistricts">
                                         <option value="送货时间不限" selected="selected">送货时间不限</option>
                                         <option value="周六日、假期送货">周六日、假期送货</option>
                                         <option value="周一至周五">周一至周五</option>
                                    </select>
                                </td>
                                <td style="text-indent:20px;"><span class="shipping_fee">￥0.00</span></td>
                            </tr> 

                        </tbody>
                    </table>
                    <div class="cart_btn btn7 fl" onclick="openHide(this,1,'save');"></div>
                 </div>
          </li>
<script>
 $(function(){
        
        //配送时间改变
		$(".selDistricts").change(function(){
			var ship_name=$(this).parents('tr').children().find('.shipping_name').html();
			var ship_fee=$(this).parents('tr').children().find('.shipping_fee').html();
			var arrive_time=$(this).val();
			
			
			$('#peisong_way').html('<span>'+ship_name+'&nbsp;'+ship_fee+'&nbsp;<span>'+arrive_time+'</span></span>');
		 
			$("input[name='best_time']").val(arrive_time);
			
		});
		/**配送方式行选中事件**/
		$(".express_list_tr").each(function(index,item){
		  $(this).click(function(){
		    $(this).find("input[name='shipping']").attr("checked",true);
		    var shipping_is_now = $.trim($(".shipping_is_now").val());
		    changeShipping($(this).find("input[name='shipping']"),shipping_is_now);
		  });
		});
		 
});


///改变运送方式 改变价格

 function changeShipping(obj,is_now) {
		//改变颜色
	   obj.parents('tr').siblings('tr').removeClass('selected');
	   obj.parents('tr').addClass('selected');
		
			
		var shippingValue = obj.val();
 
		if(shippingValue <= 0){
			$("#PaymentSelect").html("请选择支付方式");
			$("#payment").val(0);
			
			return false;
		} 
		
		if(shippingValue == 10){
			
			$("#pay_name").html('货到付款');
			$('#pay_id').val(46);
			 		 
			$("input[name=selectPayment][value=46]").attr("checked",'checked');
			$('#zifu_way_xiugai').hide();
		}else{
  			$("#pay_name").html('支付宝');
 			$("#pay_id").val(24);
			$("input[name=selectPayment][value=24]").attr("checked",'checked');
			$('#zifu_way_xiugai').show();
		}
		var shipping_name = obj.next().html();
		var selDistricts =  obj.parents('tr').find('.selDistricts').val();
		var shipping_fee =  obj.parents('tr').find('.shipping_fee').html();
		
		
	 //显示运送的时间
	$(".express_list select[name='district']").hide();
    obj.parents('tr').find('.selDistricts').show();
		
		var addrId = $("input:radio:checked[name='address']").val();
		
		
 }

 </script>
 
                 
            <li>
                    <h2>支付方式<span id="zifu_way_xiugai" class="shop_updateinfo" subjectname="支付" onclick="openHide(this,2);">[修改]</span></h2>
                    <div class="shopping_order_currentinfo">
         <p>
            <span id="pay_name">支付宝</span> <input id="pay_id" value="24" name="payment" type="hidden">
          </p>
                    </div>
                    <div class="shopping_order_pay">
                   		  <div class="shopping_order_pay02 shopping_order_info_parent" style="display:none;">
                      <ul class="shopping_order_pay0002">
                      <h2 class="selected">支付平台</h2>
                <li> <input name="selectPayment" value="24" checked="checked" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay.gif')}}" width="125" height="32" border="0">
              <input name="payname" value="支付宝" type="hidden">
                <br><span id="zf_tip" style="color: #f00;font-size: 12px; margin-left:26px;">信用卡选这里哦~</span>
                 </li>
                           		                                           
           		    </ul>
                     <ul class="shopping_order_pay0002">
                        <h2>网银支付</h2>
                <li>
                    <input name="selectPayment" value="45" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/cib.gif')}}" width="125" height="32" border="0">
                    <input name="payname" value="兴业银行网上银行" type="hidden">

                </li>
                           		                                           
           		                                                      		   
			       <li>
                <input name="selectPayment" value="26" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay_ABC.gif')}}" width="125" height="32" border="0">
                <input name="payname" value="中国农业银行" type="hidden">

            </li>
   		       <li>                                        		                           			
                <input name="selectPayment" value="29" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay_CCB.gif')}}" width="125" height="32" border="0">
                <input name="payname" value="建设银行" type="hidden">

            </li>
            <li>
                <input name="selectPayment" value="27" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay_CMB.gif')}}" width="125" height="32" border="0">
                <input name="payname" value="招商银行" type="hidden">
            </li>
   		       <li>
                <input name="selectPayment" value="30" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay_ICBCB2C.gif')}}" width="125" height="32" border="0">
                <input name="payname" value="工商银行" type="hidden">
            </li>
            <li>
                <input name="selectPayment" value="31" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay_BOCB2C.gif')}}" width="125" height="32" border="0">
                <input name="payname" value="中国银行" type="hidden">

            </li>
            <li>
                <input name="selectPayment" value="32" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay_CEBBANK.gif')}}" width="125" height="32" border="0">
                <input name="payname" value="光大银行" type="hidden">
            </li>
            <li>
                <input name="selectPayment" value="33" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay_CMBC.gif')}}" width="125" height="32" border="0">
                <input name="payname" value="中国民生银行" type="hidden">

            </li>
            <li>
                <input name="selectPayment" value="34" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay_POSTGC.gif')}}" width="125" height="32" border="0">
                <input name="payname" value="中国邮政" type="hidden">
            </li>
            <li>
                <input name="selectPayment" value="28" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay_COMM.gif')}}" width="125" height="32" border="0">
                <input name="payname" value="交通银行" type="hidden">
            </li>
            <li>
                <input name="selectPayment" value="36" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay_BJBANK.gif')}}" width="125" height="32" border="0">
                <input name="payname" value="北京银行" type="hidden">

            </li>
            <li>
                <input name="selectPayment" value="37" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay_NBBANK.gif')}}" width="125" height="32" border="0">
                <input name="payname" value="宁波银行" type="hidden">

            </li>
            <li>
                <input name="selectPayment" value="38" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay_GDB.gif')}}" width="125" height="32" border="0">
                <input name="payname" value="广东发展银行" type="hidden">
            </li>
            <li>
                <input name="selectPayment" value="39" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay_SDB.gif')}}" width="125" height="32" border="0">
                <input name="payname" value="深圳发展银行" type="hidden">
            </li>
            <li>
                <input name="selectPayment" value="40" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay_SPDB.gif')}}" width="125" height="32" border="0">
                <input name="payname" value="上海浦东发展银行" type="hidden">
            </li>
            <li>
                <input name="selectPayment" value="41" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay_SHBANK.gif')}}" width="125" height="32" border="0">
                <input name="payname" value="上海银行" type="hidden">
            </li>
            <li>
                <input name="selectPayment" value="42" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay_CITIC.gif')}}" width="125" height="32" border="0">
                <input name="payname" value="中信银行" type="hidden">
            </li>
            <li>
                <input name="selectPayment" value="43" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay_HZCBB2C.gif')}}" width="125" height="32" border="0">
                <input name="payname" value="杭州银行" type="hidden">
            </li>
            <li>
                <input name="selectPayment" value="44" type="radio">&nbsp;<img class="payment_img" style="cursor:pointer;" src="{{asset('/home/imgs/alipay_FDB.gif')}}" width="125" height="32" border="0">
                <input name="payname" value="富滇银行" type="hidden">
            </li>	                                                  
</ul>
                   
                  <div class="cart_btn btn6 fl" onclick="save_pay();"></div>
    </div>
                   
        </div>
        </li>
                
                 
<script>
 

function save_pay(){
    var pay = $("input[name='selectPayment']:checked").siblings('input').val();
    $('#pay_name').html(pay);
    $('.shopping_order_pay02').css('display','none');

}
</script>                                      
 

            <h2>商品清单</h2>
            <a href="http://www.handu.com/flow.php" style="color:#1887E0; float:right;margin-right:50px;" onclick="_czc.push(['_trackEvent', '结算', '返回购物车']);">回到购物车，修改订单&gt;&gt;</a>

            <div class="shopping_order_information">
  				 <div class="shopping_order_information_title">
                <span class="information_title">商品图片</span> 
                <span class="information_title information_title00">商品名称</span>
                <span class="information_title">规格</span>
                <span class="information_title">单价</span>
                <span class="information_title">数量</span>
                <span class="information_title">小计</span>
            </div>
<form action="{{url('/home/order/submit_order')}}" method="post" onsubmit="return checksubmit()">
{{ csrf_field() }}
@foreach($order as $v)
<h3>  <span>品牌：{{$v['brand']}}</span></h3>
    <ul class="shopping_order_information_ul">
        <li>
            <div class="information_pic">
                <a href="http://www.handu.com/goods-1050030.html" title="{{$v['title']}}" target="_blank"><img src="{{asset('/home/imgs/goods')}}/{{$v['pic']}}" alt="{{$v['title']}}" width="77" height="77" border="0"></a> 
            </div>
            <div class="information_name">
                <div class="middle">
                <a href="http://www.handu.com/goods-1050030.html" title="{{$v['title']}}" target="_blank">{{$v['title']}}</a><br>
                <span>[<a href="http://www.handu.com/topic-423.html" target="_blank"><span style="color:#c80a28;">【年终盛典】春季新品6折首发.全场满199包邮.领券满299减30/满399减80/满599减150</span></a>]</span>                </div>
            </div>
            <div class="information_xinxi"> <div class="middle">颜色:{{$v['color']}} &nbsp;&nbsp;&nbsp;尺码:{{$v['size']}}</div></div>
            <div class="information_xinxi"><div class="cprice"><del>￥{{$v['orign_price']}}.00</del><br><span>￥{{$v['promt_price']}}.00 </span></div></div>
            <div class="information_xinxi"> <div class="middle">{{$v['number']}}</div></div>
            <div class="information_subtotal"> <div class="middle">￥{{$v['smtotal']}}.00</div></div>
            <input type="hidden" name="gid[]" value="{{$v['id']}}"/>
            <input type="hidden" name="size[]" value="{{$v['size']}}"/>
            <input type="hidden" name="color[]" value="{{$v['color']}}"/>
            <input type="hidden" name="num[]" value="{{$v['number']}}"/>
        </li>
    </ul>
@endforeach
  </div>

<div class='submit_data' style="display: none;">
    <input name="deliver_time" value="" type="hidden">
    <input name="deliver" value="" type="hidden">
    <input name="pay" value="" type="hidden">
    <input name="add_id" value="" type="hidden">
</div>
<script>
$(".cart_good_type").each(function(index,item){
  if(index==0){
    $(this).show();
  }
});
</script>           
  			            
            <div class="information_bonus songti">
              <div class="information_bonus_title">
                <div class="bonus_div_bg"><span class="bonus_btn_bg btn1" status="hide"></span></div>
                <span class="span_color">使用优惠券抵消部分金额</span>
              </div>
              <div class="information_bonus_content">
                                  <div class="bonus_header" style="text-indent:10px;">
                    <span class="yhq_redk"></span>
                    可使用优惠券：
                  </div>
                  <a class="trigger">更多</a>
                  <!--<div style="color:#c80a28;width:100%;float:left;text-indent:25px;padding:5px 0;">温馨提示：优惠券和满立减不能同时享受，请亲谨慎选择</div>-->
                <div class="bonus_list" id="coupon">
  			          <table>
                    <tbody><tr>
                      <th class="yhq_th" width="2.5%"></th>
                      <th class="yhq_th" style="text-align:left;" width="7%">优惠券金额</th>
                      <th class="yhq_th" width="22%">品牌</th>
                      <th class="yhq_th" width="18%">优惠券名称</th>
                      <!--<th class="yhq_th" width="20%">使用规则</th>-->
                      <th class="yhq_th" width="20%">有效日期</th>
                      <th class="yhq_th" width="8%">操作</th>
                    </tr>
                        
                    <tr class="shop_order_yhq_tr">
                      <td><input value="13449735" class="ckb_bonus" type="radio"></td>
                      <td class="yhq_td"><div class="fl"><span class="p_color">￥50.00</span></div></td>
                      <td class="yhq_td"><span class="grey"> HSTYLE女装 </span></td>
                      <td class="yhq_td"><span class="grey">手机端注册即送【限Hstyle女装1.4-12.31】</span></td>
                      <!--<td class="yhq_td"><span class="grey">仅限Hstyle女装使用</span></td>-->
                      <td class="yhq_td"><span class="grey">有效期至2017-01-31</span></td>
                      <td class="yhq_td"><div class="cart_btn btn12 shop_order_yhBtn"></div></td>
                    </tr>
                       
                    <tr class="shop_order_yhq_tr">
                      <td><input value="13449737" class="ckb_bonus" type="radio"></td>
                      <td class="yhq_td"><div class="fl"><span class="p_color">￥50.00</span></div></td>
                      <td class="yhq_td"><span class="grey"> HSTYLE女装 </span></td>
                      <td class="yhq_td"><span class="grey">PC端注册即送【限Hstyle女装1.4-12.31】</span></td>
                      <!--<td class="yhq_td"><span class="grey">仅限Hstyle女装使用</span></td>-->
                      <td class="yhq_td"><span class="grey">有效期至2017-01-31</span></td>
                      <td class="yhq_td"><div class="cart_btn btn12 shop_order_yhBtn"></div></td>
                    </tr>
                                            
                      <tr class="shop_order_yhq_tr">
                      <td><input value="0" checked="checked" class="ckb_bonus" type="radio"></td>
                      <td colspan="5"><span class="p_color">不使用优惠券</span> </td>
                    </tr>
                    </tbody></table>
                </div>
                  <div class="bonus_code" style="text-indent:10px;">
                 <div class="fl"><span class="yhq_redk" style="margin: 18px 0 10px 10px;"></span><div class="yhq_txtCode">激活新优惠券：</div><input id="bonusCode" style="margin-top:7px;" type="text"></div>
                 <a href="javascript:validateYhq(document.getElementById('bonusCode').value)" class="fl" style="margin-top:7px;"><div class="cart_btn btn14"></div></a>
                </div>
                <div class="bonus_code bonus_footer">
                  <!-- <span>共使用了<span class="p_color">2</span>个优惠券</span>-->
                   <div style="color:#c80a28;width:100%;float:left;text-indent:25px;padding-bottom:5px;">温馨提示：优惠券和满立减不能同时享受，请亲谨慎选择</div>
                   <span id="yhq_message"> 
                     
                </span></div>
              </div>
            </div>
            
            <div class="information_bonus">
              <div class="information_bonus_title">
                <div class="bonus_div_bg"><span class="bonus_btn_bg btn1" status="hide"></span></div>
                <span class="span_color">使用红包：</span>
              </div>
              <div class="information_bonus_content">
                <!--<div class="bonus_header grey">提示：优惠券和红包不能同时使用，请选其一</div>-->
                <div class="bonus_header">可使用红包:</div>
                     <a class="trigger">更多</a>
                     <div class="bonus_list" id="hongbao">
                     <table>
                                                                  <tbody><tr class="bonus_list_tr ">
                      <td width="3%"><input value="13449736" class="ckb_bonus" type="radio"></td>
                      <td width="20%"><span class="p_color"> ￥10.00</span> </td>
                      <td width="25%"><span class="grey">注册有礼10元红包下半年（限PC端）</span></td>
                      <td width="52%"><span class="grey">有效期至2017-02-28</span></td> 
                      </tr>
                                          <tr class="bonus_list_tr ">
                      <td width="3%"><input value="13449738" class="ckb_bonus" type="radio"></td>
                      <td width="20%"><span class="p_color"> ￥10.00</span> </td>
                      <td width="25%"><span class="grey">注册有礼10元红包下半年（限手机客户端）</span></td>
                      <td width="52%"><span class="grey">有效期至2017-01-30</span></td> 
                      </tr>
                                          
                    <tr class="bonus_list_tr">
                      <td width="3%"><input value="0" class="ckb_bonus" type="radio"></td>
                      <td width="20%"><span class="p_color">不使用红包</span> </td>
                      <td width="25%"><span class="grey"></span></td>
                      <td width="52%"><span class="grey"> </span></td> 
                    </tr>
                                      </tbody></table>
                </div>
                
                <div class="bonus_code bonus_footer">
        
                </div>
              </div>
            </div>
            
            
            <div class="information_bonus">
              <div class="information_bonus_title">
                <div class="bonus_div_bg"><span class="bonus_btn_bg btn1" status="hide"></span></div>
                <span class="span_color">使用包邮卡：</span>
              </div>
              <div class="information_bonus_content">
                <div class="bonus_header">可使用包邮卡:</div>
                <a class="trigger">更多</a>
                <div class="bonus_list" id="hongbao">
                  <table>
                                            <tbody><tr><td colspan="4" class="grey" style="text-indent:5px;">抱歉，没有可用的包邮卡！</td></tr>
                                        </tbody></table>
                </div>
                <div class="bonus_code bonus_footer">
                </div>
              </div>
            </div>
            
  			            <div class="order_ps fl">
              <dl>
                <dt>订单附言:</dt>
                <dd style="margin-top: 7px;">
                  <dl>
                    <dd>
                      <textarea rows="9" cols="50" id="postscript" name="message" onblur="javascript:if(this.value =='')this.value='选填，可以告诉卖家您对商品的特殊要求';" onfocus="javascript:if(this.value =='选填，可以告诉卖家您对商品的特殊要求'){this.value=''};" onkeyup="postscript_len(this, 396)">选填，可以告诉卖家您对商品的特殊要求</textarea>
                    </dd>
                    <dd style="close:both;">
                     <span style="color:#ccc;" class="surplusWords">可以输入198个字</span>
                    </dd>
                  </dl>
                </dd>
              </dl>
            </div>
            <div class="accumulated2 fr">
             		 <table>
              <tbody><tr>
                <td class="td_fr songti"><span class="p_color">{{$gnumber}}</span>件商品，商品金额：</td>
                <td id="order_totalPrice" class="td_fr td2">￥{{$total}}.00</td>
              </tr>
              <tr>
                <td class="td_fr songti">满立减：</td>
                <td id="order_cashback" class="td_fr">-￥0.00</td>
              </tr>
              <tr>
                <td class="td_fr songti">运费：</td>
                <td id="order_fare" class="td_fr">￥0.00</td>
              </tr>
                            <tr>
                <td class="td_fr songti">优惠券：</td>
                <td id="order_youhui" class="td_fr">-￥0.00 </td>
              </tr> 
               <tr>
                <td class="td_fr songti"> 红包：</td>
                <td id="order_hongbao" class="td_fr">-￥0.00 </td>
              </tr> 
              			              <tr>
                <td class="td_fr songti">应付总额：</td>
                <td id="order_totalAmount" class="td_fr">￥{{$total}}.00</td>
              </tr>
                          </tbody></table>

             </div>
      </div>
      <div class="information_bonus_pay">
         <div class="information_bonus_total">
           <input class="cart_btn btn13" type="submit" value="" >
         </div>
    </form>

    <script>
        function checksubmit(){
          var shippingValue = $("input:radio:checked[name='shipping']").val();
          var deliver_time = $('#peisong_way').find('span').find('span').html();
          var paymentValue = $("input:radio:checked[name='selectPayment']").val();
          //获取地址id值
          var add_val = $("input[name='is_default'][value='1']").val();
          // console.log(add_val);
          if(add_val == 1)
          {
            var add_id = $("input[name='is_default'][value='1']").prev().find("input[name='address']").val();
            $('.submit_data input').eq(3).val(add_id);
            // console.log(add_id);
          }else {
              alert('请选择收货地址');
              return false;
          }

           if(typeof(shippingValue) == 'undefined' || shippingValue <= 0){
              alert('请选择配送方式');
              return false;
            }
            if(typeof(paymentValue) == 'undefined' || paymentValue <= 0){
              alert('请选择支付方式 ');
              return false;
            }

          var pay_type = $('#pay_name').html();
          // console.log(pay_type);
          $('.submit_data input').eq(2).val(pay_type);

            if($('#postscript').val() == '选填，可以告诉卖家您对商品的特殊要求'){
                $('#postscript').attr('value','');
            }
           $('.submit_data input').eq(1).val(shippingValue);
           $('.submit_data input').eq(0).val(deliver_time);
            return true;
        }

        

    </script>

      <div style="width:100%;float:left;clear:both;">
					<div class="fr score_money">
           <span class="score_span_red">-￥<strong id="exchange_money">0.00</strong></span>
         </div>
         <div class="information_scores">
          <div class="score_theme">
            <input name="exchange_status" id="exchange_status" value="1/" type="checkbox">
            使用韩都积分
              <div class="score_count">
                <span class="spn_padd">:</span>
                <input id="exchange" name="integral" type="text">
                   点
              </div>
          </div>
          <div class="score_content">
            <div class="explain_exchage">
              <div class="exchange_url">
                <a href="http://www.handu.com/helper-61-724.html" target="_blank">什么是可用积分？</a>
              </div>
            </div>
            <div class="fr exchange_score" style="margin-left:5px;">（可用<span id="restrict">190</span>点）</div>
          </div>
      </div>
	        </div>
       <div style="width:100%;float:left;clear:both; color:#999;font-weight:normal">付款后退款或退货，抵现积分不予返还</div>
         <div class="information_bonus_total">
           您共需要为订单支付:<span id="total_amount">￥{{$total}}.00</span>
         </div>
      </div>
    </div>
</div>
<!-- </form> -->


<div class="hd_footer_w990">

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
      <span><img src="%E8%AE%A2%E5%8D%95%E7%A1%AE%E8%AE%A4%E4%B8%AD%E5%BF%83-%E9%9F%A9%E9%83%BD%E8%A1%A3%E8%88%8D%E5%AE%98%E6%96%B9%E7%BD%91%E7%AB%99_files/copyright.gif" alt="" width="33" height="37" border="0" align="absmiddle">鲁ICP备14003322号-2 © 2006-2015 handu.com All Rights Reserved. 
      
      <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=37010202000113" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="%E8%AE%A2%E5%8D%95%E7%A1%AE%E8%AE%A4%E4%B8%AD%E5%BF%83-%E9%9F%A9%E9%83%BD%E8%A1%A3%E8%88%8D%E5%AE%98%E6%96%B9%E7%BD%91%E7%AB%99_files/beiantubiao.png" style="float:left;"><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">鲁公网安备 37010202000113号</p></a>
      
      韩都衣舍电子商务集团股份有限公司，禁止非法复制
      </span>
      
                <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_5484197'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s25.cnzz.com/stat.php%3Fid%3D5484197%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_5484197"><a href="http://www.cnzz.com/stat/website.php?web_id=5484197" target="_blank" title="站长统计"><img src="{{asset('/home/imgs/pic.gif')}}" vspace="0" hspace="0" border="0"></a></span><script src="{{asset('/home/imgs/stat.php')}}" type="text/javascript"></script><script src="{{asset('/home/imgs/core.php')}}" charset="utf-8" type="text/javascript"></script> 
                <br>
             <center>

         <img src="{{asset('/home/imgs/zxmbutton02_sy.jpg')}}" alt="" width="114" height="38" border="0">
         
        <a href="http://www.handu.com/themes/handuyishe/html/yyzz.html" target="_blank"><img src="{{asset('/home/imgs/zxmbutton05_sy.jpg')}}" alt="" style="margin:5px 5px 0 5px;" width="103" height="38" border="0"></a>


		<a href="https://ss.knet.cn/verifyseal.dll?sn=e14071837010051457jcgb000000&amp;ct=df&amp;a=1&amp;pa=0.6688498684670776" target="_blank" style="display:inline-block;position:relative;width:102px;height:37px;">
       <img src="{{asset('/home/imgs/cnnic.png')}}" alt="" width="102" height="37" border="0"></a>

        <!--<a href="http://si.trustutn.org/info?sn=615140701004909923565" target="_blank">
        <img src="http://img01.handu.com/hdysweb/20140415/renzheng.jpg" alt="" width="45" height="38" border="0"></a>-->

        <a style="display: inline-block;width: 74px;margin: 4px 3px;"> <img src="{{asset('/home/imgs/cctv.png')}}" alt="" width="74" height="40" border="0"></a>
        </center>

        <script src="{{asset('/home/js/cert.js')}}"></script>
        <script type="text/javascript" src="{{asset('/home/js/certShow.js')}}"></script>
    </center>
     
  
 
   

</div>


<script type="text/javascript">

$(function() {
 
    
    //添加收藏夹
    $('#nav_addFavorite a').click(function(){
        var sURL='http://www.handu.com';
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


<div class="float_box" style="display: block;">
  
  <div class="float_app"></div>
  <a href="http://www.handu.com/flow.php?step=cart" target="_blank" class="a1" onclick="_czc.push(['_trackEvent', '悬浮', '购物车']);"></a>
  <a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODE4ODAzNF80MzI3MjBfNDAwODA2Nzc3N18yXw" target="_blank" class="a2" onclick="_czc.push(['_trackEvent', '悬浮', '在线客服']);"></a>
  <a href="http://www.handu.com/msg.php" target="_blank" class="a3" onclick="_czc.push(['_trackEvent', '悬浮', '在线反馈']);"></a>
  <a href="http://jq.qq.com/?_wv=1027&amp;k=29u2lqa" class="a4" target="_blank"></a>
  <a href="javascript:void(0);" class="a5 backTop" onclick="_czc.push(['_trackEvent', '悬浮', '返回顶部']);"></a>
  
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
    itemid: "",
     
  uid:"15333782",
    uname:"15313066678",

userlevel:0,
  orderid: "",
  orderprice: "",
itemparam: "size=41|color=red|brand=tata",
      erpparam: "sid=eadfddeeel|utm=adfe|source=baidu" 

} 
</script><script type="text/javascript" charset="utf-8" src=""></script>
 
  
 
   
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45831645-1', 'handu.com');
  ga('require', 'displayfeatures');
   
  ga('set', 'dimension1', '15333782');
  ga('set', '&uid', '15333782');
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
</div>

<script type="text/javascript">

$(function(){

  if($('#coupon tr').size()>5){
        $('#coupon').addClass('bonus_off').siblings('.trigger').show();
  }

  if($('#hongbao tr').size()>5){
        $('#hongbao').addClass('bonus_off').siblings('.trigger').show();
  }
  
  /**优惠券行绑定事件**/
  $(".shop_order_yhq_tr").each(function(index,item){
    $(this).click(function(e){
      $(this).find("input[name='bonus']").attr("checked",true);
      selectYhq($(this).find("input[name='bonus']"));
    });
  });
  /**红包行绑定事件**/
  $(".bonus_list_tr").each(function(index,item){
    $(this).click(function(){
      $(this).find("input[name='money_bonus']").attr("checked",true);
      changeHongbao($(this).find("input[name='money_bonus']"));
    });
  });
  /**包邮卡绑定事件**/
  $(".free_postage_tr").each(function(index,item){
    $(this).click(function(){
       $(this).find("input[name='postage_id']").attr("checked",true);
       changePostage($(this).find("input[name='postage_id']"));
    });
  });
  /**优惠券使用按钮点击事件**/
  $(".shop_order_yhBtn").click(function(){
    changeYhq(this);
    return false;
  });
});
$('.trigger').click(function(){
  $(this).siblings('.bonus_list').toggleClass('bonus_off');

  if($(this).text()=='更多'){
    $(this).text('收起');
    $(this).css("color","#c80a28");
  }
  else{
    $(this).text('更多');
    $(this).css("color","#333");
  }
})

 $('#exchange_status').click(function(){
        var status = $(this).attr('checked');
        if(status){
            $('.score_count').css("display","inline");
            $('.score_content').show();
        }else{
            $('.score_count').hide();
            $('.score_content').hide();
			var exchange_money = 0;
			var exchange = 0;
			var is_now = document.getElementById('is_now').value;
			$('#exchange').val('');
			$('#exchange_money').html('0.0');
			
			
        }
 });
  $('#exchange').keyup(function(){
      
		var restrict = $('#restrict').html();
		var is_now = document.getElementById('is_now').value;
		var exchange = $(this).val();
		
		exchange = parseInt(exchange);
		
		if(isNaN(exchange)){
			$(this).val(0);
			exchange = 0;
		}else{
			if(exchange >restrict ){
				exchange  = restrict;
			}
			$(this).val(exchange);
			
			var exchange_money = parseFloat(exchange / 100);
		
			
			$('#exchange_money').html(exchange_money);
		}
 
  });
</script>
<script>
 
$(".information_bonus_title").each(function(index,obj){
  $(this).click(function(){
	
    if($(this).find(".bonus_btn_bg").attr("status")=="show"){
      $(".information_bonus_content").eq(index).css("display","none");
      $(this).find(".bonus_btn_bg").removeClass("btn2").addClass("btn1");
      $(this).find(".bonus_btn_bg").attr("status","hide");
    }else{
	  $(".information_bonus_content").css("display","none");
	  $(".bonus_btn_bg").attr("status","hide");
	  $(".bonus_btn_bg").removeClass("btn2").addClass("btn1");
      $(".information_bonus_content").eq(index).css("display","block");
      $(this).find(".bonus_btn_bg").removeClass("btn1").addClass("btn2");
      $(this).find(".bonus_btn_bg").attr("status","show");
    }
  });
  /**使用新地址**/
  

   
  /**配送方式对应的配送时间下拉框的显示隐藏**/
  $(".express_list input:radio[name='selectPayment']").each(function(index,obj){
     $(this).click(function(){
        $(".express_list select[name='district']").css("display","none");
        $(".express_list select[name='district']").eq(index).css("display","block");
    });
  });
});
/**订单附言可输入字数判断**/
function postscript_len(obj,maxLen){
   var len = byteLength(obj.value);
   if(len >=maxLen) {
     $("#postscript").val($("#postscript").val().substr(0,394));
   } else {
    $(".surplusWords").html("还可输入 <b>"+parseInt((maxLen-len)/2)+"</b> 个字");
   }
}
function byteLength (sStr) {
 aMatch = sStr.match(/[^\x00-\x80]/g);
 return (sStr.length + (! aMatch ? 0 : aMatch.length));
}

/**对应信息的隐藏和显现**/
var blocklen=0;
function openHide(obj,index,param3){
  if(index == 0){
    $(".shopping_order_address>li").each(function(index,item){
      var eee=$("input[name='address']").eq(index).prop("checked");
      if(eee==true){
        $(".shopping_order_address>li").eq(index).find('#addr_edit').css("display","block");
        if(blocklen ==1){
           $(".shopping_order_address>li").eq(index).find('#addr_edit').css("display","none");
        }
      }
    })
  }
  
  if(!isNull(param3)){
	  var target = $(obj).parents().find(".shop_updateinfo");
	  target=$(".shop_updateinfo").eq(index);
    openHide(target,index);
  }else{
     if($(obj).html()=="[修改]"){
        if(blocklen==1){
          //return false;
		      var subjectname = $(".shop_updateinfo[status='show']").attr("subjectname");
          alert("请先保存"+subjectname+"信息");
        }else{
          $(".confirm_list>li").eq(index).css("border","2px solid #c70a28");
          $(".shopping_order_currentinfo").eq(index).css("display","none");
          $(".shopping_order_info_parent").eq(index).show();
          $(obj).html("[保存"+$(obj).attr("subjectname")+"信息]");
		      $(obj).attr("status","show");
          blocklen++;
         }
     }else{
        closeOpen(obj,index);
     }
  }
}
/**点击取消按钮 隐藏相应的信息**/
function closeOpen(obj,index,param3){
  if(index == 0){
    $(".shopping_order_address>li").each(function(index,item){
        var eee=$("input[name='address']").eq(index).prop("checked");
        if(eee==true){
          $(".shopping_order_address>li").eq(index).find('#addr_edit').css("display","none");
        }
    })
  }
  blocklen=0;
  $(".confirm_list>li").eq(index).css({"border":"none","border-bottom":"1px solid #d8d8d8"});
  if(index != 0){
    $(".shopping_order_currentinfo").eq(index).css("display","block");
    $(".shopping_order_info_parent").eq(index).hide();
  }
  if(index==0){
    $(".shopping_order_addressContent").css("display","none");
  }else if(index==3){
    $(".shopping_order_bill_new").css("display","none");
  }
 if(isNull(param3)){
    $(obj).html("[修改]");
    $(obj).attr("status","hide");
  }else if(param3=="cancel"){
    $(obj).parents().find(".shop_updateinfo").html("[修改]");
	  $(obj).parents().find(".shop_updateinfo").attr("status","hide");
  }
}

function isNull(param)
{
  var bb=false;
  if(param==undefined||param==null||$.trim(param).length==0){
    bb=true;
  }
  return bb;
}



/*选择优惠券方法 值改变样式*/
function selectYhq(obj)
{
   
	 obj.parents('tr').siblings('tr').removeClass('selected');
	 obj.parents('tr').addClass('selected');
	//alert($("input:radio:checked[name='money_bonus']").val());
	 /*if(typeof($("input:radio:checked[name='money_bonus']").val())!='undefined' && $("input:radio:checked[name='money_bonus']").val() != 0 && $("input:radio:checked[name='bonus']").val() != 0)
     {
            alert('优惠劵和红包不能同时使用，请选择其一！');
	 	    obj.attr("checked",false);
            return false;	
   	 }*/

	 /**使用按钮显现**/

   if(obj.val()!=0){
    $(".shop_order_yhBtn").hide();
    obj.parent().parent().find(".shop_order_yhBtn").show();
   }else{
    $(".shop_order_yhBtn").hide();
    Ajax.call('flow.php?step=change_bonus', 'bonus=' + bonus_id + '&is_now=' + is_now, function(data){
     
    $('.accumulated2').html(data.content);
    $('#total_amount').html(data.total);
    }, 'GET', 'JSON');
    
   }
   /**改变默认值**/
   	var bonus_id =  obj.val();
	 
	 
	var is_now = document.getElementById('is_now').value;
	
}




/*选择红包*/
function  changeHongbao(obj)
{
		var bonus_id = obj.val();

		var is_now = document.getElementById('is_now').value;
		/*改变样式*/
		obj.parents('tr').siblings('tr').removeClass('selected');
	     obj.parents('tr').addClass('selected');

}



/*选择包邮卡*/
function  changePostage(obj)
{
		/*改变样式*/
    obj.parents('tr').siblings('tr').removeClass('selected');
	  obj.parents('tr').addClass('selected');
    var shipingId  = $.trim($(".shopping_order_delivery_radiop:checked").val());
    var postage_id = obj.val();
		var is_now = document.getElementById('is_now').value;
                    if(shipingId != 9){
                        if(postage_id == 0){
                            return false;
                        }
                        alert('包邮卡只能使用普通快递,请重新选择配送方式');
                        $(this).attr('checked','');
                        return false
                    }else{
                         if(postage_id == 0){
                            $("#shipping_way_xiugai").show();
                        }else{
                            $("#shipping_way_xiugai").hide();
                        }
                        
                    }
	    
}
</script>
<script type="text/javascript">

    var xmldom = null;
    function showprovince(){
      $.ajax({
        url: "{{ url('/home/xml/ChinaArea.xml')}}",
        type: 'get',
        dataType: 'xml',
        success:function(msg)
        {
          xmldom = msg;
          var pros = $(msg).find('province');
          pros.each(function(k,v){
            var nm = $(this).attr('province');
            var id = $(this).attr('provinceID');
            var str = "<option value='"+id+"'>"+nm+"</option>";
            $('#province').append(str);
            
          });

        }
      });
    }

    $(function(){
      //页面加载完毕显示省份
      showprovince();
    });

    function showcity(){
      area = $('#area').remove();
       $('#province1').val($("#province option:selected").html());
      
      var pid = $('#province option:selected').val();

      var xml_province = $(xmldom).find("province[provinceID='"+pid+"']");
      var citys = xml_province.find('City');
      $('#city').empty();
      // $('#city').append("<option value='0'>-请选择-</option>");
      citys.each(function() {
        var nm = $(this).attr('City');
        var id = $(this).attr('CityID');
        $('#city').append("<option value='"+id+"'>"+nm+"</option>");
        
      });
    }

    function showarea()
    {
      $('.all_address_select').append(area);
      $('#city1').val($("#city option:selected").html());
      var pid = $('#city option:selected').val();
      var areas = $(xmldom).find("City[CityID='"+pid+"']").find('Piecearea');
      $('#area').empty();
      // $('#area').append("<option value='0'>-请选择-</option>");
      areas.each(function() {
        var nm = $(this).attr('Piecearea');
        var id = $(this).attr('PieceareaID');
        $('#area').append("<option value='"+id+"'>"+nm+"</option>");
        
      });

    }

    function showdistrict()
    {
      $('#area1').val($("#area option:selected").html());
    }
  </script>





<iframe id="veUtilsIframe" style="visibility: hidden; display: none; border: medium none;" width="0" height="0"></iframe><iframe id="1482760559348" tabindex="-1" src="%E8%AE%A2%E5%8D%95%E7%A1%AE%E8%AE%A4%E4%B8%AD%E5%BF%83-%E9%9F%A9%E9%83%BD%E8%A1%A3%E8%88%8D%E5%AE%98%E6%96%B9%E7%BD%91%E7%AB%99_files/iframeStorage.htm" style="display: none;"></iframe></body></html>