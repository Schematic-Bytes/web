<?php
    if(isset($_COOKIE["user"])){
        echo "Welcome ". $_COOKIE["user"];
        echo "<br>";
    } else {
        setcookie("user", "Arun", time() + 3600);
        echo "Welcome guest!";
    }
?>
