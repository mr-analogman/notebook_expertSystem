<?php
  $pageTitle = " | Use";
  require_once("header.php")
?>

<form action="laptopFetch.php" method="post">
  <div class="useContainer">
    <p>Для каких целей Вам нужен ноутбук?</p>
    <select class="useClass" name="use1">
      <option value="gaming">Играть</option>
      <option value="perfomance">Моделирование/монтаж/иные требовательные задачи</option>
      <option value="portability">Брать с собой в дорогу</option>
      <option value="energy">Работать длительное время без подзарядки</option>
    </select>

    <p>Какой параметр является для Вас самым важным?</p>
    <select class="useClass" name="use2">
      <option value="gaming">Графика</option>
      <option value="perfomance">Общая производительность</option>
      <option value="portability">Вес и портативность</option>
      <option value="energy">Долгое время работы от аккумулятора</option>
      <option value="display">Качество дисплея</option>
    </select>

    <p>Ваш основной вид деятельности?</p>
    <select class="useClass" name="use3">
      <option value="gaming display">Игры</option>
      <option value="perfomance display">Монтаж/цветокоррекция</option>
      <option value="perfomance">Офисные программы</option>
      <option value="display">Смотреть фильмы/просматривать интернет страницы</option>
      <option value="perfomance portability">Фриланс</option>
    </select>

    <p>Где Вы чаще всего будете использовать ноутбук?</p>
    <select class="useClass" name="use4">
      <option value="perfomance">Дома/в офисе</option>
      <option value="portability energy">Брать с собой в кафе/университет</option>
      <option value="portability energy display">На улице</option>
    </select>

    <p>На какой срок Вы планируете приобретать ноутбук?</p>
    <select class="useClass" name="use5">
      <option value="zero">1 - 2 года</option>
      <option value="perfomance">3 - 5 лет</option>
      <option value="perfomance energy">6 лет и более</option>
    </select>

    <div class="useClass">
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

    <input type="submit" name="fetchLaptopsUse" id="fetchLaptops">
    <label for="fetchLaptops">Подобрать ноутбук</label>

  </div>
</form>

<?php
  require_once("footer.php");
?>
