<?php

require_once('../Classe/CRUD.php');

$crud = new CRUD;
$update = $crud->update('membre', $_POST);

if($update){
    header('location:member-index.php');
}else{
    echo "error";
}
?>