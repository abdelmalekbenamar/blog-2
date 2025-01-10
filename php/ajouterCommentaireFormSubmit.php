<?php
session_start();

include_once("../classes/likeClass.php");


$like = new Like();

if(isset($_POST["like"])){
    $like->saveArticleLikes($_POST['idArticle'], $_SESSION["userId"]);
    header("Location: ../afficherArticle.php?id={$_POST['idArticle']}");
}

