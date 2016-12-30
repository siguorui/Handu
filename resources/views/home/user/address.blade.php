@extends('home.layout')
  @section('content')
<div class="user_main">
  <div class="user_wrap">
    
    <h1 class="crumbs">
      您当前的位置:<a href="/" target="_blank">韩都衣舍</a> &gt; <a href="/user.php" target="_blank">我的韩都</a>
      &gt; <a href="" target="_blank">收货地址</a>    </h1>
    
    <div class="user_left">
      <a href="user.php" class="home">
        <span>我的韩都</span>
      </a>
      
      <div class="nav">
   
         
        <dl class="menu">
          <dt>交易管理<span class="arrow"></span></dt>
          <dd>
            <ul>
              <li><a href="flow.php" target="_blank">我的购物车</a></li>
              <li key="order_list"><a href="user.php?act=order_list">我的订单</a></li>
              <li key="collection_list" class="last"><a href="user.php?act=collection_list">我的收藏</a></li>
            </ul>
          </dd>
        </dl>
        
        <dl class="menu">
          <dt>客户服务<span class="arrow"></span></dt>
          <dd>
            <ul>
              <li key="return_list"><a href="user.php?act=return_list">售后服务</a></li>
              <li key="comment_list"><a href="user.php?act=comment_list">我的评价</a></li>
              <!--<li key="recommend" ><a href="user.php?act=recommend">推荐有礼</a></li>-->
              <li><a href="{{ asset('/home/user/idea')}}" target="_blank">建议/反馈</a></li>
              <li class="last"><a href="javascript:NTKF.im_openInPageChat();">在线客服</a></li>
            </ul>
          </dd>
        </dl>
        <dl class="menu">
          <dt>账户管理<span class="arrow"></span></dt>
          <dd>
            <ul>
              <li key="privilege"><a href="user.php?act=privilege">我的特权</a></li>
              <li key="exchange"><a href="user.php?act=exchange">我的积分</a></li>
              <li key="bonus"><a href="user.php?act=bonus">我的优惠券</a></li>
              <li key="postage"><a href="user.php?act=postage">我的包邮卡</a></li>
              <li key="jvip"><a href="user.php?act=jvip">SVIP激活</a></li>
              <li key="ticket"><a href="user.php?act=ticket">护理液兑换码</a></li>
              <!--<li key="lottery" ><a href="user.php?act=lottery">我的彩票</a></li>
              <li key="ticket" ><a href="user.php?act=ticket">我的门票</a></li>-->
            </ul>
          </dd>
        </dl>
        <dl class="menu">
          <dt>个人信息<span class="arrow"></span></dt>
          <dd>
            <ul>
              <li key="profile"><a href="user.php?act=profile">基本资料</a></li>
              <li key="edit_password"><a href="user.php?act=edit_password">修改密码</a></li>
              <li key="address_list" class="on"><a href="user.php?act=address_list">地址管理</a></li>
              <li key="validate"><a href="user.php?act=validate">安全验证</a></li>
            </ul>
          </dd>
        </dl>
     
      
      </div>
      
      <div class="ad">
              <a href="http://www.handu.com/topic-1007.html" target="_blak"><img src="http://s.handu.com/images/afficheimg/1478067877103802695.jpg" width="140" alt=""></a>
               <a href="http://www.handu.com/brand_topic.php?id=10330" target="_blak"><img src="http://s.handu.com/images/afficheimg/1478067929807392685.jpg" width="140" alt=""></a>
             </div>
    </div>
    
    <div class="user_right">
         
       




      <div id="my_address">
        <h1 class="theme">
          地址管理
          <a onclick="edit_address();" href="javascript:void(0);" class="blue fr">添加新地址</a>
        </h1>
        <div class="table_pdiv">


          <div class="table_type2">
            <table width="100%" style="border-collapse:collapse" cellpadding="0" cellspacing="0" border="0">
              <tbody>
                <tr class="th">
                  <th style="width:14%;">收货人</th>
                  <th style="width:38%;">详细地址</th>
                  <th style="width:18%;">电话/手机</th>
                  <th style="width:29%;">操作</th>
                </tr>
            
                                         <tr>
                  <td>汪大爷</td>
                  <td> 北京市西城区复兴门内大街49号</td>
                  <td>15313066678</td>
                  <td class="handle">
                                <strong>默认地址</strong>
             
                    <span class="fr updel">
                      <a href="javascript:void(0);" onclick="edit_address('1259237');" class="blue fl">修改</a>
                      <span class="v_line fl"></span>
                      <a href="javascript:void(0);" name="delshow" class="f1">删除</a>
            
                      <div class="if_tc" style="display:none">
              <a href="javascript:void(0);" onclick="$('.if_tc').hide();return false;" class="close"></a>
              <p>你要删除改地址吗？</p>
              <p><a href="user.php?act=drop_consignee&amp;id=1259237">确认</a><a href="javascript:void(0);" onclick="$('.if_tc').hide();return false;">取消</a></p>
            </div>
                    </span>
                  </td>
                </tr>
 
                  
                              </tbody>
            </table>
          </div>
           
        </div>
    
        
      </div>
  </div>

  
<script type="text/javascript">
$(function(){
   
  $(".f1").click(function(){
   
     $(this).siblings('.if_tc').show();
  });
  $('.esc').click(function(){
    $('.all_address_close').hide();
  
  });
});

function del_show(obj)
{
  //alert(obj.text);
  obj.siblings('.if_tc').show();
}

//edit_address('1000207');
//edit_address(0);
//添加或者编辑一个收货地址
function edit_address(address_id){
    var title=(address_id>0?'编辑':'添加')+'收货地址';
    var url='user.php?act=ajax_edit_address&address_id='+address_id+'&_callback=success_callback';
    ajax_form(url,'L_address', 450 ,title);

}
function success_callback(d){
    popMsg('保存成功');
     location.reload();
    if(d.is_add){
       
    }
}
</script>
  
  

    </div>
    
  </div>

  @endsection