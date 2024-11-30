<?php
    function processMarks($marksArr) {
        $sum = 0;
        foreach ($marksArr as $val) {
            $sum += $val;
        }
        return $sum / count($marksArr);
    }

    $rohan = array(34, 98, 45, 12, 98, 93);
    $sumMarks = processMarks($rohan);
    echo "total avg marks is $sumMarks <br>";

    $harry = [34, 98, 45, 99, 98, 93];
    $sumMarks2 = processMarks($harry);
    echo "total avg marks is $sumMarks2 <br>";

$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
$today = date("m.d.y");                         // 03.10.01
$today = date("j, n, Y");                       // 10, 3, 2001
$today = date("Ymd");                           // 20010310
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
$today = date("H:i:s");                         // 17:16:18
$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)

$today = date("F j, Y, g:i a"); 
echo "$today <br>";

$year = date("Y");
echo "Copiright $year | All rights reserved.";


?>