<?php
$databaseHost = 'localhost';
$databaseName = 'simplecrud';
$databaseUsername = 'root';
$databasePassword = 'Anaana123';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$mysqli){
    die("Failed to connect to db: " . mysqli_connect_error());
}
?>