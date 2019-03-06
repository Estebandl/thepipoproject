<?php

    $dni = $_REQUEST['dni'];

    if ($conexion) {
        $db = $conexion->select_db(DB_DATABASE);
        if ($db) {
            $consulta = "SELECT e.dni, e.nom, e.cognom1, e.cognom2, e.data_naixement FROM `empleats` e, `telefons` t, `mails` m WHERE e.dni = t.dni_empleat AND e.dni = m.dni_empleat AND dni = " . "'". $conexion->real_escape_string($dni) ."'";

            $resultado = $conexion->query($consulta);
            
            $index = 1;

                print('<div class="table100 containerWorkers">');

                    print('<table class="tableWorkers">');

                        print('<thead>');

                            print('<tr class="table100-head">');
                                print('<th class="column1">DNI</th>');
                                print('<th class="column2">Nom</th>');
                                print('<th class="column3">Primer Cognom</th>');
                                print('<th class="column4">Segon Cognom</th>');
                                print('<th class="column5">Data naixement</th>');
                                print('<th class="column6">Actions</th>');
                            print('</tr>');

                            print('</thead>');
                            print('<tbody>');

                            while ($fila = $resultado->fetch_assoc()) {
                                
                                print('<tr>');
                                    print('<td id="dni-' . $index . '" class="column1">');
                                        print($fila['dni']);
                                    print('</td>');    
                                    print('<td id="name-' . $index . '" class="column2">');
                                        print($fila['nom']);
                                    print('</td>');
                                    print('<td id="fSurname-' . $index . '" class="column3">');
                                        print($fila['cognom1']);
                                    print('</td>');
                                    print('<td id="sSurname-' . $index . '" class="column4">');
                                        print($fila['cognom2']);
                                    print('</td>');
                                    print('<td id="bDate-' . $index . '" class="column5">');
                                        print($fila['data_naixement']);
                                    print('</td>');
                                    print('<td id="actions" class="column6">');
                                        print('<i class="fas fa-address-card icons" style="padding: 5px;"></i>');
                                        print('<i class="fas fa-briefcase icons" style="padding: 5px;"></i>');
                                        print('<i class="fas fa-pen icons" style="padding: 5px;"></i>');
                                        print('<i class="fas fa-times icons" style="padding: 5px;"></i>');
                                    print('</td>');
                                print('</tr>');

                                $index++;
                            }
                        
                        print('</tbody');

                    print('</table>');

                print('</div>');

            include('php/close.php');

        } else {
            print("Impossible connectar amb la base de dades.");
        }

    } else {
        print("Impossible connectar amb el servidor.");
    }
?>