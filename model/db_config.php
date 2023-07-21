<?php

// Remplacez les valeurs entre les guillemets par les informations de connexion à votre base de données.
// Connexion à la base de données
$conn = new mysqli('localhost', 'root', '', 'yearbook');

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}



