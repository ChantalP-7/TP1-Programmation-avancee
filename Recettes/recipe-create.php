<?php

    require_once('../Classe/CRUD.php');
    $crud = new CRUD;
    $categories  = $crud -> select('categorie', 'categorie')
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une recette</title>
    <link rel="stylesheet" href="../Assets/style.php">
</head>
<body>
<header>
    <h1 class="titre">Les adeptes de la Food Vegan🥑</h1>
    <nav>
        <ul>
        <li><a href="./recipe-index.php">Accueil</a></li>
            <li><a href="../Membre/member-index.php">Membres</a></li>
            <li><a href="../Membre/member-create.php">S'inscrire</a></li> 
        </ul>
    </nav>    
</header>
    <div class="hero"></div> 
    </div>
        <h1 class="center">Ajoute une recette</h1>
        <form class="" action="recipe-store.php" method="post">
            <label for="categorie">Catégorie</label> 
                <select required name="idCategorie">
                    <option value="">Choisis la catégorie</option>
                    <?php foreach($categories as $categorie) { ?>
                    <option value="<?=$categorie['id']?>"><?=$categorie['categorie'];?></option>
                    <?php }?>
                </select> 
            <label for="titre">titre</label>
                <input type="text" id="titre" name="titre" required>            
            <label for="ingredient">Ingrédients</label>
                <textarea class="text-area" name="ingredient" id="ingredient" required></textarea>            
            <label for="instruction">Instructions</label>
                <textarea class="text-area" name="instruction" id="instruction" ></textarea>                         
            <label for="date">date de création</label>
                <input type="date" id="date" name="date" required>                        
            <label for="idMembre">Ton id</label>
                <input type="number" id="idMembre" name="idMembre" required>                             
            <input type="submit" class="bouton" value="Enregistrer">
        </form>
    </div>
</body>
</html>