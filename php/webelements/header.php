<?php
  session_start();
  $usuari = $_SESSION['usuari'];
  $role = $_SESSION['role'];
?>

<link rel="icon" type="image/png" href="img/icons/favicon.png"/>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img src="img/logo.png" style="height: 50px; padding-right: 20px;">
  <a class="navbar-brand">Benvingut/da, <?php echo $usuari ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText" style="padding-left: 10px;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="menu.php">Inici</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="consultWorkers.php">Consulta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gestió d'usuaris</a>
      </li>
    </ul>
  </div>
</nav>