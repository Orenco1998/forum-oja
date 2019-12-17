<?php

$user = 'oren_forum-oja';
$password = 'Institutg4!';
$host = 'mysql-oren.alwaysdata.net';
$name_database = 'oren_forum-oja';

$dbLink = mysqli_connect($host, $user, $password, $name_database)
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
$mysqli = new mysqli($host, $user, $password, $name_database);