<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ $title }}</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/customAdmin.css')}}" rel="stylesheet">
    	@yield('styles')

</head>
<body class="pace-done">
  <div class="pace  pace-inactive">
    <div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99">
      <div class="pace-progress-inner">
      </div>
    </div>
    <div class="pace-activity">
    </div>
</div>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img class="img-circle" alt="image" src="#" width="60px">
                             </span>
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Usuario</strong>
                            </span> <span class="text-muted text-xs block">{{session('rol')}} <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="#">Perfil</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            SG-SST
                        </div>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-star"></i> <span class="nav-label">Empresa</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-file-text-o"></i> <span class="nav-label">Noticia  </span ><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                          <li><a href="#">Crear<i class="fa fa-edit"></i></a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>

        <div class="gray-bg dashbard-1" id="page-wrapper" style="min-height: 442px;">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0; background-color:#2f4050;">

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <h4><span class="m-r-sm text-muted welcome-message">{{session('usuario')}}</span></h4>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-sign-out"></i> Cerrar sesión.
                    </a>
                </li>
            </ul>

        </nav>
      </div>

      {{-- Content --}}
      <script src="{{asset('js/vendor.js')}}" charset="utf-8"></script>
      <script src="{{asset('js/jquery.metisMenu.js')}}" charset="utf-8"></script>
      <script src="{{asset('js/bearws.js')}}" charset="utf-8"></script>
      @yield('scripts')
      @yield('content')
</body>
</html>
