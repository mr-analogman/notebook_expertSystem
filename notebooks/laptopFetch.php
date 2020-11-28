<?php
  $pageTitle = " | Result";
  require_once("header.php")
?>

<?php
    session_start();

    require_once("dbconnect.php");
?>

<?php
  if(isset($_POST["fetchLaptopsSpecs"]) && !empty($_POST["fetchLaptopsSpecs"])){
    $sqlRequest = "SELECT * FROM `notebooksModels` WHERE";

    if (isset($_POST["name"]) && $_POST["name"]!="zero") {
      $name = $_POST["name"];
      $sqlRequest = $sqlRequest." `name`='$name' and";
    }
    if (isset($_POST["processor"]) && $_POST["processor"]!="zero") {
      $processor = $_POST["processor"];
      $sqlRequest = $sqlRequest."  `processorName`='$processor' and";
    }
    if (isset($_POST["video"]) && $_POST["video"]!="zero") {
      $video = $_POST["video"];
      $sqlRequest = $sqlRequest." `videoCardName`='$video' and";
    }
    if (isset($_POST["RAM"]) && $_POST["RAM"]!="zero") {
      $RAM = (int)$_POST["RAM"];
      $sqlRequest = $sqlRequest." `volumeRAM`='$RAM' and";
    }
    if (isset($_POST["ROM"]) && $_POST["ROM"]!="zero") {
      $ROM = (int)$_POST["ROM"];
      $sqlRequest = $sqlRequest." `volumeROM`='$ROM' and";
    }
    if (isset($_POST["Diagonal"]) && $_POST["Diagonal"]!="zero") {
      $Diagonal = (int)$_POST["Diagonal"];
      $sqlRequest = $sqlRequest." `screenSize`='$Diagonal' and";
    }
    if (isset($_POST["WIFI"]) && $_POST["WIFI"]==1) {
      $WIFI = (int)$_POST["WIFI"];
      $sqlRequest = $sqlRequest." `WIFI`='$WIFI' and";
    }
    if (isset($_POST["Bluetooth"]) && $_POST["Bluetooth"]==1) {
      $Bluetooth = (int)$_POST["Bluetooth"];
      $sqlRequest = $sqlRequest." `Bluetooth`='$Bluetooth' and";
    }
    if (isset($_POST["OpticalDrive"]) && $_POST["OpticalDrive"]==1) {
      $OpticalDrive = (int)$_POST["OpticalDrive"];
      $sqlRequest = $sqlRequest." `opticalDrive`='$OpticalDrive' and";
    }
    if (isset($_POST["minPrice"]) && isset($_POST["maxPrice"])) {

      $minPrice = (int)$_POST["minPrice"];
      $maxPrice = (int)$_POST["maxPrice"];
      if ($minPrice!=0 && $maxPrice!=0) {
        $sqlRequest = $sqlRequest." `price` between '$minPrice' and '$maxPrice'";
      }
    }

    $sqlRequest = rtrim($sqlRequest, " and");
    $sqlRequest = rtrim($sqlRequest, " WHERE");

    $result_query = $mysqli->query($sqlRequest);

    $laptops = array();
    for ($i=0; $i < $result_query->num_rows; $i++) {
      $result_query->data_seek($i);
      $laptops[$i] = $result_query->fetch_object();

    }

    $mysqli->close();

    if (count($laptops) > 0) {
        foreach ($laptops as $i => $value) {
        echo $laptops[$i]->name," " , $laptops[$i]->model, " - ", $laptops[$i]->price, "₽", '</br>';
        }
        unset($value);
    } else {
        echo "К сожалению, подходящего ноутбука не нашлось.";
    }

  } else if(isset($_POST["fetchLaptopsUse"]) && !empty($_POST["fetchLaptopsUse"])){
    $gaming = 0;
    $energy = 0;
    $perfomance = 0;
    $portability = 0;
    $display = 0;

    if (isset($_POST["use1"])) {
      if ($_POST["use1"] == "gaming") {
        $gaming += 1;
      } else if ($_POST["use1"] == "perfomance") {
        $perfomance += 1;
      } else if ($_POST["use1"] == "portability") {
        $portability += 1;
      } else if ($_POST["use1"] == "energy") {
        $energy += 1;
      }
    }

    if (isset($_POST["use2"])) {
      if ($_POST["use2"] == "gaming") {
        $gaming += 1;
      } else if ($_POST["use2"] == "perfomance") {
        $perfomance += 1;
      } else if ($_POST["use2"] == "portability") {
        $portability += 1;
      } else if ($_POST["use2"] == "energy") {
        $energy += 1;
      } else if ($_POST["use2"] == "display") {
        $display += 1;
      }
    }

    if (isset($_POST["use3"])) {
      if ($_POST["use3"] == "gaming display") {
        $gaming += 1;
        $display += 1;
      } else if ($_POST["use3"] == "perfomance display") {
        $perfomance += 1;
        $display += 1;
      } else if ($_POST["use3"] == "perfomance") {
        $perfomance += 1;
      } else if ($_POST["use3"] == "display") {
        $display += 1;
      } else if ($_POST["use3"] == "perfomance portability") {
        $perfomance += 1;
        $portability += 1;
      }
    }

    if (isset($_POST["use4"])) {
      if ($_POST["use4"] == "perfomance") {
        $perfomance += 1;
      } else if ($_POST["use4"] == "portability energy") {
        $portability += 1;
        $energy += 1;
      } else if ($_POST["use4"] == "portability energy display") {
        $portability += 1;
        $energy += 1;
        $display += 1;
      }
    }

    if (isset($_POST["use5"])) {
      if ($_POST["use5"] == "perfomance") {
        $perfomance += 1;
      } else if ($_POST["use5"] == "perfomance energy") {
        $perfomance += 1;
        $energy += 1;
      }
    }

    $sqlRequest = "SELECT * FROM `notebooksModels` WHERE `parameterGaming` >= '$gaming' and `parameterEnergyEff` >= '$energy' and `parameterPerfomance` >= '$perfomance' and `parameterPortability` >= '$portability' and `parameterDisplay` >= '$display'";

    if (isset($_POST["minPrice"]) && isset($_POST["maxPrice"])) {

      $minPrice = (int)$_POST["minPrice"];
      $maxPrice = (int)$_POST["maxPrice"];
      if ($minPrice!=0 && $maxPrice!=0) {
        $sqlRequest = $sqlRequest." and `price` between '$minPrice' and '$maxPrice'";
      }
    }

    $result_query = $mysqli->query($sqlRequest);

    $laptops = array();
    for ($i=0; $i < $result_query->num_rows; $i++) {
      $result_query->data_seek($i);
      $laptops[$i] = $result_query->fetch_object();

    }

    $mysqli->close();

    if (count($laptops) > 0) {
        foreach ($laptops as $i => $value) {
        echo $laptops[$i]->name," " , $laptops[$i]->model, " - ", $laptops[$i]->price, "₽", '</br>';
        }
        unset($value);
    } else {
        echo "К сожалению, подходящего ноутбука не нашлось.";
    }

  } else {
    echo "Вы зашли на эту страницу напрямую! Вернитесь на главную страницу.";
  }

?>

<?php
  require_once("footer.php")
?>
