<?php

class Article{
        
    private $title;
    private $image;
    private $article;
    private $idUser;
    private $connection;
    public $comment;

    public function __construct(){
        try{
            $this->connection = new PDO('mysql:host=localhost;dbname=blognum2;charset=utf8', 'root', 'azl,kkk!');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }

        $this->comment = new Comment();

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

    //la fonction qui permet d ajouter un article

    public function addArticle(){
        $stmt = $this->connection->prepare("INSERT INTO articles (title, image, article, idUser) VALUES (:title, :image, :article, :idUser);");
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":image", $this->image);
        $stmt->bindParam(":article", $this->article);
        $stmt->bindParam(":idUser", $this->idUser);
        $stmt->execute();
        return $this->connection->lastInsertId();
        // header("Location: ../index.php");

    }

    //fonction qui permet d'inserer des categories a un article
    public function setCategories($category, $idArticle){
        $stmt = $this->connection->prepare("SELECT * FROM tags WHERE name = :category;");
        $stmt->bindParam(":category", $category);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $idCategory = $result["id"];

        $stmt = $this->connection->prepare("INSERT INTO torepresent (idTag, idArticle) values(:idTag, :idArticle);");
        $stmt->bindParam(":idTag", $idCategory);
        $stmt->bindParam(":idArticle", $idArticle);
        $stmt->execute();
    }

    //la fonction qui permet d afficher un article a partir de son id
    public function displayArticle($id){
        $stmt = $this->connection->prepare("SELECT * FROM articles WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    


}