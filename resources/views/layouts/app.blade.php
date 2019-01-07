<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html   lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>CCMF</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.cs')}}s">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{asset('assets/css/skins/skin-blue.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->
    <a href="{{route("home")}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- <span class="logo-mini"><b>CCMF</span> -->
        <img src="/assets/img/logo-ccmf-assurance.png" style="height:38px;">
      <!-- logo for regular state and mobile devices -->
      <!-- <span class="logo-lg"><b>CCMF</b></span> -->
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <ul class="nav navbar-nav">
        @if(Auth::user()->role && Auth::user()->role->name=="ADMIN" || Auth::user()->role && Auth::user()->role->name=="ADMINISTRATEUR")
                    <li @if(\Request::is('*users*') )  class="active" @endif > <a href="{{route('users.index')}}"><i class="fa fa-users"></i> Users</a></li>
                    <li @if(\Request::is('*import*') )  class="active" @endif > <a href="{{route('import')}}"><i class="fa fa-upload"></i> Import</a></li>
                    <li @if(\Request::is('*export*') )  class="active" @endif > <a href="{{route('export')}}"><i class="fa fa-download"></i> Export</a></li>
        @endif
                    <!-- <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{route('newForm')}}">newForm</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li> -->
                  </ul>


      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a> -->
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a> -->
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a> -->
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <!-- <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->

                <!-- <p>
                  {{(Auth::user())->role->name}}
                  <small>Member since Nov. 2012</small>
                </p> -->
              <!-- </li> -->
              <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-primary btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="{{route('logout')}}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                   class="btn btn-danger btn-flat">Se connecter</a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
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

      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> {{(Auth::user())->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->


      <form  action="{{route('search')}}" class="sidebar-form">
        @csrf
        <div class="input-group">
          <input type="text" name="nom" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>

      <!-- <form class="form-inline" action="{{route('search')}}" >
        <input class="form-control mr-sm-2" name="nom" style="width:70%;" type="search"
        placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->

      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">HEADER</li> -->
        <!-- Optionally, you can add icons to the links -->
        <li @if(\Request::is('*clients*') )  class="active" @endif class="treeview">
            <li @if(\Request::route()->getName()=='clients.create' )  class="active" @endif ><a href="{{route('clients.create')}}">Crée une fiche </a></li>
            <li @if(\Request::route()->getName()=='clients.index' )  class="active" @endif ><a href="{{route('clients.index')}}">Fiche Qualifier</a></li>
        </li>
        @if( Auth::user()->role && Auth::user()->role->name=="RESPONSABLEQUAL")
          <li @if(\Request::is('*clients*') )  class="active" @endif class="treeview">
            <a href="#"><i class="fa fa-bank"></i> <span>Prospects</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>

            <ul class="treeview-menu">
              <li @if(\Request::route()->getName()=='appels' )  class="active" @endif ><a href="{{route('appels')}}">Appels </a></li>
            </ul>

          </li>
        @endif
        @if(Auth::user()->role && Auth::user()->role->name=="ADMIN"
        || Auth::user()->role && Auth::user()->role->name=="ADMINISTRATEUR"
        || Auth::user()->role && Auth::user()->role->name=="RESPONSABLES"
        || Auth::user()->role && Auth::user()->role->name=="OPERATEURS"
        || Auth::user()->role && Auth::user()->role->name=="CHEFPLATEAU")
          <li @if(\Request::is('*clients*') )  class="active" @endif class="treeview">
            <a href="#"><i class="fa fa-bank"></i> <span>Prospects</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>

            <ul class="treeview-menu">
              <li @if(\Request::route()->getName()=='appels' )  class="active" @endif ><a href="{{route('appels')}}">Appels </a></li>
              <li @if(\Request::route()->getName()=='rappels' )  class="active" @endif ><a href="{{route('rappels')}}">Rappels </a></li>
              <li @if(\Request::route()->getName()=='enattente') class="active" @endif ><a href="{{route('enattente')}}">Enattente</a></li>
              <li @if(\Request::route()->getName()=='decisions') class="active" @endif ><a href="{{route('decisions')}}">Décisions</a></li>
              <li @if(\Request::route()->getName()=='promesses') class="active" @endif ><a href="{{route('promesses')}}">Promesses</a></li>
              <li @if(\Request::route()->getName()=='injoignables') class="active" @endif ><a href="{{route('injoignables')}}">Injoignables</a></li>
              <li @if(\Request::route()->getName()=='injoignablespermanents') class="active" @endif ><a href="{{route('injoignablespermanents')}}">Injoignables permanents</a></li>
              <li @if(\Request::route()->getName()=='fauxnumeros') class="active" @endif ><a href="{{route('fauxnumeros')}}">Faux Numeros</a></li>
              <li @if(\Request::route()->getName()=='intraitables') class="active" @endif ><a href="{{route('intraitables')}}">Intraitables</a></li>
              <li @if(\Request::route()->getName()=='doublons') class="active" @endif ><a href="{{route('doublons')}}">Doublons</a></li>
              <li @if(\Request::route()->getName()=='refus') class="active" @endif ><a href="{{route('refus')}}">Refus</a></li>
            </ul>

          </li>
        @endif

        @if(Auth::user()->role && Auth::user()->role->name=="ADMIN"
        || Auth::user()->role && Auth::user()->role->name=="ADMINISTRATEUR"
        || Auth::user()->role && Auth::user()->role->name=="RESPONSABLES"
        || Auth::user()->role && Auth::user()->role->name=="CHEFPLATEAU")
          <li @if(\Request::is('*clients*') )  class="active" @endif class="treeview">
            <a href="#"><i class="fa fa-bank"></i> <span>Signés</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li @if(\Request::route()->getName()=='signes') class="active" @endif ><a href="{{route('signes')}}">Signés</a></li>
              <li @if(\Request::route()->getName()=='instances') class="active" @endif ><a href="{{route('instances')}}">Instances</a></li>
              <li @if(\Request::route()->getName()=='sanseffet') class="active" @endif ><a href="{{route('sanseffet')}}">Sans Effet</a></li>
              <li @if(\Request::route()->getName()=='sanseffetresignes') class="active" @endif ><a href="{{route('sanseffetresignes')}}">Sans Effet Re-Signés</a></li>
            </ul>
          </li>
       @endif

       @if(Auth::user()->role && Auth::user()->role->name=="ADMIN" || Auth::user()->role && Auth::user()->role->name=="ADMINISTRATEUR")
        <li @if(\Request::is('*clients*') )  class="active" @endif class="treeview">
          <a href="#"><i class="fa fa-bank"></i> <span>Clients</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li @if(\Request::route()->getName()=='souscrits') class="active" @endif ><a href="{{route('souscrits')}}">Souscrits</a></li>
            <li @if(\Request::route()->getName()=='instancescie') class="active" @endif ><a href="{{route('instancescie')}}">Instances Cie</a></li>
            <li @if(\Request::route()->getName()=='sanseffetcie') class="active" @endif ><a href="{{route('sanseffetcie')}}">Sans Effet Cie</a></li>
            <li @if(\Request::route()->getName()=='secieresignes') class="active" @endif ><a href="{{route('secieresignes')}}">Se Cie Re-Signé</a></li>
            <li @if(\Request::route()->getName()=='encours') class="active" @endif ><a href="{{route('encours')}}">En cours</a></li>
            <li @if(\Request::route()->getName()=='resilies') class="active" @endif ><a href="{{route('resilies')}}">Résiliés</a></li>
            <li @if(\Request::route()->getName()=='resiliesr') class="active" @endif ><a href="{{route('resiliesr')}}">Résiliés R</a></li>
          </ul>
        </li>
        @endif

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content container-fluid">

                    @yield('content')
    </section>

  </div>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <!-- <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info"> -->
                <!-- <h4 class="control-sidebar-subheading">Langdon's Birthday</h4> -->

                <!-- <p>Will be 23 on April 24th</p> -->
              <!-- </div>
            </a> -->
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>

      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
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
          </div>
        </form>
      </div>
    </div>
  </aside>

  <div class="control-sidebar-bg"></div>
</div>

<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/js/adminlte.min.js')}}"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
