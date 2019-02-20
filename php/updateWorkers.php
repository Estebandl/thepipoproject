<?php
        include('connect.php');
        
        $consulta = "SELECT * FROM `empleats` e, `telefons` t, `mails` m WHERE e.dni = t.dni_empleat AND e.dni = m.dni_empleat AND dni = " . "'". $conexion->real_escape_string($_POST['dni']) ."'";
        $resultado = $conexion->query($consulta);
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Formulari d'actualització d'empleats</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
        <script src="main.js"></script>
</head>
        <?php include 'webElements/header.php' ?>
<body>
        <?php while ($fila = $resultado->fetch_assoc()) {     
                
                $nom = $fila['nom'];
                $dni = $fila['dni'];
                $primerCognom =$fila['cognom1'];
                $segonCognom = $fila['cognom2'];
                $dataNaixament = $fila['data_naixement'];
                $sexe = $fila['sexe'];
                $nacionalitat = $fila['nacionalitat'];
                $adreça = $fila['adreca'];
                $codiPostal = $fila['codi_postal'];
                $poblacio = $fila['poblacion']; 
                $formacio = $fila['formacio'];
                $disminucio = $fila['disminucio'];
                $compteBancari = $fila['compte_bancari'];
                $numeroSS = $fila['n_seguretat_social'];
                $area = $fila['area_assignada'];
                $responsable = $fila['responsable'];
                $projecte = $fila['projecte_assignat'];
                $llocFisicTreball = $fila['lloc_fisic_treball'];
                $horaInici = $fila['horari_inici'];
                $horaFinal = $fila['horari_final'];
                $jornadaSetmanal = $fila['jornada_setmanal'];
                $funcioCarrec = $fila['funcio_carrec'];
                $telefon = $fila['telefon'];
                $tipusTelefon = $fila['tipus_telefon'];
                $nomContacte = $fila['nom_contacte_telefon'];
                $email = $fila['mail'];
 
                } 

                 $nom;
                 $dni;
                 $primerCognom;
                 $segonCognom;
                 $dataNaixament;
                 $sexe;
                 $nacionalitat;
                 $adreça;
                 $codiPostal;
                 $poblacio; 
                 $formacio;
                 $disminucio;
                 $compteBancari;
                 $numeroSS;
                 $area;
                 $responsable;
                 $projecte;
                 $llocFisicTreball;
                 $horaInici;
                 $horaFinal;
                 $jornadaSetmanal;
                 $funcioCarrec;
                 $telefon;
                 $tipusTelefon;
                 $nomContacte;
                 $email;

                ?>

                <h1>Formulari d'actualització d'empleats</h1>

                <div class = "container">
                        <div>
                                <form role="form" method="post" action="updateWorkersData.php">
                                <label for="nom">Nom</label><br>
                                <input type="text" name="nom" value="<?php echo $nom ?>" readonly>

                                <br><br>
                                
                                <label for="primerCognom">1er Cognom</label><br>
                                <input type="text" name="primerCognom" placeholder="" value="<?php echo $primerCognom ?>" readonly>
                                <br><br>
                                
                                <label for="segonCognom">2on Cognom</label><br>
                                <input type="text" name="segonCognom" placeholder="" value="<?php echo $segonCognom ?>" readonly>
                                <br><br>
                                
                                <label for="dni">DNI</label><br>
                                <input type="text" name="dni" placeholder="" value="<?php echo $dni ?>" readonly>
                                <br><br>
                                
                                <label for="dataNaixament">Data de naixement (DD/MM/AAAA)</label><br>
                                <input type="text" name="dataNaixament" placeholder="" value="<?php echo $dataNaixament ?>" readonly>
                                <br><br>
                                
                                <label for="sexe">Sexe</label><br>                                
                                <input type="radio" name="sexe" placeholder="1" readonly>Home
                                <input type="radio" name="sexe" placeholder="0" readonly>Dona
                                <br><br>
                                
                                <label for="nacionalitat">Nacionalitat</label><br>
                                <input type="text" name="nacionalitat" placeholder="" value="<?php echo $nacionalitat ?>" readonly>
                                <br><br>
                                
                                <label for="adreça">Adreça</label><br>
                                <input type="text" name="adreça" placeholder="" value="<?php echo $adreça ?>">
                                <br><br>
                                
                                <label for="codiPostal">Codi postal</label><br>
                                <input type="number" name="codiPostal" placeholder="" value="<?php echo $codiPostal ?>">
                                <br><br>
                        </div>
                        <div>
                                <label for="email">Correu electrónic :</label><br>
                                <input type="text" name="email" placeholder="" value="<?php echo $email ?>"> 
                                <br><br>

                                <label for="tipusTelefon">Tipus de telèfon</label><br>
                                <input type="radio" name="tipusTelefon" placeholder="1" readonly>Fixe
                                <input type="radio" name="tipusTelefon" placeholder="0" readonly>Movil
                                <br><br>

                                <label for="telefonFixe">Telèfon :</label><br>
                                <input type="text" name="telefon" placeholder="" value="<?php echo $telefon ?>">
                                <br><br>

                                <label for="nomContacte">Nom del contacte :</label><br>
                                <input type="text" name="nomContacte" placeholder="" value="<?php echo $nomContacte ?>">
                                <br><br>
                                
                                <label for="poblacio">Població</label><br>
                                <input type="text" name="poblacio" placeholder="" value="<?php echo $poblacio ?>">
                                <br><br>
                                
                                <label for="formacio">Formació</label><br>
                                <input type="text" name="formacio" placeholder="" value="<?php echo $formacio ?>">
                                <br><br>
                                
                                <label for="disminucio">Disminució (%)</label><br>
                                <input type="number" name="disminucio" placeholder="" value="<?php echo $disminucio ?>">
                                <br><br>
                                
                                <label for="compteBancari">Compte bancari</label><br>
                                <input type="text" name="compteBancari" placeholder="" value="<?php echo $compteBancari ?>">
                                <br><br>
                                
                                <label for="numeroSeguretatSocial">Numero de la Seguretat Social</label><br>
                                <input type="text" name="numeroSeguretatSocial" placeholder="" value="<?php echo $numeroSS ?>">
                                <br><br>
                        </div>
                        <div>        
                                <label for="area">Area asignada</label><br>
                                <input type="text" name="area" placeholder="" value="<?php echo $area ?>">
                                <br><br>
                                
                                <label for="responsable">Responsable</label><br>
                                <input type="text" name="responsable" placeholder="" value="<?php echo $responsable ?>">
                                <br><br>
                                
                                <label for="projecte">Projecte assignat</label><br>
                                <input type="text" name="projecte" placeholder="" value="<?php echo $projecte ?>">
                                <br><br>
                                
                                <label for="llcoFisicTreball">Lloc fisic del treball</label><br>
                                <input type="text" name="llocFisicTreball" placeholder="" value="<?php echo $llocFisicTreball ?>">
                                <br><br>
                                
                                <label for="horaInici">Hora d'inici</label><br>
                                <input type="number" name="horaInici" placeholder="" value="<?php echo $horaInici ?>">
                                <br><br>
                                
                                <label for="horaFinal">Hora de finalització</label><br>
                                <input type="number" name="horaFinal" placeholder="" value="<?php echo $horaFinal ?>">
                                <br><br>
                                
                                <label for="jornadaSetmanal">Jornada setmanal</label><br>
                                <input type="number" name="jornadaSetmanal" placeholder="" value="<?php echo $jornadaSetmanal ?>">
                                <br><br>
                                
                                <label for="funcioCarrec">Funció</label><br>
                                <input type="text" name="funcioCarrec" placeholder="" value="<?php echo $funcioCarrec ?>">
                                <br><br><br>
                                
                                <button type="submit" name="enviar" placeholder="enviar">Actualitzar informació empleat</button>

                                </form>
                        </div>
                </div>
</body>
</html>