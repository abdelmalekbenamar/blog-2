

<div class="menuResponsive absolute left-[-250px] duration-[0.3s] transition-[left] ease-[ease-in] z-[100]">
<nav class="nav w-[250px] h-screen bg-[bisque]">
    <div class="fermer text-right cursor-pointer p-2.5 border-b-[black] border-b border-solid">X</div>
    <ul>
        <li class="li text-center p-2.5 border-b-[black] border-b border-solid"><a href="./index.php">Accueille</a></li>
        <li class="li text-center p-2.5 border-b-[black] border-b border-solid"><a href="./parametres.php">Paramètres</a></li>
        <li class="li text-center p-2.5 border-b-[black] border-b border-solid"><a href="./ajouterArticle.php">Ajouter Article</a></li>
        <li class="li text-center p-2.5 border-b-[black] border-b border-solid"><a href="./connexion.php">Connexion</a></li>
        <li class="li text-center p-2.5 border-b-[black] border-b border-solid"><a href="#">S'inscrire</a></li>
        <li class="li text-center p-2.5 border-b-[black] border-b border-solid"><a href="#">Déconnexion</a></li>
    </ul>

</nav>
</div>

<div class="menuPrincipal flex justify-between items-center p-[10px]">
<div class="menuPrincipalImages md:hidden">
    <img class="MPHamburger w-[30px] cursor-pointer" src="./assets/images/hamburger-menu.png" alt="">
</div>
<img class="MPLogo h-20" src="./assets/images/logo.png" alt="">
<nav class="navMP hidden md:block text-sm">
    <ul class="listMenuPrincipal flex justify-between">
        <li class="MPLi mx-5 my-0"><a href="./index.php">Accueille</a></li>
        <li class="MPLi mx-5 my-0"><a href="./parametres.php">Paramètres</a></li>
        <li class="MPLi mx-5 my-0"><a href="./ajouterArticle.php">Ajouter Article</a></li>
        <li class="MPLi mx-5 my-0"><a href="./connexion.php">Connexion</a></li>
        <li class="MPLi mx-5 my-0"><a href="#">S'inscrire</a></li>
        <li class="MPLi mx-5 my-0"><a href="#">Déconnexion</a></li>
    </ul>
</nav>
<div>
    <div class="menuInfoSearch flex justify-between items-center w-[110px]">
        <div class="user">username</div>
        <img class="MPSearch h-[30px] cursor-pointer" src="./assets/images/search.png" alt="">
    </div>
</div>

</div>

<form class="chercherArticleForm w-screen absolute bg-[burlywood] top-[-105px] duration-[0.3s] transition-[top] ease-[ease-in]" action="" method="POST">
<input name="articleARecherhcer" class="inputChercherArticle w-full h-[50px] bg-[burlywood] rounded-[10px] border-b-[bisque] border-b border-solid" type="text" placeholder="Rechercher...">
<div class="rechercherFormButtons w-fit mx-auto my-0">
    <button class="submitSearchButton border m-2.5 p-[5px] rounded-[5px] border-solid border-[black]" type="submit">Chercher</button>
    <button class="cancelSearchButton border m-2.5 p-[5px] rounded-[5px] border-solid border-[black]">Annuler</button>
</div>

</form>

