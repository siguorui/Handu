
@extends('home.layoutcenter')
  @section('content')
          <div class="user_right">
            <div id="my_address">
              <h1 class="theme">
                地址管理
                <a onclick="a1()" id="a1" href="javascript:void(0);" class="blue fr">添加新地址</a>
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
                      @if(count($data) != 0)
                      @foreach($data as $d)
                          <tr>
                        <td>{{$d -> to_name}}</td>
                        <td> {{$d -> addr_area}}{{$d -> addr_deta}}</td>
                        <td>{{$d -> phone}}</td>
                        <td class="handle">
                        @if(($d -> state) == 1)
                                      <strong id="">
                                      
                                      默认地址
                                      </strong>
                        @else
                                      <strong>
                                      
                                      <a href="####" id="idd" onclick="def({{$d -> id}})">设为默认地址</a>
                                     
                                      </strong>
                   		@endif


                          <span class="fr updel">
                            <a href="####" onclick="update({{$d -> id}})" class="blue fl">修改</a>
                            <span class="v_line fl"></span>
                            <a href="javascript:void(0);" name="delshow" class="f1">删除</a>
                  
                            <div class="if_tc" style="display:none">
                    <a href="javascript:void(0);" onclick="$('.if_tc').hide();return false;" class="close"></a>
                    <p>你要删除改地址吗？</p>
                    <p><a href="{{asset('home/details/delete')}}/{{$d -> id}}">确认</a><a href="javascript:void(0);" onclick="$('.if_tc').hide();return false;">取消</a></p>
                  </div>
                          </span>
                        </td>
                      </tr>
                      
                  @endforeach  
                   
                  @else    
        <tr><td colspan="4" class="item_none">没有数据</td></tr>
                  @endif   
                </tbody>
                  </table>
    </div>
<!--=====================================================================================-->




