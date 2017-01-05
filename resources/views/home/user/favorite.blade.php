  @extends('home.layoutcenter')
  @section('content')
<div class="user_right">
<div id="myCollect">
@if(isset($data1))
    <h1 class="theme">我的收藏夹</h1>
    <div class="sort_bar">
       <ul>
         <li>
         <a href="user.php?act=collection_list">全部宝贝</a></li>
         <li class="current"> 
         <a href="user.php?act=collection_list&amp;promote=1">优惠</a><em>2</em></li>                  <li class="desc">
         <a href="user.php?act=collection_list&amp;sort=1">收藏时间</a><em></em></li>
       </ul>
    </div>
    <div class="con">
      <div class="div_allchk">
        <input type="checkbox" name="all" id="sel_all" class="fl">&nbsp;全选
        <a href="javascript:void(0)" class="del" id="del_all_checked"><i></i><span>删除</span></a>
      </div>
      <div class="pro_list">
        <ul class="collect_box">
        
        @foreach($data1 as $d)
          <li id="rec_1036515">
            <div class="img">
            <a href="goods-1050030.html" target="_blank">
              <img src="/home/imgs/goods/{{$d -> pic}}" alt="{{$d -> title}}" title="{{$d -> title}}">
            </a>
            </div>
            <div class="name">
              <input type="checkbox" name="chk" value="1036515">
              <a href="goods-1050030.html" target="_blank" title="{{$d -> title}}">{{$d -> title}}</a>
            </div>
            <div class="price">
                          <span class="arrow">折</span>
              <span class="new_price"> ￥{{$d ->promt_price}}</span>
              <del class="old_price"> ￥{{$d -> orign_price}}</del>
                        </div>
            <div class="icon">
              <a href="javascript:void(0)" onclick="del_collection(1036515)" class="icon1"></a>|
              <a href="http://hstyle.handu.com" target="_blank" class="icon2"></a>
                            |
              <a href="javascript:ajax_form('goods.php?id=1050030&amp;act=ajax_goods_sku','L_goods_sku', 450 );" onclick="icon3" class="icon3"></a>
                          </div>
     
          </li>
        @endforeach
        
        </ul>
