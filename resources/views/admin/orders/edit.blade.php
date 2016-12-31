@extends('admin.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                订单管理
                <small>编辑</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">订单管理</a></li>
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
                        <form role="form" action="{{ url('/admin/orders/update') }}/{{$data -> id}}" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInpuPid">交易状态</label>
                                    <select name="order_state" class="form-control" style="width: 200px;">
                                        @if($data -> order_state == 0)
                                        <option value="0">待支付</option>
                                        <option value="1">待发货</option>
                                        <option value="2">已发货</option>
                                        <option value="3">已完成</option>
                                        <option value="4">已取消</option>
                                        @elseif($data -> order_state == 1)
                                        <option value="1">待发货</option>
                                        <option value="0">待支付</option>
                                        <option value="2">已发货</option>
                                        <option value="3">已完成</option>
                                        <option value="4">已取消</option>
                                        @elseif($data -> order_state == 2)
                                        <option value="2">已发货</option>
                                        <option value="1">待发货</option>
                                        <option value="0">待支付</option>
                                        <option value="3">已完成</option>
                                        <option value="4">已取消</option>
                                        @elseif($data -> order_state == 3)
                                        <option value="3">已完成</option>
                                        <option value="2">已发货</option>
                                        <option value="1">待发货</option>
                                        <option value="0">待支付</option>
                                        <option value="4">已取消</option>
                                        @else($data -> order_state == 4)
                                        <option value="4">已取消</option>
                                        <option value="3">已完成</option>
                                        <option value="2">已发货</option>
                                        <option value="1">待发货</option>
                                        <option value="0">待支付</option>
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
