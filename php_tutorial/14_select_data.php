<?php
// lets fetch data from database

$servername = "localhost";
$username = "root";
$password = "";
$database = "dipe2";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) die("Sorry we failed to connect: ". mysqli_connect_error($conn));
else echo "Connection was successful <br>";


$sql = "SELECT * FROM `trip`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo "$num records in database.<br>";

if($num > 0) {
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);

    // while($row = mysqli_fetch_assoc($result)) {
    //     echo var_dump($row);
    //     echo "<br>";
    // }

    while($row = mysqli_fetch_assoc($result)) {
        echo $row['sno']. " Name: ". $row['name']. ".Welcome to ". $row['dest'];
        echo "<br>";
    }
}
echo "<br>";

$sql = "SELECT * FROM `trip` WHERE dest = 'Canada'";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo "$num records in database.<br>";

$no = 1;
if($num > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "Record no:". $no. " ".$row['sno']. " Name: ". $row['name']. ".Welcome to ". $row['dest'];
        echo "<br>";
        $no += 1;
    }
}

// well, we've fetched data. Now, we're going to update data.
$sql = "UPDATE `trip` SET `name` = 'CANADIAN' WHERE `trip`.`dest` = 'Canada'";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br> Number of affected rows: $aff <br>";

if($result) echo "We updated the records successfully.<br>";
else echo "W could not update records successfully <br>";

?>