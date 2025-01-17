<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion / Inscription</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-signup-container">
        <h1>Rejoignez-nous ou connectez-vous.</h1>
        <form id="initialForm">
            <input type="email" id="email" placeholder="Adresse e-mail" required>
            <input type="submit" style="background-color: #2ec94a;" value="Continuer">
        </form>
        <div id="dynamicForm"></div>
    </div>
    <script src="login.js"></script>
</body>
</html>
