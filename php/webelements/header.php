<?php 
  session_start(); 
  $usuari = $_SESSION['usuari'];
?>

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
