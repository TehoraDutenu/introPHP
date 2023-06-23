<?php require_once "./config.php"; ?>
<?php require_once "./requete/requete.php"; ?>
<?php require_once "./template/card_user.php" ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>

<body>
    <h1>Infos de l'utilisateur</h1>
    <?php
    $id = intval($_GET['id']);
    getById($id);
    ?>

</body>

</html>