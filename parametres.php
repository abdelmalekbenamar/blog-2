<?php
session_start();

require_once("./classes/commentClass.php");
require_once("./classes/articleClass.php");
require_once("./classes/tagClass.php");
require_once("./classes/classes.php");


$article = new Article();
$tag = new Tag();
$users = new User();

if($_SESSION["userRule"] == 2){
    $nbrArticleUser = $article->nbrArticleUtilisateur($_SESSION["userId"]);

}else if ($_SESSION["userRule"] == 1){
    $nbrAllArticles = $article->nbrAllArticles();

}

$nbrTag = $tag->countTag();
$nbrUsers = $users->nbrUsers();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body class="bg-[burlywood]">
    <?php include_once("./php/menu.php") ?>

    <main class="flex justify-between">
        <div class="menuDashboard w-[80px] md:w-[100px] h-[500px] bg-[linear-gradient(-90deg,#ff7f50,burlywood)] text-center flex flex-col justify-around text-xs rounded-[10px] md:mt-[50px]">
            <?php include_once("./php/dashboard.php"); ?>
        </div>

    
        <div class="partieDroite flex justify-around w-[calc(100vw_-_80px)] pt-[100px] flex-wrap">
            <?php if($_SESSION["userRule"] == 1){ ?>
            <div class="userCard h-[150px] w-[300px] bg-[linear-gradient(45deg,burlywood,chocolate)] p-5 rounded-[10px]">
                <h2>Users</h2>
                <div class="userCardInfo mt-[20px] flex justify-around items-center">
                    <img class="cardImage w-[60px]" src="./assets/images/users.png" alt="">
                    <span class="text-[28px]"><?php echo $nbrUsers["nbrUsers"]; ?></span>
                </div>
            </div>
            <?php } ?>

            <div class="userCard h-[150px] w-[300px] bg-[linear-gradient(45deg,burlywood,chocolate)] p-5 rounded-[10px]">
                <h2>Articles</h2>
                <div class="userCardInfo mt-[20px] flex justify-around items-center">
                    <img class="cardImage w-[60px]" src="./assets/images/articles.png" alt="">
                    <span class="text-[28px]">
                        <?php 
                            if($_SESSION["userRule"] == 2){
                                echo $nbrArticleUser["nbrArticle"];
                            
                            }else if ($_SESSION["userRule"] == 1){
                                echo $nbrAllArticles["nbr"];
                            
                            }
                        ?>
                    </span>
                </div>
            </div>

            <div class="userCard h-[150px] w-[300px] bg-[linear-gradient(45deg,burlywood,chocolate)] p-5 rounded-[10px]">
                <h2>Catégories</h2>
                <div class="userCardInfo mt-[20px] flex justify-around items-center">
                    <img class="cardImage w-[60px]" src="./assets/images/category.png" alt="">
                    <span class="text-[28px]"><?php echo $nbrTag["nbrTag"]; ?></span>
                </div>
            </div>

        </div>
    
    </main>















    <script src="./assets/js/indexScript.js"></script>
    
</body>
</html>