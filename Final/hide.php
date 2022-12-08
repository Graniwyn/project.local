<?php
require_once('CProducts.php');
$obCProducts = new CProducts;
$obCProducts->hide($_POST['id']);
