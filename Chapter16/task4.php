<?php
$string = "In mathematics and computer science, an algorithm is a finite sequence of well-defined instructions, typically used to solve a class of specific problems or to perform a computation. Algorithms are used as specifications for performing calculations, data processing, automated reasoning, automated decision-making and other tasks. In contrast, a heuristic is an approach to problem solving that may not be fully specified or may not guarantee correct or optimal results, especially in problem domains where there is no well-defined correct or optimal result.";
$string1 = "123 test string 321";
if (!is_dir("public_html"))
    mkdir("public_html");
file_put_contents("public_html/1.txt", $string);
$f = fopen("public_html/1.txt", "r+") or die("Ошибка!");
fseek($f, 64, SEEK_SET);
echo fread($f, 3);
fseek($f, 8, SEEK_SET);
fwrite($f, $string1);
fclose($f);
