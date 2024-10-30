<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
       .form-container {
            background-color: rgba(0, 0, 0, 0.2); /* Fond semi-transparent pour le formulaire */
            padding: 20px; /* Espacement intérieur */
            border-radius: 10px; /* Bords arrondis */
            max-width: 400px; /* Largeur maximale */
            margin: auto; /* Centrer le formulaire */
            


       }
        /* Personnalisation du conteneur */
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

        /* Style du corps de la page */
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
            background-repeat: no-repeat; /* Ne pas répéter l'image */
            
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
            margin-top: 2.0rem;
            text-align: center;
        }

        p{
            font-size: 1rem;
            color: purple;
            margin-top: 1.4rem;
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
        input[type="date"] {
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
            padding: 0.75rem;
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
        <h1>Wonder Lost</h1>
        <p> 1er réseau social de partage de voyage</p>
        
        <h2>S'inscrire : </h2>
     
        <form action="traitement.php" method="POST">
        
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>

        <label for="date_de_naissance">Date de naissance :</label>
        <input type="date" id="date_de_naissance" name="date_de_naissance" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="Entrez votre email" required>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="mot_de_passe" placeholder="Entrez votre mot de passe" required>

        <button type="submit" class="submit-btn">S'inscrire</button>
        
        <!-- Lien de redirection vers une autre page -->
        <a href="loginlogout.php" class= "account">J'ai déja un compte -></a>
   
    </form>
            </div>

    </body>
</html>



