<?php
//valider bouton ..

if (!empty($_POST["btnregister"])) {
    if (
        !empty($_POST["nom"])
        and !empty($_POST["prenom"])
        and !empty($_POST["tel"])
        and !empty($_POST["date_nac"])
        and !empty($_POST["email"])
    ) {
        //stocker ma data
        //echo 'tout est ok';
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $tel = $_POST['tel'];
        $date_nac = $_POST['date_nac'];
        $email = $_POST['email'];

        $sql = $bdd->query("insert into users(nom, prenom, tel, date_nac, email) values('$nom', '$prenom', '$tel', '$date_nac', '$email')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Persona registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">error al registrar</div>';
        }
    } else {

        echo '<div class="alert alert-warning">algunos de los campos esta vacio</div>';
    }
}
