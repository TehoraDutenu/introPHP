<?php
// création d'une fonction simple sans paramètre
function bonjour()
{
    echo "Bonjour tout le monde !";
}


// création d'une fonction avec paramètre
function bonjour2($nom)
{
    echo "Bonjour $nom !";
}

function addition($a, $b)
{
    echo $a . "+" . $b . "=" . ($a + $b);
}
