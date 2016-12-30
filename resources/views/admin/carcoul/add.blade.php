@extends('admin.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                主题添加
                <small>编辑</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">主题添加</a></li>
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
                        <form role="form" action="{{ url('/admin/carcoul/insert') }}" enctype="multipart/form-data" method="POST">
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

                                <div class="form-group">
                                    <label for="exampleInputEmail1">标题</label>
                                    <input type="text" name="title" value="" class="form-control" id="exampleInputEmail1"
                                           placeholder="请输入标题">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputFile">个人头像</label>
                                    <img src="" width="200" />
                                </div>
                                <div class="form-group">
                                    <input type="file" name="pic" id="exampleInputFile">
                                    <p class="help-block">请选择您的照片</p>
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
