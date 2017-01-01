@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                用户管理
                <small>意见反馈</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">用户管理</a></li>
                <li class="active">意见反馈</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">意见反馈</h3>
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
                                    <th>类别</th>
									<th>标题</th>
                                    <th>内容</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($data))
                               @foreach($data as $d)
                                <tr>
                                
                                    <td>{{$d -> id}}</td>
                                
                                
                               
                                    <td class="cname">{{$d -> email}}</td>
                              
                            
                                  
                                	<td>
                                	@if($d -> fd_type == 0)
                                	商品信息
									@elseif($d -> fd_type == 1)
									下单支付
									@elseif($d -> fd_type == 2)
									会员中心
									@elseif($d -> fd_type == 3)
									登录访问
									@elseif($d -> fd_type == 4)
									客户服务
									@elseif($d -> fd_type == 5)
									其他
									@endif
                                	</td>    
                                    <td>{{$d -> title}}</td>
                              		<td>{{$d -> content}}</td>     
                                    <td style="width: 200px;">
                                    <a href=""onclick="huifu()" >回复 |</a>  <a href="####" onclick="del({{$d ->id}})"> 删除</a></td>
                                   
                                </tr> 
                           
                                 @endforeach
                                 @endif
                                </tfoot>

                            </table>
                            
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <script type="text/javascript">
        
		function del(id)
    	{   
        	$.ajaxSetup({
            	headers: {
                	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           		}
        	});

            $.ajax({
                type:'POST',
                url:"{{url('/admin/user/ajaxdel')}}",
                data:{id:id},
                success:function(data)
                {
                    if(data == 0)
                    {
                    	location.reload();
                    	alert('删除成功');
                    }  
                },
                error:function()
                {
                    alert("异常");
                }
            });
    	}

    	function huifu()
    	{
    		alert('功能完善中... 敬请期待');
    	}
    </script>
@endsection
