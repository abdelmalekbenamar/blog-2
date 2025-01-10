<?php
session_start();


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

    
        <div class="partieDroite w-[calc(100vw_-_80px)] mt-[55px] p-[10px] overflow-y-auto h-[70vh]">

            <div class="md:flex md:justify-between">
                <button class="bg-[blue] text-[white] p-[5px] rounded-[5px] m-[5px]">Ajouter</button>

            </div> 

            <table class="w-full border-spacing-0">
                <thead class="bg-[coral] font-[bolder]">
                    <td class="border p-2.5 border-solid border-[black]">Catégories</td>
                    <td class="border p-2.5 border-solid border-[black]">Action</td>
                </thead>


                <tr>
                    
                    <td class="border p-2.5 border-solid border-[black]">Catégorie 1</td>
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerArticle bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerArticle bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>

                <tr>
                    
                    <td class="border p-2.5 border-solid border-[black]">Catégorie 1</td>
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerArticle bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerArticle bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>

                <tr>
                    
                    <td class="border p-2.5 border-solid border-[black]">Catégorie 1</td>
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerArticle bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerArticle bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>

                <tr>
                    
                    <td class="border p-2.5 border-solid border-[black]">Catégorie 1</td>
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerArticle bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerArticle bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>

                <tr>
                    
                    <td class="border p-2.5 border-solid border-[black]">Catégorie 1</td>
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerArticle bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerArticle bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>

                <tr>
                    
                    <td class="border p-2.5 border-solid border-[black]">Catégorie 1</td>
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerArticle bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerArticle bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>

                <tr>
                    
                    <td class="border p-2.5 border-solid border-[black]">Catégorie 1</td>
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerArticle bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerArticle bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>

                <tr>
                    
                    <td class="border p-2.5 border-solid border-[black]">Catégorie 1</td>
                    <td class="border p-2.5 border-solid border-[black]">
                        <button class="editerArticle bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        <button class="supprimerArticle bg-[red] text-[white] p-[5px] rounded-[5px]">Supprimer</button>
                    </td>
                </tr>




            </table>

        </div>
    
    </main>



    <form class="editerCategorieForm hidden w-[360px] bg-[linear-gradient(45deg,burlywood,chocolate)] absolute left-[calc(50%_-_180px)] p-2.5 rounded-[10px] top-[200px]" action="" method="POST">

        <input name="categorieId" hidden type="text">
        <label for="titre">Catégorie :</label>
        <input class="w-full" name="nouvelleCategorie" type="text">

        <div class="flex justify-center">
            <button class="modifierArticleButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto" type="submit">Enregistrer</button>
            <button class="annulerModifButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto">Annuler</button>
        </div>
    </form>



    <form class="supprimerCategorie hidden Form w-[360px] bg-[linear-gradient(45deg,burlywood,chocolate)] absolute left-[calc(50%_-_180px)] p-2.5 rounded-[10px] top-[200px]" action="" method="POST">
        <p class="text-center text-[17px] p-[15px]">Êtes-vous sûr de supprimer cette catégorie ?</p>
        <input class="hidden" name="idCategorieASupprime" type="text">
        <div class="flex justify-center">
            <button class="modifierCategorieButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto" type="submit">Supprimer</button>
            <button class="annulerSuppButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto">Annuler</button>
        </div>
    </form>


    <form class="ajouterCategorieForm hidden w-[360px] bg-[linear-gradient(45deg,burlywood,chocolate)] absolute left-[calc(50%_-_180px)] p-2.5 rounded-[10px] top-[200px]" action="" method="POST">

        <label for="titre">Catégorie :</label>
        <input class="w-full" name="nouvelleCategorie" type="text">

        <div class="flex justify-center">
            <button class="modifierArticleButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto" type="submit">Ajouter</button>
            <button class="annulerModifButton border w-[100px] p-[5px] rounded-[5px] border-solid border-[black] mt-2.5 mb-0 mx-auto">Annuler</button>
        </div>
    </form>











    <script src="./assets/js/indexScript.js"></script>
    
</body>
</html>