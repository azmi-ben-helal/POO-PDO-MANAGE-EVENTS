<?php
session_start();
require 'autoload.php';


$connexPDO = ConnexionBD::getInstance();


if (isset($_POST['login'])) {
    if (empty($_POST['username']) && empty($_POST['password'])) {
        $message = '<label> All fields are required</label>';
    } else {

        $requete2 = "select * from administrateur where username=:username and password=:password";
        $req = $connexPDO->prepare($requete2);
        $req->execute(array(

            'username' => $_POST['username'],
            'password' => $_POST['password']

        ));
        $count = $req->rowCount();
        if ($count > 0) {
            $_SESSION['username'] = $_POST['username'];
            header("location:admin/login-admin.php");
        } else {

            $message = '<label>wrong Data</label>';
        }

    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form.css">
    <meta charset="UTF-8">
    <title>GOMYCODE-EVENT</title>
</head>
<body>

<div class="topnav">
    <a class="active" href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>


    <div class="login-container">
        <form action="" method="post">
            <?php if (!isset($_SESSION['username'])) { ?>
                <input type="text" placeholder="Username" name="username" ">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="btn btn-info" name="login" value="login">Login</button>
            <?php } ?>
        </form>
    </div>
</div>

<div class="container">
    <div class="row">

        <?php


        $requete3 = "Select * from evenement  ";
        $reponse3 = $connexPDO->query($requete3);
        $events = $reponse3->fetchAll(PDO::FETCH_OBJ);
        foreach ($events as $event):?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../POO-PDO-PROJECT/img/<?= $event->image; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $event->nomevent; ?></h5>
                        <p class="card-text"><?= $event->Commentaire; ?></p>
                        <span>du<?= $event->datedebut; ?>jusqu'a<?= $event->datefin; ?> </span><br>
                        <label><?= $event->emplacement; ?></label></br>
                        <span><?= $event->nombreplace; ?>places sont disponible</span><br>

                        <button class="btn btn-primary" data-toggle="modal"
                                data-target="#add_data_Modal<?= $event->idevent; ?>" name="add" id="add">inscription
                        </button>


                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php

$requete3 = "Select * from evenement  ";
$reponse3 = $connexPDO->query($requete3);
$events = $reponse3->fetchAll(PDO::FETCH_OBJ);


foreach ($events as $event):?>
    <div class="modal fade" tabindex="-1" role="dialog" id="add_data_Modal<?= $event->idevent; ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">inscription</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post" action="inscription_event.php">

                        <label>Nom</label>
                        <input type="text" name="nom" id="name" class="form-control"></br>
                        <label>Prenom</label>
                        <input type="text" name="prenom" id="prenom" class="form-control"></br>
                        <label>Email</label>
                        <input type="email" name="mail" id="mail" class="form-control"></br>
                        <label>Numero de telephone</label>
                        <input type="number" name="numtel" id="numtel" class="form-control"></br>
                        <label>evenement</label>

                        <input type="text" name="event" id="event" class="form-control"
                               value="<?= $event->nomevent; ?>">  </br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save inscription</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
<?php endforeach ?>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
</body>
</html>