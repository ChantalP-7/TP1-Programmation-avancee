<?php

require_once('../Classe/CRUD.php');

$crud = new CRUD;

$recipes  = $crud -> select('recette');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recette</title>
    <link rel="stylesheet" href="../Assets/style.php">
</head>
<body>
<header>
    <h1 class="titre">Les adeptes de la Food Vegan🥑</h1>
    <nav>
        <ul>
            <li><a href="./recipe-index.php">Accueil</a></li>
            <li><a href="././member-index.php">Membres</a></li>
            <li><a href="././member-create.php">S'inscrire</a></li> 
        </ul>
    </nav>    
</header>
<main>
    <div class="hero"></div>           
    <h1>Nos recettes</h1>
        <a class="bouton" href="./recipe-create.php">Ajouter une recette</a>
    </div>
    <div class="grille">
    <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Ingrédients</th>
                    <th>Date de création</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($recipes as $recipe){
                ?>
                <tr>            
                    <td class="tiers"><?= $recipe['titre'];?></td>
                    <td class="main"><?= mb_strimwidth($recipe['ingredient'], 0, 200, "...");?> <a href="./recipe-show.php?id=<?= $recipe['id']?>">Voir la recette</a></td>                
                    <td class="tiers"><?= $recipe['date'];?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <br><br>
        </div>
    </main>
</body>
</html>