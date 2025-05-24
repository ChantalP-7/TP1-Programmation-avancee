<?php
   require_once('../Classe/CRUD.php');
   $crud = new CRUD;
   $recettes  = $crud -> select('recette');

?>


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
        <li><a href="../Recettes/recipe-index.php">Recettes</a></li>
            <li><a href="./comment-index.php">Commentaires</a></li>
            <li><a href="./member-index.php">Membres</a></li>
            <li><a href="./member-create.php">S'inscrire</a></li> 
        </ul>
    </nav>    
</header>
<main>
    <div class="hero"></div> 
    <div class="container">
        <h1 class="center">Je commente</h1>
        <form action="./comment-store.php" method="post"> 
            <label for="">Recettes</label>
            <select required name="idRecette">
                    <option value="">Choisis la recette</option>
                    <?php foreach($recettes as $recette) { ?>
                    <option value="<?=$recette['id']?>"><?=$recette['titre'];?></option>
                    <?php }?>
                </select>           
            <label>commentaire</label>
            <textarea name="texte"></textarea>
            <label>Pointage</label>
            <textarea name="note" ></textarea>
            <label>Date</label>
                <input type="date" name="dateCommentaire">
            <label>Pseudo
                <input type="text" name="pseudo">
            </label>           
            <label>Ton id
                <input type="number" name="idMembre" value="idMembre">
            </label>           
            <input type="submit" class="bouton" value="Enregistrer">
        </form>
    </div>
</main>
</body>
</html>