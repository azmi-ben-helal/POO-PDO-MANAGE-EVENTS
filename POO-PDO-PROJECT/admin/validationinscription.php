<?php
/**
 * Created by PhpStorm.
 * User: MIRA
 * Date: 29/11/2018
 * Time: 16:00
 */
require '../autoload.php';

$personne = new users();
$personnes = $personne->getUsers();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>
        registered user </title>
</head>
<body>

<table BORDER="2">
    <tr>
        <td>id</td>
        <td>nom</td>
        <td>prenom</td>
        <td>mail</td>
        <td>numtel</td>
        <td>event</td>

    </tr>

    <?php foreach ($personnes as $person){?>
        <tr>
            <td> <?= $person->idutil ?></td>
            <td> <?= $person->nomutil ?></td>
            <td> <?= $person->prenom ?></td>
            <td> <?= $person->mail ?></td>
            <td> <?= $person->numtel ?></td>
            <td>  <?= $person->nomevent ?></td>
            <td> <a  type="submit" href="delete_inscription.php?id=<?= $person->idutil ?>" name="delete">delete</a></td>

        </tr>
    <?php } ?>
</table>

</body>
</html>

