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

    // Préparer la requête d'insertion
    $sql_utilisateur = "INSERT INTO Utilisateurs (nom, prenom, date_de_naissance, email, mot_de_passe) 
                         VALUES ('$nom', '$prenom','$date_de_naissance', '$email', '$mot_de_passe_hache')";

    // Exécuter la requête et vérifier si elle a réussi
    if ($conn->query($sql_utilisateur) === TRUE) {
         // Récupérer l'ID de l'utilisateur inséré
         $utilisateur_id = $conn->insert_id;
          // Insérer dans la table `Inscription` en utilisant `utilisateur_id`
        $sql_inscription = "INSERT INTO Inscription (utilisateur_id, nom, prenom, date_de_naissance, email, mot_de_passe) 
                            VALUES ('$utilisateur_id', '$nom', '$prenom', '$date_de_naissance', '$email', '$mot_de_passe_hache')";
      if ($conn->query($sql_inscription) === TRUE) {

      }
        echo "Inscription réussie !";
    } else {
        echo "Erreur : " . $sql_inscription . "<br>" . $conn->error;
    }
} else {
    echo  "Erreur : " . $sql_utilisateur . "<br>" . $conn->error;
}

// Fermer la connexion
$conn->close();

?>