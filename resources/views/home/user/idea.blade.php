@extends('home.layout')
@section('content')
<script charset="utf-8" type="text/javascript" src="{{ asset('/home/js/dialog.js')}}" id="dialog_js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/home/css/regist.css') }}"/>
<style type="text/css">
  input[type=submit].save_btn{background: url() no-repeat -305px -310px;width:75px;height:38px;}
  input[type=submit].save_btn:active{background-position: -360px -310px;}
</style>
<div id="d_html1" style="display:none;">
   <div class="popup_box_txt">
     <h1 class="warn_info" style="padding: 15px 0 10px;">提交成功!</h1>     
     <p>感谢您对韩都衣舍的支持，100积分已发送至个人中心，请查收。</p>
     <p class="tint_color">填写<span class="font">调查问卷</span>，再得100积分奖励。</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
   </div>
</div>

<div id="d_html4" style="display:none;">
   <div class="popup_box_txt">
     <h1 class="warn_info">提交成功!</h1>
     <p>亲爱的会员，感谢您提出的宝贵意见</p>
    <p>100积分已发送至个人中心，请注意查收。</p>
   </div>
   <div class="popup_box_btn" onclick="location.href='./'"></div>
</div>


<div id="d_html2" style="display:none;">
   <div class="popup_box_txt">
     <h1 class="warn_info">提交成功!</h1>     
     <p>感谢您对韩都衣舍的支持，100积分已发送至个人中心，请查收。</p>
     <p class="tint_color">填写<span class="font">意见反馈</span>，再得100积分奖励。</p>
   </div>
</div>


<div id="d_html3" style="display:none;">
   <div class="popup_box_txt">
     <h1 class="warn_info">提交成功!</h1>
     <p>亲爱的用户，您已经成功提交意见反馈/问卷调查，我们会根据您的建议不断优化服务，谢谢您的参与！</p>
   </div>
   <div class="popup_box_btn" onclick="location.href='./'"></div>
</div>


<div id="d_html5" style="display:none;">
   <div class="popup_box_txt">
      <h1 class="warn_info">亲爱的用户</h1>
      <p>为了保障积分奖励能够及时到账，请 <a href="user.php?act=login"><span class="font">登录</span> </a>账号</p>
      <p>填写意见反馈/调查问卷。</p>
   </div>
   <div class="notLogin_box_btn" onclick="location.href='user.php?act=login';"></div>
