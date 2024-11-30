<?php
    // start the session and get data
    session_start();
    if(isset($_SESSION['username'])) {
        echo "Welcome ". $_SESSION['username']; echo "<br>";
        echo "Category: ". $_SESSION['favCat']; echo "<br>";
        echo "We have saved your session";
    }
    else {
        echo "Plz log in to continue.";
    }
    

?>