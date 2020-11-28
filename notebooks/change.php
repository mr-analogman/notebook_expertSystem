<?php
    session_start();

    require_once("dbconnect.php");
    if (isset($_POST["changeLaptops"])) {
      if ((isset($_POST["name"])) && (isset($_POST["model"])) && (isset($_POST["processorName"])) && (isset($_POST["videoCardName"])) && (isset($_POST["volumeRAM"])) && (isset($_POST["volumeROM"])) && (isset($_POST["screenSize"])) && (isset($_POST["opticalDrive"])) && (isset($_POST["WIFI"])) && (isset($_POST["Bluetooth"])) && (isset($_POST["parameterGaming"])) && (isset($_POST["parameterEnergyEff"])) && (isset($_POST["parameterPerfomance"])) && (isset($_POST["parameterPortability"])) && (isset($_POST["parameterDisplay"])) && (isset($_POST["price"])) && (isset($_POST["id"]))) {
        $id = (int)$_POST["id"];
        $name = $_POST["name"];
        $model = $_POST["model"];
        $processorName = $_POST["processorName"];
        $videoCardName = $_POST["videoCardName"];
        $volumeRAM = (int)$_POST["volumeRAM"];
        $volumeROM = (int)$_POST["volumeROM"];
        $screenSize = (int)$_POST["screenSize"];
        $opticalDrive = (int)$_POST["opticalDrive"];
        $WIFI = (int)$_POST["WIFI"];
        $Bluetooth = (int)$_POST["Bluetooth"];
        $parameterGaming = (int)$_POST["parameterGaming"];
        $parameterEnergyEff = (int)$_POST["parameterEnergyEff"];
        $parameterPerfomance = (int)$_POST["parameterPerfomance"];
        $parameterPortability = (int)$_POST["parameterPortability"];
        $parameterDisplay = (int)$_POST["parameterDisplay"];
        $price = (int)$_POST["price"];

        $sqlRequest = "UPDATE `notebooksModels` SET `name`='$name', `model`='$model', `processorName`='$processorName', `videoCardName`='$videoCardName', `volumeRAM`='$volumeRAM', `volumeROM`='$volumeROM', `screenSize`='$screenSize', `opticalDrive`='$opticalDrive', `WIFI`='$WIFI', `Bluetooth`='$Bluetooth', `parameterGaming`='$parameterGaming', `parameterEnergyEff`='$parameterEnergyEff', `parameterPerfomance`='$parameterPerfomance', `parameterPortability`='$parameterPortability', `parameterDisplay`=$parameterDisplay, `price`='$price' WHERE `id`='$id'";

        $mysqli->real_query($sqlRequest);
        $mysqli->close();
      }
      header("HTTP/1.1 301 Moved Permanently");
      header("Location: admin.php");
    } else {
      unset($_SESSION["root"]);
      header("HTTP/1.1 301 Moved Permanently");
      header("Location: index.php");
    }
?>
