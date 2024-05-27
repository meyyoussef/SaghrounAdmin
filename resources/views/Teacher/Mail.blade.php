<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nouveau compte éducatrice</title>
  <style>
    /* Base Styles */
    body {
      font-family: 'Open Sans', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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

    /* Header Styles */
    .header {
      background-color: #3498db;
      color: #fff;
      padding: 20px;
      text-align: center;
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
    }

    .header h1 {
      margin: 0;
      font-size: 24px;
    }

    /* Content Styles */
    .content {
      padding: 20px;
    }

    .content h2 {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .content p {
      font-size: 16px;
      line-height: 1.5;
    }

    /* Button Styles */
    .button {
      display: inline-block;
      background-color: #007bff;
      color: #fff;
      padding: 15px 30px;
      border-radius: 5px;
      text-decoration: none;
      cursor: pointer;
      transition: background-color 0.2s ease;
    }

    .button:hover {
      background-color: #0056b3;
    }

    /* Form Styles */
    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 10px;
    }

    .form-group input[type="text"],
    .form-group input[type="email"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
  

  <div class="content">
      <h2>Welcome {{ $educatrice->lastname }} {{ $educatrice->firstname }},</h2>
      <p>Your educator account has been successfully created.</p>
      <p>To log in, please use the following information:</p>
      <ul>
        <li><strong>Email:</strong> {{ $educatrice->email }}</li>
        <li><strong>Password:</strong> {{ $password }}</li>
      </ul>
      <p>Please keep this information confidential.</p>

</div>
  </div>
</body>
</html>