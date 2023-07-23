<?php
    require_once 'model/db_config.php';
    require_once 'model/request.php';

    function getList() {
        $conn = dbConnect();

        // Lister les fiches
        $sql = getSqlList();
        $entries = $conn->query($sql);

        // Fermer la connexion
        $conn->close();

        return $entries;
    }



