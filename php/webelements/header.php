<?php 
  session_start(); 
  $usuari = $_SESSION['usuari'];
?>

<link rel="stylesheet" type="text/css" href="css/main.css">

<div id = "header">

    <ul class="nav">
    <li><img class="imagen" src="img/logo.png"/ style="">
    <ul><br>
          <li><a class="colores" href="">Home</a></li><br>
          <li><a class="colores" href="consultWorkers.html">Consulta</a></li>
        </ul>
    </li>

      <li><a class="margenes" href="">Benvingut/da, <?php echo $usuari ?></a></li>
        <div><img class="apagado" src="img/icons/logout.png"/></div>
    </ul>

</div>