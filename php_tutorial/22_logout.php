<?php
    // destroy session
    session_start();
    session_unset();
    session_destroy();
    echo "You have loged out";

?>