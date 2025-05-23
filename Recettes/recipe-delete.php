<?php


if(isset($_POST['id']) && $_POST['id'] != NULL  ){

    $id=$_POST['id'];
    require_once('../Classe/CRUD.php');
    $crud = new Crud;
    $delete = $crud->delete('recette', $id, "recipe-index");

}

?>