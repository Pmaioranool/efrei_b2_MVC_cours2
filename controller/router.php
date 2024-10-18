<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : 'accueil';

switch ($page) {
    case 'categorie':
        break;
    case 'inscription':
        include('view/inscription.php');
        break;
    case 'connexion':
        include('view/connexion.php');
        break;
    default:
        include('controller/articlesController.php');
        // afficherArticles();
        afficherFOOTArticles();
}