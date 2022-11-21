<?php
session_start();

$randomnr = rand(10000, 99999);
$_SESSION['capch'] = $randomnr;
$im = imagecreatetruecolor(200, 100);
//цвета:
$white = imagecolorallocate($im, 255, 255, 255);
//$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
//imagefilledrectangle($im, 0, 0, 150, 50, $black);
imagefilledrectangle($im, 0, 0, 200, 100, $white);

$font = __DIR__ . '/arialmt.ttf';


//imagettftext($im, 35, 0, 0, 0, $grey, $font, $randomnr);

imagettftext($im, 35, 0, 25, 50, $black, $font, $randomnr);

header("Expires: Wed, 1 Jan 1997 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Content-type: image/gif");
imagegif($im);
imagedestroy($im);
