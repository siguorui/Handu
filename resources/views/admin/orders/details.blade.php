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
                            @foreach($data as $v)
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>订单编号</th>                       
                                    <th>下单时间</th>
                                    <th>商品名</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$v -> order_num}}</td>
                                    <td>{{$v -> order_time}}</td>              
                                    <td>{{$v -> title}}</td> 
                                </tr> 
                                <tr>
                                    <th>收件人</th>
                                    <th>联系方式</th>
                                    <th>地址</th>
                                </tr>
                                <tr>
                                    <td>{{$v -> to_name}}</td>
                                    <td>{{$v -> phone}}</td>
                                    <td>{{$v -> addr_deta}}</td>
                                </tr>
                                <tr>
                                    <th>商品颜色</th>
                                    <th>商品尺码</th>
                                    <th>购买数量</th>
                                    
                                </tr>
                                <tr>
                                    <td>{{$v -> color}}</td>
                                    <td>{{$v -> size}}</td>
                                    <td>{{$v -> num}} (件)</td>
                                    
                                </tr>
                                <tr>
                                    <th>支付方式</th>
                                    <th>配送方式</th>
                                    <th>是否为退换货</th>
                                </tr>
                                <tr>
                                    <td>{{$v -> pay}}</td>
                                    <td>{{$v -> deliver}}</td>
                                    <td>@if($v -> order_type == 0)正常
                                    @elseif($v -> order_type == 1)换货
                                    @else退货@endif</td>
                                </tr>
                                <tr>
                                    <th>用户名</th>
                                    <th>订单留言</th>
                                    <th>交易状态</th>
                                </tr>
                                <tr>
                                    <td>{{$v -> email}}</td>
                                    <td>{{$v -> message}}</td>
                                    <td>@if($v -> order_state == 0)待支付
                                    @elseif($v -> order_state == 1)待发货
                                    @elseif($v -> order_state == 2)已发货
                                    @elseif($v -> order_state == 3)已完成
                                    @else已取消@endif</td>

                                </tr> 
                                
                            </table>
                            <div class="box-footer">
                                <a href="{{url('/admin/orders/index')}}"><b>返回上一页</b></a>
                            </div>
                            @endforeach
                            </div><!-- /.box-body -->
                            
                            
                    </div><!-- /.box -->
                </div><!--/.col (left) -->
            </div>   <!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection
