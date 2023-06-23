<?php
var_dump("Hello PHP !");

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

// création d'une nouvelle table
$table = "CREATE TABLE IF NOT EXISTS `user`(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    age INT(3),
    email VARCHAR(255) NOT NULL
)";

// on exécute la requête SQL
if (mysqli_query($mysqli, $table)) {
    echo "Table créée avec succès";
} else {
    echo "Erreur lors de la création de la table : " . mysqli_error($mysqli);
}

// insertion de données dans la table
// définition de la requete SQL dans une variable
$query = "INSERT INTO `user`
(`nom`, `prenom`, `age`, `email`)
VALUES 
(?, ?, ?, ?)
";

// préparation de la requête SQL
// if ($stmt = mysqli_prepare($mysqli, $query)) {
//     // déclarer mes variables avec les données à insérer
//     $nom = "Doe";
//     $prenom = "John";
//     $age = 42;
//     $email = "john.doe@gmail.com";

//     // liaison des variables à la requête préparée
//     mysqli_stmt_bind_param(
//         $stmt, // on rappelle le $stmt pour préciser que l'on travaille sur cette variable
//         'ssis', // on définit le type de dnnées de chaque variable "?" dans l'ordre
//         // i=integer, s=string, d=double, b=blob
//         $nom, // on précise la variable à insérer pour le premier "?"
//         $prenom, // pour le second "?"
//         $age, // pour le troisième "?"
//         $email // pour le quatrième "?"
//     );

// exécution de la requête préparée
//     if (!mysqli_stmt_execute($stmt)) {
//         echo "Erreur lors de l'execution de la requête: " . mysqli_stmt_error($stmt);
//     }
//     echo "Données insérées avec succès.";
//     mysqli_stmt_close($stmt); // on ferme la requête préparée
// } else {
//     echo "Erreur lors de la préparation de la requête : " . mysqli_error($mysqli);
// }


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
        var_dump($result);
        while ($row = mysqli_fetch_assoc($result)) {
            // var_dump($row['nom']); Récupérer une seule entrée du tableau
?>
            <div>
                <h2> <?php echo $row['prenom'] . " " . $row['nom']; ?> </h2>
                <p>Age : <?php echo $row['age']; ?> ans </p>
                <p>Email : <?php echo $row['email']; ?> </p>
            </div>
        <?php
        }
    }
}

// on récupère uniquement un utilisateur grâce à son id
$queryUserById = "SELECT * FROM `user` WHERE `id`= 6";

// exécution de la requête SQL
if ($result = mysqli_query($mysqli, $queryUserById)) {
    // on vérifie s'il y a des résultats
    if (mysqli_num_rows($result) > 0) {
        // on boucle sur les résultats
        while ($row = mysqli_fetch_assoc($result)) {
            // var_dump($row['nom']); Récupérer une seule entrée du tableau
        ?>
            <div>
                <h2> <?php echo $row['prenom'] . " " . $row['nom']; ?> </h2>
                <p>Age : <?php echo $row['age']; ?> ans </p>
                <p>Email : <?php echo $row['email']; ?> </p>
            </div>
<?php
        }
    }
}

// mise à jour des données de la table
$queryUpdate = "UPDATE user SET `nom` = ? WHERE `ID` = ?";

// préparation de la requête SQL
if ($stmt = mysqli_prepare($mysqli, $queryUpdate)) {
    // on déclare les variables
    $nom = "Vrékon";
    $id = 6;

    // envoi les datas dans le requête
    mysqli_stmt_bind_param(
        $stmt,
        'si',
        $nom,
        $id
    );

    if (!mysqli_stmt_execute($stmt)) {
        echo "Erreur lors de l'execution de la requête: " . mysqli_stmt_error($stmt);
    }
    echo "Données mises à jour avec succès.";
    mysqli_stmt_close($stmt); // on ferme la requête préparée
} else {
    echo "Erreur lors de la préparation de la requête : " . mysqli_error($mysqli);
}

// suppression des données de la table
// définition de la requête SQL dans une variable
$queryDelete = "DELETE FROM `user` WHERE `id` = ?";

// préparation de la requête SQL
if ($stmt = mysqli_prepare($mysqli, $queryDelete)) {
    // on déclare les variables
    $id = 6;

    // envoi les datas dans le requête
    mysqli_stmt_bind_param(
        $stmt,
        'i',
        $id
    );

    if (!mysqli_stmt_execute($stmt)) {
        echo "Erreur lors de l'execution de la requête: " . mysqli_stmt_error($stmt);
    }
    echo "Données annulées avec succès.";
    mysqli_stmt_close($stmt); // on ferme la requête préparée
} else {
    echo "Erreur lors de la préparation de la requête : " . mysqli_error($mysqli);
}

mysqli_close($mysqli); // on ferme la connexion à la BDD


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2> <?php echo "Intro PHP - 2" ?> </h2>

</body>

</html>