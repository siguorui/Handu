@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                用户管理
                <small>列表</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">用户管理</a></li>
                <li class="active">列表</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">用户列表</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                        @if(session('info'))
                            <div class="callout callout-danger">
                            <p>{{session('info')}}</p>
                            </div>
                        @endif
                                    

						<form action="{{url('admin/user/index')}}">
                        <div class="row"><div class="col-sm-8"><div class="dataTables_length" id="example1_length"><label><select name="num" aria-controls="example1" class="form-control input-sm">
                        <option @if(!empty($request['num']) && $request['num'] ==10) selected="selected" @endif value="10">10</option>
                        <option @if(!empty($request['num']) && $request['num'] ==25) selected="selected" @endif value="25">25</option>
                        <option @if(!empty($request['num']) && $request['num'] ==50) selected="selected" @endif value="50">50</option>
                        <option @if(!empty($request['num']) && $request['num'] ==100) selected="selected" @endif value="100">100</option>
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
                                    <th>ID</th>
                                    <th>用户名</th>
                                    <th>权限</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $v)
                                <tr>
                                    <td>{{$v -> id}}</td>
                                    <td class="cname">{{$v -> user_name}}</td>
                                    <td>@if($v -> auth == 0)
                                            普通管理员
                                        @else
                                            <span class="text-red">高级管理员</span>
                                        @endif
                                    </td>
                                    <td>@if($v -> status == 1)
                                            启用
                                        @else
                                            <span class="text-red">禁用</span>
                                        @endif</td>
                                    <td style="width: 200px;"><a href="{{url('admin/user/edit')}}/{{$v -> id}}">修改用户 |</a> <a href="{{url('admin/user/auth')}}/{{$v -> id}}"> 管理权限 |</a> <a href="{{url('admin/user/delete')}}/{{$v -> id}}"> 删除</a></td>
                                </tr> 
                                @endforeach
                                </tfoot>

                            </table>
                            {{ $data -> appends($request) -> links() }}
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
     <script type="text/javascript">
        
    window.onload = function()
    {   
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function dblChangeName()
        {
            var td = $(this);
            var id = $(this).prev().html();
            var oldName = $(this).html();
            var inp = $('<input type="text" />');

            inp.val(oldName);
            $(this).html(inp);
            inp.select();

            inp.on('blur', function()
            {

                var newName =inp.val();

                td.one('dblclick', dblChangeName)

                $.ajax({
                    type:'POST',
                    url:"{{url('/admin/user/ajaxchangename')}}",
                    data:{id:id,user_name:newName},
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
                    }

                });
            })


        }
        $(".cname").one('dblclick', dblChangeName);
    }



    </script>
@endsection
