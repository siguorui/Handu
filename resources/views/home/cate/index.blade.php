@extends('home.layout')
@section('content')
 
<div class="wrap"> 
<div id="cate_left">
<div class='cate_tree'> 
       
        <dl>
        <dt><a href="category-181-b0.html" >每日新品</a><i></i></dt>
    		
                <dd class=" no_child ">
        <h3><a href="category-10924-b0.html" title="20161213">20161213</a></h3>
   		<ul>
           		</ul>
        </dd>
 		        <dd class=" no_child ">
        <h3><a href="category-10923-b0.html" title="20161209">20161209</a></h3>
   		<ul>
           		</ul>
        </dd>
 		        <dd class=" no_child ">
        <h3><a href="category-10922-b0.html" title="20161206">20161206</a></h3>
   		<ul>
           		</ul>
        </dd>
 		        <dd class=" no_child ">
        <h3><a href="category-10888-b0.html" title="20161202">20161202</a></h3>
   		<ul>
           		</ul>
        </dd>
 		        <dd class=" no_child ">
        <h3><a href="category-10887-b0.html" title="20161129">20161129</a></h3>
   		<ul>
           		</ul>
        </dd>
 		        <dd class=" no_child ">
        <h3><a href="category-10886-b0.html" title="20161125">20161125</a></h3>
   		<ul>
           		</ul>
        </dd>
 		        <dd class=" no_child ">
        <h3><a href="category-10885-b0.html" title="20161122">20161122</a></h3>
   		<ul>
           		</ul>
        </dd> 	
    </dl>
        
    @foreach($data as $k1 => $v1) 
    <dl>
        <dt><a href="category-225-b0.html" >{{$v1->title}}</a><i></i></dt>
        @foreach($data1[$k1] as $k2 => $v2)	
        <dd class="">
            <h3><a href="category-366-b0.html" title="上装">{{$v2->title}}</a></h3>
       		<ul>
                @foreach($data2[$k1][$k2] as $k3 => $v3)
                <li>
                    <a  href="category-10727-b0.html" title="毛呢外套">{{$v3->title}}</a><span>(131)</span>
                </li>
                @endforeach
            </ul>           
        </dd>
        @endforeach
    </dl>
    @endforeach   
       
        
        
</div><div class="category_top10">
	<div class="category_tree_title category_paihang_title">人气热卖</div>
	<ul class="category_paihang" style="padding-bottom:10px;">
		</ul>
     <div style="height:10px; "></div>
</div></div>
<div id="cate_right">
<div class="cate_gg">
</div>
<div class="handu_crumb"> 您所在的位置  <code>&gt;</code> <a href=".">韩都衣舍</a> <code>&gt;</code> <a href="category-225-b0.html">HSTYLE女装</a> <code>&gt;</code> <a href="category-366-b0.html">上装</a> <code>&gt;</code> <a href="category-255-b0.html">羽绒服</a></div>
<form id="c_page_form" action="category.php" method="GET" >
    <input type="hidden" name="category" value="255" />
    
    <input type="hidden" name="sort" value="add_time" />
    <input type="hidden" name="order" value="desc" />
<div id="sort_bar" >
    <ul class="sort_set">
            <li class=" " ><a  title="恢复默认排序"  href="category-255-b0-1-default.html">默认排序</a>
        </li>
            <li class="selected desc" ><a  title="点击后升序"  href="category-255-b0-1-add_time-asc.html">上架时间<i></i></a>
        </li>
            <li class=" asc" ><a  title="点击后升序"  href="category-255-b0-1-shop_price-asc.html">价格<i></i></a>
        </li>
            <li class=" desc" ><a  title="点击后降序"  href="category-255-b0-1-sell_count-desc.html">销量<i></i></a>
        </li>
     
    </ul>
    
    <div class="priceRange" id="bar-range">
        <div class="pr_box">
        <span class="input_notice"><label >￥</label><input type="text" class="rangeNum range-min" name="price_min" value="" autocomplete="off"/></span>
        <code>-</code>
        <span class="input_notice"><label >￥</label><input type="text" class="rangeNum range-max" name="price_max" value="" autocomplete="off"/></span>
        </div>
        <div class="pr_btn">
            <button type="button" class="btn-clear" > </button>
            <button type="submit" class="btn-yes"> </button>
        </div>    
    </div>
    
    
    <div class="search_check">
        <input type="checkbox" name="discount" class="hide"  value="1"  /> 
        <a class="check  " href="javascript:void(0)"></a><span>折扣商品</span>
    </div>
    <div class="search_check">
        <input type="checkbox" name="ship" class="hide"  value="1"  /> 
        <a class="check  " href="javascript:void(0)"></a><span>包邮</span>
    </div>
    
    <div class="page_set">
        <span>总计63个商品</span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span>1 /2</span> &nbsp;&nbsp;
         <span  class="arr">&lt;</span>          <a class="arr" href="category-255-b0-min0-max0-attr0-2-add_time-desc.html"><span>&gt;</span></a>            
    </div>
