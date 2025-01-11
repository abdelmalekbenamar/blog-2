<?php

include_once("../classes/classes.php");

if(isset($_POST["username"]) && isset($_POST["mail"]) && isset($_POST["pass"])){
    $user1 = new User($_POST["username"], $_POST["mail"], $_POST["pass"]);
    $user1->setUsername($_POST["username"]);
    $user1->setMail($_POST["mail"]);
    $user1->setPass($_POST["pass"]);
    $user1->createNewUser();
    header("Location: ../connexion.php");
}