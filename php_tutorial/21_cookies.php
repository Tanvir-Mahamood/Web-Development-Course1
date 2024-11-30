<?php
    echo "Welcome to cookies<br>";
    // cookies | sessions

    setcookie("category", "Book", time() + 86400, "/");
    echo "The cookie is seted.<br>";
?>