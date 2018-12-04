<?php
/**
 * Created by PhpStorm.
 * User: MIRA
 * Date: 30/11/2018
 * Time: 16:07
 */
require '../autoload.php';


$id=$_GET['id'];


    $connexPDO = ConnexionBD::getInstance();
    $requete= "UPDATE ue SET validate='1', where idue='$id'";
    $reponse=$connexPDO->prepare($requete);
$reponse->execute();



header('location:user_event.php');
