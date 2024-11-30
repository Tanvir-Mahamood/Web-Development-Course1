<?php
// in previous file, we've connected with localhost. then created table.
// now we are going to insert data on that table

$servername = "localhost";
$username = "root";
$password = "";
$database = "dipe2";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) die("Sorry we failed to connect: ". mysqli_connect_error($conn));
else echo "Connection was successful <br>";

// insert data to the table 'trip' on database 'dipe2'
/*$sql = "INSERT INTO `trip` (`sno`, `name`, `dest`) VALUES ('1', 'Tanvir', 'Australia')";
$result = mysqli_query($conn, $sql);

if($result) echo "The record has been inserted successfully. <br>";
else echo "The record has not been inserted : ". mysqli_errno($conn). "<br>";*/

$sql = "INSERT INTO `trip` (`name`, `dest`) VALUES ('Dipe', 'USA')";
$result = mysqli_query($conn, $sql);

if($result) echo "The record has been inserted successfully. <br>";
else echo "The record has not been inserted : ". mysqli_errno($conn). "<br>";

?>