<!--=================================================================-->
  
    <div id="dialog_object_L_goods_sku" did="L_goods_sku"  class="dialog_wrapper" style="z-index: 9999; position: absolute;display:none; width: 450px; left: 406.5px; top: 767px;"><div class="dialog_body" style="z-index: 9991; position: relative;"><h3 class="dialog_head"><div class="dialog_ornament1"></div><div class="dialog_ornament2"></div><span class="dialog_title"><span class="dialog_title_icon"></span></span><span class="dialog_close_button" style="position: absolute; text-indent: -9999px; cursor: pointer; overflow: hidden;">close</span></h3><div class="dialog_content" style="margin: 0px; padding: 0px;"><div class="ajax_goods_sku" id="ajax_goods_sku">
              <div class="goods_attr text"> 
                <span class="label">颜色 <b>：</b></span>
                <ul attr_id="">
                    <li class="sel" val="559142" l="白色" title="白色">
                             <span>白色</span>
                          <s></s>
                </li>
                    </ul>
            
            </div>
                <div class="goods_attr text"> 
                <span class="label">尺码 <b>：</b></span>
                <ul attr_id="">
                    <li class="sel" val="559143" l="S" title="S">
                             <span>S</span>
                          <s></s>
                </li>
                    <li class=" " val="559144" l="M" title="M">
                             <span>M</span>
                          <s></s>
                </li>
                    <li class=" " val="559145" l="L" title="L">
                             <span>L</span>
                          <s></s>
                </li>
                    </ul>
            
            </div>
                <div class="op">
                <label>我要买：</label>
                <input type="text" value="1" name="goods_number" size="2">件 <span class="goods_number">(库存61件)</span>
            </div>
            <div class="op dialog_buttons_bar">
                <button type="submit" class="btn_red" onclick="goods_addToCart()">加入购物车</button> 
            </div>
        </div>

        <script type="text/javascript">
          
          $('.icon3').on('click'function(){
            ("style:block")
            $("#dialog_object_L_goods_sku").style.('display:block');
          });
        </script>
        <script type="text/javascript">
        var goods_id='1049016';
        var sku_list= '';
        $(function(){
            update_sku_list();
        });
        function set_def_selected(){
            if(sku_list.length>0){
                var def=sku_list[0];
                $.each(def['goods_attr'].split('|'),function(k,v){
                   
                     $(".goods_attr li[val="+v+"]").addClass('sel');
                
                });
                $('.goods_attr li.sel').eq(0).click().click();//锁定不可选的属性值
            }else{//无库存
                $('.goods_attr li').addClass('b');
            }
            //showSelectSKU();
        }
        function update_sku_list(){
            var goodsId= goods_id;
            var url='goods.php?act=get_products_v2&id='+goodsId;
            $.getJSON(url,function(data){
                //console.log(data);
                sku_list=data;
                set_def_selected();
            });

        }
         
        //获取所有包含指定节点的路线
        function filterProduct(ids){
            var result=[];
            $(sku_list).each(function(k,v){
                _attr='|'+v['goods_attr']+'|';
                _all_ids_in=true;
                for( k in ids){
                    if(_attr.indexOf('|'+ids[k]+'|')==-1){
                        _all_ids_in=false;
                        break;
                    }
                }
                if(_all_ids_in){
                    result.push(v);    
                }
            
            });
            return result;
        }
            
        //获取 经过已选节点 所有线路上的全部节点
        // 根据已经选择得属性值，得到余下还能选择的属性值
        function filterAttrs(ids){
            var products=filterProduct(ids);
            
            var result=[];
            $(products).each(function(k,v){
                result=result.concat(v['goods_attr'].split('|'));
            
            });
            return result;
        }


        //已选择的节点数组
        function getSelAttrId(){
            
             var list=[];
             $('.goods_attr li.sel').each(function(){
                list.push($(this).attr('val'));
             });
             return list;
        }

        $('.goods_attr li').click(function(){
            if($(this).hasClass('b')){
                return ;//被锁定了
            }
            if($(this).hasClass('sel')){
                $(this).removeClass('sel');
            }else{
                $(this).siblings().removeClass('sel');
                $(this).addClass('sel');
             
            }
            var select_ids=getSelAttrId();
            var filterP=filterProduct(select_ids);
            if(filterP.length==1){
                _show_product_num(filterP[0]['product_number']);
            }
            //已经选择了的规格
            var $_sel_goods_attr=$('li.sel').parents('.goods_attr');
            
            // step 1
            var all_ids=filterAttrs(select_ids);     
            
            //获取未选择的
            var $other_notsel_attr=$('.goods_attr').not($_sel_goods_attr);
            
            //设置为选择属性中的不可选节点
            $other_notsel_attr.each(function(){
               set_block($(this),all_ids);
            
            });
            
            //step 2
            //设置已选节点的同级节点是否可选
            $_sel_goods_attr.each(function(){ 
                update_2($(this));  
            });
            
            //showSelectSKU();
        });

        function update_2($goods_attr){
            // 若该属性值 $li 是未选中状态的话，设置同级的其他属性是否可选
            var select_ids=getSelAttrId();
            var $li=$goods_attr.find('li.sel');
            
            var select_ids2=del_array_val(select_ids,$li.attr('val'));
            
            var all_ids=filterAttrs(select_ids2);
            
            set_block($goods_attr,all_ids);
        }

        function set_block($goods_attr,all_ids){

        //根据 $goods_attr下的所有节点是否在可选节点中（all_ids） 来设置可选状态
            $goods_attr.find('li').each(function(k2,li2){
                    
                if($.inArray($(li2).attr('val'),all_ids)==-1){
                    $(li2).addClass('b');
                }else{
                    $(li2).removeClass('b');
                }
                
            });

        }
        function del_array_val(arr,val){
        //去除 数组 arr中的 val ，返回一个新数组
            var a=[];
            for(k in arr){
                if(arr[k]!=val){
                    a.push(arr[k]);
                }
            }
            return a;
        }
        //n =-1 显示原有库存
        function _show_product_num(n){
            
            var $goodsnumber=$('#ajax_goods_sku .goods_number');
            var str='无库存';
            if(n>0 || n==-1){
                
                if(n==-1){//设为总库存
                    //n=$("#goodsInventory .inventory").attr('total');
                }
                str='(库存'+n+'件)';
            } 
            $goodsnumber.html(str);
        }

        /* *
         * 添加商品到购物车
         */
         
        function goods_addToCart() {
          
          var goods = new Object();
          var spec_arr = new Array();
          
          var quick = 0;
          var goodsNumber = $("input[name=goods_number]").val();
            var not_all_selected=false;
            $('.goods_attr').each(function(){
                var $li_sel=$(this).find('li.sel');
                if($li_sel.length==0){
                    alert($(this).find('.label').text()+'没有选择');
                    not_all_selected=true;
                    return false;
                }
                spec_arr.push($li_sel.attr('val'));
                
            });
            if(not_all_selected){
                return ;
            }
         
          if (goodsNumber > 99 || goodsNumber < 1) {
            popMsg('商品数量不能多于99件或者小于1件');
            return false;
          }
          
          goods.spec = spec_arr;
          goods.goods_id = goods_id;
          goods.number = goodsNumber;
          var _url='flow.php?step=add_to_cart';
         
          $.post(_url, {"goods" : $.toJSON(goods)}, function(result) {
            if (result.error > 0) {
                    popMsg(result.message);
            } 
                else {
              var cart_url = 'flow.php?step=cart';
                    DialogManager.close($('.ajax_goods_sku').parents('.dialog_wrapper').attr('did'));
                    popMsg("添加购物车成功");
            }
          }, "JSON");
          
        }

  </script></div></div><div style="clear:both;display:block;"></div><div class="dialog_border" style="left: -5px; top: -5px; z-index: 9990; display: block; position: absolute; width: 460px;"></div></div>

                        

