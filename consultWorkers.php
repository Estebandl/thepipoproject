<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consultar Empleats</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<?php
    include("php/webelements/header.php");
?>

<body>
    <form role="form" method="post" action="consultWorkers.php" style="display: flex; justify-content: space-between;">
        <label>Introdueix el DNI de l'empleat desitjat:
            <input type="text" name="dni" placeholder="DNI"/>
        </label>
        <input type="submit" name="consult"/>
        <input type="submit" name="add" value="Insertar"/>
    </form>

    <hr/>

    <?php
        if (isset($_POST['consult'])) {
            include("php/workersFiltros.php");
        } else {
            include("php/workers.php");
        }
    ?>
</body>
</html>