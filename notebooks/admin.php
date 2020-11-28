<?php
	require_once("header.php");
?>

<?php
    session_start();

    require_once("dbconnect.php");
?>
<a class="adminDBButton" id="addButton" href="adminAdd.php"> Добавить</a>
<?php
$sqlRequest = "SELECT * FROM `notebooksModels`";
$result_query = $mysqli->query($sqlRequest);
$laptops = array();
for ($i=0; $i < $result_query->num_rows; $i++) {
  $result_query->data_seek($i);
  $laptops[$i] = $result_query->fetch_object();
}
$mysqli->close();

echo '<table>';

echo '<tr>

<th>Производитель</th>
<th>Модель</th>
<th>Процессор</th>
<th>Видеокарта</th>
<th>Объём ОЗУ</th>
<th>Объём накопителя</th>
<th>Диагональ дисплея</th>
<th>Дисковод</th>
<th>WIFI</th>
<th>Bluetooth</th>
<th>Параметр игровой</th>
<th>Параметр энергоэффективность</th>
<th>Параметр производительность</th>
<th>Параметр портативность</th>
<th>Параметр дисплей</th>
<th>Цена</th>

</tr>';

foreach ($laptops as $i => $value) {
echo '
<tr>
<td>'.$laptops[$i]->name.'</td>
<td>'.$laptops[$i]->model.'</td>
<td>'.$laptops[$i]->processorName.'</td>
<td>'.$laptops[$i]->videoCardName.'</td>
<td>'.$laptops[$i]->volumeRAM.'</td>
<td>'.$laptops[$i]->volumeROM.'</td>
<td>'.$laptops[$i]->screenSize.'</td>
<td>'.$laptops[$i]->opticalDrive.'</td>
<td>'.$laptops[$i]->WIFI.'</td>
<td>'.$laptops[$i]->Bluetooth.'</td>
<td>'.$laptops[$i]->parameterGaming.'</td>
<td>'.$laptops[$i]->parameterEnergyEff.'</td>
<td>'.$laptops[$i]->parameterPerfomance.'</td>
<td>'.$laptops[$i]->parameterPortability.'</td>
<td>'.$laptops[$i]->parameterDisplay.'</td>
<td>'.$laptops[$i]->price.'</td>
<td><a class="adminDBButton" href="adminChange.php?id='.$laptops[$i]->id.'">Изменить</a></td>
<td><a class="adminDBButton" href="adminDelverify.php?id='.$laptops[$i]->id.'">Удалить</a></td>
</tr>
';
}

echo '</table>';

?>

<?php
	require_once("footer.php");
?>
