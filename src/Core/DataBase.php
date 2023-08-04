<?php
namespace Core;
use PDO;
use Core\Route;

class DataBase{
    public $connection;
    protected $stmt;

    public function __construct($config,$username,$password){
        $this->connection=new PDO("mysql:".http_build_query($config,'',';'),$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ]);
    }
    
    public function query($str,$params=[]){
        $this->stmt=$this->connection->prepare($str);
        $this->stmt->execute($params);
        return $this;
    }
    public function find(){
        return $this->stmt->fetch();
    }
    public function get(){
        return $this->stmt->fetchAll();
    }
    public function findOrFail(){
        $result=$this->find();
        if($result)
            return $result;
        Route::abort(403);
    }
}