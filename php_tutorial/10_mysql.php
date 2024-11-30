<?php
/* 
Ways to connect to a MySQL Database
1. MySQLi extension
2. PDO
*/
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

if (!$conn) die("Sorry we failed to connect: ". mysqli_connect_error($conn));
else echo "Connection was successful <br>";

// create new database
$sql = "CREATE DATABASE dipe2";
$result = mysqli_query($conn, $sql);

if($result) echo "The db is created successfully. <br>";
else echo "The db is not created due to: ". mysqli_errno($conn). "<br>";

// create table in created database, go for next file

?>