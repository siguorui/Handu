@extends('admin.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                用户管理
                <small>编辑</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">用户管理</a></li>
                <li class="active">编辑</li>
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
                            <h3 class="box-title">快速编辑</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('/admin/user/change') }}/{{$data -> id}}" enctype="multipart/form-data" method="POST">
                        	{{ csrf_field() }}

                            <div class="box-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">用户名</label>
                                    <input type="text" name="user_name" value="@if(old('user_name')){{old('user_name')}}@else{{$data -> user_name}}@endif" class="form-control" id="exampleInputEmail1"
                                           placeholder="请输入用户名">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInpuPid">管理员权限</label>
                                    <select style="width: 200px;" name="auth" class="form-control">
                                        @if($data -> auth == 1)
                                        <option selected='selected' value="1">高级管理员</option>
                                        <option value="0">普通管理员</option>
                                        @else
                                        <option selected='selected' value="0">普通管理员</option>
                                        <option value="1">高级管理员</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInpuPid">账号状态</label>
                                    <select name="status" class="form-control" style="width: 200px;">
                                        @if($data -> status == 1)
                                        <option selected='selected' value="1">启用</option>
                                        <option value="0">禁用</option>
                                        @else
                                        <option selected='selected' value="0">禁用</option>
                                        <option value="1">启用</option>
                                        @endif
                                    </select>
                                </div>
                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">修改</button>
                            </div>
                        </form>
                    </div><!-- /.box -->
                </div><!--/.col (left) -->
            </div>   <!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection
