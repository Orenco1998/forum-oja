<?php

$user = 'oren_forum-oja';
$password = 'Institutg4!';
$host = 'mysql-oren.alwaysdata.net';
$nom_base = 'oren_forum-oja';

$dbLink = mysqli_connect($host, $user, $password, $nom_base)
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
$mysqli = new mysqli($host, $user, $password, $nom_base);