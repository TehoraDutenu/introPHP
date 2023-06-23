<?php

// on va créer une connection à la BDD
// on va définir les constantes pour se connecter à la BDD
define('DB_HOST', 'database');
define('DB_USER', 'lamp');
define('DB_PASS', 'lamp');
define('DB_NAME', 'lamp');

// on va créer une variable pour stocker le résultat de la connexion à la BDD
$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// on va vérifier la connection
if (!$mysqli) {
    // on teste s'il y a une erreur
    die('Erreur : ' . mysqli_connect_error());
}
echo 'Connexion réussie !';
