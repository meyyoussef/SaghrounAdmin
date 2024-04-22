<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('AdminAssets/assets/images/LOGO.jpg') }}">
    <title>Sghroun-Admin</title>    
    <!-- Custom CSS -->
    <link href="{{ asset('AdminAssets/dist/css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<!-- code pour le calendrier -->
<style>
     ::placeholder {
        font-size: 15px; /* Réglez la taille de la police selon vos besoins */
    }

                                            .datepicker-dropdown {
                                                border-radius: 0.25rem;
                                                border: 1px solid #ced4da;
                                                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
                                            }
                                
                                            .datepicker-dropdown.datepicker-orient-top:before {
                                                border-top-color: #fff;
                                            }
                                
                                            .datepicker-dropdown.datepicker-orient-bottom:before {
                                                border-bottom-color: #fff;
                                            }
                                
                                            .datepicker-dropdown.datepicker-orient-left:before {
                                                border-left-color: #fff;
                                            }
                                
                                            .datepicker-dropdown.datepicker-orient-right:before {
                                                border-right-color: #fff;
                                            }
                                
                                            .datepicker table {
                                                width: 100%;
                                                margin: 0;
                                                color: #495057;
                                            }
                                
                                            .datepicker table thead tr:first-child th {
                                                border-top: 0;
                                                font-weight: bold;
                                                color: #212529;
                                                background-color: #f8f9fa;
                                            }
                                
                                            .datepicker table thead tr:last-child th {
                                                border-bottom: 0;
                                            }
                                
                                            .datepicker table th,
                                            .datepicker table td {
                                                padding: 0.75rem;
                                                vertical-align: top;
                                                border-top: 1px solid #e9ecef;
                                            }
                                
                                            .datepicker table td {
                                                border-left: 1px solid #e9ecef;
                                            }
                                
                                            .datepicker table td:last-child {
                                                border-right: 1px solid #e9ecef;
                                            }
                                
                                            .datepicker table tbody + thead tr:first-child th {
                                                border-top: 1px solid #e9ecef;
                                            }
                                
                                            .datepicker table tbody + thead tr:last-child th {
                                                border-bottom: 1px solid #e9ecef;
                                            }
                                
                                            .datepicker-dropdown.datepicker-orient-top:before,
                                            .datepicker-dropdown.datepicker-orient-bottom:before,
                                            .datepicker-dropdown.datepicker-orient-left:before,
                                            .datepicker-dropdown.datepicker-orient-right:before {
                                                border: none;
                                            }
                                
                                            .datepicker-dropdown.datepicker-orient-bottom:before {
                                                border-bottom: none;
                                            }
                                
                                            .datepicker table td.today,
                                            .datepicker table td.today:hover {
                                                background-color: #f0f0f0;
                                            }
                                
                                            .datepicker table td.today:active {
                                                background-color: #e9ecef;
                                            }
                                
                                            .datepicker table td.active,
                                            .datepicker table td.active:hover {
                                                background-color: #007bff;
                                                color: #fff;
                                                border-radius: 50%;
                                            }
                                
                                            .datepicker table td.active:active {
                                                background-color: #0056b3;
                                            }
                                
                                            .datepicker table td.disabled,
                                            .datepicker table td.disabled:hover {
                                                background-color: transparent;
                                                color: #6c757d;
                                            }
                                
                                            .datepicker table td.old,
                                            .datepicker table td.old:hover {
                                                color: #6c757d;
                                            }
                                
                                            .datepicker table td.new,
                                            .datepicker table td.new:hover {
                                                color: #007bff;
                                            }
                                        
                                        
</style>