<!--=================================================================-->
      </div>
</div>
         
 
<form name="selectPageForm" action="/user.php" method="get">


 <div id="pager" class="pagebar">
  <span class="f_l f6" style=" width:auto;height:30px; line-height:30px;margin-left:10px;">总计 <b>1</b>  个记录</span>
      
    
</div>


</form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
 @else
 
  

    <h1 class="theme">我的收藏夹</h1>
    <div class="sort_bar">
       <ul>
         <li class="current">
         <a href="user.php?act=collection_list">全部宝贝</a></li>
                           <li class="desc">
         <a href="user.php?act=collection_list&amp;sort=1">收藏时间</a><em></em></li>
       </ul>
    </div>
    <div class="con">
      <div class="div_allchk">
        <input name="all" id="sel_all" class="fl" type="checkbox">&nbsp;全选
        <a href="javascript:void(0)" class="del" id="del_all_checked"><i></i><span>删除</span></a>
      </div>
      <div class="pro_list">
       
       <div>亲爱的舍友，您的收藏夹没有商品哦~去挑选宝贝吧&gt;&gt;</div>
             </div>
    </div>
         
 
<form name="selectPageForm" action="/user.php" method="get">


 <div id="pager" class="pagebar">
  <span class="f_l f6" style=" width:auto;height:30px; line-height:30px;margin-left:10px;">总计 <b>0</b>  个记录</span>
      
    
</div>


</form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
 
@endif
</div> 
<script type="text/javascript">
//ajax_form('goods.php?id=7191&act=ajax_goods_sku','L_goods_sku', 450 );
$('#sel_all ').click(function(){
    $('.collect_box input[name=chk]').prop('checked',$(this).prop('checked'));
});
$('#del_all_checked').click(function(){
    var $check=$('.collect_box input[name=chk]:checked');
    if($check.length==0){
        alert('请先选择要删除的条目');
        return;
    }
    var y=confirm('确定要删除选中的收藏吗？');
    if(!y) 
        return;
    var recids=[];
    $check.each(function(){
        recids.push($(this).val());
    })
    //console.log(recids);
    del_collection(recids.join(','));
            
    
});
var url='user.php?act=delete_collection';
function del_collection(rec_id){

    $.post(url,{'collection_id':rec_id},function(data){
        $.each(data.recids,function(k,v){
            $('#rec_'+v).remove();
        });
    },'json');

}

</script>


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
