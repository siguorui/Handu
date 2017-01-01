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
                            <h3 class="box-title">Hover Data Table</h3>
                        </div><!-- /.box-header -->

                        <div class="box-body">
                        @if(session('info'))
                        <div class="callout callout-info">
                                <p>{{session('info')}}</p>
                        </div>
                        @endif                       
                   
                                        <!-- 分页展示 --> 
                    <form action="{{url('admin/goods/index')}}/{{$urlid}}">
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
                                    <td><img class='img' src = "{{ url('/home/imgs/goods') }}/{{ $v->pic }}" width="30"/></td>
                                    <td>
                                    <a href="{{ url('/admin/goods/index') }}/{{$v -> id}}">商品详情</a> | <a href="{{ url('/admin/goods/edit') }}/{{$v -> id}}/{{$urlid}}">编辑</a> | <a href="{{ url('/admin/goods/delete') }}/{{$v -> id}}/{{$urlid}}">删除</a>
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
            } 
        </script>
@endsection