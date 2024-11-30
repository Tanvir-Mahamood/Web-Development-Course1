<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dipe2";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) die("Sorry we failed to connect: ". mysqli_connect_error($conn));
else echo "Connection was successful <br>";

$sql = "DELETE FROM `trip` WHERE `trip`.`dest` = 'BD'";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);

echo "Number of affected rows: $aff <br>";

if($result) echo "Deleted successfully <br>";
else echo "Not deleted <br>";

?>