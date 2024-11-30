<?php
    $a = 98;
    $b = 69;

    function printVal(){
        global $a, $b;
        $a += 2;
        echo "$a $b <br>";
    }

    printVal();
    echo "$a $b <br>";

    echo var_dump($GLOBALS); echo "<br>";
    echo var_dump($GLOBALS["a"]); echo "<br>";
?>