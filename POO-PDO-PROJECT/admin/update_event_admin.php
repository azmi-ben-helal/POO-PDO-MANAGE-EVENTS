<?php
/**
 * Created by PhpStorm.
 * User: MIRA
 * Date: 27/11/2018
 * Time: 11:23
 */
require '../autoload.php';

$id = $_POST['id'];
$nom = $_POST['nom'];
$commentaire = $_POST['Commentaire'];
$datedebut = $_POST['datedebut'];
$datefin = $_POST['datefin'];
$emplacement = $_POST['emplacement'];
$nombreplace = $_POST['nombreplace'];
$image = $_POST['image'];

if(isset($_POST['update']))
{

    $connexPDO = ConnexionBD::getInstance();
    $requete= "UPDATE evenement SET idevent='$id', nomevent='$nom',Commentaire='$commentaire',datedebut='$datedebut',datefin='$datefin',emplacement='$emplacement',nombreplace='$nombreplace',image='$image' where idevent='$id'";
    $reponse=$connexPDO->query($requete);

   header('location:login-admin.php');
}
