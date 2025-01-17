éé<!doctype html>
<html lang="en">
  <head>
  	<title>Contact Form 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="useful/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css"><link rel="stylesheet" href="../useful/bootstrap-4.6.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">


    
</head>



<body>

<?php 

#fonction de sécuité
function security($data){
	$data = trim($data); // la fonction trim permet de supprimer les espaces entrer en trop pas l'utilisateur et des retour à la ligne non désirer
	$data = stripslashes($data); //la fonction stripslashes permet de supprimer les antislashs au cas où
	$data = strip_tags($data); // la fonction strip_tags va tout dabord empecher l'exécution des balises html et ensuite va les supprimé
    $data = strtolower($data);// permet de transformer la chaine de caratère en minuscule

   return $data; 
}



if (isset($_POST['send'])) { 


	#connexion à la base de donnée
	$host = 'localhost';
	$db_name = 'projet';
	$username = 'root';
	$password = '';

	$bdd = null;

	try {
		$bdd = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// echo "<br><br>c<br><br><br><br><br>onnexion reussie ! <br> \n";
	} catch (PDOException $e) {
		die("Erreur de connexion à la base de données: " . $e->getMessage());
	}

	$nom = security( $_POST['name'] );
    $email = security( $_POST['email'] );
    $sujet =  $_POST['subject'];
    $message =  $_POST['message'] ;
	
	$resultat = $bdd->exec("INSERT INTO contact VALUES(NULL, '$nom', '$email', '$sujet', '$message')");

	if ($resultat) {
        ?>
			<div class="container">
				<div class="alert alert-success" style="margin-top:100px">Informations de contact enregistrés avec succès</div>
			
        <?php
        } else {
            ?>
            	<div class="alert alert-danger">Nous avons rencontré un problème lord de l'envoie des données</div>
			</div>
        <?php
        }
}

?>


<header>
		<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">

			<div class="nav1">
				<!-- le logo -->
				<a class="navbar-brand" href="#" style="margin-left: 80px;"><img src="../image/other/logos.png" style="height: 60px; width: 60px; border-radius: 20px;" alt="" srcset="">       </a>
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
							<a class="nav-link" href="../index.php" onmouseover="this.style.color = 'lightgreen'"
								style="color: white;" onmouseout="this.style.color = 'white'">
								<span class="">
									<i class="fas fa-home"></i>
									Accueil
								</span>
							</a>
						</li>

						<!-- Dropdown -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"
								onmouseover="this.style.color = 'lightgreen'" style="color: white;"
								onmouseout="this.style.color = 'white'">
								<i class="fas fa-list"></i>
								Catégorie
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="../produit.php">Homme</a>
								<a class="dropdown-item" href="../produit.php">Femme</a>
							</div>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="../A_propos/ABOUT_US.php" onmouseover="this.style.color = 'lightgreen'"
								style="color: white;" onmouseout="this.style.color = 'white'">
								<i class="fa fa-address-book"></i>
								A propos
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="../contacter_nous/index.php"
								onmouseover="this.style.color = 'lightgreen'" style="color: white;"
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
						<a class="nav-link dropdown-toggle" style="border-radius: 20px;" href="#" id="navbardrop"
							data-toggle="dropdown" onmouseover="this.style.color = 'gray'" style="color: gray;"
							onmouseout="this.style.color = 'gray'">
							<i class="fas fa-user"></i>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="../le_login/connexion.php">Inscription</a>
							<a class="dropdown-item" href="../le_login/connexion.php">Connexion</a>
							<hr>
							<a class="dropdown-item" href="deconnexion.php">Déconnexion</a>
						</div>
					</div>
				</div>
			</div>
		</nav>
</header>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-7 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Entrer en contact</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
								Votre message a été envoyé, merci !
				      		</div>
									<form method="POST" id="contactForm" name="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Nom">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" name="send" value="Send Message" class="btn btn-success">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
					<!-- ################################################################### -->
								</div>
							</div>

							

							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-success w-100 p-lg-5 p-4">
									<h3 class="mb-4 mt-md-4">Contactez - nous</h3>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Address:</span> 10 Rue Sextius Michel 75001,Paris</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>numero:</span> <a href="tel://1234567920">oooooooooo</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Email:</span> <a href="mailto:jeanpiere.assedi05@gmail.com">jeanpiere.assedi05@gmail.com</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Siteweb</span> <a href="#">site.com</a></p>
					          </div>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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


	<!-- <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script> -->

</body>
</html>

