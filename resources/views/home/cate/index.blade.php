@extends('home.layout')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('/home/css/handu_base.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/home/css/handu_search.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/home/css/handu_list.css')}}">

<div class="wrap"> 
<div id="cate_left">
<div class='cate_tree'> 
       
    <dl>
        <dt><a href="{{ url('/home/cate/index/10000000') }}" >每日新品</a><i></i></dt>
    	@foreach($datenum as $v)	
        <dd class=" no_child ">
            <h3><a href="{{ url('/home/cate/index') }}/{{$v}}" title="{{$v}}">{{$v}}</a></h3>
   		    <ul></ul>
        </dd>
 		@endforeach       
    </dl>
        
    @foreach($fdata as $k1 => $v1) 
    <dl>
        <dt><a href="{{ url('/home/cate/index') }}/{{$v1 -> id}}" >{{$v1->title}}</a><i></i></dt>
        @foreach($data1[$k1] as $k2 => $v2)	
        <dd class="">
            <h3><a href="{{ url('/home/cate/index') }}/{{$v2 -> id}}" title="{{$v2->title}}">{{$v2->title}}</a></h3>
       		<ul>
                @foreach($data2[$k1][$k2] as $k3 => $v3)
                <li>
                    <a  href="{{ url('/home/cate/index') }}/{{$v3 -> id}}" title="{{$v3->title}}">{{$v3->title}}</a><span>{{$v3 -> goods_num}}</span>
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

<div id="sort_bar" >
    <form id="my_page_form" action="{{ url('/home/cate/index') }}/{{$id}}" method="GET" >
    
    <input type="hidden" name="order" value="" />
    <input type="hidden" name="sequence" value="" />
    <ul class="sort_set">
        <li class="selected" order="id" sequence="asc"><a  title="恢复默认排序"  href="#">默认排序</a>
        </li>

        <li class="" order="add_time" sequence="desc"><a  title="点击后降序"  href="#">上架时间<i></i></a>
        </li>

        <li class="" order="promt_price" sequence="asc"><a  title="点击后升序"  href="#">价格<i></i></a>
        </li>

        <li class="" order="count" sequence="desc"><a  title="点击后降序"  href="#">销量<i></i></a>
        </li>
     
    </ul>
    </form>
    <script type="text/javascript">
         $('.sort_set li').click(function(){
             $('.sort_set li').removeClass('selected');
             $(this).addClass('selected');
             var sequence = $(this).attr('sequence');
             var order = $(this).attr('order');
             $("input[name='sequence']").val(sequence);
             $("input[name='order']").val(order);
             $('#my_page_form').submit();
         });

    </script>

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
    
    @if($num!=3)
    <div class="page_set">
        <span>总计{{$data ->total()}}个商品</span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span>{{$data ->currentPage()}}/{{$data ->lastPage()}}</span> &nbsp;&nbsp;
         <a class="arr" href="{{ $data -> appends($request) ->previousPageUrl() }}"><span>&lt;</span></a>       <a class="arr" href="{{ $data ->appends($request) -> nextPageUrl() }}"><span>&gt;</span></a>           
    </div>
    @else
    <div class="page_set">
        <span>总计40个商品</span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span>1/2</span> &nbsp;&nbsp;
         <a class="arr" href="#"><span>&lt;</span></a>       <a class="arr" href="#"><span>&gt;</span></a>           
    </div>
    @endif
</div>


