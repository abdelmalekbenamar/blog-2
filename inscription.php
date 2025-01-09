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
    <form class="connexionForm w-[360px] h-[400px] flex flex-col items-center justify-center m-auto" action="./php/inscriptionForm.php" method="POST">

        <input placeholder="Username" name="username" class="m-[10px] w-full h-[50px] bg-[burlywood] rounded-[10px] border-b-[bisque] border-b border-solid"  type="text">
        <input placeholder="Email" name="mail" class="m-[10px] w-full h-[50px] bg-[burlywood] rounded-[10px] border-b-[bisque] border-b border-solid"  type="email">


        <input placeholder="Password" name="pass" class="w-full h-[50px] bg-[burlywood] rounded-[10px] border-b-[bisque] border-b border-solid m-[10px]" type="password">
        <button class="submitConnexionForm border w-[200px] m-2.5 p-[5px] rounded-[5px] border-solid border-[black]" type="submit">Inscription</button>
    </form>
</main>


    <script src="./assets/js/indexScript.js"></script>
</body>
</html>