<?php
    include('connect.php');

    $usuari = $_POST['usuari'];
    $password = $_POST['password'];

    $passwd = "";
    $encriptada=md5($password);

    if ($stmt = $conexion->prepare('SELECT password FROM users WHERE user = ?')){ //Query con prevención de inyección SQL
        $stmt->bind_param("s", $usuari);
        $stmt->execute();
        $result = $stmt->get_result();

        while($row = $result->fetch_assoc()) {
            $passwd = $row['password'];
        }

        $stmt->close();

    }

    if ($encriptada == $passwd) { //Comprovació de la contrasenya encriptada amb la introduida
        header('Location: ../menu.html');
    } else {
        echo "Error, el usuari o contrasenya es incorrecte";
    }

?>