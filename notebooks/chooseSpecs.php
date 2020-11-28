<?php
  $pageTitle = " | Specifications";
  require_once("header.php")
?>

<form action="laptopFetch.php" method="post">
  <div class="specsContainer">
    <select class="specsClass" name="name">
      <option value="zero">Выберите производителя ноутбука</option>
      <option value="Apple">Apple</option>
      <option value="Acer">Acer</option>
      <option value="Asus">Asus</option>
    </select>

    <select class="specsClass" name="processor">
      <option value="zero">Выберите производителя процессора</option>
      <option value="Intel">Intel</option>
      <option value="AMD">AMD</option>
    </select>

    <select class="specsClass" name="video">
      <option value="zero">Выберите производителя видеокарты</option>
      <option value="nVidia">nVidia</option>
      <option value="AMD">AMD</option>
      <option value="Intel">Intel</option>
    </select>

    <select class="specsClass" name="RAM">
      <option value="zero">Выберите объём ОЗУ</option>
      <option value="8">8 Гбайт</option>
      <option value="16">16 Гбайт</option>
    </select>

    <select class="specsClass" name="ROM">
      <option value="zero">Выберите объём накопителя</option>
      <option value="128">128 Гбайт</option>
      <option value="256">256 Гбайт</option>
      <option value="512">512 Гбайт</option>
      <option value="1024">1 Тбайт</option>
    </select>

    <select class="specsClass" name="Diagonal">
      <option value="zero">Выберите диагональ экрана</option>
      <option value="13">13,3 дюймов</option>
      <option value="15">15,6 дюймов</option>
      <option value="17">17,3 дюймов</option>
    </select>

    <div class="specsClass">
      <p>Требуется ли Вам Wi-Fi?</p>

      <div class="chooseRadio">
        <div class="chooseRadioClass">
          <input type="radio" name="WIFI" value="1" class="radio"><p class="radio">Да</p>
        </div>
        <div class="chooseRadioClass">
          <input type="radio" name="WIFI" value="0" class="radio"><p class="radio">Нет</p>
        </div>
      </div>
    </div>

    <div class="specsClass">
      <p>Требуется ли Вам Bluetooth?</p>

      <div class="chooseRadio">
        <div class="chooseRadioClass">
          <input type="radio" name="Bluetooth" value="1" class="radio"><p class="radio">Да</p>
        </div>
        <div class="chooseRadioClass">
          <input type="radio" name="Bluetooth" value="0" class="radio"><p class="radio">Нет</p>
        </div>
      </div>
    </div>

    <div class="specsClass">
      <p>Требуется ли Вам дисковод?</p>

      <div class="chooseRadio">
        <div class="chooseRadioClass">
          <input type="radio" name="OpticalDrive" value="1" class="radio"><p class="radio">Да</p>
        </div>
        <div class="chooseRadioClass">
          <input type="radio" name="OpticalDrive" value="0" class="radio"><p class="radio">Нет</p>
        </div>
      </div>
    </div>

    <div class="specsClass">
      <p>Цена</p>

      <div class="price">
        <div class="textPriceClass">
          <p class="textPrice">от</p><input type="text" name="minPrice" class="textPriceInput">
        </div>
        <div class="textPriceClass">
          <p class="textPrice">до</p><input type="text" name="maxPrice" class="textPriceInput">
        </div>
      </div>
    </div>

    <input type="submit" name="fetchLaptopsSpecs" id="fetchLaptops">
    <label for="fetchLaptops">Подобрать ноутбук</label>

  </div>
</form>

<?php
  require_once("footer.php")
?>
