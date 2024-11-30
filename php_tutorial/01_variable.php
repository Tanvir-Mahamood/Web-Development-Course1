<?php
    echo "this is tutorial.";
    $name = "Tanvir";
    $income = 200;
    echo "<br>this is $name and his income is $income";
    /*
    PHP data types:
    String
    Integer
    Float
    Boolean
    Object
    Array
    NULL
    */
    echo "<br>";
    $num = 2003062;
    echo $num;
    echo "<br>";
    echo $name;
    echo "<br>";
    echo var_dump($name);
    $name = 1.71;
    echo "<br>";
    echo var_dump($name);

    echo "<br>";
    $frnd = array("foyez", "asif", "shifat", "partho", "habib");
    echo var_dump($frnd);
    echo "<br>";
    echo $frnd[0];
    echo "<br>";
    echo var_dump($frnd[1]);
    echo "<br>";
    //echo $frnd[5];

    $name = NULL;
    echo $name;
    echo var_dump($name);

?>