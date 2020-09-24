<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MASELI | www.maselimx.com</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">
    
    <link href="{{url('/css/app.css')}}" rel="stylesheet">

    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{url('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{url('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{url('img/favicon.ico')}}">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="{{url('desarrollosocial/ciudadanos')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>M</b>AS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>MASELISOFT</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Online</small>
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:90px; height:90px; float:center; border-radius:50%; margin-right:25px;">
                    <p>
                      www.implanpn.gob.mx - Desarrollandor Software
                      <small>ING. Miguel Ángel Reyna Dávila</small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                    <a href="{{ url('/profile') }}" class="btn btn-default btn-flat">Perfil</a>
                      <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Cerrar</a>
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
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="{{url('empresas')}}">
                {{-- <i class="fa fa-laptop"></i> --}}
                <span>Empresas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <!-- <ul class="treeview-menu">
                <li><a href="almacen/articulo"><i class="fa fa-circle-o"></i> Agregar</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i> Editar</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i> Reportes</a></li>
              </ul> -->
            </li>
            
            <li class="treeview">
              <a href="{{url('empleados')}}">
                {{-- <i class="fa fa-th"></i> --}}
                <span>Empleados</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <!-- <ul class="treeview-menu">
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i> Agregar</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Editar</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Reportes</a></li>
              </ul> -->
            </li>

            <li class="treeview">
              <a href="{{url('contratos')}}">
                {{-- <i class="fa fa-shopping-cart"></i> --}}
                <span>Contratos</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <!-- <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i> Agregar</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i> Editar</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i> Editar</a></li>
              </ul> -->
            </li>
                       
            <li class="treeview">
              <a href="#">
                {{-- <i class="fa fa-folder"></i> --}} 
                <span>Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> 
                <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> 
                <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">Miguel Angel Reyna</small>
              </a>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
		                          <!--Contenido-->
                              @yield('content')
		                          <!--Fin Contenido-->
                           </div>
                        </div>
		                    
                  		</div>
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2020-2020 <a href="www.implanpn.gob.mx">MASELI</a>.</strong> Todos los derechos reservados.
      </footer>

      <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script>
        
        $.material.init();

    </script>

    <!-- Scripts -->
    <script src="{{url('/js/app.js')}}"></script>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{url('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('js/app.min.js')}}"></script>
    
  </body>
</html>
