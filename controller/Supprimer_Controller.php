<?php
//validation champs 
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $bdd->query("delete from users where id=$id");
    if ($sql == 1) {
        echo '<div class="alert alert-success">supression correcte</div>';
    } else {
        echo '<div class="alert alert-danger">Erreur supression</div>';
    }
}
