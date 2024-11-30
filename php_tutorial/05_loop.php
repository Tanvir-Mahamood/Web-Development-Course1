<?php
    echo "while loop <br>";
    $i = 0;
    while($i < 5)
    {
        echo $i + 1;
        echo "<br>";
        $i++;
    }

    echo "for loop <br>";
    for ($i=0; $i < 5; $i++) { 
        # code...
        echo $i + 1;
        echo "<br>";
    }

    echo "do-while loop <br>";
    $i = 0;
    do {
        # code...
        echo $i+1;
        echo "<br>";
        $i++;
    } while ($i < 5);

    $arr = array("c", "c++", "java", "python");
    for ($i=0; $i < count($arr); $i++) { 
        echo $arr[$i];
        echo "<br>";
    }
    foreach ($arr as $value) {
        echo "$value <br>";
    }
?>