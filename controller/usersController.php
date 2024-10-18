<?php
include_once('model/usersModel.php');

function getFormInscription()
{
    include_once('view/inscription.php');
}

function inscription()
{
    if (isset($_POST['email'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        if ($nom == '' || $prenom == '' || $email == '' || $tel == '' || $mdp == '') {
            echo "Merci de remplir le formulaire";
            getFormInscription();
        } else {
            if (setInscription($nom, $prenom, $tel, $email, $mdp)) {
                echo 'inscription réussis';
            } else {
                echo 'Erreur d\'inscription';
            }
        }
    } else {
        getFormInscription();
    }
}