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
        <form class="ajouterArticleForm w-[360px] mx-auto my-0" action="" method="POST">

            <label for="titre">Titre d'article :</label>
            <input class="w-full" id="titre" placeholder="Titre d'article" type="text">
            <label for="textArticle">Article :</label>
            <textarea class="w-full" rows="12" name="" placeholder="Text d'article" id="textArticle"></textarea>
            <label for="imageArticle">Image d'article :</label>
            <input class="articleImage" id="imageArticle" type="file">

            <div class="categories flex justify-center gap-[5px] flex-wrap my-5">
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat1">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat1" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat2">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat2" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat3">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat3" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat4">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat4" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat1">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat1" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat2">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat2" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat3">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat3" type="checkbox"></label>
            <label class="categoryLabel flex items-center bg-[bisque] gap-[5px] p-[5px] rounded-[15px]" for="cat4">cat1 <img src="./assets/images/to-add.png" class="categoryImage h-[15px]" alt=""><input hidden id="cat4" type="checkbox"></label>
            </div>
            <button class="ajouterArticleButton border w-[200px] p-[5px] rounded-[5px] border-solid border-[black] block mt-2.5 mb-0 mx-auto" type="submit">Ajouter</button>

        </form>
    </main>
    










    <script src="./assets/js/ajouterArticleScript.js"></script>
    <script src="./assets/js/indexScript.js"></script>
</body>
</html>