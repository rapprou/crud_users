<?php
//editer form
if (!empty($_POST["btnedit"])) {

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $tel = $_POST["tel"];
    $date_nac = $_POST["date_nac"];
    $email = $_POST["email"];

    $sql = $bdd->query("UPDATE users SET nom ='$nom', prenom ='$prenom', tel ='$tel', date_nac ='$date_nac', email ='$email' WHERE id = $id ");
    if ($sql == 1) {
        header('location: index.php');
    } else {
        echo '<div class="alert alert-danger" >Erreur</div>';
    }
}
