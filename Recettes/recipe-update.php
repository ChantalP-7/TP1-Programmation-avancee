<?php
    require_once('../Classe/CRUD.php');

    $crud = new CRUD;
    $update = $crud->update('recette', $_POST);
    
    if($update){
        header('location:recipe-index.php');
    }else{
        echo "error";
    }
?>