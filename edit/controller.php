<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../model/get_data.php';
    require_once '../model/db_config.php';

    // Mettre à jour la fiche dans la base de données
    $sql = "UPDATE fiches SET civility='$civility', name='$name', firstname='$firstname', address='$address', 
                  postal_code='$postal_code', city='$city', country='$country', date_of_birth='$date_of_birth', 
                  phone='$phone', fax='$fax', email='$email', url='$url' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../index.php');
        echo "Fiche modifiée avec succès.";
    } else {
        echo "Erreur lors de la modification de la fiche : " . $conn->error;
    }

    // Fermer la connexion
    $conn->close();
}


