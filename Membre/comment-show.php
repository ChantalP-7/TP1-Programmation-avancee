<?php

if(isset($_GET['id']) && $_GET['id']!=null){
    require_once('../Classe/CRUD.php');
    $id = $_GET['id'];
    $crud = new CRUD;
    $selectId = $crud->selectId('comment', $id);    
    $membre = $crud->selectId('membre', $pseudonyme);    
}else{
    header('location:member-index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon profil</title>
    <link rel="stylesheet" href="../Assets/style.php">
</head>
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
<body>
    <main>
        <div class="hero"></div> 
        <div class="container">
        <h3>Bienvenue <?= $membre; ?> !</h3>   
            <p>Voici ton commentaire: <?= $selectId['texte']; ?></p>
            <p>Nom: <?= $selectId['note']; ?></p>
            <p>Pseudonyme: <?= $selectId['date']; ?></p>
            <div class="trois-boutons">
                <a href="./comment-edit.php?= $id;?>" class="bouton">Modifier mon commentaire</a>
                <form class="no-border tiny-form" action="./member-delete.php" method="post">
                    <input type="hidden" name="id" value="<?= $id;?>">
                    <button type="submit" class="bouton">Supprimer mon commentaire</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>