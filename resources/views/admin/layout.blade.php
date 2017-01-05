<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name')}}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->

    <link rel="stylesheet" href="{{ asset('/ad/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/ad/bootstrap/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('/ad/bootstrap/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/ad/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('/ad/dist/css/skins/_all-skins.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('/ad/plugins/iCheck/flat/blue.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('/ad/plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('/ad/plugins/datatables/dataTables.bootstrap.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('/ad/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('/ad/plugins/datepicker/datepicker3.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('/ad/plugins/daterangepicker/daterangepicker-bs3.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('/ad/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/home/css/talk.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <script src="{{ asset('/ad/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script>
    <script src="{{ asset('/ad/https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>

    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->

            <span class="logo-mini"><b>H</b>DYS</span>

            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>{{config('app.name')}}</b>1.0</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" onclick="Chat()" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> Very long description here that
                                            may not fit into the page and may cause design problems
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i> 5 new members joined
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> You changed your username
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Create a nice theme
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-green" style="width: 40%"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Some task I need to do
                                                <small class="pull-right">60%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-red" style="width: 60%"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Make beautiful transitions
                                                <small class="pull-right">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ url('/ad/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                            <span class="hidden-xs">
                            @if(session('adminmaster'))
                                {{session('adminmaster') -> user_name}}
                            @else
                                请登录
                            @endif
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ url('/ad/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                                <p>

                                       @if(session('adminmaster'))
                                        {{session('adminmaster') -> user_name}}
                                        @else
                                            请登录
                                        @endif - PHP工程师

                                    <small>Member since Nov. 2017</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <a href="#">欢迎你!</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">亲爱的</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">大管家</a>
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    (*^__^*)(*^__^*)
                                </div>
                                <div class="pull-right">

                                    <a href="{{url('/admin/logout')}}" class="btn btn-default btn-flat">退出</a>

                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ url('/ad/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>@if(session('adminmaster'))
                                        {{session('adminmaster') -> user_name}}
                                        @else
                                            请登录
                                        @endif</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                        class="fa fa-search"></i></button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active treeview">
                    <a href="#">

                        <i class="fa fa-dashboard"></i> <span>用户管理</span> <i
                            class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{ url('/admin/user/add') }}"><i class="fa fa-circle-o"></i> 用户添加 </a></li>
                        <li><a href="{{ url('/admin/user/index') }}"><i class="fa fa-circle-o"></i> 后台列表 </a></li>
                        <li><a href="{{ url('/admin/user/users') }}"><i class="fa fa-circle-o"></i> 前台列表 </a></li>
                        <li><a href="{{ url('/admin/user/idea') }}"><i class="fa fa-circle-o"></i> 意见反馈 </a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>分类管理</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('/admin/cate/add') }}"><i class="fa fa-circle-o"></i>添加分类</a></li>
                        <li><a href="{{ url('/admin/cate/index') }}"><i class="fa fa-circle-o"></i>分类列表</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>

                        <span> 商品管理</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('/admin/product/add')}}"><i class="fa fa-circle-o"></i> 商品添加</a></li>
                        <li><a href="{{url('/admin/product/index')}}"><i class="fa fa-circle-o"></i> 商品列表</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>

                        <span> 订单管理</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('/admin/orders/index')}}"><i class="fa fa-circle-o"></i> 订单处理</a></li>
                        <li><a href="{{url('/admin/orders/finish')}}"><i class="fa fa-circle-o"></i> 订单完成</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>

                        <span> 友情链接管理</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('/admin/friendlinks/add')}}"><i class="fa fa-circle-o"></i> 添加链接</a></li>
                        <li><a href="{{url('/admin/friendlinks/index')}}"><i class="fa fa-circle-o"></i> 链接列表</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>

                        <span>前台轮播图</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('/admin/carcoul/add')}}"><i class="fa fa-circle-o"></i> 添加主题</a></li>
                        <li><a href="{{url('/admin/carcoul/index')}}"><i class="fa fa-circle-o"></i> 主题列表</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>

                        <span> 网站配置</span>
                        <span class="label label-primary pull-right"></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('/admin/webConfig/webConfig')}}"><i class="fa fa-circle-o"></i> 网站配置</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    @yield('content')

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-user bg-yellow"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

            </div><!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Some information about this general settings option
                        </p>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Other sets of options are available
                        </p>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div><!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div><!-- /.form-group -->
                </form>
            </div><!-- /.tab-pane -->
        </div>
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->

<script src="{{ asset('/ad/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('/ad/bootstrap/js/jquery-ui.min.js') }}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->

<script src="{{ asset('/ad/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('/ad/bootstrap/js/raphael-min.js') }}"></script>
<!-- <script src="{{ asset('/ad/plugins/morris/morris.min.js') }}"></script> -->
<!-- Sparkline -->
<script src="{{ asset('/ad/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('/ad/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('/ad/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('/ad/plugins/knob/jquery.knob.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('/ad/bootstrap/js/moment.min.js') }}"></script>
<script src="{{ asset('/ad/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('/ad/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('/ad/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/ad/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('/ad/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('/ad/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('/ad/plugins/fastclick/fastclick.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/ad/dist/js/app.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{ asset('/ad/dist/js/pages/dashboard.js') }}"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/ad/dist/js/demo.js') }}"></script>
<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": true,
            "autoWidth": false
        });
    });
</script>

