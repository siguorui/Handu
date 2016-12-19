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
                        <form role="form" action="{{ url('/admin/user/usersupdate') }}/{{$res -> uid}}" enctype="multipart/form-data" method="POST">
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
                                    <label for="exampleInputEmail1">用户名</label>
                                    <input style="width: 300px;" type="text" name="email" value="@if(old('email')){{old('email')}}@else{{$data -> email}}@endif" class="form-control" id="exampleInputEmail1"placeholder="请输入用户名">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInpuPid">会员类型</label>
                                    <select style="width: 200px;" name="vip" class="form-control">
                                        @if($res -> vip == 1)
                                        <option selected='selected' value="1">VIP</option>
                                        <option value="0">普通</option>
                                        @else
                                        <option selected='selected' value="0">普通</option>
                                        <option value="1">VIP</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInpuPid">激活状态</label>
                                    <select style="width: 200px;" name="status" class="form-control">
                                        @if($data -> status == 1)
                                        <option selected="selected" value="1">激活</option>
                                        <option value="0">未激活</option>
                                        @else
                                        <option selected="selected" value="0">未激活</option>
                                        <option value="1">激活</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInpuPid">积分</label>
                                    <input type="text" style="width: 200px;" name="score" value="{{$res -> score}}" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInpuPid">经验值</label>
                                    <input type="text" style="width: 200px;" name="expr_val" value="{{$res -> expr_val}}" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInpuPid">优惠券</label>
                                    <input type="text" style="width: 200px;" name="coupon" value="{{$res -> coupon}}" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInpuPid">包邮卡</label>
                                    <input type="text" style="width: 200px;" name="send_card" value="{{$res -> send_card}}" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInpuPid">护理液兑换码</label>
                                    <input type="text" style="width: 200px;" name="excge_code" value="{{$res -> excge_code}}" class="form-control" id="exampleInputEmail1" placeholder="">
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
