<?php

    $dni = $_POST['dniFocus'];

    if ($conexion) {
        $db = $conexion->select_db(DB_DATABASE);
        if ($db) {
            $consulta = "SELECT e.dni FROM `empleats` e, `telefons` t, `mails` m WHERE e.dni = t.dni_empleat AND e.dni = " . $conexion->real_escape_string($dni) . "";

            $resultado = $conexion->query($consulta);
            
            $index = 1;
            $dniOld;

                print('<div class="table100 containerWorkers">');

                    print('<table class="tableWorkers">');

                        print('<thead>');

                            print('<tr class="table100-head">');
                                print('<th class="column1">DNI</th>');
                            print('</tr>');

                            print('</thead>');
                            print('<tbody>');

                            while ($fila = $resultado->fetch_assoc()) {
                                
                                if ($dniOld != $fila['dni']) {

                                print('<tr>');
                                    print('<td id="dni-'. $index . '" class="column1">');
                                        print($fila['dni']);
                                    print('</td>');
                                print('</tr>');

                                $dniOld = $fila['dni'];
                                $index++;
                                } else {
                                    $dniOld = $fila['dni'];
                                }
                            }
                    
                        print('</tbody>');

                    print('</table>');

                print('</div>');

        } else {
            print("Impossible connectar amb la base de dades.");
        }

    } else {
        print("Impossible connectar amb el servidor.");
    }
?>