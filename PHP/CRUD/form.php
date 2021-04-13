<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Ajout</title>
</head>
<body>
    <?php require_once 'script_ajout.php'; ?>

    <?php
    if (isset($_SESSION['message'])): 
    ?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">

        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
    </div>
    <?php endif ?>

    <?php
        $mysqli = new mysqli('localhost','root','','hotel') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM station") or die($mysqli->error);
    ?>


<div class="container">

    <h2>Saisie d'un nouvel enregistrement</h2><br>

    <a href="index.php"><button>Retour à la liste des stations</button></a><br><br>

    <form action ="script_ajout.php" method="post">

        <label for="nom_for_label">Nom de la station :</label><br>
        <input type="text" value="" name="nom" id="nom_for_label">
        <br><br>

        <label for="altitude_for_label">Altitude :</label><br>
        <input type="text" value=""  name="altitude" id="altitude_for_label">
        <br><br>

        <input type="submit" value="Ajouter" name="save">

    </form><br>


        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom de Station</th>
                    <th>Altitude</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
                 while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['sta_id']; ?></td>
                    <td><?php echo $row['sta_nom']; ?></td>
                    <td><?php echo $row['sta_altitude']; ?></td>
                    <td>
                        <a href="form.php?edit=<?php echo $row['sta_id']; ?>"
                            class="btn btn-info">Edit</a>
                        <a href="form.php?delete=<?php echo $row['sta_id']; ?>"
                            class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>

    <?php
    function pre_r($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
    ?>
    
</div>

    
</body>
</html>