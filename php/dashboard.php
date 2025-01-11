            <div class="articles">
                <img class="w-[25px] block mx-auto my-0" src="./assets/images/articles.png" alt="">
                <p><a href="./parametreArticles.php">Articles</a></p>
            </div>
            <div class="commentaires">
                <img class="w-[25px] block mx-auto my-0" src="./assets/images/comments.png" alt="">
                <p><a href="./parametreCommentaires.php">Commentaires</a></p>
            </div>

            <?php if($_SESSION["userRule"] == 1){ ?>
            <div class="utilisateurs">
                <img class="w-[25px] block mx-auto my-0" src="./assets/images/users.png" alt="">
                <p><a href="./parametreUsers.php">Utilisateurs</a></p>
            </div>
            <div class="categories">
                <img class="w-[25px] block mx-auto my-0" src="./assets/images/category.png" alt="">
                <p><a href="./parametreCategories.php">Catégories</a></p>
            </div>
            <?php } ?>