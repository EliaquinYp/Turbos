<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TURBOS</title>

    <!--Bootstrap Core CSS -->
    <link href={{ URL::asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}} rel="stylesheet" >
    <!-- MetisMenu CSS -->
    <link href={{ URL::asset('bower_components/metisMenu/dist/metisMenu.min.css') }} rel="stylesheet" >
    @yield('estilos')

    <!-- Custom CSS -->
    <link href={{ URL::asset('dist/css/sb-admin-2.css') }} rel="stylesheet" >
    <!--Custon Fonts -->
    <link href={{ URL::asset('bower_components/font-awesome/css/font-awesome.min.css') }} rel="stylesheet" type="text/css" >
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="https://i.imgur.com/QhSpF6S.jpg" alt="" width="100" height="40"/></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <i class="fa fa-gear fa-fw"></i>Cambiar contraseña
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <i class="fa fa-sign-out fa-fw"></i>Logout
                            </a>
                        </li>
                        
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
              
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="/servicio/"><i class="fa fa-dashboard fa-fw"></i> Servicios</a>
                        </li>
                        <li>
                            <a href="/observaciones/"><i class="fa fa-dashboard fa-fw"></i> Observaciones</a>
                        </li>
                        <li>
                            <a href="/reclamos/"><i class="fa fa-dashboard fa-fw"></i> Reclamos</a>
                        </li>
                         <li>
                            <a href="/turbos/"><i class="fa fa-dashboard fa-fw"></i> Turbos</a>
                        </li>
                        <!-- 
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Tienda<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Clientes</a>
                                </li>
                                
                            </ul>
                           
                       
                          
                        </li>
                          -->
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
            
    <div id="page-wrapper" >
        @yield('content')
           

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src={{ URL::asset('bower_components/jquery/dist/jquery.min.js') }}></script>
    <!-- Bootstrap Core javaScript -->
    <script src={{ URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}></script>
    <!-- metis menu plugin javaScript -->
    <script src={{ URL::asset('bower_components/metisMenu/dist/metisMenu.min.js') }}></script>

    @yield('js')
    <!--Custom theme JavaScript -->
    <script src={{ URL::asset('dist/js/sb-admin-2.js') }}></script>

    @yield('jsope')

</body>

</html>