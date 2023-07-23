<?php
    require_once 'list/controller.php';
    $entries = getList();

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

