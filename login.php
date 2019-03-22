<?php
require_once 'config/dbconn.php';
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/login.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="login-form">
    <form action="" method="post">
      <div class="avatar">
        <img src="" alt="Avatar">
      </div>
      <h2 class="text-center">Login</h2>
      <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Username" required="required">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
      </div>
    </form>
    <p class="text-center small">Non hai un account? <a href="register.php">Registrati qui!</a></p>
    <p class="text-center small"><a href="index.php">Torna alla homepage</a></p>
  </div>
</body>
</html>
