<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Piguet Galland : @yield('page_title')</title>
        <meta name="description" content="stomise, well commented codes and seo friendly.">
        <meta name="keywords" content="piguet, galland, banking, company, finance, money, loans">
        <meta name="author" content="AnDrexx">

        <!-- ==============================================
        Favicons
        =============================================== -->
        <link rel="shortcut icon" type="image/x-icon" href="https://www.piguetgalland.ch/app/themes/piguet-galland/images/front/favicon.ico" />
         <!-- Styles -->
        <link rel='stylesheet' id='et-googleFonts-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A300i%2C400%2C600&amp;ver=4.8.1' type='text/css' media='all' />
        <!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> -->        
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">        
        <link href="assets/plugins/icomoon/style.css" rel="stylesheet">
        <link href="assets/plugins/uniform/css/default.css" rel="stylesheet"/>        
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet"/>
        <link href="assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet">          
        <link href="assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>   
        <link href="assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>   
        <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="assets/css/space.min.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">

    </head>

    <body>

    <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar">
                <a class="logo-box" href="index.html">
                    <span>PIGUET</span>
                    <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
                    <i class="icon-close" id="sidebar-toggle-button-close"></i>
                </a>
                <div class="page-sidebar-inner">
                    <div class="page-sidebar-menu">
                        <ul class="accordion-menu">
                            @if(Session::get('user_id'))
                                @if(Session::get('account_type')=='admin')
                                     <li class="active-page">
                                        <a href="/">
                                            <i class="menu-icon icon-home4"></i><span>Maison</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="menu-icon icon-person"></i><span>Users</span><i class="accordion-icon fa fa-angle-left"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="users/create">Create User</a></li>
                                            <li><a href="users/edit">Edit User</a></li>
                                            <li><a href="users/view">View User</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="menu-icon icon-cash"></i><span>Accounts</span><i class="accordion-icon fa fa-angle-left"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="accounts/create">Create Account</a></li>
                                            <li><a href="accounts/edit">Edit Account</a></li>
                                            <li><a href="accounts/view">View Account</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="menu-icon icon-chart"></i><span>Transactions</span><i class="accordion-icon fa fa-angle-left"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="transactions/create">Create Transaction</a></li>
                                            <li><a href="transactions/edit">Edit Transaction</a></li>
                                            <li><a href="transactions/view">View Transasction</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="log-out">
                                            <i class="menu-icon icon-exit"></i><span>Logout</span>
                                        </a>
                                    </li>
                                @endif
                            @else
                                <li class="active-page">
                                    <a href="/">
                                        <i class="menu-icon icon-home4"></i><span>Maison</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="menu-icon icon-person"></i><span>Profile</span><i class="accordion-icon fa fa-angle-left"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="ui-alerts.html">View Profile</a></li>
                                        <li><a href="ui-buttons.html">Change Password</a></li>
                                        <li><a href="ui-icons.html">Update Security Question</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="menu-icon icon-show_chart"></i><span>Transfers</span><i class="accordion-icon fa fa-angle-left"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="ui-icons.html">Own Account Transfer</a></li>
                                        <li><a href="ui-alerts.html">Transfer to Ultra Bank A/C</a></li>
                                        <li><a href="ui-buttons.html">Transfer to Other Banks</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="menu-icon icon-credit-card"></i><span>Factures</span><i class="accordion-icon fa fa-angle-left"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="layout-blank.html">Airtime Purchase</a></li>
                                        <li><a href="layout-boxed.html">Utility Bills</a></li>
                                        <li><a href="layout-collapsed-sidebar.html">Cable TV Bills</a></li>
                                        <li><a href="layout-fixed-header.html">Phone Bills</a></li>
                                        <li><a href="layout-fixed-sidebar.html">Internet Services</a></li>
                                        <li><a href="layout-fixed-sidebar-header.html">Donations</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="menu-icon icon-phone"></i><span>Commentaires</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="menu-icon icon-exit"></i><span>Logout</span>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div><!-- /Page Sidebar -->
            
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="search-form">
                        <form action="#" method="GET">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <div class="logo-sm">
                                    <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                                    <a class="logo-box" href="index.html"><span>Piguet Galland</span></a>
                                </div>
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <i class="fa fa-angle-down"></i>
                                </button>
                            </div>
                        
                            <!-- Collect the nav links, forms, and other content for toggling -->
                        
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                                    <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fa fa-expand"></i></a></li>
                                    <li><a href="javascript:void(0)" id="search-button"><i class="fa fa-search"></i></a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="javascript:void(0)" class="right-sidebar-toggle" data-sidebar-id="main-right-sidebar"><i class="fa fa-envelope"></i></a></li>
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar1.jpg" alt="" class="img-circle"></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Profile</a></li>
                                            <li><a href="#">Calendar</a></li>
                                            <li><a href="#"><span class="badge pull-right badge-danger">42</span>Messages</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Account Settings</a></li>
                                            <li><a href="#">Log Out</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div><!-- /Page Header -->
                    <div class="page-footer">
                        <p>2018, Piguet Galland & vous. <span>&copy;</span></p>
                    </div>
                </div>
            </div><!-- /Page Content -->

    <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/d3/d3.min.js"></script>
        <script src="assets/plugins/nvd3/nv.d3.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="assets/plugins/chartjs/chart.min.js"></script>
        <script src="assets/js/space.min.js"></script>
        <script src="assets/js/pages/dashboard.js"></script>
        <script src="assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="assets/js/pages/table-data.js"></script>


    </body>
</html>