<?php

$host = "db"; //localhost
$db = "lamp";
$user = "example";
$pass = "example";
$pdo = null;

try{
    $database = 'mysql:host=' . $host . ';port=3306;dbname=' . $db;
    $pdo = new PDO($database, $user, $pass);
    echo nl2br("Success: A proper connection to MySQL was made!\nThe docker database is great.");
} catch(PDOException $e) {
    echo nl2br("Error: Unable to connect to MySQL. Error:\n $e");
}

$pdo = null;
