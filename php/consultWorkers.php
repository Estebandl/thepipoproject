<?php
    function worker($dni) {

        print('<link rel="stylesheet" type="text/css" media="screen" href="../css/main.css"/>');

        include('connect.php');

		if ($conexion) {
			$db = $conexion->select_db(DB_DATABASE);
			if ($db) {
				$consulta = "SELECT * FROM `empleats` WHERE dni = " . "'". $conexion->real_escape_string($dni) ."'";

				$resultado = $conexion->query($consulta);

                print('<div id="containerWorkers">');

                    print('<table id="tableWorkers">');

                    while ($fila = $resultado->fetch_assoc()) {

                        print('<tr>');
                            print('<td>Nom:</td>');
                            print('<td id="name">');
                            print($fila['nombre']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Cognom1:</td>');
                            print('<td id="fSurname">');
                                print($fila['cognom1']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Cognom2:</td>');
                            print('<td id="sSurname">');
                                print($fila['cognom2']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>DNI:</td>');
                            print('<td id="dni">');
                                print($fila['dni']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Data naixement: dd-mm-aaaa</td>');
                            print('<td id="bDate">');
                                print($fila['data_naixement']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Sexe (Home/Dona)</td>');
                            print('<td id="sex">');
                                print($fila['sexe']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Nacionalitat:</td>');
                            print('<td id="country">');
                                print($fila['dni']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Adreça (Via/nom_carrer/núm /pis/porta)</td>');
                            print('<td id="adress">');
                                print($fila['adreca']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Codi postal: XXXXX</td>');
                            print('<td id="postal">');
                                print($fila['codi_postal']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Població</td>');
                            print('<td id="poblation">');
                                print($fila['poblacion']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Formació:</td>');
                            print('<td id="work">');
                                print($fila['formacio']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Disminució: (Percentatge)</td>');
                            print('<td id="dismunuation">');
                                print($fila['disminucio']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Compte bancari: IBAN</td>');
                            print('<td id="iban">');
                                print($fila['compte_bancari']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Número Seguretat Social</td>');
                            print('<td id="ssc">');
                                print($fila['n_seguretat_social']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Àrea assignada</td>');
                            print('<td id="assignArea">');
                                print($fila['area_assignada']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Responsable</td>');
                            print('<td id="resp">');
                                print($fila['responsable']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Projecte assignat</td>');
                            print('<td id="assingProj">');
                                print($fila['projecte_assignat']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Lloc físic de treball</td>');
                            print('<td id="workPlace">');
                                print($fila['lloc_fisic_treball']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Inici de Horari</td>');
                            print('<td id="schedule">');
                                print($fila['horari_inici']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Fí de Horari</td>');
                            print('<td id="schedule">');
                                print($fila['horari_final']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Jornada setmanal</td>');
                            print('<td id="weekSchedule">');
                                print($fila['jornada_setmanal']);
                            print('</td>');
                        print('</tr>');
                        print('<tr>');
                            print('<td>Funció / Càrrec</td>');
                            print('<td id="workPosition">');
                                print($fila['funcio_carrec']);
                            print('</td>');
                        print('</tr>');
                        
                    }
                    
                    print('</table>');

                print('</div>');

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
            print('<hr/>');
            print('<button onClick="location.href = "../consultWorkers.html">Torna a Cercar</button>');
		} else {
			print("Torna a introduir el DNI.");
        }
	}
?>