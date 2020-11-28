<?php
    session_start();

    unset($_SESSION["root"]);

    header("HTTP/1.1 301 Moved Permanently");
    header("Location: index.php");
?>
