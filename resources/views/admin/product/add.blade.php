@extends('admin.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                商品管理
                <small>商品添加</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
                <li><a href="#">商品管理</a></li>
                <li class="active">商品添加</li>
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
                            <a href="{{ url('/admin/product/index') }}"><h3 class="box-title">查看商品列表</h3></a>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('/admin/product/insert')}}" enctype="multipart/form-data" method="post">
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

                                 @if(session('info'))
                                    <div class="callout callout-info">
                                            <p>{{session('info')}}</p>
                                    </div>
                                 @endif

                                <div class="form-group">
                                    <label for="exampleInputEmail1">父分类</label>
                                    <select name="cate_id" class="form-control">
                                        
                                        @foreach($catedata as $v)
                                        <option 
                                        
                                        @if($v->num!=2)
                                             disabled
                                        @endif
                                        value="{{$v->id}}">{{$v->title}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">名称</label>
                                    <input type="text" name="title" value="{{old('title')}}" class="form-control" id="exampleInputEmail1"
                                           placeholder="请输入商品名称">
                                </div> 

                                <div class="form-group">
                                    <label for="exampleInputEmail1">现价</label>
                                    <input type="text" name="promt_price" value="{{old('promt_price')}}" class="form-control" id="exampleInputEmail1"
                                           placeholder="请输入商品现价">
                                </div>

                                <div class="radio">
                                        <label>
                                            <input name="type" id="optionsRadios1" value="1" checked="" type="radio">
                                            按折扣
                                        </label>
                                        <label>
                                            <input name="type" id="optionsRadios1" value="0" checked="checked" type="radio">
                                            按价格
                                        </label>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">原价</label>
                                    <input type="text" name="orign_price" value="{{old('orign_price')}}" class="form-control" id="exampleInputEmail1"
                                           placeholder="请输入商品原价">
                                </div>
   
                                <div class="form-group">
                                    <label for="exampleInputFile">商品图片</label>
                                    <input type="file" name="pic" id="exampleInputFile">
                                    <p class="help-block">请选择一张图片</p>
                                </div>

                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>
                        </form>
                    </div><!-- /.box -->

                </div><!--/.col (right) -->
            </div> 
</section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection