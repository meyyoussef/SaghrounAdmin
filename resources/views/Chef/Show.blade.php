
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
    <title>Chef management</title>
    <!-- Custom CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <link href="{{ asset ('AdminAssets/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('AdminAssets/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('AdminAssets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <link href="{{ ('AdminAssets/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">

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
.confirmation-dialog {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    border: 1px solid #ccc;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 9999;
    text-align: center; /* Centrer les éléments à l'intérieur de la boîte de dialogue */
}

.confirmation-dialog p {
    margin-bottom: 20px;
}

.confirmation-dialog button {
    padding: 10px 20px;
    margin-right: 10px;
    cursor: pointer;
}

.confirmation-dialog button.confirm {
    background-color: green;
    color: white;
}

.confirmation-dialog button.cancel {
    background-color: red;
    color: white;
}


.Tableau {
    color: #566787;
    font-family: 'Roboto', sans-serif;
    max-width: 100%; /* Utiliser la largeur maximale de l'écran */
    margin: 0; /* Réinitialiser les marges */
    padding: 20px; /* Ajouter un padding autour du tableau */
    box-sizing: border-box; /* Inclure les paddings et les bordures dans la largeur */
    margin-left: 250px;
}

.table-wrapper {
    width: 100%;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}

/* Autres styles restent inchangés */

.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-width: 100%;
}
.table-title h2 {
    margin: 8px 0 0;
    font-size: 22px;
}
.search-box {
    position: relative;        
    float: right;
}
.search-box input {
    height: 34px;
    border-radius: 20px;
    padding-left: 35px;
    border-color: #ddd;
    box-shadow: none;
}
.search-box input:focus {
    border-color: #3FBAE4;
}
.search-box i {
    color: #a0a5b1;
    position: absolute;
    font-size: 19px;
    top: 8px;
    left: 10px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table td:last-child {
    width: 130px;
}
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}
table.table td a.view {
    color: #03A9F4;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}    
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 95%;
    width: 30px;
    height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 30px !important;
    text-align: center;
    padding: 0;
}
.pagination li a:hover {
    color: #666;
}	
.pagination li.active a {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 6px;
    font-size: 95%;
} 
.toast {
        position: fixed;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
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
                <span class="hide-menu">Consult teacher</span>
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
            The chef already exists in the database!
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
                                <li class="breadcrumb-item">
    <span class="align-items-center d-flex">
        <i class="fas fa-home mr-1 align-self-center"></i> <!-- Icône de maison -->
        <span class="align-self-center">Saghroun management</span> <!-- Nom de la section -->
    </span>
  <span>></span>
    <span class="align-items-center d-flex">
        <span class="align-self-center">Chef</span> <!-- Nom de la page -->
    </span>
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
 
     
           
            <!-- ============================================================== -->
        </div>


<div class="Tableau">
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                        <h2>Chef <b>details</b></h2>
                        </div>
                        <div class="col-sm-4">
                            <div class="search-box">
                                <i class="material-icons">&#xE8B6;</i>
                                <input type="text" class="form-control" placeholder="Recherche&hellip;">
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <!-- <th>#</th> Retiré l'affichage de l'ID -->
                            <th>Name </th>
                            <th>Last name</th>
                         
                            <th>Salary</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($chef as $chef)
                    <tr>
                        <td>{{ $chef->firstname }}</td>
                        <td>{{ $chef->lastname }}</td>
                       
                        <td>{{ $chef->salary }}</td>
                        <td>{{ $chef->phone }}</td>
                        <td>{{ $chef->email }}</td>
                        <td>
                               <!-- Bouton de  consulter profile-->
                               <a href="{{ route('profile.Chef', ['id' => $chef->id]) }}" class="view" title="View" data-toggle="tooltip">
            <i class="material-icons">&#xE417;</i>
        </a>
        <a href="{{ route('edit.chef') }}" title="Edit" data-toggle="tooltip">
    <i class="material-icons">&#xE254;</i>
</a>



                            <!-- Bouton de suppression avec confirmation -->
                           <!-- Bouton de suppression avec confirmation -->
                           <a href="#" class="delete" title="Delete" data-toggle="tooltip" onclick="confirmDelete('{{ $chef->id }}', '{{ $chef->lastname }}')">
                                <i class="material-icons">&#xE872;</i>
                            </a>
                        </td>
                    </tr>
                    
                    <!-- Formulaire de suppression spécifique à l'éducatrice -->


                    @endforeach
                    </tbody>
                </table>
               <!-- Formulaire de suppression (en dehors de la boucle foreach) -->
              
                
                <form id="delete-form" action="{{ route('delete.chef') }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
              
              
                
            </div>  
        </div>
    </div>

</div>

<script>
 document.addEventListener('DOMContentLoaded', function() {
    var searchForm = document.getElementById('searchForm');
    var searchInput = document.getElementById('searchInput');
    var searchResults = document.getElementById('searchResults');

    searchForm.addEventListener('submit', function(event) {
        event.preventDefault();

        var query = searchInput.value;

        // Effectuer une requête AJAX vers la route de recherche
        fetch('/search?q=' + query)
            .then(response => response.json())
            .then(data => {
                // Mettre à jour la page avec les résultats de la recherche
                searchResults.innerHTML = ''; // Efface les résultats précédents

                if (data.length > 0) {
                    data.forEach(result => {
                        searchResults.innerHTML += '<p>' + result.name + '</p>'; // Remplacez 'name' par le nom de votre colonne
                    });
                } else {
                    searchResults.innerHTML = '<p>Aucun résultat trouvé.</p>';
                }
            })
            .catch(error => {
                console.error('Une erreur s\'est produite :', error);
            });
    });
});



function confirmDelete(nomComplet) {
    var confirmationDialog = document.createElement('div');
    confirmationDialog.className = 'confirmation-dialog';
    confirmationDialog.innerHTML = `
        <p>Are you sure you want to delete ?</p>
        <button class="confirm" onclick="deleteChef()">Confirm</button>
        <button class="cancel" onclick="closeDialog()">Cancel</button>
    `;
    document.body.appendChild(confirmationDialog);
}

    function closeDialog() {
        var confirmationDialog = document.querySelector('.confirmation-dialog');
        if (confirmationDialog) {
            confirmationDialog.remove();
        }
    }

    function deleteChef() {
    var deleteForm = document.getElementById('delete-form');
    deleteForm.submit();
}


    // Fonction pour afficher le toast
    function showToast(message) {
        // Créer un élément pour le toast
        var toast = document.createElement('div');
        toast.className = 'toast';
        toast.textContent = message;

        // Ajouter le toast à la page
        document.body.appendChild(toast);

        // Afficher le toast pendant 3 secondes
        setTimeout(function () {
            toast.style.opacity = '1';
        }, 100);

        // Masquer et supprimer le toast après 3 secondes
        setTimeout(function () {
            toast.style.opacity = '0';
            setTimeout(function () {
                document.body.removeChild(toast);
            }, 1000);
        }, 3000);
    }
</script>

<!-- Votre code HTML existant -->

<script>
     $(document).ready(function() {
        $('.has-arrow').click(function() {
            $(this).toggleClass('active');
            $(this).next('ul').toggleClass('collapse');
        });
    });
</script>


<script>

// Écoute les clics sur les boutons "Edit"
document.querySelectorAll('.edit').forEach(function(button) {
    button.addEventListener('click', function(event) {
        event.preventDefault();
        var educatrice = JSON.parse(button.dataset.info);
        fillEditForm(educatrice);
        
        // Récupérer l'ID de l'éducatrice depuis l'attribut personnalisé data-educatrice-id
        var educatriceId = button.dataset.educatriceId;
        console.log("ID de l'éducatrice :", educatriceId);

        // Modifier l'action du formulaire pour utiliser l'URL de mise à jour spécifique à cette éducatrice
        var updateUrl = document.getElementById('editEducatorForm').dataset.updateUrl.replace(':id', educatriceId);
        console.log("URL de mise à jour :", updateUrl);
        
        document.getElementById('educatriceId').textContent = "ID : " + educatriceId;
        document.getElementById('editEducatorForm').action = updateUrl;

        $('#editEducatorModal').modal('show'); // Affiche la boîte de dialogue modale
    });
});



// Fonction pour remplir le formulaire de modification avec les informations de l'éducatrice
function fillEditForm(educatrice) {
    document.getElementById('nom').value = educatrice.firstname;
    document.getElementById('prenom').value = educatrice.lastname;

    document.getElementById('salaire').value = educatrice.salary;
    document.getElementById('telephone').value = educatrice.phone;
    document.getElementById('email').value = educatrice.email;
    document.getElementById('Status').value = educatrice.Status;
    document.getElementById('gender').value = educatrice.gender;
    document.getElementById('level').value = educatrice.Level;
}
document.addEventListener('DOMContentLoaded', function() {
    // Placez ici le code JavaScript à exécuter une fois que le DOM est chargé

    // Ajoutez un écouteur d'événement au bouton "Enregistrer"
    document.getElementById('saveChangesBtn').addEventListener('click', function() {
        // Récupère les données modifiées depuis le formulaire
        var editedEducator = {
            nom: document.getElementById('nom').value,
            prenom: document.getElementById('prenom').value,
            telephone: document.getElementById('telephone').value,
            email: document.getElementById('email').value,
            gender: document.getElementById('gender').value,
            Status: document.getElementById('Status').value,
            level: document.getElementById('level').value,

            
            salaire: document.getElementById('salaire').value
        };

        // Récupérer l'URL de mise à jour depuis l'action du formulaire
        var updateUrl = document.getElementById('editEducatorForm').action;

        // Envoie les données modifiées au serveur via une requête AJAX
        $.ajax({
            url: updateUrl,
            method: 'PUT',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: editedEducator,
            success: function(response) {
                // Gérer la réponse du serveur, par exemple, afficher un message de succès
                console.log("Server response :", response);
                showToast("The teacher\'s information has been successfully updated.");
            },
            error: function(xhr, status, error) {
                // Gérer les erreurs, par exemple, afficher un message d'erreur
                console.error("Error during update :", error);
                showToast("An error occurred while updating teacher's information..");
            }
        });

        // Ferme la boîte de dialogue modale
        $('#editEducatorModal').modal('hide');
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