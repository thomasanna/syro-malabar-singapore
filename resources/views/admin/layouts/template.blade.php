<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Syro-Malabar Catholics</title>
    <meta name="description" content="Syro-Malabar Catholic">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset('public/admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/css/style.css')}}">


    <!-- <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css"> 


    <link rel="stylesheet" href="assets/css/style.css">-->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    @stack('css')

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">Syro-Malabar Admin</a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('public/admin/images/logo2.png')}}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('admin.dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title"></h3><!-- /.menu-title -->
                    <li>
                        <a href="{{route('admin.user')}}" > <i class="menu-icon fa fa-laptop"></i>Users</a>                      
                    </li>
                    <li>
                        <a href="{{route('admin.feedback')}}" > <i class="menu-icon fa fa-laptop"></i>Feedback</a>                      
                    </li>
                    <li>
                        <a href="{{route('admin.catechism')}}" > <i class="menu-icon fa fa-laptop"></i>Catechism</a>                      
                    </li> 
                    <li>
                        <a href="{{route('admin.liturgical-calender')}}" > <i class="menu-icon fa fa-laptop"></i>Liturgical Calender</a>                      
                    </li>
                   <!--  <li>
                        <a href="{{route('admin.menu')}}" > <i class="menu-icon fa fa-laptop"></i>Menu</a>                      
                    </li> -->
                    <li>
                        <a href="{{route('admin.content')}}" > <i class="menu-icon fa fa-laptop"></i>Content</a>                      
                    </li>
                    <li>
                        <a href="{{route('admin.event')}}" > <i class="menu-icon fa fa-laptop"></i>Event</a>                      
                    </li>
                    <li>
                        <a href="{{route('admin.house-blessing-request')}}" > <i class="menu-icon fa fa-laptop"></i>House Blessing Request</a>                      
                    </li>
                    <li>
                        <a href="{{route('admin.activities')}}" > <i class="menu-icon fa fa-laptop"></i>Activities</a>                      
                    </li>
                    <li>
                        <a href="{{route('admin.noc')}}" > <i class="menu-icon fa fa-laptop"></i>NOC</a>                      
                    </li>
                    <li>
                        <a href="{{route('admin.novena')}}" > <i class="menu-icon fa fa-laptop"></i>Novena</a>                      
                    </li>
                    <li>
                        <a href="{{route('admin.prayer')}}" > <i class="menu-icon fa fa-laptop"></i>Prayer</a>                      
                    </li>
                   
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                 
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="{{route('admin.logout')}}"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

       
        <div class="content mt-3">
             <!-- Main content -->
               
                  @yield('content')
               
    <!-- /.content -->
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{asset('public/admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/admin/js/popper.min.js')}}"></script>
    <script src="{{asset('public/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/admin/js/main.js')}}"></script>

  <!--   <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script> -->
    <script>
        // (function($) {
        //     "use strict";

        //     jQuery('#vmap').vectorMap({
        //         map: 'world_en',
        //         backgroundColor: null,
        //         color: '#ffffff',
        //         hoverOpacity: 0.7,
        //         selectedColor: '#1de9b6',
        //         enableZoom: true,
        //         showTooltip: true,
        //         values: sample_data,
        //         scaleColors: ['#1de9b6', '#03a9f5'],
        //         normalizeFunction: 'polynomial'
        //     });
        // })(jQuery);
    </script>
    @stack('scripts')
</body>

</html>
