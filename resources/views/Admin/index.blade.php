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
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('AdminAssets/assets/images/LOGO.jpg') }}">
    <title> Admin dashboard</title>
    <!-- Custom CSS -->
    <link href="{{ asset ('AdminAssets/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ ('AdminAssets/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('AdminAssets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-XXXX" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Custom CSS -->
    <link href="{{ asset('AdminAssets/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
   
    <div class="preloader">
  
    <div class="lds-ripple">
        <div class="lds-pos">
          
        </div>
    </div>
</div>

    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    
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
                 
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
          
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
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search..." aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
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
                            
            </nav>
        </header>
       
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.html"
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
            The chef already exists in database
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
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
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
                                    <li class="breadcrumb-item"><a href="index.html">Saghroun statistics</a>
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
            <div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->
                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium"><span id="nb">Loading...</span></h2>

                                        <span
                                            class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">+1.33%</span>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Enfants inscrits</h6>
                                </div>
                                <script>
    // Faire une requête AJAX pour récupérer le revenu total
    fetch('/NbEnfants')
        .then(response => response.json())
        .then(data => {
            // Mettre à jour la valeur du revenu total dans le HTML
            document.getElementById('nb').textContent = data.nb_enfants;
        })
        .catch(error => console.error('Erreur lors de la récupération du nombre total des enfants:', error));
</script>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                            class="set-doller"></sup><span id="revenu-value">Loading...</span> dt</h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Revenu de ce mois </h6>
                                </div>
                                <script>
    // Faire une requête AJAX pour récupérer le revenu total
    fetch('/revenu')
        .then(response => response.json())
        .then(data => {
            // Mettre à jour la valeur du revenu total dans le HTML
            document.getElementById('revenu-value').textContent = data.revenu_total;
        })
        .catch(error => console.error('Erreur lors de la récupération du revenu total:', error));
