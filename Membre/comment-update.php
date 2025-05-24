<?php

require_once('../Classe/CRUD.php');

$crud = new CRUD;
$update = $crud->update('commentaire', $_POST);
$update = $crud->update('commentairerecette', $_POST);

if($update){
    header('location:./comment-index.php');
}else{
    echo "error";
}
?>