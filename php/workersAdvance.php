<?php

    $dni = $_POST['dniFocus'];

    if ($conexion) {
        $db = $conexion->select_db(DB_DATABASE);
        if ($db) {
            $consulta = "SELECT e.nom, e.cognom1, e.cognom2, e.data_naixement, e.funcio_carrec FROM `empleats` e, `telefons` t, `mails` m WHERE e.dni = t.dni_empleat AND e.dni = " . $conexion->real_escape_string($dni) ."";

            $resultado = $conexion->query($consulta);
            

                print('<div class="table100 containerWorkers">');

                    print('<table class="tableWorkers">');

                        print('<thead>');

                            print('<tr class="table100-head">');
                                print('<th class="column1">Nom</th>');
                                print('<th class="column2">Primer Cognom</th>');
                                print('<th class="column3">Segon Cognom</th>');
                                print('<th class="column4">Data naixement</th>');
                                print('<th class="column5">Carrec</th>');
                            print('</tr>');

                            print('</thead>');
                            print('<tbody>');

                            while ($fila = $resultado->fetch_assoc()) {
                                
                                print('<tr>');
                                    print('<td id="name" class="column2">');
                                        print($fila['nom']);
                                    print('</td>');
                                    print('<td id="fSurname" class="column3">');
                                        print($fila['cognom1']);
                                    print('</td>');
                                    print('<td id="sSurname" class="column4">');
                                        print($fila['cognom2']);
                                    print('</td>');
                                    print('<td id="bDate" class="column4">');
                                        print($fila['data_naixement']);
                                    print('</td>');
                                    print('<td id="fCarrec" class="column5">');
                                        print($fila['funcio_carrec']);
                                    print('</td>');
                                print('</tr>');

                            }
                    
                        print('</tbody>');

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