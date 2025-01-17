<?php
// require_once './gestion/function.php';
$erreur = null;

$password = '$2y$10$qV/M2ldlOeGTmYxkLa4i5uJKgHnrPeIyzfUQylero2iP3YEK9Cfle'; // le suis le hash du mot de passe (Ross)
if (!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
    if ($_POST['pseudo'] === 'Ketcha' && password_verify($_POST['motdepasse'], $password)) {
        session_start();
        $_SESSION['connecte'] = 1; // stoqué son état de connexion
        header('Location: gestion/gestion.php'); // redirection vers la page principale de gestion
        exit();
    }else {
        
        $erreur = "Identifiants incorrects";
        
    }
}

// require_once 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-wphp localhost:8000idth, initial-scale=1.0">
	<link rel="stylesheet" href="useful/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
	<script src="scripto.js"></script>
	<title>Connection</title>

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


</div>
<div class="container" style="padding:100px; margin-top:100px;">


<?php if($erreur): ?>
<div class="alert alert-danger">
    <?= $erreur ?>
</div>
<?php endif; ?>

<h3 style="color:green">Veillez entrez vos identifiants</h3><br>
<form action="" method="POST">
    <div class="form-group">
        <input type="text" class="form-control" name='pseudo' placeholder="Nom d'utilisateur" required>
    </div>
    <div class="form-group">
    <input type="password" class="form-control" name="motdepasse" placeholder="Votre mot de passe" required>
    </div>
    <button type="submit" class="btn btn-success">Se connecter</button>
</form>


</div>






<script src="nodes/jquery/jquery-3.4.1.min.js"></script>
<script src="nodes/popper/popper.min.js"></script>
<script src="nodes/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>