</div>
<div class="regist_main">
  <div class="regist_content">
    <div class="regist_tab">
      <ul>
        <li class="registTab current" onclick="_czc.push(['_trackEvent', '在线反馈', '意见反馈']);"></li>
        <li class="surveyTab" onclick="_czc.push(['_trackEvent', '在线反馈', '问卷调查']);"></li>
      </ul>
    </div>
    <div class="regist_list">
    @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <p class="text-red">{{ $error }}</p>
            @endforeach
        @endif
        @if(session('info'))
        <p class="text-red">{{session('info')}}</p>
        @endif
    <form action="{{asset('/home/user/addidea')}}"  method="post">
      {{csrf_field()}}
      <div class="regist_item">
        <div class="regist_item_head">
          <p>亲爱的用户：</p>
          <p>如果您发现商品信息有误、商品价格有出入、页面没有想要的信息等，欢迎您随时提出来更好的建议和想法</p>
          <p>经确认正确后我们将立即进行更正，成功提交"意见反馈"可获得100个消费积分，一个ID限领取一次，感谢您对韩都衣舍的支持!</p>
        </div>
        <div class="regist_item_body">
          <table border="0" cellspacing="0"  cellpadding="0" class="regist_tb">
            <tr>
              <td class="regist_tb_lefttd">您的建议是关于：</td>
              <td class="regist_tb_righttd">
                <ul>
        
                  <li><input type="radio" name="fd_type" value="0" class="regist_radio"  onclick="_is_login();" href="javascript:void(0);"/>商品信息</li>
                  <li><input type="radio" name="fd_type" value="1" class="regist_radio"  onclick="_is_login();" href="javascript:void(0);"/>下单支付</li>
                  <li><input type="radio" name="fd_type" value="2" class="regist_radio"  onclick="_is_login();" href="javascript:void(0);"/>会员中心</li>
                  <li><input type="radio" name="fd_type" value="3" class="regist_radio"  onclick="_is_login();" href="javascript:void(0);"/>登录访问</li>
                  <li><input type="radio" name="fd_type" value="4" class="regist_radio"  onclick="_is_login();" href="javascript:void(0);"/>客户服务</li>
                  <li><input type="radio" name="fd_type" value="5" class="regist_radio"  onclick="_is_login();" href="javascript:void(0);"/>其他</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td class="regist_tb_lefttd">标题：</td>
              <td><input type="text" class="regist_title" id="regist_title" onblur="fomart_len(this,5,20);" onfocus="if (this.value =='请输入标题'){this.value=''}" value="请输入标题" onblur=fomart_len(this,5,20); name="title"/><span class="lenWrong">*请输入标题</span><span class="default_txt">请输入标题</span></td>
            </tr>
            <tr>
              <td class="regist_tb_lefttd" style="vertical-align: top;">内容：</td>
              <td>
                <textarea rows="9" cols="50"  class="regist_area" onblur="fomart_len(this,10,1000);" onfocus="javascript:if($.trim(this.value) =='亲爱的会员，感谢您给我们提出建议，我们会认真对待并不断完善，涉及具体的页面，请附上相关链接，谢谢'){this.value=''};" onkeyup="postscript_len(this, 2000)"    name="content" >亲爱的会员，感谢您给我们提出建议，我们会认真对待并不断完善，涉及具体的页面，请附上相关链接，谢谢</textarea>
                <span class="lenWrong" style="float:left;">*请输入内容</span>
                <span class="default_txt">亲爱的会员，感谢您给我们提出建议，我们会认真对待并不断完善，涉及具体的页面，请附上相关链接，谢谢</span>
                <div class="surplusWords">(可以输入1000个字)</div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td><div class="regist_submit regist1" type="submit" onclick="_czc.push(['_trackEvent', '在线反馈', '提交意见']);"><input type="submit" value="" class="save_btn"/></div></td>
            </tr>
          </table>
        </div>
      </div>
      </form>
      
      <div class="regist_item" style="display:none;">
       <form action="{{ asset('/home/user/addidea')}}"  method="post" >
        <div class="regist_item_head">
          <p>亲爱的用户：</p>
          <p>感谢您支持韩都衣舍！您在购物的过程中，有没有遇到问题？若您有任何的意见或建议，请告诉我们。</p>
          <p>帮助我们不断改进，为您提供更优质的服务以及最佳的购物体验。成功提交"问卷调查"可获得100个消费积分，一个ID限领取一次。</p>
        </div>
        <div class="regist_item_body">
        <ul class="question_survey">
                                   
       </ul>
    <!-- <div><input type="hidden" value="" id="return"></div>
       <a onclick="survey_format();"> <div class="regist_submit regist2"><input type="hidden" name="act" value="questionnaire"></div></a>  -->
        <span id="aaa"> <div class="regist_submit regist2" onclick="_czc.push(['_trackEvent', '在线反馈', '提交问卷']);"></div></span>

      </div>
     </form>
      </div>
    </div>
  </div>
</div>
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
<!-- <script src="/Scripts/tag.js" type="text/javascript" async></script> -->


</body>
<script>
// 给string增加个len ()方法，计算string的字节数
String.prototype.len = function()           
{ 
 return this.replace(/[^\x00-\xff]/g, "xx").length; 
} 
$(function(){
/**tab点击**/ 
$(".regist_tab>ul>li").each(function(index,item){
  $(this).click(function(){

    $(this).addClass("current");
    $(this).siblings().removeClass("current");
    $(".regist_item").hide();
    $(".regist_item").eq(index).show();
  });
});
});
/**长度判断**/
function fomart_len(obj,min_len,max_len){
  var textl = $.trim($(obj).val());
    if(textl.len()==0){
      $(obj).val($(obj).parent().find(".default_txt").html());
    $(obj).parent().find(".lenWrong").show();
    $(obj).addClass("borderColor");
    }else{
    $(obj).parent().find(".lenWrong").hide();
    $(obj).removeClass("borderColor");
  }
}
/**空字符判断**/
function isNull(param)
{
  var bb=false;
  if(param==undefined||param==null||$.trim(param).length==0){
    bb=true;
  }
  return bb;
}
/**内容可输入字数判断**/ 
function postscript_len(obj,maxLen){ 
　　　var len = byteLength(obj.value); 
　　　if(len >=maxLen) { 
　　　  $(obj).val($("#postscript").val().substr(0,maxLen)); 
　　　} else {
　　　  $(".surplusWords").html("还可输入  <b>"+parseInt((maxLen-len)*0.5) + "</b> 个字"); 
　　　} 
} 
function byteLength (sStr) { 
　　　aMatch = sStr.match(/[^\x00-\x80]/g); 
　　　return (sStr.length + (! aMatch ? 0 : aMatch.length)); 
}

