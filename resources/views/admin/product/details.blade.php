@extends('admin.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                商品管理
                <small>查看</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">商品管理</a></li>
                <li class="active">查看</li>
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
                            <h3 class="box-title">库存列表</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>                       
                                    <th>颜色</th>
                                    <th>大小</th>
                                    <th>库存</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <?php $n1 = 0 ?>
                                <tbody>
                                 @foreach($stock as $v)
                                <tr>
                                    <td>{{$n1+=1}}</td>
                                    <td>{{$v -> color}}</td>
                                    <td>{{$v -> size}}</td>              
                                    <td>{{$v -> stock_num}}</td>
                                    <td><a href="{{ url('/admin/stock/stockedit') }}/{{$v -> id}}">编辑</a> | <a href="{{ url('/admin/stock/stockdelete') }}/{{$v -> id}}">删除</a></td> 
                                </tr> 
                                 @endforeach
                                 <tr>
                                    <td>总计</td> 
                                    <td></td> 
                                    <td></td> 
                                    <td>{{$total}}</td> 
                                    <td></td> 
                                 </tr>
                                </tbody>
                            </table>

                            <div class="box-header with-border">
                                <h3 class="box-title">评价列表</h3>
                             </div>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>                       
                                    <th>评论用户</th>
                                    <th>评论内容</th>
                                    <th>评论时间</th>
                                </tr>
                                </thead>
                                <?php $n2 = 0 ?>
                                <tbody>
                                 @foreach($comment as $v)
                                <tr>
                                    <td>{{$n2+=1}}</td>
                                    <td>{{$v -> email}}</td>
                                    <td>{!!$v -> content!!}</td>              
                                    <td>{{$v -> comment_time}}</td> 
                                </tr> 
                                 @endforeach
                                </tbody>
                            </table>
                            <div class="box-footer">
                                <a href="{{url('/admin/product/index')}}"><b>返回上一级</b></a>
                            </div>
                           
                            </div><!-- /.box-body -->
                            
                            
                    </div><!-- /.box -->
                </div><!--/.col (left) -->
            </div>   <!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection
