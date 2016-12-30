@extends('admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                分类管理
                <small>advanced tables</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">分类管理</a></li>
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
                                    <th>ID</th>
                                    <th>分类树</th>
                                    <th>分类名称</th>
                                    <th>状态</th>
                                    <th>类别logo</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
								@foreach($data as $v)
                                <tr>
                                    <td>{{$v->id}}</td>
                                    <td class="cname">@if($v->num == 0)
                                                <img src = "{{ url('/admin/imgs/dirfirst.gif') }}"/>
                                            @else
                                                @for($i=1;$i<=$v->num;$i++)
                                                <img src = "{{ url('/admin/imgs/dirsecond.gif') }}"/>
                                                @endfor
                                            @endif
                                    </td>
                                    <td class="cname">{{$v->title}}</td>
                                    <td class="cname">
                                    @if($v->status == 1)
                                    上架
                                    @else
                                    下架
                                    @endif
                                    </td>
                                    <td><img src = "{{ url('/home/imgs/category') }}/{{ $v->logo }}" width="30"/></td>
                                    <td>
                                    @if($v->num == 0||$v->num == 1)
                                    <a href="{{ url('/admin/goods/index') }}/{{$v -> id}}">查看商品</a>　<a href="{{ url('/admin/cate/edit') }}/{{$v -> id}}">编辑</a>　<a href="{{ url('/admin/cate/delete') }}/{{$v -> id}}">删除</a>
                                    @else
                                    <a href="{{ url('/admin/goods/index') }}/{{$v -> id}}">查看商品</a>　<a href="{{ url('/admin/goods/add') }}/{{$v -> id}}">添加商品</a>　<a href="{{ url('/admin/cate/edit') }}/{{$v -> id}}">编辑</a>　<a href="{{ url('/admin/cate/delete') }}/{{$v -> id}}">删除</a>
                                    </td>
                                    @endif
                                </tr>
                               @endforeach
                                </tbody>
                                
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