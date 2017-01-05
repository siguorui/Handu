@extends('admin.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                分类管理
                <small>编辑</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
                <li><a href="#">分类管理</a></li>
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
                        <form role="form" action="{{ url('/admin/cate/update')}}/{{$dataFirst->id}}" enctype="multipart/form-data" method="post">
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
                                    <select name="pid" class="form-control">
                                        <option value="0">根分类</option>
                                        @foreach($data as $v)
                                        <option 
                                        @if($dataFirst ->pid == $v->id)
                                            selected
                                        @endif
                                        @if($dataFirst -> id == $v->id)
                                             disabled
                                        @endif
                                        value="{{$v->id}}">{{$v->title}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">分类名</label>
                                    <input type="text" name="title" value="{{$dataFirst -> title}}" class="form-control" id="exampleInputEmail1"
                                           placeholder="请输入分类名">
                                </div> 

                                <div class="form-group">
                                    <label for="exampleInputEmail1">展示位置</label>
                                    <select name="show_pos" class="form-control">
                                        <option value="0">非必选</option>
                                        <option value="1">主页展示</option>
                                        <option value="2">列表页展示</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">状态</label>
                                    <select name="status" class="form-control">
                                        <option value="1" 
                                        @if($dataFirst -> status== 1)
                                        selected
                                        @endif>上架</option>
                                        <option value="0" 
                                        @if($dataFirst ->status == 0)
                                        selected
                                        @endif>下架</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">类别logo</label>
                                    @if(!empty($dataFirst->logo))
                                    <img src = "{{ url('/home/imgs/category') }}/{{ $dataFirst->logo }}" width="80"/>
                                    @endif
                                    <input type="file" name="logo" id="exampleInputFile">
                                    <p class="help-block">请选择一张图片</p>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">类副logo</label>
                                    @if(!empty($dataFirst->assit_logo))
                                     <img src = "{{ url('/home/imgs') }}/{{ $dataFirst->assit_logo }}" width="80"/>
                                     @endif
                                    <input type="file" name="assit_logo" id="exampleInputFile">
                                    <p class="help-block">非必选</p>
                                </div>
                                
                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">更新</button>
                            </div>
                        </form>
                    </div><!-- /.box -->

                </div><!--/.col (right) -->
            </div>   <!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection