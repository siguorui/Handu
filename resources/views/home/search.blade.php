@extends('home.layout')
@section('content')
<title>搜索中心_韩都衣舍HSTYLE网-韩风快时尚第一品牌购物商城。正品保证！</title>
<link rel="stylesheet" type="text/css" href="{{asset('/home/css/handu_search.css')}}">
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
            <div class="attrKey">品牌 </div>
            <div class="attrValues">
            <ul class="av-collapse">
            	@foreach($res as $v)              
                                <li>
                <a href="http://www.handu.com/search.php?keywords=%E4%B8%8A%E8%A1%A3&amp;brand=12" style="height:25px;">
                <script>
                    getsearchlogo("Dequanna迪葵纳");
                </script><span style="width:70px;height:24px;position:absolute;border:1px solid #ddd;"><img src="/home/imgs/{{$v}}" width="70" height="24" style="display:block;"></span>
                <span style="position:relative;margin-left:70px;top:3px;width:20px;"></span>
                
                </a>
                </li>
                @endforeach             
            </ul>   
            </div>
        </div> 
        
        
     <br>   
        
   </div>
   
      
 

    <div id="sort_bar">

    	<ul class="sort_set">
                    <li class=" "><a title="恢复默认排序" href="http://www.handu.com/search.php?keywords=%E4%B8%8A%E8%A1%A3&amp;sort=default&amp;order=">默认显示</a>
            </li>
                    <li class="selected desc"><a title="点击后升序" href="http://www.handu.com/search.php?keywords=%E4%B8%8A%E8%A1%A3&amp;sort=add_time&amp;order=asc">上架时间<i></i></a>
            </li>
                    <li class=" asc"><a title="点击后升序" href="http://www.handu.com/search.php?keywords=%E4%B8%8A%E8%A1%A3&amp;sort=shop_price&amp;order=asc">价格<i></i></a>
            </li>
                    <li class=" desc"><a title="点击后降序" href="http://www.handu.com/search.php?keywords=%E4%B8%8A%E8%A1%A3&amp;sort=sell_count&amp;order=desc">销量<i></i></a>
            </li>
         
	    </ul>
        
        <div class="priceRange" id="bar-range">
            <div class="pr_box">
            <span class="input_notice"><label></label><input type="text" class="rangeNum range-min" name="min_price" value="100" autocomplete="off"></span>
            <code>-</code>
            <span class="input_notice"><label></label><input type="text" class="rangeNum range-max" name="max_price" value="999" autocomplete="off"></span>
            </div>
            <div class="pr_btn">
                <button type="button" class="btn-clear"> </button>
                <button type="submit" class="btn-yes"> </button>
            </div>    
        </div>
        
	    
        <div class="search_check">
            <input type="checkbox" name="discount" class="hide" value="1"> 
            <a class="check  " href="javascript:void(0)"></a><span>折扣商品(暂无)</span>
        </div>
        <div class="search_check">
            <input type="checkbox" name="ship" class="hide" value="1"> 
            <a class="check  " href="javascript:void(0)"></a><span>包邮(全部)</span>
        </div>
	    
        
	    <div class="page_set">
            <span>总计{{$data ->total()}}个商品</span>&nbsp;&nbsp;&nbsp;&nbsp;
	    	<span>{{$data ->currentPage()}}/{{$data ->lastPage()}}</span> &nbsp;&nbsp;
    <span class="arr" href="{{ $data -> appends($request) -> previousPageUrl() }}">&lt;</span>  <a class="arr" href="{{ $data -> appends($request) -> nextPageUrl() }}"><span>&gt;</span></a>            
	    </div>
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
    
	<div class="waterfall">
            <ul id="tile" style="width: 1216px; height: 4272px;">
             @foreach($data as $v)                   
             <li>
                <div class="boxCont" style="height: 325px">
                                        <a href="{{ url('/home/goods/goods') }}/{{$v->id}}" title="{{$v -> promt_price}}" alt="" target="_blank"><img src="/home/imgs/goods/{{$v -> pic}}"></a>
                    <!-- <div style="position: absolute;width: 68px;height: 41px;background: url(http://img01.handu.com/hdysweb/20141105/1111.png) no-repeat 0 0;top: 5px;left: 5px;"></div> -->
                    <!--<div title="10.10购物狂欢节" style="position: absolute;width: 67px;height: 29px;top: 12px;left: 12px; background:url(http://img01.handu.com/hdysweb/20141009/shuagshi.png) no-repeat;"></div>-->
                    <script>
                 // getGood_price("WQ6439");
                    </script>   
                    <!-- <div class="box_htbs"></div>  -->   
                    <p>
                    <a href="http://www.handu.com/goods-1054538.html" title="{{$v -> title}}" target="_blank" class="tname">{{$v -> title}}</a></p>
                    <p>
                        <span class="price ">￥{{$v -> promt_price}}</span>
                        <span class="sales "><i>|</i>月销量：<em>10</em></span>
                                            </p>
                </div>
            </li>
            @endforeach                               
                            </ul>
        <div class="search_page">
        			<a class="page prev" href="{{ $data -> appends($request) -> url(1) }}">首页</a>                 
                      <a class="page prev" href="{{ $data -> appends($request) -> previousPageUrl() }}">上一页</a>
                      <!-- 白色class去掉next               -->
                      <a class="page next" href="{{ $data -> appends($request) -> nextPageUrl() }}">下一页</a>
                      <a class="page next" href="{{ $data -> appends($request) -> url($data ->lastPage()) }}">尾页</a> 
                      共 {{$data ->lastPage()}} 页      
    </div>
<!-- {{$data ->currentPage()}} -->
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