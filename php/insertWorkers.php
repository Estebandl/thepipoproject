<?php
session_start();

if(isset($_POST['enviar'])) {
        
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['dni'] = $_POST['dni'];
        $_SESSION['primerCognom'] = $_POST['primerCognom'];
        $_SESSION['segonCognom'] = $_POST['segonCognom'];
        $_SESSION['dataNaixament'] = $_POST['dataNaixament'];
        $_SESSION['sexe'] = $_POST['sexe'];
        $_SESSION['nacionalitat'] = $_POST['nacionalitat'];
        $_SESSION['adreça'] = $_POST['adreça'];
        $_SESSION['codiPostal'] = $_POST['codiPostal'];
        $_SESSION['poblacio'] = $_POST['poblacio'];
        $_SESSION['formacio'] = $_POST['formacio'];
        $_SESSION['disminucio'] = $_POST['disminucio'];
        $_SESSION['compteBancari'] = $_POST['compteBancari'];
        $_SESSION['numeroSeguretatSocial'] = $_POST['numeroSeguretatSocial'];
        $_SESSION['area'] = $_POST['area'];
        $_SESSION['responsable'] = $_POST['responsable'];
        $_SESSION['projecte'] = $_POST['projecte'];
        $_SESSION['llocFisicTreball'] = $_POST['llocFisicTreball'];
        $_SESSION['horaInici'] = $_POST['horaInici'];
        $_SESSION['horaFinal'] = $_POST['horaFinal'];
        $_SESSION['jornadaSetmanal'] = $_POST['jornadaSetmanal'];
        $_SESSION['funcioCarrec'] = $_POST['funcioCarrec'];   

        header('location: insertWorkersData.php');
}

?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Formulari d'introduccio d'empleats</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
</head>
<body>
                <h1>Formulari d'introducció d'empleats</h1>

                <form role="form" method="post" action="insertWorkers.php">
                <label for="nom">Nom: </label>
                <input type="text" name="nom" value="">
                <br><br>
                
                <label for="primerCognom">1er Cognom: </label>
                <input type="text" name="primerCognom" value="">
                <br><br>
                
                <label for="segonCognom">2on Cognom: </label>
                <input type="text" name="segonCognom" value="">
                <br><br>
                
                <label for="dni">DNI: </label>
                <input type="text" name="dni" value="">
                <br><br>
                
                <label for="dataNaixament">Data de naixement (YYYY/MM/DD):</label>
                <input type="text" name="dataNaixament" value="">
                <br><br>
                
                <label for="sexe">Sexe: </label>
                <input type="radio" name="sexe" value="1">Home
                <input type="radio" name="sexe" value="0">Dona
                <br><br>
                
                <label for="nacionalitat">Nacionalitat: </label>
                <input type="text" name="nacionalitat" value="">
                <br><br>
                
                <label for="adreça">Adreça: </label>
                <input type="text" name="adreça" value="">
                <br><br>
                
                <label for="codiPostal">Codi postal: </label>
                <input type="number" name="codiPostal" value="">
                <br><br>
                
                <label for="poblacio">Població: </label>
                <input type="text" name="poblacio" value="">
                <br><br>
                
                <label for="formacio">Formació: </label>
                <input type="text" name="formacio" value="">
                <br><br>
                
                <label for="disminucio">Disminució (%): </label>
                <input type="number" name="disminucio" value="">
                <br><br>
                
                <label for="compteBancari">Compte bancari: </label>
                <input type="text" name="compteBancari" value="">
                <br><br>
                
                <label for="numeroSeguretatSocial">Numero de la Seguretat Social: </label>
                <input type="text" name="numeroSeguretatSocial" value="">
                <br><br>
                
                <label for="area">Area asignada: </label>
                <input type="text" name="area" value="">
                <br><br>
                
                <label for="responsable">Responsable: </label>
                <input type="text" name="responsable" value="">
                <br><br>
                
                <label for="projecte">Projecte assignat: </label>
                <input type="text" name="projecte" value="">
                <br><br>
                
                <label for="llcoFisicTreball">Lloc fisic del treball: </label>
                <input type="text" name="llocFisicTreball" value="">
                <br><br>
                
                <label for="horaInici">Hora d'inici: </label>
                <input type="number" name="horaInici" value="">
                <br><br>
                
                <label for="horaFinal">Hora de finalització: </label>
                <input type="number" name="horaFinal" value="">
                <br><br>
                
                <label for="jornadaSetmanal">Jornada setmanal: </label>
                <input type="number" name="jornadaSetmanal" value="">
                <br><br>
                
                <label for="funcioCarrec">Funcio: </label>
                <input type="text" name="funcioCarrec" value="">
                <br><br>
                
                <button type="submit" name="enviar" value="enviar">Enviar dades</button>
</body>
</html>