<?php

include_once("../classes/classes.php");

if(isset($_POST["username"]) && isset($_POST["mail"]) && isset($_POST["pass"])){
    $user1 = new User($_POST["username"], $_POST["mail"], $_POST["pass"]);
    $user1->createNewUser();
    header("Location: ../connexion.php");
}