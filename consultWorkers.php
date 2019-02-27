<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consultar Empleats</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="css/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/mainTables.css">
</head>

<?php
    include("php/webelements/header.php");
?>

<body>
    <form role="form" method="post" action="consultWorkers.php" style="display: flex; justify-content: space-between; margin-top: 15px; padding: 25px;">
        <label style="margin-top: 8px;">Introdueix el DNI de l'empleat desitjat: <input type="text" name="dni" placeholder="DNI" style="border-radius: 25px; border: none !important; padding-left: 10px;"/></label>
        <input type="submit" name="consult" value="Buscar" class="send"/>
        <input type="submit" name="add" value="Insertar" class="insertTo"/>
    </form>

    <hr/>

    <?php
        if (isset($_POST['consult'])) {
            include("php/workersFiltros.php");
        } else {
            include("php/workers.php");
        }
    ?>

    <script src="js/jquery/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap/popper.js"></script>
	<script src="js/bootstrap/bootstrap.min.js"></script>
	<script src="js/select2/select2.min.js"></script>
	<script src="js/mainTables.js"></script>
</body>
</html>