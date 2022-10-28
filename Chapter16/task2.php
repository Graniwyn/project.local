<?php
$string = "test";
file_put_contents("test1.txt", $string);
if (!is_dir($string))
    mkdir($string);
chdir("test");
file_put_contents("test2.txt", $string);
chdir("../..");
file_put_contents("test3.txt", $string);