<div id="dialog_object_L_address" did="L_address" class="dialog_wrapper dialog_has_title" style="z-index: 9999; position: absolute; width: 450px; display: none; left: 476.5px; top: 349.61111405455px;">
    <div class="dialog_body" style="z-index: 9991; position: relative;">
      <h3 class="dialog_head">
        <div class="dialog_ornament1"></div>
        <div class="dialog_ornament2"></div>
          <span class="dialog_title"><span class="dialog_title_icon">添加收货地址</span></span>
          <span id="sp" onclick="sp()" class="dialog_close_button" style="position: absolute; text-indent: -9999px; cursor: pointer; overflow: hidden;">close</span>
      </h3>
      <div class="dialog_content" style="margin: 0px; padding: 0px;">
        <style>
          .form ul{list-style: none;border-bottom: 1px dashed #CCC;padding: 10px 0;margin-bottom: 10px;}
          .form ul li{padding: 3px 0;vertical-align: middle;}
          .form label{display: inline-block;min-width: 60px;height: 20px;line-height: 20px;padding-left: 20px;}
          .form label em{color:#f00;margin-right: 5px;}
          .form input[type=text]{padding-left:5px;height: 25px;}
        </style>
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
              <p style="color:red;">{{$error}}</p>
            @endforeach
        @endif
        <form action="{{ asset('/home/details/addaddr')}}" id="formid" method="post" class="form" id="__address_form">
              {{csrf_field()}}
            <ul>
              <li><label for="consignee"><em>*</em>收货人:</label> <input type="text" value="{{old('to_name')}}" name="to_name" id="consignee"> </li>

              <div class="right fl" id="relative">
                  <label for="consignee"><em>*</em>所在地区:&nbsp;<select id="province" onchange="showcity()"><option id="pd" value="{{old('province')}}">请选择</option> </select>
                      <input id='province1' name="province" value="{{old('province')}}" type="hidden"/>
                      <select id="city"  onchange="showarea()"><option id="cd" value="{{old('city')}}">请选择</option> </select>
                      <input id='city1' value="{{old('city')}}" name="city" type="hidden"/>
                      <select id="area" onchange="showdistrict()" ><option id="dd" value="{{old('district')}}">请选择</option></select>
                      <input id='area1' value="{{old('district')}}" name="district" type="hidden"/>
                      <input id='idname' value="" name="id" type="hidden"/>
                      </label>
              </div><br/>
              <li><label for="address"><em>*</em>详细地址:</label> <input type="text" value="{{old('addr_area')}}" name="addr_deta" id="addr_deta1"></li>
              <li><label for="mobile"><em>*</em>电话:</label> <input type="text" value="{{old('phone')}}" name="phone" id="phone1"></li>
              <li>
                  <label for="idcard">身份证号:</label>
                  <input type="text" value="{{old('identity')}}" name="identity" id="idcard" maxlength="18" minlength="15">
                  <span style="display: block;">当您购买海淘商品时，收货人和身份证号均为必填项；请务必填写真实的，否则海关清关将不通过，将耽误您的购物！</span>
              </li>
              
         
      </ul>
      <div class="dialog_buttons_bar">
          <input type="submit" class="btn1" onclick="_save_address()" value="确定">
          <input type="button" class="btn2" onclick="inp()" value="取消">
          <input type="checkbox" value="1" name="state"> 默认 
      </div>
      </form>
      <script type="text/javascript">
      	function def(id)
      	{
      		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          	});
          	$.ajax({
        	type:'post',
        	url:"{{ url('/home/details/defadd')}}",
        	data:{id:id},
        	success:function(data)
        	{ 
        		location.reload();
        	},
        	error:function()
        	{
          		alert("异常");
        	},
      
      		});
      		return false;
      	}
        function a1()
        {
        	$('#consignee').val('');
          	$('#addr_deta1').val('');
          	$('#phone1').val('');
          	$('#idcard').val('');
          	$('#idname').val('');
          	$('#pd').html('请选择');
          	$('#cd').html('请选择');
          	$('#dd').html('请选择');
          	document.getElementById('dialog_object_L_address').style.display='block';
          	document.getElementById('formid').action="{{ asset('/home/details/addaddr')}}"; 
        }
        function inp()
        {
          	document.getElementById('dialog_object_L_address').style.display='none';
        }
        function sp()
        {
          	document.getElementById('dialog_object_L_address').style.display='none';
        }
        function update(id)
        {
          
          	$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          	});
          	$.ajax({
        	type:'POST',
        	url:"{{ url('/home/details/select')}}",
        	data:{id:id},
        	success:function(data)
        	{ 
		        $('#consignee').val(data.to_name);
		        $('#pd').html(data.province);
		        $('#pd').attr({"selected":true});
		        $('#cd').html(data.city);
		        $('#cd').attr({"selected":true});
		        $('#dd').html(data.district);
		        $('#dd').attr({"selected":true});
		        $('#addr_deta1').val(data.addr_deta);
		        $('#phone1').val(data.phone);
		        $('#idcard').val(data.identity);
		        $('#idname').val(data.id);
        	},
        	error:function()
        	{
          		alert("异常");
        	},
      
      		});
          	document.getElementById('dialog_object_L_address').style.display='block';
           	document.getElementById('formid').action="{{ asset('/home/details/upaddress')}}";
          	return false;
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

          
<!--============================================================================-->


          
      <script type="text/javascript">
      var r=new Region();
        r.init('','','');
      var __address_callback=success_callback;//登录成功后回调函数
          
      function _save_address(){
          var $form=$('#__address_form');
          var url=$form.attr('action');
          var data=$form.serialize();
          $.post(url,data,function(res){
              if(res.error){
                  alert(res.msg);
              }else{
                  
                  __address_callback(res);
                 
              }
          },'json');
      }
      function _close_dialog(){
          var $form=$('#__address_form');
          DialogManager.close($form.parents('.dialog_wrapper').attr('did'));
      }
      </script>

      </div>
      </div>
    </div>     
     <script type="text/javascript">
      var r=new Region();
        r.init('','','');
      var __address_callback=success_callback;//登录成功后回调函数
          
      function _save_address(){
          var $form=$('#__address_form');
          var url=$form.attr('action');
          var data=$form.serialize();
          $.post(url,data,function(res){
              if(res.error){
                  alert(res.msg);
              }else{
                  
                  __address_callback(res);
                 
              }
          },'json');
      }
      function _close_dialog(){
          var $form=$('#__address_form');
          DialogManager.close($form.parents('.dialog_wrapper').attr('did'));
      }
      </script>

      </div>
      </div>
      <div style="clear:both;display:block;"></div><div class="dialog_border" style="left: -5px; top: -5px; z-index: 9990; display: block; position: absolute; width: 460px;"></div></div>
      </div>
>>>>>>> origin/master

    </div>
    
  </div>
<<<<<<< HEAD
=======
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
        
  

    
>>>>>>> origin/master

  @endsection