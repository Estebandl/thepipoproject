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

        <?php include 'php/webElements/header.php' ?>

<body>
                <h1>Formulari d'introducció d'empleats</h1>

                <form role="form" method="post" action="php/insertWorkersData.php">

                <label for="nom">Nom</label><br>
                <input type="text" name="nom" value="">
                <br><br>
                
                <label for="primerCognom">1er Cognom</label><br>
                <input type="text" name="primerCognom" value="">
                <br><br>
                
                <label for="segonCognom">2on Cognom</label><br>
                <input type="text" name="segonCognom" value="">
                <br><br>
                
                <label for="dni">DNI</label><br>
                <input type="text" name="dni" value="">
                <br><br>
                
                <label for="dataNaixament">Data de naixement (DD/MM/AAAA)</label><br>
                <input type="text" name="dataNaixament" value="">
                <br><br>
                
                <label for="sexe">Sexe</label><br>
                <input type="radio" name="sexe" value="1">Home
                <input type="radio" name="sexe" value="0">Dona
                <br><br>
                
                <label for="nacionalitat">Nacionalitat</label><br>
                <input type="text" name="nacionalitat" value="">
                <br><br>
                
                <label for="adreça">Adreça</label><br>
                <input type="text" name="adreça" value="">
                <br><br>
                
                <label for="codiPostal">Codi postal</label><br>
                <input type="number" name="codiPostal" value="">
                <br><br>

                <label for="email">Correu electrónic :</label><br>
                <input type="text" name="email" value="">
                <br><br>

                <label for="tipusTelefon">Tipus de telèfon</label><br>
                <input type="radio" name="tipusTelefon" value="1">Fixe
                <input type="radio" name="tipusTelefon" value="0">Movil
                <br><br>

                <label for="telefonFixe">Telèfon :</label><br>
                <input type="text" name="telefon" value="">
                <br><br>

                <label for="nomContacte">Nom del contacte :</label><br>
                <input type="text" name="nomContacte" value="">
                <br><br>
                
                <label for="poblacio">Població</label><br>
                <input type="text" name="poblacio" value="">
                <br><br>
                
                <label for="formacio">Formació</label><br>
                <input type="text" name="formacio" value="">
                <br><br>
                
                <label for="disminucio">Disminució (%)</label><br>
                <input type="number" name="disminucio" value="">
                <br><br>
                
                <label for="compteBancari">Compte bancari</label><br>
                <input type="text" name="compteBancari" value="">
                <br><br>
                
                <label for="numeroSeguretatSocial">Numero de la Seguretat Social</label><br>
                <input type="text" name="numeroSeguretatSocial" value="">
                <br><br>
                
                <label for="area">Area asignada</label><br>
                <input type="text" name="area" value="">
                <br><br>
                
                <label for="responsable">Responsable</label><br>
                <input type="text" name="responsable" value="">
                <br><br>
                
                <label for="projecte">Projecte assignat</label><br>
                <input type="text" name="projecte" value="">
                <br><br>
                
                <label for="llcoFisicTreball">Lloc fisic del treball</label><br>
                <input type="text" name="llocFisicTreball" value="">
                <br><br>
                
                <label for="horaInici">Hora d'inici</label><br>
                <input type="number" name="horaInici" value="">
                <br><br>
                
                <label for="horaFinal">Hora de finalització</label><br>
                <input type="number" name="horaFinal" value="">
                <br><br>
                
                <label for="jornadaSetmanal">Jornada setmanal</label><br>
                <input type="number" name="jornadaSetmanal" value="">
                <br><br>
                
                <label for="funcioCarrec">Funció</label><br>
                <input type="text" name="funcioCarrec" value="">
                <br><br><br>
                
                <button type="submit" name="enviar" value="enviar">Insertar empleat</button>

                </form>

</body>
</html>