<?php 
session_start();
include_once("./classes/articleClass.php");

$articles = new Article();
$allArticles = $articles->allArticles();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body class="bg-[burlywood]">

    <?php include_once("./php/menu.php") ?>
    <main class="flex flex-wrap gap-7 justify-center p-[30px]">

        <?php
        if(!isset($_GET["articleARecherhcer"])){
         foreach($allArticles as $article){ ?>
        <div class="articleCard w-[300px]">
            <div class="containerArticleImage w-[300px] h-[167px] overflow-hidden flex justify-center items-center">
                <img class="articleImage w-[400px]" src="<?php echo $article["image"]; ?>" alt="">
            </div>
            <h2 class="articleTitle text-xl mx-0 my-[7px]"><a href=""><?php echo $article["title"] ?></a></h2>
            <p class="articleText text-sm"><?php echo $article["article"]; ?></p>
        </div>
        <?php }}else{ 
            $searchResult = $articles->searchForm($_GET["articleARecherhcer"]);
            foreach($searchResult as $result){
            ?>
            <div class="articleCard w-[300px]">
                <div class="containerArticleImage w-[300px] h-[167px] overflow-hidden flex justify-center items-center">
                    <img class="articleImage w-[400px]" src="<?php echo $result["image"]; ?>" alt="">
                </div>
                <h2 class="articleTitle text-xl mx-0 my-[7px]"><a href=""><?php echo $result["title"] ?></a></h2>
                <p class="articleText text-sm"><?php echo $result["article"]; ?></p>
            </div>


        <?php }}  ?>

       

       
    </main>
    


    <script src="./assets/js/indexScript.js"></script>
</body>
</html>