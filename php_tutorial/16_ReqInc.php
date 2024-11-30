<?php
    include 'dbconnector.php';
    //require 'dbconnector.php';

    $sql = "SELECT * FROM `trip`";
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
?>