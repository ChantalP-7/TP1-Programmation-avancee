<?php
if(isset($_GET['id']) && $_GET['id']!=null ){
    $id= $_GET['id'];

    require_once('../Classe/CRUD.php');

    $id = $_GET['id'];
    $crud = new CRUD;
    $selectId = $crud->selectId('recette', $id);

       
    if($selectId) {
        extract($selectId);
        $categorie = $crud->selectId('categorie', $idCategorie);
        $nomCategorie = $categorie['categorie'];
        $auteur = $crud->selectId('membre', $idMembre);
        $nomAuteur = $auteur['prenom'];
        
    } else {
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
    <title>Mise à jour recette</title>
    <link rel="stylesheet" href="../Assets/style.php">
</head>
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
<body>
    <div class="hero"></div> 
    <div class="container">
        <h2 class="center">Mise à jour recette</h2>
        <form action="recipe-update.php" method="post">
            <label for="titre">Titre</label>
                <input type="text" id="titre" name="titre" value="<?= $selectId['titre']  ?>">
            <label for="ingredient">Ingrédients</label>
                <textarea class="text-area"  id="ingredient" name="ingredient" rows="5" ><?= $selectId['ingredient']  ?></textarea>
            <label for="instruction">Instructions</label>
                <textarea class="text-area" id="instruction" name="instruction" rows="5"><?= $selectId['instruction']  ?></textarea>
            <label for="categorie">Catégorie</label>
                <input class="verte" type="text" name="categorie" value="<?=$nomCategorie ?>">
            <label for="prenom">Nom auteur.e</label>
                <input type="text" name="prenom" value="<?=$nomAuteur ?>">
            <label for="dateCreation">Date de rédaction</label>
                <input type="text" id="dateCreation" name="dateCreation" value="<?= $selectId['dateCreation']  ?>"> 
                <input type="hidden" name="id" value="<?= $selectId['id']  ?>">           
                <input type="hidden" name="idMembre" value="<?= $selectId['idMembre']  ?>">           
                <input type="hidden" name="idCategorie" value="<?= $selectId['idCategorie']  ?>">
                <input type="submit" class="bouton" value="Enregistrer">
        </form>
    </div>    
</body>
</html>