<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        
        <div class="nav1">
          <!-- le logo -->
          <a class="navbar-brand" href="#" style="margin-left: 80px;">
            <img src="../image/other/logos.png" style="height: 60px; width: 60px; border-radius: 20px;" alt="" srcset="">
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
                  <a class="nav-link" href="../index.php" onmouseover="this.style.color = 'lightgreen'" style="color: white;"
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
                    <a class="dropdown-item" href="../produit.php">Homme</a>
                    <a class="dropdown-item" href="../produit.php">Femme</a>
                  </div>
                </li>
          
                <li class="nav-item">
                  <a class="nav-link" href="../A_propos/ABOUT_US.php" onmouseover="this.style.color = 'lightgreen'" style="color: white;"
                    onmouseout="this.style.color = 'white'">
                    <i class="fa fa-address-book"></i>
                    A propos
                  </a>
                </li>
          
                <li class="nav-item">
                  <a class="nav-link" href="../contacter_nous/index.php" onmouseover="this.style.color = 'lightgreen'" style="color: white;"
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
                  <a class="dropdown-item" href="../le_login/connexion.php">Inscription</a>
                  <a class="dropdown-item" href="../le_login/connexion.php">Connexion</a>
                  <hr>
                  <a class="dropdown-item" href="../deco.php">Déconnexion</a>
                </div>
              </div>
            </div>
          </div>
      </nav>