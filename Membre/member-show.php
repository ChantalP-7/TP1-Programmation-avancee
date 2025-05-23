<?php

if(isset($_GET['id']) && $_GET['id']!=null){
    require_once('../Classe/CRUD.php');
    $id = $_GET['id'];
    $crud = new CRUD;
    $selectId = $crud->selectId('membre', $id);    
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
            <li><a href="../recipe-index.php">Accueil</a></li>
            <li><a href="./member-index.php">Accueil</a></li>
            <li><a href="../categorie.php">Catégories</a></li>
            <li><a href="./member-create.php">S'inscrire</a></li>  
        </ul>
    </nav>    
</header>
<body>
    <main>
        <div class="hero"></div> 
        <div class="container">
        <h3>Bienvenue <?= $selectId['prenom']; ?> !</h3>   
            <p>Prénom: <?= $selectId['prenom']; ?></p>
            <p>Nom: <?= $selectId['nom']; ?></p>
            <p>Pseudonyme: <?= $selectId['pseudonyme']; ?></p>
            <p>Téléphone: <?= $selectId['telephone']; ?></p>
            <p>Courriel: <?= $selectId['courriel']; ?></p>
            <div class="trois-boutons">
                <a href="member-edit.php?id=<?= $id;?>" class="bouton">Modifier mon profil</a>
                <form class="no-border tiny-form" action="member-delete.php" method="post">
                    <input type="hidden" name="id" value="<?= $id;?>">
                    <button type="submit" class="bouton">Supprimer mon profil</button>
                </form>
                <a class="bouton">Ajoute une recette</a>
            </div>
        </div>
    </main>
</body>
</html>