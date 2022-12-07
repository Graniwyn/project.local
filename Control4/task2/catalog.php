<?php
require_once('plants.php');
$obPlants = new Plants;
$obPlants->download_page('http://control-work.3jz.ru/api/xml/plant_catalog.xml');
$sXML = file_get_contents('products/plant_catalog.xml');
$oXML = new SimpleXMLElement($sXML);
foreach ($oXML->PLANT as $oEntry)
{
    echo "Распространенное название растения:" . $oEntry->COMMON . "<br>";
    echo "Латинское название растения:" . $oEntry->BOTANICAL . "<br>";
    echo "Период цветения:" . $oEntry->ZONE . "<br>";
    echo "Место размещения растения:" . $oEntry->LIGHT . "<br>";
    echo "Стоимость:" . $oEntry->PRICE . "<br>";
    echo "В наличии:" . $oEntry->AVAILABILITY . "<br>";
    echo "<br>", "<br>";
}
