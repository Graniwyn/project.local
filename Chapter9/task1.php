<?php
$i=$_GET['string'];
switch ($i) {
    case "test1":
        echo 1;
        break;
    case "test2":
        echo 2;
        break;
    case "test5":
        echo 3;
        break;
    default:
       echo 4;
}