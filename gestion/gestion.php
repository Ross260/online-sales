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

<body>
                
    <?php
    
    include "./folder/stylegestion.php";
    include "./folder/header.php"; 
    
    ?>
    
    
    <main>
        <?php include "folder/toolBar.php"; ?>
        
    </main>

    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="margin-top:100px">
                <u><h1 style="font-family:algerian">GESTION DES PRODUITS EN STOCK</h1></u>  
                    <?php   if(est_connecte()){
                                 include_once '../deconnexion.php';
                            } 
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    
                    
                
    <div class="container" style="margin-bottom:200px;"></div>
    




    <script src="nodes/jquery/jquery-3.4.1.min.js"></script>
    <script src="nodes/popper/popper.min.js"></script>
    <script src="nodes/bootstrap/js/bootstrap.js"></script>
</body>

</html>