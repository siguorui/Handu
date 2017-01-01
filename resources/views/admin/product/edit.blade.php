@extends('admin.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                商品管理
                <small>编辑</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
                <li><a href="#">商品管理</a></li>
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
                        <form role="form" action="{{ url('/admin/product/update')}}/{{$data->id}}" enctype="multipart/form-data" method="post">
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
                                    <label for="exampleInputEmail1">父分类</label>
                                    <select name="cate_id" class="form-control">
                                        
                                        @foreach($catedata as $v)
                                        <option 
                                        @if($data ->cate_id == $v->id)
                                            selected
                                        @endif
                                        @if($v->num!=2)
                                             disabled
                                        @endif
                                        value="{{$v->id}}">{{$v->title}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">名称</label>
                                    <input type="text" name="title" value="@if(old('title')){{old('title')}}@else{{$data -> title}}@endif" class="form-control" id="exampleInputEmail1"
                                           placeholder="请输入分类名">
                                </div> 

                                <div class="form-group">
                                    <label for="exampleInputEmail1">现价</label>
                                    <input type="text" name="promt_price" value="@if(old('promt_price')){{old('promt_price')}}@else{{$data -> promt_price}}@endif" class="form-control" id="exampleInputEmail1"
                                           placeholder="请输入分类名">
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
                                    <input type="text" name="orign_price" value="@if(old('orign_price')){{old('orign_price')}}@else{{$data -> orign_price}}@endif" class="form-control" id="exampleInputEmail1"
                                           placeholder="请输入分类名">
                                </div>

                                <!-- <div class="form-group">
                                    <label for="exampleInputEmail1">展示位置</label>
                                    <select name="show_pos" class="form-control">
                                        <option value="0">非必选</option>
                                        <option value="1">主页展示</option>
                                        <option value="2">列表页展示</option>
                                    </select>
                                </div> -->
                                <div class="form-group">
                                    <label for="exampleInputFile">商品图片</label>
                                    @if(!empty($data->pic))
                                    <img src = "{{ url('/home/imgs/goods') }}/{{ $data->pic }}" width="150" />
                                    @endif
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
            </div>   <!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection