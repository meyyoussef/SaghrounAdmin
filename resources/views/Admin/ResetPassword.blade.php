<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('AdminAssets/assets/images/LOGO.jpg') }}">
    <title>Password Reset</title>
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
                    <h2 class="mt-3 text-center">Enter your email to reset your password.</h2>
                    <form class="mt-4" id="reset-form" action="" method="POST">

                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input id="email" class="form-control" type="email" placeholder="Enter your email address" name="email" oninput="validateEmail()">
                                    <span id="EmailError" class="text-danger"></span>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 text-center"> 
                        <button type="button" id="reset-button" class="btn btn-block btn-dark">Request Reset</button>

<script>
    // Récupérer le bouton de réinitialisation par son identifiant
    var resetButton = document.getElementById('reset-button');

    // Ajouter un écouteur d'événements au bouton pour détecter le clic
    resetButton.addEventListener('click', function() {
        // Rediriger l'utilisateur vers la route de réinitialisation de mot de passe
        window.location.href = "{{ route('password.code') }}";
    });
</script>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
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



    <script>
        $(".preloader ").fadeOut();
    </script>
    <script>

        // Function to validate email field in real-time
        function validateEmail() {
            var email = document.getElementById("email").value;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email.length === 0) {
                document.getElementById("EmailError").innerText = "Email address is required";
            } else if (!emailRegex.test(email)) {
                document.getElementById("EmailError").innerText = "Please enter a valid email address";
            } else if (email.length > 100) {
                document.getElementById("EmailError").innerText = "Email address cannot exceed 100 characters";
            } else {
                document.getElementById("EmailError").innerText = "";
            }
        }
    </script>
</body>

</html>