</div>
</form>
<div class="productGrid">
 
    <div class="grid_wrap">
        	<div class="product " >
            <div class="product-iWrap">
                <div class="productImg-wrap">
                                        <a href="goods-1053982.html" title="韩都衣舍2016韩版女装冬装装新款温暖显瘦拼接短款羽绒服GW6157阨" class="productImg" target="_blank"  >
                    <img src="./Picture/1053982_thumb_g_1481526135517.jpg" alt="韩都衣舍2016韩版女装冬装装新款温暖显瘦拼接短款羽绒服GW6157阨">
                    </a>
                     <!--<div style="position: absolute;width: 68px;height: 41px;background: url(./Images/1111.png) no-repeat 0 0;top: 0;left: 0;"></div> -->
                    <script>
                   // getGood_price("GW6157");
                    </script>      
                </div>
                <div class="productThumb clearfix">
                    <div class="proThumb-wrap">
            
                                            <p class="ks-switchable-content"><b class="proThumb-img "><img  src="/Picture/1053982_thumb_g_1481526135517.jpg" title="主图" alt="韩都衣舍2016韩版女装冬装装新款温暖显瘦拼接短款羽绒服GW6157阨"><i></i></b></p>
					                    </div>
                </div>
                <p class="productPrice">
                    <em title="￥348"><b>¥</b>348</em>
                    <del title="市场价 1718.00">¥1718.00</del>
                    <!--<em title="10.10狂欢价" style="margin: 6px 0 0 6px;"><img src="./Picture/10.10.png" /></em>-->
                </p>
                <p class="productTitle">
                    <a href="goods-1053982.html" target="_blank" title="韩都衣舍2016韩版女装冬装装新款温暖显瘦拼接短款羽绒服GW6157阨" >韩都衣舍2016韩版女装冬装装新款温暖显瘦拼接短款羽绒服GW6157阨</a>
                </p>
                <p class="productStatus">
                    <span><em>9</em><br>月销量</span>
                    <span class="r"><a href="goods-1053982.html#goods_comments_a" target="_blank" >0</a><br>累计评价</span>
                    
                </p>
                
            </div>
                        <p class="productContry">中国</p>
                    </div>
    
        	<div class="product " >
            <div class="product-iWrap">
                <div class="productImg-wrap">
                                        <a href="goods-1053909.html" title="韩都衣舍2016冬装新款韩版女装连帽大口袋短款羽绒服MR5479" class="productImg" target="_blank"  >
                    <img src="./Picture/1053909_thumb_g_1481275302727.jpg" alt="韩都衣舍2016冬装新款韩版女装连帽大口袋短款羽绒服MR5479">
                    </a>
                     <!--<div style="position: absolute;width: 68px;height: 41px;background: url(./Images/1111.png) no-repeat 0 0;top: 0;left: 0;"></div> -->
                    <script>
                   // getGood_price("MR5479");
                    </script>      
                </div>
                <div class="productThumb clearfix">
                    <div class="proThumb-wrap">
            
                                            <p class="ks-switchable-content"><b class="proThumb-img "><img  src="/Picture/1053909_thumb_g_1481275302727.jpg" title="主图" alt="韩都衣舍2016冬装新款韩版女装连帽大口袋短款羽绒服MR5479"><i></i></b></p>
					                    </div>
                </div>
                <p class="productPrice">
                    <em title="￥296"><b>¥</b>296</em>
                    <del title="市场价 888.00">¥888.00</del>
                    <!--<em title="10.10狂欢价" style="margin: 6px 0 0 6px;"><img src="./Picture/10.10.png" /></em>-->
                </p>
                <p class="productTitle">
                    <a href="goods-1053909.html" target="_blank" title="韩都衣舍2016冬装新款韩版女装连帽大口袋短款羽绒服MR5479" >韩都衣舍2016冬装新款韩版女装连帽大口袋短款羽绒服MR5479</a>
                </p>
                <p class="productStatus">
                    <span><em>8</em><br>月销量</span>
                    <span class="r"><a href="goods-1053909.html#goods_comments_a" target="_blank" >0</a><br>累计评价</span>
                    
                </p>
                
            </div>
                        <p class="productContry">中国</p>
                    </div>
    
        	<div class="product " >
            <div class="product-iWrap">
                <div class="productImg-wrap">
                                        <a href="goods-1052738.html" title="韩都衣舍2016女装冬装新款时尚中长款纯色连帽羽绒服EQ5733婋" class="productImg" target="_blank"  >
                    <img src="./Picture/1052738_thumb_g_1479712925364.jpg" alt="韩都衣舍2016女装冬装新款时尚中长款纯色连帽羽绒服EQ5733婋">
                    </a>
                     <!--<div style="position: absolute;width: 68px;height: 41px;background: url(./Images/1111.png) no-repeat 0 0;top: 0;left: 0;"></div> -->
                    <script>
                   // getGood_price("EQ5733");
                    </script>      
                </div>
                <div class="productThumb clearfix">
                    <div class="proThumb-wrap">
            
                                            <p class="ks-switchable-content"><b class="proThumb-img "><img  src="/Picture/1052738_thumb_g_1479712925364.jpg" title="主图" alt="韩都衣舍2016女装冬装新款时尚中长款纯色连帽羽绒服EQ5733婋"><i></i></b></p>
					                    </div>
                </div>
                <p class="productPrice">
                    <em title="￥365"><b>¥</b>365</em>
                    <del title="市场价 1688.00">¥1688.00</del>
                    <!--<em title="10.10狂欢价" style="margin: 6px 0 0 6px;"><img src="./Picture/10.10.png" /></em>-->
                </p>
                <p class="productTitle">
                    <a href="goods-1052738.html" target="_blank" title="韩都衣舍2016女装冬装新款时尚中长款纯色连帽羽绒服EQ5733婋" >韩都衣舍2016女装冬装新款时尚中长款纯色连帽羽绒服EQ5733婋</a>
                </p>
                <p class="productStatus">
                    <span><em>23</em><br>月销量</span>
                    <span class="r"><a href="goods-1052738.html#goods_comments_a" target="_blank" >0</a><br>累计评价</span>
                    
                </p>
                
            </div>
                        <p class="productContry">中国</p>
                    </div>
    
        	<div class="product " >
            <div class="product-iWrap">
                <div class="productImg-wrap">
                                        <a href="goods-1052428.html" title="韩都衣舍2016韩版女装冬新款纯色中长款连帽毛领羽绒服TK6525婏" class="productImg" target="_blank"  >
                    <img src="./Picture/1052428_thumb_g_1478483477900.jpg" alt="韩都衣舍2016韩版女装冬新款纯色中长款连帽毛领羽绒服TK6525婏">
                    </a>
                     <!--<div style="position: absolute;width: 68px;height: 41px;background: url(./Images/1111.png) no-repeat 0 0;top: 0;left: 0;"></div> -->
                    <script>
                   // getGood_price("TK6525");
                    </script>      
                </div>
                <div class="productThumb clearfix">
                    <div class="proThumb-wrap">
            
                                            <p class="ks-switchable-content"><b class="proThumb-img "><img  src="/Picture/1052428_thumb_g_1478483477900.jpg" title="主图" alt="韩都衣舍2016韩版女装冬新款纯色中长款连帽毛领羽绒服TK6525婏"><i></i></b></p>
					                    </div>
                </div>
                <p class="productPrice">
                    <em title="￥358"><b>¥</b>358</em>
                    <del title="市场价 1868.00">¥1868.00</del>
                    <!--<em title="10.10狂欢价" style="margin: 6px 0 0 6px;"><img src="./Picture/10.10.png" /></em>-->
                </p>
                <p class="productTitle">
                    <a href="goods-1052428.html" target="_blank" title="韩都衣舍2016韩版女装冬新款纯色中长款连帽毛领羽绒服TK6525婏" >韩都衣舍2016韩版女装冬新款纯色中长款连帽毛领羽绒服TK6525婏</a>
                </p>
                <p class="productStatus">
                    <span><em>120</em><br>月销量</span>
                    <span class="r"><a href="goods-1052428.html#goods_comments_a" target="_blank" >0</a><br>累计评价</span>
                    
                </p>
                
            </div>
                        <p class="productContry">中国</p>
                    </div>
    
    
    
        <br class="clear" />
    </div>
    <div class="search_page">
                <strong class="current">1</strong>
                      <a class="page" href="category-255-b0-min0-max0-attr0-2-add_time-desc.html">2</a>
          	
<a class="page next" href="category-255-b0-min0-max0-attr0-2-add_time-desc.html">下一页</a>    
    <span>共2页 </span>&nbsp;
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