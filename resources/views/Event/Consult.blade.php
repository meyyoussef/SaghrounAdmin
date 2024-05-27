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
    <title>Consult-Events</title>
    <!-- Custom CSS -->
    <link href="{{ asset ('AdminAssets/assets/libs/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
    <link href="{{ asset ('AdminAssets/dist/css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
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
                          
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="{{ asset ('AdminAssets/assets/images/LOGO.png') }}" alt="logo saghroun" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="{{ asset('AdminAssets/assets/images/LOGO.png') }}" alt="homepage" class="light-logo" />
                            </b>
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
                                                    <span class="font-12 text-nowrap d-block text-muted">Just see
                                                        the my new
                                                        admin!</span>
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
                                            type="search" placeholder="Search" aria-label="Search">
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Calendar</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Saghroun</li>
                                    <li class="breadcrumb-item text-muted" aria-current="page">Events</li>
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
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="">
                    <div class="row">
                        <div class="col-lg-3 border-right pr-0">
                            <div class="card-body border-bottom">
                                <h4 class="card-title mt-2">Drag & Drop Event</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="calendar-events" data-events-route="{{ route('events.all') }}" class="">
                                        <div class="calendar-events mb-3" data-class="bg-info"><i
                                                                class="fa fa-circle text-info mr-2"></i>Event One</div>
                                                        <div class="calendar-events mb-3" data-class="bg-success"><i
                                                                class="fa fa-circle text-success mr-2"></i> Event Two
                                                        </div>
                                                        <div class="calendar-events mb-3" data-class="bg-danger"><i
                                                                class="fa fa-circle text-danger mr-2"></i>Event Three
                                                        </div>
                                                        <div class="calendar-events mb-3" data-class="bg-warning"><i
                                                                class="fa fa-circle text-warning mr-2"></i>Event Four
                                                        </div>
                                                    </div>
                                        
                                        <!-- checkbox -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="drop-remove">
                                            <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card-body b-l calender-sidebar">
                                <div id="calendar"></div> <!-- Calendrier sera rendu ici -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $.ajax({
        url: "{{ route('events.all') }}",
        type: 'GET',
        success: function(response) {
            console.log(response); // Affiche les données des événements dans la console
            // Initialise le calendrier avec les événements récupérés
            $('#calendar').fullCalendar({
                defaultView: 'month',
                handleWindowResize: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                events: response.events, // Utilise les événements récupérés
                editable: true,
                droppable: true,
                eventLimit: true,
                selectable: true,
                drop: function(date) { onDrop($(this), date); },
                select: function(start, end, allDay) { onSelect(start, end, allDay); },
                eventClick: function(calEvent, jsEvent, view) { onEventClick(calEvent, jsEvent, view); },
                eventRender: function(event, element) {
                    // Utilise la fonction getColorForEvent pour obtenir la couleur de l'événement
                    var color = getColorForEvent(response.events, event);
                    // Applique la couleur au fond de l'élément de l'événement
                    element.css('background-color', color);
                }
            });
        },
        error: function(xhr, status, error) {
            console.error(error); // Affiche une erreur dans la console en cas d'échec de la requête
        }
    });
});

// Fonction pour obtenir une couleur en fonction du titre de l'événement
function getColorForEvent(events, event) {
    // Tableau de couleurs prédéfinies
    var colors = ['blue', 'green', 'red', 'yellow', 'orange', 'purple', 'pink', 'brown', 'teal', 'maroon'];
    
    // Trouver l'index de l'événement dans la liste des événements
    var index = events.findIndex(function(item) {
        return item.title === event.title;
    });

    // Utiliser l'index pour sélectionner une couleur dans le tableau de couleurs
    if (index !== -1) {
        return colors[index % colors.length];
    } else {
        return 'gray'; // Couleur par défaut si l'événement n'est pas trouvé
    }
}


</script>



            
          
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
    <script src="{{ asset ('AdminAssets/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset ('AdminAssets/assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js') }}"></script>
    <script src="{{ asset ('AdminAssets/assets/extra-libs/taskboard/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset ('AdminAssets/assets/libs/popper.js/dist/umd/popper.min.js ') }}"></script>
    <script src="{{ asset ('AdminAssets/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
    <script src="{{ asset ('AdminAssets/dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset ('AdminAssets/dist/js/feather.min.js') }}"></script>
    <script src="{{ asset ('AdminAssets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset ('AdminAssets/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset ('AdminAssets/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <script src="{{ asset ('AdminAssets/assets/libs/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset ('AdminAssets/assets/libs/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset ('AdminAssets/dist/js/pages/calendar/cal-init.js') }}"></script>
</body>

</html>