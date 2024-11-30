<?php
// in previous file, we've connected with localhost.
// now we are going to connect localhost=>database

$servername = "localhost";
$username = "root";
$password = "";
$database = "dipe2";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) die("Sorry we failed to connect: ". mysqli_connect_error($conn));
else echo "Connection was successful <br>";

// create a table in newly created database
$sql = "CREATE TABLE `trip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);

if($result) echo "The table is created successfully. <br>";
else echo "The table is not created due to: ". mysqli_errno($conn). "<br>";

?>