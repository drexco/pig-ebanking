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
                    <span>pig</span>
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
                                    <li class="dropdown">
                                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                                        <ul class="dropdown-menu dropdown-lg dropdown-content">
                                            <li class="drop-title">Notifications<a href="#" class="drop-title-link"><i class="fa fa-angle-right"></i></a></li>
                                            <li class="slimscroll dropdown-notifications">
                                                <ul class="list-unstyled dropdown-oc">
                                                    <li>
                                                        <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-photo"></i></span>
                                                            <span class="notification-info">Finished uploading photos to gallery <b>"South Africa"</b>.
                                                                <small class="notification-date">20:00</small>
                                                            </span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-at"></i></span>
                                                            <span class="notification-info"><b>John Doe</b> mentioned you in a post "Update v1.5".
                                                                <small class="notification-date">06:07</small>
                                                            </span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><span class="notification-badge bg-danger"><i class="fa fa-bolt"></i></span>
                                                            <span class="notification-info">4 new special offers from the apps you follow!
                                                                <small class="notification-date">Yesterday</small>
                                                            </span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><span class="notification-badge bg-success"><i class="fa fa-bullhorn"></i></span>
                                                            <span class="notification-info">There is a meeting with <b>Ethan</b> in 15 minutes!
                                                                <small class="notification-date">Yesterday</small>
                                                            </span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/avatar1.jpg" alt="" class="img-circle"></a>
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
                <!-- Page Inner -->
                <div class="page-inner">
                    <div class="page-title">
                        <h3 class="breadcrumb-header">Good Evening, Yashim</h3>
                        <p style="color: blue; margin-top: -22px;">Your Last Login was on: <span>16-January-2018 at 9:20:30 PM (GMT -7)</span></p>
                    </div>
                    <div>&nbsp;</div>
                    <div id="main-wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-md-9">
                                <div class="panel panel-white stats-widget">
                                    <div class="panel-body">
                                        <div class="panel-header">
                                            <span>Savings Account</span>
                                            <span class="pull-right">3223644232</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="pull-left">
                                            <span><h3>Yashim Whyte</h3></span>
                                            <span class="stats-number">$781,876</span>
                                            <a href="#"><p style="color: blue;" class="stats-info">View Account Details</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-9">
                                <div class="panel panel-white stats-widget">
                                    <div class="panel-body">
                                        <div class="panel-header">
                                            <span>Current Account</span>
                                            <span class="pull-right">5433244232</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="pull-left">
                                            <span><h3>Yashim Whyte</h3></span>
                                            <span class="stats-number">$578,100</span>
                                            <a href="#"><p style="color: blue;" class="stats-info">View Account Details</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row -->
                    </div><!-- Main Wrapper -->
                    <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Recent Approved Transactions</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Transaction Type</th>
                                                <th>Account</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Description</th>
                                                <th>Charges</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>7-Sep-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>15-Sep-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$6700.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Charles Taylor **5442 GTB Bonus</td>
                                                <td>$4.20</td>
                                            </tr>
                                            <tr>
                                                <td>17-Sep-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>8-Aug-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>8-Apr-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>9-Jul-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>6-Jan-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>24-Jan-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>3-Feb-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>4-Feb-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>7-Sep-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>8-Oct-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>10-Sep-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>7-Sep-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>7-Sep-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>7-Sep-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>7-Sep-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>7-Sep-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>7-Sep-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>7-Sep-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>7-Sep-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>7-Sep-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>7-Sep-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                            <tr>
                                                <td>7-Sep-17</td>
                                                <td>Interbank Transfer</td>
                                                <td>3223644232</td>
                                                <td>$450.00</td>
                                                <td>Successful</td>
                                                <td>COB Transfer to Maleek Berry **5442 GTB Bonus</td>
                                                <td>$1.20</td>
                                            </tr>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                    <div class="page-footer">
                        <p>2018, Piguet Galland & vous. <span>&copy;</span></p>
                    </div>
                </div><!-- /Page Inner -->
                <div class="page-right-sidebar" id="main-right-sidebar">
                    <div class="page-right-sidebar-inner">
                        <div class="right-sidebar-top">
                            <div class="right-sidebar-tabs">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active" id="chat-tab"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">chat</a></li>
                                    <li role="presentation" id="settings-tab"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">settings</a></li>
                                </ul>
                            </div>
                            <a href="javascript:void(0)" class="right-sidebar-toggle right-sidebar-close" data-sidebar-id="main-right-sidebar"><i class="icon-close"></i></a>
                        </div>
                        <div class="right-sidebar-content">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="chat">
                                    <div class="chat-list">
                                        <span class="chat-title">Recent</span>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item unread" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="http://via.placeholder.com/40x40" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">David</span>
                                                <span class="chat-text">where u at?</span>
                                                <span class="chat-time">08:50</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item unread active-user" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="http://via.placeholder.com/40x40" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Daisy</span>
                                                <span class="chat-text">Daisy sent a photo.</span>
                                                <span class="chat-time">11:34</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="chat-list">
                                        <span class="chat-title">Older</span>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="http://via.placeholder.com/40x40" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Tom</span>
                                                <span class="chat-text">You: ok</span>
                                                <span class="chat-time">2d</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item active-user" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="http://via.placeholder.com/40x40" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Anna</span>
                                                <span class="chat-text">asdasdasd</span>
                                                <span class="chat-time">4d</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="right-sidebar-toggle chat-item active-user" data-sidebar-id="chat-right-sidebar">
                                            <div class="user-avatar">
                                                <img src="http://via.placeholder.com/40x40" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <span class="chat-author">Liza</span>
                                                <span class="chat-text">asdasdasd</span>
                                                <span class="chat-time">&nbsp;</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="load-more-messages"  data-toggle="tooltip" data-placement="bottom" title="Load More">&bull;&bull;&bull;</a>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="settings">
                                    <div class="right-sidebar-settings">
                                        <span class="settings-title">General Settings</span>
                                        <ul class="sidebar-setting-list list-unstyled">
                                            <li>
                                                <span class="settings-option">Notifications</span><input type="checkbox" class="js-switch" checked />
                                            </li>
                                            <li>
                                                <span class="settings-option">Activity log</span><input type="checkbox" class="js-switch" checked />
                                            </li>
                                            <li>
                                                <span class="settings-option">Automatic updates</span><input type="checkbox" class="js-switch" />
                                            </li>
                                            <li>
                                                <span class="settings-option">Allow backups</span><input type="checkbox" class="js-switch" />
                                            </li>
                                        </ul>
                                        <span class="settings-title">Account Settings</span>
                                        <ul class="sidebar-setting-list list-unstyled">
                                            <li>
                                                <span class="settings-option">Chat</span><input type="checkbox" class="js-switch" checked />
                                            </li>
                                            <li>
                                                <span class="settings-option">Incognito mode</span><input type="checkbox" class="js-switch" />
                                            </li>
                                            <li>
                                                <span class="settings-option">Public profile</span><input type="checkbox" class="js-switch" />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-right-sidebar" id="chat-right-sidebar">
                    <div class="page-right-sidebar-inner">
                        <div class="right-sidebar-top">
                            <div class="chat-top-info">
                                <span class="chat-name">Noah</span>
                                <span class="chat-state">2h ago</span>
                            </div>
                            <a href="javascript:void(0)" class="right-sidebar-toggle chat-sidebar-close pull-right" data-sidebar-id="chat-right-sidebar"><i class="icon-keyboard_arrow_right"></i></a>
                        </div>
                        <div class="right-sidebar-content">
                            <div class="right-sidebar-chat slimscroll">
                                <div class="chat-bubbles">
                                <div class="chat-start-date">02/06/2017 5:58PM</div>
                                    <div class="chat-bubble them">
                                        <div class="chat-bubble-img-container">
                                            <img src="http://via.placeholder.com/38x38" alt="">
                                        </div>
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">Hello</span>
                                        </div>
                                    </div>
                                    <div class="chat-bubble me">
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">Hello!</span>
                                        </div>
                                    </div>
                                <div class="chat-start-date">03/06/2017 4:22AM</div>
                                    <div class="chat-bubble me">
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">lorem</span>
                                        </div>
                                    </div>
                                    <div class="chat-bubble them">
                                        <div class="chat-bubble-img-container">
                                            <img src="http://via.placeholder.com/38x38" alt="">
                                        </div>
                                        <div class="chat-bubble-text-container">
                                            <span class="chat-bubble-text">ipsum dolor sit amet</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-write">
                                <form class="form-horizontal" action="javascript:void(0);">
                                    <input type="text" class="form-control" placeholder="Say something">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->

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