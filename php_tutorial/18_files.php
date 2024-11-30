<?php
    $fptr = fopen("myfile.txt", "r");
    if(!$fptr) die("Please enter valid file name.");
    echo $fptr;
    echo "<br>";

    //$content = fread($fptr, 10);
    //echo $content;
    //echo "<br>";

    $content = fread($fptr, filesize("myfile.txt"));
    fclose($fptr);
    
    echo $content;
    echo "<br>";
?>