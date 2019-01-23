<?php

    include('connect.php');

    $usuari = $_POST['usuari'];
    $password = $_POST['password'];
    $passw="";
    $encriptada=md5($password);

    if ($stmt = $conexion->prepare('SELECT password FROM users WHERE user = ?')){
        $stmt->bind_param("s", $usoari);
        $stmt->execute();
        $result = $stmt->get_result();

        while($row = $result->fetch_assoc()) {
            $password = $row['password'];
        }

        $stmt->close();
    }

    if ($encriptada == $password) {
        header('Location: hola.html');
    } else {
        header('Location: ../index.html?error=yes');
    }
?>