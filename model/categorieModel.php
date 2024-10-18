<?php
include_once('bdd.php');
function getCategories()
{
    global $bdd;
    return $bdd->query('SELECT * FROM categories ')->fetchAll(PDO::FETCH_ASSOC);
}