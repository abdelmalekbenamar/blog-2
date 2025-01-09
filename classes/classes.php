<?php 

class User{

    private $username;
    private $mail;
    private $pass;
    private $connection;

    public function __construct($mail, $pass, $username = null){

        $this->mail = $mail;
        $this->pass = $pass;
        
        if($username !== null){
            $this->username = $username;

        }

        try{
            $this->connection = new PDO('mysql:host=localhost;dbname=blognum2;charset=utf8', 'root', 'azl,kkk!');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }
    

    public function getUsername(){
        return $this->username;
    }
    public function setUsername($username){
        $this->username = $username;
    }

    public function getMail(){
        return $this->mail;
    }
    public function setMail($mail){
        $this->mail = $mail;
    }

    public function getPass(){
        return $this->pass;
    }
    public function setPass(){
        $this->pass = $pass;
    }

    //la fonction qui permet la cretation d un nouveau user
    public function createNewUser(){
        $stmt = $this->connection->prepare("INSERT INTO users (username, mail, pass, idRule) VALUES (:username, :mail, :pass, 2);");
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':mail', $this->mail);
        $stmt->bindParam(':pass', $this->pass);
        $stmt->execute();
    }

    //la fonction qui permet la connection d un utilisateur7
    public function userConnection(){
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE mail = :mail AND pass = :pass;");
        $stmt->bindParam(':mail', $this->mail);
        $stmt->bindParam(':pass', $this->pass);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


}






