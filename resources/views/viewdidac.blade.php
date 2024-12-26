
@vite('resources/css/app.css')
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
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
                            <a class="profile-pic nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" color="#989898" class="h-10 w-10 " viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                
                                <span class="text-body font-medium pl-7 ">{{ auth()->user()->name }}</span></svg>
                            </a>
                                    <div class="dropdown-menu mr-6" aria-labelledby="navbarDropdown">
                                       <a href="team.html" class="dropdown-item upper">Profile</a>
                                          
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
        {{-- <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <span class="hide-menu sidebar-link waves-effect waves-dark sidebar-link">Titre Didacticiel</span>
                        </li>
                        <!-- Chapitres (Replace with your actual chapter titles) -->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                                <span class="hide-menu">Chapitre 1: Introduction</span>
                            </a>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                                <span class="hide-menu">Section 1: A propos du cours </span>
                                </a> </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                                    <span class="hide-menu">Section 1: A propos du cours </span>
                                    </a> </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                                        <span class="hide-menu">Section 1: A propos du cours </span>
                                        </a> </li>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                                <span class="hide-menu">Chapitre 2: Suite</span>
                            </a>
                        </li>
                        <!-- End of Chapitres -->
                    </ul>
                </nav>
            </div>
        </aside> --}}
        <!-- Titre du didacticiel -->
          
            <aside class="left-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <!-- User Profile-->

                            <li class=" ml-3  text-black pt-2">
                                <span class="">
                                     {{$didacticiel->titre }} 
                                  

                                </span>
                            </li>
                            
                            <!-- Chapitres (Replace with your actual chapter titles) -->
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">

                                    <span class="hide-menu chapter text-" >

                                        @php
                                    
                                                $chapitres = App\Models\Chapitre::where('didacticiel_id', $didacticiel->id)->get();
                                                // Affichez la liste des chapitres pour ce didacticiel
                                                foreach ($chapitres as $chapitre) {

                                                    echo '<br>Chapitre'.$chapitre->ordre .': ' .$chapitre->titre . '</br>';

                                                    
                                                    $sections = App\Models\Section::where('chapitre_id', $chapitre->ID_chap)->get();
                                                        
                                                        foreach ($sections as $section) {
                                                            // Affichez le titre de la section
                                                            echo '<h5><br>Section ' .$section->ordre.': '. $section->titre . '</br></h5>';

                                                            
                                                           $cours = App\Models\Element::where('id_section', $section->id)->get();

                                                        foreach ($cours as $cour) {
                                                            // Accédez au modèle Cours correspondant à cet élément
                                                            $course = App\Models\Cours::find($cour->id_cours);

                                                            if ($course) {
                                                                echo '<div style="margin-left: 20px;"><a href="/viewcours/' . $course->ID_cours . '">' . $course->titre . '</a></div>';
                        }                                                            }

            
            
                        
                            
                    }}
                                    
                                    @endphp
                                    </span>
                                </a>
                            </li>
                            
                            <!-- End of Chapitres -->
                        </ul>
                    </nav>
                </div>
            </aside>
        
            
           
        

        
        
        {{-- <main>
            <section class="tutorial">
                <h2>Titre du Didacticiel</h2>
                <div id="chapitre1" class="chapters">
                    <h3>Chapitre 1: Introduction</h3>
                    <ul class="sections">
                        <li class="section">
                            <h4>Section 1: Vidéo 1</h4>
                            <ul class="courses">
                                <li class="course video">Cours 1: Vidéo 1.1</li>
                                <li class="course document">Cours 2: Document 1.2</li>
                            </ul>
                        </li>
                        <li class="section">
                            <h4>Section 2: Document 1</h4>
                            <ul class="courses">
                                <li class="course document">Cours 3: Document 1.1</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div id="chapitre2" class="chapters">
                    <h3>Chapitre 2: Suite</h3>
                    <ul class="sections">
                        <li class="section">
                            <h4>Section 1: Vidéo 2</h4>
                            <ul class="courses">
                                <li class="course video">Cours 4: Vidéo 2.1</li>
                            </ul>
                        </li>
                        <li class="section">
                            <h4>Section 2: Vidéo 3</h4>
                            <ul class="courses">
                                <li class="course video">Cours 5: Vidéo 3.1</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- Ajoutez d'autres didacticiels ici -->
        </main> --}}
        {{-- <main>
            <section class="tutorial">
                <h2>Titre du Didacticiel</h2>
                <ul class="chapters">
                    <li class="chapter">
                        <h3>Chapitre 1: Introduction</h3>
                        <ul class="sections">
                            <li class="section">
                                <h4>Section 1: Vidéo 1</h4>
                                <ul class="courses">
                                    <li class="course video">Cours 1: Vidéo 1.1</li>
                                    <li class="course document">Cours 2: Document 1.2</li>
                                </ul>
                            </li>
                            <li class="section">
                                <h4>Section 2: Document 1</h4>
                                <ul class="courses">
                                    <li class="course document">Cours 3: Document 1.1</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="chapter">
                        <h3>Chapitre 2: Suite</h3>
                        <ul class="sections">
                            <li class="section">
                                <h4>Section 1: Vidéo 2</h4>
                                <ul class="courses">
                                    <li class="course video">Cours 4: Vidéo 2.1</li>
                                </ul>
                            </li>
                            <li class="section">
                                <h4>Section 2: Vidéo 3</h4>
                                <ul class="courses">
                                    <li class="course video">Cours 5: Vidéo 3.1</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- Ajoutez d'autres didacticiels ici -->
        </main> --}}
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
                    
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Section de ce cours</a></li>
                            </ol>
                           {{--  <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Upgrade
                                to Pro</a> --}}
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="bg-white p-8 mb-2 mt-2 ml-[4%] rounded-md shadow-xl w-[93%] h-screen">
              <div class="flex justify-center  "  > 
                 <video width="640" class="rounded-md" height="360" controls>
                    <source src="chemin_de_la_video.mp4" type="video/mp4">
                    <!-- Vous pouvez ajouter d'autres sources pour différents formats de vidéo -->
                    <!-- Par exemple :
                    <source src="chemin_de_la_video.webm" type="video/webm">
                    -->
                    Votre navigateur ne supporte pas la lecture de vidéos.
                </video>
                
              </div>
              <div class="flex justify-end mt-10 " id="document-content" >
                {{-- <div class="mr-14 ml-10 mt-2">Ressources : </div> --}}
            
            <button class="bg-gray-300 flex justify-center hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded  items-center">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                <span class="text-sm">Download Ressources</span>
              </button></div>
            
        </div>

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
           
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © TechMentor Labs brought to you by 
          
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const chapters = document.querySelectorAll(".chapter");
    
            chapters.forEach(chapter => {
                const sections = chapter.querySelector(".sections");
                sections.style.display = "none"; // Masquer les sections initialement
    
                chapter.querySelector("h3").addEventListener("click", function () {
                    // Inverser la visibilité des sections au clic sur le chapitre
                    sections.style.display = sections.style.display === "none" ? "block" : "none";
                });
            });
        });
    </script>
    

    <script>
        // Supposons que vous avez une variable "typeDeCours" qui contient le type de cours (vidéo ou document)
        const typeDeCours = "video"; // Vous pouvez récupérer cette valeur à partir de votre base de données

        // Afficher le contenu en fonction du type de cours
        if (typeDeCours === "video") {
            document.getElementById("video-content").style.display = "block";
        } else if (typeDeCours === "document") {
            document.getElementById("document-content").style.display = "block";
        }
    </script>
    
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

