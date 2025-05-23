<?php
    if(isset($_GET['id']) && $_GET['id']!=null){
        require_once('../Classe/CRUD.php');
        $id = $_GET['id'];
        $crud = new CRUD;
        $selectId = $crud->selectId('recette', $id);
        if($selectId){
            extract($selectId);
            $membre = $crud->selectId('membre', $idMembre);
            $pseudo = $membre['pseudonyme'];
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
    <title>Inscription nouveau membre</title>
    <link rel="stylesheet" href="../Assets/style.php">
</head>
<body>
<header>
    <h1 class="titre">Les adeptes de la Food Vegan🥑</h1>
    <nav>
        <ul>
            <li><a href="../recipe-index.php">Accueil</a></li>
            <li><a href="./member.php">Membres</a></li>
            <li><a href="../categorie.php">Catégories</a></li>
            <li><a href="./member-create.php">S'inscrire</a></li>  
        </ul>
    </nav>    
</header>
<main>
    <div class="hero"></div> 
    <div class="container">
        <h1 class="center">Je commente</h1>
        <form action="comment-store.php" method="post"> 
            <label for="">
                <span><?= $selectId['titre'] ?></span>
            </label>
            <label>commentaire
            <textarea></textarea>
                <input type="text" name="prenom">
            </label>
            <label>Date
                <input type="date" name="nom">
            </label>
            <label>Pseudo
                <input type="text" name="pseudonyme" value="<?= $pseudo ?>">
            </label>
           
            <input type="submit" class="bouton" value="Enregistrer">
        </form>
    </div>
</main>
</body>
</html>