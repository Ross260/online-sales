<?php
include 'db.php'; // Assurez-vous que ce fichier contient les informations de connexion à votre base de données.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $prenom = $_POST['firstname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Crypter le mot de passe
    $number = $_POST['phone'];
    $addresse = $_POST['livraison'];


    $sql = "INSERT INTO client (nom,prenom, email, mot_de_passe,numero_de_telephone,addresse_de_livraison) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $prenom, $email, $password, $number, $addresse]);

    echo "User registered successfully!";

    //ici je redirige vers la page de connexion
    if ($stmt) {
        header('Location: ./connexion.php');
    }
}
?>
