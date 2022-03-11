<?php


var_dump($_POST);

$errors = [];

if(empty($_POST["email"])){
    $errors["email"] = "Email cannot be empty!";
}

if(empty($_POST["password"]))
{
    $errors["password-empty"] = "Password cannot be empyt!";
}

if(! empty($errors))
{
    header("location:login.php?errors=".json_encode($errors));
}