<?php

include_once('bdd.php');

function getArticle()
{
    global $bdd;
    return $bdd->query('Select * from articles ')->fetchAll(PDO::FETCH_ASSOC);

}
function getCate($cateid)
{
    global $bdd;
    return $bdd->query("Select * from articles where id_categorie=$cateid ")->fetchAll(PDO::FETCH_ASSOC);
}

$articles = getArticle();

// var_dump($articles); // les infos de la  bdd sont affichées