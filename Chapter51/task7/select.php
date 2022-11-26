<?php
require_once('catalogs.php');
$catalog = new Catalogs;
?>
<option value='0'>Производитель</option>
<?php foreach ($catalog->secondSelect($_GET['id']) as $categories)
{ ?>
    <option value=<?= $categories['id'] ?>><?= $categories['name'] ?></option>
<?php } ?>