<div class="productGrid">
 
    <div class="grid_wrap">


        @if($num == 2)
            @foreach($data as $k => $v)
        <div class="product" >
            <div class="product-iWrap">
                <div class="productImg-wrap">
                        <a href="{{ url('/home/goods/goods') }}/{{ $v->id }}" title="{{$v->title}}" class="productImg" target="_blank"  >
                        <img src="{{ url('/home/imgs/goods') }}/{{ $v->pic }}" alt="{{$v->title}}">
                        </a>    
                </div>

                <div class="productThumb clearfix">
                    <div class="proThumb-wrap">
                        <p class="ks-switchable-content"><b class="proThumb-img "><img  src="{{ url('/home/imgs/goods') }}/{{ $v->pic }}" title="主图" alt="{{$v->title}}"><i></i></b></p>
					</div>
                </div>

                <p class="productPrice">
                    <em title="￥{{$v->promt_price}}"><b>¥</b>{{$v->promt_price}}</em>
                    <del title="市场价 {{$v->orign_price}}">¥{{$v->orign_price}}</del>
                </p>
                <p class="productTitle">
                    <a href="goods-1053982.html" target="_blank" title="{{$v->title}}" >{{$v->title}}</a>
                </p>
                <p class="productStatus">
                    <span><em>{{$v->count}}</em><br>月销量</span>
                    <span class="r"><a href="goods-1053982.html#goods_comments_a" target="_blank" >0</a><br>累计评价</span>   
                </p> 
            </div>
                <p class="productContry">中国</p>
        </div>
            @endforeach                         
        @endif

        @if($num == 1)
            @foreach($data as $k => $v)
                
        <div class="product" >
            <div class="product-iWrap">
                <div class="productImg-wrap">
                        <a href="{{ url('/home/goods/goods') }}/{{ $v->id }}" title="{{$v->title}}" class="productImg" target="_blank"  >
                        <img src="{{ url('/home/imgs/goods') }}/{{ $v->pic }}" alt="{{$v->title}}">
                        </a>    
                </div>

                <div class="productThumb clearfix">
                    <div class="proThumb-wrap">
                        <p class="ks-switchable-content"><b class="proThumb-img "><img  src="{{ url('/home/imgs/goods') }}/{{ $v->pic }}" title="主图" alt="{{$v->title}}"><i></i></b></p>
                    </div>
                </div>

                <p class="productPrice">
                    <em title="￥{{$v->promt_price}}"><b>¥</b>{{$v->promt_price}}</em>
                    <del title="市场价 {{$v->orign_price}}">¥{{$v->orign_price}}</del>
                </p>
                <p class="productTitle">
                    <a href="goods-1053982.html" target="_blank" title="{{$v->title}}" >{{$v->title}}</a>
                </p>
                <p class="productStatus">
                    <span><em>{{$v->count}}</em><br>月销量</span>
                    <span class="r"><a href="goods-1053982.html#goods_comments_a" target="_blank" >0</a><br>累计评价</span>   
                </p> 
            </div>
                <p class="productContry">中国</p>
        </div>
               
            @endforeach                         
        @endif


        @if($num == 0)
            @foreach($data as $k => $v)
        <div class="product" >
            <div class="product-iWrap">
                <div class="productImg-wrap">
                        <a href="{{ url('/home/goods/goods') }}/{{ $v->id }}" title="{{$v->title}}" class="productImg" target="_blank"  >
                        <img src="{{ url('/home/imgs/goods') }}/{{ $v->pic }}" alt="{{$v->title}}">
                        </a>    
                </div>

                <div class="productThumb clearfix">
                    <div class="proThumb-wrap">
                        <p class="ks-switchable-content"><b class="proThumb-img "><img  src="{{ url('/home/imgs/goods') }}/{{ $v->pic }}" title="主图" alt="{{$v->title}}"><i></i></b></p>
                    </div>
                </div>

                <p class="productPrice">
                    <em title="￥{{$v->promt_price}}"><b>¥</b>{{$v->promt_price}}</em>
                    <del title="市场价 {{$v->orign_price}}">¥{{$v->orign_price}}</del>
                </p>
                <p class="productTitle">
                    <a href="goods-1053982.html" target="_blank" title="{{$v->title}}" >{{$v->title}}</a>
                </p>
                <p class="productStatus">
                    <span><em>{{$v->count}}</em><br>月销量</span>
                    <span class="r"><a href="goods-1053982.html#goods_comments_a" target="_blank" >0</a><br>累计评价</span>   
                </p> 
            </div>
                <p class="productContry">中国</p>
        </div>
            @endforeach                        
        @endif


        @if($num == 3)
            @foreach($data as $k => $v)
        <div class="product" >
            <div class="product-iWrap">
                <div class="productImg-wrap">
                        <a href="{{ url('/home/goods/goods') }}/{{ $v->id }}" title="{{$v->title}}" class="productImg" target="_blank"  >
                        <img src="{{ url('/home/imgs/goods') }}/{{ $v->pic }}" alt="{{$v->title}}">
                        </a>    
                </div>

                <div class="productThumb clearfix">
                    <div class="proThumb-wrap">
                        <p class="ks-switchable-content"><b class="proThumb-img "><img  src="{{ url('/home/imgs/goods') }}/{{ $v->pic }}" title="主图" alt="{{$v->title}}"><i></i></b></p>
                    </div>
                </div>

                <p class="productPrice">
                    <em title="￥{{$v->promt_price}}"><b>¥</b>{{$v->promt_price}}</em>
                    <del title="市场价 {{$v->orign_price}}">¥{{$v->orign_price}}</del>
                </p>
                <p class="productTitle">
                    <a href="goods-1053982.html" target="_blank" title="{{$v->title}}" >{{$v->title}}</a>
                </p>
                <p class="productStatus">
                    <span><em>{{$v->count}}</em><br>月销量</span>
                    <span class="r"><a href="goods-1053982.html#goods_comments_a" target="_blank" >0</a><br>累计评价</span>   
                </p> 
            </div>
                <p class="productContry">中国</p>
        </div>
            @endforeach                         
        @endif

        <br class="clear" />
    </div>

    @if($num!=3)
    <div class="search_page">

        <a class="page prev" href="{{ $data -> appends($request) -> url(1) }}">首页</a>                 
        <a class="page prev" href="{{ $data -> appends($request) ->previousPageUrl() }}">上一页</a>
      <!-- 白色class去掉next               -->
      <a class="page next" href="{{ $data -> appends($request) ->nextPageUrl() }}">下一页</a>
      <a class="page next" href="{{ $data -> appends($request) ->url($data ->lastPage()) }}">尾页</a> 
      <span>共 {{$data ->lastPage()}} 页</span> 
   </div>
   @else
     <div class="search_page">
        <strong class="current">1</strong>
        <a class="page" href="category-255-b0-min0-max0-attr0-2-add_time-desc.html">2</a>
            
        <a class="page next" href="category-255-b0-min0-max0-attr0-2-add_time-desc.html">下一页</a>    
        <span>共2页 </span>&nbsp; 
   </div>
   @endif

   </div>
    
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