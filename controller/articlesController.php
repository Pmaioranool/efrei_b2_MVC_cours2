<?php

include_once('model/articleModel.php');

function afficherArticles()
{

    $articles = getArticle();
    include('view/accueil.php');
}
function afficherFOOTArticles()
{

    $articles = getFOOTArticle();
    include('view/accueil.php');
}