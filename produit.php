<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./useful/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./styleproduit.css"> -->
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">


    <style>

        
        /* style appliquer sur l'icone de la navbar */
        /* le conteiner de l'icone utilisateur */
        #icoUser{
        color: lightgreen; 
        font-size: 25px;
        margin-right: 100px;

        }
        .fa-user{
        color: white;
        position: fixed;
        margin-right: 90px;
        }
        .fa-user:hover{
        color: lightgreen;
        }

        .dropdown-item:hover{
        background-color: #91eedd;
        }
        /* ------------------------------------- */

        #ico-nav:hover{
        color:lightgreen;
        font-size: 30px;
        }


        .nav-item{
        margin:0  20px;
        color: azure;
        }

        .container {
        position: relative; /* Permet de positionner les éléments absolus par rapport au container */
        }

        .bouton-externe {
        position: fixed;
        top: 100px;
        right: 0;
        font-size: 40px;
        margin-right: 20px;
        border-radius: 20px;
        }


        /* ######### le bouton du panier ############################## */
        .bouton-externe {
        transition: all 0.3s ease-in-out;
        font-family: "Dosis", sans-serif;
        }

        .bouton-externe {
        width: 100px;
        height: 60px;
        border-radius: 50px;
        background-image: linear-gradient(135deg, #42f778 0%, #54bcec 100%);
        box-shadow: 0 20px 30px -6px rgba(114, 235, 179, 0.5);
        outline: none;
        cursor: pointer;
        border: none;
        font-size: 24px;
        color: white;
        }

        .bouton-externe:hover {
        transform: translateY(3px);
        box-shadow: none;
        }

        .bouton-externe:active {
        opacity: 0.5;
        }
        /* ####################################### */

        /* ######### les etoiles des cartes############################################### */
        .rating:not(:checked) > input {
        position: absolute;
        appearance: none;
        }

        .rating:not(:checked) > label {
        float: right;
        cursor: pointer;
        font-size: 30px;
        color: #666;
        }

        .rating:not(:checked) > label:before {
        content: '★';
        }

        .rating > input:checked + label:hover,
        .rating > input:checked + label:hover ~ label,
        .rating > input:checked ~ label:hover,
        .rating > input:checked ~ label:hover ~ label,
        .rating > label:hover ~ input:checked ~ label {
        color: #e58e09;
        }

        .rating:not(:checked) > label:hover,
        .rating:not(:checked) > label:hover ~ label {
        color: #ff9e0b;
        }

        .rating > input:checked ~ label {
        color: #ffa723;
        }




        /* ######################################################## */



        /* ################# PAGE PRODUIT BARRE LATTERALE ########################################### */

        .sidebar {
            height: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #343a40;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            width: 150px;
        }
        
        .sidebar a {
            padding: 8px 8px 8px 20px;
            text-decoration: none;
            font-size: 25px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        .sidebar p {
            margin: 10px 0;
            text-decoration: none;
            font-size: 35px;
            color: #dedfd9;
            display: block;
            transition: 0.3s;
        }
        
        .sidebar a:hover {
            color: #2ec94a;
        }
        
        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 15x;
        }
        
        .openbtn {
            font-size:10px;
            cursor: pointer;
            background-color: #111;
            color: white;
            margin-left: -10px;
            padding: 10px 15px;
            border: none;
        }
        
        .openbtn:hover {
            background-color: #444;
        }
        
        #main {
            transition: margin-left .5s;
            padding: 16px;
            margin-top: 100px;
        }
        
        /* change de style sur un écran plus petit de 450px à partir de ce media screen */
        @media screen and (max-height: 450px) {
            .sidebar {padding-top: 15px;}
            .sidebar a {font-size: 18px;}
        }

        .text-title {
            font-weight: 900;
            font-size: 1.2em;
            line-height: 1.5;
        }
        /*--------------------------------------------------------------------------------------*/

        h2{
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: 50px;
            margin-bottom: 40px;
        }

        h3{
            margin-top: 40px;
        }

        #gogo:hover {
            font-size: 30px;
            color: #43a459;
        }

        /* ------------------------------------------------------------------------------------- */

        /* le dropdown de la barre lattéralle  */


        .card-img-top{
        height: 250px;
        }


    </style>



    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "200px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }

        // LE DROPDOWN DE LA BARRE LATTERALE
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }

    </script>

