<?php

include 'base.php';

$name = $_POST['name'];
$firstname = $_POST['firstname'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$checkPassword = md5($_POST['checkpassword']);

$succes = mail($email, 'Inscription au forum Oja', 'Vote compte à bien été enregistré.');

function valid_email($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}
if(!valid_email($email)){
    echo "Invalid email address.";
}else{
    if($succes) {
        echo 'Votre mail à bien été envoyé';
        $query = "INSERT INTO user (name, firstName, nickname, email, password) values ('" . $name . "','" . $firstname . "','" . $nickname . "','" . $email . "','" . $password . "')";
        if (!($dbResult = mysqli_query($dbLink, $query))) {
            header( 'location:index.php?error=2');
        } else {
            require 'login-private.php';

            login($email, $password);
        }
    }}


