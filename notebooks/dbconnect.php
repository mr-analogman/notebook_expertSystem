<?php
    header('Content-Type: text/html; charset=utf-8');

    $server = "localhost";
    $username = "root";
    $password = "root";
    $database = "expertSystemNotebooks"; 

    $mysqli = new mysqli($server, $username, $password, $database);

    if (mysqli_connect_errno()) {
        echo "<p><strong>Ошибка подключения к БД</strong>. Описание ошибки: ".mysqli_connect_error()."</p>";
        exit();
    }

    $address_site = "index.php";
    $mysqli->set_charset('utf8');
?>
