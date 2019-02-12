<?php

class Sql extends PDO{
    private $conn;

    public function __construct(){
        $this->conn = new PDO("mysql:host=localhost;dbname=php7","root","");
        $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

    private function setParams($stmt,$parameters = array()){
        foreach($parameters as $key=>$value){
           $this->setParam($stmt,$key,$value);
        }
    }

    private function setParam($statement,$key,$values){
        $statement->bindParam($key,$values);
    }

    public function Query($rawQuery,$params= array()){
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt,$params);
        $stmt->execute();
        return $stmt;
    }


    public function select($rawQuery,$params = array()):array{
        $stmt = $this->Query($rawQuery,$params);
        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}

?>