<?php

    include('connect.php');

    $usuari = $_POST['usuari'];
    $password = $_POST['password'];
    $passwd="";
    $encriptada=md5($password);

    if ($stmt = $conexion->prepare('SELECT password FROM users WHERE user = ?')){
        $stmt->bind_param("s", $usuari);
        $stmt->execute();
        $result = $stmt->get_result();

        while($row = $result->fetch_assoc()) {
            $passwd = $row['password'];
        }

        $stmt->close();
    }

    if ($encriptada == $passwd) {
        header('Location: #');
    } else {
        header('Location: ../index.html?error=yes');
    }
?>