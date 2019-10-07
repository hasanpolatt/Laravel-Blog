




<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>BİTEK  </title>

    <link href="../backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../backend/vendors/nprogress/nprogress.css" rel="stylesheet">

    <link href="../backend/build/css/custom.min.css" rel="stylesheet">
    @yield('css')
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>BİTEK!</span></a>
                </div>

                <div class="clearfix"></div>

                <div class="profile clearfix">
                    <div class="profile_pic">
                        <!--<img src="images/img.jpg" alt="..." class="img-circle profile_img"> -->
                    </div>
                    <div class="profile_info">
                        <span>Hoş Geldin,</span>
                        <h2>Admin</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <br />

                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="admin/ayarlar"><i class="fa fa-cog"></i> Ayarlar </a></li>
                            <li><a href="admin/hakkimizda"><i class="fa fa-cog"></i> Hakkımızda</a></li>
                            <li><a href="admin/blog"><i class="fa fa-cog"></i> Blog</a></li>





                        </ul>
                    </div>


                </div>

                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <span class="fa fa-cogs"></span>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">

                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Ayarlar</span>
                                    </a>
                                </li>

                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Çıkış</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->



<!-- /page content -->

@yield('icerik')



<!-- footer content -->
<footer>
    <div class="pull-right">
        aaaa
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="../backend/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../backend/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../backend/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../backend/vendors/nprogress/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="../backend/build/js/custom.min.js"></script>
<script src="../backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../backend/vendors/iCheck/icheck.min.js"></script>
<!-- PNotify -->
<script src="../backend/vendors/pnotify/dist/pnotify.js"></script>
<script src="../backend/vendors/pnotify/dist/pnotify.buttons.js"></script>
<script src="../backend/vendors/pnotify/dist/pnotify.nonblock.js"></script>

@yield('js')
</body>
</html>
