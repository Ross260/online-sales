<!DOCTYPE html>
<html lang="en">
<head>
  <title>Accueil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="useful/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- <link rel="stylesheet" href="stylehome.css"> -->

    <?php
        include "./gestion/folder/stylegestion.php";
        // include "./gestion/folder/header.php"; 
    ?>

</head>
<body>

  <header>
    
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        
      <div class="nav1">
        <!-- le logo -->
        <a class="navbar-brand" href="#" style="margin-left: 80px;">
          <img src="./image/other/logos.png" style="height: 60px; width: 60px; border-radius: 20px;" alt="" srcset="">
        </a>
      </div>

        <!-- le bouton de mon collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        
          <!-- les liens de la navbar -->
          <div class="nav2 ">
            <ul class="navbar-nav" style="margin-left: 300px;">
              <li class="nav-item">
                <a class="nav-link" href="index.php" onmouseover="this.style.color = 'lightgreen'" style="color: white;"
                  onmouseout="this.style.color = 'white'">
                  <span class="">
                    <i class="fas fa-home"></i>
                    Accueil
                  </span>
                </a>
              </li>
        
              <!-- Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"
                  onmouseover="this.style.color = 'lightgreen'" style="color: white;" onmouseout="this.style.color = 'white'">
                  <i class="fas fa-list"></i>
                  Catégorie
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="produit.php">Homme</a>
                  <a class="dropdown-item" href="produit.php">Femme</a>
                </div>
              </li>
        
              <li class="nav-item">
                <a class="nav-link" href="A_propos/ABOUT_US.php" onmouseover="this.style.color = 'lightgreen'" style="color: white;"
                  onmouseout="this.style.color = 'white'">
                  <i class="fa fa-address-book"></i>
                  A propos
                </a>
              </li>
        
              <li class="nav-item">
                <a class="nav-link" href="contacter_nous/index.php" onmouseover="this.style.color = 'lightgreen'" style="color: white;"
                  onmouseout="this.style.color = 'white'">
                  <i class="fa fa-address-card"></i>
                  Nous contacter
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="nav3" style="position: relative;">
          <div class="contien">
            <div id="icoUser">
              <a class="nav-link dropdown-toggle" style="border-radius: 20px;" href="#" id="navbardrop" data-toggle="dropdown" onmouseover="this.style.color = 'gray'" style="color: gray;" onmouseout="this.style.color = 'gray'">
                <i class="fas fa-user"></i>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="le_login/connexion.php">Inscription</a>
                <a class="dropdown-item" href="le_login/connexion.php">Connexion</a>
                <hr>
                <a class="dropdown-item" href="deco.php">Déconnexion</a>
              </div>
            </div>
          </div>
        </div>
    </nav>


  </header>

    <div class="container" style="margin-top:100px;">
      <b><u><h1 style="font-family:algerian">Votre panier</h1></u></b>
    </div>

    <br><br>

    <div class="container" >

    <?php

      #recpérer les données de la table (id_user) et recupérer à partir de ces données les données de la table produit
      #connexion à id_user
      $host = 'localhost';
      $db_name = 'projet';
      $username = 'root';
      $password = '';

      $bdd = null;

      try {
          $bdd = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
          $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          // echo "connexion reussie ! <br> \n";
      } catch (PDOException $e) {
          die("Erreur de connexion à la base de données: " . $e->getMessage());
      }

      ####################################################################################
      #recupération des id valeurs de id_user et stockage dans des variables
      $sql = "SELECT * FROM id_user"; 
      $req = $bdd->query($sql);

      $valeur_id_user = [];
     
      $i = 0;
      while ($result = $req->fetch()) { 
          $valeur_id_user[] = $result['valeur_produit'];
          $i++;
      }

      ##################################################################################
      #connexion à la table produit 

      foreach ($valeur_id_user as $valeur) {

        #recuperation des produits ayant pour id les valeurs recupérées dans id_user
        $sql = "SELECT * FROM produit WHERE id_produit = '$valeur' "; 
        $req = $bdd->query($sql);


        #affichage
        ?>

        <table border="1" class="table table-striped">
            <tr>

                <!-- enlevé la ligne ci le moment venu -->
                <!-- <td style="background:lightgreen"><b><p>id produit</p></b></tds> -->


                <td style="background:lightgreen"><b><p>Nom</p></b></tds>
                <td style="background:lightgreen"><p><b>Description</b></p></tds>
                <td style="background:lightgreen"> <p><b>Prix du produit</b></p></tds>
                <td style="background:lightgreen"> <p><b>Catégorie</b></p></tds>
            </tr>

            <?php 
            
                while ($result = $req->fetch()) { 
                    // $id = $result['id_produit'];
                    $nom = $result['nom_produit'];
                    $description = $result['description_produit'];
                    $qte = $result['qte_en_stock'];
                    $prix = $result['prix_produit'];
                    $id_cat = $result['id_categorie'];

            ?>
            <tr >
            <!-- <td style="padding: 20px;"><?php #echo $result['id_produit'] ?></td> -->
                <td style="padding: 20px;"><?php echo $result['nom_produit'] ?></td>
                <td style="padding: 20px;"><?php echo $result['description_produit'] ?></td>
                <td style="padding: 20px;"><?php echo $result['qte_en_stock'] ?>€</td>
                <td style="padding: 20px;"><?php if ($result['id_categorie'] == 1) {
                  echo "homme";
                }  ?></td>

            </tr>
        
            <?php  }?>
        </table>

        <?php


        // echo $valeur . "<br>";
      }


    ?>

    <a href="paiement.php">
      <input type="button" class="btn btn-success" value="Valider la commande" style="margin-bottom:40px;">
    </a>

    </div>

    

      <footer style="background-color: #343a40; background-size: cover; height: 300px;" ><!-- la couleur dark de boostrap -->
        <div class="container" >
          <div class="container-fluid">
            <div class="row bg-dark mt-5">
              <div class="col-md-7" style="color: aliceblue;">
    
                <!-- partie Contact -->
                <h3 style="color: white;  margin: 20px 0;">Contact</h3>
    
                <div class="container-fluid">
                  <div class="row">
    
                    <!-- le premier col -->
                    <div class="col-sm-6" style="display: flex;">
    
                      <div style="margin: 20px 0px;"> 
                        <i class="fas fa-home" style="font-size: 20px;"></i>
                      </div>
                      <div style="margin: 20px 20px;">
                        Adress <br>
                        CoutureDuMonde
                      </div>
    
                    </div>
    
                    <!-- le deuyxième col -->
                     <div class="col-sm-6" style="display: flex;">
    
                      <div style="margin: 20px 0px;"> 
                        <i class="fas fa-comment" style="font-size: 20px;"></i>
                      </div>
                      <div style="margin: 20px 20px;">
                        Social <br>
                        <a href="mailto:couturedumonde@gmail.com">couturedumonde@gmail.com</a>  
                      </div>
    
                    </div>
                  </div>
                
    
                  <div class="row">
    
                    <!-- le troisième col -->
                    <div class="col-sm-6" style="display: flex;">
    
                      <div style="margin: 20px 0px;"> 
                        <i class="fas fa-envelope" style="font-size: 20px;"></i>
                      </div>
                      <div style="margin: 20px 20px;">
                        Email <br>
                        <a href="mailto:couturedumonde@gmail.com">couturedumonde@gmail.com</a>  
                      </div>
    
                    </div>
    
                    <div class="col-sm-6" style="display: flex;">
    
                      <div style="margin: 20px 0px;"> 
                        <i class="fas fa-phone" style="font-size: 20px;"></i>
                      </div>
                      <div style="margin: 20px 20px;">
                        Phone <br>
                        +330622556688  
                      </div>
    
                    </div>
                  </div>
    
                </div>
              </div>
      
              <div class="col-md-5">
                
                <h3 style="color: #343a40;  margin: 20px 0;">Contact</h3>
                <div class="container-fluid">
                  <div class="row">
    
                    <!-- le premier col -->
                    <div class="col-sm-6">
    
                      <div style="margin: 20px 20px; color: white;">
                        <i class="fab fa-facebook" style="font-size: 20px; color: white;"></i>
                        <a href="#" style="color: white;">Facebook</a> <br>
                        CoutureDuMonde
                      </div>
    
                      <div style="margin: 20px 20px; color: white;">
                        <i class="fab fa-twitter" style="font-size: 20px; color: white;"></i>
                        <a href="#" style="color: white;">Twitter</a> <br>
                        CoutureDuMonde
                      </div>
    
    
                    </div>
                  </div>
                </div>
    
                <div class="footer-bottom">
                  <p style="color: white;">&copy; 2024 couturedumonde. All rights reserved.</p>
                </div>
    
              </div>
            </div>
          </div>
        </div>
      </footer>

    <script src="useful/jquery/jquery.min.js"></script>
    <script src="useful/popper/popper.min.js"></script>
    <script src="useful/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>

</body>
</html>