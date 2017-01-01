@extends('admin.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                网站配置管理
                <small>修改</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
                <li><a href="#">网站配置管理</a></li>
                <li class="active">修改</li>
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
                            <h3 class="box-title">网站配置</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{url('/admin/webConfig/update')}}" enctype="multipart/form-data" method="post">
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
                                    <label for="exampleInputEmail1">网站名称</label>
                                    <input type="text" name="web_name" disabled value="{{$data -> web_name}}" class="form-control" id="exampleInputEmail1">
                                </div> 

                                <div class="form-group">
                                    <label for="exampleInputEmail1">网站版权</label>
                                    <input type="text" name="web_copyright" disabled value="{{$data -> web_copyright}}" class="form-control" id="exampleInputEmail1">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">网站logo</label>
                                    <div style="border:1px;width:50px;height:30px;"><img width="335px" height="75px" src="{{$data -> web_logo}}"></div><br/><br/><br/>
                                    <input type="file" name="web_logo" id="exampleInputFile">
                                    <p class="help-block">请选择一张图片</p>
                                    
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">网站维护</label>
                                    <select name="statue" class="form-control">
                                        <option value="1" @if(($data -> statue)==0) selected="selected" @endif>开启</option>
                                        <option value="0" @if(($data -> statue)==0) selected="selected" @endif>关闭</option>
                                        
                                    </select>
                                </div>
                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">修改</button>
                            </div>
                        </form>
                    </div><!-- /.box -->

                </div><!--/.col (right) -->
            </div>   <!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection