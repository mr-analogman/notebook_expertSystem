<?php
    session_start();

    require_once("dbconnect.php");
    if (isset($_POST["addLaptops"])) {
      if ((isset($_POST["name"])) && (isset($_POST["model"])) && (isset($_POST["processorName"])) && (isset($_POST["videoCardName"])) && (isset($_POST["volumeRAM"])) && (isset($_POST["volumeROM"])) && (isset($_POST["screenSize"])) && (isset($_POST["opticalDrive"])) && (isset($_POST["WIFI"])) && (isset($_POST["Bluetooth"])) && (isset($_POST["parameterGaming"])) && (isset($_POST["parameterEnergyEff"])) && (isset($_POST["parameterPerfomance"])) && (isset($_POST["parameterPortability"])) && (isset($_POST["parameterDisplay"])) && (isset($_POST["price"]))) {

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

        $sqlRequest = "INSERT INTO `notebooksModels`(`name`, `model`, `processorName`, `videoCardName`, `volumeRAM`, `volumeROM`, `screenSize`, `opticalDrive`, `WIFI`, `Bluetooth`, `parameterGaming`, `parameterEnergyEff`, `parameterPerfomance`, `parameterPortability`, `parameterDisplay`, `price`) VALUES ('$name','$model','$processorName','$videoCardName','$volumeRAM','$volumeROM','$screenSize','$opticalDrive','$WIFI','$Bluetooth','$parameterGaming','$parameterEnergyEff','$parameterPerfomance','$parameterPortability',$parameterDisplay,'$price')";

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
