<?php
$id=$_POST['id'];
require_once('../Classe/CRUD.php');
$crud = new Crud;
$delete = $crud->delete('member', $id, "member-index");
?>