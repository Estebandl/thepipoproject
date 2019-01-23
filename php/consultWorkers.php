<?php
    function worker($dni) {

        include('connect.php');

		if ($conexion) {
			$db = $conexion->select_db(DB_DATABASE);
			if ($db) {
				$consulta = "SELECT * FROM `empleats`";

				$resultado = $conexion->query($consulta);

                print('<table id="tableWorkers">');

				while ($fila = $resultado->fetch_assoc()) {

                    print('<tr>');
                        print('<td>Nom:</td>');
                        print('<td id="name">');
                        print($fila['nombre']);
                        print('</td>');
                    print('</tr>');
                    /*print('
                    <tr>
                        <td>Cognom1:</td>
                        <td id="fSurname"></td>
                    </tr>
                    <tr>
                        <td>Cognom2:</td>
                        <td id="sSurname"></td>
                    </tr>
                    <tr>
                        <td>DNI:</td>
                        <td id="dni"></td>
                    </tr>
                    <tr>
                        <td>Data naixement: dd-mm-aaaa</td>
                        <td id="bDate"></td>
                    </tr>
                    <tr>
                        <td>Sexe (Home/Dona)</td>
                        <td id="sex"></td>
                    </tr>
                    <tr>
                        <td>Nacionalitat:</td>
                        <td id="country"></td>
                    </tr>
                    <tr>
                        <td>Adreça (Via/nom_carrer/núm /pis/porta)</td>
                        <td id="adress"></td>
                    </tr>
                    <tr>
                        <td>Codi postal: XXXXX</td>
                        <td id="postal"></td>
                    </tr>
                    <tr>
                        <td>Població</td>
                        <td id="poblation"></td>
                    </tr>
                    <tr>
                        <td>Telèfon personal</td>
                        <td id="phoneNum"></td>
                    </tr>
                    <tr>
                        <td>Mail personal</td>
                        <td id="email"></td>
                    </tr>
                    <tr>
                        <td>Formació:</td>
                        <td id="work"></td>
                    </tr>
                    <tr>
                        <td>Disminució: (Percentatge)</td>
                        <td id="dismunuation"></td>
                    </tr>
                    <tr>
                        <td>Compte bancari: IBAN</td>
                        <td id="iban"></td>
                    </tr>
                    <tr>
                        <td>Número Seguretat Social</td>
                        <td id="ssc"></td>
                    </tr>
                    <tr>
                        <td>Telèfon contacte avís emergències</td>
                        <td id="emergTel"></td>
                    </tr>
                    <tr>
                        <td>Nom contacte avís emergències</td>
                        <td id="emergName"></td>
                    </tr>
                    <tr>
                        <td>Data alta: dd-mm-aaaa</td>
                        <td id="startDate"></td>
                    </tr>
                    <tr>
                        <td>Data baixa: dd-mm-aaaa</td>
                        <td id="endDate"></td>
                    </tr>
                    <tr>
                        <td>Venciment contracte: dd-mm-aaaa</td>
                        <td id="contractEnd"></td>
                    </tr>
                    <tr>
                        <td>Tipus de contracte</td>
                        <td id="contractType"></td>
                    </tr>
                    <tr>
                        <td>Grup de cotització</td>
                        <td id="cotitGroup"></td>
                    </tr>
                    <tr>
                        <td>Informació nómina</td>
                        <td id="nominInf"></td>
                    </tr>
                    <tr>
                        <td>Excedència voluntària data inici:</td>
                        <td id="startDateEx"></td>
                    </tr>
                    <tr>
                        <td>Telèfon feina</td>
                        <td id="workTel"></td>
                    </tr>
                    <tr>
                        <td>Mail feina</td>
                        <td id="workEmail"></td>
                    </tr>
                    <tr>
                        <td>Àrea assignada</td>
                        <td id="assignArea"></td>
                    </tr>
                    <tr>
                        <td>Responsable</td>
                        <td id="resp"></td>
                    </tr>
                    <tr>
                        <td>Projecte assignat</td>
                        <td id="assingProj"></td>
                    </tr>
                    <tr>
                        <td>Lloc físic de treball</td>
                        <td id="workPlace"></td>
                    </tr>
                    <tr>
                        <td>Horari</td>
                        <td id="schedule"></td>
                    </tr>
                    <tr>
                        <td>Jornada setmanal</td>
                        <td id="weekSchedule"></td>
                    </tr>
                    <tr>
                        <td>Funció / Càrrec</td>
                        <td id="workPosition"></td>
                    </tr>');*/
					
                }
                
                print('</table>');

                include('close.php');

			} else {
				print("Impossible connectar amb la base de dades.");
			}
		} else {
			print("Impossible connectar amb el servidor.");
		}
	}

	if (isset($_POST['consult'])) {
		$dni = $_POST['dni'];

		if (isset($dni)) {
            worker($dni);
		} else {
			print("Torna a introduir el DNI.");
        }
	}
?>