<?php

require_once('../Classe/CRUD.php');

$crud = new CRUD;

$select  = $crud -> select('commentaire');
$selectRecipe  = $crud -> select('recette');
extract($selectRecipe);
$idRecette = $selectRecipe['id' == $select['idRecette']];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des membres</title>
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
     <h1>Les commentaires</h1>
     <div class="grille">
        <table>
            <tr>
                <th>Recette</th>            
                <th>Commentaire</th>            
                <th>Étoiles</th>            
                <th>Surnom</th> 
                <th>Date</th>
                <th>Voir la recette</th>          
                
            </tr>
            <?php
            foreach($select as $row) {

                    ?>
                    <tr>
                    <td><?= $row['titre'] ?> </td>
                    <td><?= $row['texte'] ?> </td>
                    <td><?= $row['note'] ?> </td>
                    <td><?= $row['pseudo'] ?></td>
                    <td><?= $row['dateCommentaire'] ?></td>
                        <td><a href="../Recettes/recipe-show.php?id="<?= $idRecette?>><?= $row['titre']?></a></td>
                    </tr>
                    <?php
            }
            ?>
            </table>
         
        <br><br>
        <a class="bouton" href="./comment-create.php">Je commente</a>
        </div>
    </main>
</body>
</html>