<?php
  session_start();
  $usuari = $_SESSION['usuari'];
?>

<link rel="icon" type="image/png" href="img/icons/favicon.png"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/main.css">

<nav class="navbar">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <img src="img/logo.png" style="height: 50px; padding-left: 20px;">
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <div class="dropdown">
            <button type="button" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-align-justify icomenu"></i>
            </button>
            <div class="dropdown-menu">
              <li><a href="menu.php">Inici</a></li>
              <li><a href="consultWorkers.php">Gestió de Treballadors</a></li>
              <li><a href="#">Gestió d'Usuaris</a></li>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <a>Benvingut/da, <?php echo $usuari ?></a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <img src="img/icons/logout.png" style="height: 40px; padding-right: 20px; display: right;">
        </div>
      </div>
    </div>
  </div>
</nav>
