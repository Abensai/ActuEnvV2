function validateForm() {
    let civility = document.getElementById('civility').value;
    let email = document.getElementById('email').value;
    let url = document.getElementById('url').value;

    // Vérification de la civilité
    if (civility === '') {
        alert("Veuillez sélectionner une civilité.");
        return false;
    }

    // Vérification de l'email
    if (email !== '' && !isValidEmail(email)) {
        alert("L'adresse email n'est pas valide.");
        return false;
    }

    // Vérification de l'URL
    if (url !== '' && !isValidURL(url)) {
        alert("L'URL n'est pas valide.");
        return false;
    }

    // Le formulaire est valide
    return true;
}

function isValidEmail(email) {
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailPattern.test(email);
}

function isValidURL(url) {
    let urlPattern = /^(https?:\/\/)?([a-zA-Z0-9.-]+\.[a-zA-Z]{2,})(:[0-9]+)?(\/.*)?$/;
    return urlPattern.test(url);
}
