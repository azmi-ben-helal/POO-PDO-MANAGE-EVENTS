
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FORM VALIDATION</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/form.css">
</head>

<body style="background: #9a93bc">
<div class="container">
    <div class="row" style="height: 25px"></div>
    <div class="row">
        <div class="col-lg-3"></div>

        <form action="add_event.php" method="post" class="col-lg-6 form-container">

            <div class="form-group">

                <label for="ID">ID</label>

                <input type="number" class="form-control" name="id" id="id" style="margin-bottom: .5rem;">

                <label for="Nom">Nom</label>

                <input type="text" class="form-control" name="nom" id="nom" style="margin-bottom: .5rem;">

                <label for="Commentaire">commentaire</label>

                <input type="text" class="form-control" name="commentaire" id="commentaire" style="margin-bottom: .5rem;">

                <label for="datedebut">DATE DEBUT EVENT</label>

                <input type="datetime-local" class="form-control" name="datedebut" id="datedebut" style="margin-bottom: .5rem;">
                <label for="datefin">DATE FIN EVENT</label>

                <input type="datetime-local" class="form-control" name="datefin" id="datefin" style="margin-bottom: .5rem;">

                <label for="emplacement">emplacement</label>

                <input type="text" class="form-control" name="emplacement" id="emplacement" style="margin-bottom: .5rem;">
                <label for="nombreplace">Nombre de place</label>

                <input type="number" class="form-control" name="nombreplace" id="nombreplace" style="margin-bottom: .5rem;">

                <label for="image">image</label>

                <input type="text" class="form-control" name="image" id="image" style="margin-bottom: .5rem;">


            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary ">Add event</button>


            </div>

        </form>

    </div>
</div>
<footer>

</footer>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>



</body>
</html>