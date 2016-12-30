  @extends('home.layoutcenter')
  @section('content')
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
                <p style="color:red;">{{$error}}</p>
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
