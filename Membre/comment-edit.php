<?php
if(isset($_GET['id']) && $_GET['id']!=null ){
    $id= $_GET['id'];

    require_once('../Classe/CRUD.php');

    $id = $_GET['id'];
    $crud = new CRUD;
    $select = $crud->selectId('commentaire', $id);
}else{
    header('location:member-index.php');
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour profil membre</title>
    <link rel="stylesheet" href="../Assets/style.php">
</head>
<header>
    <h1 class="titre">Les adeptes de la Food Vegan🥑</h1>
    <nav>
        <ul>
            <li><a href="./recipe-index.php">Accueil</a></li>
            <li><a href="./member-index.php">membres</a></li>
            <li><a href="../categorie.php">Catégories</a></li>
            <li><a href="./member-create.php">S'inscrire</a></li>  
        </ul>
    </nav>    
</header>
<body>
    <div class="hero"></div> 
    <div>
        <h2 class="center">Mise à jour du commentairel</h2>
        <form action="comment-update.php" method="post">
            <label for="titre">titre</label>
                <input type="text" id="titre" name="prenom" value="<?= $select['titre']  ?>">
            <label for="nom">Pseudo</label>            
                <input type="text" id="pseudonyme" name="pseudonyme" value="<?= $select['pseudonyme']  ?>">
            <label for="date">Date</label>
                <input type="text" id="date" name="date" value="<?= $select['date']  ?>">
            <input type="hidden" name="id" value="<?= $select['id']  ?>">
            <input type="submit" class="bouton" value="Enregistrer">
        </form>
    </div>
    
</body>
</html>