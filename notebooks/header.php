<?php
	session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
  <link rel="shortcut icon" href="favicon.ico">
	<title>
    <?php
      echo "kursrach".$pageTitle;
    ?>
  </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div id="header">
        <div id="headLabel">
            <?php
                if (!isset($_SESSION["root"])) {
            ?>

            <a href="index.php" id="headLabelText">Choose your own laptop!</a>

            <?php
                } else {
            ?>

            <p id="headLabelText">Choose your own laptop!</p>

            <?php
                }
            ?>
        </div>

        <div id="headLinks">
            <?php
                if (!isset($_SESSION["root"])) {
            ?>

            <a href="login.php" class="headButtons" id="auth">Авторизация</a>

            <?php
                } else {
            ?>

            <a href="logout.php" class="headButtons" id="logout">Выход</a>

            <?php
                }
            ?>

        </div>

    </div>
