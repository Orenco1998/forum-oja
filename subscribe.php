<?php

include 'base.php';

$name = $_POST['name'];
$firstname = $_POST['firstname'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$checkPassword = md5($_POST['checkpassword']);
$action = $_POST['action'];



    $query = "INSERT INTO user (name, firstName, nickname, email, password) values ('".$name."','".$firstname."','".$nickname."','".$email."','".$password."')";
    if(!($dbResult = mysqli_query($dbLink, $query)))
    {
        echo 'Erreur de requête<br/>';
// Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
    }else{
        echo '<a href="../forum-oja/index.php"> Se connecter';
    }