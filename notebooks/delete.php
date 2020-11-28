<?php
    session_start();

    require_once("dbconnect.php");

    $sqlRequest = 'DELETE FROM `notebooksModels` WHERE `id`='.$_GET["id"];
    $mysqli->real_query($sqlRequest);
    $mysqli->close();

    header("HTTP/1.1 301 Moved Permanently");
    header("Location: admin.php");
?>
