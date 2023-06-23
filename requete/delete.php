<?php
require_once '../config.php';

// suppression des données de la table
// définition de la requête SQL dans une variable
$id = intval($_GET['id']);
$queryDelete = "DELETE FROM `user` WHERE `id` = ?";
global $mysqli;

// préparation de la requête SQL
if ($stmt = mysqli_prepare($mysqli, $queryDelete)) {

    // envoi les datas dans le requête
    mysqli_stmt_bind_param(
        $stmt,
        'i',
        $id
    );

    if (!mysqli_stmt_execute($stmt)) {
        echo "Erreur lors de l'execution de la requête: " . mysqli_stmt_error($stmt);
        header('Location: ../index.php');
    }

    header('Location: ../index.php');

    mysqli_stmt_close($stmt); // on ferme la requête préparée
} else {
    echo "Erreur lors de la préparation de la requête : " . mysqli_error($mysqli);
}
