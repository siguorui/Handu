@extends('admin.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                友情链接
                <small>添加</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
                <li><a href="#">友情链接</a></li>
                <li class="active">添加</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">快速添加</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('/admin/friendlinks/insert')}}" method="post">
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
                                <div class="form-group">
                                    <label for="exampleInputEmail1">站点名</label>
                                    <input type="text" name="link_name" value="{{old('name')}}" class="form-control" id="exampleInputEmail1"
                                           placeholder="请输入站点名">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">网站地址</label>
                                    <input type="text" name="url" value="{{old('name')}}" class="form-control" id="exampleInputEmail1"
                                           placeholder="请输入网站地址">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">服务状态</label>
                                    <select name="status" class="form-control">
                                        <option value="1">开启</option>
                                        <option value="0">关闭</option> 
                                    </select>
                                </div>
                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">添加</button>
                            </div>
                        </form>
                    </div><!-- /.box -->

                </div><!--/.col (right) -->
            </div>   <!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection