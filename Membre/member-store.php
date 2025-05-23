<?php
    
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location: member-index.php');
    exit;
}

require_once('../Classe/CRUD.php');

$crud = new CRUD;

$insert = $crud->insert('membre', $_POST);

header('location:./member-show.php?id='.$insert);





?>