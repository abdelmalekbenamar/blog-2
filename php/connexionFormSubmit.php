<?php
session_start();
include_once("../classes/classes.php");


$user1 = new User();
$user1->setPass($_POST["pass"]);
$user1->setMail($_POST["mail"]);

$result = $user1->userConnection();



