<?php
    $favCol = array(
        'shubham' => 'red', 
        'rohan' => 'green', 
        'harry' => 'red',
        0 => 'zero');
    
        echo $favCol['harry'];
        echo "<br>";
        echo $favCol[0]; echo "<br>";
        foreach ($favCol as $key => $value) {
            echo "<br>favourite color of $key is $value";
        }



    echo "<br><br> Multidimentional arrays<br>";
    $multi = array(
        array(2,5,7,8),
        array(1,2,3,1),
        array(4,5,0,1)
    );

    echo var_dump($multi);  echo "<br>";
    echo $multi[0][0];      echo "<br>";

    for ($i=0; $i < count($multi); $i++) { 
        //echo var_dump($multi[$i]); echo "<br>";
        for ($j=0; $j < count($multi[$i]); $j++) { 
            echo $multi[$i][$j];
            echo ' ';
        }
        echo "<br>";
    }
    echo "<br>";
    foreach ($multi as $row) {
        foreach ($row as $value) {
            echo $value . " ";
        }
        echo "<br>";
    }
?>