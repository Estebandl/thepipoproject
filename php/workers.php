<?php
    include('php/connect.php');

    if ($conexion) {
        $db = $conexion->select_db(DB_DATABASE);
        if ($db) {
            $consulta = "SELECT e.dni, e.nom, e.cognom1, e.cognom2, e.data_naixement FROM `empleats` e, `telefons` t, `mails` m WHERE e.dni = t.dni_empleat AND e.dni = m.dni_empleat";

            $resultado = $conexion->query($consulta);
            

                print('<div class="table100 containerWorkers">');

                    print('<table class="tableWorkers">');

                        print('<thead>');

                            print('<tr class="table100-head">');
                                print('<td class="column1">DNI</td>');
                                print('<td class="column2">Nom</td>');
                                print('<td class="column3">Cognom1</td>');
                                print('<td class="column4">Cognom2</td>');
                                print('<td class="column5">Data naixement</td>');
                                print('<td class="column6">Actions</td>');
                            print('</tr>');

                            print('</thead>');
                            print('<tbody>');

                            while ($fila = $resultado->fetch_assoc()) {
                                
                                print('<tr>');
                                    print('<td id="dni" class="column1">');
                                        print($fila['dni']);
                                    print('</td>');
                                    print('<td id="name" class="column2">');
                                        print($fila['nom']);
                                    print('</td>');
                                    print('<td id="fSurname" class="column3">');
                                        print($fila['cognom1']);
                                    print('</td>');
                                    print('<td id="sSurname" class="column4">');
                                        print($fila['cognom2']);
                                    print('</td>');
                                    print('<td id="bDate" class="column5">');
                                        print($fila['data_naixement']);
                                    print('</td>');
                                    print('<td id="actions" class="column6">');
                                        print('<i class="fas fa-address-card icons" style="padding: 5px;"></i>');
                                        print('<i class="fas fa-address-book icons" style="padding: 5px;"></i>');
                                        print('<i class="fas fa-pen icons" style="padding: 5px;"></i>');
                                        print('<i class="fas fa-times icons" style="padding: 5px;"></i>');
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