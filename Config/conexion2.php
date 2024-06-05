<?php

$dataBase = "mysql:dbname=parcialclase;host=127.0.0.1";
$user = "root";
$pass = "";

try {

    $dbh = new PDO($dataBase, $user, $pass);

}

catch (Exception $e) {

    die("Lo sentimos, hubo un problema :(");

}

?> 