<?php
session_start();

include_once("../classes/likeClass.php");
include_once("../classes/commentClass.php");
include_once("../classes/articleClass.php");


$like = new Like();
$comment = new Article();

if(isset($_POST["like"])){
    $like->saveArticleLikes($_POST['idArticle'], $_SESSION["userId"]);
}

if(isset($_POST["comment"])){
    $comment->comment->saveComment($_POST["comment"], $_SESSION["userId"], $_POST["idArticle"]);
}

