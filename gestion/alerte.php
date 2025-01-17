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

        $sql = "SELECT * FROM produit WHERE prix_produit <= 20  ";     
        $req = $bdd->query($sql);
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données: " . $e->getMessage());
    }

    

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

    <?php    include "folder/style.php";    ?>
</head>
<div class="" style="margin-top:100px">
        <?php   if(est_connecte()){
                include_once '../deconnexion.php';
            } 
        ?>
    </div>
<body>
    <?php include "folder/header.php"; ?>
    
    
    <?php include "folder/toolBar.php"; ?>

    <div class="container" style="margin-bottom: 100px">
        <br><br><br>
        <h1 align="center" style="font-size:70px;"> <u> Alertes </u></h1>
        <div class="bg-secondary  text-white" align="center" style="font-size:20px;">Liste des produits qui seront bientôt en rupture de stock</div>
            <br><br>
        <table border="1" class="table table-striped">
            <tr>
                <td><b><p>Nom</p></b></td>
                <td><p><b>Description</b></p></td>
                <td> <p><b>Quantité en stock</b></p></td>
                <td> <p><b>Prix du produit</b></p></td>
                <td> <p><b>ID catégorie</b></p></td>
            </tr>

            <?php while ($result = $req->fetch()) {  ?>
            <tr >
                <td style="padding: 20px;"><?php echo $result['nom_produit'] ?></td>
                <td style="padding: 20px;"><?php echo $result['description_produit'] ?></td>
                <td style="padding: 20px;"><?php echo $result['qte_en_stock'] ?></td>
                <td style="padding: 20px;"><?php echo $result['prix_produit'] ?></td>
                <td style="padding: 20px;"><?php echo $result['id_categorie'] ?></td>

            </tr>
        
            <?php } ?>
        </table>

    </div>


    <script src="nodes/jquery/jquery-3.4.1.min.js"></script>
    <script src="nodes/popper/popper.min.js"></script>
    <script src="nodes/bootstrap/js/bootstrap.js"></script>
</body>

</html>