<?php

$username = filter_input(INPUT_POST, "username");
$password = filter_input (INPUT_POST, "password");

if ($username == "Chef" && $password == "mdp")
{
    $qui='C';
    header("Location: accueilC.php");
}
else if ($username == "Operateur" && $password == "mdp")
{
    $qui='O';
    header("Location: accueilO.php");
}
