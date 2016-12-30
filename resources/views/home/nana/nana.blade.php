@extends('home.layout')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('/home/css/handu_base.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/home/css/handu_search.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/home/css/handu_list.css')}}">
<script charset="utf-8" src="{{asset('/home/dequanna/js/v.js')}}"></script>
<script type="text/javascript" id="veConnect" async="" src="{{asset('/home/js/capture-apps-4.18.6.js')}}"></script>
<script src="{{asset('/home/js/hm.js')}}"></script>
<script async="" src="{{asset('/home/js/analytics.js')}}"></script>
<!-- <script type="text/javascript" async="" charset="utf-8" src="{{asset('/home/dequanna/js/ntkfstat.js')}}"></script> -->
<script type="text/javascript" src="{{asset('/home/js/goods_no1214.js')}}"></script>
<script type="text/javascript" async="async" charset="utf-8" src="{{asset('/home/js/zh_cn.js')}}" data-requiremodule="lang"></script>
<script type="text/javascript" async="async" charset="utf-8" src="{{asset('/home/js/chat.in.js')}}" data-requiremodule="chatManage"></script>
<script type="text/javascript" async="async" charset="utf-8" src="{{asset('/home/js/mqtt31.js')}}" data-requiremodule="MQTT"></script>
<script type="text/javascript" async="async" charset="utf-8" src="{{asset('/home/js/mqtt.chat.js')}}" data-requiremodule="Connection"></script>
<div style="width:100%;">
<div style="width:100%;background:url(/home/imgs/bj.jpg) no-repeat center 0px;height:600px;">
</div>
</div>

<div class="wrap"> 
<div id="cate_left" style="display:none; width:0">
<div class="cate_tree"> 
       
        <dl>
        <dt><a href="http://www.handu.com/category-10143-b0.html">上装</a><i></i></dt>
    		
                <dd class=" no_child ">
        <h3><a href="http://www.handu.com/category-10144-b0.html" title="T恤">T恤</a></h3>
   		<ul>
           		</ul>
        </dd>
 		        <dd class=" no_child ">
        <h3><a href="http://www.handu.com/category-10145-b0.html" title="衬衫">衬衫</a></h3>
   		<ul>
           		</ul>
        </dd>
 		        <dd class=" no_child ">
        <h3><a href="http://www.handu.com/category-10646-b0.html" title="短外套">短外套</a></h3>
   		<ul>
           		</ul>
        </dd>
 		        <dd class=" no_child ">
        <h3><a href="http://www.handu.com/category-10146-b0.html" title="毛针织衫">毛针织衫</a></h3>
   		<ul>
           		</ul>
        </dd>
 		        <dd class=" no_child ">
        <h3><a href="http://www.handu.com/category-10294-b0.html" title="套装">套装</a></h3>
   		<ul>
           		</ul>
        </dd>
 		        <dd class=" no_child ">
        <h3><a href="http://www.handu.com/category-10176-b0.html" title="风衣">风衣</a></h3>
   		<ul>
           		</ul>
        </dd>
 		        <dd class=" no_child ">
        <h3><a href="http://www.handu.com/category-10147-b0.html" title="棉衣/棉服">棉衣/棉服</a></h3>
   		<ul>
           		</ul>
        </dd>
 		        <dd class=" no_child ">
        <h3><a href="http://www.handu.com/category-10741-b0.html" title="羽绒服">羽绒服</a></h3>
   		<ul>
           		</ul>
        </dd>
 		        <dd class=" no_child ">
        <h3><a href="http://www.handu.com/category-10215-b0.html" title="马夹">马夹</a></h3>
   		<ul>
           		</ul>
        </dd>
 		        <dd class=" no_child ">
        <h3><a href="http://www.handu.com/category-10746-b0.html" title="毛呢外套">毛呢外套</a></h3>
   		<ul>
           		</ul>
        </dd>
 		 
         	
    </dl>
        
       
        <dl>
        <dt><a href="http://www.handu.com/category-10149-b0.html">裤装</a><i></i></dt>
    		
                <dd class=" no_child ">
        <h3><a href="http://www.handu.com/category-10152-b0.html" title="休闲裤">休闲裤</a></h3>
   		<ul>
           		</ul>
        </dd>
 		 
         	
    </dl>
        
       
        <dl>
        <dt><a href="http://www.handu.com/category-10150-b0.html">裙装</a><i></i></dt>
    		
                <dd class=" no_child ">
        <h3><a href="http://www.handu.com/category-10151-b0.html" title="连衣裙">连衣裙</a></h3>
   		<ul>
           		</ul>
        </dd>
 		        <dd class=" no_child ">
        <h3><a href="http://www.handu.com/category-10378-b0.html" title="半身裙">半身裙</a></h3>
   		<ul>
           		</ul>
        </dd>
 		 
         	
    </dl>
        
