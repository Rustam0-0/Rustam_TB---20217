<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'hotel') or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
    $nom = $_POST['nom'];
    $altitude = $_POST['altitude'];
    
    $mysqli->query("INSERT INTO station (sta_nom, sta_altitude) VALUES('$nom', '$altitude')")
     or die($mysqli->error);

    $_SESSION['message'] = "Enregistré";
    $_SESSION['msg_type'] = "success";

    header("location: form.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM station WHERE sta_id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Supprimé";
    $_SESSION['msg_type'] = "danger";

    header("location: form.php");
}

?>