<?php
    // write file (overwrite) in php

    $fptr = fopen("myfile2.txt", "w");
    fwrite($fptr, "ami kosto pete vlobasi,");
    fwrite($fptr, "tai tmr kace cute asi\n");
    fwrite($fptr, "Dipe");
    fclose($fptr);

    $fptr2 = fopen("myfile2.txt", "a");
    fwrite($fptr2, " natok kom koro pio");
    fwrite($fptr2, " cill maira dibo\n");
    fwrite($fptr2, " oi mama na pls\n");
    fclose($fptr2);
?>