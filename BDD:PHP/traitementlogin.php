<?php

// Paramètres de connexion
$host = 'localhost';
$dbname = 'Site_1';
$username = 'root';
$password = 'root';

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Vérifier si le formulaire a été envoyé
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['mot_de_passe'];

    $stmt = $pdo->prepare('SELECT * FROM Utilisateurs WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Pour déboguer, on vérifie si le mot de passe correspond
        if (password_verify($password, $user["mot_de_passe"])) {
            echo "Authentification réussie. Redirection vers accueil.php...";
            header("Location: accueil.php");
            exit();
        } else {
            echo "Mot de passe incorrect.";
            header("Location: login.php");
            exit();
        }
    } else {
        echo "Email non trouvé.";
        header("Location: login.php");
        exit();
    }
} else {
    echo "Méthode de requête incorrecte.";
    header("Location: login.php");
    exit();
}
?>