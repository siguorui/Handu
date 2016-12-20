@extends('admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Tables
                <small>advanced tables</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
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

                        @if(session('info'))
                        <div class="callout callout-info">
                                <p>{{session('info')}}</p>
                        </div>
                        @endif
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                        <form action="{{url('/admin/user/index')}}">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="dataTables_length" id="example1_length">
                                        <!-- 分页展示 -->
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                        <div class="input-group input-group-sm">
                                            <!-- 搜索展示 -->
                                        </div>
                                </div>
                            </div>
                        </form>

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

                            <?php $key_num = 0 ?>
                            @if($num == 2)
                                <tbody>
								@foreach($data as $k => $v)
                                <tr>
                                    <td>{{$key_num += 1}}</td>
                                    <td>{{'HD'.str_pad($v->cate_id,3,"0",STR_PAD_LEFT).str_pad($v->cate_id,6,"0",STR_PAD_LEFT)}}</td>
                                    <td>{{$v->title}}</td>
                                    <td>
                                    {{$v->promt_price."/".$v->orign_price}}
                                    </td>
                                    <td>
                                    {{$v->count}}
                                    </td>
                                    <td><img src = "{{ url('/home/imgs/goods') }}/{{ $v->pic }}" width="30"/></td>
                                    <td>
                                    <a href="{{ url('/admin/goods/index') }}/{{$v -> id}}">商品详情</a>　<a href="{{ url('/admin/goods/edit') }}/{{$v -> id}}/{{$urlid}}">编辑</a>　<a href="{{ url('/admin/goods/delete') }}/{{$v -> id}}/{{$urlid}}">删除</a>
                                    </td>  
                                </tr>
                               @endforeach
                                </tbody>
                            @endif


                            @if($num == 1) 
                                <tbody>
                                @foreach($data as $key => $value)
                                @foreach($value as $k=>$v)
                                <tr>
                                    <td>{{$key_num += 1}}</td>
                                    <td>{{'HD'.str_pad($v->cate_id,3,"0",STR_PAD_LEFT).str_pad($v->cate_id,6,"0",STR_PAD_LEFT)}}</td>
                                    <td>{{$v->title}}</td>
                                    <td>
                                    {{$v->promt_price."/".$v->orign_price}}
                                    </td>
                                    <td>
                                    {{$v->count}}
                                    </td>
                                    <td><img src = "{{ url('/home/imgs/goods') }}/{{ $v->pic }}" width="30"/></td>
                                    <td>
                                    <a href="{{ url('/admin/goods/index') }}/{{$v -> id}}">商品详情</a>　<a href="{{ url('/admin/goods/edit') }}/{{$v -> id}}/{{$urlid}}">编辑</a>　<a href="{{ url('/admin/goods/delete') }}/{{$v -> id}}/{{$urlid}}">删除</a>
                                    </td>  
                                </tr>
                                @endforeach
                               @endforeach
                                </tbody>
                            @endif

                            @if($num == 0) 
                                <tbody>
                                @foreach($data as $k1 => $v1)
                                @foreach($v1 as $key => $value)
                                @foreach($value as $k=>$v)
                                    @if(!empty($v))
                                <tr>
                                    <td>{{$key_num += 1}}</td>
                                    <td>{{'HD'.str_pad($v->cate_id,3,"0",STR_PAD_LEFT).str_pad($v->cate_id,6,"0",STR_PAD_LEFT)}}</td>
                                    <td>{{$v->title}}</td>
                                    <td>
                                    {{$v->promt_price."/".$v->orign_price}}
                                    </td>
                                    <td>
                                    {{$v->count}}
                                    </td>
                                    <td><img src = "{{ url('/home/imgs/goods') }}/{{ $v->pic }}" width="30"/></td>
                                    <td>
                                    <a href="{{ url('/admin/goods/index') }}/{{$v -> id}}">商品详情</a>　<a href="{{ url('/admin/goods/edit') }}/{{$v -> id}}/{{$urlid}}">编辑</a>　<a href="{{ url('/admin/goods/delete') }}/{{$v -> id}}/{{$urlid}}">删除</a>
                                    </td>  
                                </tr>
                                    @endif
                                @endforeach
                               @endforeach
                               @endforeach
                                </tbody>
                            @endif
                            </table>
                            <!-- 分页展示 -->
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

          
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
       </div>

        <script type="text/javascript">
            window.onload = function()
            {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                function dblChangeName(){
                    var td = $(this);
                    var id = $(this).prev().html();
                    var oldName = $(this).html();

                    var inp = $('<input type="text" />');
                    inp.val(oldName);
                    $(this).html(inp);
                    inp.select();

                    inp.on('blur',function(){
                        var newName = inp.val();

                        //失去焦点后重新添加单次单击事件
                        td.one('dblclick',dblChangeName);
                        $.ajax({
                            type:'post',
                            url:"{{ url('/admin/user/ajaxchangename')}}",
                            data:{id:id,name:newName},
                            success:function(data)
                            {
                                if(data == 0)
                                {
                                    alert('用户名已存在');
                                    td.html(oldName);
                                }else if(data == 1)
                                {
                                    td.html(newName);
                                }else 
                                {
                                    td.html(oldName);
                                }
                            },
                            error:function()
                            {
                                alert("异常");
                            },
                            dataType:'json'

                        });
                    });

                }
                $('.cname').one('dblclick',dblChangeName);
            }
        </script>
@endsection