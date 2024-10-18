<?php

include_once 'bdd.php';

function setInscription($nom, $prenom, $tel, $email, $mdp)
{
    global $bdd;
    $user = $bdd->prepare("INSERT into users(nom,prenom,tel,email,mdp) values(?,?,?,?,?)");
    return $user->execute([$nom, $prenom, $tel, $email, $mdp]);
}