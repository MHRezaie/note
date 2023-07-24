<?php

class DataBase{
    public $connection;

    public function __construct($config,$username,$password){
        $this->connection=new PDO("mysql:".http_build_query($config,'',';'),$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ]);
    }
    
    public function query($str,$params=[]){
        $stmt=$this->connection->prepare($str);
        $stmt->execute($params);
        return $stmt;
    }
}