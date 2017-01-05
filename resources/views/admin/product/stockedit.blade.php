@extends('admin.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                库存管理
                <small>编辑</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
                <li><a href="#">库存管理</a></li>
                <li class="active">编辑</li>
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
                            <h3 class="box-title">快速编辑</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('/admin/stock/stockupdate')}}/{{$data->id}}" enctype="multipart/form-data" method="post">
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


                                 <div class="form-group color">
                                    <label for="exampleInputEmail1">颜色</label>
                                    <input type="text" name="color" value="@if(old('color')){{old('color')}}@else{{$data -> color}}@endif" class="form-control" id="exampleInputEmail1"
                                           placeholder="请输入商品颜色">
                                </div>
                               
                                
                                
                                <div class="form-group size">
                                    <label for="exampleInputEmail1">大小</label>
                                    <input type="text" name="size" value="@if(old('size')){{old('size')}}@else{{$data -> size}}@endif" class="form-control" id="exampleInputEmail1"
                                           placeholder="请输入商品尺码">
                                </div>
                               
                               
                                <div class="form-group">
                                    <label for="exampleInputEmail1">库存</label>
                                    <input type="text" name="stock_num" value="@if(old('stock_num')){{old('stock_num')}}@else{{$data -> stock_num}}@endif" class="form-control" id="exampleInputEmail1"
                                           placeholder="请输入商品库存">
                                </div>
                                
                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>
                        </form>
                    </div><!-- /.box -->

                </div><!--/.col (right) -->
            </div>   <!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection