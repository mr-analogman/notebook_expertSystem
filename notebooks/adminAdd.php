<?php
	require_once("header.php");
?>

<form class="addForm" action="add.php" method="post">
  <div class="specsClass">
    <p>Производитель</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="name" class="textPriceInput">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Модель</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="model" class="textPriceInput">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Процессор</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="processorName" class="textPriceInput">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Видеокарта</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="videoCardName" class="textPriceInput">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Объём ОЗУ</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="volumeRAM" class="textPriceInput">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Объём накопителя</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="volumeROM" class="textPriceInput">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Диагональ дисплея</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="screenSize" class="textPriceInput">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Дисковод</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="opticalDrive" class="textPriceInput">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>WIFI</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="WIFI" class="textPriceInput">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Bluetooth</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="Bluetooth" class="textPriceInput">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Параметр игровой</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="parameterGaming" class="textPriceInput">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Параметр энергоэффективность</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="parameterEnergyEff" class="textPriceInput">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Параметр производительность</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="parameterPerfomance" class="textPriceInput">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Параметр портативность</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="parameterPortability" class="textPriceInput">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Параметр дисплей</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="parameterDisplay" class="textPriceInput">
      </div>
    </div>
  </div>
  <div class="specsClass">
    <p>Цена</p>

    <div class="price">
      <div class="textPriceClass">
        <input type="text" name="price" class="textPriceInput">
      </div>
    </div>
  </div>

  <input type="submit" name="addLaptops" id="addLaptops">
  <label for="addLaptops">Добавить</label>
</form>

<?php
	require_once("footer.php");
?>
