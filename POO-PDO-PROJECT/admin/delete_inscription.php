<?php
/**
 * Created by PhpStorm.
 * User: MIRA
 * Date: 29/11/2018
 * Time: 16:09
 */


require '../autoload.php';
$_id=$_GET['id'];



$personnes = new users();
$personnes->deleteUser($_id);
    header('location:validationinscription.php');




