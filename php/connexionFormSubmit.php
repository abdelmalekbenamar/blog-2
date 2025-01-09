<?php
session_start();
include_once("../classes/classes.php");


$user1 = new User($_POST["mail"], $_POST["pass"]);

$result = $user1->userConnection();
if($result["mail"] == $_POST["mail"] && $result["pass"] == $_POST["pass"]){
    $_SESSION["username"] = $result['username'];
    $_SESSION["userId"] = $result["id"];
    $_SESSION["userRule"] = $result["idRule"];
    header("Location: ../index.php");

}