</div><div class="category_top10">
	<div class="category_tree_title category_paihang_title">人气热卖</div>
	<ul class="category_paihang" style="padding-bottom:10px;">
		</ul>
     <div style="height:10px; "></div>
</div></div>
<div id="cate_right" style="margin:0 auto; float:none">
<div class="cate_gg">
</div>
<div class="handu_crumb" style="display:none"> 您所在的位置  <code>&gt;</code> <a href="http://www.handu.com/">韩都衣舍</a></div>
<style>
.cataClass_0317{width:1000px; height:20px; margin:20px auto; font-family:'微软雅黑'}
.cadl_0317 {font-size:12px;}
.cadl_0317 dt{float:left; font-weight:normal; margin-right:10px;}
.cadl_0317 dd{text-align:center; float:left; margin:0 2px; position:relative; cursor:pointer; padding: 0 14px;}
.cadl_0317 dd a{text-decoration:none; color:#333}
.caul_0317{width:100px; height:auto; overflow:hidden; border:1px solid #ddd; position:absolute; left:-22px; top:20px; display:none;background: rgba(255, 255, 255, 0.95); z-index: 9999; padding: 10px 0;}
.caul_block{display:block;}
.caul_0317 li{padding:3px;}
</style>
<div class="cataClass_0317">
	
	<dl class="cadl_0317">
    
    <dt>{{$data -> title}}</dt>

        @foreach($data1 as $k => $v)
   
    	        <dd class="ca_dd">{{$v -> title}}
    
                        	<ul class="caul_0317">
                            @foreach($data2[$k] as $d2)
                            
            	            	<li class="cname" idname="{{$d2 -> id}}"><p  title="{{$d2 -> title}}">{{$d2 -> title}}</p></li>
            	            	
                            @endforeach
                            </ul>
                            
                </dd>
   
        @endforeach
          
    
</div>


<script type="text/javascript">
    
  $(function()
  {
    
    var tmp = $('.did');
    $(".cname").on('click',function(){
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
      });
      var id = $(this).attr('idname');
      $('.did').remove();
      $.ajax({
     
        type:'POST',
        url:"{{ url('/home/cate/ajaxupdate')}}",
        data:{id:id},
        success:function(data)
        {
          $('#did').css('display','block');
          $('#ddd').css('display','none');
          if(data.length!=0){
          $(data).each(function(i,n){
            // var oldDiv = $('#ddd');
            var newDiv = tmp.clone(true);
            newDiv.find('img').attr('src','/home/imgs/goods/'+n['pic']);
            newDiv.find('img').attr('alt',n['title']);
            newDiv.find('a').attr('title',n['title']);
            newDiv.find('em').attr('title',n['promt_price']);
            newDiv.find('em').html(n['promt_price']);
            newDiv.find('del').attr('title','市场价'+n['rign_price']);
            newDiv.find('del').html(n['rign_price']);
            // newDiv.css('display','block');
            // oldDiv.css('display','none');
            $('.grid_wrap').append(newDiv);
          }); 
          }
          
          $('.grid_wrap').append("<br class='clear'>");  
        },
        error:function()
        {
          alert("异常");
        },
      
      });
    });
  });

