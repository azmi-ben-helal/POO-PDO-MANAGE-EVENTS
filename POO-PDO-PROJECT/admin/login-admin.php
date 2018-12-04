<?php
require '../autoload.php';


session_start();
$connexPDO = ConnexionBD::getInstance();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/form.css">
    <meta charset="UTF-8">
    <title>GOMYCODE-EVENT</title>
</head>
<body>

<div class="topnav">
    <a class="active" href="../index.php">Home</a>
    <a href="validationinscription.php">registered user</a>
    <a href="user_event.php">validation</a>
    <a href="add_event_admin.php" class="btn btn-primary">ADD EVENT</a>

    <div class="login-container">
        <form action="" method="post">

            <?php if(isset($_SESSION["username"])){

            echo'login success,Welcome -'.$_SESSION['username'];
            echo '<a href="logout.php" class="btn btn-primary">Logout</a>';
            }else{

            header('location:../index.php');
            }
            ?>
        </form>
    </div>
</div>
<div class="container">
    <div class="row">

        <?php


        $requete3= "Select * from evenement  ";
        $reponse3=$connexPDO->query($requete3);
        $events=$reponse3->fetchAll(PDO::FETCH_OBJ);
        foreach ($events as $event):?>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../img/<?= $event->image ;?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $event->nomevent ;?></h5>
                    <p class="card-text"><?= $event->Commentaire;?></p>
                    <span>du<?= $event->datedebut;?>jusqu'a<?= $event->datefin;?> </span><br>
                    <label><?= $event->emplacement;?></label></br>
                    <span><?= $event->nombreplace;?>places sont disponible</span><br>

                    <a href="update_event.php?id=<?= $event->idevent ;?>" class="btn btn-primary" name="update">update</a>
                    <a href="delete_event_admin.php?id=<?= $event->idevent ;?>" class="btn btn-primary" name="delete">delete</a>
                </div>
            </div>
        </div>
        <?php endforeach;?>

    </div>


</div>








<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
</body>
</html>
