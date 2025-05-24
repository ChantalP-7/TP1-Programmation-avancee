<?php
    
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location: member-index.php');
    exit;
}

require_once('../Classe/CRUD.php');

$crud = new CRUD;

$insert = $crud->insert('commentaire', $_POST);
$insert = $crud->insert('commentairerecette', $_POST);

header('location:./comment-show.php');





?>