<?php
session_start();

// Paramètres de connexion
$host = 'localhost';
$dbname = 'Site_1';
$username = 'root';
$password = 'root';

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Vérifier si le formulaire a été envoyé
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Hachage du mot de passe pour plus de sécurité
    $mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    // Préparer la requête d'insertion
    $sql_utilisateur = "INSERT INTO Utilisateurs (nom, prenom, date_de_naissance, email, mot_de_passe) 
                        VALUES (:nom, :prenom, :date_de_naissance, :email, :mot_de_passe)";
    $stmt = $pdo->prepare($sql_utilisateur);

    // Associer les valeurs et exécuter la requête
    try {
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':date_de_naissance' => $date_de_naissance,
            ':email' => $email,
            ':mot_de_passe' => $mot_de_passe_hache
        ]);

        // Récupérer l'ID de l'utilisateur inséré
        $utilisateur_id = $pdo->lastInsertId();
        echo "Inscription réussie !";

    } catch (PDOException $e) {
        echo "Erreur lors de l'inscription : " . $e->getMessage();
    }
}
?>