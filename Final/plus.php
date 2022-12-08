<?php
require_once('CProducts.php');
$obCProducts = new CProducts;
$obCProducts->plusQuantity($_POST['id']);
