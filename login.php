<?php

$email = $_POST['email'];
$password = md5($_POST['password']);


$query = sprintf("SELECT email, password FROM user WHERE email = '".$email."' AND password = '".$password."'");
$res = mysqli_query($dbLink, $query);
var_dump($query);
$nb = 0;
if($tab = mysqli_fetch_array($res)) {

    $_SESSION['login'] = 'ok';
    header('location:listpost.php');
}
else {
    header( 'erreur.php?step=ERROR');
}



