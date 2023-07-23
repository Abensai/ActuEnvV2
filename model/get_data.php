<?php
// Récupérer les données du formulaire

function getId() {
    return $_POST['id'];
}

function getCivility() {
    return htmlentities($_POST['civility']);
}

function getName() {
    return htmlentities($_POST['name']);
}

function getFirstname() {
    return htmlentities($_POST['firstname']);
}

function getAddress() {
    return htmlentities($_POST['address']);
}


function getPostalCode() {
    return htmlentities($_POST['postal_code']);
}

function getCity() {
    return htmlentities($_POST['city']);
}

function getCountry() {
    return htmlentities($_POST['country']);
}

function getDateOfBirth() {
    return htmlentities($_POST['date_of_birth']);
}

function getPhone() {
    return htmlentities($_POST['phone']);
}

function getFax(){
    return htmlentities($_POST['fax']);
}

function getEmail(){
    return htmlentities($_POST['email']);
}

function getUrl(){
    return htmlentities($_POST['url']);
}