</head>

<body>

    <!-- La navbar -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        
            <div class="nav1">
              <!-- le logo -->
                <a class="navbar-brand" href="#" style="margin-left: 80px;">
                <img src="image/other/logos.png" style="height: 60px; width: 60px; border-radius: 20px;" alt="" srcset="">
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
                      <a class="nav-link" href="./A_propos/ABOUT_US.php" onmouseover="this.style.color = 'lightgreen'" style="color: white;"
                        onmouseout="this.style.color = 'white'">
                        <i class="fa fa-address-book"></i>
                        A propos
                      </a>
                    </li>
              
                    <li class="nav-item">
                      <a class="nav-link" href="./contacter_nous/index.php" onmouseover="this.style.color = 'lightgreen'" style="color: white;"
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
                      <a class="dropdown-item" href="./le_login/connexion.php">Inscription</a>
                      <a class="dropdown-item" href="./le_login/connexion.php">Connexion</a>
                      <hr>
                      <a class="dropdown-item" href="deco.php">Déconnexion</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="nav4" style="position:relative;">
                
              </div>
          </nav>
    </header>



    <!--  -->

    <div id="mySidebar" class="sidebar" style="margin-top: 40px;">
        <!-- ce margin me permet de pouvoir voir le bouton close()-->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <p>Homme</p>
        <a href="#homme-haut">Tshirt</a>
        <a href="#homme-bas">Pantalon</a> 
        <p>Femme</p>
        <a href="#femme-haut">Tshirt</a>
        <a href="#femme-bas">Pantalon</a>

    </div>

    <!--  -->


    <div id="main">
        <button class="openbtn btn-success" onclick="openNav()" style="position: fixed;">☰ Rubrique</button>

    
        <div class="container">
            <div class="containerFluid">
                <div class="row">
                    <div class="col-md-10">
                        <h2 id="homme-haut" style="color: #43a459;margin-top: 60px;">Articles</h2>
                    </div>
                    <div class="col-md-2">
                        
                    </div>
                </div>
            </div>
        </div>
    
        
        <!-- -------------------------------------------------------------------------- -->

        <?php 

        // if isset du bouton ajouté au panier, se connecté à la DB et enregistrer les id

        // require_once './function.php';   // entrer dans le fichier function.php
        // if ( user_connected() ) {     // vérifier si l'utilisateur est connecté
        //     $host = 'localhost';
        //     $db_name = 'projet';
        //     $username = 'root';
        //     $password = '';

        //     $bdd = null;

        //     try {
        //         $bdd = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
        //         $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //         echo "connexion reussie ! <br> \n";
        //     } catch (PDOException $e) {
        //         die("Erreur de connexion à la base de données: " . $e->getMessage());
        //     }

        // }

        ?>

        <form action="./achat.php" method="POST" style="margin-top:60px;">
            <?php 
            
        
            if (isset($_GET['produit1'])) {

                $valeur = $_GET['produit1'];

                #connexion à la base de donnée
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


                #ajout de l'id dans la table id_user
                $resultat = $bdd->exec("INSERT INTO id_user VALUES(NULL, '$valeur')");
                if ($resultat) {
                ?>
                    <div class="container">
                        <div class="alert alert-success">Produit ajouté au panier avec succès</div>
                        <input type="hidden" name="prod1" value="<?= $valeur ?>">

                    </div>
                <?php
                } else {
                    ?>
                    <div class="container">
                        <div class="alert alert-danger">Nous avons rencontré un problème lord de l'envoie des données</div>
                    </div>
                <?php
                }
            } 

            if (isset($_GET['produit2'])) {

                $valeur = $_GET['produit2'];

                #connexion à la base de donnée
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


                #ajout de l'id dans la table id_user
                $resultat = $bdd->exec("INSERT INTO id_user VALUES(NULL, '$valeur')");
                if ($resultat) {
                ?>
                    <div class="container">
                        <div class="alert alert-success">Produit ajouté au panier avec succès</div>
                        <input type="hidden" name="prod2" value="<?= $valeur ?>">
                    </div>
                <?php
                } else {
                    ?>
                    <div class="container">
                        <div class="alert alert-danger">Nous avons rencontré un problème lord de l'envoie des données</div>
                    </div>
                <?php
                }
            } 

            #---------------------------------------------------------------------------------------------------
            if (isset($_GET['produit3'])) {

                $valeur = $_GET['produit3'];

                #connexion à la base de donnée
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


                #ajout de l'id dans la table id_user
                $resultat = $bdd->exec("INSERT INTO id_user VALUES(NULL, '$valeur')");
                if ($resultat) {
                ?>
                    <div class="container">
                        <div class="alert alert-success">Produit ajouté au panier avec succès</div>
                        <input type="hidden" name="prod3" value="<?= $valeur ?>">
                    </div>
                <?php
                } else {
                    ?>
                    <div class="container">
                        <div class="alert alert-danger">Nous avons rencontré un problème lord de l'envoie des données</div>
                    </div>
                <?php
                }
            }

            if (isset($_GET['produit4'])) {

                $valeur = $_GET['produit4'];

                #connexion à la base de donnée
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


                #ajout de l'id dans la table id_user
                $resultat = $bdd->exec("INSERT INTO id_user VALUES(NULL, '$valeur')");
                if ($resultat) {
                ?>
                    <div class="container">
                        <div class="alert alert-success">Produit ajouté au panier avec succès</div>
                        <input type="hidden" name="prod4" value="<?= $valeur ?>">
                    </div>
                <?php
                } else {
                    ?>
                    <div class="container">
                        <div class="alert alert-danger">Nous avons rencontré un problème lord de l'envoie des données</div>
                    </div>
                <?php
                }
            }

            if (isset($_GET['produit5'])) {

                $valeur = $_GET['produit5'];

                #connexion à la base de donnée
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


                #ajout de l'id dans la table id_user
                $resultat = $bdd->exec("INSERT INTO id_user VALUES(NULL, '$valeur')");
                if ($resultat) {
                ?>
                    <div class="container">
                        <div class="alert alert-success">Produit ajouté au panier avec succès</div>
                        <input type="hidden" name="prod5" value="<?= $valeur ?>">
                    </div>
                <?php
                } else {
                    ?>
                    <div class="container">
                        <div class="alert alert-danger">Nous avons rencontré un problème lord de l'envoie des données</div>
                    </div>
                <?php
                }
            }

            if (isset($_GET['produit6'])) {

                $valeur = $_GET['produit6'];

                #connexion à la base de donnée
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


                #ajout de l'id dans la table id_user
                $resultat = $bdd->exec("INSERT INTO id_user VALUES(NULL, '$valeur')");
                if ($resultat) {
                ?>
                    <div class="container">
                        <div class="alert alert-success">Produit ajouté au panier avec succès</div>
                        <input type="hidden" name="prod6" value="<?= $valeur ?>">
                    </div>
                <?php
                } else {
                    ?>
                    <div class="container">
                        <div class="alert alert-danger">Nous avons rencontré un problème lord de l'envoie des données</div>
                    </div>
                <?php
                }
            }

            if (isset($_GET['produit7'])) {

                $valeur = $_GET['produit7'];

                #connexion à la base de donnée
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


                #ajout de l'id dans la table id_user
                $resultat = $bdd->exec("INSERT INTO id_user VALUES(NULL, '$valeur')");
                if ($resultat) {
                ?>
                    <div class="container">
                        <div class="alert alert-success">Produit ajouté au panier avec succès</div>
                        <input type="hidden" name="prod7" value="<?= $valeur ?>">
                    </div>
                <?php
                } else {
                    ?>
                    <div class="container">
                        <div class="alert alert-danger">Nous avons rencontré un problème lord de l'envoie des données</div>
                    </div>
                <?php
                }
            }

            if (isset($_GET['produit8'])) {

                $valeur = $_GET['produit8'];

                #connexion à la base de donnée
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


                #ajout de l'id dans la table id_user
                $resultat = $bdd->exec("INSERT INTO id_user VALUES(NULL, '$valeur')");
                if ($resultat) {
                ?>
                    <div class="container">
                        <div class="alert alert-success">Produit ajouté au panier avec succès</div>
                        <input type="hidden" name="prod8" value="<?= $valeur ?>">
                    </div>
                <?php
                } else {
                    ?>
                    <div class="container">
                        <div class="alert alert-danger">Nous avons rencontré un problème lord de l'envoie des données</div>
                    </div>
                <?php
                }
            }

            if (isset($_GET['produit9'])) {

                $valeur = $_GET['produit9'];

                #connexion à la base de donnée
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


                #ajout de l'id dans la table id_user
                $resultat = $bdd->exec("INSERT INTO id_user VALUES(NULL, '$valeur')");
                if ($resultat) {
                ?>
                    <div class="container">
                        <div class="alert alert-success">Produit ajouté au panier avec succès</div>
                        <input type="hidden" name="prod9" value="<?= $valeur ?>">
                    </div>
                <?php
                } else {
                    ?>
                    <div class="container">
                        <div class="alert alert-danger">Nous avons rencontré un problème lord de l'envoie des données</div>
                    </div>
                <?php
                }
            }

            if (isset($_GET['produit10'])) {

                $valeur = $_GET['produit10'];

                #connexion à la base de donnée
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


                #ajout de l'id dans la table id_user
                $resultat = $bdd->exec("INSERT INTO id_user VALUES(NULL, '$valeur')");
                if ($resultat) {
                ?>
                    <div class="container">
                        <div class="alert alert-success">Produit ajouté au panier avec succès</div>
                        <input type="hidden" name="prod10" value="<?= $valeur ?>">
                    </div>
                <?php
                } else {
                    ?>
                    <div class="container">
                        <div class="alert alert-danger">Nous avons rencontré un problème lord de l'envoie des données</div>
                    </div>
                <?php
                }
            }

            ?>
            <button class="bouton-externe" name="send" type="submit" value="<?php  ?>">
                <i class="fa fa-shopping-cart" id="gaga"></i>
            </button>
        </form>
        <!-- -------------------------------------------------------------------------- -->




        <div class="container">
            <div class="container-fluid">

                <h3>Tshirt Homme</h3>

                <br>

                <div class="row">
                    <!-- premiers articles  -->
                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/gosse.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">Tshirt noir homme</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">11.49€</span>

                                <form action="./produit.php" method="GET">
                                    <button type="submit" name="produit1" value="1" style="font-size: 25px; color:orange; float: right; border: none;">
                                        <i class="fas fa-shopping-cart" id="gogo"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Amerique/t_shirt/tshirt15.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">Tshirt blanc col rond </h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">12.49€</span>

                                <form action="./produit.php" method="GET">
                                    <button type="submit" name="produit2" value="2" style="font-size: 25px; color:orange; float: right; border: none;">
                                        <i class="fas fa-shopping-cart" id="gogo"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/un.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">Tshirt de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">13.49€</span>

                                <form action="./produit.php" method="GET">
                                    <button type="submit" name="produit3" value="3" style="font-size: 25px; color:orange; float: right; border: none;">
                                        <i class="fas fa-shopping-cart" id="gogo"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Europe/t_shirt/t_shirt18.jpeg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">Tshirt noir Alaska </h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">10.49€</span>

                                <form action="./produit.php" method="GET">
                                    <button type="submit" name="produit4" value="4" style="font-size: 25px; color:orange; float: right; border: none;">
                                        <i class="fas fa-shopping-cart" id="gogo"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                        <br>
                    </div>


                    <!-- deuxièmes articles  -->
                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Afrique./image3.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">Chemisette Africaine brodée</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">20€</span>

                                <form action="./produit.php" method="GET">
                                    <button type="submit" name="produit5" value="5" style="font-size: 25px; color:orange; float: right; border: none;">
                                        <i class="fas fa-shopping-cart" id="gogo"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/violet.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">Tshirt de sortie violet</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">11.50€</span>

                                <form action="./produit.php" method="GET">
                                    <button type="submit" name="produit6" value="6" style="font-size: 25px; color:orange; float: right; border: none;">
                                        <i class="fas fa-shopping-cart" id="gogo"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Asie/t_shirt/tshirt10.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">Tshirt Asiatique </h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">13€</span>

                                <form action="./produit.php" method="GET">
                                    <button type="submit" name="produit7" value="7" style="font-size: 25px; color:orange; float: right; border: none;">
                                        <i class="fas fa-shopping-cart" id="gogo"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Afrique./image4.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">Chemisette Africaine</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">17.99€</span>

                                <form action="./produit.php" method="GET">
                                    <button type="submit" name="produit8" value="8" style="font-size: 25px; color:orange; float: right; border: none;">
                                        <i class="fas fa-shopping-cart" id="gogo"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                        <br id="homme-bas"><br>
                    </div>

                </div>






                <!-- ############################################################################################################# -->

                <h3>Pantalon Homme</h3>
                <br>


                <div class="row">
                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Amerique/pantalons/pantalon13.jpeg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$19.49</span>

                                <form action="./produit.php" method="GET">
                                    <button type="submit" name="produit9" value="9" style="font-size: 25px; color:orange; float: right; border: none;">
                                        <i class="fas fa-shopping-cart" id="gogo"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Asie/pantalon/homme/pantalon2.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$45</span>

                                <form action="./produit.php" method="GET">
                                    <button type="submit" name="produit10" value="10" style="font-size: 25px; color:orange; float: right; border: none;">
                                        <i class="fas fa-shopping-cart" id="gogo"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Amerique/pantalons/pantalon15.jpeg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$15</span>

                                <form action="./produit.php" method="GET">
                                    <button type="submit" name="produit11" value="11" style="font-size: 25px; color:orange; float: right; border: none;">
                                        <i class="fas fa-shopping-cart" id="gogo"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Asie/pantalon/homme/pantalon4.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$15</span>

                                <form action="./produit.php" method="GET">
                                    <button type="submit" name="produit12" value="12" style="font-size: 25px; color:orange; float: right; border: none;">
                                        <i class="fas fa-shopping-cart" id="gogo"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                        <br>

                    </div>
                </div>
                <!-- ############################################################################################################# -->
                <!-- Deuxième block -->

                <div class="row">
                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Europe/pantalon/pantalon1.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$21</span>

                                <form action="./produit.php" method="GET">
                                    <button type="submit" name="produit13" value="13" style="font-size: 25px; color:orange; float: right; border: none;">
                                        <i class="fas fa-shopping-cart" id="gogo"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Europe/pantalon/pantalon2.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$11</span>

                                <form action="./produit.php" method="GET">
                                    <button type="submit" name="produit14" value="14" style="font-size: 25px; color:orange; float: right; border: none;">
                                        <i class="fas fa-shopping-cart" id="gogo"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Asie/pantalon/homme/pantalon10.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$19</span>

                                <form action="./produit.php" method="GET">
                                    <button type="submit" name="produit15" value="15" style="font-size: 25px; color:orange; float: right; border: none;">
                                        <i class="fas fa-shopping-cart" id="gogo"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Asie/pantalon/homme/pantalon9.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$499.49</span>

                                <form action="./produit.php" method="GET">
                                    <button type="submit" name="produit16" value="16" style="font-size: 25px; color:orange; float: right; border: none;">
                                        <i class="fas fa-shopping-cart" id="gogo"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                        <br id="femme-haut"><br> 

                    </div>
                </div>











                <!-- ############################################################################################################# -->
                <h3>Tshirt Femme</h3>
                <br>


                <div class="row">
                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Europe/t_shirt/t_shirt15.jpeg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$499.49</span>

                                <button onclick="alert('Produit ajouter au panier')"
                                    style="font-size: 25px; color:orange; float: right; border: none;">
                                    <i class="fas fa-shopping-cart" id="gogo"></i>
                                </button>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Asie/t_shirt/tshirt11.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$499.49</span>

                                <button onclick="alert('Produit ajouter au panier')"
                                    style="font-size: 25px; color:orange; float: right; border: none;">
                                    <i class="fas fa-shopping-cart" id="gogo"></i>
                                </button>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Afrique./image2.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$499.49</span>

                                <button onclick="alert('Produit ajouter au panier')"
                                    style="font-size: 25px; color:orange; float: right; border: none;">
                                    <i class="fas fa-shopping-cart" id="gogo"></i>
                                </button>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Amerique/t_shirt/tshirt15.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$499.49</span>

                                <button onclick="alert('Produit ajouter au panier')"
                                    style="font-size: 25px; color:orange; float: right; border: none;">
                                    <i class="fas fa-shopping-cart" id="gogo"></i>
                                </button>

                            </div>
                        </div>
                        <br>

                    </div>
                </div>
                <!-- ############################################################################################################# -->
                <!-- Deuxième block -->

                <div class="row">
                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Asie/t_shirt/tshirt12.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$499.49</span>

                                <button onclick="alert('Produit ajouter au panier')"
                                    style="font-size: 25px; color:orange; float: right; border: none;">
                                    <i class="fas fa-shopping-cart" id="gogo"></i>
                                </button>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Afrique./image3.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$499.49</span>

                                <button onclick="alert('Produit ajouter au panier')"
                                    style="font-size: 25px; color:orange; float: right; border: none;">
                                    <i class="fas fa-shopping-cart" id="gogo"></i>
                                </button>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Asie/t_shirt/tshirt13.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$499.49</span>

                                <button onclick="alert('Produit ajouter au panier')"
                                    style="font-size: 25px; color:orange; float: right; border: none;">
                                    <i class="fas fa-shopping-cart" id="gogo"></i>
                                </button>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Asie/t_shirt/tshirt14.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$499.49</span>

                                <button onclick="alert('Produit ajouter au panier')"
                                    style="font-size: 25px; color:orange; float: right; border: none;">
                                    <i class="fas fa-shopping-cart" id="gogo"></i>
                                </button>

                            </div>
                        </div>
                        <br id="femme-bas"><br>

                    </div>
                </div>



                <!-- ############################################################################################################# -->

                <h3>Pantalon Femme</h3>
                <br>


                <div class="row">
                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Amerique/pantalons/pantalon17.jpeg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$499.49</span>

                                <button onclick="alert('Produit ajouter au panier')"
                                    style="font-size: 25px; color:orange; float: right; border: none;">
                                    <i class="fas fa-shopping-cart" id="gogo"></i>
                                </button>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Asie/pantalon/femme/pantalon2.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$499.49</span>

                                <button onclick="alert('Produit ajouter au panier')"
                                    style="font-size: 25px; color:orange; float: right; border: none;">
                                    <i class="fas fa-shopping-cart" id="gogo"></i>
                                </button>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Asie/pantalon/femme/pantalon3.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$499.49</span>

                                <button onclick="alert('Produit ajouter au panier')"
                                    style="font-size: 25px; color:orange; float: right; border: none;">
                                    <i class="fas fa-shopping-cart" id="gogo"></i>
                                </button>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Asie/pantalon/femme/pantalon4.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$499.49</span>

                                <button onclick="alert('Produit ajouter au panier')"
                                    style="font-size: 25px; color:orange; float: right; border: none;">
                                    <i class="fas fa-shopping-cart" id="gogo"></i>
                                </button>

                            </div>
                        </div>
                        <br>

                    </div>
                </div>
                <!-- ############################################################################################################# -->
                <!-- Deuxième block -->

                <div class="row">
                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Asie/pantalon/femme/pantalon5.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$499.49</span>

                                <button onclick="alert('Produit ajouter au panier')"
                                    style="font-size: 25px; color:orange; float: right; border: none;">
                                    <i class="fas fa-shopping-cart" id="gogo"></i>
                                </button>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Asie/pantalon/femme/pantalon8.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$499.49</span>

                                <button onclick="alert('Produit ajouter au panier')"
                                    style="font-size: 25px; color:orange; float: right; border: none;">
                                    <i class="fas fa-shopping-cart" id="gogo"></i>
                                </button>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Asie/pantalon/femme/pantalon9.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$499.49</span>

                                <button onclick="alert('Produit ajouter au panier')"
                                    style="font-size: 25px; color:orange; float: right; border: none;">
                                    <i class="fas fa-shopping-cart" id="gogo"></i>
                                </button>

                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-3 mr-auto">
                        <div class="card">
                            <img class="card-img-top" src="./image/Asie/pantalon/femme/pantalon10.png" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">pantalon de sortie</h4>
                                <p class="card-text">Some example text some example text. </p>
                                <span class="text-title ">$499.49</span>

                                <button onclick="alert('Produit ajouter au panier')"
                                    style="font-size: 25px; color:orange; float: right; border: none;">
                                    <i class="fas fa-shopping-cart" id="gogo"></i>
                                </button>

                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
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

    <!-- inclusion des librairie JS de bootstrap  -->
    <script src="useful/jquery/jquery.min.js"></script>
    <script src="useful/popper/popper.min.js"></script>
    <script src="useful/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>

</body>

</html>