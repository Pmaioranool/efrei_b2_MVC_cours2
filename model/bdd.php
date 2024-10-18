<?php


try {
    $bdd = new PDO("pgsql:host=localhost;port=5432;dbname=news", "postgres", "Luc@s0603!");
    //echo "ca amrche";
} catch (ErrorException $e) {
    echo $e;

}