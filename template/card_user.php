<?php

function cardUser($row)
{
?>
    <div>
        <h2> <?php echo $row['prenom'] . " " . $row['nom']; ?> </h2>
        <p>Age : <?php echo $row['age']; ?> ans </p>
        <p>Email : <?php echo $row['email']; ?> </p>
        <a href="../user.php?id=<?php echo $row['id'] ?>">Voir plus</a>
        <a href="../requete/delete.php?id= <?php echo $row['id'] ?> ">Supprimer</a>
    </div>
<?php
}


function cardUserDetails($row)
{
?>
    <div>
        <h2> <?php echo $row['prenom'] . " " . $row['nom']; ?> </h2>
        <p>Age : <?php echo $row['age']; ?> ans </p>
        <p>Email : <?php echo $row['email']; ?> </p>
        <a href="./index.php">Retour</a>
    </div>
<?php
}
