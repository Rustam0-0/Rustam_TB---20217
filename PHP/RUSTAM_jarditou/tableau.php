<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>page accueil</title>
</head>

<body>
    <?php require_once 'script.php'; ?>
    <?php
        $mysqli = new mysqli('localhost','root','','jarditou') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM produits") or die($mysqli->error);
    ?>

    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <img src="img/jarditou_logo.jpg" width="150" height="50" alt="logo">
            <h1>Tout le jardin</h1>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <a class="navbar-brand" href="index.php">Jarditou.com</a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"> Accueil</a></li>
                        <li class="nav-item active"><a class="nav-link" href="tableau.php"> Tableau</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php"> Contact</a></li>
                    </ul>

                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="d-flex">
            <img src="img/promotion.jpg" alt="promotion" class="w-100">
        </div>

        <table class="table table-responsive-sm table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Photo</th>
                    <th>ID</th>
                    <th>Référence</th>
                    <th>Libellé</th>
                    <th>Prix</th>
                    <th>Stock</th>
                    <th>Couleur</th>
                    <th>Ajout</th>
                    <th>Modif</th>
                    <th>Bloqué</th>
                </tr>
            </thead>

            <?php
                 while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td bgcolor="#FFCC66"><img src="img/<?php echo $row['pro_id']; ?>.jpg" width="90" height="90" alt="<?php echo $row['pro_id']; ?>.jpg"></td>
                    <td bgcolor="#CCCCFF"><?php echo $row['pro_id']; ?></td>
                    <td bgcolor="#CCCCFF"><?php echo $row['pro_ref']; ?></td>
                    <td bgcolor="#FFCC66"><a class="link" href="reference.php?id=<?php echo $row['pro_id']?>"><?php echo $row['pro_libelle']; ?></a></td>
                    <td bgcolor="#CCCCFF"><?php echo $row['pro_prix']; ?></td>
                    <td bgcolor="#CCCCFF"><?php echo $row['pro_stock']; ?></td>
                    <td bgcolor="#CCCCFF"><?php echo $row['pro_couleur']; ?></td>
                    <td bgcolor="#CCCCFF"><?php echo $row['pro_d_ajout']; ?></td>
                    <td bgcolor="#CCCCFF"><?php echo $row['pro_d_modif']; ?></td>
                    <td bgcolor="#CCCCFF"><?php echo $row['pro_bloque']; ?></td>                   
                </tr>
            <?php endwhile; ?>
            
        </table>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Mention légales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Horaires</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Plan du site</a></li>
            </ul>
        </nav>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>