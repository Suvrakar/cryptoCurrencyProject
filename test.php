<?php

$user='root';
$pass='';
$db='testdb';

$db=mysqli_connect('localhost', $user, $pass, $db) or die("Not connected");

echo("Great Work");




?>