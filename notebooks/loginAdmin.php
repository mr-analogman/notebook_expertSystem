<?php
session_start();
if (isset($_POST["rootPass"]) && isset($_POST["rootSubmit"])) {
  $rootPass = $_POST["rootPass"];
  if ($rootPass == "root") {
    $_SESSION["root"] = "root";
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: admin.php");
  } else {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: index.php");
  }
} else {
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: index.php");
}
 ?>
