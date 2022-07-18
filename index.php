<?php
include 'models/connect.php';
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
    <title>Gestion etudiant Beweb</title>
</head>

<body>
    <script>
        function suppr() {
            var response = confirm("vous etes sure d'effacer ce post");
            return response
        }
    </script>
    <h1 class="text-center p-4">Gestion Admin Utilisateurs du BLOG CandyCraft</h1>
    <?php
    include 'controller/Supprimer_Controller.php';
    ?>
    <div class="container-fluid row">
        <form class="col-3 p-3" method="post">
            <h3 class="text-center text-secondary">Inscription Author</h3>
            <?php
            include 'controller/User_Controller.php';
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Prenom</label>
                <input type="text" class="form-control" name="prenom">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Numero Téléphone</label>
                <input type="tel" class="form-control" name="tel">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Date de naissance</label>
                <input type="date" class="form-control" name="date_nac">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>

            <button type="submit" class="btn btn-primary" name="btnregister" value="ok">S'inscrire</button>
        </form>
        <div class="col-9 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Date naissance</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //include 'models/connect.php';
                    $sql = $bdd->query('select * from users');
                    while ($data = $sql->fetchObject()) { ?>
                        <tr>
                            <td><?= $data->id ?></td>
                            <td><?= $data->nom ?></td>
                            <td><?= $data->prenom ?></td>
                            <td><?= $data->tel ?></td>
                            <td><?= $data->date_nac ?></td>
                            <td><?= $data->email ?></td>
                            <td>
                                <a href="editform.php?id=<?= $data->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return suppr()" href="index.php?id=<?= $data->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>

                    <?php }
                    ?>

                </tbody>
            </table>

        </div>

    </div>



</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>