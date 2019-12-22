<?php

require 'base.php';

$user = $_GET['user_id'];

$delete = "DELETE FROM user WHERE user_id = '".$user."'";
echo $delete;
$res = mysqli_query($dbLink,"$delete");
if (!($dbResult = mysqli_query($dbLink, $delete))) {
    header( 'location:listUser.php?error=1');
} else {
    header( 'location:listUser.php');
}
