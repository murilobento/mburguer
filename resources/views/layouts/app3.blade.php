<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title') - MBurguer</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{asset('/images/favicon.ico')}}">

    <!-- Dropzone css -->
    <link href="{{asset('/plugins/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">

    <link href="{{asset('/plugins/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

    @guest
    @yield('content')
    @else

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="ion-close"></i>
            </button>

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="{{url('/')}}" class="logo"><i class="fas fa-hamburger"></i> BURGUER</a>
                </div>
            </div>

            <div class="sidebar-inner slimscrollleft">

                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Menu Principal</li>

                        <li>
                            <a href="{{ url('/order/add') }}" class="waves-effect">
                                <i class="mdi mdi-cart"></i>
                                <span> Abrir Pedido </span>
                            </a>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-plus-circle"></i>
                                <span> Cadastros </span> <span class="float-right"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('burguer.index') }}">Burguers</a></li>
                                <li><a href="{{ route('extra.index') }}">Extras</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-repeat"></i> <span>
                                    Movimentação </span> <span class="float-right"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-cards.html">Cards</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-line"></i><span>
                                    Relatórios </span> <span class="float-right"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="charts-morris.html">Morris Chart</a></li>
                                <li><a href="charts-chartist.html">Chartist Chart</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-inline float-right mb-0">

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user"
                                    data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <i class="text-white">Logado com: {{ Auth::user()->name }}</i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <a class="dropdown-item" href=""><i
                                            class="mdi mdi-account-circle m-r-5 text-muted"></i> Meu Perfil</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-settings m-r-5 text-muted"></i>
                                        Configurações</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                            class="mdi mdi-logout m-r-5 text-muted"></i>
                                        {{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left waves-light waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                        </ul>

                        <div class="clearfix"></div>

                    </nav>

                </div>
                <!-- Top Bar End -->

                @yield('content')

            </div> <!-- content -->
            <footer class="footer">
                © 2020 mb.
            </footer>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->

    @stack('script')

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- jQuery  -->
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/popper.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/modernizr.min.js')}}"></script>
    <script src="{{asset('/js/detect.js')}}"></script>
    <script src="{{asset('/js/fastclick.js')}}"></script>
    <script src="{{asset('/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('/js/jquery.blockUI.js')}}"></script>
    <script src="{{asset('/js/waves.js')}}"></script>
    <script src="{{asset('/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('/js/jquery.scrollTo.min.js')}}"></script>

    <!-- Dropzone js -->
    <script src="{{asset('/plugins/dropzone/dist/dropzone.js')}}"></script>
    <script src="{{asset('/plugins/dropify/js/dropify.min.js')}}"></script>

    <!-- Magnific popup -->
    <script src="{{asset('/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('/pages/lightbox.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('/js/app.js')}}"></script>
    
    @endguest
</body>

</html>