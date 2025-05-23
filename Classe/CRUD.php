<?php

Class CRUD extends PDO {
    public function __construct() {
        parent::__construct('mysql:host=localhost; dbname=vegan; port=3306; charset=utf8', 'root', 'root');
    }

    public function select($table, $field = 'id', $order = 'ASC') {
        $sql = "SELECT * FROM $table
        /*JOIN categorie ON categorie.id = $table.idCategorie
        left outer JOIN membre ON membre.id = $table.idMembre*/
        ORDER BY $field $order";
        $stmt = $this->query($sql);
        return $stmt->fetchALL();  
    }

    public function selectNom($table, $field = 'categorie', $order = 'ASC') {
        $sql = "SELECT * FROM $table
        /*JOIN categorie ON categorie.id = $table.idCategorie
        left outer JOIN membre ON membre.id = $table.idMembre*/
        ORDER BY $field $order";
        $stmt = $this->query($sql);
        return $stmt->fetchALL();  
    }

    public function selectId($table, $value, $field = 'id'){
        $sql = "SELECT * FROM  $table WHERE $field = :$field";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$field", $value);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count == 1){
            return $stmt->fetch();
        }else{
            return false;
        } 
    }
    
    public function insert($table, $data){

        //Array ( [name] => Peter [address] => Maisonneuve [phone] => 54654 [zip_code] => h1h1h1 [email] => peter@gmail.com ) INSERT INTO client
        //INSERT INTO client (name, address, phone, zip_code, email) VALUES (:name, :address, :phone, :zip_code, :email)
        //INSERT INTO client (name, address, phone, zip_code, email) VALUES (name, :address, :phone, :zip_code, :email)

        $fieldName = implode(', ', array_keys($data));
        $fieldValue = ":".implode(', :', array_keys($data));
        $sql = "INSERT INTO $table ($fieldName) VALUES ($fieldValue);";
        $stmt = $this->prepare($sql);
        foreach($data as $key=>$value){
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
        return $this->lastInsertId();
    }


    public function update($table, $data, $field = 'id'){
        $fieldName = null;
        foreach($data as $key=>$value){
            $fieldName .= "$key = :$key, ";
        }
        $fieldName = rtrim($fieldName, ', ');
        $sql = "UPDATE $table SET $fieldName WHERE $field = :$field";
        $stmt = $this->prepare($sql);
        foreach($data as $key=>$value){
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count==1){
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }else{
            print_r($stmt->errorInfo());
        }
    }


    public function delete($table, $value, $url, $field='id'){
        $sql = "DELETE FROM $table WHERE $field = :$field";
        //return $sql;
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$field", $value);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count==1){
            header("location:$url.php");
        }else{
            print_r($stmt->errorInfo());
        }
        
    }


}



?>