<?php 
  session_start(); 
  $usuari = $_SESSION['usuari'];
?>
<link rel="icon" type="image/png" href="img/icons/favicon.png"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/main.css">

<div id = "header">

    <ul class="nav">
    <li><img class="imagen" src="img/logo.png" style="height: 20px;">
    <ul><br>
          <li><a class="colores" href="menu.php">Home</a></li><br>
          <li><a class="colores" href="consultWorkers.php">Consulta</a></li>
        </ul>
    </li>

      <li><a class="margenes">Benvingut/da, <?php echo $usuari ?></a></li>
        <div><img class="apagado" src="img/icons/logout.png"/></div>
    </ul>
  </div>
</nav>

<?php
    include('php/connect.php');    
?>
