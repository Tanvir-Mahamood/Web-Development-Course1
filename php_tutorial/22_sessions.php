<?php
    // used to manage information across difference pages

    // verify the user login info
    session_start();
    $_SESSION['username'] = "Dipe";
    $_SESSION['favCat'] = "Books";

    echo "We have saved your session";

?>