$(".regist_submit.regist1").click(function(){

   var type = $(".regist_radio:checked").val();
   var title = $("#regist_title").val();
   var content = $('.regist_area').val();
   if(isNull(type)){
    popMsg({'text':'请选择类别','time':1000});
    return false;
   }
   
   if(title == "请输入标题"){
    popMsg({'text':'请输入标题','time':1000});
    return false;
   }
   
   if(content == "亲爱的会员，感谢您给我们提出建议，我们会认真对待并不断完善，涉及具体的页面，请附上相关链接，谢谢" ){
   
    popMsg({'text':'请输入内容','time':1000});
    return false;
    
   }
   
   
   $.post("{{url('home/idea')}}", {type: type, title: title ,content:content},function(data){
       if(data.error==4){
          popHtml(4,360);
     }else if(data.error == 2){
           popHtml(3,360);
       }else if(data.error==3){
          popHtml(1,405,"提示信息");
     }else if(data.error == 1){
        popMsg({'text':'对不起，您两次提交间隔少于30秒，请稍后再提交','time':1000});   
       }else if(data.error==5){
         popHtml(5,360);
     }
   }, "json"); 
});





//调查问卷
$("#aaa").click(function(){
var bb=true;

  /**调查问卷判断**/
  for(var i=0;i<$(".question_survey_radios").length;i++){
   var count = Number($(".question_survey_radios").eq(i).find(".radio_item input[type='radio']").eq(0).attr("count"));
   if($("input[name='option["+count+"]']:checked").val()==undefined){
     bb=false;
     break;
   }
  }

  if(bb==true){
  var surveyArray =[];
  for(var i=0;i<$(".question_survey_radios").length;i++){
    var count = Number($(".question_survey_radios").eq(i).find(".radio_item input[type='radio']").eq(0).attr("count"));
    var surveyValue = $("input[name='option["+count+"]']:checked").val();
    surveyArray.push(surveyValue);
  };
  //alert(JSON.stringify(surveyArray));exit;
  
     $.post("msg.php?act=survey", {surveyArray:surveyArray},function(data){
     if(data.error== 4){
          popHtml(4,360);
    }else if(data.error == 0){
           popHtml(3,360);
       }else if(data.error== 2){
         popHtml(2,360);
     }else if(data.error == 1){
        popMsg({'text':'亲，信息提交失败，请稍后再试！','time':1000});
       }else if(data.error == 3){
        popMsg({'text':'对不起，您两次提交间隔少于30秒，请稍后再提交','time':1000});   
     }else if(data.error== 5){
         popHtml(5,360);
     }
   }, "json");
   

  }else{
    popMsg({'text':'亲，请将信息填写完整！','time':1000});
  }
})


//点击关闭按钮，刷新页面
 //$(".popup_box_close").click(function(){
 //   $('.popup_box').hide();
//  window.location.reload();
 //});

</script>

<script>
   
//判断用户是否登录
function _is_login(){
   
      var islogin="yes";
      $.post("msg.php?act=login", {islogin:islogin},function(data){
     if(data.error==5){
         //$("#five").show(); 
         popHtml(5,360);
    }
   }, "json");
}


//点击登录按钮，在新页面中打开
/*function new_login(){ 
   window.open('user.php?act=login');
}*/

/**自定义提示弹框**/
function popHtml(index,widthL,title){
   var d = DialogManager.create('L_popMsg'+index);
   if(isNull(title)){
     title="提示";
   }
   d.setTitle(title);
   d.setContents($('#d_html'+index).html());
   d.setWidth(widthL);
   d.show('center',false);
}
</script>
  @endsection