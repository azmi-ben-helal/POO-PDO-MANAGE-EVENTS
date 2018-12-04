
<?php

require '../autoload.php';

$id=$_GET['id'];




$connexPDO = ConnexionBD::getInstance();
$requete= "DELETE FROM evenement WHERE  idevent= $id ";
$reponse=$connexPDO->query($requete);


header('location:login-admin.php');
