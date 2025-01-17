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
    $req = $bdd->query($sql);

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

    <?php    include "folder/style.php"; ?>
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

    <div class="container" style="margin-top:50px;">
        <form method="GET" id="monform" name="form1" action="<?php $_SERVER['PHP_SELF'] ?>">
            <p>
                <label> Recherche :
                <input type="text" name="cle" value="<?php if(isset($_GET['cle'])) echo $_GET['cle']  ?>">
                </label>
                
            </p>
            <p>
                <label>
                <input type="submit" name="boutton" class="btn btn-success" value="Rechercher" />
                <!-- <button class="btn btn-success" type="submit">Envoyer</button> -->
                </label>
            </p>
        
        </form>


        <table border="1" class="table table-striped">
            <tr>
            <td><b><p>id produit</p></b></td>
                <td><b><p>Nom</p></b></td>
                <td><p><b>Description</b></p></td>
                <td> <p><b>Prix du produit</b></p></td>
                <td> <p><b>Quantité en stock</b></p></td>
                <td> <p><b>ID catégorie</b></p></td>
            </tr>

            <?php 
            if (isset($_GET['cle'])) {
                while ($result = $req->fetch()) { 
                    $id = $result['id_produit'];
                    $nom = $result['nom_produit'];
                    $description = $result['description_produit'];
                    $qte = $result['qte_en_stock'];
                    $prix = $result['prix_produit'];
                    $id_cat = $result['id_categorie'];

            ?>
            <tr >
            <td style="padding: 20px;"><?php echo $result['id_produit'] ?></td>
                <td style="padding: 20px;"><?php echo $result['nom_produit'] ?></td>
                <td style="padding: 20px;"><?php echo $result['description_produit'] ?></td>
                <td style="padding: 20px;"><?php echo $result['qte_en_stock'] ?></td>
                <td style="padding: 20px;"><?php echo $result['prix_produit'] ?></td>
                <td style="padding: 20px;"><?php echo $result['id_categorie'] ?></td>

            </tr>
        
            <?php } }?>
        </table>
    </div>

    
    <div class="container text-center">
            <form style="background-color:rgb(223,206,113); padding:40px;" action="" method="post">
                    <div class="form-group">
                        <label style="font-size:30px;" for="nom">Nom :</label>
                        <input type="hidden" name="hide" value="<?php if(isset($_GET['cle'])) { echo $id; } ?>">
                        <input type="text" class="form-control" id="nom" name="nom" value="<?php if(isset($_GET['cle'])) { echo $nom; } ?>" required>
                    </div>
                    <div class="form-group">
                        <label style="font-size:30px;" for="description">Description :</label>
                        <textarea class="form-control" id="description" name="description" value="<?php if(isset($_GET['cle'])) { echo $description; } ?>" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label style="font-size:30px;" for="quantite">Quantité en stock :</label>
                        <input type="number" class="form-control" id="quantite" name="quantite" value="<?php if(isset($_GET['cle'])) { echo $prix; } ?>" required>
                    </div>
                    <div class="form-group">
                        <label style="font-size:30px;" for="prix">Prix du produit :</label>
                        <input type="number" step="0.01" class="form-control" id="prix" name="prix" value="<?php if(isset($_GET['cle'])) { echo $qte; } ?>" required>
                    </div>
                    <div class="form-group">
                        <label style="font-size:30px;" for="categorie">ID catégorie(1 ou 2) :</label>
                        <input type="number" class="form-control" id="categorie" name="categorie" value="<?php if(isset($_GET['cle'])) { echo $id_cat; } ?>" required>
                    </div>
                    <center>
                            <button type="submit" name="send" style="justify-content:center;" class="btn btn-success">Soumettre</button>
                    </center>
            </form>
        </div>

        <?php if (isset($_POST['send'])) { 
        
        $id = security( $_POST['hide'] );
        $nom = security( $_POST['nom'] );
        $descrip = security( $_POST['description'] );
        $quantite = security( $_POST['quantite'] );
        $prix = security( $_POST['prix'] );
        $categorie = security( $_POST['categorie'] );


        // #**************************************************
        $sql = "UPDATE produit SET nom_produit = '$nom', description_produit = '$descrip', qte_en_stock = '$prix', prix_produit = '$quantite', id_categorie = '$categorie' WHERE id_produit = '$id' ";
        $resultat = $bdd->exec($sql);
        // #**************************************************
    
        if ($resultat) {
        ?>
            <div class="alert alert-success">Produit modifier avec succès</div>
        <?php
        } else {
            ?>
            <div class="alert alert-danger">Nous avons rencontré un problème lord de l'envoie des données</div>
        <?php
        }
        

    } ?>


    <script src="../useful/jquery/jquery.min.js"></script>
    <script src="../useful/popper/popper.min.js"></script>
    <script src="../useful/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
</body>
</html>