<?php

include_once('model/articleModel.php');

function afficherArticles()
{

    $articles = getArticle();
    include('view/accueil.php');
}
function afficherCate()
{
    $articles = getCate($_GET['cat']);
    include('view/accueil.php');
}