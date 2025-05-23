<?php
    
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location: recipe-index.php');
    exit;
}

require_once('../Classe/CRUD.php');

$crud = new CRUD;

$insert = $crud->insert('recette', $_POST);

header('location:recipe-show.php?id='.$insert);

?>