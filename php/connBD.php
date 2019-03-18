<?php
header('Content-Type: text/html; charset=utf-8');

$servidor = "localhost";
$user = "root";
$pass = "";
$dbName = "sir";
$conn = mysqli_connect($servidor, $user, $pass, $dbName);

if (!$conn){
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>
