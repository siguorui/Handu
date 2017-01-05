@extends('home.layout')
@section('content')
<title>搜索中心_韩都衣舍HSTYLE网-韩风快时尚第一品牌购物商城。正品保证！</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/home/css/handu_search.css') }}">
<div class="wrap">
<form id="search_page_form" action="http://www.handu.com/search.php" method="GET">
    <input type="hidden" name="brand" value="">
    <input type="hidden" name="filter_attr" value="">
    <div class="handu_crumb">	
		<a href="http://www.handu.com/">您所在的位置</a> <code>&gt;</code> <a href="http://www.handu.com/search.php">韩都衣舍</a>
         

		<span class="search_s input_notice">
        <label style="display:none;">在当前条件下搜索</label>
        <input type="text" id="search_page_kw" name="keywords" value="上衣"><button type="submit" class="search_s_btn" onclick="set_keywords_search()"></button>
        </span>
        <script type="text/javascript">
  
            function set_keywords_search(){
                
                $('#search_page_form').submit();
            }
        </script>
        	</div>
    
    <div class="attrs">
            <div class="brandAttr">
            <div class="attrKey">请注意 </div>
            <div class="attrValues">
            <ul class="av-collapse">
           
            </ul>   
            </div>
        </div> 
        
        
     <br>   
        
   </div>
   
      
 

    <div id="sort_bar" style="color:red;">
        商品未找到 请重新查找
    	
	</div>
</form>
    <script type="text/javascript">
      $('.search_check .check').click(function(){
        if($(this).hasClass('checked')){
            $(this).removeClass('checked');    
            $(this).prev().attr('checked',false);
        }else{
            $(this).addClass('checked');
            $(this).prev().attr('checked',true);
        }
        set_keywords_search();
      });
    
    </script>

</div>
 
<script type="text/javascript">

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

function sort(id){
    var el=document.getElementById(id) ;
    if(el==null){
        return;
    }
  
        var h = [];
        var mH = [];
        var box = el.getElementsByTagName("li");
        var minH,maxH = box[0].offsetHeight,
        boxW = box[0].offsetWidth,
        boxh,
        n = el.offsetWidth / boxW | 0; //计算页面能排下多少Pin
        var elWid =  n * boxW;
        el.style.width = elWid  + "px"
        for(var i = 0; i < box.length; i++) {
                boxh = box[i].offsetHeight; //获取每个Pin的高度

                if(i < n) { //第一行Pin以浮动排列，不需绝对定位
                        h[i] = boxh;
                        box[i].style.position = '';
                } else {
                        minH = Math.min.apply({},h); //取得各列累计高度最低的一列
                        minKey = getarraykey(h, minH);
                        h[minKey] += boxh ; //加上新高度后更新高度值
                        maxH = Math.max.apply({},h);
                        maxKey = getarraykey(mH, maxH);
                        mH[maxKey]+=boxh;
                        box[i].style.position = 'absolute';
                        box[i].style.top = minH + 'px';
                        box[i].style.left = (minKey * boxW) + 'px';
                }
        }
        el.style.height=maxH+'px';
};
/* 返回数组中某一值的对应项数 */
function getarraykey(s, v) {
        for(k in s) {
                if(s[k] == v) {
                        return k;
                }
        }
};



$(function(){setInterval(function(){sort("tile")},250);});
</script>

 
<div style="width:100%;height:auto;overflow:hidden;float:left">

@endsection