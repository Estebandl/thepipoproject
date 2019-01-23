<?php

session_start();

include('connect.php');

$sql = "INSERT INTO empleats (dni, nombre, cognom1, cognom2, data_naixement, sexe, nacionalitat, adreca, codi_postal, poblacion, telefon_personal, mail_personal, formacio, disminucio, compte_bancari, n_seguretat_social, telefon_contacte_avis_emergencies, nom_contacte_avis_emergencies, data_alta, data_baixa, venciment_contracte, tipus_contracte, grup_cotitzacio, informacio_nomina, telefon_feina, mail_feina, area_assignada, responsable, projecte_assignat, lloc_fisic_treball, horari_inici, horari_final, jornada_setmanal, funcio_carrec)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>