<?php

function login($email, $password)

{
    $dbLink = null;
    require 'base.php';

    $query = sprintf("SELECT email, password FROM user WHERE email = '" . $email . "' AND password = '" . $password . "'");

    $res = mysqli_query($dbLink, $query);
    $nb = 0;
    if ($tab = mysqli_fetch_array($res)) {

        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        header('location:listpost.php');
    } else {
        header('location:index.php?error=1');
    }
}