<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau compte chef</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, p {
            margin: 0 0 10px;
        }
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        ul li {
            margin-bottom: 5px;
        }
        .button {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
    <img src="{{ asset('AdminAssets/assets/images/LOGO.jpg') }}" alt="Logo Saghroun">
        <h1>Bonjour {{ $chef->lastname }} {{ $chef->firstname }},</h1>
        <p>Votre compte chef de cantine a été créé avec succès.</p>
        <p>Voici vos informations de connexion :</p>
        <ul>
            <li><strong>E-mail :</strong> {{ $chef->email }}</li>
            <li><strong>Mot de passe :</strong> {{ $password }}</li>
        </ul>
        <p>Veuillez conserver ces informations en sécurité.</p>
      
    </div>
</body>
</html>
