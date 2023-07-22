# ActuEnvV2
Test Technique Actu Environnement version 2
#### temps de realisation estimee : 1h30

```bash
module "annuaire" très simple, en responsive design 
et dump de la table MySQL qui permet d'avoir les fonctionnalités de:


• Créer des fiches contenant :
civilité, nom, prénom, adresse, cp, ville, pays, date de naissance, 
téléphone, fax, email (avec vérification de l'intégrité du format), 
url (avec vérification de l'intégrité du format).

• Lister des fiches

• Modifier des fiches
```

sans utilisation de Bootstrap ni de Frameworks et contrôles préférentiels des champs de formulaire en javascript.


## Structure:
```python
add : Fonction Créer des fiches 
edit : Fonction Modifier des fiches
list : Fonction Lister des fiches
assets : Fichiers css et js
export : Export de la bdd local
model : Fonction de creation et de communication de la bdd
```
