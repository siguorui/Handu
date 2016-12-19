  @extends('home.layout')
  @section('content')

<div class="user_main">
  <div class="user_wrap">
    
    <h1 class="crumbs">
      您当前的位置:<a href="http://www.handu.com/" target="_blank">韩都衣舍</a> &gt; <a href="http://www.handu.com/user.php" target="_blank">我的韩都</a>
          </h1>
    
    <div class="user_left">
      <a href="http://www.handu.com/user.php" class="home">
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
              <li><a href="http://www.handu.com/msg.php" target="_blank">建议/反馈</a></li>
              <li class="last"><a href="javascript:NTKF.im_openInPageChat();">在线客服</a></li>
            </ul>
          </dd>
        </dl>
        <dl class="menu">
          <dt>账户管理<span class="arrow"></span></dt>
          <dd>
            <ul>
              <li key="privilege"><a href="http://www.handu.com/user.php?act=privilege">我的特权</a></li>
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
              <li key="profile"><a href="http://www.handu.com/user.php?act=profile">基本资料</a></li>
              <li key="edit_password"><a href="http://www.handu.com/user.php?act=edit_password">修改密码</a></li>
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
    
    <div class="user_right">
      
        
 <link type="text/css" href="{{ asset('/home/css/user_index.css') }}" rel="stylesheet">

 <div class="userinfo">
        <div class="img">
          
          
        
      
      
<script src="/js/jquery.region.js"></script>
 <div class="user_right">
      
      <div id="user_info">
        <h1 class="theme">我的基本资料</h1>
        <div class="info">
          <p>亲爱的15313066678，欢迎您！</p>
          <form class="info_forms"  name="formEdit" action="user.php" method="post" onsubmit="return checkFormEdit(this)">
            <div class="item">
              <div class="left fl">&nbsp;&nbsp;</span>当前头像：</div>
              <div class="right fl">
                <p><img src="http://s.handu.com/images/static/default_avatarbig.png" width="120"  /></p>
                <p><a href="javascript:edit_avatar()"   class="blue update_img">修改头像</a></p>
              </div>
            </div>
            <div class="item">
              <div class="left fl"><span class="red">*&nbsp;</span>用户名：</div>
              <div class="right fl">
                <input type="text" value="15313066678" class="txt_k user_name" disabled/>
              </div>
            </div>
            <div class="item">
              <div class="left fl"><span class="red">*&nbsp;</span>会员类型：</div>
              <div class="right fl">
              
                            <span class="lv lv"></span>
                              
              </div>
            </div>
            <div class="item">
              <div class="left fl"><span class="red">*&nbsp;</span>真实姓名：</div>
              <div class="right fl">
                <input type="text" value="王士兵" disabled name="real_name" class="txt_k true_name"/>
              </div>
            </div>
            <div class="item">
              <div class="left fl"><span class="red">*&nbsp;</span>性别：</div>
              <div class="right fl">
                <span><input type="radio" name="sex"   value="0" checked="checked"class="fl"><span class="fl">&nbsp;保密</span></span>
                <span><input type="radio" name="sex"   value="1" class="fl"><span class="fl">&nbsp;男</span></span>
                <span><input type="radio" name="sex"   value="2" class="fl"><span class="fl">&nbsp;女</span></span>
              </div>
            </div>
            <div class="item">
              <div class="left fl"><span class="red">*&nbsp;</span>出生日期：</div>
              <div class="right fl">
                              1966-01-01                            
                 
              </div>
            </div>
            <div class="item">
              <div class="left fl"><span class="red">*&nbsp;</span>所在地：</div>
              <div class="right fl">
              
                <select id="province"   name="province" > <option value="0">loading</option> </select>
                <select id="city"     name="city"     > <option value="0">loading</option> </select>
                <select id="district"   name="district" > </select>
              
              </div>
            </div>
            <div class="item">
              <div class="left fl"><span class="red">*&nbsp;</span>详细地址：</div>
              <div class="right fl">
                <input type="text"   name="user_address" value="haidiannihao" class="txt_address"/>
              </div>
            </div>
            <div class="item">
              <div class="left fl"><span class="red">*&nbsp;</span>手机号码：</div>
              <div class="right fl">
                <input type="text"  name="mobile_phone" value="15313066678" class="txt_k txt_phone"/>
              </div>
            </div>
            <div class="item">
              <div class="left fl"><span class="red">*&nbsp;</span>email：</div>
              <div class="right fl">
                <input type="text"  name="email" value="15313066678@qq.com" class="txt_k  "/>
              </div>
            </div>
            <input name="address_id" type="hidden" value="1259114" />
            <input type="submit" value="" class="save_btn"/>
          </form>
          
          
          <div class="user_txt">
            <p>1.完善基本资料可获得100积分（积分使用详见"我的积分--<a href="/helper-61-724.html" target="_blank" class="blue">积分规则</a>"）。</p>
            <p>2.真实姓名和生日只能修改一次。</p>
            <p>3.积分仅首次完善资料赠送，完善信息后，更改资料无法重复获得积分。</p>
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
