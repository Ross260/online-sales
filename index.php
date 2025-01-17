<!DOCTYPE html>
<html lang="en">
<head>
  <title>Accueil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="useful/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- <link rel="stylesheet" href="stylehome.css"> -->

    <?php    include "./stylehome.php"; ?>


   <script>
    // JavaScript pour l'animation de texte typé
    document.addEventListener('DOMContentLoaded', function () {
      const typedStrings = ["Africain", "Européen", "Asiatique", "Americain"];
      const typedElement = document.querySelector('.leH1');
      
      if (typedElement) {
        let charIndex = 0;
        let stringIndex = 0;
        let typingEffect = setInterval(type, 250);

        function type() {
          if (stringIndex === typedStrings.length) {
            stringIndex = 0;
          }

          if (charIndex < typedStrings[stringIndex].length) {
            typedElement.textContent += typedStrings[stringIndex].charAt(charIndex);
            charIndex++;
          } else {
            charIndex = 0;
            stringIndex++;
            typedElement.textContent = '';
          }
        }
      }
    });
  </script>

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
                <a class="dropdown-item" href="connexionAdmin.php">Connexion admin</a>
                <hr>
                <a class="dropdown-item" href="deco.php">Déconnexion</a>
              </div>
            </div>
          </div>
        </div>
    </nav>

    <!-- <div class="over-header"> -->
      <h1>
        Des styles vestimentaires<br>
        <div class="leH1">
        </div>
      </h1>
    <!-- </div> -->
    

  </header>
  
  <br>
       
  <div class="container">
    <h2 style="text-align: center; font-size: 50px;">
      Bienvenue sur notre boutique en ligne !  
      <i class="fas fa-store-alt"></i>
    </h2>

    
    <div class="container-fluid">
      <div class="row">
        <!--je gère les marges en bas et à haut de ces différents champ avec le mb(margin-bottom) et le mt(margin-top)-->
        <div class="col-md-6 mb-5 mt-5" style="display: flex;"> 

          <div class="div leFirst" style="height: 80px; width:80px; border-radius: 50px; background-color: rgb(60, 212, 85);">
            <i class="fas fa-check"></i>
          </div>

          <div class="div ml-3" >
             Découvrez une sélection de produits tendance et de qualité pour répondre à tous vos besoins. 
            Faites vos achats en toute simplicité et sécurité.
          </div>

        </div>

        <div class="col-md-6 mb-5 mt-5" style="display: flex;"> 

          <div class="div leFirst" style="height: 80px; width:80px; border-radius: 50px; background-color: rgb(60, 212, 85);">
            <i class="fas fa-arrow-right"></i>
          </div>
          <div class="div ml-3">
            Explorez notre catalogue en ligne pour trouver les dernières tendances en matière de mode,

            <a href="./produit.php">Explorer !
              <!-- <button style="border-radius: 10px;background-color: aquamarine; float: right; margin-right: 50px;">
                <i class="fas fa-arrow-right"></i>
              </button> -->
            </a>
          </div>

        </div>

      </div>
      <hr>
      <div class="row">
        <div class="col-md-6 mb-5 mt-5" style="display: flex;"> 

          <div class="div leFirst" style="height: 80px; width:80px; border-radius: 50px; background-color: rgb(60, 212, 85);">
            <i class="fas fa-desktop"></i>
          </div>
          <div class="div ml-3">
            Plongez dans l'univers de notre boutique virtuelle et laissez-vous séduire par
            nos offres exclusives et nos promotions irrésistibles.
            Profitez d'une expérience de shopping en ligne unique et pratique.
            <br>
            <!-- <a href="connexionAdmin.php"><div class="btn btn-success">connexion admin</div></a> -->
          </div>

        </div>

        <div class="col-md-6 mb-5 mt-5" style="display: flex;"> 

          <div class="div leFirst" style="height: 80px; width:80px; border-radius: 50px; background-color: rgb(60, 212, 85);">
            <i class="fas fa-cog"></i>
          </div>
          <div class="div ml-3">
            Que vous recherchiez des vêtements stylés, des vêtements tendances,
            notre site d'e-commerce est l'endroit idéal pour satisfaire toutes vos envies.
            Faites de chaque achat une expérience agréable et satisfaisante.
          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="centralImage">
  
    </div>
  </div>
  

  

  <!-- ################################################################################# -->
  <!-- le carousel -->
  <div class="container" style="margin-bottom:100px;">

    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item">
          <img src="image/aff.jpg" alt="Los Angeles" width="500" height="500" style="margin-left:300px;">
          <div class="carousel-caption">
            <h3>Style Africain</h3>
            <!-- <p>We had such a great time in LA!</p> -->
          </div>   
        </div>
        <div class="carousel-item active">
          <img src="image/amm.png" alt="Chicago" width="500" height="500" style="margin-left:300px;">
          <div class="carousel-caption">
            <h3 style="color:black;">Style Americain</h3>
            <!-- <p style="color:black;">Thank you, Chicago!</p> -->
          </div>   
        </div>
        <div class="carousel-item">
          <img src="image/euu.jpg" alt="New York" width="400" height="500" style="margin-left:300px;">
          <div class="carousel-caption">
            <h3 style="color:black;">Style Européen</h3>
            <!-- <p style="color:black;">We love the Big Apple!</p> -->
          </div>   
        </div>
        <div class="carousel-item">
          <img src="image/Asie/t_shirt/tshirt12.png" alt="New York" width="400" height="500" style="margin-left:300px;">
          <div class="carousel-caption">
            <h3 style="color:black;">Style Asiatique</h3>
            <!-- <p style="color:black;">We love the Big Apple!</p> -->
          </div>   
        </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>

<!-- ############################################################################################# -->

  <div class="container mt-5 mt-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 mt-5" align="center">
          
         Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
         Aspernatur ab aut debitis rem saepe eos sapiente in, id eum, magni 
         maiores consequuntur accusamus exercitationem obcaecati? Inventore quibusdam 
         quod error fugit.
         Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
         Aspernatur ab aut debitis rem saepe eos sapiente in, id eum, magni 
         maiores consequuntur accusamus exercitationem obcaecati? Inventore quibusdam 
         quod error fugit.
        </div>
        <div class="col-md-6" style="padding-top: 30px;" align="center">
          
         <img src="./image/gosse.jpg" style="height: 400px; width: 400px;">

        </div>
      </div>
    </div>
  </div>



  <footer style="background-color: #343a40; background-size: cover; height: 300px;"><!-- la couleur dark de boostrap -->
    <div class="container">
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



<!-- Faites-vous plaisir avec nos offres exclusives ! -->
<!-- Explorez nos catégories de produits -->
<!-- Suivez-nous sur les réseaux sociaux pour rester informé des dernières nouveautés -->