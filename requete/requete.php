<?php

function getAll()
{
    global $mysqli;
    // Récupération des données de la table
    // définition de la requête SQL dans une variable
    // $queryAllUsers = "SELECT `id`, `nom`, `prenom`, `age`, `email` FROM user";
    // OU

    $queryAllUsers = "SELECT * FROM `user`";

    // exécution de la requête SQL
    if ($result = mysqli_query($mysqli, $queryAllUsers)) {
        // on vérifie s'il y a des résultats
        if (mysqli_num_rows($result) > 0) {
            // on boucle sur les résultats
            while ($row = mysqli_fetch_assoc($result)) {
                cardUser($row);
            }
        }
    }
}

function getById($id)
{
    global $mysqli;

    // on récupère un seul user grâce à son id
    $queryUserById = "SELECT * FROM `user` WHERE `id`= $id";

    // exécution de la requête SQL
    if ($result = mysqli_query($mysqli, $queryUserById)) {
        // on vérifie s'il y a des résultats
        if (mysqli_num_rows($result) > 0) {
            // on boucle sur les résultats
            while ($row = mysqli_fetch_assoc($result)) {
                // var_dump($row['nom']); Récupérer une seule entrée du tableau
                cardUserDetails($row);
            }
        }
    }
}
