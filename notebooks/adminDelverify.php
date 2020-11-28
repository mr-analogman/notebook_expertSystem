<?php
	require_once("header.php");
?>

<?php
  echo '
  <div class="chooseContainer">
    <p>Вы уверены, что хотите удалить?</p>
    <a class="chooseTestButton" href="admin.php">Нет</a>
    <a class="chooseTestButton" href="delete.php?id='.$_GET['id'].'">Да</a>
  </div>
  ';
?>

<?php
	require_once("footer.php");
?>
