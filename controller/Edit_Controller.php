<?php
if (!empty($_POST["btnedit"])) {

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $tel = $_POST["tel"];
    $date_nac = $_POST["date_nac"];
    $email = $_POST["email"];

    $sql = $bdd->query("update users set nom='$nom', prenom='$prenom', tel='$tel', date_nac='$date_nac', email='$email' where id=$id ");
    if ($sql == 1) {
        header('location: index.php');
    } else {
        echo '<div class="alert alert-danger" >Erreur</div>';
    }
}
