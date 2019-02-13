<?php
include('updateWorkers.php');

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
SET dni='$dni', nom='$nom', cognom1='$primerCognom', cognom2='$segonCognom', data_naixement='$dataNaixament' , nacionalitat='$nacionalitat', adreca='$adreça', codi_postal=$codiPostal, 
        poblacion='$poblacio', formacio='$formacio', disminucio=$disminucio, compte_bancari='$compteBancari', n_seguretat_social='$numeroSS', area_assignada='$area', 
        responsable='$responsable', projecte_assignat='$projecte', lloc_fisic_treball='$llocFisicTreball', horari_inici=$horaInici, horari_final=$horaFinal, 
        jornada_setmanal=$jornadaSetmanal, funcio_carrec='$funcioCarrec'
WHERE dni = '$dni'";

$sql2 = "UPDATE telefons
SET dni_empleat='$dni', telefon='$telefon', nom_contacte_telefon='$nomContacte'
WHERE dni_empleat='$dni'";

$sql3 = "UPDATE mails
SET dni_empleat='$dni', mail='$email'
WHERE dni_empleat='$dni'";




if ($conexion->query($sql) == FALSE || $conexion->query($sql2) == FALSE || $conexion->query($sql3) == FALSE ) {
    echo 'Error ' .$sql . "<br>" . $conexion->error;
} else {
    echo 'Empleado añadido correctamente';
}

?>