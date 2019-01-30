<?php

include('connect.php');
session_start();

$nom = $_SESSION['nom'];
$dni = $_SESSION['dni'];
$primerCognom =$_SESSION['primerCognom'];
$segonCognom = $_SESSION['segonCognom'];
$dataNaixament = $_SESSION['dataNaixament'];
$sexe = $_SESSION['sexe'];
$nacionalitat = $_SESSION['nacionalitat'];
$adreça = $_SESSION['adreça'];
$codiPostal = $_SESSION['codiPostal'];
$poblacio = $_SESSION['poblacio']; 
$formacio = $_SESSION['formacio'];
$disminucio = $_SESSION['disminucio'];
$compteBancari = $_SESSION['compteBancari'];
$numeroSS = $_SESSION['numeroSeguretatSocial'];
$area = $_SESSION['area'];
$responsable = $_SESSION['responsable'];
$projecte = $_SESSION['projecte'];
$llocFisicTreball = $_SESSION['llocFisicTreball'];
$horaInici = $_SESSION['horaInici'];
$horaFinal = $_SESSION['horaFinal'];
$jornadaSetmanal = $_SESSION['jornadaSetmanal'];
$funcioCarrec = $_SESSION['funcioCarrec'];


$sql = "INSERT INTO empleats 
VALUES ('$dni', '$nom', '$primerCognom', '$segonCognom', '$dataNaixament' , $sexe, '$nacionalitat', '$adreça', $codiPostal, 
        '$poblacio', '$formacio', $disminucio, '$compteBancari', '$numeroSS', '$area', '$responsable', '$projecte', 
        '$llocFisicTreball', $horaInici, $horaFinal, $jornadaSetmanal, '$funcioCarrec')";

if ($conexion->query($sql) === TRUE) {
    echo "Empleado añadido.";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

?>