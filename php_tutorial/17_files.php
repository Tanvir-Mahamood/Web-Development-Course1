<?php
    //$a = readfile("myfile.txt");
    //echo $a. "<br>";
    //readfile("myfile.txt");

    //readfile("1.jpg");

    $htmlFilePath = 'http://localhost/php_tutorial/files.html';
    $htmlContent = file_get_contents($htmlFilePath);

    echo $htmlContent; // This will output the entire HTML content
    
?>