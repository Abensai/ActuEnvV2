<?php

require_once '../model/get_data.php';
require_once '../model/db_config.php';
require_once '../model/request.php';

function dataForm($request){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $civility = getCivility();
        $name = getName();
        $firstname = getFirstname();
        $address = getAddress();
        $postal_code = getPostalCode();
        $city = getCity();
        $country = getCountry();
        $date_of_birth = getDateOfBirth();
        $phone = getPhone();
        $fax = getFax();
        $email = getEmail();
        $url = getUrl();

        $conn =  dbConnect();

        // Mettre à jour la fiche dans la base de données
        $sql = '';
        $message = '';

        if ($request === 'add'){
            $sql = getSqlAdd($civility, $name, $firstname, $address, $postal_code, $city, $country, $date_of_birth,
            $phone, $fax, $email, $url);
            $message = "Fiche ajoutée avec succès. 
            <div class=\"previous\"><a href=\"../index.php\">  retour a la liste des fiches</a></div>'";

        }elseif ($request === 'edit'){
            $id = getId();
            $sql = getSqlEdit($civility, $name, $firstname, $address, $postal_code, $city, $country, $date_of_birth,
            $phone, $fax, $email, $url, $id);
            $message = "Fiche modifiée avec succès.
            <div class=\"previous\"><a href=\"../index.php\">  retour a la liste des fiches</a></div>'";

        }

        if ($conn->query($sql) === TRUE) {
            return $message;
        }

        return "Erreur lors de la requete : " . $conn->error;
    }
}
