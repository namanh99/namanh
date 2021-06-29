<header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo BASE_URL ?>/public/html-admin/images/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Your name</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo BASE_URL ?>/public/html-admin/images/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    Your profile
                                    <small>Web developer</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
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
                    <img src="<?php echo BASE_URL ?>/public/html-admin/images/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Your name</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">LAOYOUT ADMIN</li>
                <li>
                    <a data-toggle="collapse" href="#demo" >
                        <i class="fa fa-th"></i> <span>Danh mục sản phẩm</span>
                    </a>
                    <p style="color: #b8c7ce;padding-left: 45px; " id="demo" class="collapse" href="pages/widgets.html">
                          
                        <a href="<?php echo BASE_URL ?>/product">
                            <span>Thêm sản phẩm</span>
                        </a> <br><br>
                        <a href="<?php echo BASE_URL ?>/product/list_category">
                            <span>Liệt kê sản phẩm</span>
                        </a>   
                    </p>
                      
                </li>
                <li>
                    <a data-toggle="collapse" href="#demo1" >
                        <i class="fa fa-th"></i> <span> Sản phẩm</span>
                    </a>
                    <p style="color: #b8c7ce;padding-left: 45px; " id="demo1" class="collapse" >
                          
                        <a href="<?php echo BASE_URL ?>/product/add_product">
                            <span>Danh mục bài viết</span>
                        </a> <br><br>
                        <a href="<?php echo BASE_URL ?>/product/list_product">
                            <span>Liệt kê bài viết</span>
                        </a>   
                    </p>
                      
                </li>
                <li>
                    <a data-toggle="collapse" href="#demo2" >
                        <i class="fa fa-th"></i> <span>Danh mục bài viết</span>
                    </a>
                    <p style="color: #b8c7ce;padding-left: 45px; " id="demo2" class="collapse" href="pages/widgets.html">
                          
                        <a href="<?php echo BASE_URL ?>/post">
                            <span>Thêm bài viết</span>
                        </a> <br><br>
                        <a href="<?php echo BASE_URL ?>/post/list_category">
                            <span>Liệt kê bài viết</span>
                        </a>   
                    </p>
                      
                </li>
                <li>
                    <a data-toggle="collapse" href="#demo3" >
                        <i class="fa fa-th"></i> <span>Bài viết</span>
                    </a>
                    <p style="color: #b8c7ce;padding-left: 45px; " id="demo3" class="collapse" href="pages/widgets.html">
                          
                        <a href="<?php echo BASE_URL ?>/post/add_post">
                            <span>Thêm bài viết</span>
                        </a> <br><br>
                        <a href="<?php echo BASE_URL ?>/post/list_post">
                            <span>Liệt kê bài viết</span>
                        </a>   
                    </p>
                      
                </li>

                 <li>
                    <a data-toggle="collapse" href="#demo4" >
                        <i class="fa fa-th"></i> <span>Order</span>
                    </a>
                    <p style="color: #b8c7ce;padding-left: 45px; " id="demo4" class="collapse" href="pages/widgets.html">
                          
                        <a href="<?php echo BASE_URL ?>/order">
                            <span>Liệt kê order</span>
                        </a> 
                        
                    </p>
                      
                </li>

                   


                
                <li>
                    <a href="<?php echo BASE_URL ?>/login/logout">
                        <i class="fa fa-th"></i> <span>Đăng Xuất</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">