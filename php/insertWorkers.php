<?php
session_start();

if(isset($_POST['enviar'])) {
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
                
                <label for="dataNaixament">Data de naixement:</label>
                <input type="date" name="dataNaixament" value="">
                <br><br>
                
                <label for="sexe">Sexe: </label>
                <SELECT>
                        <option name="sexe" value="home" checked> Home<br>
                        <option name="sexe" value="dona"> Dona<br>
                </SELECT> 
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
                
                <label for="telefonPersonal">Telèfon personal: </label>
                <input type="number" name="telefonPersonal" value="">
                <br><br>
                
                <label for="email">Correu electronic: </label>
                <input type="text" name="email" value="">
                <br><br>
                
                <label for="formacio">Formació: </label>
                <SELECT>
                        <option name="formacio" value="sense">Sense estudis<br>
                        <option name="formacio" value="estudisprimaris">Estudis primaris<br>
                        <option name="formacio" value="eso"> Educació Secundaria Obligatoria<br>
                        <option name="formacio" value="bachillerat"> Bachillerat<br>
                        <option name="formacio" value="cfgs"> Cicle Formatiu Grau Mitjá<br>
                        <option name="formacio" value="cfgm"> Cicle Formatiu Grau Superior<br>
                        <option name="formacio" value="uni"> Estudis Universitaris<br>
                </SELECT>
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
                
                <label for="telfEmergencia">Telèfon d'emergencia: </label>
                <input type="number" name="telfEmergencia" value="">
                <br><br>
                
                <label for="nomemergencia">Nom del contacte d'emergencia: </label>
                <input type="text" name="nomEmergencia" value="">
                <br><br>
                
                <label for="dataAlta">Data d'alta: </label>
                <input type="date" name="dataAlta" value="">
                <br><br>
                
                <label for="dataBaixa">Data de baixa: </label>
                <input type="date" name="dataBaixa" value="">
                <br><br>
                
                <label for="vencimentContracte">Venciment del contracte: </label>
                <input type="date" name="vencimentContracte" value="">
                <br><br>
                
                <label for="tipusContracte">Tipus de contracte: </label>
                <input type="text" name="tipusContracte" value="">
                <br><br>
                
                <label for="grupCotizacio">Grup de cotització: </label>
                <input type="text" name="grupCotitzacio" value="">
                <br><br>
                
                <label for="infoNomina">Informació de la nomina: </label>
                <input type="text" name="infoNomina" value="">
                <br><br>
                
                <label for="telefonFeina">Teléfon de la feina: </label>
                <input type="number" name="teleFonfeina" value="">
                <br><br>
                
                <label for="correuFeina">Correu electrónic de la feina: </label>
                <input type="text" name="correuFeina" value="">
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
                
                <label for="funcioCarrec">Data de baixa: </label>
                <input type="text" name="funcioCarrec" value="">
                <br><br>
                
                <button type="submit" name="enviar" value="enviar">Enviar dades</button>
</body>
</html>