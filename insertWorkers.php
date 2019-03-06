<?php
error_reporting(E_ALL & ~E_NOTICE);
include('php/insertWorkersData.php');
?>

<div class="modal fade" id="insertar" role="dialog">  
    <div class="modal-dialog">
      <div class="modal-content container">
            <div class="tablas">
                <form role="form" method="post" action="consultWorkers.php">

                <label for="nom">Nom</label><br>
                <input type="text" name="nom" required>
                <br><br>
                
                <label for="primerCognom">1er Cognom</label><br>
                <input type="text" name="primerCognom" required>
                <br><br>
                
                <label for="segonCognom">2on Cognom</label><br>
                <input type="text" name="segonCognom" required> 
                <br><br>
                
                <label for="dni">DNI</label><br>
                <input type="text" name="dni" required>
                <br><br>
                
                <label for="dataNaixament">Data de naixement (DD/MM/AAAA)</label><br>
                <input type="text" name="dataNaixament" required>
                <br><br>
                
                <label for="sexe">Sexe</label><br>
                <input type="radio" name="sexe" value="1"required>Home
                <input type="radio" name="sexe" value="0"required>Dona
                <br><br>
                
                <label for="nacionalitat">Nacionalitat</label><br>
                <input type="text" name="nacionalitat" required>
                <br><br>
                
                <label for="adreça">Adreça</label><br>
                <input type="text" name="adreça" required>
                <br><br>

                <label for="codiPostal">Codi postal</label><br>
                <input type="number" name="codiPostal" required>
                <br><br>
            </div>

            <div class="tablas">
                <label for="email">Correu electrónic :</label><br>
                <input type="text" name="email" required>
                <br><br>

                <label for="tipusTelefon">Tipus de telèfon</label><br>
                <input type="radio" name="tipusTelefon" value="1" required>Fixe
                <input type="radio" name="tipusTelefon" value="0" required>Movil
                <br><br>

                <label for="telefonFixe">Telèfon :</label><br>
                <input type="number" name="telefon" required>
                <br><br>

                <label for="nomContacte">Nom del contacte :</label><br>
                <input type="text" name="nomContacte" required>
                <br><br>
                
                <label for="poblacio">Població</label><br>
                <input type="text" name="poblacio" required>
                <br><br>
                
                <label for="formacio">Formació</label><br>
                <input type="text" name="formacio" required>
                <br><br>
                
                <label for="disminucio">Disminució (%)</label><br>
                <input type="number" name="disminucio" required>
                <br><br>

                <label for="compteBancari">Compte bancari</label><br>
                <input type="text" name="compteBancari" required>
                <br><br>

                <label for="numeroSeguretatSocial">Numero de la Seguretat Social</label><br>
                <input type="text" name="numeroSeguretatSocial" required>
                <br><br>
            </div>

            <div class="tablas2">
                <label for="area">Area asignada</label><br>
                <input type="text" name="area" required>
                <br><br>
                
                <label for="responsable">Responsable</label><br>
                <input type="text" name="responsable" required>
                <br><br>
                
                <label for="projecte">Projecte assignat</label><br>
                <input type="text" name="projecte" required>
                <br><br>
                
                <label for="llcoFisicTreball">Lloc fisic del treball</label><br>
                <input type="text" name="llocFisicTreball" required>
                <br><br>
                
                <label for="horaInici">Hora d'inici</label><br>
                <input type="number" name="horaInici" required>
                <br><br>
                
                <label for="horaFinal">Hora de finalització</label><br>
                <input type="number" name="horaFinal" required>
                <br><br>
                
                <label for="jornadaSetmanal">Jornada setmanal</label><br>
                <input type="number" name="jornadaSetmanal" required>
                <br><br>
                
                <label for="funcioCarrec">Funció</label><br>
                <input type="text" name="funcioCarrec" required>

                <p style="text-indent: 100%;white-space: nowrap;overflow:hidden;">
                texto oculto
                </p>

            </div>
            <button type="submit" class="btn btn-success botonEnviar" names="enviar" value="enviar">Insertar empleat</button>
        </div>
    </div>
        <br>
        </form>
        </div>