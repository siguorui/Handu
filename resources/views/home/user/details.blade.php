  @extends('home.layoutcenter')
  @section('content')



 <div class="user_right">
      
      <div id="user_info">
        <h1 class="theme">我的基本资料</h1>
        <div class="info">
          <p>亲爱的{{$data -> email}}，欢迎您！</p>
          <form class="info_forms"  name="formEdit" action="{{url('/home/update')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
            <div class="item">
              <div class="left fl"></span>当前头像：</div>
              <div class="right fl">
                <p><img src="{{$data1 -> photo}}" width="120"  /></p>
                <p>&nbsp;&nbsp;<input type="file" name="photo" value="修改头像" style="margin-left:0px" /></p>
                
              </div>
            </div>
            <div class="item">
              <div class="left fl"><span class="red">*&nbsp;</span>用户名：</div>
              <div class="right fl">
                <input type="text" value="{{$data -> email}}" class="txt_k user_name" disabled/>
              </div>
            </div>
            <!-- <div class="item">
              <div class="left fl"><span class="red">*&nbsp;</span>会员类型：</div>
              <div class="right fl">
              
                            <span class="lv lv"></span>
                              
              </div>
            </div> -->
            <div class="item">
              <div class="left fl"><span class="red">*&nbsp;</span>真实姓名：</div>
              <div class="right fl">
                <input type="text" value="{{$data1 -> real_name}}"  name="real_name" class="txt_k true_name"/>
              </div>
            </div>
            <div class="item">
              <div class="left fl"><span class="red">*&nbsp;</span>性别：</div>
              <div class="right fl">
                <span><input type="radio" name="sex" value="0" @if($data1 -> sex == 0) checked="checked" @endif class="fl"><span class="fl">&nbsp;保密</span></span>
                <span><input type="radio" name="sex" @if($data1 -> sex == 1) checked="checked" @endif  value="1" class="fl"><span class="fl">&nbsp;男</span></span>
                <span><input type="radio" name="sex" @if($data1 -> sex == 2) checked="checked" @endif  value="2" class="fl"><span class="fl">&nbsp;女</span></span>
              </div>
            </div>
            <!-- <div class="item">
              <div class="left fl"><span class="red">*&nbsp;</span>出生日期：</div>
              <div class="right fl">
                              1993-03-18                            
                 
              </div>
            </div> -->

  
            <div class="item">
              <div class="left fl"><span class="red">*&nbsp;</span>所在地：</div>
              <div class="right fl" id="relative">

                <select id="province" onchange="showcity()"><option value="0">请选择</option> </select>
                <input id='province1' name="province" type="hidden"/>
                <select id="city"  onchange="showarea()"><option value="0">请选择</option> </select>
                <input id='city1' name="city" type="hidden"/>
                <select id="area" onchange="showdistrict()" ><option value="0">请选择</option></select>
                <input id='area1' name="district" type="hidden"/>
 
              </div>

            </div>
            <div class="item">
              <div class="left fl"><span class="red">*&nbsp;</span>详细地址：</div>
              <div class="right fl">
                <input type="text"   name="user_address" value="{{$data1 ->live_place}}" class="txt_address"/>
              </div>
            </div>
            <div class="item">
              <div class="left fl"><span class="red">*&nbsp;</span>手机号码：</div>
              <div class="right fl">
                <input type="text"  name="mobile_phone" value="{{$data1 -> mobile_phone}}" class="txt_k txt_phone"/>
              </div>
            </div>
            <div class="item">
              <div class="left fl"><span class="red">*&nbsp;</span>email：</div>
              <div class="right fl">
                <input type="text"  name="email" value="{{$data -> email}}" class="txt_k  "/>
              </div>
            </div>
            <!-- <input name="address_id" type="hidden" value="1259114" /> -->
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
      $('#relative').append(area);
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
