<?php
	require_once("header.php");
?>

<?php

session_start();

require_once("dbconnect.php");

$sqlRequest = 'SELECT * FROM `notebooksModels` WHERE `id`='.$_GET["id"];
$result_query = $mysqli->query($sqlRequest);
$laptops = array();
for ($i=0; $i < $result_query->num_rows; $i++) {
  $result_query->data_seek($i);
  $laptops[$i] = $result_query->fetch_object();
}
$mysqli->close();

echo '
<form class="addForm" action="change.php" method="post">
<input type="hidden" name="id" value="'.$laptops[0]->id.'">
  <div class="specsClass">
    <p>Производитель</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="name" class="textPriceInput" value="'.$laptops[0]->name.'">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Модель</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="model" class="textPriceInput" value="'.$laptops[0]->model.'">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Процессор</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="processorName" class="textPriceInput" value="'.$laptops[0]->processorName.'">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Видеокарта</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="videoCardName" class="textPriceInput" value="'.$laptops[0]->videoCardName.'">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Объём ОЗУ</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="volumeRAM" class="textPriceInput" value="'.$laptops[0]->volumeRAM.'">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Объём накопителя</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="volumeROM" class="textPriceInput" value="'.$laptops[0]->volumeROM.'">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Диагональ дисплея</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="screenSize" class="textPriceInput" value="'.$laptops[0]->screenSize.'">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Дисковод</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="opticalDrive" class="textPriceInput" value="'.$laptops[0]->opticalDrive.'">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>WIFI</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="WIFI" class="textPriceInput" value="'.$laptops[0]->WIFI.'">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Bluetooth</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="Bluetooth" class="textPriceInput" value="'.$laptops[0]->Bluetooth.'">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Параметр игровой</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="parameterGaming" class="textPriceInput" value="'.$laptops[0]->parameterGaming.'">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Параметр энергоэффективность</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="parameterEnergyEff" class="textPriceInput" value="'.$laptops[0]->parameterEnergyEff.'">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Параметр производительность</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="parameterPerfomance" class="textPriceInput" value="'.$laptops[0]->parameterPerfomance.'">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Параметр портативность</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="parameterPortability" class="textPriceInput" value="'.$laptops[0]->parameterPortability.'">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Параметр дисплей</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="parameterDisplay" class="textPriceInput" value="'.$laptops[0]->parameterDisplay.'">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Цена</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="price" class="textPriceInput" value="'.$laptops[0]->price.'">
      </div>
    </div>
  </div>

  <input type="submit" name="changeLaptops" id="addLaptops">
  <label for="addLaptops">Сохранить</label>
</form>
';
?>
<?php
	require_once("footer.php");
?>
