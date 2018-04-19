<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="ThemeBucket">
        <link rel="shortcut icon" href="<?php echo url('/'); ?>/images/favicon.png">

        <title>Blank page</title>

        <!--Core CSS -->
        <link href="<?php echo url('/'); ?>/bs3/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo url('/'); ?>/css/bootstrap-reset.css" rel="stylesheet">
        <link href="<?php echo url('/'); ?>/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="<?php echo url('/'); ?>/css/style.css" rel="stylesheet">
        <link href="<?php echo url('/'); ?>/css/style-responsive.css" rel="stylesheet" />
        <script src="<?php echo url('/'); ?>/js/jquery.js"></script>
        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]>
<script src="<?php echo url('/'); ?>/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
    </head>

    <body>
        <section id="container" >
            <!--header start-->
            <header class="header fixed-top clearfix">
                <!--logo start-->
                <div class="brand">
                    <a href="<?php echo url('/'); ?>/index.html" class="logo">
                        <img src="<?php echo url('/'); ?>/images/logo.png" alt="">
                    </a>
                    <div class="sidebar-toggle-box">
                        <div class="fa fa-bars"></div>
                    </div>
                </div>
                <!--logo end-->
                <div class="top-nav clearfix">
                    <!--search & user info start-->
                    <ul class="nav pull-right top-menu">
                        <li>
                            <input type="text" class="form-control search" placeholder=" Search">
                        </li>
                        <!-- user login dropdown start-->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="<?php echo url('/'); ?>/#">
                                <img alt="" src="images/avatar1_small.jpg">
                                <span class="username">John Doe</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout">
                                <li><a href="<?php echo url('/'); ?>/#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                                <li><a href="<?php echo url('/'); ?>/#"><i class="fa fa-cog"></i> Settings</a></li>
                                <li><a href="<?php echo url('/'); ?>/login.html"><i class="fa fa-key"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!--search & user info end-->
                </div>
            </header>
            <!--header end-->

            <aside>
                <div id="sidebar" class="nav-collapse">
                    <!-- sidebar menu start-->            <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a href="<?php echo url('/'); ?>/index.html">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="<?php echo url('/'); ?>/javascript:;">
                                <i class="fa fa-laptop"></i>
                                <span>Forms</span>
                            </a>
                            <ul class="sub">
                                <li><a href="<?php echo url('/'); ?>/admin/suppliers/create">Supplier</a></li>
                                <li><a href="<?php echo url('/'); ?>/#">Projects</a></li>
                                <li><a href="<?php echo url('/'); ?>/#">Contracts</a></li>
                                <li><a href="<?php echo url('/'); ?>/#">Payments</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo url('/'); ?>/login.html">
                                <i class="fa fa-times"></i>
                                <span>Log Out</span>
                            </a>
                        </li>
                    </ul></div>        
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->

            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- page start-->
                            @if(session()->has('message.level'))
                            <div class="alert alert-{{ session('message.level') }}"> 
                                {!! session('message.content') !!}
                            </div>
                            @endif

                            @yield("content")

                            <!-- page end-->
                        </div>
                    </div>
                </section>
            </section>
            <!--main content end-->

        </section>

        <script src="bs3/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="<?php echo url('/'); ?>/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="<?php echo url('/'); ?>/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo url('/'); ?>/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
        <script src="<?php echo url('/'); ?>/js/jquery.nicescroll.js"></script>
        <!--Easy Pie Chart-->
        <!--<script src="<?php echo url('/'); ?>/js/easypiechart/jquery.easypiechart.js"></script>-->
        <!--Sparkline Chart-->
        <!--<script src="<?php echo url('/'); ?>/js/sparkline/jquery.sparkline.js"></script>-->
        <!--jQuery Flot Chart-->
        <!--        <script src="<?php echo url('/'); ?>/js/flot-chart/jquery.flot.js"></script>
<script src="<?php echo url('/'); ?>/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo url('/'); ?>/js/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo url('/'); ?>/js/flot-chart/jquery.flot.pie.resize.js"></script>-->


        <!--common script init for all pages-->
        <script src="<?php echo url('/'); ?>/js/scripts.js"></script>

    </body>
</html>
