<?php

class Article{
        
    private $title;
    private $image;
    private $article;
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

    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
    }

    public function getImage(){
        return $this->image;
    }
    public function setImage($image){
        $this->image = $image;
    }

    public function getArticle(){
        return $this->article;
    }
    public function setArticle($article){
        $this->article = $article;
    }

    public function getIdUser(){
        return $this->idUser;
    }
    public function setIdUser($idUser){
        $this->idUser = $idUser;
    }

    //la fonction qui retourne tous les articles du blog
    public function allArticles(){
        $stmt = $this->connection->prepare("SELECT * FROM articles;");
        $stmt->execute();
        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;
    }

    //la fontion qui permet de rechercher des articles de la bare de recherche
    public function searchForm($title){
        $monTitre = "%" . $title . "%";
        $stmt = $this->connection->prepare("SELECT * from articles WHERE title like :title;");
        $stmt->bindParam(":title", $monTitre);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


}