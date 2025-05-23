<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription nouveau membre</title>
    <link rel="stylesheet" href="../Assets/style.php">
</head>
<body>
<header>
    <h1 class="titre">Les adeptes de la Food Vegan🥑</h1>
    <nav>
        <ul>
        <li><a href="../Recettes/recipe-index.php">Accueil</a></li>
            <li><a href="./member-index.php">Membres</a></li>
            <li><a href="./member-create.php">S'inscrire</a></li> 
        </ul>
    </nav>    
</header>
<main>
    <div class="hero"></div> 
    <div class="container">
        <h1 class="center">Je m'inscris</h1>
        <form action="./member-store.php" method="post"> 
            <label>Prénom
                <input type="text" name="prenom">
            </label>
            <label>Nom
                <input type="text" name="nom">
            </label>
            <label>Pseudo
                <input type="text" name="pseudonyme">
            </label>
            <label>Téléphone
                <input type="text" name="telephone">
            </label>
            <label>Courriel
                <input type="email" name="courriel">
            </label>
            <label>Mot de passe
                <input type="password" name="password">
            </label>
            <input type="submit" class="bouton" value="Enregistrer">
        </form>
    </div>
</main>
</body>
</html>