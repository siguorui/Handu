  @extends('home.layout')
  @section('content')

<div class="user_main">
  <div class="user_wrap">
    
    <h1 class="crumbs">
      您当前的位置:<a href="{{asset('/')}}" target="_blank">韩都衣舍</a> &gt; <a href="{{asset('/home/user/myCenter')}}" target="_blank">我的韩都</a>
          </h1>
    
    <div class="user_left">
      <a href="{{asset('/home/user/myCenter')}}" class="home">
        <span>我的韩都</span>
      </a>
      
      <div class="nav">
   
         
        <dl class="menu">
          <dt>交易管理<span class="arrow"></span></dt>
          <dd>
            <ul>
              <li><a href="http://www.handu.com/flow.php" target="_blank">我的购物车</a></li>
              <li key="order_list"><a href="http://www.handu.com/user.php?act=order_list">我的订单</a></li>
              <li key="collection_list" class="last"><a href="http://www.handu.com/user.php?act=collection_list">我的收藏</a></li>
            </ul>
          </dd>
        </dl>
        
        <dl class="menu">
          <dt>客户服务<span class="arrow"></span></dt>
          <dd>
            <ul>
              <li key="return_list"><a href="http://www.handu.com/user.php?act=return_list">售后服务</a></li>
              <li key="comment_list"><a href="http://www.handu.com/user.php?act=comment_list">我的评价</a></li>
              <!--<li key="recommend" ><a href="user.php?act=recommend">推荐有礼</a></li>-->
              <li><a href="{{asset('/home/user/idea')}}" target="_blank">建议/反馈</a></li>
              <li class="last"><a href="javascript:NTKF.im_openInPageChat();">在线客服</a></li>
            </ul>
          </dd>
        </dl>
        <dl class="menu">
          <dt>账户管理<span class="arrow"></span></dt>
          <dd>
            <ul>
              <li key="privilege"><a href="{{asset('/home/user/vip')}}">我的特权</a></li>
              <li key="exchange"><a href="http://www.handu.com/user.php?act=exchange">我的积分</a></li>
              <li key="bonus"><a href="http://www.handu.com/user.php?act=bonus">我的优惠券</a></li>
              <li key="postage"><a href="http://www.handu.com/user.php?act=postage">我的包邮卡</a></li>
              <li key="jvip"><a href="http://www.handu.com/user.php?act=jvip">SVIP激活</a></li>
              <li key="ticket"><a href="http://www.handu.com/user.php?act=ticket">护理液兑换码</a></li>
              <!--<li key="lottery" ><a href="user.php?act=lottery">我的彩票</a></li>
              <li key="ticket" ><a href="user.php?act=ticket">我的门票</a></li>-->
            </ul>
          </dd>
        </dl>
        <dl class="menu">
          <dt>个人信息<span class="arrow"></span></dt>
          <dd>
            <ul>
              <li key="profile"><a href="{{asset('/home/user/details')}}">基本资料</a></li>
              <li key="edit_password"><a style="color:#C80A28;" href="{{asset('/home/user/password')}}">修改密码</a></li>
              <li key="address_list"><a href="http://www.handu.com/user.php?act=address_list">地址管理</a></li>
              <li key="validate"><a href="http://www.handu.com/user.php?act=validate">安全验证</a></li>
            </ul>
          </dd>
        </dl>
     
      
      </div>
      
      <div class="ad">
              <a href="http://www.handu.com/topic-1007.html" target="_blak"><img src="{{ asset('/home/imgs/1478067877103802695.jpg') }}" alt="" width="140"></a>
               <a href="http://www.handu.com/brand_topic.php?id=10330" target="_blak"><img src="{{ asset('/home/imgs/1478067929807392685.jpg') }}" alt="" width="140"></a>
             </div>
    </div>
    
    
      
        
 <link type="text/css" href="{{ asset('/home/css/user_index.css') }}" rel="stylesheet">
<div class="user_right">
      
        
<script type="text/javascript">
function checkF(th){
  if(th.new_password.value != th.comfirm_password.value){
    alert("输入的新密码与确认密码不一致！");
    return false;
  }
  if(th.new_password.value.length &lt;8){
    alert("新密码的长度不能小于8位");
    return false;
  }
}
</script>
     
    <div class="user_right">
      
      <div id="user_pswd">
        <h1 class="theme">修改密码</h1>
        <div class="info">
              @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                <p class="text-red">{{$error}}</p>
                @endforeach
              @endif
          <form onsubmit="return checkF(this)" method="post" action="{{url('/home/user/updateP')}}" name="formEditPassword" id="formEditPassword" class="info_forms">
            {{csrf_field()}}
            <div class="item">
              <div class="left fl">&nbsp;&nbsp;原密码：</div>
              <div class="right fl">
                <input type="password" class="txt_pswd rePswd" name="old_password" value="">
              </div>
            </div>
            
            <div class="item">
              <div class="left fl">新密码：</div>
              <div class="right fl">
                <input type="password" class="txt_pswd newPswd" name="password" value="">
              </div>
            </div>
            
            <div class="item">
              <div class="left fl">确认密码：</div>
              <div class="right fl">
                <input type="password" class="txt_pswd truePswd" name="password_confirmation" value="">
              </div>
            </div>
            
            <input type="submit" class="save_btn" value="">
          </form>
        </div>
      </div>
    </div>


    </div>

<script type="text/javascript">
 function checkFormEdit(obj){
    
  var real_name = obj.elements['real_name'].value;
  var sex = $("input[name='sex']:checked").val();

    
  var user_address = obj.elements['user_address'].value;
  var mobile_phone = obj.elements['mobile_phone'].value;
  var email =   obj.elements['email'].value;
  var address_id =obj.elements['address_id'].value;
  var province = $("#province").val(); 
  var city   = $("#city").val(); 
  var district = $("#district").val(); 
  var data={real_name:real_name,sex:sex,
            user_address:user_address,
            mobile_phone:mobile_phone ,
            email:email,address_id:address_id,province:province,city:city,district:district};
    
    if(obj.elements['birthdayYear']){
        data['birthdayYear'] =obj.elements['birthdayYear'].value;
        data['birthdayMonth'] =obj.elements['birthdayMonth'].value;
        data['birthdayDay']  = obj.elements['birthdayDay'].value;
    
    }
 
    
   
    $.post('user.php?act=act_edit_profile',data,function(result){
        popMsg(result);
     
  },'TEXT');
  
  
  return false;
}
  
 
var r=new Region();
    r.init('2','52','502');
</script> 

    </div>
    
  </div>
</div>

  <div class="prev_btn btn" onclick="transImg('mod4','-1',4)"></div>
          <div class="down_btn btn" onclick="transImg('mod4','+1',4)"></div>
        </div>
      </div>
@endsection
