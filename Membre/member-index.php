<?php

require_once('../Classe/CRUD.php');

$crud = new CRUD;

$select  = $crud -> select('membre');
//print_r($select);


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
            <li><a href="../Recettes/recipe-index.php">Accueil</a></li>
            <li><a href="./member-index.php">Membres</a></li>
            <li><a href="./member-create.php">S'inscrire</a></li> 
        </ul>
    </nav>    
</header>
    <main>
    <div class="hero"></div> 
     <h1>Membre</h1>
     <div class="grille">
        <table>
            <tr>
                <th>Prénom</th>            
                <th>Nom</th>            
                <th>Surnom</th> 
                <th>Profil</th>           
                
            </tr>
            <?php
            foreach($select as $row) {

                    ?>
                    <tr>
                    <td><?= $row['prenom'] ?> </td>
                    <td><?= $row['nom'] ?> </td>
                    <td><?= $row['pseudonyme'] ?></td>
                        <td><a href="./member-show.php?id=<?= $row['id']?>"><?= $row['prenom']?></a></td>
                    </tr>
                    <?php
            }
            ?>
            </table>
         
        <br><br>
        <a href="./member-create.php" class="Bouton">Nouveau membre</a>
        </div>
    </main>
</body>
</html>