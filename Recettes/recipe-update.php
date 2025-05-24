<?php
    require_once('../Classe/CRUD.php');

    $crud = new CRUD;
    $update = $crud->update('recette', $_POST);
    
    if($update){
        header('location:./recipe-show.php?id='.$update['id']);
    }else{
        echo "error";
    }
?>