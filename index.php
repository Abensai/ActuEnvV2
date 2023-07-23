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
        require_once 'list/vue.php';
    ?>
    <div class="add"><a href="add/vue.php">Ajouter une nouvelle fiche</a></div>
</div>
</body>
</html>
