<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{asset('admin/plugins/jqvmap/jqvmap.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="{{asset('css/w3.css')}}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />
        <body class="hold-transition sidebar-mini layout-fixed">
            <div class="bg-gray-100 text-white">
                @livewire('navigation-menu')
    
                
            </div>
            <div class="wrapper">
            
              <!-- Navbar -->
              <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                  </li>
                  <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                  </li>
                </ul>
            
                
            
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                  <!-- Messages Dropdown Menu -->
                  <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                      <i class="far fa-comments"></i>
                      <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                      <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                          <img src="" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                          <div class="media-body">
                            <h3 class="dropdown-item-title">
                              Brad Diesel
                              <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                          </div>
                        </div>
                        <!-- Message End -->
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                          <img src="" alt="User Avatar" class="img-size-50 img-circle mr-3">
                          <div class="media-body">
                            <h3 class="dropdown-item-title">
                              John Pierce
                              <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">I got your message bro</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                          </div>
                        </div>
                        <!-- Message End -->
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                          <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                          <div class="media-body">
                            <h3 class="dropdown-item-title">
                              Nora Silvester
                              <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">The subject goes here</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                          </div>
                        </div>
                        <!-- Message End -->
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                  </li>
                  <!-- Notifications Dropdown Menu -->
                  <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                      <i class="far fa-bell"></i>
                      <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                      <span class="dropdown-item dropdown-header">15 Notifications</span>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                      <i class="fas fa-th-large"></i>
                    </a>
                  </li>
                </ul>
              </nav>
              <!-- /.navbar -->
            
              <!-- Main Sidebar Container -->
              <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                  
                  <span class="brand-text font-weight-light">AdminLTE 3</span>
                </a>
            
                <!-- Sidebar -->
                <div class="sidebar">
                  
            
                  <!-- Sidebar Menu -->
                  <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                    
                      <li class="nav-item has-treeview ">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-cart-plus"></i>
                          <p>
                            VENDAS
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link active">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Delivery</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Mesa</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Balcão</p>
                            </a>
                          </li>
                        </ul>
                      </li>

                      <li class="nav-item has-treeview ">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-cart-plus"></i>
                          <p>
                            PRODUTOS
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="./index.html" class="nav-link active">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Produtos</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Categorias</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{route('setores.all')}}" class="nav-link">
                              <i class="far fa-circle nav-icon w3-text-teal"></i>
                              <p>Setores</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                            Widgets
                            <span class="right badge badge-danger">New</span>
                          </p>
                        </a>
                      </li>
                             
                     
                      
                      <li class="nav-header">MISCELLANEOUS</li>
                      <li class="nav-item">
                        <a href="https://adminlte.io/docs/3.0" class="nav-link">
                          <i class="nav-icon fas fa-file"></i>
                          <p>Documentation</p>
                        </a>
                      </li>
                      <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                      
                      
                      
                      <li class="nav-header">LABELS</li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="nav-icon far fa-circle text-danger"></i>
                          <p class="text">Important</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="nav-icon far fa-circle text-warning"></i>
                          <p>Warning</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="nav-icon far fa-circle text-info"></i>
                          <p>Informational</p>
                        </a>
                      </li>
                    </ul>
                  </nav>
                  <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
              </aside>
            
              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                
                <!-- /.content-header -->
            
                <!-- Main content -->
                <section class="content">
                  <div class="container-fluid">
                   
                        <main>
                            {{ $slot }}
                        </main>
                      
                     
                    </div>
                    <!-- /.row (main row) -->
                  </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->
              <footer class="main-footer">
                <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                  <b>Version</b> 3.0.5
                </div>
              </footer>
            
              <!-- Control Sidebar -->
              <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
              </aside>
              <!-- /.control-sidebar -->
            </div>
            <!-- ./wrapper -->
            
            <!-- jQuery -->
            <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="{{asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
              $.widget.bridge('uibutton', $.ui.button)
            </script>
            <!-- Bootstrap 4 -->
            <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <!-- ChartJS -->
            <script src="{{asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
            <!-- Sparkline -->
            <script src="{{asset('admin/plugins/sparklines/sparkline.js')}}"></script>
            <!-- JQVMap -->
            <script src="{{asset('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
            <script src="{{asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
            <!-- jQuery Knob Chart -->
            <script src="{{asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
            <!-- daterangepicker -->
            <script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
            <script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="{{asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
            <!-- Summernote -->
            <script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
            <!-- overlayScrollbars -->
            <script src="{{asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
            <!-- AdminLTE App -->
            <script src="{{asset('admin/dist/js/adminlte.js')}}"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="{{asset('admin/dist/js/pages/dashboard.js')}}"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="{{asset('admin/dist/js/demo.js')}}"></script>
            </body>

        

        @stack('modals')

        @livewireScripts
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
</html>
