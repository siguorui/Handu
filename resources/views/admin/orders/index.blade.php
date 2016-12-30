@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                订单管理
                <small>列表</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">订单管理</a></li>
                <li class="active">列表</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">订单列表</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                        @if(session('info'))
                            <div class="callout callout-danger">
                            <p>{{session('info')}}</p>
                            </div>
                        @endif
                                    

						<form action="{{url('admin/orders/index')}}">
                        <div class="row"><div class="col-sm-8"><div class="dataTables_length" id="example1_length"><label><select name="num" aria-controls="example1" class="form-control input-sm">
                        <option @if(!empty($request['num']) && $request['num'] ==10) selected="selected" @endif value="10">10</option>
                        <option @if(!empty($request['num']) && $request['num'] ==25) selected="selected" @endif value="25">25</option>
                        <option @if(!empty($request['num']) && $request['num'] ==50) selected="selected" @endif value="50">50</option>
                        <option @if(!empty($request['num']) && $request['num'] ==100) selected="selected" @endif value="100">100</option>
                        </select> </label></div></div><div class="col-sm-4"><div id="example1_filter" class="dataTables_filter"><label><div class="input-group input-group-sm">
                                <input name="keyword" type="text" class="form-control" value="{{$request['keyword'] or ''}}">
	                    <span class="input-group-btn">
	                      <button class="btn btn-info btn-flat" type="submit">Go!</button>
	                    </span>
                            </div></label></div></div></div>
						</form>

                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>订单编号</th>
                                    <th>商品名</th>
                                    <th>尺码&颜色</th>
                                    <th>数量</th>
                                    <th>下单时间</th>
                                    <th>是否为退换货</th>
                                    <th>交易状态</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $v)
                                <tr>
                                    <td>{{$v -> order_num}}</td>
                                    <td style="width:300px;">{{$v -> title}}</td>
                                    <td>{{$v -> size}}{{$v -> color}}</td>
                                    <td>{{$v -> num}}</td>
                                    <td>{{$v -> order_time}}</td>
                                    <td>@if($v -> order_type == 0)正常 @elseif($v -> order_type == 1)换货@else退货@endif</td>  
                                    <td style="color:red;">@if($v -> order_state == 0)待支付@elseif($v -> order_state == 1)待发货@elseif($v -> order_state == 2)已发货@elseif($v -> order_state == 3)已完成
                                    @else已取消@endif</td>
                                    <td><a href="{{url('admin/orders/details')}}/{{$v -> id}}">查看详情 |</a><a href="{{url('admin/orders/edit')}}/{{$v -> id}}"> 修改状态</a></td>  
                                </tr> 
                                @endforeach
                                </tfoot>

                            </table>
                            
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    
@endsection
