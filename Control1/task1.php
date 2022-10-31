<?php
function str_split_unicode($str, $l = 0)
{
    if ($l > 0) {
        $ret = array();
        $len = mb_strlen($str, "UTF-8");
        for ($i = 0; $i < $len; $i += $l) {
            $ret[] = mb_substr($str, $i, $l, "UTF-8");
        }
        return $ret;
    }
    return preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
}
$mainText = " Алгоритм — конечная совокупность точно заданных правил решения некоторого класса задач или набор инструкций, описывающих порядок действий исполнителя для решения определённой задачи. В старой трактовке вместо слова «порядок» использовалось слово «последовательность», но по мере развития параллельности в работе компьютеров слово «последовательность» стали заменять более общим словом «порядок». Независимые инструкции могут выполняться в произвольном порядке, параллельно, если это позволяют используемые исполнители.";
$mainText = trim($mainText);
$someString = str_split_unicode($mainText);
$shift = 3;
for ($i = 0; $i < count($someString); $i++) {
    $codedString[] = mb_chr(mb_ord($someString[$i]) + $shift);
}
$finalString = "";
foreach ($codedString as $v) $finalString .= $v;
var_dump($finalString);