</script>




<script>
$(function(){
	var dd =$('.cadl_0317 dd');
	var caUl =$('.caul_0317');
	dd.each(function(i){
		$(this).on('click',function(){
				$(caUl[i]).toggleClass('caul_block').parent('dd').siblings().find('.caul_0317').removeClass('caul_block')
				
				
			})
	
		})
	
	})
</script>
<form id="c_page_form" action="http://www.handu.com/brand_topic.php" method="GET" style="margin-top:20px; clear:both">
    <input type="hidden" name="category" value="10142">
    
    <input type="hidden" name="sort" value="add_time">
    <input type="hidden" name="order" value="desc">
<div id="sort_bar">
    <ul class="sort_set">
            <li class=" "><a title="恢复默认排序" href="http://www.handu.com/brand_topic.php?id=10142&amp;sort=default&amp;order=">默认排序</a>
        </li>
            <li class="selected desc"><a title="点击后升序" href="http://www.handu.com/brand_topic.php?id=10142&amp;sort=add_time&amp;order=asc">上架时间<i></i></a>
        </li>
            <li class=" asc"><a title="点击后升序" href="http://www.handu.com/brand_topic.php?id=10142&amp;sort=shop_price&amp;order=asc">价格<i></i></a>
        </li>
            <li class=" desc"><a title="点击后降序" href="http://www.handu.com/brand_topic.php?id=10142&amp;sort=sell_count&amp;order=desc">销量<i></i></a>
        </li>
     
    </ul>
    
    <div class="priceRange" id="bar-range">
        <div class="pr_box">
        <span class="input_notice"><label>￥</label><input type="text" class="rangeNum range-min" name="price_min" value="" autocomplete="off"></span>
        <code>-</code>
        <span class="input_notice"><label>￥</label><input type="text" class="rangeNum range-max" name="price_max" value="" autocomplete="off"></span>
        </div>
        <div class="pr_btn">
            <button type="button" class="btn-clear"> </button>
            <button type="submit" class="btn-yes"> </button>
        </div>    
    </div>
    
    
    <div class="search_check">
        <input type="checkbox" name="discount" class="hide" value="1"> 
        <a class="check  " href="javascript:void(0)"></a><span>折扣商品</span>
    </div>
    <div class="search_check">
        <input type="checkbox" name="ship" class="hide" value="1"> 
        <a class="check  " href="javascript:void(0)"></a><span>包邮</span>
    </div>
    
    <div class="page_set">
        <span>总计296个商品</span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span>1 /8</span> &nbsp;&nbsp;
         <span class="arr">&lt;</span>          <a class="arr" href="http://www.handu.com/brand_topic.php?id=10142&amp;price_min=0&amp;price_max=0&amp;page=2&amp;sort=add_time&amp;order=desc"><span>&gt;</span></a>            
    </div>
</div>
</form>
<div class="productGrid">
 
    <div id='ddd' class="grid_wrap" style="display:block;">
            @foreach($res as $kk => $vv)
            @foreach($vv as $r)
        	<div  class="product ddd" style="height:280px;">
            <div class="product-iWrap">
                <div class="productImg-wrap">
                                        <a href="{{url('/home/goods/goods')}}/{{$r -> id}}" title="{{$r -> title}}" class="productImg" target="_blank">
                    <img src="/home/imgs/goods/{{$r -> pic}}" alt="{{$r -> title}}">
                    </a>     
                </div>
               <p class="productPrice" style="width:100%; text-align:center">
                    <em title="{{$r -> promt_price}}" style="float:none"><b>¥</b>{{$r -> promt_price}}</em>
                    <del id="dde" title="市场价 {{$r -> orign_price}}" style="float:none">¥{{$r -> orign_price}}</del>
                </p>
            </div>
        </div>
        @endforeach
        @endforeach
  
