<?php
    include('php/connect.php');

    if ($conexion) {
        $db = $conexion->select_db(DB_DATABASE);
        if ($db) {
            $consulta = "SELECT e.dni, e.nom, e.cognom1, e.cognom2, e.data_naixement FROM `empleats` e, `telefons` t, `mails` m WHERE e.dni = t.dni_empleat AND e.dni = m.dni_empleat";

            $resultado = $conexion->query($consulta);
            

                print('<div id="containerWorkers">');

                    print('<table id="tableWorkers">');

                        print('<tr>');
                            print('<td>DNI</td>');
                            print('<td>Nom</td>');
                            print('<td>Cognom1</td>');
                            print('<td>Cognom2</td>');
                            print('<td>Data naixement</td>');
                            print('<td>Actions</td>');
                        print('</tr>');

                        while ($fila = $resultado->fetch_assoc()) {
                            
                            print('<tr>');
                                print('<td id="dni">');
                                    print($fila['dni']);
                                print('</td>');
                                print('<td id="name">');
                                    print($fila['nom']);
                                print('</td>');
                                print('<td id="fSurname">');
                                    print($fila['cognom1']);
                                print('</td>');
                                print('<td id="sSurname">');
                                    print($fila['cognom2']);
                                print('</td>');
                                print('<td id="bDate">');
                                    print($fila['data_naixement']);
                                print('</td>');
                                print('<td id="actions">');
                                    print('<i class="fas fa-address-card"></i>');
                                    print('<i class="fas fa-address-book"></i>');
                                    print('<i class="fas fa-pen"></i>');
                                    print('<i class="fas fa-times"></i>');
                                print('</td>');
                            print('</tr>');

                        }
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