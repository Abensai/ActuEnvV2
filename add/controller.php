<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../model/get_data.php';

    require_once '../model/db_config.php';

    // Insérer la nouvelle fiche dans la base de données
    $sql = "INSERT INTO fiches (civility, name, firstname, address, postal_code, city, country, date_of_birth, phone, fax, email, url) VALUES ('$civility', '$name', '$firstname', '$address', '$postal_code', '$city', '$country', '$date_of_birth', '$phone', '$fax', '$email', '$url')";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../index.php');
        echo "Fiche ajoutée avec succès.";
    } else {
        echo "Erreur lors de l'ajout de la fiche : " . $conn->error;
    }

    // Fermer la connexion
    $conn->close();
}
