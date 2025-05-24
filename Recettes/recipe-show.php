<?php

if(isset($_GET['id']) && $_GET['id']!=null){
    require_once('../Classe/CRUD.php');
    $id = $_GET['id'];
    $crud = new CRUD;
    $selectId = $crud->selectId('recette', $id);
    $comments = $crud->select('commentairerecette');
    if($selectId){
        extract($selectId);        
        $cat = $crud->selectId('categorie', $idCategorie);
        $categorie = $cat['categorie'];
        $membre = $crud->selectId('membre', $idMembre);
        $prenom = $membre['prenom']; 
    }else{
        header('location:recipe-index.php');
    }
    
}else{
    header('location:recipe-index.php');
}



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
            <li><a href="./recipe-index.php">Recettes</a></li>
            <li><a href="../Membre/comment-index.php">Commentaires</a></li>
            <li><a href="../Membre/member-index.php">Membres</a></li>
            <li><a href="../Membre/member-create.php">S'inscrire</a></li>  
            </ul>
        </nav>
    </header>
    <main>
    <div class="hero"></div> 
        <h1>Fiche de recette</h1>
        <div class="div-un-article">

            <h3><?= $selectId['titre']; ?> 🧆</h3>                
                <p><strong>Ingrédients: </strong><?= $selectId['ingredient']; ?></p>
                <p><strong>Instructions: </strong><?= $selectId['instruction']; ?></p>
                <p><strong>Catégorie: </strong><?= $categorie; ?></p>
                <p><strong><em>Date de création: </strong><?= $selectId['dateCreation']; ?></em></p>
                <p><strong>Nom auteur.e: </strong><?= $prenom; ?></p>
            <h3>Commentaires sur la recette</h3>
            <div>               
                <?php 
                foreach($comments as $comment){ 
                    if (isset($comment['idRecette']) && $comment['idRecette'] === $id) {                     
                        if (isset($comment['texte'], $comment['note'], $comment['pseudo'], $comment['dateCommentaire'])) {
                                            ?>                        
                        <p><strong>Recette : </strong><?= $selectId['titre']; ?></p>
                        <p><strong>Commentaire : </strong><?= $comment['texte']; ?></p>
                        <p><strong>Étoiles : </strong><?= $comment['note']; ?></p>
                        <p><strong><em>Date : </strong><?= $comment['pseudo']; ?></em></p>
                        <p><strong>Commentateur : </strong><?= $comment['dateCommentaire']; ?></p>
                        <hr>
                        <?php   
                        }
                        else { 
                            ?>  
                        <p><strong>Recette : </strong><?= $selectId['titre']; ?></p>        
                        <p><strong>Commentaire : </strong><?= $comment['texte'] = ""; ?></p>
                        <p><strong>Étoiles : </strong><?= $comment['pseudo'] = ''; ?></p>
                        <p><strong><em>Date : </strong><?= $comment['dateCommentaire'] =''; ?></em></p>
                        <p><strong>Commentateur : </strong><?= $pseudo = ""; ?></p>
                        <?php   
                        } 
                    }
                }
                
                ?>
            </div>
        </div>
        <div class="trois-boutons">
            <a href="recipe-edit.php?id=<?= $id;?>" class="bouton">Modifier la recette</a>
            <a href="../Membre/comment-create.php" class="bouton">Commenter la recette</a>
            <form action="recipe-delete.php" method="post">
                <input type="hidden" name="id" value="<?= $id;?>">
                <input type="submit" class="bouton" value="Supprimer la recette"></input>
            </form>
        </div>
    </main>
</body>
</html>