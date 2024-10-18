<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : 'accueil';

switch ($page) {
    case 'categorie':
        include_once('controller/articlesController.php');
        afficherCate();
        break;
    case 'inscription':
        include_once('controller/usersController.php');
        inscription();
        break;
    case 'connexion':
        include_once('view/connexion.php');
        break;
    default:
        include_once('controller/articlesController.php');
        afficherArticles();
}