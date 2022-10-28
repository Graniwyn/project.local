<?php
$string = "test";
//$f = fopen("test1.txt", "w+") or die("Ошибка!");
file_put_contents("test1.txt", $string);
if (!is_dir($string))
    mkdir($string);
chdir("test");
file_put_contents("test2.txt", $string);
chdir("..");
chdir("..");
file_put_contents("test3.txt", $string);