</script>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i class="fas fa-money-bill-alt"></i>
</span>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 font-weight-medium"> <span id="CountEvent">Loading...</span></h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">  Events</h6>
                                 
                                    <script>
                                // Faire une requête AJAX pour récupérer le revenu total
                                fetch('/CountEvents')
                                .then(response => response.json())
                                .then(data => {
                                // Mettre à jour la valeur du revenu total dans le HTML
                                 document.getElementById('CountEvent').textContent = data.count;
                                  })
                                .catch(error => console.error('Erreur lors de la récupération :', error));
                                </script>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Infants</h4>
                                <div id="campaign-v2" class="mt-2" style="height:283px; width:100%;"></div>
                                <ul class="list-style-none mb-0">
                                    <li>
                                        <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                        <span class="text-muted">Babies</span>
                                        <span class="text-dark float-right font-weight-medium">2</span>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                        <span class="text-muted">Intermediate</span>
                                        <span class="text-dark float-right font-weight-medium">1</span>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-cyan font-10 mr-2"></i>
                                        <span class="text-muted">Toddlers</span>
                                        <span class="text-dark float-right font-weight-medium">0</span>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-blue font-10 mr-2"></i>
                                        <span class="text-muted">Preschooler</span>
                                        <span class="text-dark float-right font-weight-medium">0</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Net Income /year</h4>
                                <div class="net-income mt-4 position-relative" style="height:294px;"></div>
                                <ul class="list-inline text-center mt-5 mb-2">
                                    <li class="list-inline-item text-muted font-italic">Revenu de ce mois</li>
                                </ul>
                            </div>
                        </div>
                    </div>
          
                
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Dépenses mensuelle</h4>
                               <h6> <span id="TotalSalaireEduca">Loading...</span> Salaire des éducatrices</h6>
                               <script>
                                // Faire une requête AJAX pour récupérer le revenu total
                                fetch('/calculerSalairesEducatrices')
                                .then(response => response.json())
                                .then(data => {
                                // Mettre à jour la valeur du revenu total dans le HTML
                                 document.getElementById('TotalSalaireEduca').textContent = data.salaire_total;
                                  })
                                .catch(error => console.error('Erreur lors de la récupération :', error));
                                </script>
                               <h6> <span id="SalaireGerant">Loading...</span> Salaire des éducatrices</h6>
                               <script>
                                // Faire une requête AJAX pour récupérer le revenu total
                                fetch('/calculerSalaireGerant')
                                .then(response => response.json())
                                .then(data => {
                                // Mettre à jour la valeur du revenu total dans le HTML
                                 document.getElementById('SalaireGerant').textContent = data.salaire_gerant;
                                  })
                                .catch(error => console.error('Erreur lors de la récupération :', error));
                                </script>
                               <h6> <span id="Total">Loading...</span> Salaire des éducatrices</h6>
                               <script>
        // Faire une requête AJAX pour récupérer les données des dépenses
        fetch('/calculerDepenses')
            .then(response => response.json())
            .then(data => {
                // Mettre à jour les valeurs dans le HTML
                document.getElementById('TotalSalaireEduca').textContent = data.salaire_total;
                document.getElementById('SalaireGerant').textContent = data.salaire_gerant;
                document.getElementById('Total').textContent = data.depenses_totales;

                // Vérifier si les dépenses sont déficitaires ou non
                const depensesTotales = parseFloat(data.depenses_totales);
                const revenusTotaux = parseFloat(data.salaire_total) + parseFloat(data.salaire_gerant);
                const estDeficitaire = depensesTotales > revenusTotaux;

                // Mettre à jour le texte indiquant si les dépenses sont déficitaires ou non
                const totalElement = document.getElementById('Total');
                const deficitIndicator = document.createElement('span');
                deficitIndicator.textContent = estDeficitaire ? ' (Déficitaire)' : ' (Non déficitaire)';
                totalElement.appendChild(deficitIndicator);
            })
            .catch(error => console.error('Erreur lors de la récupération :', error));
    </script>
                                </div>
                                
                              
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-6 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <h4 class="card-title mb-0">Earning Statistics</h4>
                                    <div class="ml-auto">
                                        <div class="dropdown sub-dropdown">
                                            <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                                id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                <a class="dropdown-item" href="#">Insert</a>
                                                <a class="dropdown-item" href="#">Update</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-4 mb-5">
                                    <div class="stats ct-charts position-relative" style="height: 315px;"></div>
                                </div>
                                <ul class="list-inline text-center mt-4 mb-0">
                                    <li class="list-inline-item text-muted font-italic">Earnings for this month</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Activity</h4>
                                <div class="mt-4 activity">
                                    <div class="d-flex align-items-start border-left-line pb-3">
                                        <div>
                                            <a href="javascript:void(0)" class="btn btn-info btn-circle mb-2 btn-item">
                                               
                                            </a>
                                        </div>
                                        <div class="ml-3 mt-2">
                                            <h5 class="text-dark font-weight-medium mb-2">Traditional clothing day!</h5>
                                            <p class="font-14 mb-2 text-muted">Wearing traditional tunisian clothes for each member <br> 16 mars.
                                            </p>
                                            <span class="font-weight-light font-14 text-muted">10 Minutes Ago</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start border-left-line pb-3">
                                        <div>
                                            <a href="javascript:void(0)"
                                                class="btn btn-danger btn-circle mb-2 btn-item">
                                                <i data-feather="message-square"></i>
                                            </a>
                                        </div>
                                        <div class="ml-3 mt-2">
                                            <h5 class="text-dark font-weight-medium mb-2">New Support Ticket</h5>
                                            <p class="font-14 mb-2 text-muted">Richardson just create support <br>
                                                ticket</p>
                                            <span class="font-weight-light font-14 text-muted">25 Minutes Ago</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start border-left-line">
                                        <div>
                                            <a href="javascript:void(0)" class="btn btn-cyan btn-circle mb-2 btn-item">
                                                <i data-feather="bell"></i>
                                            </a>
                                        </div>
                                        <div class="ml-3 mt-2">
                                            <h5 class="text-dark font-weight-medium mb-2">Notification Pending Order!
                                            </h5>
                                            <p class="font-14 mb-2 text-muted">One Pending order from Ryne <br> Doe</p>
                                            <span class="font-weight-light font-14 mb-1 d-block text-muted">2 Hours
                                                Ago</span>
                                            <a href="javascript:void(0)" class="font-14 border-bottom pb-1 border-info">Load More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
        </div>
      
        
    </div>
    

   
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