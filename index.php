<?php require_once "config.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Pen-test Project</title>
  </head>
  <body>
    <div class="container">
      <h1>Welcome to our Website</h1>
      
      <a href="index.php">Home</a> |
      <a href="index.php?page=register.php">Register</a> |
      <a href="index.php?page=login.php">Login</a>     
      <hr/>

      <?php 

      $allowedPages = ['register.php', 'login.php', 'welcome.php'];

      if (isset($_GET['page']) && in_array($_GET['page'], $allowedPages)) {
          include $_GET['page'];
      } 
      else 
      {
          echo "<p>This is the front page.</p>";
      }
      
      ?>
    </div>
  </body>
</html>