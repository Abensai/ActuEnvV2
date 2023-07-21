<?php
    require_once 'model/db_config.php';

// Lister les fiches
    $sql = "SELECT * FROM fiches";
    $entries = $conn->query($sql);

// Fermer la connexion
$conn->close();
