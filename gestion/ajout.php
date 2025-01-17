<?php 
require_once './function.php';   // entrer dans le fichier function.php
if ( user_connected() ) {     // vérifier si l'utilisateur est connecté
    $host = 'localhost';
    $db_name = 'projet';
    $username = 'root';
    $password = '';

    $bdd = null;

    try {
        $bdd = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connexion reussie ! <br> \n";
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données: " . $e->getMessage());
    }

}
?>

<?php

function security($data){
	$data = trim($data); // la fonction trim permet de supprimer les espaces entrer en trop pas l'utilisateur et des retour à la ligne non désirer
	$data = stripslashes($data); //la fonction stripslashes permet de supprimer les antislashs au cas où
	$data = strip_tags($data); // la fonction strip_tags va tout dabord empecher l'exécution des balises html et ensuite va les supprimé
    $data = strtolower($data);// permet de transformer la chaine de caratère en minuscule

   return $data; 
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../image/other/logos.png" type="image/x-icon" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="nodes/bootstrap/css/bootstrap.css">
    <title>Gestion</title>

    <?php    
    
    include "folder/style.php"; 
    include "./folder/stylegestion.php";

    
    ?>

</head>
<div class="" style="margin-top:100px">
        <?php   if(est_connecte()){
                include_once '../deconnexion.php';
            } 
        ?>
</div>

<body style="margin-bottom:100px;">
    <?php include "./folder/header.php"; ?>
    <?php include "folder/toolBar.php"; ?>

    <div class="container" style="margin-top:30px; ;">
        <form style="background-color:lightgreen; padding:40px;" action="" method="POST">
            <div class="form-group">
                <label style="font-size:30px;" for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label style="font-size:30px;" for="description">Description :</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label style="font-size:30px;" for="quantite">Quantité en stock :</label>
                <input type="number" class="form-control" id="quantite" name="quantite" required>
            </div>
            <div class="form-group">
                <label style="font-size:30px;" for="prix">Prix du produit :</label>
                <input type="number" step="0.01" class="form-control" id="prix" name="prix" required>
            </div>
            <div class="form-group">
                <label style="font-size:30px;" for="categorie">ID catégorie(1 ou 2) :</label>
                <input type="number" class="form-control" id="categorie" name="categorie" required>
            </div>
            <center>
                    <button type="submit" name="send" style="justify-content:center;" class="btn btn-success">Soumettre</button>
            </center>
        </form>


    <?php if (isset($_POST['send'])) { 
        
        $nom = security( $_POST['nom'] );
        $description = security( $_POST['description'] );
        $quantite =  $_POST['quantite'] ;
        $prix =  $_POST['prix'] ;
        $categorie = security( $_POST['categorie'] );


        // INSERT INTO `produit` (`id_produit`, `nom_produit`, `description_produit`, `prix_produit`, `qte_en_stock`, `id_categorie`) 
        // VALUES (NULL, 'Pantalon Mr', 'toutes les tailles dispo', '12', '20', '1');
        // insertion de produit dans la table produit

		$resultat = $bdd->exec("INSERT INTO produit VALUES(NULL, '$nom', '$description', '$quantite', '$prix', '$categorie' )");

        if ($resultat) {
        ?>
            <div class="alert alert-success">Produit ajouté avec succès</div>
        <?php
        } else {
            ?>
            <div class="alert alert-danger">Nous avons rencontré un problème lord de l'envoie des données</div>
        <?php
        }
        

    } ?>
    </div>

    <script src="../useful/jquery/jquery.min.js"></script>
    <script src="../useful/popper/popper.min.js"></script>
    <script src="../useful/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
</body>
</html>