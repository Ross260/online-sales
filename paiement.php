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

    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-family: algerian;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }


    </style>

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



    <div class="container" style = "margin-top:150px;">
        <h1>Paiement</h1>
        <form action="https://www.votre-passerelle-de-paiement.com/paiement" method="post">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse :</label>
                <input type="text" name="adresse" id="adresse" required>
            </div>
            <div class="form-group">
                <label for="code_postal">Code postal :</label>
                <input type="text" name="code_postal" id="code_postal" required>
            </div>
            <div class="form-group">
                <label for="ville">Ville :</label>
                <input type="text" name="ville" id="ville" required>
            </div>
            <div class="form-group">
                <label for="pays">Pays :</label>
                <select name="pays" id="pays" required>
                    <option value="FR">France</option>
                    <option value="BE">Belgique</option>
                    <option value="CH">Suisse</option>
                    <!-- ...autres pays -->
                </select>
            </div>
            <div class="form-group">
                <label for="numero_carte">Numéro de carte :</label>
                <input type="text" name="numero_carte" id="numero_carte" required>
            </div>
            <div class="form-group">
                <label for="date_expiration">Date d'expiration :</label>
                <input type="text" name="date_expiration" id="date_expiration" required>
            </div>
            <div class="form-group">
                <label for="cryptogramme">Code de sécurité :</label>
                <input type="text" name="cryptogramme" id="cryptogramme" required>
            </div>
            <button type="submit" class="btn btn-success">Payer</button>
        </form>
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