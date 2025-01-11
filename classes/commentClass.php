<?php

class Comment{

    private $id;
    private $comment;
    private $idArticle;
    private $idUser;
    private $connection;

    public function __construct(){
        try{
            $this->connection = new PDO('mysql:host=localhost;dbname=blognum2;charset=utf8', 'root', 'azl,kkk!');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    //function qui permet d inserer un comment avec like si inclu dans un article
    public function saveComment($comment, $idUser, $idArticle){
        $stmt = $this->connection->prepare("INSERT INTO comments (comment, idUser, idArticle) VALUES (:comment, :idUser, :idArticle);");

        $stmt->bindParam(":comment", $comment);
        $stmt->bindParam(":idUser", $idUser);
        $stmt->bindParam(":idArticle", $idArticle);

        $stmt->execute();
        header("Location: ../afficherArticle.php?id=$idArticle");
    }

    //fonction qui permet d'afficher tous les commentaires d'un article
    public function displayCommentOfArticle($idArticle){
        $stmt = $this->connection->prepare("SELECT * FROM comments WHERE idArticle = :idArticle");
        $stmt->bindParam(":idArticle", $idArticle);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }

}