<?php
    $name = "Tanvir is an Engineer";
    echo $name;
    echo "<br>";
    echo "Hi bro " . "Length is " . strlen($name);
    echo "<br>";
    echo str_word_count($name);
    echo "<br>";
    echo strrev($name);
    echo "<br>";
    echo strpos($name, "is");
    echo "<br>";
    echo str_replace("Tanvir", "Tanvir Mahamood", $name);
    echo "<br>";
    echo str_repeat($name, 3);
    echo "<br>";
    
    echo "<pre>";
    echo rtrim("        tanvir      ");
    echo "<br>";
    echo ltrim("        tanvir      ");
    echo "</pre>";
?>