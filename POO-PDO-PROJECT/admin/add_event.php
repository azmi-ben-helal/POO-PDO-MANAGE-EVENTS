<?php
/**
 * Created by PhpStorm.
 * User: MIRA
 * Date: 27/11/2018
 * Time: 20:31
 */
require '../autoload.php';


$id = $_POST['id'];
$nom = $_POST['nom'];
$commentaire = $_POST['commentaire'];
$datedebut = $_POST['datedebut'];
$datefin = $_POST['datefin'];
$emplacement = $_POST['emplacement'];
$nombreplace = $_POST['nombreplace'];
$image = $_POST['image'];


/*if (key_exists('MAJ', $_POST)) {

    header("Location: updateUtilisateur.php", true, 303);
    die;
}*/


if ( empty($nom) OR empty($commentaire) OR empty($datedebut) OR empty($datefin) OR empty($emplacement)OR empty($nombreplace)OR empty($image)) {
    echo '<font color="red"><b><center>Attention, vous devez remplir tous les champs</center></b></font>';
} elseif ($id < 0) {
    echo '<font color="red"><b><center>Attention, vous devez remplir un ID positive</center></b></font>';
} else {

    $connexPDO = ConnexionBD::getInstance();

    $requete = "INSERT INTO evenement (nomevent,commentaire,datedebut,datefin,emplacement,nombreplace,image) VALUE (:nomevent,:commentaire,:datedebut,:datefin,:emplacement,:nombreplace,:image)";
    $req = $connexPDO->prepare($requete);
    $req->execute(array(


        'nomevent' => $nom,
        'commentaire' => $commentaire,
        'datedebut' => $datedebut,
        'datefin' => $datefin,
        'emplacement' => $emplacement,
        'nombreplace' => $nombreplace,
        'image' => $image,


    ));
    echo '<span class="">Votre message à bien été envoyé !</span>';

}header('location:login-admin.php');
