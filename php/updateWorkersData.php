<?php
include('connect.php');

// TAULA EMPLEATS
$nom = $_POST['nom'];
$dni = $_POST['dni'];
$primerCognom =$_POST['primerCognom'];
$segonCognom = $_POST['segonCognom'];
$dataNaixament = $_POST['dataNaixament'];
$sexe = $_POST['sexe'];
$nacionalitat = $_POST['nacionalitat'];
$adreça = $_POST['adreça'];
$codiPostal = $_POST['codiPostal'];
$poblacio = $_POST['poblacio']; 
$formacio = $_POST['formacio'];
$disminucio = $_POST['disminucio'];
$compteBancari = $_POST['compteBancari'];
$numeroSS = $_POST['numeroSeguretatSocial'];
$area = $_POST['area'];
$responsable = $_POST['responsable'];
$projecte = $_POST['projecte'];
$llocFisicTreball = $_POST['llocFisicTreball'];
$horaInici = $_POST['horaInici'];
$horaFinal = $_POST['horaFinal'];
$jornadaSetmanal = $_POST['jornadaSetmanal'];
$funcioCarrec = $_POST['funcioCarrec'];

// TAULA TELEFON
$telefon = $_POST['telefon'];
$tipusTelefon = $_POST['tipusTelefon'];
$nomContacte = $_POST['nomContacte'];

//TAULA EMAIL
$email = $_POST['email'];


$sql = "UPDATE empleats 
SET ('$dni', '$nom', '$primerCognom', '$segonCognom', '$dataNaixament' , $sexe, '$nacionalitat', '$adreça', $codiPostal, 
        '$poblacio', '$formacio', $disminucio, '$compteBancari', '$numeroSS', '$area', '$responsable', '$projecte', 
        '$llocFisicTreball', $horaInici, $horaFinal, $jornadaSetmanal, '$funcioCarrec')";

$sql2 = "UPDATE telefons
SET ('$dni', '$telefon', '$tipusTelefon', '$nomContacte')";

$sql3 = "UPDATE mails
SET ('$dni', '$email', null)";


if ($conexion->query($sql) == FALSE || $conexion->query($sql2) == FALSE || $conexion->query($sql3) == FALSE ) {
    echo 'Error ' .$sql . "<br>" . $conexion->error;
} else {
    echo 'Empleado añadido correctamente';
}

?>