<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
            | Admin
        @show
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/custom_css/chandra.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/custom_css/metisMenu.css') }}"  rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/custom_css/panel.css') }}" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>
<body class="skin-chandra">
    <!-- header logo: style can be found in header-->
    <header class="header">
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="{{ route('dashboard')}}" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="{{ asset('assets/img/logo.png') }}" height="40px" width="180px" alt="logo" />
            </a>
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i class="fa fa-fw fa-hand-o-left"></i>
                </a>
            </div>

            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-fw fa-envelope-o black"></i>
                            <span class="label label-success">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages table-striped">
                            <li class="dropdown-title">New Messages</li>
                            <li>
                                <a href="#" class="message striped-col">
                                    <img class="message-image img-circle" alt="image" src="{{ asset('assets/img/authors/avatar7.jpg') }}">
                                    <div class="message-body"> <strong>Ernest Kerry</strong>
                                        <br>
                                        Can we Meet?
                                        <br>
                                        <small>Just Now</small>
                                        <span class="label label-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message">
                                    <img class="message-image img-circle" alt="image" src="{{ asset('assets/img/authors/avatar6.jpg') }}">
                                    <div class="message-body"> <strong>John</strong>
                                        <br>
                                        Dont forgot to call...
                                        <br>
                                        <small>5 minutes ago</small>
                                        <span class="label label-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message striped-col">
                                    <img class="message-image img-circle"  alt="image" src="{{ asset('assets/img/authors/avatar5.jpg') }}">
                                    <div class="message-body">
                                        <strong>Wilton Zeph</strong>
                                        <br>
                                        If there is anything else &hellip;
                                        <br>
                                        <small>14/10/2014 1:31 pm</small>
                                    </div>

                                </a>
                            </li>
                            <li>
                                <a href="#" class="message">
                                    <img class="message-image img-circle" alt="image" src="{{ asset('assets/img/authors/avatar1.jpg') }}">
                                    <div class="message-body">
                                        <strong>Jenny Kerry</strong>
                                        <br>
                                        Let me know when you free
                                        <br>
                                        <small>5 days ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message striped-col">
                                    <img class="message-image img-circle" alt="image" src="{{ asset('assets/img/authors/avatar.jpg') }}">
                                    <div class="message-body">
                                        <strong>Tony</strong>
                                        <br>
                                        Let me know when you free
                                        <br>
                                        <small>5 days ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer">View All messages</li>
                        </ul>
                    </li>
                    <!--tasks-->
                    <li class="dropdown tasks-menu hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-fw fa-edit black"></i>
                            <span class="label label-primary">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li class="dropdown-title">You Have 4 Tasks</li>
                            <li>
                                <a href="#" class="message striped-col">
                                    Design some buttons
                                    <small class="pull-right">20%</small>
                                    <div class="message-body">
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-primary" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message">
                                    Create a nice theme
                                    <small class="pull-right">40%</small>
                                    <div class="message-body">
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-success" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">40% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message striped-col">
                                    Some task I need to do
                                    <small class="pull-right">60%</small>
                                    <div class="message-body">
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message">
                                    Make beautiful transitions
                                    <small class="pull-right">80%</small>
                                    <div class="message-body">
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-warning" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer">View All Tasks</li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle toggle-right">
                            <i class="fa fa-fw fa-comments-o black1"></i>
                            <span class="label label-danger">11</span>
                        </a>
                    </li>
                    <!-- Notifications: style can be found in dropdown-->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-fw fa-bell-o black1"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li class="dropdown-title">You have 8 notifications</li>

                            <li>
                                <a href="#" class="message icon-not striped-col">
                                    <i class="fa fa-fw fa-users info"></i>

                                    <div class="message-body">
                                        <strong>John Doe</strong>
                                        <br>
                                        5 members joined today
                                        <br>
                                        <span class="noti-date">Just now</span>
                                    </div>

                                </a>
                            </li>
                            <li>
                                <a href="#" class="message icon-not">
                                    <i class="fa fa-fw fa-users warning"></i>
                                    <div class="message-body">
                                        <strong>Tony</strong>
                                        <br>
                                        likes a photo of you
                                        <br>
                                        <span class="noti-date">5 min</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message icon-not striped-col">
                                    <i class="fa fa-fw fa-user danger"></i>

                                    <div class="message-body">
                                        <strong>John</strong>
                                        <br>
                                        Dont forgot to call...
                                        <br>
                                        <span class="noti-date">11 min</span>

                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message icon-not">
                                    <i class="fa fa-fw fa-info-circle dange"></i>
                                    <div class="message-body">
                                        <strong>Jenny Kerry</strong>
                                        <br>
                                        Very long description here...
                                        <br>
                                        <span class="noti-date">1 Hour</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message icon-not striped-col">
                                    <i class="fa fa-fw fa-thumbs-o-up success"></i>

                                    <div class="message-body">
                                        <strong>Ernest Kerry</strong>
                                        <br>
                                        2 members joined today
                                        <br>
                                        <span class="noti-date">3 Days</span>

                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer">View All Notifications</li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                            @if(Sentry::getUser()->pic)
                                <img src="{{{ url('/').'/uploads/users/'.Sentry::getUser()->pic }}}" alt="img" class="img-circle img-responsive pull-left" height="35" width="35"/>
                            @else
                                <img src="http://api.adorable.io/avatars/35/{{{ Sentry::getUser()->email }}}" alt="img" class="img-circle img-responsive pull-left" height="35" width="35"/>
                            @endif
                            <div class="riot">
                                <div>
                                    {{ Sentry::getUser()->first_name }} {{ Sentry::getUser()->last_name }}
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                @if(Sentry::getUser()->pic)
                                    <img src="{{{ url('/').'/uploads/users/'.Sentry::getUser()->pic }}}" alt="img" class="img-circle img-bor"/>
                                @else
                                    <img src="http://api.adorable.io/avatars/90/{{{ Sentry::getUser()->email }}}" alt="img" class="img-circle img-bor"/>
                                @endif
                                <p>{{ Sentry::getUser()->first_name }} {{ Sentry::getUser()->last_name }}</p>
                            </li>
                            <!-- Menu Body -->
                            <li class="pad-3">
                                <a href="{{ URL::to('admin/users/'.Sentry::getUser()->id) }}">
                                    <i class="fa fa-fw fa-user"></i>
                                    My Profile
                                </a>
                            </li>
                            <li role="presentation"></li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-fw fa-gear"></i>
                                    Account Settings
                                </a>
                            </li>
                            <li role="presentation" class="divider"></li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{ URL::to('admin/lockscreen') }}">
                                        <i class="fa fa-fw fa-lock"></i>
                                        Lock
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ URL::to('admin/logout') }}">
                                        <i class="fa fa-fw fa-sign-out"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar-->
            <section class="sidebar">
                <div id="menu" role="navigation">
                    <div class="nav_profile">
                        <div class="media profile-left">
                            <a class="pull-left profile-thumb" href="#">
                                @if(Sentry::getUser()->pic)
                                    <img src="{{{ url('/').'/uploads/users/'.Sentry::getUser()->pic }}}" alt="img" class="img-circle img-bor"/>
                                @else
                                    <img src="http://api.adorable.io/avatars/54/{{{ Sentry::getUser()->email }}}" alt="img" class="img-circle img-bor"/>
                                @endif
                            </a>
                            <div class="content-profile">
                                <h4 class="media-heading">
                                    {{ Sentry::getUser()->first_name }} {{ Sentry::getUser()->last_name }}
                                </h4>
                                <ul class="icon-list">
                                    <li>
                                        <a href="{{ URL::to('admin/users') }}">
                                            <i class="fa fa-fw fa-user"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('admin/lockscreen') }}">
                                            <i class="fa fa-fw fa-lock"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw fa-gear"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('admin/logout') }}">
                                            <i class="fa fa-fw fa-sign-out"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="navigation">
                        <li {{ (Request::is('admin') ? 'class="active"' : '') }}>
                            <a href="{{ route('dashboard') }}">
                                <i class="menu-icon fa fa-fw fa-home"></i>
                                <span class="mm-text ">Dashboard</span>
                            </a>
                        </li>

                  <li class="menu-dropdown {{ (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'active' : '') }}">
                            <a href="#">
                                <i class="menu-icon  fa fa-fw fa-paw"></i>
                                <span>Users</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li {{ (Request::is('admin/users') ? 'class=active' : '') }}>
                                    <a href="{{ URL::to('admin/users') }}">
                                        <i class="fa fa-fw fa-users"></i>
                                        Users
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/users/create') ? 'class=active' : '') }}>
                                    <a href="{{ URL::to('admin/users/create') }}">
                                        <i class="fa fa-fw fa-user"></i>
                                        Add New User
                                    </a>
                                </li>
                                <li {{ ((Request::is('admin/users/*')) && !(Request::is('admin/users/create')) ? 'class=active' : '') }}>
                                    <a href="{{ URL::route('users.show',Sentry::getUser()->id) }}">
                                        <i class="fa fa-fw fa-user"></i>
                                        User Profile
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-dropdown {{ (Request::is('admin/groups') || Request::is('admin/groups/create') || Request::is('admin/groups/*') ? 'active' : '') }}">
                            <a href="#">
                                <i class="menu-icon  fa fa-fw fa-users"></i>
                                <span>Groups</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li {{ (Request::is('admin/groups') ? 'class=active' : '') }}>
                                    <a href="{{ URL::to('admin/groups') }}">
                                        <i class="fa fa-fw fa-users"></i>
                                        Groups
                                    </a>
                                </li>
                                <li {{ (Request::is('admin/groups/create') ? 'class=active' : '') }}>
                                    <a href="{{ URL::to('admin/groups/create') }}">
                                        <i class="fa fa-fw fa-user"></i>
                                        Add New Group
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <!-- / .navigation -->
                </div>
                <!-- menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        <aside class="right-side right-padding">

            <!-- Notifications -->
            @include('notifications')

            <!-- Content -->
            @yield('content')

            <!-- /.content -->
        </aside>
        <!-- /.right-side -->
    </div>
    <!-- /.right-side -->
    <!-- ./wrapper -->
    <!-- global js -->
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    @if (Request::is('admin/draggable_portlets'))
        <script src="{{ asset('assets/js/custom_js/jquery.ui.min.js') }}" type="text/javascript"></script>
    @endif
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/custom_js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/custom_js/metisMenu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/custom_js/rightside_bar.js') }}" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- begin page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->
</body>
</html>