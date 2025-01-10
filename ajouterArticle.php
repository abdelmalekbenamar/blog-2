<?php
session_start();
include_once("./classes/tagClass.php");
$tags = new Tag();
$allTag = $tags->allTag();

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

    <main>
        <form class="ajouterArticleForm w-[360px] mx-auto my-0" action="./php/ajoutArticleFormSubmit.php" method="POST" enctype="multipart/form-data">

            <label for="titre">Titre d'article :</label>
            <input required name="title" class="w-full" id="titre" placeholder="Titre d'article" type="text">
            <label for="textArticle">Article :</label>
            <textarea required class="w-full" rows="12" name="article" placeholder="Text d'article" id="textArticle"></textarea>
            <label for="imageArticle">Image d'article :</label>
            <input required name="imageFile" class="articleImage" id="imageArticle" type="file">

            <div class="categories flex justify-center gap-[5px] flex-wrap my-5">
                <?php foreach($allTag as $tag){ ?>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="id<?php echo $tag["id"] ?>"><?php echo $tag["name"]; ?> <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="id<?php echo $tag["id"]; ?>" name="<?php echo $tag["name"]; ?>" value="<?php echo $tag["id"]; ?>" type="checkbox"></label>
            <?php } ?>
            </div>
            <button class="ajouterArticleButton border w-[200px] p-[5px] rounded-[5px] border-solid border-[black] block mt-2.5 mb-0 mx-auto" type="submit">Ajouter</button>

        </form>
    </main>
    










    <script src="./assets/js/ajouterArticleScript.js"></script>
    <script src="./assets/js/indexScript.js"></script>
</body>
</html>