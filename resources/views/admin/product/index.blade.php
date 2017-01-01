@extends('admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                商品管理
                <small>advanced tables</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
                <li><a href="#">商品管理</a></li>
                <li class="active"></li> 
            </ol>
        </section>
	 <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <a href="{{url('admin/product/add')}}"><h3 class="box-title">快速添加</h3></a>
                        </div><!-- /.box-header -->

                        <div class="box-body">
                        @if(session('info'))
                        <div class="callout callout-info">
                                <p>{{session('info')}}</p>
                        </div>
                        @endif
        
                                        <!-- 分页展示 --> 
                        <form action="{{url('admin/product/index')}}">
                        <div class="row"><div class="col-sm-8"><div class="dataTables_length" id="example1_length"><label><select name="pageNum" aria-controls="example1" class="form-control input-sm">
                        <option @if(!empty($request['pageNum']) && $request['pageNum'] ==10) selected="selected" @endif value="10">10</option>
                        <option @if(!empty($request['pageNum']) && $request['pageNum'] ==25) selected="selected" @endif value="25">25</option>
                        <option @if(!empty($request['pageNum']) && $request['pageNum'] ==50) selected="selected" @endif value="50">50</option>
                        <option @if(!empty($request['pageNum']) && $request['pageNum'] ==100) selected="selected" @endif value="100">100</option>
                        </select> </label></div></div><div class="col-sm-4"><div id="example1_filter" class="dataTables_filter"><label><div class="input-group input-group-sm">
                                <input name="keyword" type="text" class="form-control" value="{{$request['keyword'] or ''}}">
                        <span class="input-group-btn">
                          <button class="btn btn-info btn-flat" type="submit">Go!</button>
                        </span>
                            </div></label></div></div></div>
                        </form>

                        <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>序号</th>
                                    <th>商品货号</th>
                                    <th>名称</th>
                                    <th>现价/原价(￥)</th>
                                    <th>销量</th>
                                    <th>商品图片</th>
                                    <th>操作</th>
                                </tr>
                                </thead>

                            @if(!empty($request['pageNum']))
                                <?php $key_num = ($data->currentPage() -1)* $request['pageNum'] ?>
                            @else
                                <?php $key_num = ($data->currentPage() -1)*10  ?>
                            @endif

                                <tbody>
								@foreach($data as $k => $v)
                                <tr>
                                    <td>{{$key_num += 1}}</td>
                                    <td>{{'HD'.str_pad($v->cate_id,3,"0",STR_PAD_LEFT).str_pad($v->id,6,"0",STR_PAD_LEFT)}}</td>
                                    <td>{{$v->title}}</td>
                                    <td>
                                    {{$v->promt_price."/".$v->orign_price}}
                                    </td>
                                    <td>
                                    {{$v->count}}
                                    </td>
                                    <td><img class='img' src = "{{ url('/home/imgs/goods') }}/{{ $v->pic }}" width="30"/>
                                    </td>
                                    <td>
                                    <a href="{{ url('/admin/goods/index') }}/{{$v -> id}}">商品详情</a> | <a href="{{ url('/admin/product/edit') }}/{{$v -> id}}">编辑</a> | <a href="{{ url('/admin/product/delete') }}/{{$v -> id}}">删除</a> | <a class="stock" goods_id={{$v->id}} href="#">库存添加</a>
                                    </td>  
                                </tr>

                               @endforeach
                                </tbody>

                            </table>
                            <!-- 分页展示 -->
                            {{ $data -> appends($request) -> links() }}
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->      

                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
       </div>
        <div class="myshow" style="display: none;position: absolute;z-index: 9999">
                    <img src = ""/>
        </div>

        <div class="example-modal">
<div class="modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">库存添加</h4>
      </div>

      <div class="modal-body">
                   
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <a href="{{ url('/admin/product/index') }}"><h3 class="box-title">查看商品列表</h3></a>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" enctype="multipart/form-data" method="post">
                            {{ csrf_field() }}
                            
                            <div class="box-body">
                                @if (count($errors) > 0)
                                <div class="callout callout-info">
                                    <h4>警告！</h4>
                                    
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                   
                                </div>
                                @endif

                                 @if(session('info'))
                                    <div class="callout callout-info">
                                            <p>{{session('info')}}</p>
                                    </div>
                                 @endif

                                
                                <div class="form-group color">
                                    <label for="exampleInputEmail1">颜色</label>
                                    <select name="color" class="form-control">
                                        <option>灰色</option>
                                        <option>浅蓝色</option>
                                        <option>黑色</option>
                                        <option>粉色</option>
                                        <option>酒红色</option>
                                        <option value='1'>自定义</option>
                                    </select>
                                </div>
                                <input name='color' type='hidden' value="" style="display: none;" />
                                
                                
                                <div class="form-group size">
                                    <label for="exampleInputEmail1">大小</label>
                                    <select name="size" class="form-control">
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                        <option>XS</option>
                                        <option value='1'>自定义</option>
                                    </select>
                                </div>
                                <input name='size' type='hidden' value="" style="display: none;" />
                               
                                <div class="form-group">
                                    <label for="exampleInputEmail1">库存</label>
                                    <input type="text" name="stock_num" value="{{old('orign_price')}}" class="form-control" id="exampleInputEmail1"
                                           placeholder="请输入商品库存">
                                </div>
                          </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!--/.col (right) -->
            </div>   <!-- /.row -->
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">退出</button>
        <button type="reset" class="btn btn-default pull-left" data-dismiss="modal">重置</button>
        <button type="button" class="btn btn-primary">添加</button>
      </div>
       </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

        <script type="text/javascript">
            window.onload = function()
            {
                $('.img').mouseover(function(){
                    var dl = $(this).offset().left-300;
                    var dt = $(this).offset().top;
                    var src = $(this).attr('src');
                    $('.myshow img').attr('src',src);
                    $('.myshow').css({left:dl,top:dt,display:"block"});
                }); 

                $('.img').mouseout(function(){
                    $('.myshow').css({display:"none"});
                });

                 var org_color = $('.color select');
                 var org_size = $('.size select');
                 $("input[name='color'][type='hidden']").val($("select[name='color']").val());
                 $("input[name='size'][type='hidden']").val($("select[name='size']").val());

                 $('.stock').click(function(){
                    $('.modal').css('display','block');
                    goods_id = $(this).attr('goods_id');
                });

                $('.modal-footer button').eq(0).click(function(){
                    $('.modal').css('display','none');
                });

                //重置按钮
                $('.modal-footer button').eq(1).click(function(){
                    if($('.color select').length==0){
                        $("input[name='color'][type='text']").remove();
                        $('.color').append(org_color);

                    }

                    if($('.size select').length==0){
                        $("input[name='size'][type='text']").remove();
                        $('.size').append(org_size);

                    }

                    $("input[name='color'][type='hidden']").val($("select[name='color']").find('option').eq(0).html());
                    $("input[name='size'][type='hidden']").val($("select[name='size']").find('option').eq(0).html());

                });

                $('.close').click(function(){
                    $('.modal').css('display','none');
                });


                $(".color").delegate("select",'change',function(){
                    var col_val = $("select[name='color']").val();
                   
                    if(col_val == 1)
                    {
                        $("select[name='color']").replaceWith("<input type='text' name='color' class='form-control' id='exampleInputEmail1' placeholder='请输入商品颜色'/>");
                    }else {
                        $("input[name='color'][type='hidden']").val(col_val);
                    }
                });

                $(".size").delegate("select",'change',function(){
                    var col_val = $("select[name='size']").val();
                   
                    if(col_val == 1)
                    {
                        $("select[name='size']").replaceWith("<input type='text' name='size' class='form-control' id='exampleInputEmail1' placeholder='请输入商品大小'/>");
                    }else {
                        $("input[name='size'][type='hidden']").val(col_val);
                    }
                });

                 $('.modal-footer button').eq(2).click(function(){
                     $.ajaxSetup({
                          headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          }
                    });
                    var color = $("input[name='color']").val();
                    var size =  $("input[name='size']").val();
                    var stock_num = $("input[name='stock_num']").val();
    
                    if(color==''){
                        alert('颜色不能为空');
                        return false;
                    }

                    if(size==''){
                        alert('尺寸不能为空');
                        return false;
                    }

                    if(size==''){
                        alert('库存不能为空');
                        return false;
                    }
                    
                     $.ajax({
                        type:'POST',
                        url:"{{ url('/admin/product/addStock')}}",
                        data:{id:goods_id,color:color,size:size,stock_num:stock_num},
                        success:function(data)
                        { 
                           if(data==0)
                           {
                             alert('添加成功');
                             return false;
                           }else 
                           {
                             alert('添加失败');
                             return false;
                           }
                        },
                        error:function()
                        {
                            alert("异常");
                        },
              
                    });
                });

            } 
        </script>
@endsection