<?php
require_once('CProducts.php');
$obCProducts = new CProducts;
$obCProducts->minusQuantity($_POST['id']);
