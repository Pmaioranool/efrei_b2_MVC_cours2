<?php

include_once('bdd.php');

function getArticle()
{
    global $bdd;
    return $bdd->query('Select * from articles ')->fetchAll(PDO::FETCH_ASSOC);

}
function getFOOTArticle()
{
    global $bdd;
    return $bdd->query('Select * from articles where id_categorie=26')->fetchAll(PDO::FETCH_ASSOC);

}

$articles = getArticle();

var_dump($articles);