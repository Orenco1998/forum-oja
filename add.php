<?php

session_start();
if(isset($_SESSION['email']) && isset($_SESSION['password']))
    {
        include 'base.php';


        $title = $_POST['title'];
        $message = $_POST['editor'];
        echo $message;
        $query = 'SELECT user_id FROM user WHERE email=\'' . $_SESSION['email'] . '\' AND password =\'' . $_SESSION['password'] . '\'';
        $res = mysqli_query( $dbLink,"$query");
        while($tab = mysqli_fetch_array($res)){
            $user_id = $tab['user_id'];
        }

        $query = 'INSERT INTO post (title, message, post_date, user_id) VALUES (\'' . $title . '\', \'' . $message . '\', \'' . date('Y-m-d') . '\', ' . $user_id . ')';
        if (!($dbResult = mysqli_query($dbLink, $query))) {
            header('location:listpost.php?error=1');
        } else {
            header('location:listpost.php');

        }

    }else{
    header('location:index.php?error=3');
}

