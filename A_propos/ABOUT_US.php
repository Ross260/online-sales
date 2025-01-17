<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../useful/bootstrap-4.6.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>ABOUT US</title>
</head>

	<header>
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
							<a class="nav-link" href="ABOUT_US.php" onmouseover="this.style.color = 'lightgreen'"
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

	<div class="wrapper">
		<div class="row">
			<div class="image-section">
				<img src="https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2F8b%2Fc0%2F8bc081e4565b9c6144a413fd555c2fefb26aabfb.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5B%5D%2Ctype%5BLOOKBOOK%5D%2Cres%5Bm%5D%2Chmver%5B1%5D&call=url[file:/product/main]">
			</div>
			<div class="content">
				<h1>ABOUT US</h1>
				<h2>OUR STORE</h2>
				<p>Chez COUTUREDUMONDE, nous croyons en la puissance de la mode pour exprimer votre individualité et votre confiance en vous. Depuis notre création en 2023, nous avons travaillé sans relâche pour devenir votre destination mode préférée.
               Notre mission est simple : vous aider à vous sentir inspiré(e) et à vous épanouir à travers nos collections de vêtements soigneusement sélectionnées. Nous cherchons constamment les dernières tendances et les pièces les plus élégantes afin de vous offrir des choix uniques qui correspondent à votre style personnel.
                Au cœur de notre entreprise se trouvent nos valeurs. Nous croyons en la qualité, en la durabilité et en l'éthique. C'est pourquoi nous nous engageons à travailler avec des partenaires qui partagent nos valeurs et à utiliser des matériaux respectueux de l'environnement. Nous sommes fiers de soutenir une mode responsable.
                  Bienvenue chez COUTUREDUMONDE - votre destination mode ultime.</p>
        </div>
    </div>
</div>


	<footer class="site-footer">
		<div class="footer-container">
			<div class="footer-column">
				<h3>Company</h3>
				<ul>
					<li><a href="#acceuil">About Us</a></li>
					<li><a href="#catégorie">Catéorie</a></li>
					<li><a href="#A propos">A prpos</a></li>
					<li><a href="#Nous contacter">Nous contacter</a></li>
				</ul>
			</div>
			<div class="footer-column">
				<h3>Contact</h3>
				<ul>
					<li><a href="mailto:couturedumonde@gmail.com">couturedumonde@gmail.com</a></li>
					<li><a href="tel:+33667863344">+33667863344</a></li>
				</ul>
			</div>
			<div class="footer-column">
				<h3>Follow us</h3>
				 <ul>
					<li><a href="#facebook"><i class="fab fa-facebook-f"></i> Facebook</a></li>
					<li><a href="#twitter"><i class="fab fa-twitter"></i> Twitter</a></li>
					<li><a href="#instagram"><i class="fab fa-instagram"></i> Instagram</a></li>
				</ul>
			</div>
		</div>
		<div class="footer-bottom">
			<p>&copy; 2024 couturedumonde. All rights reserved.</p>
		</div>		
	</footer>



<script src="../useful/jquery/jquery.min.js"></script>
<script src="../useful/popper/popper.min.js"></script>
<script src="../useful/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
					
</body>

</html>