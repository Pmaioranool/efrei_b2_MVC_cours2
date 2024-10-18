<?php

include_once 'controller/categorieController.php';
$categories = afficheCategorie();

include('view/header.php');

include('controller/router.php');

include('view/footer.php');
// include('view/header');