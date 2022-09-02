<?php
include 'models/connect.php';

$id = $_GET["id"];
$sql = $bdd->query("select * from users where id = $id ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <script src="https://kit.fontawesome.com/7aafcc8abf.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    while ($data = $sql->fetchObject()) { ?>
        <form class="col-4 p-3 m-auto " method="post">
            <h3 class="text-center text-secondary">Modifier profil</h3>
            <?php
            include "controller/Edit_Controller.php";
            ?>
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" value="<?= $data->nom ?>">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Prenom</label>
                <input type="text" class="form-control" name="prenom" value="<?= $data->prenom ?>">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Numero Téléphone</label>
                <input type="tel" class="form-control" name="tel" value="<?= $data->tel ?>">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Date de naissance</label>
                <input type="date" class="form-control" name="date_nac" value="<?= $data->date_nac ?>">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?= $data->email ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="btnedit" value="ok">Modifier</button>
            <a href="index.php"><i class="fa-solid fa-arrow-right"> aller au tableau de bord</i></a>
        </form>

    <?php }
    ?>

</body>

</html>