<!-- ============================================= -->
    
        <br class="clear">
    </div>

     <div id='did' class="grid_wrap" style="display:none;">
     
        <div class="product did" style="height:280px;">
            <div class="product-iWrap">
                <div class="productImg-wrap">
                                        <a href="http://www.handu.com/goods-1054011.html" title="" class="productImg" target="_blank">
                    <img src="/home/imgs/goods/" alt="">
                    </a>     
                </div>
               <p class="productPrice" style="width:100%; text-align:center">
                    <em title="" style="float:none"><b>¥</b></em>
                    <del id="dde" title="市场价 " style="float:none">¥</del>
                </p>
            </div>
        </div>
    
       
    </div>


    <div class="search_page">
    {{$res -> appends($request) ->link()}}
                <strong class="current">1</strong>
                      <a class="page" href="http://www.handu.com/brand_topic.php?id=10142&amp;price_min=0&amp;price_max=0&amp;page=2&amp;sort=add_time&amp;order=desc">2</a>
                      <a class="page" href="http://www.handu.com/brand_topic.php?id=10142&amp;price_min=0&amp;price_max=0&amp;page=3&amp;sort=add_time&amp;order=desc">3</a>
                      <a class="page" href="http://www.handu.com/brand_topic.php?id=10142&amp;price_min=0&amp;price_max=0&amp;page=4&amp;sort=add_time&amp;order=desc">4</a>
                      <a class="page" href="http://www.handu.com/brand_topic.php?id=10142&amp;price_min=0&amp;price_max=0&amp;page=5&amp;sort=add_time&amp;order=desc">5</a>
                      <a class="page" href="http://www.handu.com/brand_topic.php?id=10142&amp;price_min=0&amp;price_max=0&amp;page=6&amp;sort=add_time&amp;order=desc">6</a>
          	
 <a class="page">...</a><a class="page" href="http://www.handu.com/brand_topic.php?id=10142&amp;price_min=0&amp;price_max=0&amp;page=8&amp;sort=add_time&amp;order=desc">8</a><a class="page next" href="http://www.handu.com/brand_topic.php?id=10142&amp;price_min=0&amp;price_max=0&amp;page=2&amp;sort=add_time&amp;order=desc">下一页</a>    
    <span>共8页 </span>&nbsp;
   </div></div>
    
</div>
</div>
<script type="text/javascript">
//左侧分类折叠
$('.cate_tree dt').click(function(){
    $(this).parent().toggleClass('on').siblings().removeClass('on');
});
$('.cate_tree h3').click(function(){
    $(this).parent().toggleClass('on').siblings().removeClass('on');
});
$('.cate_tree .on').parents('dd,dl').addClass('on');
//商品图片切换
$('.productThumb img ').hover(function(){
    $(this).parents('.product-iWrap').find('.productImg-wrap img').attr('src',$(this).attr('thumb'));
    
});
 
$('.search_check .check').click(function(){
    if($(this).hasClass('checked')){
        $(this).removeClass('checked');    
        $(this).prev().attr('checked',false);
    }else{
        $(this).addClass('checked');
        $(this).prev().attr('checked',true);
    }
    $('#c_page_form')[0].submit();
});
$('.input_notice input').bind({
        'focus':function(){
            $(this).siblings('label').hide();
        },
        'blur':function(){
            if($(this).val()==''){
                $(this).siblings('label').show();
            }
        }
});
//处理价格范围事件
var _timer_pr=null;
$('#bar-range input').bind({
    'focus':function(){
       clearTimeout(_timer_pr);
       $('#bar-range').addClass('priceRange_on');
    },
    'blur':function(){
       _timer_pr=setTimeout(function(){ 
            $('#bar-range').removeClass('priceRange_on')
       },300);
    }
});
$('.pr_btn .btn-clear').click(function(){
    clearTimeout(_timer_pr);
    $('#bar-range input').val('').eq(0).focus();
    //$('#bar-range').addClass('priceRange_on');
});
    
</script> 
    

@endsection



