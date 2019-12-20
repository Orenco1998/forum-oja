<?php
/**
 * Created by PhpStorm.
 * User: orencohen
 * Date: 28/10/2019
 * Time: 17:31
 */

$email = $_POST['email'];
$password = md5($_POST['password']);

require 'login-private.php';


login($email, $password);




