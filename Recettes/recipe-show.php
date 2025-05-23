<?php

if(isset($_GET['id']) && $_GET['id']!=null){
    require_once('../Classe/CRUD.php');
    $id = $_GET['id'];
    $crud = new CRUD;
    $selectId = $crud->selectId('recette', $id);
    if($selectId){
        extract($selectId);
        $cat = $crud->selectId('categorie', $idCategorie);
        $categorie = $cat['categorie'];
        $membre = $crud->selectId('membre', $idMembre);
        $prenom = $membre['prenom'];
        $comment = $crud->selectId('commentaire', $idCommentaire);
        $texte = $comment['texte'];
        $note = $comment['note'];
        $pseudonyme = $membre['pseudonyme'];
        $date = $comment['date'];
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
            <li><a href="./recipe-index.php">Accueil</a></li>
            <li><a href="./member-index.php">Membres</a></li>
            <li><a href="./member-create.php">S'inscrire</a></li>  
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
                <p><strong><em>Date de création: </strong><?= $selectId['date']; ?></em></p>
                <p><strong>Nom auteur.e: </strong><?= $prenom; ?></p>
            <h3>Commentaires sur la recette</h3>
            <div>
                <p><strong>Commentaire: </strong><?= $texte; ?></p>
                <p><strong>Étoiles: </strong><?= $note; ?></p>
                <p><strong><em>Date: </strong><?= $date; ?></em></p>
                <p><strong>Commentateur: </strong><?= $pseudonyme; ?></p>
            </div>    
        </div>
        <a href="recipe-edit.php?id=<?= $id;?>" class="bouton">Modifier la recette</a>
        <a href="comment-create.php?id=<?= $id;?>" class="bouton">Commenter la recette</a>
        <form action="recipe-delete.php" method="post">
            <input type="hidden" name="id" value="<?= $id;?>">
            <input type="submit" class="bouton" value="Supprimer la recette"></input>
        </form>
    </main>
</body>
</html>