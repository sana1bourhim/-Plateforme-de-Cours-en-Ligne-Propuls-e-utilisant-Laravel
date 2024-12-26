<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Espace Professeur</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href={{asset('dashboard/plugins/images/favicon.png')}}>
    <!-- Custom CSS -->
    <link href={{asset('dashboard/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet')}}>
    <link rel="stylesheet" href={{asset('dashboard/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}>
    <!-- Custom CSS -->
    <link href={{asset('dashboard/css/style.min.css')}} rel="stylesheet">
    <link href={{asset('dashboard/css/style.css')}} rel="stylesheet">
    <script>
        // Récupération de l'élément d'image de profil et du menu déroulant
        const profilePic = document.querySelector('.profile-pic');
        const dropdownMenu = profilePic.nextElementSibling;
    
        // Gestionnaire de clic pour afficher/masquer le menu déroulant
        profilePic.addEventListener('click', (event) => {
            event.preventDefault(); // Empêche le lien de rediriger
    
            // Bascule de la classe 'show' pour afficher/masquer le menu déroulant
            dropdownMenu.classList.toggle('show');
        });
    
        // Ferme le menu déroulant si l'utilisateur clique en dehors de celui-ci
        window.addEventListener('click', (event) => {
            if (!profilePic.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    </script>
    
    
    
    
    
    
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.html">
                        <!-- Logo icon -->
                        
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        
                            <!-- dark Logo text -->
                            <img class="imglogo" src={{asset('assets\img\TechMentorLabs.jpg')}} />
                      
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href={{asset('dashboard/javascript:void(0)')}}><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block ">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <div class="d-flex flex-column ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  href="#">
                                <img src="https://cdn.icon-icons.com/icons2/2556/PNG/512/profile_picture_user_icon_153075.png" alt="user-img" width="36"
                                    class="img-circle">
                                
                                <span class="text-body font-medium pl-7 ">{{ auth()->user()->name }}</span></svg>
                            
                            </a>
                          
                                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                       <a href="/formateur" class="dropdown-item upper">Profile</a>
                                          
                                            <form id="logout-form" class="login100-form validate-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            {{-- <div class="container-login100-form-btn">
                                                <div class="wrap-login100-form-btn">
                                                    <div class="dropdown-item upper"> --}}
                                                    {{-- <button type="submit" class="login100-form-btn "> --}}
                                                   <button    class="dropdown-item ">     {{ __('Logged out') }}{{-- </div>
                                                    {{-- </button> --}}</button>
                                              {{--   </div>
                                            <div> --}} 
                                        </form>
                                      </div>
                                    </div>
                                    
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="home"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/formateur"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                             
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route("homecategory") }}"  >
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Categories</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route("homecourse") }}">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <span class="hide-menu">Courses</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route("homescategory") }}"  >
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Sous categories</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route("homedidacticiel") }}"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Didacticiels</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route("homesection") }}">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Sections</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route("homechapitre") }}">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Chapitres</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="404.html"
                                aria-expanded="false">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Error 404</span>
                            </a>
                        </li> --}}
                       {{--  <li class="text-center p-20 upgrade-btn">
                            <a href="https://www.wrappixel.com/templates/ampleadmin/"
                                class="btn d-grid btn-danger text-white" target="_blank">
                                Upgrade to Pro</a>
                        </li> --}}
                    </ul>
    
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Welcome Back Instructor!</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                           {{--  <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Upgrade
                                to Pro</a> --}}
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src={{asset('dashboard/plugins/bower_components/jquery/dist/jquery.min.js')}}></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src={{asset('dashboard/bootstrap/dist/js/bootstrap.bundle.min.js')}}></script>
    <script src={{asset('dashboard/js/app-style-switcher.js')}}></script>
    <script src={{asset('dashboard/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}></script>
    <!--Wave Effects -->
    <script src={{asset('dashboard/js/waves.js')}}></script>
    <!--Menu sidebar -->
    <script src={{asset('dashboard/js/sidebarmenu.js')}}></script>
    <!--Custom JavaScript -->
    <script src={{asset('dashboard/js/custom.js')}}></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src={{asset('dashboard/plugins/bower_components/chartist/dist/chartist.min.js')}}></script>
    <script src={{asset('dashboard/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}></script>
    <script src={{asset('dashboard/js/pages/dashboards/dashboard1.js')}}></script>
</body>

</html>