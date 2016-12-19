@extends('admin.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                用户管理
                <small>添加</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">用户管理</a></li>
                <li class="active">添加</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">快速添加</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('/admin/user/insert') }}" enctype="multipart/form-data" method="POST">
                        	{{ csrf_field() }}

                            <div class="box-body">
	                            @if($errors->any())
									<div class="callout callout-danger">
				                    <h4>警告！</h4>
				                    @foreach($errors->all() as $error)
				                    <p>{{ $error }}</p>
				                    @endforeach
				                  	</div>
								@endif
                                @if(session('info'))
                                    <div class="callout callout-danger">
                                    <p>{{session('info')}}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="exampleInputEmail1">用户名</label>
                                    <input type="text" name="user_name" value="{{old('name')}}" class="form-control" id="exampleInputEmail1"
                                           placeholder="请输入用户名">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">密码</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                           placeholder="请输入密码">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">确认密码</label>
                                    <input type="password" name="repassword" class="form-control" id="exampleInputPassword1"
                                           placeholder="请确认密码">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInpuPid">管理员权限</label>
                                    <select name="auth" class="form-control">
                                        <option value="0">普通管理员</option>
                                        <option value="1">超级管理员</option>
                                    </select>
                                </div>
                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">添加</button>
                            </div>
                        </form>
                    </div><!-- /.box -->
                </div><!--/.col (left) -->
            </div>   <!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection
