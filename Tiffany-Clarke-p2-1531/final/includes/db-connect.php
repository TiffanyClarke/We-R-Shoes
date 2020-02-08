<?php
// CONNECT TO DB
// data source name
$dsn = "mysql:host=localhost;dbname=final_1531";
$un = "root";
$pw = "";

// PDO stands for PHP DATA OBJECT
try {
    $pdo = new PDO($dsn, $un, $pw);
} catch (PDOException $err) {
    $connectionError = $err->getMessage();
}
?>