<!-- 客服在线聊天 -->
<div id="main" style="display: none;position: absolute;top:120px;left: 500px;z-index: 9999" draggable="true">
           
            <div id="right">
                <div id="content" >
                    <h2 id="content-title">顾客至上，周到服务</h2>
                    <hr />
                    <div id="show_msg">
                        
                    </div>
                </div>
                <div id="send">
                    <div id="control">
                    <form id="Formchat">
                    颜色：
                    <select name="color" id="color">
                        <option value="">请选择</option>
                        <option style="color:#FF8888" value="#FF8888">爱的暗示</option>
                        <option style="color:#00BBFF" value="#00BBFF">忧郁的蓝</option>
                        <option style="color:#0000FF" value="#0000FF">碧空蓝天</option>
                        <option style="color:#9F88FF" value="#9F88FF">灰蓝种族</option>
                        <option style="color:#000088" value="#000088 ">蔚蓝海洋</option>
                        <option style="color:#77FFEE" value="#77FFEE">清清之蓝</option>
                        <option style="color:#4400B3" value="#4400B3">发亮篮紫</option>
                        <option style="color:#A500CC" value="#A500CC">紫的拘谨</option>
                        <option style="color:#B088FF" value="#B088FF">卡其制服</option>
                        <option style="color:#D1BBFF" value="#D1BBFF">伦敦灰雾</option>
                        <option style="color:#DC143C" value="#DC143C">卡布其诺</option>
                        <option style="color:#A52A2A" value="#A52A2A">苦涩心红</option>
                        <option style="color:#FF0000" value="#FF0000">正宗喜红</option>
                        <option style="color:#990099" value="#990099">红的发紫</option>
                        <option style="color:#FF0000" value="#FF0000">红旗飘飘</option>
                        <option style="color:#D2691E" value="#D2691E ">黄金岁月</option>
                        <option style="color:#800080" value="#800080">紫金绣贴</option>
                        <option style="color:#006400" value="#006400">橄榄树绿</option>
                        <option style="color:#000000" value="#000000">绝对黑色</option> 
                    </select>
                   
                    <br />
                    <textarea id="msg" name="msg"></textarea><br/>
                    <input type="button" value="发送" onclick="sendmsg()" style="margin-left: 120px;"/>
                    <input type="button" value="退出聊天" onclick="outchat()">
                    <input type="button" value="清空信息" onclick="dropchat()">
                    
                    </form>
                    </div>
                </div>
            </div>
        </div>
  <!-- 客服在线聊天 -->
  <script type="text/javascript">
    
       
    function Chat(){
        $('#main').css('display','block');
        showmsg();
        inte = setInterval("showmsg()",2000);
        //每间隔2s就执行一次
        
    }
     //及时显示聊天内容
    //利用ajax每间隔2s就去服务器获得一次聊天信息
    var maxID = 0;
    function showmsg(){

         $.ajax({
                type:'GET',
                url:"{{url('/admin/chat/showmsg')}}",
                data:{maxID:maxID},
                success:function(data)
                {

                    var s = "";
                    $(data).each(function(i,n){
                        if(n['sender']=='韩都客服'){
                            var speaker = '我';
                            s += "<p style='color:#417F4B'>"+speaker+"&nbsp;"+n['add_time']+"</p>";
                            s += "<p style='color:"+n['color']+"'>"+n['msg']+"</p>";
                        }else{
                            speaker = '顾客';
                            s += "<p style='color:#0075B8'>"+speaker+"&nbsp;"+n['add_time']+"</p>";
                            s += "<p style='color:"+n['color']+"'>"+n['msg']+"</p>";
                        }

                        //把已经获得消息的最大id赋予给maxID
                        maxID = n['id'];
                    });

                    var showdiv = $('#show_msg');
                    var msg = showdiv.html();
                    var aa = msg + s;
                    showdiv.html(aa);

                    var show = $('#show_msg')[0];
                    show.scrollTop = show.scrollHeight;
                    //设置滚动条卷起高度
                    // showdiv.scrollTop = showdiv.scrollHeight;
                    
                },
                error:function()
                {
                    alert("服务器繁忙，请稍等");
                }

            });
        
    }
   

    function sendmsg(){
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
        var fm = $('#Formchat')[0];
        //FormData收集表单信息
        var fd = new FormData(fm);

        //ajax提交表单信息到服务器存储
        
                    $.ajax({
                        type:'POST',
                        url:"{{url('/admin/chat/sendmsg')}}",
                        data:fd,
                        processData: false,    //必须设置
                        contentType: false,
                        success:function(data){
                            if(data==0){
                               $('#color').val('');
                                $('#msg').val('');
                            }
                        },
                        error:function()
                        {
                            alert("发送失败,请重试");
                        }

                    });
                        //必须设置
        }

    function outchat(){
        $('#main').css('display','none');
        clearInterval(inte);
    }

    function dropchat(){

         $.ajax({
                type:'GET',
                url:"{{url('/admin/chat/dropchat')}}",
                success:function(data){
                            
                               $('#show_msg').html('');
                        },
                error:function(){
                        
                           alert('清空数据失败');
                            return false;
                        }
            });
                
    }

        var did = document.getElementById('main');
        var mw = 0;
        var mh = 0;
        var isDown = false;

        did.onmousedown = function(e)
        {
            isDown = true;
            var _mx = e.pageX;
            var _my = e.pageY;
            var ol = did.offsetLeft;
            var ot = did.offsetTop;

            mw = _mx - ol;
            mh = _my - ot;

            did.style.backgroundColor = '#f00';
            this.style.cursor = 'move';

        }

        window.onmousemove = function(e)
        {
            if(!isDown) return;
            var newmx = e.pageX;
            var newmy = e.pageY;

            dl = newmx - mw;
            dt = newmy - mh;

            did.style.left = dl + 'px';
            did.style.top = dt + 'px';
        }

        did.onmouseup = function()
        {
            isDown = false;
            did.style.backgroundColor = '#ccc';
            did.style.cursor = 'default';
        }

   

  </script>
</body>
</html>
