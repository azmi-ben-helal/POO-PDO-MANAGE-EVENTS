<?php
/**
 * Created by PhpStorm.
 * User: MIRA
 * Date: 27/11/2018
 * Time: 21:15
 */


require '../autoload.php';

$connexPDO= ConnexionBD::getInstance();


$id=$_GET['id'];

$requete= "Select * from evenement where  idevent='$id'";

$reponse=$connexPDO->query($requete);
$events=$reponse->fetchAll(PDO::FETCH_OBJ);
  ?>
        <!doctype html>
        <html lang="en">
        <head>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
                  integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
            <link rel="stylesheet" href="../css/fontawesome.min.css">
            <link rel="stylesheet" href="../css/bootstrap.min.css">
            <link rel="stylesheet" href="../css/form.css">
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body class="container">
        <form method="post" action="update_event_admin.php">
            <table class="table">

                <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">NOM</th>
                    <th scope="col">commentaire</th>
                    <th scope="col">datedebut</th>
                    <th scope="col">datefin</th>
                    <th scope="col">emplacement</th>
                    <th scope="col">nombreplace</th>
                    <th scope="col">image</th>


                </tr>
                </thead>
                <?php
                foreach ($events as $event):?>


                <tr>
                    <td><input value="<?= $event->idevent ?>" name="id"></td>
                    <td><input value="<?= $event->nomevent ?>" name="nom"></td>
                    <td><input value="<?= $event->Commentaire ?>" name="Commentaire"></td>
                    <td><input value="<?= $event->datedebut ?>" name="datedebut"></td>
                    <td><input value="<?= $event->datefin ?>" name="datefin"></td>
                    <td><input value="<?= $event->emplacement ?>" name="emplacement"></td>
                    <td><input value="<?= $event->nombreplace?>" name="nombreplace"></td>
                    <td><input value="<?= $event->image?>" name="image"></td>
                    <td><input type="submit" class="btn btn-primary" name="update" href="update_event.php?id=<?= $event->idevent ;?>" value="MISE A JOUR"></td>
                    <?php endforeach; ?>

                </tr>

            </table>

        </form>
        </body>

        </html>
