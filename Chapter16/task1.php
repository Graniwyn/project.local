<?php
$temp = 0;
$f = fopen("12345.csv", "r+") or die("Ошибка!");
for ($i = 0; $data = fgetcsv($f, 0, ";"); $i++) {
    if (!isset($data))
        break;
    if ($data[0] === $_SERVER['REMOTE_ADDR']) {
        $data[1] = date("Y-m-d H:i:s");
        $data[2] += 1;
        $data[2] = strval($data[2]);
        $temp = 1;
    }
    echo "IP: ", $data[0], " ", "DATE: ", $data[1], " ", "Count: ", $data[2], "<br />";
    $tempArray[] = $data;
}
ftruncate($f, 0);
fseek($f, 0, SEEK_SET);
if ($temp === 0) {
    $tempArray[] = [$_SERVER['REMOTE_ADDR'], date("Y-m-d H:i:s"), "1"];
}
foreach ($tempArray as $t) {
    fputcsv($f, $t, ";");
}
fclose($f);
