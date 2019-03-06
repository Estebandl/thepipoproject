<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Formulari d'introduccio d'empleats</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<div class="modal fade" id="insertar" role="dialog">  
    <div class="modal-dialog">
      <div class="modal-content container">
            <div class="tablas">
                <form role="form" method="post" action="php/insertWorkersData.php">

                <label for="nom">Nom</label><br>
                <input type="text" name="nom" required>
                <br><br>
                
                <label for="primerCognom">1er Cognom</label><br>
                <input type="text" name="primerCognom" >
                <br><br>
                
                <label for="segonCognom">2on Cognom</label><br>
                <input type="text" name="segonCognom" >
                <br><br>
                
                <label for="dni">DNI</label><br>
                <input type="text" name="dni" >
                <br><br>
                
                <label for="dataNaixament">Data de naixement (DD/MM/AAAA)</label><br>
                <input type="text" name="dataNaixament" >
                <br><br>
                
                <label for="sexe">Sexe</label><br>
                <input type="radio" name="sexe" value="1">Home
                <input type="radio" name="sexe" value="0">Dona
                <br><br>
                
                <label for="nacionalitat">Nacionalitat</label><br>
                <input type="text" name="nacionalitat" >
                <br><br>
                
                <label for="adreça">Adreça</label><br>
                <input type="text" name="adreça" >
                <br><br>

                <label for="codiPostal">Codi postal</label><br>
                <input type="number" name="codiPostal" >
                <br><br>
            </div>

            <div class="tablas">
                <label for="email">Correu electrónic :</label><br>
                <input type="text" name="email" >
                <br><br>

                <label for="tipusTelefon">Tipus de telèfon</label><br>
                <input type="radio" name="tipusTelefon" value="1">Fixe
                <input type="radio" name="tipusTelefon" value="0">Movil
                <br><br>

                <label for="telefonFixe">Telèfon :</label><br>
                <input type="text" name="telefon" >
                <br><br>

                <label for="nomContacte">Nom del contacte :</label><br>
                <input type="text" name="nomContacte" >
                <br><br>
                
                <label for="poblacio">Població</label><br>
                <input type="text" name="poblacio" >
                <br><br>
                
                <label for="formacio">Formació</label><br>
                <input type="text" name="formacio" >
                <br><br>
                
                <label for="disminucio">Disminució (%)</label><br>
                <input type="number" name="disminucio" >
                <br><br>

                <label for="compteBancari">Compte bancari</label><br>
                <input type="text" name="compteBancari" >
                <br><br>

                <label for="numeroSeguretatSocial">Numero de la Seguretat Social</label><br>
                <input type="text" name="numeroSeguretatSocial" >
                <br><br>
            </div>

            <div class="tablas2">
                <label for="area">Area asignada</label><br>
                <input type="text" name="area" >
                <br><br>
                
                <label for="responsable">Responsable</label><br>
                <input type="text" name="responsable" >
                <br><br>
                
                <label for="projecte">Projecte assignat</label><br>
                <input type="text" name="projecte" >
                <br><br>
                
                <label for="llcoFisicTreball">Lloc fisic del treball</label><br>
                <input type="text" name="llocFisicTreball" >
                <br><br>
                
                <label for="horaInici">Hora d'inici</label><br>
                <input type="number" name="horaInici" >
                <br><br>
                
                <label for="horaFinal">Hora de finalització</label><br>
                <input type="number" name="horaFinal" >
                <br><br>
                
                <label for="jornadaSetmanal">Jornada setmanal</label><br>
                <input type="number" name="jornadaSetmanal" >
                <br><br>
                
                <label for="funcioCarrec">Funció</label><br>
                <input type="text" name="funcioCarrec" >
            </div>
        </div>
        <button type="submit" class="btn btn-success botonEnviar" names="enviar" value="enviar">Insertar empleat</button>
    </div>
        <br>
        </form>
        </div>

</body>
</html>