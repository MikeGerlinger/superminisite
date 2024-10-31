<?php

// Paramètres de connexion
$host = 'localhost'; // Hôte de la base de données
$dbname = 'Site_1'; // Nom de la base de données
$username = 'root'; // Nom d'utilisateur MySQL
$password = 'root'; // Mot de passe MySQL

// Connexion à la base de données
$conn = new mysqli($host, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
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

    $utilisateur_id = $conn->insert_id; // Récupérer l'ID de l'utilisateur nouvellement créé

    // Préparer la requête d'insertion
    $sql = "INSERT INTO Inscription (nom, prenom, date_de_naissance, email, mot_de_passe) 
            VALUES ('$nom', '$prenom','$date_de_naissance', '$email', '$mot_de_passe_hache')";

    // Exécuter la requête et vérifier si elle a réussi
    if ($conn->query($sql) === TRUE) {
         // Récupérer l'ID de l'utilisateur inséré
         $utilisateur_id = $conn->insert_id;

         // Préparer la requête d'insertion dans la table inscription
         $sql_inscription = "INSERT INTO inscription (utilisateur_id, nom, prenom, date_de_naissance, email, mot_de_passe) 
                             VALUES ('$utilisateur_id', '$nom', '$prenom', '$date_de_naissance', '$email', '$mot_de_passe_hache')";
        
        echo "Inscription réussie !";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Erreur : le formulaire n'a pas été envoyé correctement.";
}

// Fermer la connexion
$conn->close();

?>