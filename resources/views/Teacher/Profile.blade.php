
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('AdminAssets/assets/images/LOGO.pnj') }}">
    <title>Teacher's profile</title>
    <!-- Custom CSS -->
    <link href="{{ ('AdminAssets/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <link href="{{ asset ('AdminAssets/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('AdminAssets/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('AdminAssets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-XXXX" crossorigin="anonymous" />
    <!-- Custom CSS -->
    <link href="{{ asset('AdminAssets/dist/css/style.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>


.container {
    max-width: 800px;
    margin: auto;
    background: #fff;
    padding: 40px;
    border-radius: 8px;
    margin-left: auto; /* Décalage vers la droite */
    margin-right: auto; /* Décalage vers la droite */
}

.profile-section {
    margin-bottom: 40px;
}

.profile-info {
    margin-bottom: 20px;
}

.profile-info label {
    font-weight: bold;
    color: #666;
    display: block;
    margin-bottom: 5px;
}

.profile-info span {
    color: #333;
    display: block;
}

.profile-info span.email {
    color: #007bff;
    text-decoration: none;
}

.profile-info span.email:hover {
    text-decoration: underline;
}

.profile-picture {
    text-align: center;
    float: left; /* Aligner à gauche */
    margin-right: 20px; /* Ajouter de l'espace à droite de l'image */
}

.profile-picture img {
    width: 50px; /* Réduire la taille de l'image */
    height: 50px; /* Réduire la taille de l'image */
    border-radius: 50%;
    border: 4px solid #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.name {
    float: left; /* Aligner à gauche */
    margin-right: 20px; /* Ajouter de l'espace entre le nom et le prénom */
}

</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
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
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="{{ asset ('AdminAssets/assets/images/LOGO.png') }}" alt="logo saghroun" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="{{ asset('AdminAssets/assets/images/LOGO.png') }}" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                           
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- Notification -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                                id="bell" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span><i data-feather="bell" class="svg-icon"></i></span>
                                <span class="badge badge-primary notify-no rounded-circle">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="message-center notifications position-relative">
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <div class="btn btn-danger rounded-circle btn-circle"><i
                                                        data-feather="airplay" class="text-white"></i></div>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Luanch Admin</h6>
                                                    <span class="font-12 text-nowrap d-block text-muted">Aid fiter </span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success text-white rounded-circle btn-circle"><i
                                                        data-feather="calendar" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Event today</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">Just
                                                        a reminder that you have event</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-info rounded-circle btn-circle"><i
                                                        data-feather="settings" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Settings</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">You
                                                        can customize this template
                                                        as you want</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-primary rounded-circle btn-circle"><i
                                                        data-feather="box" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Pavan kumar</h6> <span
                                                        class="font-12 text-nowrap d-block text-muted">Just
                                                        see the my admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link pt-3 text-center text-dark" href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="settings" class="svg-icon"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                     
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                      

<form id="searchForm">
    <div class="customize-input">
        <input id="searchInput" class="form-control custom-shadow custom-radius border-0 bg-white"
            type="search" placeholder="Search..." aria-label="Search">
        <i id="searchIcon" class="form-control-icon" data-feather="search"></i>
    </div>
</form>

<div id="searchResults"></div>

                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset ('AdminAssets/assets/images/users/profile-pic.jpg') }}" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark">Admin</span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                               
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Inbox</a>
                              
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                           
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
<aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('Admin.index') }}"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu"> Saghroun</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Saghroun-News</span></li>

                    
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-chat.html"
                                aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                                    class="hide-menu">Complaint</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('event.consult') }}" 
                                aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                    class="hide-menu">Events</span></a></li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Humain resource</span></li>
                        <li class="sidebar-item">
    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false" onclick="toggleDropdown(event)">
        <i data-feather="file-text" class="feather-icon"></i>
        <span class="hide-menu">Teachers</span>
    </a>
    <ul id="educatricesDropdown" aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
            <a href="{{ route('ajouter-educatrice') }}"class="sidebar-link">
                <span class="hide-menu">Add teacher</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('show-educatrices') }}" class="sidebar-link">
                <span class="hide-menu">Manage teacher's</span>
            </a>
        </li>
    </ul>
</li>
<li class="sidebar-item">
    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false" onclick="toggleDropdown(event)">
    <i class="fas fa-child"></i>
        <span class="hide-menu">Infants</span>
    </a>
    <ul id="EnfantDropdown" aria-expanded="false" class="collapse first-level">
       
        <li class="sidebar-item">
            <a href="{{ route('show-enfant') }}" class="sidebar-link">
                <span class="hide-menu">Manage infants</span>
            </a>
        </li>
    </ul>
