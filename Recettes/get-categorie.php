<?php
    if(isset($_GET['id']) && $_GET['id']!=null){
        require_once('../Classe/CRUD.php');
        $id = $_GET['id'];
        $crud = new CRUD;
        $selectId = $crud->selectId('categorie', $id);
        if($selectId){
            extract($selectId);
            $categorie = $crud->selectId('recette', $idCategorie);
            $categorieNom = $categorie['categorie'];
            $membre = $crud->selectId('membre', $idMembre);
            $membreNom = $membre['pseudonyme'];
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
    <title>Ajouter une recette</title>
    <link rel="stylesheet" href="../Assets/style.php">
</head>
<body>
<header>
    <h1 class="titre">Les adeptes de la Food Vegan🥑</h1>
    <nav>
        <ul>
            <li><a href="./recipe-index.php">Accueil</a></li>
            <li><a href="./categorie.php">Catégories</a></li>
            <li><a href="../member-create.php">S'inscrire</a></li> 
        </ul>
    </nav>    
</header>
    <div class="hero"></div> 
    <div>
        <h3 class="center">Nos catégories de recettes</h3>
        <form class="middle" action="./Recettes/recipe-create.php" method="post"> 
            <label for="categorie">Catégorie</label> 
                <select required>
                    <option value="">Choisis ta catégorie</option>
                    <?php foreach($select as $row) { ?>
                    <option value=""><?= $row['categorie'];?></option>
                    <option hidden value=""><?= $row['id'];?></option>                    
                    
                    <?php }?>
                </select>
                <a href="recipe-create.php?id=<?= $row['id'];?>" class="bouton">continuer</a>
            <!--<input type="submit" class="bouton" name="submit" value="Continuer">
        </form>
    </div>
</body>
</html>