<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="../gestion/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../gestion/nodes/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="connexion.css">
</head>

    


<body>

<?php

include "../gestion/folder/header.php"; 
include "../gestion/folder/stylegestion.php";

?>


    <div class="cont" style="height: 700px; margin-top: 90px;">
        <div class="form sign-in">
            <h2>Bienvenue</h2>

            <form action="login.php" method="POST">
                <label>
                    <span>Email</span>
                    <input type="email" name="email" required />
                </label>
                <label>
                    <span>Mot de passe</span>
                    <input type="password" name="password" required />
                </label>
                <p class="forgot-pass">Mot de passe oublier ?</p>
                <button type="submit" class="submit">Connexion</button>
            </form>
        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                    <h3>Vous n'avez pas de compte ? Veuillez vous inscrire !</h3>
                </div>
                <div class="img__text m--in">
                    <h3>Si vous avez déjà un compte, il vous suffit de vous connecter.</h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Inscription</span>
                    <span class="m--in">Connexion</span>
                </div>
            </div>

            <!-- CREATION DE COMPTE -->
            <div class="form sign-up">
                <h2>Création de compte</h2>
                <form action="register.php" method="POST">
                    <label>
                        <span>Nom</span>
                        <input type="text" name="name" required />
                    </label>
                    <label>
                        <span>Prenom</span>
                        <input type="text" name="firstname" required />
                    </label>
                    <label>
                        <span>Email</span>
                        <input type="email" name="email" required />
                    </label>
                    <label>
                        <span>Mot de passe</span>
                        <input type="password" name="password" required />
                    </label>
                    <label>
                        <span>Numero</span>
                        <input type="number" name="phone" required />
                    </label>
                    <label>
                        <span>Addresse de livraison</span>
                        <input type="text" name="livraison" required />
                    </label>
                    <button type="submit" class="submit">Inscription</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>

    <script src="../useful/jquery/jquery.min.js"></script>
    <script src="../useful/popper/popper.min.js"></script>
    <script src="../useful/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
</body>
</html>
