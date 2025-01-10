<?php
session_start();
include_once("../classes/articleClass.php");


if(isset($_FILES["imageFile"])){
    echo "hello";
    $fileName = date("YmdHis"); 
    $fileInfo = pathinfo($_FILES["imageFile"]["name"]);
    $fileName .= "." . $fileInfo["extension"];
    move_uploaded_file($_FILES["imageFile"]["tmp_name"], "../assets/images/" . $fileName );
}





$article = new Article();
$article->setArticle($_POST["article"]);
$article->setTitle($_POST["title"]);
$article->setImage($fileName);
$article->setIdUser($_SESSION["userId"]);



$lastInsertId = $article->addArticle();









$keys = array_keys($_POST);



for($i = 2; $i < count($_POST); $i++){
    echo $keys[$i] . "<br>";
    $article->setCategories($keys[$i], $lastInsertId);

}

