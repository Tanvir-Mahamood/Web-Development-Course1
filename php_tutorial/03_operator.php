<?php
/*
Arithmetic
assignment
comparison
logical
*/

    $a = 25;
    $b = 6;
    $c = $a + $b;
    echo $c; echo "<br>";
    echo "The sum is " . ($a + $b) . "<br>";
    echo "The sub is " . ($a - $b) . "<br>";
    echo "The mul is " . ($a * $b) . "<br>";
    echo "The div is " . ($a / $b) . "<br>";
    echo "The rem is " . ($a % $b) . "<br>";
    echo "The exp is " . ($a ** $b) . "<br>";
    echo "The inc is " . (++$a) . "<br>";

    echo var_dump($a == $b);
    echo var_dump($a <> $b); // not equal
    echo "<br>";
    // boolean logical operation
    $x = true;
    $y = false;

    echo "And operation ";
    echo var_dump($x and $y);
    echo "<br>";

    echo "And operation ";
    echo var_dump($x && $y);
    echo "<br>";

    echo "Or operation ";
    echo var_dump($x or $y);
    echo "<br>";

    echo "Or operation ";
    echo var_dump($x || $y);
    echo "<br>";

    echo "Not operation ";
    echo var_dump(!$x);
    echo "<br>";

    // bitwise operation
    $x = 13;
    $y = 12;

    echo "And";
    echo ($x & $y);
    echo "<br>";

    echo "And";
    echo ($x | $y);
    echo "<br>";

    echo "And";
    echo ($x ^ $y);
    echo "<br>";

    echo "And";
    echo (~$x);
    echo "<br>";

?>