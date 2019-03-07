<?php
    session_start();

    include('connect.php');

    $usuari = $_POST['usuari'];
    $password = $_POST['password'];

    $passwd = "";
    $encriptada=md5($password);

    if ($stmt = $conexion->prepare('SELECT password, role FROM users WHERE user = ?')){ //Query con prevención de inyección SQL
        $stmt->bind_param("s", $usuari);
        $stmt->execute();
        $result = $stmt->get_result();

        while($row = $result->fetch_assoc()) {
            $passwd = $row['password'];
            $role = $row['role'];
        }

        $stmt->close();

    }

    if ($encriptada == $passwd) { //Comprovació de la contrasenya encriptada amb la introduida
        $_SESSION['usuari'] = $usuari;
        $_SESSION['role'] = $role;
        header('Location: ../menu.php');
    } else {
        echo "Error, el usuari o contrasenya es incorrecte";
    }

?>