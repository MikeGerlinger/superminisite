<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion à mon espace</title>
    <style>
    .form-container {
            background-color: rgba(0, 0, 0, 0.2); /* Fond semi-transparent pour le formulaire */
            padding: 20px; /* Espacement intérieur */
            border-radius: 10px; /* Bords arrondis */
            max-width: 400px; /* Largeur maximale */
            margin: auto; /* Centrer le formulaire */
    }
    
    
    body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            
            /* Définir l'image d'arrière-plan */ 
            background-image: url("https://visitturkey.in/wp-content/uploads/2024/07/oludeniz-fethiye.webp"); 
            background-size: cover; /* Pour couvrir toute la fenêtre */
            background-position: center; /* Centrer l'image */
            background-repeat: no-repeat; /* Ne pas répéter l'image *
    }
            .container {
            min-height: 100vh; /* Prend toute la hauteur de la fenêtre */
        }
        /* Style global */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        /* Titre */
        h1 {
            font-size: 1.8rem;
            color: #336;
            margin-bottom: 1.5rem;
            text-align: center;
        }
         /* titre 2 */
        h2 {
            font-size: 1.3rem;
            color: #336;
            margin-bottom: 2.0rem;
            text-align: center;
        }

        p{
            font-size: 1rem;
            color: purple;
            margin-bottom: 2.0rem;
            text-align: center;


        }
        /* Style des labels */
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
        }

        /* Style des champs de saisie */
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"]{
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 1rem;
        }

        /* Style du bouton */
        .submit-btn {
            width: 100%;
            padding: 0.80rem;
            background-color: purple;
            color: #fff;
            font-size: 1rem;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }
        .account{ 
            color: red; 
            display: flex;
            justify-content: center;
            padding: 10px;
            

        }
        
</style>
</head>
<body>
<div class="form-container">
<h1> Wonder Lost<h1>
<p> 1er réseau social de partage de voyage</p>

<h2>Me connecter à mon espace : </h2>


<label for="email" >Email : </label>
<input type="text" id="email" name="email" placeholder="Entrez votre Email"required>

<label for="password">Mot de passe :</label>
<input type="password" id="password" name="mot_de_passe" placeholder="Entrez votre mot de passe" required>

<button type="submit" class="submit-btn">Me connecter</button>
  <!-- Lien de redirection vers une autre page -->
<a href="inscription.php" class= "account">Pas de compte? je m'inscrit </a>


    
</body>
</html>