  @extends('home.layoutcenter')
  @section('content')        
<div class="user_right">
  <div id="user_tq">
    <h1 style="font-size:14px;" class="theme">我的特权</h1>
    <div id="tqjf_part">
      <div style="padding-left:15px;" class="tqjf_border">
          <div class="user_score_img">
           <a href="user.php?act=profile">            <img width="100" src="{{$data1 -> photo}}">
                        </a> 
          </div>
   
           <ul style="font-size:14px;" class="user_score_info">
             <li class="user_score_info_li"><p>{{$data -> email}}</p></li>
             <li class="user_score_info_li">
                                                                 </li>
             <li style="width:600px;" class="user_score_info_li">您的等级是<span class="txt_red">
             @if($data2 -> expr_val == 0)注册会员</span> , 您还差<strong>1</strong>经验值达到<span class="txt_red">普通会员</span><p></p></li>

             @elseif($data2 -> expr_val <500 && $data2 -> expr_val > 0)普通会员</span> , 您还差<strong> {{500-$data2 -> expr_val}}</strong>经验值达到<span class="txt_red">黄金会员</span><p></p></li>
             
             @elseif($data2 -> expr_val <2000 && $data2 -> expr_val > 500)黄金会员</span> , 您还差<strong> {{2000-$data2 -> expr_val}}</strong>经验值达到<span class="txt_red">白金会员</span><p></p></li>

             @elseif($data2 -> expr_val <5000 && $data2 -> expr_val > 2000)白金会员</span> , 您还差<strong> {{5000-$data2 -> expr_val}}</strong>经验值达到<span class="txt_red">钻石会员</span><p></p></li>

             @elseif($data2 -> expr_val >= 5000)钻石会员</span> , 您还差<strong> 0</strong>经验值达到<span class="txt_red">钻石会员</span><p></p></li>
             @endif
             
           </ul>
           
<style>
.dy {
  position: absolute;
  bottom: 30px;
  left: 221px;
  width: 334px;
}
.dy button {
display: block;
width: 70px;
height: 22px;
background: url(http://s.handu.com/themes/handuyishe/index/images/footer00.png) no-repeat;
float: left;
margin: 2px 8px;
border: none;
cursor: pointer;
}
#subscription-prompt {
position: absolute;
top: 97px;
left: 221px;
display: none;
width: 200px;
padding: 2px 0;
text-align: center;
color: #34772A;
border: 1px solid #D9D3BB;
background: #FFFDEE;
}
</style>

<div style=" margin:0 auto; width:750px; height:1042px; background:url({{ asset('/home/imgs/vip/01.jpg') }}) no-repeat;  margin-top: 128px;"></div>
<div style=" margin:0 auto; width:750px; height:126px; background:url({{ asset('/home/imgs/vip/02.jpg') }}) no-repeat; position:relative;">
    <div class="dy">
            <form action="send_bonus.php?act=add_user_dingyue" method="post" id="form_dy">
              <input type="text" style="float:left; width:200px;height: 24px;" value="" name="email">
              <button onclick="_czc.push(['_trackEvent', '订阅', '订阅']);" type="submit"></button>
            </form>
    </div>
    <div style="display: none; " id="subscription-prompt">订阅成功</div>
</div>
<div style=" margin:0 auto; width:750px; height:794px;"><img width="750" height="794" border="0" usemap="#Map" src="{{ asset('/home/imgs/vip/03.jpg') }}">
  <map name="Map">
    <area target="_blank" href="http://www.handu.com/user.php?act=profile" coords="181,562,561,584" shape="rect">
  </map>
</div>
<script type="text/javascript">
        $('#form_dy').submit(function(){
          var email=$(this).find('input[name=email]').val();
          $.post($(this).attr('action'),{'email':email},function(data){
      $('#subscription-prompt').html(data.msg).show().delay(5000).fadeOut(400)();
          },'json')
          return false;
        });
</script>   
   
      </div>
      


      
    </div>
  </div>

    </div>
        
    
@endsection
