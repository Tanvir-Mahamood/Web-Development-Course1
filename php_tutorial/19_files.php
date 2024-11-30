<?php
    $fptr = fopen("myfile.txt", "r");
    // echo fgets($fptr); echo "<br>";
    // echo fgets($fptr); echo "<br>";
    // echo fgets($fptr); echo "<br>";
    // echo var_dump(fgets($fptr)); echo "<br>";

    // echo fgets($fptr); echo "<br>";
    // echo var_dump(fgets($fptr)); echo "<br>";

    // print sentence by sentence
    /*while ($a=fgets($fptr)) {
        echo $a. "<br>";
    }
    echo "End of file <br>";*/

    // print character by character
    /*while ($a=fgetc($fptr)) {
        echo $a. "<br>";
    }
    echo "End of file <br>";*/

    // print word by word
    /*while ($a=fgetc($fptr)) {
        if($a == " ") echo "<br>";
        echo $a;
    }
    echo "End of file <br>";*/

    // Write a programe which reads the content of a file until full-stop has been occured.
    while ($a=fgetc($fptr)) {
        if($a == ".") {
            break;
        }
        echo $a;
    }
    fclose($fptr);
    echo "End of file <br>";
?>