</li>
<li class="sidebar-item">
    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false" onclick="toggleDropdown(event)">
    <i class="fas fa-utensils"></i>

        <span class="hide-menu">Chef</span>
    </a>
    <ul id="ChefDropdown" aria-expanded="false" class="collapse first-level">
       
        <li class="sidebar-item">
            <a href="{{ route('show-chef') }}"  class="sidebar-link">
                <span class="hide-menu">Consult chef</span>
            </a>
        </li>
    <li class="sidebar-item">
                                        @php
        $gerantExists = App\Http\Controllers\AdminController::checkGerantExists();
        @endphp

        @if ($gerantExists)
            <div class="alert alert-danger" role="alert">
                Un gérant de cantine existe déjà dans la base de données.
            </div>
        @else
            <a href="{{ route('ajouter-chef') }}" class="sidebar-link">
                <span class="hide-menu"> Add chef </span>
            </a>
        @endif    
    </li>
    </ul>
</li>    
     


                        
                    
                  

                       
                      
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Other</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="docs/docs.html"
                                aria-expanded="false"><i data-feather="edit-3" class="feather-icon"></i><span
                                    class="hide-menu">Documentation</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('admin.logout') }}" >
    <i data-feather="log-out" class="feather-icon"></i>
    <span class="hide-menu">Logout</span>
    </a>

    </li>
                        </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
</aside>
        
   
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Welcome  Admin!</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html">Saghroun management</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
    <div class="customize-input float-right">
        <span id="current-date" class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius"></span>
    </div>
</div>
<script>
    // Fonction pour générer les options de date
   // Fonction pour obtenir la date d'aujourd'hui et l'afficher dans le format souhaité
   function displayCurrentDate() {
        var currentDate = new Date();
        var options = { month: 'long', day: 'numeric' };
        var formattedDate = currentDate.toLocaleDateString('fr-FR', options);
        document.getElementById('current-date').textContent = formattedDate;
    }
    
    // Appel de la fonction au chargement de la page
    window.onload = displayCurrentDate;
    
    // Appel de la fonction au chargement de la page
    window.onload = generateDateOptions;
</script>

                </div>
                
                </div>
            </div>
 

     
           
            <!-- ============================================================== -->
        </div>
        <div class="container">
    <div class="row">
        <!-- Informations personnelles -->
        <div class="col-md-6">
            <h6>Personal informations</h6>
            <div class="profile-section">
                <div class="profile-picture">
                    <img src="{{ asset('AdminAssets\assets\images\profile-circle-svgrepo-com.svg') }}" class="rounded-circle" alt="Profile Picture">
                </div>
                <div class="profile-info">
                    <label>First name and lastname:</label>
                    <span>{{ $educatrice->lastname }} {{ $educatrice->firstname }}</span>
                </div>
                <div class="profile-info " style="margin-left: 65px;">
                    <label>Date of birth</label>
                    <span>{{ $educatrice->dateofbirth }}</span>
                </div>
                <div class="profile-info " style="margin-left: 65px;">
                    <label>Phone number</label>
                    <span>{{ $educatrice->phone }}</span>
                </div>
                <div class="profile-info " style="margin-left: 65px;">
                    <label>Email:</label>
                    <span>{{ $educatrice->email }}</span>
                </div>
            </div>
        </div>
        <!-- Informations sur le jardin d'enfants -->
        <div class="col-md-6">
            <h6>Profesionnal information:</h6>
            <div class="profile-section">
                <div class="profile-info">
                    <label>Specification:</label>
                    <span>{{ $educatrice->type_degree }}</span>
                </div>
               
                <div class="profile-info">
                    <label>Date of hire:</label>
                    <span>{{ $educatrice->created_at->format('d/m/Y') }}</span>
                </div>
                <div class="profile-info">
                    <label>Salary:</label>
                    <span>{{ $educatrice->salary }}</span>
                </div>
                <!-- Ajoutez d'autres informations relatives au jardin d'enfants au besoin -->
            </div>
        </div>
    </div>
</div>
  
<script>
     $(document).ready(function() {
        $('.has-arrow').click(function() {
            $(this).toggleClass('active');
            $(this).next('ul').toggleClass('collapse');
        });
    });
</script>





<script src="{{ asset('AdminAssets/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src=" {{ asset('AdminAssets/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('AdminAssets/dist/js/feather.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('AdminAssets/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <script src="{{ asset('AdminAssets/assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/assets/extra-libs/c3/c3.min.js ') }}"></script>
    <script src="{{ asset('AdminAssets/assets/libs/chartist/dist/chartist.min.js ') }}"></script>
    <script src="{{ asset('AdminAssets/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js ') }}"></script>
    <script src="{{ asset('AdminAssets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js ') }}"></script>
    <script src="{{ asset('AdminAssets/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js' ) }}"></script>
    <script src="{{ asset('AdminAssets/dist/js/pages/dashboards/dashboard1.min.js ') }}"></script>
</body>

</html>	