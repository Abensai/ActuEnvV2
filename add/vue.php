<?php require_once 'controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANNUAIRE - Ajouter Une Fiche</title>
    <link href="./../assets/styles.css" rel="stylesheet">
    <script src="./../assets/script.js"></script>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateForm()">
    <h1>Ajouter Une Fiche</h1>
    <label for="civility">Civilité:</label>
    <select name="civility" id="civility" required>
        <option value="">Sélectionnez</option>
        <option value="M">Monsieur</option>
        <option value="Mme">Madame</option>
    </select>

    <label for="name">Nom:</label>
    <input type="text" name="name" id="name" required>

    <label for="firstname">Prénom:</label>
    <input type="text" name="firstname" id="firstname" required>

    <label for="address">Adresse:</label>
    <input type="text" name="address" id="address" required>

    <label for="postal_code">Code postal:</label>
    <input type="text" name="postal_code" id="postal_code" required pattern="[0-9]{5}" title="Entrez un code postal valide à 5 chiffres">

    <label for="city">Ville:</label>
    <input type="text" name="city" id="city" required>

    <label for="country">Pays:</label>
    <input type="text" name="country" id="country" required>

    <label for="date_of_birth">Date de naissance:</label>
    <input type="date" name="date_of_birth" id="date_of_birth" required>

    <label for="phone">Téléphone:</label>
    <input type="tel" name="phone" id="phone" required pattern="[0-9]{10}" title="Entrez un numéro de téléphone valide à 10 chiffres">

    <label for="fax">Fax:</label>
    <input type="tel" name="fax" id="fax" pattern="[0-9]{10}" title="Entrez un numéro de fax valide à 10 chiffres">

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="url">URL:</label>
    <input type="url" name="url" id="url" required>

    <input type="submit" value="Soumettre">
    <div class="previous"><a href="../index.php">Liste des fiches</a></div>
</form>
</body>
</html>
