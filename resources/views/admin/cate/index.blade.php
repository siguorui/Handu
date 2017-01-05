@extends('admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                分类管理
                <small>分类列表</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">分类管理</a></li>
                <li class="active"></li> 
            </ol>
        </section>
	 <!-- Main content -->
        <section class="content">
            <div class="row" id="backhome">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <a href="{{url('admin/cate/add')}}"><h3 class="box-title">快速添加</h3></a>
                        </div><!-- /.box-header -->

                        @if(session('info'))
                        <div class="callout callout-info">
                                <p>{{session('info')}}</p>
                        </div>
                        @endif
                        <div class="box-body">

                            <div class="col-sm-12"><div class="dataTables_length" id="example1_length"><label>
                            <select name="category" aria-controls="example1" class="form-control input-sm" style="width:200px">
                            @foreach($pdata as $value)
                            <option value="{{$value->id}}">{{$value->title}}</option>
                            @endforeach
                        </select> </label></div></div>

                            <table id="example2" class="table table-bordered table-hover">
                        <form action="{{url('/admin/user/index')}}">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="dataTables_length" id="example1_length">
                                        <!-- 分页展示 -->
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                        <div class="input-group input-group-sm">
                                            <!-- 搜索展示 -->
                                        </div>
                                </div>
                            </div>
                        </form>

                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>分类树</th>
                                    <th>分类名称</th>
                                    <th>状态</th>
                                    <th>类别logo</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                
                                    <?php $key_num = 0 ?>

                                <tbody>
								@foreach($data as $v)
                                <tr>
                                    <td id="{{$v->id}}">{{$key_num += 1}}</td>
                                    <td class="cname">@if($v->num == 0)
                                                <img src = "{{ url('/admin/imgs/dirfirst.gif') }}"/>
                                            @elseif($v->num == 1)
                                               
                                                <img src = "{{ url('/admin/imgs/dirsecond.gif') }}"/>
                                            @else
                                                <img src = "{{ url('/admin/imgs/dirthird.gif') }}"/> 
                                            @endif
                                    </td>
                                    <td class="cname">{{$v->title}}</td>
                                    <td class="cname">
                                    @if($v->status == 1)
                                    上架
                                    @else
                                    下架
                                    @endif
                                    </td>
                                    
                                    <td>
                                    @if($v->assit_logo)
                                    <img src = "{{ url('/home/imgs') }}/{{ $v->assit_logo }}" width="30"/>
                                    @endif
                                    </td>
                                    <td>
                                    @if($v->num == 0||$v->num == 1)
                                    <a href="{{ url('/admin/goods/index') }}/{{$v -> id}}">查看商品</a> | <a href="{{ url('/admin/cate/edit') }}/{{$v -> id}}">编辑</a> | <a href="{{ url('/admin/cate/delete') }}/{{$v -> id}}">删除</a>
                                    @else
                                    <a href="{{ url('/admin/goods/index') }}/{{$v -> id}}">查看商品</a> | <a href="{{ url('/admin/goods/add') }}/{{$v -> id}}">添加商品</a> | <a href="{{ url('/admin/cate/edit') }}/{{$v -> id}}">编辑</a> | <a href="{{ url('/admin/cate/delete') }}/{{$v -> id}}">删除</a>
                                    </td>
                                    @endif
                                </tr>
                               @endforeach
                                </tbody>
                                
                            </table>
                            <!-- 分页展示 -->
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

          
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
       </div>

        <script type="text/javascript">
            window.onload = function()
            {
                $("select[name='category']").change(function(){
                    var cate = '#'+$(this).val();
                    $("html,body").animate({scrollTop:$(cate).offset().top},1000);
                });

                $('.box-body').dblclick(function(){
                    var cate = '#backhome';
                    $("html,body").animate({scrollTop:$(cate).offset().top},1000);
                });
            }
        </script>
@endsection