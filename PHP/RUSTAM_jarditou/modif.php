<!DOCTYPE html>
<html lang="fr">

<head>
    <style>
        .pic { text-align: center;}
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>page référence</title>
</head>

<body>
   
    <div class="container-fluid">

                <div class="d-flex justify-content-between">
                    <img src="img/jarditou_logo.jpg" width="150" height="50" alt="">
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
                                <li class="nav-item"><a class="nav-link" href="tableau.php"> Tableau</a></li>
                                <li class="nav-item active"><a class="nav-link" href="contact.php"> Contact</a></li>
                            </ul>

                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                            </form>
                        </div>
                    </div>
                </nav>

                <div class="d-flex">
                    <img src="img/promotion.jpg" alt="prmotion" class="w-100">
                </div><br><br>

        <form action="" method="post">

        <?php
        $mysqli = new mysqli('localhost','root','','jarditou') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM produits JOIN categories ON categories.cat_id=produits.pro_cat_id") or die($mysqli->error);
        ?>
            <?php $row = $result->fetch_assoc() ?>

                <p class="pic"><img src="img/<?php echo $row['pro_id']; ?>.jpg" width="200" height="200" alt="<?php echo $row['pro_id']; ?>.jpg"></p>

                <div class="form-group">
                    <label>ID :</label>
                    <input class="form-control" type="text" disabled value="<?php echo $row['pro_id']; ?>">
                </div>

                <div class="form-group">
                    <label>Référence :</label>
                    <input class="form-control" type="text" value="<?php echo $row['pro_ref']; ?>">
                </div>

                <div class="form-group">
                    <label>Catégorie :</label>
                    <input class="form-control" type="text" value="<?php echo $row['cat_nom']; ?>">
                </div>

                <div class="form-group">
                    <label>Libellé :</label>
                    <input class="form-control" type="text" value="<?php echo $row['pro_libelle']; ?>">
                </div>

                <div class="form-group">
                    <label>Description :</label>
                    <textarea rows="3" class="form-control" value=""><?php echo $row['pro_description']; ?></textarea>
                </div>

                <div class="form-group">
                    <label>Prix :</label>
                    <input class="form-control" type="number" value="<?php echo $row['pro_prix']; ?>">
                </div>

                <div class="form-group">
                    <label>Stock :</label>
                    <input class="form-control" type="number" value="<?php echo $row['pro_stock']; ?>">
                </div>

                <div class="form-group">
                    <label>Couleur :</label>
                    <input class="form-control" type="text" value="<?php echo $row['pro_couleur']; ?>">
                </div>

                    <p>Produit bloqué? :</p>
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="Radio1" name="custom" class="custom-control-input" value="<?php echo $row['pro_bloque']; ?>">
                            <label class="custom-control-label" for="Radio1">Oui</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="Radio2" name="custom" class="custom-control-input" value="<?php echo $row['pro_bloque']; ?>">
                            <label class="custom-control-label" for="Radio2">Non</label>
                        </div>            
                    
                    </div>

                    <div class="form-group">
                        <label for="inputDate">Date d'ajout :</label>
                        <input type="date" class="form-control" id="Date_a" disabled value="<?php echo $row['pro_d_ajout']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="inputDate">Date de modification :</label>
                        <input type="date" class="form-control" id="Date_m" disabled value="<?php echo $row['pro_d_modif']; ?>">
                    </div>
                
                <div class="justify-content-between">
                <a class="btn btn-secondary btn-lg" href="tableau.php" role="button">Retour</a>
                <a class="btn btn-success btn-lg" href="" role="button">Enregister</a>
                </div>
        </form><br>

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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