</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
    
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(assets/images/big) no-repeat center center;">
           
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <img src="{{ asset('AdminAssets/assets/images/LOGO.png') }}" alt="logo sghroun">
                        <h2 class="mt-3 text-center">Teacher's informations</h2>
                        <form class="mt-4" action="{{ route('ajouter-educatrice') }}" method="POST">
                        @csrf               
                            
                            <div class="row">
                            <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Enter the NIC of the teacher" name="nic"  oninput="validateNic()">
                                        
                                        <span id="nicError" class="text-danger"></span>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Enter the name of the teacher" name="firstname"  oninput="validateNom()">
                                        
                                        <span id="nomError" class="text-danger"></span>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Enter the lastname of the teacher" name="lastname" oninput="validatePrenom()">
                                        <span id="prenomError" class="text-danger"></span>
                                    </div>
                                </div>
                              
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text"  placeholder="Enter the phone number of the teacher" name="phone" oninput="validateTelephone()">
                                        <span id="telephoneError" class="text-danger"></span>    
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text"  placeholder="Enter the address  of the teacher" name="address" oninput="validateAddress()">
                                        <span id="address" class="text-danger"></span>    
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Enter the email of the teacher" name="email" oninput="validateEmail()">
                                        <span id="EmailError" class="text-danger"></span>    
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control datepicker" type="text" placeholder="Enter the date of birth  of the teacher"  name="dateofbirth">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Enter the gender of the teacher" name="gender">
                                      
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Enter the social status of the teacher" name="status">
                                      
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Enter the teacher's specialty" name="type_degree" oninput="validateSpecialite()">
                                        <span id="SpecialiteError" class="text-danger"></span>  
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Enter the teacher's spoken languages" name="languages" >
                                 
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="imagename" accept="image/*">
                                            <label class="custom-file-label" for="photo">Add teacher's photo</label>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="col-lg-12 text-center">
                               
             <button type="submit"  id="addButton" class="btn btn-block btn-dark">Add</button>

                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                Do you have a file to add?<a href="#" class="text-danger " id="joindreFichier">Attach the file</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <script src="{{ asset('AdminAssets/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('AdminAssets/assets/libs/popper.js/dist/umd/popper.min.js') }} "></script>
    <script src="{{ asset('AdminAssets/assets/libs/bootstrap/dist/js/bootstrap.min.js') }} "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script src="{{ asset('AdminAssets/assets/libs/jquery/dist/jquery.min.js') }} "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('AdminAssets/assets/libs/popper.js/dist/umd/popper.min.js') }} "></script>
    <script src="{{ asset ('AdminAssets/assets/libs/bootstrap/dist/js/bootstrap.min.js') }} "></script>
    <!-- Datepicker JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Datepicker initialization script -->
    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker({
                format: 'dd/mm/yyyy', // Format de la date
                autoclose: true, // Ferme automatiquement le calendrier après la sélection de la date
                language: 'en' // Langue du calendrier
            });
        });
    </script>
    
    <script>
        $(".preloader ").fadeOut();
    </script>
<script>
    //Fonction pour valider le CINN de l'eduactrice 
    function validateNic() {
        var nic = document.getElementsByName("nic")[0].value;
        if (!/^[0|1][0-9]{7}$/.test(nic)) {
            document.getElementById("nicError").innerText = "The national identifier card  number must start with 0 or 1 and consist of 8 digits!";
        }else {
            document.getElementById("nicError").innerText = "";
        }
    }
    // Fonction pour valider le champ nom en temps réel
    function validateNom() {
        var nom = document.getElementsByName("firstname")[0].value;
        if (!/^[a-zA-Z]+$/.test(nom)) {
            document.getElementById("nomError").innerText = "The name must contain only letters!";
        } else if (nom.length < 3) {
            document.getElementById("nomError").innerText = "The name must be at least 3 characters long!";
        } else {
            document.getElementById("nomError").innerText = "";
        }
    }

    // Fonction pour valider le champ prénom en temps réel
    function validatePrenom() {
        var prenom = document.getElementsByName("lastname")[0].value;
        if (!/^[a-zA-Z]+$/.test(prenom)) {
            document.getElementById("prenomError").innerText = "The lastname must contain only letters!";
        } else if (prenom.length < 3) {
            document.getElementById("prenomError").innerText = "The lastname must be at least 3 characters long!";
        } else {
            document.getElementById("prenomError").innerText = "";
        }
    }

    // Fonction pour valider le champ téléphone en temps réel
    function validateTelephone() {
        var telephone = document.getElementsByName("phone")[0].value;
        if (!/^[9|5|4|2]\d{7}$/.test(telephone)) {
            document.getElementById("telephoneError").innerText = "The phone number must start with 9, 5, 4, or 2 and consist of 8 digits!";
        } else {
            document.getElementById("telephoneError").innerText = "";
        }
    }
     // Fonction pour valider le champ email en temps réel
     function validateEmail() {
        var email = document.getElementsByName("email")[0].value;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email.length === 0) {
            document.getElementById("EmailError").innerText = "The e-mail address is mandatory!";
        } else if (!emailRegex.test(email)) {
            document.getElementById("EmailError").innerText = "Please enter a valid email address!";
        } else if (email.length > 100) {
            document.getElementById("EmailError").innerText = "The email address cannot exceed 100 characters";
        } else {
            document.getElementById("EmailError").innerText = "";
        }
    }

    // Fonction pour valider le champ spécialité en temps réel
    function validateSpecialite() {
        var specialite = document.getElementsByName("type_degree")[0].value;
        if (specialite.length === 0) {
            document.getElementById("SpecialiteError").innerText = "The specialty is mandatory!";
        } else if (specialite.length > 50) {
            document.getElementById("SpecialiteError").innerText = "The specialty cannot exceed 50 characters!";
        } else {
            document.getElementById("SpecialiteError").innerText = "";
        }
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("joindreFichier").addEventListener("click", function(event) {
            event.preventDefault();
            var input = document.createElement("input");
            input.type = "file";
            input.accept = ".xlsx, .xls";
            input.onchange = function() {
                var file = input.files[0];
                var formData = new FormData();
                formData.append("fichier", file);
                // Envoyer le fichier au serveur via une requête AJAX
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "traitement_fichier.php", true);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        // Afficher un message de confirmation ou effectuer d'autres actions
                        alert("Fichier envoyé avec succès !");
                    } else {
                        alert("Une erreur s'est produite lors de l'envoi du fichier.");
                    }
                };
                xhr.send(formData);
            };
            input.click();
        });
    });
</script>



</body>

</html>