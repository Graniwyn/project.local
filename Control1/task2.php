<?php
$numbers = "8 ( 123) 456-5678;8912345678;+ 7 (495)-122-45-78;+79101234567;8 573 932 09 87; +7 495 123-45-67; 8(111) 222-33-44;";
$numbers = str_replace(" ", "", $numbers);
$numbers = str_replace("(", "", $numbers);
$numbers = str_replace(")", "", $numbers);
$numbers = str_replace("-", "", $numbers);
$numbers = str_replace("+7", "8", $numbers);
var_dump($numbers);
