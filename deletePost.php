<?php

require 'base.php';

$post = $_GET['post_id'];

    $delete = "DELETE FROM post WHERE post_id = '".$post."'";
    echo $delete;
    $res = mysqli_query($dbLink,"$delete");
    printf("Message d'erreur:", mysqli_errno($dbLink));
    header("Refresh:0;url=listpost.php");
