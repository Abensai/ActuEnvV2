<?php include 'controller.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANNUAIRE - Modifier Une Fiche</title>
    <link href="./../assets/styles.css" rel="stylesheet">
    <script src="./../assets/script.js"></script>
</head>
<body>

<?php
// Récupérer l'ID de la fiche à modifier depuis l'URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once '../model/db_config.php';

// Récupérer les informations de la fiche à partir de l'ID
    $sql = "SELECT * FROM fiches WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
// Afficher le formulaire pré-rempli avec les informations actuelles de la fiche
        $row = $result->fetch_assoc();
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
              onsubmit="return validateForm()">
            <h1>Modifier Une Fiche</h1>

            <label for="id" hidden>id:</label>
            <input type="text" name="id" id="id" value="<?php echo $row['id']; ?>" hidden>
            <label for="civility">Civilité:</label>
            <select name="civility" id="civility" required>
                <option value="M" <?php if ($row['civility'] == 'M') echo 'selected'; ?>>M.</option>
                <option value="Mme" <?php if ($row['civility'] == 'Mme') echo 'selected'; ?>>Mme</option>
            </select>

            <label for="name">Nom:</label>
            <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" required>

            <label for="firstname">Prénom:</label>
            <input type="text" name="firstname" id="firstname" value="<?php echo $row['firstname']; ?>" required>

            <label for="address">Adresse:</label>
            <input type="text" name="address" id="address" value="<?php echo $row['address']; ?>" required>

            <label for="postal_code">Code postal:</label>
            <input type="text" name="postal_code" id="postal_code" value="<?php echo $row['postal_code']; ?>" required
                   pattern="[0-9]{5}" title="Entrez un code postal valide à 5 chiffres">

            <label for="city">Ville:</label>
            <input type="text" name="city" id="city" value="<?php echo $row['city']; ?>" required>

            <label for="country">Pays:</label>
            <input type="text" name="country" id="country" value="<?php echo $row['country']; ?>" required>

            <label for="date_of_birth">Date de naissance:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $row['date_of_birth']; ?>"
                   required>

            <label for="phone">Téléphone:</label>
            <input type="tel" name="phone" id="phone" value="<?php echo $row['phone']; ?>" required pattern="[0-9]{10}"
                   title="Entrez un numéro de téléphone valide à 10 chiffres">

            <label for="fax">Fax:</label>
            <input type="tel" name="fax" id="fax" value="<?php echo $row['fax']; ?>" pattern="[0-9]{10}"
                   title="Entrez un numéro de fax valide à 10 chiffres">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" required>

            <label for="url">URL:</label>
            <input type="url" name="url" id="url" value="<?php echo $row['url']; ?>" required>

            <input type="submit" value="Soumettre">
            <div class="previous"><a href="../index.php">Liste des fiches</a></div>
        </form>
        <?php
    } else {
        echo "Aucune fiche trouvée avec cet ID.";
    }

    // Fermer la connexion
    $conn->close();
}
?>
</body>
</html>
