<?php
function getSqlList() {
    return "
            SELECT * 
            FROM fiches
           ";
}
function getSqlAdd($civility, $name, $firstname, $address, $postal_code, $city, $country, $date_of_birth,
    $phone, $fax, $email, $url) {
    return "
            INSERT INTO fiches (
                    civility,
                    name, 
                    firstname, 
                    address, 
                    postal_code, 
                    city, 
                    country, 
                    date_of_birth, 
                    phone, 
                    fax, 
                    email, 
                    url) 
            VALUES (
                 '$civility',
                 '$name',
                 '$firstname',
                 '$address',
                 '$postal_code',
                 '$city',
                 '$country',
                 '$date_of_birth',
                 '$phone',
                 '$fax',
                 '$email',
                 '$url')
                ";
}
function getSqlEdit($civility, $name, $firstname, $address, $postal_code, $city, $country, $date_of_birth,
    $phone, $fax, $email, $url, $id) {
    return "
            UPDATE fiches 
            SET 
                civility='$civility', 
                name='$name', 
                firstname='$firstname', 
                address='$address',
                postal_code='$postal_code', 
                city='$city', 
                country='$country', 
                date_of_birth='$date_of_birth',
                phone='$phone', 
                fax='$fax', 
                email='$email', 
                url='$url' 
            WHERE id=$id
           ";
}

function getSqlFicheId($id){
    return "
            SELECT * 
            FROM fiches 
            WHERE id=$id
           ";
}
