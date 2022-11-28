<?php
require_once('catalogs.php');
$catalog = new Catalogs;
?>
<!DOCTYPE html>
<html lang='ru'>

<head>
  <title>Двойной выпадающий список</title>
  <meta charset='utf-8'>
</head>

<body>
  <select id='first'>
    <option value='0'>Тип устройства</option>
    <?php foreach ($catalog->firstSelect() as $categories)
    { ?>
      <option value=<?= $categories['id'] ?>><?= $categories['name'] ?></option>
    <?php } ?>
  </select>
  <select id='second' disabled='disabled'>
    <option value='0'>Производитель</option>
  </select>
  <input id="delivery" type="checkbox"> </input>
  <label for="delivery">Доставить на дом</label>
  <div id="deliveryFields" hidden>
    Регион
    <input type="text"></input>
    <br>
    Город
    <input type="text"></input>
    <br>
    Улица
    <input type="text"></input>
    <br>
    Дом
    <input type="text"></input>
    <br>
    Квартира
    <input type="text"></input>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="functions.js"></script>
</body>

</html>