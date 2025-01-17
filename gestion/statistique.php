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

function security($data){
	$data = trim($data); // la fonction trim permet de supprimer les espaces entrer en trop pas l'utilisateur et des retour à la ligne non désirer
	$data = stripslashes($data); //la fonction stripslashes permet de supprimer les antislashs au cas où
	$data = strip_tags($data); // la fonction strip_tags va tout dabord empecher l'exécution des balises html et ensuite va les supprimé
    $data = strtolower($data);// permet de transformer la chaine de caratère en minuscule
   return $data; 
}


if (isset($_GET['cle'])) {
    $cle =  security($_GET['cle']) ;
    $sql = "SELECT * FROM produit WHERE nom_produit = '$cle' "; 
} else {
    $sql = "SELECT * FROM produit ORDER BY nom_produit ASC"; 
}


$req = $bdd->query($sql);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../image/other/logos.png" type="image/x-icon" />
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="nodes/bootstrap/css/bootstrap.css">
    <title>Gestion</title>

    <?php    include "folder/style.php"; ?>
</head>

    <div class="" style="margin-top:100px">
        <?php   if(est_connecte()){
                include_once '../deconnexion.php';
            } 
        ?>
    </div>

<body>
    <?php include "./folder/header.php"; ?>
    <?php include "./folder/toolBar.php"; ?>

    <div class="container" style="margin-top:50px;">
        <form method="GET" id="monform" name="form1" action="<?php $_SERVER['PHP_SELF'] ?>">
            <p>
                <label> Recherche :
                <input type="text" name="cle" value="<?php if(isset($_GET['cle'])) echo $_GET['cle']  ?>">
                </label>
                
            </p>
            <p>
                <label>
                <input type="submit" name="boutton" class="btn btn-success" value="Envoyer" />
                <!-- <button class="btn btn-success" type="submit">Envoyer</button> -->
                </label>
            </p>
        
        </form>


        <table border="1" class="table table-striped">
            <tr>
                <td><b><p>Nom</p></b></td>
                <td><p><b>Description</b></p></td>
                <td> <p><b>Prix du produit</b></p></td>
                <td> <p><b>Quantité en stock</b></p></td>
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


<script src="../useful/jquery/jquery.min.js"></script>
<script src="../useful/popper/popper.min.js"></script>
<script src="../useful/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
</body>
</html>