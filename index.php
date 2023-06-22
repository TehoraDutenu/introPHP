<?php // ouverture du code php
// en php une variable est toujours précédée de $ et se finit par ;
// on utilise l'underscore comme un élément séparateur 
// syntaxes préconisées
$titre = 'Intro PHP';
// $variable = 1;
// $_variable = 2;
// $variable_1 = 3;
// // ATTENTION ! Les noms des variables sont sensibles à la casse

// $string = "hello";
// $int = 1;
// $float = 1.5;
// $bool = true;
// $array = ["valeur 1", "valeur 2", "valeur 3"];
// $nul = null;
// $objet = new stdClass();
// $resource = fopen("index.php", "r");

$nom = "Doe";
$prenom = "John";
$age = 42;

$concatenation = "Bonjour, je m'appelle " . $prenom . " " . $nom . " et j'ai " . $age . " ans.";

// // tableau numérique ([0, 1, 2...])
// $fruits = ["pomme", 3, 2.5, true, null];
// $fruits2 = array("pomme", 3, 2.5, true, null);
// // ajouter un élément à la fin 
// array_push($fruits2, "Banane");
// // OU
// $fruits2[] = "Jujube";

// // ajouter un élément au début
// $peche = "peche";
// array_unshift($fruits2, $peche);

// var_dump($fruits2);

// // tableau associatif
// $identite = [
//     "nom" => "Doe",
//     "prenom" => "John",
//     "age" => 42,
//     "hobbies" => ["sport", "cinema", "lecture"]
// ];
// // ajouter à la fin
// $identite["is_adult"] = true;

// // ajouter un élément au début
// $item = ["pointure" => 45];
// $identite = $item + $identite;
// var_dump($identite);



// // // BOUCLE WHILE
// // // initialisation
// // $x = 0;
// // while ($x <= 10) {
// //     // affichage de la valeur de la variable $x
// //     echo '$x contient la valeur ' . $x . '<br>';
// //     // incrémentation de la variable
// //     $x++;
// // }

// // BOUCLE FOR

// // for ($z = 0; $z <= 10; $z++) {
// //     echo '$z contient la valeur ' . $z . '<br>';
// // }

// // BOUCLE FOREACH
// // tableau numérique
// $array = ["pomme", "poire", "banane", "fraise", "orange"];
// foreach ($array as $value) {
//     echo $value . '<br>';
// }

// // tableau associatif
// $array_1 = [
//     "premier" => "N°1",
//     "deuxieme" => "N°2",
//     "troisieme" => "N°3",
// ];

// // on ne récupère que les valeurs
// foreach ($array_1 as $value) {
//     echo $value . '<br>';
// }
// // on récupère clés et valeurs
// foreach ($array_1 as $key => $value) {
//     echo "la clé vaut : $key et sa valeur vaut : $value <br>";
// }


// $array_2 = [
//     'fruits' => ["pomme", "poire", "banane", "orange", "fraise"],
//     'legumes' => ["carotte", "poireau", "navet", "courgette", "chou"],
//     'animaux' => ["chien", "chat", "lapin", "souris", "rat"],
// ];
// // déclaration d'un premier tableau : ["fruits", "legumes", "animaux"] -> tableau parent
// // puis des sous-tableaux -> tableau enfant
// foreach ($array_2 as $key => $value) {
//     echo "La clé du parent est $key <br>"; // on récupère la clé
//     echo "Ses enfants ont pour valeur : <br>";
//     foreach ($value as $child) {
//         echo '=> ' . $child . '<br>'; // on récupère les valeurs des enfants
//     }
//     echo '<br>';
// }

// '<br>';
// $monTableau = array(
//     "Fruits" => array(
//         "Pomme" => array(
//             "Couleur" => "rouge",
//             "Pays" => "France"
//         ),
//         "Banane" => array(
//             "Couleur" => "jaune",
//             "Pays" => "Equateur"
//         ),
//         "Orange" => array(
//             "Couleur" => "orange",
//             "Pays" => "Espagne"
//         )
//     ),
//     "Légumes" => array(
//         "Carotte" => array(
//             "Couleur" => "orange",
//             "Pays" => "France"
//         ),
//         "Concombre" => array(
//             "Couleur" => "vert",
//             "Pays" => "Espagne"
//         ),
//         "Tomate" => array(
//             "Couleur" => "rouge",
//             "Pays" => "Italie"
//         )
//     )
// );


// foreach ($monTableau as $key => $value) {
//     echo "Catégorie : $key <br>";
//     echo "<br>";
//     foreach ($value as $variete => $value_1) {
//         echo "Variété : $variete <br>";
//         foreach ($value_1 as $key2 => $value_2) {
//             echo "$key2 : $value_2 <br>";
//         }
//         echo "<br>";
//     }
//     echo "<br>";
// }

// $utilisateurs = [
//     [
//         "nom" => "John Doe",
//         "age" => 30,
//         "ville" => "New York",
//         "langages" => ["PHP", "JavaScript", "Python"]
//     ],
//     [
//         "nom" => "Jane Smith",
//         "age" => 25,
//         "ville" => "Paris",
//         "langages" => ["JavaScript", "Ruby", "C#"]
//     ],
//     [
//         "nom" => "Mark Johnson",
//         "age" => 35,
//         "ville" => "Londres",
//         "langages" => ["Java", "C++", "Python"]
//     ]
// ];

// foreach ($utilisateurs as $utilisateur) {
//     echo "Nom : " . $utilisateur['nom'] . "<br>";
//     echo "Age : " . $utilisateur['age'] . "ans <br>";
//     echo "Ville : " . $utilisateur['ville'] . "<br>";
//     foreach ($utilisateur['langages'] as $langage) {
//         echo "- " . $langage . "<br>";
//     }
//     echo "<br><br>";
// } 

?> <!-- fermeture du code php -->


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP</title>
</head>

<body>
    <?php
    // on va récupérer le fichier script.php
    // on va l'inclure dans le fichier index.php
    // include 'script.php';
    require 'script.php';
    // require_once 'script.php';
    ?>
    <h1> <?php echo $titre ?> </h1>
    <h2> <?php echo $concatenation ?> </h2>
    <h3> <?php bonjour() ?> </h3>
    <h3> <?php bonjour2("Emmanuel") ?> </h3>
    <h3> <?php addition(24, 84) ?> </h3>
</body>

</html>