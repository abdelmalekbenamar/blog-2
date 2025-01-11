<?php
class Tag{

    private $tag;
    private $connection;

    public function __construct($tag = null){
        if($tag !== null){
            $this->tag = $tag;
        }

        try{
            $this->connection = new PDO('mysql:host=localhost;dbname=blognum2;charset=utf8', 'root', 'azl,kkk!');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    //fonction qui permet d obtenir tous les tags
    public function allTag(){
        $stmt = $this->connection->prepare("SELECT * FROM tags;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //fonction qui permet de compter tous les tags
    public function countTag(){
        $stmt = $this->connection->prepare("SELECT COUNT(*) nbrTag FROM tags;");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

}