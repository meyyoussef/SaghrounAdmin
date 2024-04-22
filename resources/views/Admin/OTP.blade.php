<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('AdminAssets/assets/images/LOGO.jpg') }}">
    <title>Validation code </title>
    <style> 
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f4f4f4;
        font-family: Arial, sans-serif;
    }

    .form {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 380px;
        background-color: white;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .title {
        font-size: 28px;
        font-weight: bold;
        color: black;
        margin-bottom: 30px;
    }

    .message {
        color: #a3a3a3;
        font-size: 18px;
        margin-bottom: 30px;
        text-align: center;
    }

    .inputs {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 30px;
    }

    .inputs input {
        width: 60px;
        height: 60px;
        text-align: center;
        border: none;
        border-bottom: 3px solid #d2d2d2;
        margin: 0 15px;
        font-size: 28px;
        font-weight: bold;
    }

    .inputs input:focus {
        border-bottom: 3px solid royalblue;
        outline: none;
    }

    .action {
        padding: 15px 30px;
        border-radius: 12px;
        border: none;
        background-color: royalblue;
        color: white;
        cursor: pointer;
        align-self: flex-end;
        font-size: 22px;
        font-weight: bold;
    }
    </style>
</head>
<body>
<form class="form" id="verification-form">
    <div class="title"> Verification Code</div>
    <p class="message">We have sent a verification code to your email address</p>
    <div class="inputs">
        <input id="input1" type="text" maxlength="1">
        <input id="input2" type="text" maxlength="1">
        <input id="input3" type="text" maxlength="1">
        <input id="input4" type="text" maxlength="1">
    </div>
    <input type="hidden" id="change-password-route" value="{{ route('password.change') }}">
    <button class="action" id="verify-button" type="submit">Verify</button>
</form>

    <script>
 // Récupérer l'URL de la route de changement de mot de passe
var changePasswordRoute = document.getElementById('change-password-route').value;

// Récupérer le formulaire par son identifiant
var verificationForm = document.getElementById('verification-form');

// Ajouter un écouteur d'événements à la soumission du formulaire pour intercepter le clic sur le bouton "Verify"
verificationForm.addEventListener('submit', function(event) {
    // Empêcher le comportement par défaut du formulaire, qui est de soumettre les données
    event.preventDefault();
    
    // Rediriger l'utilisateur vers la route de changement de mot de passe
    window.location.href = changePasswordRoute;
});

</script>
</body>
</html>
