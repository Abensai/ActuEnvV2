<?php
require_once 'model/db_config.php';
require_once 'list/controller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANNUAIRE - Liste Des Fiches</title>
    <link href="assets/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Liste Des Fiches</h1>
    <?php
    if ($entries->num_rows > 0) {
        while ($row = $entries->fetch_assoc()) {
            echo '<div class="fiche">';
            echo '<h2>' . $row['civility'] . ' ' . $row['firstname'] . ' ' . $row['name'] . '</h2>';
            echo '<p><strong>Adresse:</strong> ' . $row['address'] . ', ' . $row['postal_code'] . ' ' . $row['city'] . ', ' . $row['country'] . '</p>';
            echo '<p><strong>Date de naissance:</strong> ' . $row['date_of_birth'] . '</p>';
            echo '<p><strong>Téléphone:</strong> ' . $row['phone'] . '</p>';
            echo '<p><strong>Fax:</strong> ' . $row['fax'] . '</p>';
            echo '<p><strong>Email:</strong> ' . $row['email'] . '</p>';
            echo '<p><strong>URL:</strong> <a href="' . $row['url'] . '" target="_blank">' . $row['url'] . '</a></p>';
            echo '<p class="update"><a href="edit/vue.php?id=' . $row['id'] . '">Modifier</a></p>';
            echo '</div>';
        }

    }
    ?>
    <div class="add"><a href="add/vue.php">Ajouter une nouvelle fiche</a></div>
</div>
</body>
</html>
