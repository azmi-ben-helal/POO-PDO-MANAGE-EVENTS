<?php
/**
 * Created by PhpStorm.
 * User: MIRA
 * Date: 30/11/2018
 * Time: 10:01
 */
require '../autoload.php';
$connexPDO= ConnexionBD::getInstance();

        $requete1 = "INSERT INTO ue (idutil,idevent) SELECT inscription.idutil,evenement.idevent From evenement INNER JOIN inscription  ";
        $req = $connexPDO->prepare($requete1);
        $req->execute();







