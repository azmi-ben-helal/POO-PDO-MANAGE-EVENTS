<?php
/**
 * Created by PhpStorm.
 * User: MIRA
 * Date: 29/11/2018
 * Time: 09:57
 */
require 'autoload.php';


$_email = $_POST['mail'];
$_nom = $_POST['nom'];
$_prenom = $_POST['prenom'];
$_numtel = $_POST['numtel'];
$_event = $_POST['event'];


if (empty($_email) OR empty($_nom) OR empty($_prenom) OR empty($_numtel) OR empty($_event)) {
    echo '<font color="red"><b><center>Attention, vous devez remplir tous les champs</center></b></font>';

} else {

    $personnes = new users();
    $personnes->addUser($_email, $_nom, $_prenom, $_numtel, $_event);




    echo '<span class="">Votre message à bien été envoyé !</span>';
    header('location:index.php');
}

