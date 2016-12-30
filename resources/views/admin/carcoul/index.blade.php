@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                主题列表
                <small>列表</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">主题列表</a></li>
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

                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>标题</th>
                                    <th>图片</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $v)
                                <tr>
                                    <td>{{$v -> id}}</td>
                                    <td>{{$v -> title}}</td>
                                    <td><img src="/uploads/imgs/{{$v -> pic}}" height="30px;"></td>
                                    <td><a href="{{url('/admin/carcoul/delete')}}/{{$v -> id}}">删除</a></td>  
                                </tr> 
                                @endforeach
                                </tfoot>

                            </table>
                            
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
